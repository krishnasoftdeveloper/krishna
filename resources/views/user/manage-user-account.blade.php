@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Travel</title>


  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- font Osame -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/7d08567bd4.css" crossorigin="anonymous">

</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="assets/img/yourtrippal LOGO..-01.png" alt="logo">
     
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge badge-number" style="background-color: #FF7F00;">4</span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Lorem Ipsum</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>30 min. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-x-circle text-danger"></i>
            <div>
              <h4>Atque rerum nesciunt</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>1 hr. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-check-circle text-success"></i>
            <div>
              <h4>Sit rerum fuga</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>2 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div>
              <h4>Dicta reprehenderit</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>4 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
          </li>

        </ul><!-- End Notification Dropdown Items -->

      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          <span class="badge  badge-number" style="background-color: #011950;">3</span>
        </a><!-- End Messages Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            You have 3 new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Maria Hudson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>4 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Anna Nelson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>6 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
              <div>
                <h4>David Muldon</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>8 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="dropdown-footer">
            <a href="#">Show all messages</a>
          </li>

        </ul><!-- End Messages Dropdown Items -->

      </li><!-- End Messages Nav -->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">YourTrippal</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>Your Name</h6>
            <span>Your Post</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-gear"></i>
              <span>Account Settings</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
              <i class="bi bi-question-circle"></i>
              <span>Need Help?</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header>
<!-- End Header -->

<!-- ======= Sidebar ======= -->



<!-- End Sidebar-->

  <main id="main" class="main">
  <?php
  if(isset($success))
  echo "Inseted successfully";
  ?>
    <div class="container-fluid">
      <div class="row">
      <div class="col-sm-12 col-md-12 my-3 px-0">
          <div class="d-flex justify-content-between">
            <h4 class="d-inline"><i class="fa-solid fa-people-roof icon"></i> Manage Users </h4>
            <button class="btn float-end Btn_Save" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Add Users</button>
          </div>
        </div>
      </div>
    </div>


    <!-- AddUser -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg" style="background-color: aliceblue !important; border-radius: 7%;">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-sm-6 col-md-6 my-3">
              <h4 class="d-inline">
                <i class="fa-solid fa-user-plus icon"></i>
                <b>Add New Users</b>
              </h4>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid c1 py-3 ">

            <form action="{{url('/save_user_account')}}" method="post" enctype="multipart/form-data">
                                @if(Session::has('success'))
                                              <div class="alert alert-danger">{{ Session::get('success') }}</div>
                                              @endif
                                              @if(Session::has('fail'))
                                              <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                              @endif
            @csrf
            

              <div class="row">

                <div class="  col-sm-12 col-md-4">
                  <div class="col-sm-12 col-md-12 text-center ">
                    <div class="mt-5">
                      <i class="ri-upload-cloud-fill   " style="font-size: 60px;"></i>
                    </div>
                  </div>

                  <div class="col-sm-12  col-md-12" style="line-height: 2rem;   ">
                    <div class="px-3  ">
                      <label for="formFileLg" class="form-label text-center">Drag and Drop assets here
                        <br> <b>or</b></label>

                      <div class="d-flex justify-content-center mx-2 ">
                        <label for="formFileLg" class="custom-file-upload border-0 Btn_Save" style=" font-size: 1.1rem;
                                            font-weight: 600;">
                          Browse
                        </label>
                        <input class="" id="formFileLg" name="image" type="file" style="display: none;">
                      </div>


                    </div>
                  </div>
                </div>

<div class="col-sm-12 col-md-8 mt-3">
                  <div class="row">
                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> First Name :</label><br>
                      @error('name')
                      {{messages}}
                      @enderror

                      <input type="text" class="form-control c2" id="" name="name"  placeholder="  Enter First Name">
                    </div>

                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> Last Name :</label><br>
                      <input type="text" class="form-control c2" name="last_name"  id="" placeholder=" Enter Last Name">
                    </div>


                    <div class=" col-sm-12 col-md-6" style="line-height: 2rem;  ">

                      <label class="" for="specificSizeSelect">Email:</label>
                      <input type="text" class="form-control c2" id=""  name="email"  placeholder=" Enter Email">
                    </div>


                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect">Confirm Password :</label><br>
                      <input type="password" class="form-control c2" id="" name="password"  placeholder=" Password">
                    </div>

                    <div class=" col-sm-12 col-md-6 " style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect">Roll:</label>
                      <select class="form-select c2" id="specificSizeSelect" name="roll"  style="width: 230px;">
                        <option selected>Roll</option>
                        <option value="1">Admin</option>
                        <option value="2">Customer Support</option>
                        <option value="3"></option>
                      </select>
                    </div>

                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect">Contact Number :</label><br>
                      <input type="text" class="form-control c2" id="" name="contact_number"  placeholder=" Enter Contact">
                    </div>

                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> City :</label><br>
                      <input type="text" class="form-control c2" id="" name="city"  placeholder=" Last Name">
                    </div>


                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> State:</label><br>
                      <input type="text" class="form-control c2" name="state"  id="" placeholder=" Enter Email">
                    </div>
                    <div class=" col-sm-12 col-md-12" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> Address:</label><br>
                      <div class="form-floating">
                        <textarea class="form-control c2"  name="address" placeholder="Leave a comment here"
                          id="floatingTextarea"></textarea>
                        <label for="floatingTextarea" class="">Address</label>
                      </div>
                    </div>




                  </div>





                </div>


              </div>
            </div>
            <hr>
            <div class=" float-end d-flex  ">
              <button class="btn-primary Btn_Save mx-2" type="submit">
                Save
              </button>

              <button class="btn-primary Btn_Close ">
                Cancel
              </button>
            </div>
          </div>
        </div>


      </div>
