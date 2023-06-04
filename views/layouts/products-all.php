<?php
/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!doctype HTML>
    <html lang="<?=Yii::$app->language?>">
    <head>
        <meta charset="<?=Yii::$app->charset?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="DigiPro - Digital Products Marketplace ">
        <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">
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

        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-32x32.png">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?=Html::encode($this->title)?></title>
        <?php $this->head() ?>
    </head>
    <body class="preload">
    <?php $this->beginBody() ?>
    <?php echo $this->render('_parts/_header'); ?>
    <section class="hero-area2 hero-area3 bgimage">
        <div class="bg_image_holder">
            <img src="img/hero-image01.png" alt="background-image">
        </div>
        <div class="hero-content content_above">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>Название страницы</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="filter-area product-filter-area filter-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar">
                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="12">12 Items per page</option>
                                    <option value="15">15 Items per page</option>
                                    <option value="25">25 Items per page</option>
                                </select>
                                <span class="icon-arrow-down"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $content; ?>

    <section class="cta2 bgimage">
        <div class="bg_image_holder">
            <img src="img/cta-bg.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cta-content">
                        <div class="cta-text">
                            <h2>Ready To Join Our Marketplace!</h2>
                            <p>Grow your marketing and be happy with your online business</p>
                        </div>
                        <div class="cta-btn">
                            <a href="" class="btn btn--md btn-primary">Join Us Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $this->render('_parts/_footer'); ?>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U"></script>
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
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>