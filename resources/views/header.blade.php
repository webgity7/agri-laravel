<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>AgriExpress</title>
    <meta content="" name="description">

    <!-- Stylesheets -->
    <link href="{{ asset('includes/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('includes/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('includes/jquery/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('images/favicon.png') }}" rel="icon">

    <!-- Scripts -->
    <script src="{{ asset('includes/jquery/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('includes/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.extra.js') }}"></script>
    <script src="{{ asset('includes/common.js') }}"></script>
    <script src="{{ asset('includes/jquery/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="common-home">
    <a href="#" class="house-heaven"></a>

    <!-- Top Navigation -->
    <nav id="top">
        <div class="container">
            <div id="top-links">
                <ul class="list-inline">
                    <li><a href="tel:0906430244"><i class="fa fa-phone"></i></a> <span>(090)6430244</span></li>
                </ul>
            </div>
            <div id="top-links2">
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-user"></i> <span>My Account</span></a></li>
                    <li><a href="#" title="Wish List (0)" id="wishlist-total"><i class="fa fa-heart"></i>
                            <span>Wishlist (0)</span></a></li>
                    <li><a href="" title="Checkout"><i class="fa fa-shopping-bag"></i> <span>Checkout</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div id="logo">
                        <a href="https://demohouseserver.com/phptraining/abhi/agri-ci/"><img alt="Agriculture"
                                class="img-responsive" src="{{ asset('images/logo.png') }}" title="Agriculture"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="header-right">

                        <!-- Search -->
                        <div class="input-group" id="search">
                            <form method="get" action="https://demohouseserver.com/phptraining/abhi/agri-ci/products">
                                <div>
                                    <input class="form-control input-lg" name="name" placeholder="Search"
                                        value="">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default btn-lg" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>

                        <!-- Cart -->
                        <div class="btn-block btn-group" id="cart">
                            <button class="btn btn-viewcart dropdown-toggle" type="button">
                                <span class="lg">My Cart</span>
                                <span id="cart-total"><i class="fa fa-shopping-basket"></i> (0) items</span>
                            </button>
                            <ul class="dropdown-menu pull-right">
                                <li id="mini-calculation">
                                    <div>
                                        <p class="text-right"><a
                                                href="https://demohouseserver.com/phptraining/abhi/agri-ci/cart"><strong><i
                                                        class="fa fa-shopping-cart"></i> View Cart</strong></a> <a
                                                href="https://demohouseserver.com/phptraining/abhi/agri-ci/billing"><strong><i
                                                        class="fa fa-share"></i> Checkout</strong></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation Menu -->
    <div class="navMenu-main">
        <div class="gn-icon-menu" id="menu"><span></span></div>
    </div>
    <div class="top-menu">
        <div class="container">
            <div id="slidingMenu">
                <nav id="navMenu">
                    <ul>
                        <li><a href="https://demohouseserver.com/phptraining/abhi/agri-ci/">Home</a></li>
                        <li>
                            <a href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid=32">Animal
                                Dosing</a>
                            <ul>
                                <li><a
                                        href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid32&sid=23">Dog</a>
                                </li>
                                <li><a
                                        href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid32&sid=24">Cats</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid=33">Cattles</a>
                        </li>
                        <li>
                            <a href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid=35">Sheep</a>
                        </li>
                        <li>
                            <a href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid=36">Horses</a>
                        </li>
                        <li>
                            <a href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid=40">Fencing</a>
                        </li>
                        <li>
                            <a href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid=41">Hardware</a>
                        </li>
                        <li>
                            <a href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid=42">Clothing &
                                Footwear</a>
                        </li>
                        <li>
                            <a href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid=44">Anand</a>
                            <ul>
                                <li><a
                                        href="https://demohouseserver.com/phptraining/abhi/agri-ci/category?cid44&sid=31">Sub
                                        Anand</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    
    <!-- Cart Toggle Script -->
    <script>
        $(document).ready(function() {
            $(".btn-viewcart").on("click", function(e) {
                e.preventDefault();
                $("#cart .dropdown-menu").slideToggle("fast");
            });
            $(document).on("click", function(e) {
                if (!$(e.target).closest("#cart").length) {
                    $("#cart .dropdown-menu").slideUp("fast");
                }
            });
        });
    </script>
