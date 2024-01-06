<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
    <style>
        .create_btn {

            border-radius: 30px;
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px rgb(255, 255, 255);
        }


        .color_line {
            border-bottom: 2px solid burlywood;

        }
    </style>
</head>

<body>


    <div class="container my-3">
        <div>
            <span class="d-flex justify-content-center">
                <img src="./assets/img/yourtrippal LOGO..-01.png" class="text-center" style=" height: 60px;">
        
            </span>
           
        </div>
        <div class="row justify-content-center mt-5  ">
            <div class="w-50 create_btn p-1 mb-3 rounded bg-white  ">
                <h4 class="text-center mt-3 ">Log in to your account</h4>
                <form id="loginForm">
                    <div class="form-group mx-5">
                        <label for="email">User Name</label>
                        <input type="email" class="form-control create_btn color_line mt-2" id="email"
                            placeholder="Enter User Name" required>
                        <small id="emailHelp" class="form-text text-danger d-none" style="width: 25rem;">Email field is
                            required.</small>
                    </div>

                    <div class="form-group mx-5 mt-3">
                        <label for="email">Password</label>
                        <input type="email" class="form-control create_btn color_line mt-2" id="email"
                            placeholder="Enter Password" required>
                        <small id="emailHelp" class="form-text text-danger d-none" style="width: 25rem;">Email field is
                            required.</small>
                    </div>
                    <div class="form-group d-none mx-5" id="passwordGroup">
                        <label for="password">Password</label>
                        <input type="password" class="form-control create_btn" id="password" placeholder="Password"
                            required>
                    </div>
                    <div class=" d-flex justify-content-center mt-5 mb-4 ">
                        <!-- <button type="button" class="btn btn-primary mb-3 " style="width: 25rem; border-radius: 30px;"
                            onclick="checkEmail()">Next</button> -->
                            <button class="btn btn-primary me-md-2 Btn_Save" type="button">Next</button>
                    </div>
                    <p class="d-flex justify-content-center" style="font-size: 13px;">By clicking "Log in" you confirm
                        that you accept the
                        <a href=""> Terms of Service</a>
                    </p>




                </form>
            </div>
        </div>
    </div>




    <script>
        function checkEmail() {
            const emailField = document.getElementById('email');
            const emailHelp = document.getElementById('emailHelp');
            const passwordGroup = document.getElementById('passwordGroup');

            if (emailField.value.trim() === '') {
                emailHelp.classList.remove('d-none');
                passwordGroup.classList.add('d-none');
            } else {
                emailHelp.classList.add('d-none');
                passwordGroup.classList.remove('d-none');
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>