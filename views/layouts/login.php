<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DigiPro - Digital Products Marketplace ">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">
    <title>DigiPro - Digital Products Marketplace</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
    <!-- inject:css-->
    <link rel="stylesheet" href="vendor_assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="vendor_assets/css/animate.css">
    <link rel="stylesheet" href="vendor_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor_assets/css/jquery-ui.css">
    <link rel="stylesheet" href="vendor_assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="vendor_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="vendor_assets/css/owl.carousel.css">
    <link rel="stylesheet" href="vendor_assets/css/select2.min.css">
    <link rel="stylesheet" href="vendor_assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor_assets/css/slick.css">
    <link rel="stylesheet" href="vendor_assets/css/trumbowyg.min.css">
    <link rel="stylesheet" href="vendor_assets/css/venobox.css">
    <link rel="stylesheet" href="style.css">
    <!-- endinject -->
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-32x32.png">
</head>

<body class="preload">
<!-- start menu-area -->

<?php echo $this->render('_parts/_header'); ?>

<!-- end /.menu-area -->
<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-contents">
                    <h2 class="page-title">Login</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- end .col-md-12 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section><!-- ends: .breadcrumb-area -->
<section class="login_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <form id="login">
                    <div class="cardify login">
                        <div class="login--header">
                            <h3>Welcome Back</h3>
                            <p>You can sign in with your username</p>
                        </div><!-- end .login_header -->
                        <div class="login--form">
                            <div class="form-group">
                                <label for="user_name">Username</label>
                                <input id="user_name" name="login" type="text" class="text_field"
                                       placeholder="Enter your username...">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input id="pass" name="pass" type="password" class="text_field"
                                       placeholder="Enter your password...">
                            </div>
                            <div class="form-group">
                                <div class="custom_checkbox">
                                    <input type="checkbox" id="ch2">
                                    <label for="ch2">
                                        <span class="shadow_checkbox"></span>
                                        <span class="label_text">Remember me</span>
                                    </label>
                                </div>
                            </div>

                            <div class="err"></div>

                            <button class="btn btn--md btn-primary" type="submit">Войти</button>
                            <div class="login_assist">
                                <p class="recover">Lost your
                                    <a href="recover-pass.html">username</a> or
                                    <a href="recover-pass.html">password</a>?
                                </p>
                                <p class="signup">Don't have an
                                    <a href="signup.html">account</a>?
                                </p>
                            </div>
                        </div><!-- end .login--form -->
                    </div><!-- end .cardify -->
                </form>
            </div><!-- end .col-md-6 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section><!-- ends: .login_area -->

<?php echo $this->render('_parts/_footer'); ?>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U"></script>
<!-- inject:js-->
<script src="vendor_assets/js/jquery/jquery-1.12.4.min.js"></script>
<script src="vendor_assets/js/jquery/uikit.min.js"></script>
<script src="vendor_assets/js/bootstrap/popper.js"></script>
<script src="vendor_assets/js/bootstrap/bootstrap.min.js"></script>
<script src="vendor_assets/js/chart.bundle.min.js"></script>
<script src="vendor_assets/js/grid.min.js"></script>
<script src="vendor_assets/js/jquery-ui.min.js"></script>
<script src="vendor_assets/js/jquery.barrating.min.js"></script>
<script src="vendor_assets/js/jquery.countdown.min.js"></script>
<script src="vendor_assets/js/jquery.counterup.min.js"></script>
<script src="vendor_assets/js/jquery.easing1.3.js"></script>
<script src="vendor_assets/js/jquery.magnific-popup.min.js"></script>
<script src="vendor_assets/js/owl.carousel.min.js"></script>
<script src="vendor_assets/js/select2.full.min.js"></script>
<script src="vendor_assets/js/slick.min.js"></script>
<script src="vendor_assets/js/tether.min.js"></script>
<script src="vendor_assets/js/trumbowyg.min.js"></script>
<script src="vendor_assets/js/venobox.min.js"></script>
<script src="vendor_assets/js/waypoints.min.js"></script>
<script src="theme_assets/js/dashboard.js"></script>
<script src="theme_assets/js/main.js"></script>
<script src="theme_assets/js/map.js"></script>

<script>
    jQuery(function ($) {
        $('#login').submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: 'index.php?r=ajax/login',
                type: 'get',
                data: $('#login').serialize(),
                success: function (res) {
                    if (res == 'err_login') {
                        $('.err').text('Введите логин');
                    }
                    if (res == 'err_pass') {
                        $('.err').text('Введите пароль');
                    }
                    if (res == 'wrong_pass') {
                        $('.err').text('Не верный пароль');
                    }
                    if (res == 1) {
                        window.location.href = 'index.php';
                    }
                }
            });
        });
    });
</script>
</body>
</html>