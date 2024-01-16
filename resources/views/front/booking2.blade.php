<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Headers · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script defer src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://webpixels.io/templates">

    <!-- font awesome icon link -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/7d08567bd4.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7d08567bd4.js" crossorigin="anonymous"></script>



    <style>
        body {
            font-family: 'Halaney Demo', sans-serif;
            min-height: 75rem;
            padding-top: 4.5rem;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>
    <style>
        .custom-width {
            max-width: 1366px;
        }

        ::placeholder {
            color: #fff !important;
        }

        .input-field {
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
            display: block;
            width: 40%;
            font-weight: 400;
            color: ;
            background-color: #fff;
            background-clip: padding-box;
            border: 2px solid black;

        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            color: rgba(0, 0, 0, 0);
            opacity: 1;
            display: block;
            background-repeat: no-repeat;
            width: 25px;
            height: 25px;
            border-width: thin
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            left: 5%;
        }

        input::-webkit-datetime-edit-fields-wrapper {
            position: relative;
            left: 10%;
        }

        input::-webkit-datetime-edit {
            position: relative;
            left: 10%;
        }

        .bg-mask {
            background-image: url(./images/Group\ 237.png), url(./images/Mask\ Group\ 2.png);
            width: auto;
            height: 400px;
            background-repeat: no-repeat;
            background-position: 225px 90px, top left;
            background-size: auto 300px;
        }

        .bg-mask-2 {
            background-image: url(./images/Mask\ Group\ 4.png);
            width: auto;
            height: 450px;
            background-repeat: no-repeat;
            background-position: 5px 30px, center;
            background-size: auto 400px;
        }

        .bg-cover {
            background-image: url(./images/Group\ 228.svg), url(./images/bg-cover.jpg);
            background-position: bottom left, left top;
            background-repeat: no-repeat;
            background-size: 30%, cover;
            padding: 10rem;
            width: 100%;
            height: auto;

        }

        .bg-multiple {
            background-image: url(./images/avatars/1.png), url(./images/avatars/2.png), url(./images/avatars/3.png), url(./images/avatars/4.png);
            width: auto;
            height: 450px;
            background-repeat: no-repeat;
            background-position: 5px 30px, center;
            background-size: auto 800px;
        }

        .bg-banner {
            background-image: url(./images/Group\ 3974.png), url(./images/Group\ 3975.svg);
            width: auto;
            height: 1000px;
            background-repeat: no-repeat;
        }

        .dropdown .dropdown-toggle::after {
            margin-left: 16px;
            /* Adjust the distance as needed */
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="headers.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="breadcrumbs.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md fixed-top border-bottom d-block pt-0" style="background-color: #fff;">
            <div class="container-fluid" style="background-image: url(./images/banner.svg);">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                      <img src="./images/Icon material-call.svg" alt="twbs" width="16" height="16"
                      class="flex-shrink-0">
                      <p class="mb-0 text-start">xx xxx xxx xx</p>
                    </a>
                  </li>
      
                  <li>
                    <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                      <img src="./images/Icon material-email.svg" alt="twbs" width="16" height="16"
                      class="flex-shrink-0">
                      <p class="mb-0 text-start">loremisum@gmail.com</p>
                    </a>
                  </li>
                </ul>
                <!-- <ul class="nav">
                  <li class="nav-item">
                    <a href="#" class="nav-link link-body-emphasis px-2 active align-items-center d-flex gap-2"
                      aria-current="page">
                      <img src="./images/Icon metro-profile.svg" alt="twbs" width="16" height="16"
                        class="flex-shrink-0">
                      <p class="mb-0 text-start">Login</p>
                    </a>
                  </li>
        
                  <p class="align-items-center mt-2 text-start">/</p>
        
                  <li class="nav-item">
                    <a href="#" class="nav-link link-body-emphasis px-2">Register</a>
                  </li>
                </ul> -->
                <ul class="navbar-nav mb-2 mb-md-0 align-items-center">
                  <li class="mt-1">
                    <a href="#" class="nav-link link-body-emphasis px-2 active align-items-center d-flex gap-2"
                      aria-current="page">
                      <img src="./images/Icon metro-profile.svg" alt="twbs" width="16" height="16"
                        class="flex-shrink-0">
                      <p class="mb-0 text-start">Login</p>
                    </a>
                  </li>
                  <li class="align-items-center mt-2 text-start">/</li>
                  <li class="nav-item">
                    <a href="#" class="nav-link link-body-emphasis mt-1">Register</a>
                  </li>
                </ul>
      
              </div>
            </div>
            <div class="container-fluid">
              <a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <img class="me-4" src="./images/yourtrippal LOGO..-01@2x.png" width="100" height="32" role="img">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a href="bus_booking.html" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                      <img src="./images/Icon awesome-bus-alt.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                      <p class="mb-0 text-start">Bus Ticket</p>
                    </a>
                  </li>
      
                  <li>
                    <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                      <img src="./images/Icon awesome-train.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                      <p class="mb-0 text-start">Train Ticket</p>
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-md-0">
                  <li class="mt-1">
                    <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                      <img src="./images/Icon awesome-search.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                      <img src="./images/Icon awesome-headset.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                      <p class="mb-0 text-start">HELP</p>
                    </a>
                  </li>
                </ul>
      
              </div>
            </div>
            <!-- <div class="container-fluid">
                <a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                  <img class="me-4" src="./images/yourtrippal LOGO..-01@2x.png" width="100" height="32" role="img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                  aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                      <a href="bus_booking.html" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                        <img src="./images/Icon awesome-bus-alt.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                        <p class="mb-0 text-start">Bus Ticket</p>
                      </a>
                    </li>
        
                    <li>
                      <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                        <img src="./images/Icon awesome-train.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                        <p class="mb-0 text-start">Train Ticket</p>
                      </a>
                    </li>
                  </ul>
                  <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="mt-1">
                      <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                        <img src="./images/Icon awesome-search.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-2">
                        <img src="./images/Icon awesome-headset.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                        <p class="mb-0 text-start">HELP</p>
                      </a>
                    </li>
                  </ul>
        
                </div>
              </div> -->
          </nav>
    </header>
    <main>
        <div class="container mb-2 border-bottom">
            <div class="row row-cols-md-1 p-2 align-items-center">
                <div class="col-md-6 p-0">
                    <ul class="nav p-2 align-items-center">
                        <li class="nav-item">
                            <span>Departure</span>
                            <img src="./images/Icon awesome-check.svg" width="8px" height="8px" alt="">
                        </li>
                        <li class="nav-item ms-4">
                            <a href="#" class="nav-link link-body-emphasis px-2 active align-items-center d-flex gap-2"
                                aria-current="page">
                                <img src="./images/Icon material-keyboard-arrow-right.svg" width="16px" height="16px" alt="">
                                <p class="mb-0 text-start">Trip Summary</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 p-0">
                    <ul class="nav d-flex justify-content-end">
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link link-body-emphasis px-2 active align-items-center d-flex gap-2"
                                aria-current="page">
                                <img src="./images/Icon material-keyboard-arrow-right.svg" width="16px" height="16px" alt="">
                                <p class="mb-0 text-start">Checkout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row border">
                <div class="col-md-4">
                    <div class="dropdown">
                        <button class="btn border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Travel Mode
                        </button>
                        <ul class="dropdown-menu" style="padding-right: 2.5rem;">
                            <li class="dropdown">
                                <button class="btn border-0 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <a class="dropdown-item" href="#">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <div class="align-items-center">
                                                <img src="./images/Icon awesome-bus-alt-1.svg" alt="twbs"
                                                    width="16" height="16" class="flex-shrink-0">
                                                <label class="form-check-label" for="flexCheckDefault">Buses</label>
                                            </div>
                                        </div>
                                    </a>
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">CoachRun</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">CoachRun</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">CoachRun</label>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">CoachRun</label>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">CoachRun</label>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">CoachRun</label>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="container border-top border-bottom mb-2">
                        <div class="row row-cols-md-1 p-2">
                            <div class="col-md-6">
                                <div class="btn-group btn-xs dropend">
                                    <button type="button" class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #FF7F00;">
                                        SORT BY
                                      </button>
                                      <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Day</a></li>
                                          <li><a class="dropdown-item" href="#">Month</a></li>
                                      </ul>
                                </div>
                                
                            </div>
                            <div class="col-md-6 p-0">
                                <ul class="nav p-2">
                                    <li class="list-group-item" style="margin-left: 10rem;">
                                        <small>Showing <span class="fw-bold">10</span> trips out of <span class="fw-bold">148</span></small>
                                    </li>
                                </ul>
                            </div>
            
                        </div>
                        <div>
                            <div class="card mb-2" style="background-color: #fafafa;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center">
                                            <img src="./images/Image 4.png" alt="bestbuses" height="16px">
                                            <a href="#"
                                                class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-0">
                                                <img src="./images/Icon material-star-1.svg" alt="twbs"
                                                    width="16" height="16" class="flex-shrink-0">
                                                <p class="mb-0 text-start text-black">4.5 stars</p>
                                            </a>
                                        </div>
                                        <div>
                                            <p class="fw-bold mb-0" style="color: #011950;"><span
                                                    style="color: #ff7f00;">$</span>30.00</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between ps-0 align-items-center flex-wrap">
                                        <div class="d-flex align-items-center mb-2">
                                            <img src="./images/Icon awesome-bus-alt-1 circle.svg"
                                                alt="bestbuses" height="48px" width="48px">
                                            <div class="ms-2">
                                                <p class="fw-bold mb-0 fs-5" style="color: #011950;">1.45 PM</p>
                                                <p class="mb-0 text-start text-black">South Station</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <img src="./images/Line 13.svg" alt="bestbuses" width="24px">
                                            <p class="mb-0 mx-1">4h 25m</p>
                                            <img src="./images/Group 3998.svg" alt="arrow" height="8px">
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="ms-2">
                                                <p class="fw-bold mb-0 fs-5" style="color: #011950;">6.10 PM</p>
                                                <p class="mb-0 text-start text-black">NY Moynihan Station</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="btn text-white fw-medium px-4 py-2" role="button"
                                                aria-current="true"
                                                style="background-color: #011950; letter-spacing: 0.050rem; font-size: 10px;">
                                                SELECT
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-neutral dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
        
                                        <a href="#" class="btn ms-2" role="button" aria-current="true"
                                            style="border: 1px solid #011950; border-radius: 20px; letter-spacing: 0.050rem; font-size: 10px;">
                                            0 Transfer
                                        </a>
                                        <a href="#" class="btn ms-2" role="button" aria-current="true"
                                            style="border: 1px solid #011950; border-radius: 20px; letter-spacing: 0.050rem; font-size: 10px;">
                                            E-Ticket
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="background-color: #fafafa;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center">
                                            <img src="./images/Image 4.png" alt="bestbuses" height="16px">
                                            <a href="#"
                                                class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-0">
                                                <img src="./images/Icon material-star-1.svg" alt="twbs"
                                                    width="16" height="16" class="flex-shrink-0">
                                                <p class="mb-0 text-start text-black">4.5 stars</p>
                                            </a>
                                        </div>
                                        <div>
                                            <p class="fw-bold mb-0" style="color: #011950;"><span
                                                    style="color: #ff7f00;">$</span>30.00</p>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between ps-0 align-items-center flex-wrap">
                                        <div class="d-flex align-items-center mb-2">
                                            <img src="./images/Icon awesome-bus-alt-1 circle.svg"
                                                alt="bestbuses" height="48px" width="48px">
                                            <div class="ms-2">
                                                <p class="fw-bold mb-0 fs-5" style="color: #011950;">1.45 PM</p>
                                                <p class="mb-0 text-start text-black">South Station</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <img src="./images/Line 13.svg" alt="bestbuses" width="24px">
                                            <p class="mb-0 mx-1">4h 25m</p>
                                            <img src="./images/Group 3998.svg" alt="arrow" height="8px">
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="ms-2">
                                                <p class="fw-bold mb-0 fs-5" style="color: #011950;">6.10 PM</p>
                                                <p class="mb-0 text-start text-black">NY Moynihan Station</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="btn text-white fw-medium px-4 py-2" role="button"
                                                aria-current="true"
                                                style="background-color: #011950; letter-spacing: 0.050rem; font-size: 10px;">
                                                SELECT
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-neutral dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
        
                                        <a href="#" class="btn ms-2" role="button" aria-current="true"
                                            style="border: 1px solid #011950; border-radius: 20px; letter-spacing: 0.050rem; font-size: 10px;">
                                            0 Transfer
                                        </a>
                                        <a href="#" class="btn ms-2" role="button" aria-current="true"
                                            style="border: 1px solid #011950; border-radius: 20px; letter-spacing: 0.050rem; font-size: 10px;">
                                            E-Ticket
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    

                </div>
            </div>

        </div>
    </main>
    <footer class="pt-4 my-md-5 pt-md-5 border-top justify-content-center mb-0">
        <div class="container p-3 rounded">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <a href="index.html"
                            class="d-flex align-items-center link-body-emphasis text-decoration-none mb-4">
                            <img class="me-4" src="./images/yourtrippal LOGO..-01@2x.png" width="100"
                                height="32" role="img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-xs-5 row-cols-sm-2 row-cols-md-5 g-4">
                <div class="col">
                    <h6 class="mb-3">TRAVEL</h6>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="bus_booking.html">Bus Tickets</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Train Tickets</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h6 class="mb-3">ENGAGE</h6>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Create Account</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Download App</a>
                        </li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="train_schedule.html">Explore</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">New Routes</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h6 class="mb-3">ABOUT</h6>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">About Us</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Blog</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Price</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">We're Hiring</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h6 class="mb-3">CUSTOMER SERVICES</h6>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Contact Us</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Companies</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms and
                                Conditions</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h6>FOLLOW US</h6>
                    <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none mb-4">
                        <img class="me-4" src="./images/Group 378.svg" width="100" height="32"
                            role="img">
                    </a>
                </div>
            </div>
            <div class="row" style="background-color: #011950;">
                <div class="col-md-12">
                    <div class="row row-cols-sm-1 row-cols-md-2 py-2">
                        <p class="col-md-6 mb-0 text-body-secondary"><span class="text-white">&copy;2023
                                YourTrippal. All Rights Reserved.</span></p>
                        <p class="col-md-6 mb-0 text-body-secondary text-end"><span class="text-white">Terms Of Use
                                | Privacy Policy</span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>