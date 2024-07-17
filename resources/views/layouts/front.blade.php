<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="img/favicon.png" rel="apple-touch-icon">
    <link href="img/favicon.png" rel="shortcut icon" type="image/png">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Farmart - Html Template</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="plugins/noUiSlider/nouislider.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
 @include('layouts.front.nav')
@yield('content')
 @include('layouts.front.footer')

    <div class="ps-footer-mobile">
        <div class="menu__content">
            <ul class="menu--footer">
                <li class="nav-item"><a class="nav-link" href="index.html"><i class="icon-home3"></i><span>Home</span></a></li>
                <li class="nav-item"><a class="nav-link footer-category" href="javascript:void(0);"><i class="icon-list"></i><span>Category</span></a></li>
                <li class="nav-item"><a class="nav-link footer-cart" href="shopping-cart.html"><i class="icon-cart"></i><span class="badge bg-warning">3</span><span>Cart</span></a></li>
                <li class="nav-item"><a class="nav-link" href="wishlist.html"><i class="icon-heart"></i><span>Wishlist</span></a></li>
                <li class="nav-item"><a class="nav-link" href="login-register.html"><i class="icon-user"></i><span>Account</span></a></li>
            </ul>
        </div>
    </div>
    <button class="btn scroll-top"><i class="icon-chevron-up"></i></button>
    <div class="ps-preloader" id="preloader">
        <div class="ps-preloader-section ps-preloader-left"></div>
        <div class="ps-preloader-section ps-preloader-right"></div>
    </div>
    <div class="ps-category--mobile">
        <div class="category__header">
            <div class="category__title">All Departments</div><span class="category__close"><i class="icon-cross"></i></span>
        </div>
        <div class="category__content">
            <ul class="menu--mobile">
                <li class="daily-deals category-item"><a href="flash-sale.html">Daily Deals</a></li>
                <li class="category-item"><a href="shop-categories.html">Top Promotions</a></li>
                <li class="category-item"><a href="shop-categories.html">New Arrivals</a></li>
                <li class="menu-item-has-children category-item"><a href="shop-categories.html">Fresh</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="shop-view-grid.html">Meat & Poultry</a></li>
                        <li><a href="shop-view-grid.html">Fruit</a></li>
                        <li><a href="shop-view-grid.html">Vegetables</a></li>
                        <li><a href="shop-view-grid.html">Milks, Butter & Eggs</a></li>
                        <li><a href="shop-view-grid.html">Fish</a></li>
                        <li><a href="shop-view-grid.html">Frozen</a></li>
                        <li><a href="shop-view-grid.html">Cheese</a></li>
                        <li><a href="shop-view-grid.html">Pasta & Sauce</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children category-item"><a href="shop-categories.html">Food Cupboard</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="shop-view-grid.html">Crisps, Snacks & Nuts</a></li>
                        <li><a href="shop-view-grid.html">Breakfast Cereals</a></li>
                        <li><a href="shop-view-grid.html">Tins & Cans</a></li>
                        <li><a href="shop-view-grid.html">Chocolate & Sweets</a></li>
                    </ul>
                </li>
                <li class="category-item"><a href="shop-categories.html">Bakery</a></li>
                <li class="category-item"><a href="shop-categories.html">Frozen Foods</a></li>
                <li class="menu-item-has-children category-item"><a href="shop-categories.html">Ready Meals</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="shop-view-grid.html">Traditional British</a></li>
                        <li><a href="shop-view-grid.html">Indian</a></li>
                        <li><a href="shop-view-grid.html">Italian</a></li>
                        <li><a href="shop-view-grid.html">Chinese</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children category-item"><a href="shop-categories.html">Drinks, Tea &amp; Coffee</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="shop-view-grid.html">Tea & Coffee</a></li>
                        <li><a href="shop-view-grid.html">Hot Drinks</a></li>
                        <li><a href="shop-view-grid.html">Fizzy Drinks</a></li>
                        <li><a href="shop-view-grid.html">Water</a></li>
                    </ul>
                </li>
                <li class="category-item"><a href="shop-categories.html">Beer, Wine & Spirits</a></li>
                <li class="category-item"><a href="shop-categories.html">Baby & Child</a></li>
                <li class="category-item"><a href="shop-categories.html">Kitchen & Dining</a></li>
            </ul>
        </div>
    </div>
    <nav class="navigation--mobile">
        <div class="navigation__header">
            <div class="navigation__select">
                <div class="languages"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-languages">English</span><i class="icon-chevron-down"></i></a>
                    <div class="select--dropdown">
                        <ul class="select-languages">
                            <li class="active language-item" data-value="English"><a href="javascript:void(0);">English</a></li>
                            <li class="language-item" data-value="Brunei"><a href="javascript:void(0);">Brunei</a></li>
                            <li class="language-item" data-value="Armenia"><a href="javascript:void(0);">Armenia</a></li>
                        </ul>
                    </div>
                </div>
                <div class="currency"><a class="nav-top-link" href="javascript:void(0);"> <span class="current-currency">USD</span><i class="icon-chevron-down"></i></a>
                    <div class="select--dropdown">
                        <ul class="select-currency">
                            <li class="active currency-item" data-value="USD"><a href="javascript:void(0);">USD</a></li>
                            <li class="currency-item" data-value="VND"><a href="javascript:void(0);">VND</a></li>
                            <li class="currency-item" data-value="EUR"><a href="javascript:void(0);">EUR</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navigation-title">
                <button class="close-navbar-slide"><i class="icon-arrow-left"></i></button>
                <div><span> <i class="icon-user"></i>Hi, </span><span class="account">Morgan Averill</span><a class="dropdown-user" href="#" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-chevron-down"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAccount"><a class="dropdown-item" href="#"><b>My Account</b></a><a class="dropdown-item" href="#">Dashboard</a><a class="dropdown-item" href="#">Account Setting</a><a class="dropdown-item" href="shopping-cart.html">Orders</a><a class="dropdown-item" href="wishlist.html">Wishlist</a><a class="dropdown-item" href="#">Shipping Address</a><a class="dropdown-divider"></a><a class="dropdown-item" href="#"><b>Vendor Setting</b></a><a class="dropdown-item" href="#">Dashboard</a><a class="dropdown-item" href="#">Products</a><a class="dropdown-item" href="shopping-cart.html">Orders</a><a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="vendor-store.html">View Store</a><a class="dropdown-divider"></a><a class="dropdown-item" href="#"><i class="icon-exit-left"></i>Log out</a></div>
                </div>
            </div>
        </div>
        <div class="navigation__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="">Home</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home Supermarket</a></li>
                        <li><a href="home-full-width.html">Home Supermarket Full Width</a></li>
                        <li><a href="home-local-store.html">Home Local Store</a></li>
                        <li><a href="home-sidebar.html">Home Sidebar</a></li>
                        <li><a href="home-business.html">Home Business</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="">Shop</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="shop-view-grid.html">Shop Default View Grid</a></li>
                        <li><a href="shop-view-listing.html">Shop Default View Listing</a></li>
                        <li><a href="shop-view-extended.html">Shop Default View Products</a></li>
                        <li><a href="shop-categories.html">Shop Categories</a></li>
                        <li><a href="shop-with-banner.html">Shop With Banner</a></li>
                        <li><a href="shop-all-brands.html">Shop All Brands</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="">Pages</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="vendor-registration.html">Vendor Register</a></li>
                        <li><a href="become-a-vendor.html">Become a Vendor</a></li>
                        <li><a href="store-list.html">Dokan Store List</a></li>
                        <li><a href="vendor-store.html">Dokan Vendor Store</a></li>
                        <li><a href="flash-sale.html">Flash Sale</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="404-not-found.html">404 Not Found</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="">Blog</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="blog-default.html">01 Blog-Default</a></li>
                        <li><a href="blog-thumbnail.html">Blog Small Thumbnail</a></li>
                        <li><a href="blog-gird.html">Blog Gird</a></li>
                        <li><a href="blog-list.html">Blog Listing</a></li>
                        <li><a href="single-post.html">Single Post without Sidebar</a></li>
                        <li><a href="single-post-sidebar.html">Single Post with Sidebar</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="product-default.html">Brand</a></li>
                <li class="menu-item-has-children"><a href="flash-sale.html">Flash Sale</a></li>
            </ul>
            <ul class="menu--mobile">
                <li class="daily-deals"><a>daily deals</a></li>
            </ul>
        </div>
        <div class="navigation__footer">
            <ul class="menu--icon">
                <li class="footer-item"><a class="footer-link" href="#"><i class="icon-history2"></i><span>Recent viewed product</span></a></li>
                <li class="footer-item"><a class="footer-link" href="#"><i class="icon-cube"></i><span>Become a vendor</span></a></li>
                <li class="footer-item"><a class="footer-link" href="#"><i class="icon-question-circle"></i><span>Help & Contact</span></a></li>
                <li class="footer-item"><a class="footer-link" href="#"><i class="icon-telephone"></i><span>HOTLINE: <span class='text-success'>(+1) 970 978-6290</span> (Free)</span></a></li>
            </ul>
        </div>
    </nav>
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/select2/dist/js/select2.min.js"></script>
    <script src="plugins/slick/slick.js"></script>
    <script src="plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/noUiSlider/nouislider.min.js"></script>
    <!-- custom code-->
    <script src="js/main.js"></script>
</body>

</html>