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
        <!-- end slider section -->
    </div>

    <section class="news_section">
        <div class="container">
            <div class="heading_container heading_center mb-5">
                <h2>
                    {{ $detailRecipe['title'] }}
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="img-box">

                        <img src="{{ $detailRecipe['image'] }}" class="box-img" alt="" style="width: 100%;">
                    </div>
                </div>

                <div class="col-md-4">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Property</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vegetarian</td>
                                <td>
                                    @if ($detailRecipe['vegetarian'])
                                        <span class="text-success">&#10004;</span>
                                    @else
                                        <span class="text-danger">&#10008;</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Vegan</td>
                                <td>
                                    @if ($detailRecipe['vegan'])
                                        <span class="text-success">&#10004;</span>
                                    @else
                                        <span class="text-danger">&#10008;</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Gluten-Free</td>
                                <td>
                                    @if ($detailRecipe['glutenFree'])
                                        <span class="text-success">&#10004;</span>
                                    @else
                                        <span class="text-danger">&#10008;</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Dairy-Free</td>
                                <td>
                                    @if ($detailRecipe['dairyFree'])
                                        <span class="text-success">&#10004;</span>
                                    @else
                                        <span class="text-danger">&#10008;</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Very Healthy</td>
                                <td>
                                    @if ($detailRecipe['veryHealthy'])
                                        <span class="text-success">&#10004;</span>
                                    @else
                                        <span class="text-danger">&#10008;</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Cheap</td>
                                <td>
                                    @if ($detailRecipe['cheap'])
                                        <span class="text-success">&#10004;</span>
                                    @else
                                        <span class="text-danger">&#10008;</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Very Popular</td>
                                <td>
                                    @if ($detailRecipe['veryPopular'])
                                        <span class="text-success">&#10004;</span>
                                    @else
                                        <span class="text-danger">&#10008;</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Sustainable</td>
                                <td>
                                    @if ($detailRecipe['sustainable'])
                                        <span class="text-success">&#10004;</span>
                                    @else
                                        <span class="text-danger">&#10008;</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Low Fodmap</td>
                                <td>
                                    @if ($detailRecipe['lowFodmap'])
                                        <span class="text-success">&#10004;</span>
                                    @else
                                        <span class="text-danger">&#10008;</span>
                                    @endif

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    {!! $tasteWidget !!}
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item disabled">Ingredients</li>
                        @foreach ($ingredients['ingredients'] as $index => $item)
                            <li class="list-group-item">{{ $index+1 }}. {{ $item['name'] }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-8">
                    <ul class="list-group">
                        <li class="list-group-item disabled">Preparation</li>
                        @foreach ($detailRecipe['analyzedInstructions'][0]['steps'] as $recipe)
                            <li class="list-group-item">{{ $recipe['number'] }} {{ $recipe['step'] }}</li>
{{-- 
                            @foreach ($recipe['ingredients'] as $ingredients)
                                <p>{{ $ingredients['name'] }}</p>
                            @endforeach

                            @foreach ($recipe['equipment'] as $equipment)
                                <p>{{ $equipment['name'] }}</p>
                            @endforeach --}}
                        @endforeach

                    </ul>
                </div>
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

</body>

</html>
