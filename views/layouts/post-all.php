<?php
use yii\helpers\Html;
if(!isset($_GET['id'])){
    $_GET['id'] = 0;
};
?>
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
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-contents">
                    <h2 class="page-title">DigiPro Multipurpose Marketplace HTML Template</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="active">
                                <a href="#">Single Product</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- end .col-md-12 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section><!-- ends: .breadcrumb-area -->
<?php echo $content; ?>
<footer class="footer-area footer--light">
    <div class="footer-big">
        <!-- start .container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="widget-about">
                            <img src="img/footer-logo.png" alt="" class="img-fluid">
                            <p>Pellentesque facilisis the ullamcorp keer sapien interdum is the magna pellentesque
                                kequis
                                hasellus keur condimentum eleifend.</p>
                            <ul class="contact-details">
                                <li>
                                    <span class="icon-earphones"></span>
                                    Call Us:
                                    <a href="tel:344-755-111">344-755-111</a>
                                </li>
                                <li>
                                    <span class="icon-envelope-open"></span>
                                    <a href="mailto:support@aazztech.com">support@aazztech.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Ends: .footer-widget -->
                </div>
                <!-- end /.col-md-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-menu footer-menu--1">
                            <h5 class="footer-widget-title">Popular Category</h5>
                            <ul>
                                <li>
                                    <a href="#">Wordpress</a>
                                </li>
                                <li>
                                    <a href="#">Plugins</a>
                                </li>
                                <li>
                                    <a href="#">Joomla Template</a>
                                </li>
                                <li>
                                    <a href="#">Admin Template</a>
                                </li>
                                <li>
                                    <a href="#">HTML Template</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                </div>
                <!-- end /.col-md-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-menu">
                            <h5 class="footer-widget-title">Our Company</h5>
                            <ul>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">How It Works</a>
                                </li>
                                <li>
                                    <a href="#">Affiliates</a>
                                </li>
                                <li>
                                    <a href="#">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Plan & Pricing</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                </div>
                <!-- end /.col-lg-3 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <div class="footer-menu no-padding">
                            <h5 class="footer-widget-title">Help Support</h5>
                            <ul>
                                <li>
                                    <a href="#">Support Forum</a>
                                </li>
                                <li>
                                    <a href="#">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Support Policy</a>
                                </li>
                                <li>
                                    <a href="#">Refund Policy</a>
                                </li>
                                <li>
                                    <a href="#">FAQs</a>
                                </li>
                                <li>
                                    <a href="#">Buyers Faq</a>
                                </li>
                                <li>
                                    <a href="#">Sellers Faq</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.footer-menu -->
                    </div>
                    <!-- Ends: .footer-widget -->
                </div>
                <!-- Ends: .col-lg-3 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.footer-big -->
    <div class="mini-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>&copy; 2018
                            <a href="#">DigiPro</a>. All rights reserved. Created by
                            <a href="#">AazzTech</a>
                        </p>
                    </div>
                    <div class="go_top">
                        <span class="icon-arrow-up"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
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
<!-- endinject-->

<script>
    function getQty(){
        $.get("index.php?r=cart/get-qty", {}, function (res){
            $('.notification_count').text(res);
        });

    }



    $('.add-to-cart').click(function(){
        var id = $(this).data('id');
        var btn = $(this);
        $.get("index.php?r=cart/add", {id}, function (res){
            if(res == 1){
                $(btn).css('background-color', 'green');
            }
        });
        getQty();
    })
    getQty();
</script>

<script>
    function refreshComments(){
        var id = <?=htmlspecialchars($_GET['id'])?>;
        $.get("index.php?r=post/get-comments", {id}, function (res){
        $('.comment-area').html(res);
        });
    }

    refreshComments();

    $('.send-comment').click(function(){
     console.log('knopkf');
        var id = <?=htmlspecialchars($_GET['id'])?>;
        var comment = $('.t-comment').val();
        $.get("index.php?r=post/add-comment", {id, comment}, function (res){
            console.log(res);
            refreshComments();
            $('.t-comment').val('');
        });
        });
</script>
</body>
</html>