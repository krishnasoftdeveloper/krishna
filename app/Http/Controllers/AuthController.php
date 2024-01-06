<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class AuthController extends Controller
{
    //

    public function loginAdmin(Request $request)
    {
        $customer = new User();
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $customer = User::where('email', '=', $request->email)->first();
        if ($customer) {
            if (FacadesHash::check($request->password, $customer->password)) {
                $request->Session()->put('loginId', $customer->id);
                return redirect('dashboard');
            } else {
                return back()->with('error', 'Password does not matches');
            }
        } else {
            return back()->with("error", "Email is not register");
        }
    }


    public function viewLogin(){
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('viewlogin',compact('data'));
    }


    public function dashboard()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('index', compact('data'));
    }


    public function logout()
    {
        if (Session::has('loginId')) {
            Session::forget('loginId');

            return view('viewlogin');
        }
    }
}
