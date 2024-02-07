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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


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
        @include('partials.header')

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
                                        {{-- <form action="{{ route('searchGrocery') }}" method="GET">
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
                                        </form> --}}
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
                    {{ $type }}
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
                                    {{ $recipe['title'] }}
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
    
    @include('partials.footer')

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
