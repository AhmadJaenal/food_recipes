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

    <title>Delfood</title>


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

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Delfood
                        </span>
                    </a>
                    <div class="" id="">
                        <div class="User_option">
                            <a href="">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>Login</span>
                            </a>
                            <form class="form-inline ">
                                <input type="search" placeholder="Search" />
                                <button class="btn  nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="custom_menu-btn">
                            <button onclick="openNav()">
                                <img src="images/menu.png" alt="">
                            </button>
                        </div>
                        <div id="myNav" class="overlay">
                            <div class="overlay-content">
                                <a href="index.html">Home</a>
                                <a href="about.html">About</a>
                                <a href="blog.html">Blog</a>
                                <a href="testimonial.html">Testimonial</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->

        <!-- slider section -->
        <section class="slider_section ">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="detail-box">
                            <h1>
                                Discover Restuarant And Food
                            </h1>
                            <p>
                                when looking at its layout. The point of using Lorem Ipsum
                            </p>
                        </div>
                        <div class="find_container ">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('searchGrocery') }}" method="GET">
                                            <div class="form-row ">
                                                <div class="form-group col-lg-5">
                                                    <input type="text" class="form-control" id="searchInput"
                                                        name="searchInput" placeholder="Search Recipe Food">
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <div class="btn-box">
                                                        <button type="submit" class="btn ">Search</button>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-2">
                                                    <div class="btn-box">
                                                        <button type="button" class="btn btn-warning"
                                                            id="settingsButton" style="width: 68px">
                                                            <ion-icon name="settings-sharp"></ion-icon>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="additionalInputs" style="display: none;">
                                                    <div class="form-group col-lg-4">
                                                        <input type="text" class="form-control"
                                                            id="includeIngredients" name="includeIngredients"
                                                            placeholder="Include Ingredients">
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <input type="text" class="form-control"
                                                            id="excludeIngredients" name="excludeIngredients"
                                                            placeholder="Exclude Ingredients">
                                                    </div>
                                                    <div class="form-group col-lg-4">
                                                        <input type="text" class="form-control" id="type"
                                                            name="type" placeholder="Type">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider_container">
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img1.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img2.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img3.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img4.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img1.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img2.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img3.png" alt="" />
                    </div>
                </div>
                <div class="item">
                    <div class="img-box">
                        <img src="images/slider-img4.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <section class="news_section">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Recipe Recommendations
                </h2>
            </div>
            <div class="row">
                @foreach ($recipes as $recipe)
                    <div class="col-md-4">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ $recipe['image'] }}" class="box-img" alt=""
                                    style="width: 150px; height:150px; border-radius:100%; object-fit: cover;  border: 7px solid black;">
                            </div>
                            <div class="detail-box">
                                <h4
                                    style="max-height: 58px; overflow: hidden;
                            text-overflow: ellipsis;">
                                    {{ $recipe['name'] }}
                                </h4>

                                <a href="{{ route('detailRecipe', ['id' => $recipe['id']]) }}">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- recipe section -->

    <section class="recipe_section layout_padding-top">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Best Popular Recipes
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/r1.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Breakfast
                            </h4>
                            <a href="{{ route('foodCategory', ['type' => 'breakfast']) }}">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/r2.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Appetizer
                            </h4>
                            <a href="{{ route('foodCategory', ['type' => 'appetizer']) }}">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mx-auto">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/r3.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Dessert
                            </h4>
                            <a href="{{ route('foodCategory', ['type' => 'dessert']) }}">

                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end recipe section -->

    <!-- app section -->

    <section class="app_section">
        <div class="container">
            <div class="col-md-9 mx-auto">
                <div class="row">
                    <div class="col-md-7 col-lg-8">
                        <div class="detail-box">
                            <h2>
                                <span> Get the</span> <br>
                                Delfood App
                            </h2>
                            <p>
                                long established fact that a reader will be distracted by the readable content of a page
                                when looking at its layout. The poin
                            </p>
                            <div class="app_btn_box">
                                <a href="" class="mr-1">
                                    <img src="images/google_play.png" class="box-img" alt="">
                                </a>
                                <a href="">
                                    <img src="images/app_store.png" class="box-img" alt="">
                                </a>
                            </div>
                            <a href="" class="download_btn">
                                Download Now
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="img-box">
                            <img src="images/mobile.png" class="box-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end app section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="col-md-11 col-lg-10 mx-auto">
                <div class="heading_container heading_center">
                    <h2>
                        About Us
                    </h2>
                </div>
                <div class="box">
                    <div class="col-md-7 mx-auto">
                        <div class="img-box">
                            <img src="images/about-img.jpg" class="box-img" alt="">
                        </div>
                    </div>
                    <div class="detail-box">
                        <p>
                            Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
                            passage, and going through the cites of the word in classical literature, discovered the
                            undoubtable Virginia, looked up one of the more obscure Latin words, consectetur, from a
                            Lorem Ipsum passage, and going through the cites of the word in classical literature,
                            discovered the undoubtable
                        </p>
                        <a href="">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- news section -->

    <section class="news_section">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest News
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/n1.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Tasty Food For you
                            </h4>
                            <p>
                                there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined
                            </p>
                            <a href="">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/n2.jpg" class="box-img" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                Breakfast For you
                            </h4>
                            <p>
                                there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                generators on the Internet tend to repeat predefined
                            </p>
                            <a href="">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end news section -->

    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container">
            <div class="col-md-11 col-lg-10 mx-auto">
                <div class="heading_container heading_center">
                    <h2>
                        Testimonial
                    </h2>
                </div>
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="detail-box">
                                <h4>
                                    Virginia
                                </h4>
                                <p>
                                    Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                                    Ipsum passage, and going through the cites of the word in classical literature,
                                    discovered the undoubtable Virginia, looked up one of the more obscure Latin words,
                                    consectetur, from a Lorem Ipsum passage, and
                                </p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="detail-box">
                                <h4>
                                    Virginia
                                </h4>
                                <p>
                                    Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                                    Ipsum passage, and going through the cites of the word in classical literature,
                                    discovered the undoubtable Virginia, looked up one of the more obscure Latin words,
                                    consectetur, from a Lorem Ipsum passage, and
                                </p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="detail-box">
                                <h4>
                                    Virginia
                                </h4>
                                <p>
                                    Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                                    Ipsum passage, and going through the cites of the word in classical literature,
                                    discovered the undoubtable Virginia, looked up one of the more obscure Latin words,
                                    consectetur, from a Lorem Ipsum passage, and
                                </p>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev d-none" href="#customCarousel1" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

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

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



</body>

<script>
    document.getElementById("settingsButton").addEventListener("click", function() {
        var additionalInputs = document.getElementById("additionalInputs");
        if (additionalInputs.style.display === "none") {
            additionalInputs.style.display = "flex";
        } else {
            additionalInputs.style.display = "none";
        }
    });
</script>

</html>
