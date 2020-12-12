<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->

        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link
            rel="stylesheet"
            type="text/css"
            href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->

        <link rel="stylesheet" type="text/css" href="css/logincss/util.css">
        <link rel="stylesheet" type="text/css" href="css/logincss/main.css">

        <!-- for header and footer-->
        <link rel="stylesheet" href="css/static.css" media="screen">
        <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="js/static.js" defer=""></script>
        <!-- end -->

    </head>

    <body class="u-body u-overlap u-overlap-transparent">

        <!-- header -->
        <?php include 'header.php' ?>
        <!-- end -->

        <div
            class="container-login100"
            style="background-image: url('/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-37">
                        Sign In
                    </span>

                    <div
                        class="wrap-input100 validate-input m-b-20"
                        data-validate="Enter username or email">
                        <input
                            class="input100"
                            type="text"
                            name="username"
                            placeholder="username or email">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
                        <input class="input100" type="password" name="pass" placeholder="password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign In
                        </button>
                    </div>

                    <br>

                    <div class="text-center">
                        <a href="/signup.php" class="txt2 hov1">
                            Sign Up
                        </a>
                    </div>
                </form>

            </div>
        </div>

        <!-- footer -->
        <?php include 'footer.php' ?>
        <!-- end -->

        <!--===============================================================================================-->
        <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/loginjs/main.js"></script>

    </body>

</html>