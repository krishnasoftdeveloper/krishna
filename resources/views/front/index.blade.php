<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.118.2">
  <title>YourTrippal</title>

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

  <style>
    body {
      font-family: 'Halaney Demo', sans-serif;
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
      height: 500px;
      background-repeat: no-repeat;
      background-position: 5px 30px, center;
      background-size: auto 450px;
    }

    .bg-cover {
      background-image: url(./images/Group\ 228.svg), url(./images/bg-cover.jpg);
      background-position: bottom center, left top;
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

    .bg-tourist-1 {
      background-image: url(./images/Group\ 3974.png);
      width: auto;
      height: 250px;
      background-repeat: no-repeat;
      background-size: auto 250px;
      padding: 24px 0 0 4px;
    }

    .bg-tourist-2 {
      background-image: url(./images/Group\ 3973.png);
      width: auto;
      height: 250px;
      background-repeat: no-repeat;
      background-size: auto 250px;
      padding: 24px 0 0 4px;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="headers.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="navbar-fixed.css" rel="stylesheet">
</head>

<body>
  <!-- <nav class="border-bottom" style="background-color: #ff7f00;">
      <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
          <li class="nav-item">
            <a href="#" class="nav-link link-body-emphasis px-2 active align-items-center d-flex gap-2"
              aria-current="page">
              <img src="./images/Icon material-call.svg" alt="twbs" width="16" height="16"
                class="flex-shrink-0">
              <p class="mb-0 text-start">xx xxx xxx xx</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link link-body-emphasis px-2 active align-items-center d-flex gap-2"
              aria-current="page">
              <img src="./images/Icon material-email.svg" alt="twbs" width="16" height="16"
                class="flex-shrink-0">
              <p class="mb-0 text-start">loremisum@gmail.com</p>
            </a>
          </li>
        </ul>
        <ul class="nav">
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
        </ul>
      </div>
    </nav> -->
  <!-- <div class="container">
        <ul class="list-group d-flex">
          <li class="list-group-item">
            <a href="#" class="link-body-emphasis px-2 active align-items-center d-flex gap-2"
              aria-current="page">
              <img src="./images/Icon material-call.svg" alt="twbs" width="16" height="16"
                class="flex-shrink-0">
              <p class="mb-0 text-start">xx xxx xxx xx</p>
            </a>
          </li>
          <li class="list-group-item">
            <a href="#" class="nav-link link-body-emphasis px-2 active align-items-center d-flex gap-2"
              aria-current="page">
              <img src="./images/Icon material-email.svg" alt="twbs" width="16" height="16"
                class="flex-shrink-0">
              <p class="mb-0 text-start">loremisum@gmail.com</p>
            </a>
          </li>
          
        </ul>
      </div> -->


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
    <div class="bg-cover mb-4">
      <div class="text-end">
        <h2 class="p-0 m-0" style="color: #00174d !important;">"Find Cheap</h2>
        <h2 class="p-0 m-0">
          <span style="color:#FF7F00; font-size: 3rem;">Bus</span>
          <span style="font-size: 3rem;">Tickets</span>
        </h2>
        <div class=" ">
          <h4 class="p-0 m-0  "> <span> For Your Next </span> </h4>
          <h2 class="p-0 m-0 float-end ">
            <span class="" style="color:#FF7F00; font-size: 3rem; "> trip" </span>
          </h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-start ps-5">
          <div class="card mb-0 border-0 rounded-0">
            <div class="card-body p-0">
              <a href="#" class="btn rounded-2 text-white px-4" role="button" aria-current="true"
                style="background-color: #FF7F00; letter-spacing: 0.075rem;">
                BUSES
              </a>
            </div>
          </div>
          <div class="card mb-0 border-0 rounded-0">
            <div class="card-body p-0">
              <a href="#" class="btn border rounded-2 px-4" role="button" aria-current="true"
                style="background-color: none; color: #011950; border: #707070; letter-spacing: 0.075rem;">
                TRAINS
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container shadow-lg p-3 mb-5 border-0" style="background-color: #011950;">
      <div class="row row-cols-1 row-cols-md-6 g-2 p-4">
        <div class="col-md-2">
          <div class="card rounded-2 shadow-sm bg-transparent">
            <div class="card-body border rounded-1 py-1">
              <p class="mb-0 ms-4 text-white">From</p>
              <a href="#" class="list-group-item list-group-item-action align-items-center d-flex gap-2"
                aria-current="true">
                <img src="./images/Icon awesome-bus-alt-1.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                <input class="form-control mb-0 text-start p-0 border-0 bg-transparent" type="text"
                  placeholder="Lorem Ipsum" aria-label="default input example" style="color: #fff;">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card rounded-3 shadow-sm bg-transparent">
            <div class="card-body border rounded-1 py-1">
              <p class="mb-0 ms-4 text-white">To</p>
              <a href="#" class="list-group-item list-group-item-action align-items-center d-flex gap-2"
                aria-current="true">
                <img src="./images/Icon awesome-bus-alt-1.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                <input class="form-control mb-0 text-start p-0 border-0 bg-transparent" type="text"
                  placeholder="Lorem Ipsum" aria-label="default input example" style="color: #fff;">
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card rounded-3 shadow-sm bg-transparent">
            <div class="card-body border rounded-1 py-1">
              <p class="mb-0 ms-4 text-white">Date</p>
              <a href="#" class="list-group-item list-group-item-action align-items-center d-flex gap-2"
                aria-current="true">
                <img src="./images/Icon material-date-range.svg" alt="twbs" width="16" height="16"
                  class="flex-shrink-0">
                <p class="mb-0 text-start text-white">30/02/2024</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card rounded-3 shadow-sm bg-transparent">
            <div class="card-body border rounded-1 py-1">
              <p class="mb-0 text-white w-100">Return <small>(optional)</small></p>
              <a href="#" class="list-group-item list-group-item-action align-items-center d-flex gap-2"
                aria-current="true">
                <img src="./images/Icon material-date-range.svg" alt="twbs" width="16" height="16"
                  class="flex-shrink-0">
                <p class="mb-0 text-start text-white">30/02/2024</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card rounded-3 shadow-sm bg-transparent">
            <div class="card-body border rounded-1 py-1">
              <p class="mb-0 ms-4 text-white">Travellers</p>
              <a href="#" class="list-group-item list-group-item-action align-items-center d-flex gap-2"
                aria-current="true">
                <img src="./images/Icon ionic-ios-people.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
                <p class="mb-0 text-start text-white">1 Passenger</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <a class="btn p-3" href="#" role="button" style="background-color: #fff;">
            <img src="./images/Icon awesome-search-1.svg" alt="twbs" width="24" height="24" class="flex-shrink-0">
          </a>
        </div>
      </div>
    </div>
    <div class="container rounded-0 p-0 mb-5 rounded" style="border: 0.5px solid #011950;">
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 border-bottom">
        <li>
          <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-0">
            <p class="mb-0 text-start">Great</p>
            <img src="./images/Icon material-star.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
            <img src="./images/Icon material-star.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
            <img src="./images/Icon material-star.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
            <img src="./images/Icon material-star.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
            <img src="./images/Icon material-star-border.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-0">
            <p class="mb-0 text-start text-black">4,275 reviews on</p>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link px-2 link-secondary align-items-center d-flex gap-2 mt-0">
            <img src="./images/Icon material-star-1.svg" alt="twbs" width="16" height="16" class="flex-shrink-0">
            <p class="mb-0 text-start text-black">Great</p>
          </a>
        </li>
      </ul>
      <div class="row mb-1 mt-1">
        <div class="col-md-4">
          <div class="card mb-0 border-0 rounded-2">
            <div class="card-body py-1">
              <a href="#" class="list-group-item list-group-item-action align-items-center d-flex gap-2"
                aria-current="true">
                <img src="./images/Group 3983.svg" alt="twbs" width="32" height="32" class="flex-shrink-0">
                <p class="mb-0 text-start">Trusted by 65M+ travelers every year looking for bus and train tickets</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-0 border-0 rounded-2">
            <div class="card-body py-1">
              <a href="#" class="list-group-item list-group-item-action align-items-center d-flex gap-2"
                aria-current="true">
                <img src="./images/Group 3984.svg" alt="twbs" width="32" height="32" class="flex-shrink-0">
                <p class="mb-0 text-start">Trusted by 65M+ travelers every year looking for bus and train tickets</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-0 border-0 rounded-2">
            <div class="card-body py-1">
              <a href="#" class="list-group-item list-group-item-action align-items-center d-flex gap-2"
                aria-current="true">
                <img src="./images/Icon awesome-headset-1.svg" alt="twbs" width="32" height="32" class="flex-shrink-0">
                <p class="mb-0 text-start">Trusted by 65M+ travelers every year looking for bus and train tickets</p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container p-3 mb-5 rounded">
      <div class="row">
        <div class="col-lg-3 text-center">
          <img src="./images/Icon awesome-money-bill-alt.svg" width="100" height="100" alt="">
          <h5>LOWEST PRICE</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
        <div class="col-lg-3 text-center">
          <img src="./images/Icon awesome-hand-holding-heart.svg" width="100" height="100" alt="">
          <h5>BEST TRAVEL OPTION</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
        <div class="col-lg-3 text-center">
          <img src="./images/Icon awesome-ticket-alt.svg" width="100" height="100" alt="">
          <h5>QUICK AND EASY</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
        <div class="col-lg-3 text-center">
          <img src="./images/Icon ionic-md-people.svg" width="100" height="100" alt="">
          <h5>FAST CUTOMER SUPPORT</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="bg-mask"></div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col">
              <div class="card border-0">
                <div class="card-body px-0 pb-1">
                  <h5 class="card-title" style="color: #FF7F00; font: normal normal normal 32px/48px Halaney Demo;">
                    Get About Us</h5>
                  <h2 class="card-header bg-transparent border-0 px-0 w-75">We Create Journey Worth Taking For The
                    Traveler</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row border-bottom">
            <div class="col-md-6">
              <div class="card mb-0 border-0 rounded-2">
                <div class="card-body py-2 px-0">
                  <a href="#" class="list-group-item list-group-item-action d-flex gap-2" aria-current="true">
                    <img src="./images/Icon awesome-award.svg" alt="twbs" width="32" height="32" class="flex-shrink-0">
                    <div>
                      <h6 class="mb-0 text-start" style="color: #011950;">Services</h6>
                      <p class="mb-0 text-start">congue mauris rhoncus aenean vel elit scelerisque mauris</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-0 border-0 rounded-2">
                <div class="card-body py-2 px-0">
                  <a href="#" class="list-group-item list-group-item-action d-flex gap-2" aria-current="true">
                    <img src="./images/Icon awesome-award.svg" alt="twbs" width="32" height="32" class="flex-shrink-0">
                    <div>
                      <h6 class="mb-0 text-start" style="color: #011950;">Best Travel Agents</h6>
                      <p class="mb-0 text-start">congue mauris rhoncus aenean vel elit scelerisque mauris</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-0 border-0 rounded-2">
                <div class="card-body py-2 px-0">
                  <a href="#" class="btn rounded-0 text-white fw-medium" role="button" aria-current="true"
                    style="background-color: #FF7F00; letter-spacing: 0.075rem;">
                    DISCOVER MORE
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <!-- <div class="card mb-0 border-0 rounded-2">
                  <div class="card-body py-2 px-0">
                    <a href="#" class="list-group-item list-group-item-action d-flex gap-2"
                      aria-current="true">
                      <div class="bg-multiple"></div>
                    </a>
                  </div>
                </div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="row">
            <div class="col">
              <div class="card border-0">
                <div class="card-body px-0 pb-1">
                  <h5 class="card-title" style="color: #FF7F00; font: normal normal normal 32px/48px Halaney Demo;">
                    Get About Us</h5>
                  <h2 class="card-header bg-transparent border-0 px-0 w-75">Get The Best Travel Experience</h2>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-cols-xs-1 row-cols-sm-1 row-cols-md-2 g-2">
            <div class="col">
              <div class="card mb-0 border-0 rounded-2">
                <div class="card-body py-2 px-0">
                  <a href="#" class="list-group-item list-group-item-action d-flex gap-2" aria-current="true">
                    <img src="./images/Group 3966.svg" alt="twbs" width="48" height="48" class="flex-shrink-0">
                    <div>
                      <h6 class="mb-0 text-start" style="color: #011950;">Set Travel Plan</h6>
                      <p class="mb-0 text-start">congue mauris rhoncus aenean vel elit scelerisque mauris</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-0 border-0 rounded-2">
                <div class="card-body py-2 px-0">
                  <a href="#" class="list-group-item list-group-item-action d-flex gap-2" aria-current="true">
                    <img src="./images/Group 3969.svg" alt="twbs" width="48" height="48" class="flex-shrink-0">
                    <div>
                      <h6 class="mb-0 text-start" style="color: #011950;">Explore Around</h6>
                      <p class="mb-0 text-start">congue mauris rhoncus aenean vel elit scelerisque mauris</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-0 border-0 rounded-2">
                <div class="card-body py-2 px-0">
                  <a href="#" class="list-group-item list-group-item-action d-flex gap-1" aria-current="true">
                    <img src="./images/Group 3967.svg" alt="twbs" width="48" height="48" class="flex-shrink-0">
                    <div>
                      <h6 class="mb-0 text-start" style="color: #011950;">Best Guide</h6>
                      <p class="mb-0 text-start">congue mauris rhoncus aenean vel elit scelerisque mauris</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-0 border-0 rounded-2">
                <div class="card-body py-2 px-0">
                  <a href="#" class="list-group-item list-group-item-action d-flex gap-2" aria-current="true">
                    <img src="./images/Group 3970.svg" alt="twbs" width="48" height="48" class="flex-shrink-0">
                    <div>
                      <h6 class="mb-0 text-start" style="color: #011950;">Support 24/7</h6>
                      <p class="mb-0 text-start">congue mauris rhoncus aenean vel elit scelerisque mauris</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-0 border-0 rounded-2">
                <div class="card-body py-2 px-0">
                  <a href="#" class="list-group-item list-group-item-action d-flex gap-2" aria-current="true">
                    <img src="./images/Group 3968.svg" alt="twbs" width="48" height="48" class="flex-shrink-0">
                    <div>
                      <h6 class="mb-0 text-start" style="color: #011950;">Services</h6>
                      <p class="mb-0 text-start">congue mauris rhoncus aenean vel elit scelerisque mauris</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card mb-0 border-0 rounded-2">
                <div class="card-body py-2 px-0">
                  <a href="#" class="list-group-item list-group-item-action d-flex gap-2" aria-current="true">
                    <img src="./images/Group 3971.svg" alt="twbs" width="48" height="48" class="flex-shrink-0">
                    <div>
                      <h6 class="mb-0 text-start" style="color: #011950;">Easy Booking</h6>
                      <p class="mb-0 text-start">congue mauris rhoncus aenean vel elit scelerisque mauris</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-mask-2"></div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="bg-tourist-1">
            <div class="ms-4" style="margin-right: 18rem;">
              <h2 class="fw-bold text-white">45% OFF</h2>
              <h4 class="mb-3 fw-bold text-white">Explore The Dream Bus Booking</h4>
              <a href="#" class="btn rounded-0 fw-medium" role="button" aria-current="true"
                style="background-color: #fff; letter-spacing: 0.075rem; color: #FF7F00;">
                BOOK NOW
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-tourist-2">
            <div class="ms-4" style="margin-right: 18rem;">
              <h2 class="fw-bold text-white">45% OFF</h2>
              <h4 class="mb-3 fw-bold text-white">Explore The Dream Bus Booking</h4>
              <a href="#" class="btn rounded-0 fw-medium" role="button" aria-current="true"
                style="background-color: #fff; letter-spacing: 0.075rem; color: #FF7F00;">
                BOOK NOW
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 my-4">
          <h2 class="card-header bg-transparent border-0 fw-bold px-0 text-center" style="color: #011950;">Our Partner
            Included</h2>
        </div>
      </div>
      <div class="container">
        <div class="row row-cols-xs-5 row-cols-sm-2 row-cols-md-5 g-2">
          <div class="col text-center">
            <div class="border-0">
              <img src="./images/Group 4081.png" width="100" height="100" class=" border rounded-3 alt="">
              </div>
            </div>
            <div class=" col text-center">
              <div class="border-0">
                <img src="./images/Group 4080.png" width="100" height="100" class="border rounded-3" alt="">
              </div>
            </div>
            <div class="col text-center">
              <div class="border-0">
                <img src="./images/Group 4082.png" width="100" height="100" class="border rounded-3" alt="">
              </div>
            </div>
            <div class="col text-center">
              <div class="border-0">
                <img src="./images/Group 4083.png" width="100" height="100" class="border rounded-3" alt="">
              </div>
            </div>
            <div class="col text-center">
              <div class="border-0">
                <img src="./images/Group 4084.png" width="100" height="100" class="border rounded-3" alt="">
              </div>
            </div>
            <div class="col text-center">
              <div class="border-0">
                <img src="./images/Group 4081.png" width="100" height="100" class="border rounded-3" alt="">
              </div>
            </div>
            <div class="col text-center">
              <div class="border-0">
                <img src="./images/Group 4080.png" width="100" height="100" class="border rounded-3" alt="">
              </div>
            </div>
            <div class="col text-center">
              <div class="border-0">
                <img src="./images/Group 4082.png" width="100" height="100" class="border rounded-3" alt="">
              </div>
            </div>
            <div class="col text-center">
              <div class="border-0">
                <img src="./images/Group 4083.png" width="100" height="100" class="border rounded-3" alt="">
              </div>
            </div>
            <div class="col text-center">
              <div class="border-0">
                <img src="./images/Group 4084.png" width="100" height="100" class="border rounded-3" alt="">
              </div>
            </div>
  
          </div>
      </div>
      
        <div class="row">
          <div class="col-md-12 my-4">
            <h2 class="card-header bg-transparent border-0 fw-bold px-0 text-center" style="color: #011950;">Most
              Popular Routes</h2>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 mb-0 text-center g-4">
          <div class="col">
            <div class="card mb-0 shadow-sm" style="border-radius: 48px;">
              <img src="./images/Mask Group 5.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title pricing-card-title text-center" style="font-size: 0.75rem;">BOSTON TO NEWYORK</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-0 shadow-sm" style="border-radius: 48px;">
              <img src="./images/Mask Group 6.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title pricing-card-title text-center" style="font-size: 0.75rem;">DC TO PHILADELPHIA</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-0 shadow-sm" style="border-radius: 48px;">
              <img src="./images/Mask Group 7.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title pricing-card-title text-center" style="font-size: 0.75rem;">LOS ANGELES TO LAS
                  VEGAS</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-0 shadow-sm" style="border-radius: 48px;">
              <img src="./images/Mask Group 8.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title pricing-card-title text-center" style="font-size: 0.75rem;">SEATTLE TO VANCOUVER
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-0 shadow-sm" style="border-radius: 48px;">
              <img src="./images/Mask Group 5.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title pricing-card-title text-center" style="font-size: 0.75rem;">BOSTON TO NEWYORK</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-0 shadow-sm" style="border-radius: 48px;">
              <img src="./images/Mask Group 6.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title pricing-card-title text-center" style="font-size: 0.75rem;">DC TO PHILADELPHIA</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-0 shadow-sm" style="border-radius: 48px;">
              <img src="./images/Mask Group 7.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title pricing-card-title text-center" style="font-size: 0.75rem;">LOS ANGELES TO LAS
                  VEGAS</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-0 shadow-sm" style="border-radius: 48px;">
              <img src="./images/Mask Group 8.png" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-title pricing-card-title text-center" style="font-size: 0.75rem;">SEATTLE TO VANCOUVER
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
  <footer class="pt-4 my-md-5 pt-md-5 border-top justify-content-center pb-3 mb-0">
    <div class="container p-3 mb-5 rounded">
      <div class="row">
        <div class="col-md-12">
          <div>
            <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none mb-4">
              <img class="me-4" src="./images/yourtrippal LOGO..-01@2x.png" width="100" height="32" role="img">
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
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Train Tickets</a></li>
          </ul>
        </div>
        <div class="col">
          <h6 class="mb-3">ENGAGE</h6>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Create Account</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Download App</a></li>
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
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">We're Hiring</a></li>
          </ul>
        </div>
        <div class="col">
          <h6 class="mb-3">CUSTOMER SERVICES</h6>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Contact Us</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Companies</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms and Conditions</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col">
          <h6>FOLLOW US</h6>
          <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none mb-4">
            <img class="me-4" src="./images/Group 378.svg" width="100" height="32" role="img">
          </a>
        </div>
      </div>
      <div class="row" style="background-color: #011950;">
        <div class="col-md-12">
          <div class="row row-cols-sm-1 row-cols-md-2 py-2">
            <p class="col-md-6 mb-0 text-body-secondary"><span class="text-white">&copy;2023 YourTrippal. All Rights
                Reserved.</span></p>
            <p class="col-md-6 mb-0 text-body-secondary text-end"><span class="text-white">Terms Of Use | Privacy
                Policy</span></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>