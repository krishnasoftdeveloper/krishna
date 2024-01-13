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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

 
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="container-fluid ">

      <div class="row">
          <div class="col-sm-4 col-md-4 my-3">
            
              <h4 class="d-inline"><i class="fa-regular fa-book-copy icon"></i>
                Manage Staff
              </h4>
          </div>


      </div>
  </div>



  <div class="container-fluid c1 py-3 my-2">

  <form action="{{url('/manage')}}" method="post">
    @csrf
  <div class="row">
          <div class=" col-sm-4 col-md-3" style="line-height: 2rem;  ">
              <label class="" for="specificSizeSelect">Your Name:</label>
              <input type="text" class="form-control" name="Name" placeholder="Enter Your Name">
          </div>



          <div class="  col-md-3 col-sm-12" style="line-height: 2rem;  ">

              <label class="" for="specificSizeSelect">Email Address:</label>
              <input type="email" class="form-control" name="Email" placeholder="Enter Your Email">
          </div>

          <div class="  col-md-3 col-sm-12" style="line-height: 2rem;  ">

            <label class="" for="specificSizeSelect">Phone Number:</label>
            <input type="text" class="form-control" name="Phone" placeholder="Enter Your Number">
        </div>

          <div class="col-sm-4 col-md-3" style="line-height: 2rem;  ">

              <label class="" for="autoSizingInputGroup">Booking Date:</label>
              <input type="date" class="form-control" name="Date" id="inputPassword " placeholder="">

          </div>
          <div class=" col-sm-12 col-md-3 mt-3" style="line-height: 2rem;  ">

              <label class="" for="specificSizeSelect">Destination:</label>
              <select class="form-select" id="specificSizeSelect" name="Destination">

                  <option value="1">Paris</option>
                  <option value="2">Tokyo</option>
                  <option value="3">New York</option>
              </select>
          </div>

          <div class="col-sm-4 col-md-3 mt-3" style="line-height: 2rem;  ">

            <label class="" for="autoSizingInputGroup">Number of Travelers:</label>
            <input type="text" class="form-control" name="No_Of_travels" id="inputPassword " placeholder="">

        </div>

        <div class="col-sm-4 col-md-3 mt-3" style="line-height: 2rem;  ">

          <label class="" for="autoSizingInputGroup">From:</label>
          <input type="text" name="Sender" class="form-control" id="inputPassword " placeholder="">

      </div>

      <div class="col-sm-4 col-md-3 mt-3" style="line-height: 2rem;  ">

        <label class="" for="autoSizingInputGroup">To:</label>
        <input type="text" class="form-control" name="receiver" id="inputPassword " placeholder="">

    </div>

      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end me-4 mt-3">
          <button class="btn btn-primary me-md-2 Btn_Save" type="submit">BOOK NOW</button>
      </div>
  </div>
