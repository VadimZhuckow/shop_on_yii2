<?php

use app\models\db\Menu;

?>
<div class="menu-area">
    <div class="top-menu-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-fullwidth">
                        <div class="logo-wrapper">
                            <div class="logo logo-top">
                                <a href="index.php"><img src="img/logo.png" alt="logo image" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="menu-container">
                            <div class="d_menu">
                                <nav class="navbar navbar-expand-lg mainmenu__menu">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1"
                                            aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon icon-menu"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="navbar-nav">
<!--                                            <li class="has_dropdown">-->
<!--                                                <a href="index.php">Главная</a>-->
<!--                                                <div class="dropdown dropdown--menu">-->
<!--                                                    <ul>-->
<!--                                                        <li>-->
<!--                                                            <a href="index.html">Home Multi Vendor</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="index2.html">Home Two Single User</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="index3.html">Home Three Product</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="index4.html">Home Four Product</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="index5.html">Home Five Product</a>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                            <li class="has_dropdown">-->
<!--                                                <a href="all-products.html">All Product</a>-->
<!--                                                <div class="dropdown dropdown--menu">-->
<!--                                                    <ul>-->
<!--                                                        <li>-->
<!--                                                            <a href="all-products.html">Recent Items</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="all-products.html">Popular Items</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="index5.html">Free Templates</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="#">Follow Feed</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="#">Top Authors</a>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                            <li class="has_dropdown">-->
<!--                                                <a href="category-grid.html">Categories</a>-->
<!--                                                <div class="dropdown dropdown--menu">-->
<!--                                                    <ul>-->
<!--                                                        <li>-->
<!--                                                            <a href="category-grid.html">Popular Items</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="category-grid.html">Admin Templates</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="category-grid.html">Blog / Magazine / News</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="category-grid.html">Creative</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="category-grid.html">Corporate Business</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="category-grid.html">Resume Portfolio</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="category-grid.html">eCommerce</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="category-grid.html">Entertainment</a>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <a href="category-grid.html">Landing Pages</a>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                            <li class="has_megamenu">-->
<!--                                                <a href="#">Elements</a>-->
<!--                                                <div class="dropdown_megamenu contained">-->
<!--                                                    <div class="megamnu_module">-->
<!--                                                        <div class="menu_items">-->
<!--                                                            <div class="menu_column">-->
<!--                                                                <ul>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="accordion.html">Accordion</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="alert.html">Alert</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="brands.html">Brands</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="buttons.html">Buttons</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="cards.html">Cards</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="charts.html">Charts</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="content-block.html">Content-->
<!--                                                                            Block</a>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                            <div class="menu_column">-->
<!--                                                                <ul>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="dropdowns.html">Dropdowns</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="features.html">Features</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="info-box.html">Info Box</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="modal.html">Modal</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="peoples.html">Peoples</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="products.html">Products</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="social.html">Social</a>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                            <div class="menu_column">-->
<!--                                                                <ul>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="tab.html">Tabs</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="table.html">Table</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="testimonials.html">Testimonials</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="timeline.html">Timeline</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="typography.html">Typography</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="headers.html">Header Styles</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="pricing.html">Pricing</a>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                            <li class="has_megamenu">-->
<!--                                                <a href="#">Pages</a>-->
<!--                                                <div class="dropdown_megamenu">-->
<!--                                                    <div class="megamnu_module">-->
<!--                                                        <div class="menu_items">-->
<!--                                                            <div class="menu_column">-->
<!--                                                                <ul>-->
<!--                                                                    <li class="title">Product</li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="all-products.html">Products-->
<!--                                                                            Grid</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="category-grid.html">Category-->
<!--                                                                            Grid</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="search-product.html">Search-->
<!--                                                                            Product</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="single-product.html">Single Product-->
<!--                                                                            V1</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="single-product-v2.html">Single-->
<!--                                                                            Product-->
<!--                                                                            V2</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="single-product-v3.html">Single-->
<!--                                                                            Product-->
<!--                                                                            V3</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="cart.html">Shopping Cart</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="checkout.html">Checkout</a>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                            <div class="menu_column">-->
<!--                                                                <ul>-->
<!--                                                                    <li class="title">Author</li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="author.html">Author Profile</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="notification.html">Notifications</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="message.html">Message Inbox</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="message-compose.html">Message-->
<!--                                                                            Compose</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="favourites.html">Favorites-->
<!--                                                                            Items</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="career.html">Job Posts</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="job-detail.html">Job Details</a>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                            <div class="menu_column">-->
<!--                                                                <ul>-->
<!--                                                                    <li class="title">Dashboard</li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="dashboard.html">Dashboard</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="dashboard-setting.html">Account-->
<!--                                                                            Settings</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="dashboard-purchase.html">Author-->
<!--                                                                            Purchases</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="dashboard-add-credit.html">Add-->
<!--                                                                            Credits</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="dashboard-statement.html">Statements</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="invoice.html">Invoice</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="dashboard-upload.html">Upload-->
<!--                                                                            Item</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="dashboard-manage-item.html">Manage-->
<!--                                                                            Items</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="edit-item.html">Edit Items</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="dashboard-withdrawal.html">Withdrawals</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="add-payment-method.html">Add-->
<!--                                                                            Payment-->
<!--                                                                            Method</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="order-confirm.html">Order-->
<!--                                                                            Confirm</a>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                            <div class="menu_column">-->
<!--                                                                <ul>-->
<!--                                                                    <li class="title">User</li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="support-forum.html">Support-->
<!--                                                                            Forum</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="support-forum-detail.html">Forum-->
<!--                                                                            Details</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="support-forum-form.html">Forum-->
<!--                                                                            Form</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="login.html">Login</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="signup.html">Register</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="recover-pass.html">Recovery-->
<!--                                                                            Password</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="customer-dashboard.html">Customer-->
<!--                                                                            Dashboard</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="customer-downloads.html">Customer-->
<!--                                                                            Downloads</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="customer-info.html">Customer-->
<!--                                                                            Info</a>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                                <ul>-->
<!--                                                                    <li class="title">Blog</li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="blog1.html">Blog V-1</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="blog2.html">Blog V-2</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="single-blog.html">Single Blog</a>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                            <div class="menu_column">-->
<!--                                                                <ul>-->
<!--                                                                    <li class="title">Other</li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="how-it-works.html">How It Works</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="about.html">About Us</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="pricing.html">Pricing Plan</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="testimonial.html">Testimonials</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="faq.html">FAQs</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="faq-details.html">FAQ's Details</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="affiliate.html">Affiliates</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="term-condition.html">Terms &amp;-->
<!--                                                                            Conditions</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="event.html">Event</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="event-detail.html">Event Detail</a>-->
<!--                                                                    </li>-->
<!--                                                                    <li class="has_badge">-->
<!--                                                                        <a href="badges.html">Badges <span-->
<!--                                                                                    class="badge badge-primary">New</span></a>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <a href="404.html">404 Error page</a>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </li>-->

                                            <?php
                                            $links = Menu::find()->asArray()->all();

                                            foreach ($links as $link) {
                                                ?>
                                                <li>
                                                    <a href="<?=$link['link']?>"><?=$link['title']?></a>
                                                </li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="author-menu">
                            <div class="author-area">
                                <div class="search-wrapper">
                                    <div class="nav_right_module search_module">
                                        <span class="icon-magnifier search_trigger"></span>
                                        <div class="search_area">
                                            <form action="#">
                                                <div class="input-group input-group-light">
                                                        <span class="icon-left" id="basic-addon1">
                                                            <i class="icon-magnifier"></i>
                                                        </span>
                                                    <input type="text" class="form-control search_field"
                                                           placeholder="Type words and hit enter...">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="author__notification_area">
                                    <ul>
                                        <li class="has_dropdown">
                                            <div class="icon_wrap">
                                                <span class="icon-bell"></span>
                                                <span class="notification_status noti"></span>
                                            </div>
                                            <div class="dropdown notification--dropdown">
                                                <div class="dropdown_module_header">
                                                    <h6>My Notifications</h6>
                                                </div>
                                                <div class="notifications_module">
                                                    <div class="notification">
                                                        <div class="notification__info">
                                                            <div class="info_avatar">
                                                                <img src="img/notification_head.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <p>
                                                                    <span>Anderson</span> added to Favourite
                                                                    <a href="#">Mccarther Coffee Shop</a>
                                                                </p>
                                                                <p class="time">Just now</p>
                                                            </div>
                                                        </div>
                                                        <div class="notification__icons ">
                                                            <span class="icon-heart loved noti_icon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="notification">
                                                        <div class="notification__info">
                                                            <div class="info_avatar">
                                                                <img src="img/notification_head2.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <p>
                                                                    <span>Michael</span> commented on
                                                                    <a href="#">DigiPro Extension Bundle</a>
                                                                </p>
                                                                <p class="time">Just now</p>
                                                            </div>
                                                        </div>
                                                        <div class="notification__icons ">
                                                            <span class="icon-bubble commented noti_icon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="notification">
                                                        <div class="notification__info">
                                                            <div class="info_avatar">
                                                                <img src="img/notification_head3.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <p>
                                                                    <span>Khamoka </span>purchased
                                                                    <a href="#"> Visibility Manager
                                                                        Subscriptions</a>
                                                                </p>
                                                                <p class="time">Just now</p>
                                                            </div>
                                                        </div>
                                                        <div class="notification__icons ">
                                                            <span class="icon-basket-loaded purchased noti_icon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="notification">
                                                        <div class="notification__info">
                                                            <div class="info_avatar">
                                                                <img src="img/notification_head4.png" alt="">
                                                            </div>
                                                            <div class="info">
                                                                <p>
                                                                    <span>Anderson</span> added to Favourite
                                                                    <a href="#">Mccarther Coffee Shop</a>
                                                                </p>
                                                                <p class="time">Just now</p>
                                                            </div>
                                                        </div>
                                                        <div class="notification__icons "><span
                                                                    class="icon-star reviewed noti_icon"></span>
                                                        </div>
                                                    </div>
                                                    <div class="text-center m-top-30 p-left-20 p-right-20"><a
                                                                href="notification.html"
                                                                class="btn btn-primary btn-md btn-block">View
                                                            All</a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has_dropdown">
                                            <div class="icon_wrap">
                                                <span class="icon-envelope-open"></span>
                                                <span class="notification_status msg"></span>
                                            </div>
                                            <div class="dropdown messaging--dropdown">
                                                <div class="dropdown_module_header">
                                                    <h6>My Messages</h6>
                                                </div>
                                                <div class="messages">
                                                    <a href="message.html" class="message recent">
                                                        <div class="message__actions_avatar">
                                                            <div class="avatar">
                                                                <img src="img/notification_head4.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="message_data">
                                                            <div class="name_time">
                                                                <div class="name">
                                                                    <p>NukeThemes</p>
                                                                    <span class="icon-envelope"></span>
                                                                </div>
                                                                <span class="time">Just now</span>
                                                                <p>Hello John Smith! Nunc placerat mi ...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="message.html" class="message recent">
                                                        <div class="message__actions_avatar">
                                                            <div class="avatar">
                                                                <img src="img/notification_head5.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="message_data">
                                                            <div class="name_time">
                                                                <div class="name">
                                                                    <p>Crazy Coder</p>
                                                                    <span class="icon-envelope"></span>
                                                                </div>
                                                                <span class="time">Just now</span>
                                                                <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="message.html" class="message">
                                                        <div class="message__actions_avatar">
                                                            <div class="avatar">
                                                                <img src="img/notification_head2.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="message_data">
                                                            <div class="name_time">
                                                                <div class="name">
                                                                    <p>Hybrid Insane</p>
                                                                </div>
                                                                <span class="time">Just now</span>
                                                                <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="message.html" class="message">
                                                        <div class="message__actions_avatar">
                                                            <div class="avatar">
                                                                <img src="img/notification_head3.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="message_data">
                                                            <div class="name_time">
                                                                <div class="name">
                                                                    <p>ThemeXylum</p>
                                                                </div>
                                                                <span class="time">Just now</span>
                                                                <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="message.html" class="message">
                                                        <div class="message__actions_avatar">
                                                            <div class="avatar">
                                                                <img src="img/notification_head4.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="message_data">
                                                            <div class="name_time">
                                                                <div class="name">
                                                                    <p>NukeThemes</p>
                                                                    <span class="icon-envelope"></span>
                                                                </div>
                                                                <span class="time">Just now</span>
                                                                <p>Hello John Smith! Nunc placerat mi ...</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="text-center m-top-30 m-bottom-30 p-left-20 p-right-20">
                                                    <a href="message.html" class="btn btn-primary btn-md btn-block">View
                                                        All</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has_dropdown">
                                            <div class="icon_wrap">
                                                <span class="icon-basket-loaded"></span>
                                                <span class="notification_count purch">2</span>
                                            </div>
                                            <div class="dropdown dropdown--cart">
                                                <div class="cart_area">
                                                    <div class="cart_list">
                                                        <div class="cart_product">
                                                            <div class="product__info">
                                                                <div class="thumbn">
                                                                    <img src="img/capro1.jpg"
                                                                         alt="cart product thumbnail">
                                                                </div>
                                                                <div class="info">
                                                                    <a class="title" href="single-product.html">Finance
                                                                        and Consulting Business Theme</a>
                                                                    <div class="cat">
                                                                        <a href="#">
                                                                            <img src="img/catword.png" alt="">Wordpress</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product__action">
                                                                <a href="#">
                                                                    <span class="icon-trash"></span>
                                                                </a>
                                                                <p>$60</p>
                                                            </div>
                                                        </div>
                                                        <div class="cart_product">
                                                            <div class="product__info">
                                                                <div class="thumbn">
                                                                    <img src="img/capro2.jpg"
                                                                         alt="cart product thumbnail">
                                                                </div>
                                                                <div class="info">
                                                                    <a class="title" href="single-product.html">Flounce
                                                                        - Multipurpose OpenCart Theme</a>
                                                                    <div class="cat">
                                                                        <a href="#">
                                                                            <img src="img/catword.png" alt="">Wordpress</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="product__action">
                                                                <a href="#">
                                                                    <span class="icon-trash"></span>
                                                                </a>
                                                                <p>$60</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="total">
                                                        <p>
                                                            <span>Total :</span>$80
                                                        </p>
                                                    </div>
                                                    <div class="cart_action">
                                                        <a class="btn btn-primary" href="cart.html">View
                                                            Cart</a>
                                                        <a class="btn btn-secondary"
                                                           href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="author-author__info has_dropdown">
                                    <div class="author__avatar online">
                                        <img src="img/user-avater.png" alt="user avatar" class="rounded-circle">
                                    </div>
                                    <div class="dropdown dropdown--author">
                                        <div class="author-credits d-flex">
                                            <div class="author__avatar">
                                                <img src="img/user-avater.png" alt="user avatar"
                                                     class="rounded-circle">
                                            </div>
                                            <div class="autor__info">
                                                <p class="name">
                                                    Chris Bent
                                                </p>
                                                <p class="amount">$20.45</p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="author.html">
                                                    <span class="icon-user"></span>Profile</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.html">
                                                    <span class="icon-home"></span> Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-setting.html">
                                                    <span class="icon-settings"></span> Setting</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <span class="icon-basket"></span>Purchases</a>
                                            </li>
                                            <li>
                                                <a href="favourites.html">
                                                    <span class="icon-heart"></span> Favourite</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-add-credit.html">
                                                    <span class="icon-credit-card"></span>Add Credits</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-statement.html">
                                                    <span class="icon-chart"></span>Sale Statement</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-upload.html">
                                                    <span class="icon-cloud-upload"></span>Upload Item</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-manage-item.html">
                                                    <span class="icon-notebook"></span>Manage Item</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-withdrawal.html">
                                                    <span class="icon-briefcase"></span>Withdrawals</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon-logout"></span>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mobile_content ">
                                <span class="icon-user menu_icon"></span>
                                <div class="offcanvas-menu closed">
                                    <span class="icon-close close_menu"></span>
                                    <div class="author-author__info">
                                        <div class="author__avatar v_middle">
                                            <img src="img/user-avater.png" alt="user avatar">
                                        </div>
                                    </div>
                                    <div class="author__notification_area">
                                        <ul>
                                            <li>
                                                <a href="notification.html">
                                                    <div class="icon_wrap">
                                                        <span class="icon-bell"></span>
                                                        <span class="notification_count noti">25</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="message.html">
                                                    <div class="icon_wrap">
                                                        <span class="icon-envelope"></span>
                                                        <span class="notification_count msg">6</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <div class="icon_wrap">
                                                        <span class="icon-basket"></span>
                                                        <span class="notification_count purch">2</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dropdown dropdown--author">
                                        <ul>
                                            <li>
                                                <a href="author.html">
                                                    <span class="icon-user"></span>Profile</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.html">
                                                    <span class="icon-home"></span> Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-setting.html">
                                                    <span class="icon-settings"></span> Setting</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <span class="icon-basket"></span>Purchases</a>
                                            </li>
                                            <li>
                                                <a href="favourites.html">
                                                    <span class="icon-heart"></span> Favourite</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-add-credit.html">
                                                    <span class="icon-credit-card"></span>Add Credits</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-statement.html">
                                                    <span class="icon-chart"></span>Sale Statement</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-upload.html">
                                                    <span class="icon-cloud-upload"></span>Upload Item</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-manage-item.html">
                                                    <span class="icon-notebook"></span>Manage Item</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-withdrawal.html">
                                                    <span class="icon-briefcase"></span>Withdrawals</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon-logout"></span>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center">
                                        <a href="signup.html" class="author-area__seller-btn inline">Become a
                                            Seller</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
