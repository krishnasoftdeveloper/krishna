<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\FareController;
use App\Http\Controllers\BusTrainController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('viewlogin');
});


Route::post('/login', [AuthController::class, 'loginAdmin']);


Route::group(['middleware' => 'disable_back_btn'], function () {
Route::group(['middleware' => 'admin_auth'], function () {
  
Route::get('/front-home', [FrontController::class, 'frontHome']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [AuthController::class, 'dashboard']);

Route::get('/my_profile', [ProfileController::class, 'my_profile']);


Route::post('/save_user_account', [UserController::class, 'save_user_account']);
Route::get('/manage_user_account', [UserController::class, 'manage_user_account']);
Route::get('/view-booking-history', [UserController::class, 'view_booking_history']);
Route::get('/manage_user_delete/{id}', [UserController::class, 'manage_user_delete']);



Route::get('/manage_staff', [StaffController::class, 'manage_staff']);
Route::post('/save_staff', [StaffController::class, 'save_staff']);
Route::get('/deletestaff/{id}', [StaffController::class, 'deletestaff']);
Route::get('/editstaff/{id}', [StaffController::class, 'editstaff']);
Route::put('/updatestaff/{id}', [StaffController::class, 'updatestaff']);
Route::post('update_staff', [StaffController::class, 'update_staff'])->name('update_staff');




Route::get('/manage_roll', [StaffController::class, 'manage_roll']);


Route::get('/manage_booking', [BookingController::class, 'manage_booking']);
Route::post('/savebooking', [BookingController::class, 'save_booking']);
Route::get('/deletebooking/{id}', [BookingController::class, 'deletebooking']);
Route::get('/cancel_or_modify', [BookingController::class, 'cancel_or_modify']);


Route::get('/manage_bus_train', [RouteController::class, 'manage_bus_train']);
Route::get('/ManageScheduleRouts', [RouteController::class, 'ManageScheduleRouts']);

Route::get('/seat_availability_spacific', [RouteController::class, 'seat_availability_spacific']);


Route::get('/setTicketPrices', [FareController::class, 'setTicketPrices']);
Route::post('/savesetTicketPrices', [FareController::class, 'savesetTicketPrices']);

Route::get('/ApplyDiscountorOffers', [FareController::class, 'ApplyDiscountorOffers']);
Route::get('/ManageFareCategories', [FareController::class, 'ManageFareCategories']);


Route::get('/Managebuses_trains', [BusTrainController::class, 'Managebuses_trains']);
Route::get('/track_bus_trains', [BusTrainController::class, 'track_bus_trains']);

Route::get('/moniter_payment', [PaymentController::class, 'moniter_payment']);
Route::get('/handle_refunds', [PaymentController::class, 'handle_refunds']);
Route::get('/intregrate_with_paymentGatway', [PaymentController::class, 'intregrate_with_paymentGatway']);

Route::get('/payment_report', [ReportController::class, 'payment_report']);


});

});


Route::get('/stopdetails', [BookingController::class, 'stopdetails']);