</form>

    </div>
    <!-- AddUser -->


    <!-- edituser -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg" style="background-color: aliceblue !important; border-radius: 7%;">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-sm-6 col-md-6 my-3">
              <h4 class="d-inline">
                <i class="fa-solid fa-user-pen icon"></i>
                <b>Edit Users</b>
              </h4>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid c1 py-3 ">



              <div class="row">

                <div class="  col-sm-12 col-md-4">
                  <div class="col-sm-12 col-md-12 text-center ">
                    <div class="mt-5">
                      <i class="ri-upload-cloud-fill   " style="font-size: 60px;"></i>
                    </div>
                  </div>

                  <div class="col-sm-12  col-md-12" style="line-height: 2rem;   ">
                    <div class="px-3   ">
                      <label for="formFileLg" class="form-label text-center">Drag and Drop assets here
                        <br> <b>or</b></label>

                      <div class="mx-4">
                        <label for="formFileLg" class="custom-file-upload border-0 Btn_Save   " style=" font-size: 1.1rem;
                                        font-weight: 600;">
                          Browse
                        </label>
                        <input class="" id="formFileLg" type="file" style="display: none;">
                      </div>


                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-8 mt-3">
                  <div class="row">
                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> First Name :</label><br>
                      <input type="text" class="form-control c2" id="" placeholder="  Enter First Name">
                    </div>

                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> Last Name :</label><br>
                      <input type="text" class="form-control c2" id="" placeholder=" Enter Last Name">
                    </div>


                    <div class=" col-sm-12 col-md-6" style="line-height: 2rem;  ">

                      <label class="" for="specificSizeSelect">Email:</label>
                      <input type="text" class="form-control c2" id="" placeholder=" Enter Email">
                    </div>


                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect">Confirm Password :</label><br>
                      <input type="password" class="form-control c2" id="" placeholder=" Password">
                    </div>

                    <div class=" col-sm-12 col-md-6 " style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect">Roll:</label>
                      <select class="form-select c2" id="specificSizeSelect" style="width: 230px;">
                        <option selected>Roll</option>
                        <option value="1">Admin</option>
                        <option value="2">Customer Support</option>
                        <option value="3"></option>
                      </select>
                    </div>

                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect">Contact Number :</label><br>
                      <input type="number" class="form-control c2" id="" placeholder=" Enter Contact">
                    </div>

                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> City :</label><br>
                      <input type="text" class="form-control c2" id="" placeholder=" Last Name">
                    </div>


                    <div class="col-sm-12 col-md-6" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> State:</label><br>
                      <input type="text" class="form-control c2" id="" placeholder=" Enter Email">
                    </div>
                    <div class=" col-sm-12 col-md-12" style="line-height: 2rem;  ">
                      <label class="" for="specificSizeSelect"> Address:</label><br>
                      <div class="form-floating">
                        <textarea class="form-control c2" placeholder="Leave a comment here"
                          id="floatingTextarea"></textarea>
                        <label for="floatingTextarea" class="">Address</label>
                      </div>
                    </div>




                  </div>





                </div>


              </div>
            </div>
            <hr>
            <div class=" float-end d-flex  ">
              <button class="btn-primary Btn_Save mx-2">
                Save
              </button>

              <button class="btn-primary Btn_Close ">
                Cancel
              </button>
            </div>
          </div>
        </div>


      </div>
    </div>
    <!-- edituser -->


    <div class="container-fluid c1 my-4 py-2  " style="margin-top: 15px !important">
                                             @if(Session::has('danger'))
                                              <div class="alert alert-danger">{{ Session::get('danger') }}</div>
                                              @endif
                                              @if(Session::has('fail'))
                                              <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                              @endif
      <div style="overflow: auto;">
        <table class="table table-hover  ">
          <thead style="white-space: nowrap;">

            <th> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
            <th scope="col">User Name</th>
            <th scope="col">Email Id</th>
            <th scope="col">Phone No.</th>

            <th scope="col">Joining Date</th>
            <th scope="col">Action</th>

            <th scope="col" style="padding-left: 3rem;">ACTION</th>
            </tr>
          </thead>
          <tbody style="white-space: nowrap;">
          
          @foreach($manage_user_fetch as $u)
            <tr>

              <th> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
              <td><span class=" "></span>{{$u->name}}</td>
              <td><span class=" text-center">{{$u->email}}</span></td>
              <td><span class=" text-center">{{$u->phone_no}}</span></td>
              <td><span class=" text-center">{{$u->created_at}}</span></td>
              <td><span class=" text-center">Pending</span></td>


              <td>
                <div class="parent_div ms-3">


                  <div style="cursor: pointer;" class="edit_icon" aria-label="Example icon button with a menu icon"
                    data-bs-toggle="modal" data-bs-target="#exampleModal2" type="button">
                    <i class="ri-pencil-line"></i>
                  </div>
                  <a href="{{url('/manage_user_delete/')}}/{{$u->id}}">
                  <div style="cursor: pointer;" class="delete_icon" aria-label="Example icon button with a menu icon">

  <i class="ri-delete-bin-6-line "></i>
</div>
                  </a>
                 
                  <div style="cursor: pointer;" class="print_icon" aria-label="Example icon button with a menu icon">
                    <i class="ri-printer-fill"></i>
                  </div>

                </div>
              </td>
            </tr>
@endforeach
          
          
          </tbody>
        </table>
      </div>
      
    </div>

  </main>
  <!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!-- Fontosm link -->
  <script src="https://kit.fontawesome.com/7d08567bd4.js" crossorigin="anonymous"></script>

</body>

</html>
@endsection