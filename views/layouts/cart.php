<!doctype HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DigiPro - Digital Products Marketplace ">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">
    <title>Корзина</title>
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
<section class="login_area section--padding">
    <div class="container">
        <div class="row>"
        <div class="col-md-12">
            <?php echo $content; ?>
        </div>
    </div>
        <!-- end .row -->
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


</body>
<script>
    function getQty(){
        $.get("index.php?r=cart/get-qty", {}, function (res){
        $('.notification_count').text(res);
    });


    }
    getQty();



    $(".delete").click(function(){
        var id = $(this).data('id');

        $.get("index.php?r=cart/delete", {id}, function (res){
           if (res == 1){
               window.location.reload();
           }
    });
    });



    $(document).on('change', '.change-qty', function(e){
        var id = $(this).data('id');
        var val = $(this).val();
         console.log('zapros');
        $.get("index.php?r=cart/change-qty", {id, val}, function (res){
         $(".result-html").html(res);
        });
    });

</script>

</html>