
<!DOCTYPE html>

    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Score2Win | @yield('title')</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="{{asset('frontend/assets/images/favicon.png')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- FontAwesome -->
    <script defer src="{{asset('frontend/assets/vendor/fontawesome-free/js/all.js')}}"></script>
    <script defer src="{{asset('frontend/assets/vendor/fontawesome-free/js/v4-shims.js')}}"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/ionicons/css/ionicons.min.css')}}">

    <!-- Flickity -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/flickity/dist/flickity.min.css')}}">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/photoswipe/dist/photoswipe.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/photoswipe/dist/default-skin/default-skin.css')}}">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css')}}">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/vendor/summernote/dist/summernote-bs4.css')}}">

    <!-- GoodGames -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/goodgames.css')}}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="{{asset('frontend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
</head>
<!--
    Additional Classes:
        .nk-page-boxed
-->
<body>
        <!--
            Additional Classes:
                .nk-header-opaque
        -->
        <header class="nk-header nk-header-opaque">
            <!-- START: Top Contacts -->
            <div class="nk-contacts-top">
                <div class="container">
                    <div class="nk-contacts-left">
                        <ul class="nk-social-links">
                            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                            <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                            <li><a class="nk-social-twitter" href="#" target="_blank"><span class="fab fa-twitter"></span></a></li>
                            <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="nk-contacts-right">
                        <ul class="nk-contacts-icons">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modalSearch">
                                    <span class="fa fa-search"></span>
                                </a>
                            </li>
                            <li>
                                @guest
                                    <a href="#" data-toggle="modal" data-target="#modalLogin">
                                    <span class="fa fa-user"></span>
                                @else
                                    @if(Auth::user()->hasRole('admin'))
                                        <a href="{{route('admin.home')}}">
                                    @else
                                        <a href="{{route('user.home')}}">
                                    @endif
                                    <span class="fa fa-tachometer" title="Dashboard"></span>
                                @endif
                                </a>
                            </li>
                            {{-- <li>
                                <span class="nk-cart-toggle">
                                    <span class="fa fa-shopping-cart"></span>
                                    <span class="nk-badge">27</span>
                                </span>
                                <div class="nk-cart-dropdown">
                                    
                                    <div class="nk-widget-post">
                                        <a href="store-product.html" class="nk-post-image">
                                            <img src="{{asset('frontend/assets/images/product-5-xs.jpg')}}" alt="In all revolutions of">
                                        </a>
                                        <h3 class="nk-post-title">
                                            <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                            <a href="store-product.html">In all revolutions of</a>
                                        </h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">€ 23.00</div>
                                    </div>
                                    
                                    <div class="nk-widget-post">
                                        <a href="store-product.html" class="nk-post-image">
                                            <img src="{{asset('frontend/assets/images/product-7-xs.jpg')}}" alt="With what mingled joy">
                                        </a>
                                        <h3 class="nk-post-title">
                                            <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                            <a href="store-product.html">With what mingled joy</a>
                                        </h3>
                                        <div class="nk-gap-1"></div>
                                        <div class="nk-product-price">€ 14.00</div>
                                    </div>
                                    
                                    <div class="nk-gap-2"></div>
                                    <div class="text-center">
                                        <a href="store-checkout.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: Top Contacts -->
                <!--
                    START: Navbar
                -->
                <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
                    <div class="container">
                        <div class="nk-nav-table">
                            <a href="/" class="nk-nav-logo">
                                <img src="{{asset('frontend/assets/images/logo.png')}}" alt="GoodGames" width="199">
                            </a>
                            <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile"> 
                                <li class="{{(Request::is('/') ? 'active':'')}}">
                                    <a href="/">
                                        Home
                                    </a>
                                </li>
                                <li class="{{(Request::is('browse_tournaments') ? 'active':'')}}">
                                    <a href="{{route('browse_tournaments')}}">
                                        Browse Tournaments
                                    </a>
                                </li>
                                <li class="{{(Request::is('forums') ? 'active':'')}}">
                                    <a href="{{route('forums')}}">
                                        Forum
                                    </a>
                                </li>
                                <li class="{{(Request::is('about') ? 'active':'')}}">
                                    <a href="{{route('about')}}">
                                        About
                                    </a>
                                </li>
                                <li class="{{(Request::is('contact_us') ? 'active':'')}}">
                                    <a href="{{route('contact_us')}}">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                            <ul class="nk-nav nk-nav-right nk-nav-icons">
                                    <li class="single-icon d-lg-none">
                                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                            <span class="nk-icon-burger">
                                                <span class="nk-t-1"></span>
                                                <span class="nk-t-2"></span>
                                                <span class="nk-t-3"></span>
                                            </span>
                                        </a>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- END: Navbar -->
        </header>
        <!--
                START: Navbar Mobile
            -->
        <div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
            <div class="nano">
                <div class="nano-content">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="{{asset('frontend/assets/images/logo.png')}}" alt="" width="120">
                    </a>
                    <div class="nk-navbar-mobile-content">
                        <ul class="nk-nav">
                            <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Navbar Mobile -->
            <div class="nk-main">
                @yield('main-content')
                <!-- START: Footer -->
                <footer class="nk-footer">
                    <div class="container">
                        <div class="nk-gap-3"></div>
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <div class="nk-widget">
                                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
                                    <div class="nk-widget-content">
                                        <form action="php/ajax-contact-form.php" class="nk-form nk-form-ajax" novalidate="novalidate">
                                            <div class="row vertical-gap sm-gap">
                                                <div class="col-md-6">
                                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control required" name="name" placeholder="Name *">
                                                </div>
                                            </div>
                                            <div class="nk-gap"></div>
                                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                                            <div class="nk-gap-1"></div>
                                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                                <span>Send</span>
                                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                                            </button>
                                            <div class="nk-form-response-success"></div>
                                            <div class="nk-form-response-error"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="nk-widget">
                                    <h4 class="nk-widget-title"><span class="text-main-1">Score 2</span> Win</h4>
                                    <div class="nk-widget-content">
                                        <div class="row vertical-gap sm-gap">
                                            
                                            <div class="col-lg-12">
                                                    <div class="nk-post-title">Score2Win is the simplest way to start, manage and find Gaming Tournaments. In this Product All Gaming Organization will be allowed to register themselves on this platform and can conduct a gaming tournament. 
                                                    </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-gap-3"></div>
                    </div>
                    <div class="nk-copyright">
                        <div class="container">
                            <div class="nk-copyright-right">
                                <ul class="nk-social-links-2">
                                    <li><a class="nk-social-rss" href="#"><svg class="svg-inline--fa fa-rss fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="rss" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M128.081 415.959c0 35.369-28.672 64.041-64.041 64.041S0 451.328 0 415.959s28.672-64.041 64.041-64.041 64.04 28.673 64.04 64.041zm175.66 47.25c-8.354-154.6-132.185-278.587-286.95-286.95C7.656 175.765 0 183.105 0 192.253v48.069c0 8.415 6.49 15.472 14.887 16.018 111.832 7.284 201.473 96.702 208.772 208.772.547 8.397 7.604 14.887 16.018 14.887h48.069c9.149.001 16.489-7.655 15.995-16.79zm144.249.288C439.596 229.677 251.465 40.445 16.503 32.01 7.473 31.686 0 38.981 0 48.016v48.068c0 8.625 6.835 15.645 15.453 15.999 191.179 7.839 344.627 161.316 352.465 352.465.353 8.618 7.373 15.453 15.999 15.453h48.068c9.034-.001 16.329-7.474 16.005-16.504z"></path></svg><!-- <span class="fa fa-rss"></span> --></a></li>
                                    <li><a class="nk-social-twitch" href="#"><svg class="svg-inline--fa fa-twitch fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="twitch" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M40.1 32L10 108.9v314.3h107V480h60.2l56.8-56.8h87l117-117V32H40.1zm357.8 254.1L331 353H224l-56.8 56.8V353H76.9V72.1h321v214zM331 149v116.9h-40.1V149H331zm-107 0v116.9h-40.1V149H224z"></path></svg><!-- <span class="fab fa-twitch"></span> --></a></li>
                                    <li><a class="nk-social-steam" href="#"><svg class="svg-inline--fa fa-steam fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="steam" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.79 52.79 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3.1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z"></path></svg><!-- <span class="fab fa-steam"></span> --></a></li>
                                    <li><a class="nk-social-facebook" href="#"><svg class="svg-inline--fa fa-facebook fa-w-14" aria-hidden="true" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z"></path></svg><!-- <span class="fab fa-facebook"></span> --></a></li>
                                    <li><a class="nk-social-google-plus" href="#"><svg class="svg-inline--fa fa-google-plus fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="google-plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg=""><path fill="currentColor" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm-70.7 372c-68.8 0-124-55.5-124-124s55.2-124 124-124c31.3 0 60.1 11 83 32.3l-33.6 32.6c-13.2-12.9-31.3-19.1-49.4-19.1-42.9 0-77.2 35.5-77.2 78.1s34.2 78.1 77.2 78.1c32.6 0 64.9-19.1 70.1-53.3h-70.1v-42.6h116.9c1.3 6.8 1.9 13.6 1.9 20.7 0 70.8-47.5 121.2-118.8 121.2zm230.2-106.2v35.5H372v-35.5h-35.5v-35.5H372v-35.5h35.5v35.5h35.2v35.5h-35.2z"></path></svg><!-- <span class="fab fa-google-plus"></span> --></a></li>
                                    <li><a class="nk-social-twitter" href="#" target="_blank"><svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <span class="fab fa-twitter"></span> --></a></li>
                                    <li><a class="nk-social-pinterest" href="#"><svg class="svg-inline--fa fa-pinterest-p fa-w-12" aria-hidden="true" data-prefix="fab" data-icon="pinterest-p" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"></path></svg><!-- <span class="fab fa-pinterest-p"></span> --></a></li>

                                    <!-- Additional Social Buttons
                                        <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                                        <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                                        <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                                        <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                                        <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                                        <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                                        <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                                        <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                                        <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                                        <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                                        <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                                        <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                                        <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                                        <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                                        <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                                        <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                                        <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                                        <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                                        <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                                        <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                                        <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                                        <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                                    -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- END: Footer -->
            </div>
            @yield('background-images')
        </div>
                <!-- START: Search Modal -->
        <div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>

                        <h4 class="mb-0">Search</h4>

                        <div class="nk-gap-1"></div>
                        <form action="#" class="nk-form nk-form-style-1">
                            <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Search Modal -->
            
                <!-- START: Login Modal -->
        <div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="ion-android-close"></span>
                        </button>

                        <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                        <div class="nk-gap-1"></div>
                        <form method="POST" action="{{ route('login') }}" class="nk-form text-white">
                            @csrf
                            <div class="row vertical-gap">
                                <div class="col-md-6">
                                    Use email and password:

                                    <div class="nk-gap"></div>
                                    <input type="email" name="email" class="required form-control @error('email') is-invalid @enderror" placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="nk-gap"></div>
                                    <input type="password" name="password" class="required form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    Or social account:

                                    <div class="nk-gap"></div>

                                    <ul class="nk-social-links-2">
                                        <li><a class="nk-social-facebook" href="{{route('login.socials','facebook')}}"><span class="fab fa-facebook"></span></a></li>
                                        <li><a class="nk-social-google-plus" href="{{route('login.socials','google')}}"><span class="fab fa-google-plus"></span></a></li>
                                        {{-- <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li> --}}
                                    </ul>
                                </div>
                            </div>

                            <div class="nk-gap-1"></div>
                            <div class="row vertical-gap">
                                <div class="col-md-6">
                                    <button type="submit" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</button>
                                </div>
                                <div class="col-md-6">
                                    <div class="mnt-5">
                                        <small><a href="{{ route('password.request') }}">Forgot your password?</a></small>
                                    </div>
                                    <div class="mnt-5">
                                        <small><a href="{{route('register')}}">Not a member? Sign up</a></small>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Login Modal -->

    <!-- START: Scripts -->

    <!-- Object Fit Polyfill -->
    <script src="{{asset('frontend/assets/vendor/object-fit-images/dist/ofi.min.js')}}"></script>

    <!-- GSAP -->
    <script src="{{asset('frontend/assets/vendor/gsap/src/minified/TweenMax.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js')}}"></script>

    <!-- Popper -->
    <script src="{{asset('frontend/assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('frontend/assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Sticky Kit -->
    <script src="{{asset('frontend/assets/vendor/sticky-kit/dist/sticky-kit.min.js')}}"></script>

    <!-- Jarallax -->
    <script src="{{asset('frontend/assets/vendor/jarallax/dist/jarallax.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/jarallax/dist/jarallax-video.min.js')}}"></script>

    <!-- imagesLoaded -->
    <script src="{{asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>

    <!-- Flickity -->
    <script src="{{asset('frontend/assets/vendor/flickity/dist/flickity.pkgd.min.js')}}"></script>

    <!-- Photoswipe -->
    <script src="{{asset('frontend/assets/vendor/photoswipe/dist/photoswipe.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js')}}"></script>

    <!-- Jquery Validation -->
    <script src="{{asset('frontend/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>

    <!-- Jquery Countdown + Moment -->
    <script src="{{asset('frontend/assets/vendor/jquery-countdown/dist/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js')}}"></script>

    <!-- Hammer.js -->
    <script src="{{asset('frontend/assets/vendor/hammerjs/hammer.min.js')}}"></script>

    <!-- NanoSroller -->
    <script src="{{asset('frontend/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js')}}"></script>

    <!-- SoundManager2 -->
    <script src="{{asset('frontend/assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js')}}"></script>

    <!-- Seiyria Bootstrap Slider -->
    <script src="{{asset('frontend/assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js')}}"></script>

    <!-- Summernote -->
    <script src="{{asset('frontend/assets/vendor/summernote/dist/summernote-bs4.min.js')}}"></script>

    <!-- nK Share -->
    <script src="{{asset('frontend/assets/plugins/nk-share/nk-share.js')}}"></script>

    <!-- GoodGames -->
    <script src="{{asset('frontend/assets/js/goodgames.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/goodgames-init.js')}}"></script>
    <!-- END: Scripts -->
</body>
</html>
