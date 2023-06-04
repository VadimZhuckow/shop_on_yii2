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
    <body class="dashboard-page preload">
    <?php $this->beginBody() ?>

    <?php echo $this->render('_parts/_header'); ?>

    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-contents">
                        <h2 class="page-title">Личный кабинет</h2>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="#">Главная</a>
                                </li>
                                <li class="active">
                                    <a href="#">Личный кабинет</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dashboard-area">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button class="menu-toggler d-md-none">
                            <span class="icon-menu"></span> Навигация по кабинету
                        </button>
                        <ul class="dashboard_menu">
                            <li class="active">
                                <a href="dashboard.html"><span class="lnr icon-home"></span>В начало</a>
                            </li>
                            <li>
                                <a href="dashboard-setting.html"><span class="lnr icon-settings"></span>Настройки</a>
                            </li>
                            <li>
                                <a href="dashboard-purchase.html"><span class="lnr icon-basket"></span>Выход</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $content; ?>
    </section>
    <div class="modal fade item_removal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Please confirm the removal of the item.</h4>
                    <div class="btns">
                        <a href="#" class="btn btn--md btn-danger">Confirm</a>
                        <a href="#" class="btn btn--md btn-primary" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">Cancel</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $this->render('_parts/_footer'); ?>

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