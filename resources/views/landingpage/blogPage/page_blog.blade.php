<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Page Blog</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- slidck slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map"
        integrity="undefined" crossorigin="anonymous" />


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand center" href="{{ route('featchRecipes') }}">
                        <span>
                            Delfood Blog
                        </span>
                    </a>
                    <div class="" id="">
                        <div class="User_option">
                            @if (Auth::check())
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="userDropdown"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>{{ Auth::user()->name }}</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="{{ route('actionlogout') }}">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            @else
                                <a href="" id="openLoginModal" data-toggle="modal" data-target="#loginModal">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Login</span>
                                </a>
                            @endif
                        </div>
                        <div class="custom_menu-btn">
                            <button onclick="openNav()">
                                <img src="images/menu.png" alt="">
                            </button>
                        </div>
                        <div id="myNav" class="overlay">
                            <div class="overlay-content">
                                <a href="{{ route('featchRecipes') }}">Home</a>
                                <a href="{{ route('pageBlog') }}">Blog</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

    </div>


    <!-- news section -->

    <section class="recipe_section layout_padding-top">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Blog
                </h2>
            </div>
            <div class="row">
                @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                        <div class="col-sm-6 col-md-3 mx-auto">
                            <div class="box">
                                <div class="img-box">
                                    <img src="blogs/{{ $blog->image }}" class="box-img" alt=""
                                        style="object-fit: cover; max-width: 100%; height: 300px;">
                                </div>
                                <div class="detail-box">
                                    <h4 style="max-height: 1.2em; overflow: hidden; text-overflow: ellipsis;">
                                        {{ $blog->title }}
                                    </h4>
                                    <a href="{{ route('detailBlog', ['id' => $blog->id]) }}">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-sm-6 col-md-3 mx-auto">
                        <div class="box">
                            <div class="detail-box">
                                <h4 style="max-height: 1.2em; overflow: hidden; text-overflow: ellipsis;">
                                    No blogs available
                                </h4>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- end news section -->

    <div class="footer_container">
        <!-- info section -->
        <section class="info_section ">
            <div class="container">
                <div class="contact_box">
                    <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="info_links">
                    <ul>
                        <li class="active">
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="about.html">
                                About
                            </a>
                        </li>
                        <li>
                            <a class="" href="blog.html">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a class="" href="testimonial.html">
                                Testimonial
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="social_box">
                    <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </section>
        <!-- end info_section -->


        <!-- footer section -->
        <footer class="footer_section">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a><br>
                    Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                </p>
            </div>
        </footer>
        <!-- footer section -->

    </div>
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- slick  slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>


</body>

</html>
