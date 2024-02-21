<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
    <link rel="icon" href="images/favicon.png" type="image/x-icon">


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
        <div class="m-5">
            <div class="m-5">
            </div>
        </div>
        <div class="m-5">
        </div>
        <!-- end slider section -->
    </div>
    <section class="news_section">
        <div class="container">
            <a href="{{ URL::previous() }}" class="btn btn-primary btn-lg rounded-circle">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <div class="heading_container heading_center mb-5">
                <h2>
                    Image Analysis by URL
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="img-box">
                        <form action="{{ route('imageAnalysis') }}" method="GET">
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="image_url" oninput="previewImage()"
                                        name="image_url" placeholder="Please input the image URL..." style="width:800px">
                                </div>
                                <div class="form-group px-4">
                                    <div class="btn-box">
                                        <button type="submit" class="btn btn-warning ">Analyze</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @if(isset($analysis))
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div id="image-preview">
                            <img src="{{$url}}" alt="" style="max-width:300px; max-height:300px; width:auto; height:auto;">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <label>Name : {{$analysis['category']['name']}}</label>
                        <label>Probability : {{$analysis['category']['probability']}}</label>
                    </div>
                </div>
            @else
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div id="image-preview"></div>
                    </div>
                </div>

            @endif

            @if(isset($resultRecipes))
                <div class="row">
                    @foreach ($resultRecipes as $recipe)
                        <div class="col-md-4">
                            <div class="box">
                                <div class="img-box">
                                    <img src="{{ $recipe['image'] }}" class="box-img" alt=""
                                        style="width: 150px; height:150px; border-radius:100%; object-fit: cover;  border: 8px solid black;">
                                </div>
                                <div class="detail-box">
                                    <div style="height: 100px;">
                                        <h4
                                            style="max-height: 58px; overflow: hidden;
                                        text-overflow: ellipsis;">
                                            {{ $recipe['title'] }}
                                        </h4>
                                    </div>

                                    <a href="{{ route('detailRecipe', ['id' => $recipe['id']]) }}">
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            </div>

        </div>
    </section>

    <!-- client section -->

    <section class="client_section layout_padding">
    </section>

    <!-- end client section -->

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

      <script>
        function previewImage() {
            var imageUrl = document.getElementById('image_url').value;
            var imagePreview = document.getElementById('image-preview');
            imagePreview.innerHTML = '';
    
            var imgElement = document.createElement('img');
            imgElement.onload = function() {
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                var maxSize = 300;
                var ratio = 1;
    
                if (imgElement.width > maxSize || imgElement.height > maxSize) {
                    if (imgElement.width > imgElement.height) {
                        ratio = maxSize / imgElement.width;
                    } else {
                        ratio = maxSize / imgElement.height;
                    }
                }
    
                canvas.width = imgElement.width * ratio;
                canvas.height = imgElement.height * ratio;
                ctx.drawImage(imgElement, 0, 0, canvas.width, canvas.height);
                imagePreview.appendChild(canvas);
            };
    
            imgElement.onerror = function() {
                var errorText = document.createTextNode('Gambar tidak dapat dimuat');
                imagePreview.appendChild(errorText);
            };
    
            imgElement.src = imageUrl;
        }
    </script>
    


</body>

</html>