</form>

   <!-- search bar start -->
   <div class="row mt-3 mb-3">
    <div class="col-md-8 col-sm-12 d-flex mt-2">
      <label for="" class="px-1 ">Show</label>
      <select name="" id="" style="font-size: small; height: 4vh;">
        <option value="">10</option>
        <option value="">25</option>
        <option value="">50</option>
        <option value="">100</option>

      </select>

      <label for="" class="px-1 ">Entries </label>
      <div class=" col-sm-12 d-flex">
        <button class="btn btn-primary col-sm-12  Btn_Save mx-1 " type="button"
          style="height: 5vh;">Excel</button>
      </div>
    </div>




    <div class="col-md-4 col-sm-12 mt-2">
      <label for="" class="px-1 ">Search by</label>
      <select name="" id="" style="font-size: small; height: 4vh;">
        <option value="">Name</option>
        <option value="">Email Id</option>
        <option value="">Phone Number</option>

      </select>
    </div>

  </div>

  <!-- search bar end -->
  <div class="container-fluid c1  my-4 py-2">
      <div style="overflow: auto;">
          <table class="table table-hover">
              <thead style="white-space: nowrap;">
                  
                <th> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                  <th scope="col" style="text-align: center;">Name</th>
                  <th scope="col" style="text-align: center;">Email Address</th>
                  <th scope="col" style="text-align: center;">Phone Number</th>
                  <th scope="col " style="text-align: center;">Booking Date</th>
                  <th scope="col " style="text-align: center;">Destination</th>
                  <th scope="col " style="text-align: center;">No. of Travelers</th>
                  <th scope="col " style="text-align: center;">From</th>
                  <th scope="col " style="text-align: center;">To</th>
                  <th scope="col" style="text-align: center; ">Action</th>
                  </tr>
                 
                  </tr>
              </thead>
              <tbody style="white-space: nowrap;">
                  <tr>
                      

                    <th> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                      <td><span class=" text-center">#7678</span></td>


                      <td><span class="text-center">info@gmail.com
                          </span></td>
                     
                          <td>
                              <span class="text-center">1234567890</span>
                          </td>
                          <td>
                              <span class="text-center p-2">28-12-2023</span>
                          </td>
                          <td>
                            <span class="text-center p-2">Paris</span>
                        </td>
                        <td>
                          <span class="text-center p-5">4</span>
                      </td>
                      <td>
                        <span class="text-center p-2">ABCD</span>
                    </td>
                    <td>
                      <span class="text-center p-2">WXYZ</span>
                  </td>

                      <td>
                          <div class="parent_div ">
                              <div style="cursor: pointer;" class="view_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-eye-line"></i>
                              </div>
                              <div style="cursor: pointer;" class="edit_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-pencil-line"></i>
                              </div>

                              <div style="cursor: pointer;" class="delete_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-delete-bin-6-line "></i>
                              </div>
                              <div style="cursor: pointer;" class="print_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-printer-fill"></i>
                              </div>

                          </div>

                      </td>

                  </tr>

                  <tr>
                      

                    <th> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                      <td><span class=" text-center">#7678</span></td>


                      <td><span class="text-center">info@gmail.com
                          </span></td>
                     
                          <td>
                              <span class="text-center">1234567890</span>
                          </td>
                          <td>
                              <span class="text-center p-2">28-12-2023</span>
                          </td>
                          <td>
                            <span class="text-center p-2">Paris</span>
                        </td>
                        <td>
                          <span class="text-center p-5">4</span>
                      </td>
                      <td>
                        <span class="text-center p-2">ABCD</span>
                    </td>
                    <td>
                      <span class="text-center p-2">WXYZ</span>
                  </td>

                      <td>
                          <div class="parent_div ">
                              <div style="cursor: pointer;" class="view_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-eye-line"></i>
                              </div>
                              <div style="cursor: pointer;" class="edit_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-pencil-line"></i>
                              </div>

                              <div style="cursor: pointer;" class="delete_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-delete-bin-6-line "></i>
                              </div>
                              <div style="cursor: pointer;" class="print_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-printer-fill"></i>
                              </div>

                          </div>

                      </td>

                  </tr>

                  <tr>
                      

                    <th> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                      <td><span class=" text-center">#7678</span></td>


                      <td><span class="text-center">info@gmail.com
                          </span></td>
                     
                          <td>
                              <span class="text-center">1234567890</span>
                          </td>
                          <td>
                              <span class="text-center p-2">28-12-2023</span>
                          </td>
                          <td>
                            <span class="text-center p-2">Paris</span>
                        </td>
                        <td>
                          <span class="text-center p-5">4</span>
                      </td>
                      <td>
                        <span class="text-center p-2">ABCD</span>
                    </td>
                    <td>
                      <span class="text-center p-2">WXYZ</span>
                  </td>

                      <td>
                          <div class="parent_div ">
                              <div style="cursor: pointer;" class="view_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-eye-line"></i>
                              </div>
                              <div style="cursor: pointer;" class="edit_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-pencil-line"></i>
                              </div>

                              <div style="cursor: pointer;" class="delete_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-delete-bin-6-line "></i>
                              </div>
                              <div style="cursor: pointer;" class="print_icon"
                                  aria-label="Example icon button with a menu icon">
                                  <i class="ri-printer-fill"></i>
                              </div>

                          </div>

                      </td>

                  </tr>

              </tbody>
          </table>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary me-md-2 Btn_Save" type="button">Save</button>
          <button class="btn btn-primary Btn_Close" type="button">Cancel</button>
      </div>
  </div>

  </main>
  <!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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