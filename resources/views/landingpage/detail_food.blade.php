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
                    {{ $detailRecipe['title'] }}
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="img-box">
                        <img src="{{ $detailRecipe['image'] }}" class="box-img" alt="" style="width: 100%;">
                    </div>

                    @if(Auth::check())
                        @if ($id_favorite)
                            <form action="{{ route('removeFavorite', $id_favorite) }}" method="post">
                                @csrf
                                <input type="text" name="id_user" hidden value="{{Auth::user()->id}}">
                                <input type="text" name="id_recipe" hidden value="{{$detailRecipe['id']}}">
                                <input type="text" name="title" hidden value="{{$detailRecipe['title']}}">
                                <input type="text" name="image" hidden value="{{$detailRecipe['image']}}">
                                <div class="row justify-content-center mt-4">
                                    <button type="submit" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
                                            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1"/>
                                        </svg>
                                        </button>
                                </div>
                            </form>
                        @else
                            <form action="{{ route('addFavorite') }}" method="post">
                                @csrf
                                <input type="text" name="id_user" hidden value="{{Auth::user()->id}}">
                                <input type="text" name="id_recipe" hidden value="{{$detailRecipe['id']}}">
                                <input type="text" name="title" hidden value="{{$detailRecipe['title']}}">
                                <input type="text" name="image" hidden value="{{$detailRecipe['image']}}">
                                <div class="row justify-content-center mt-4">
                                    <button type="submit" class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-suit-heart" viewBox="0 0 16 16">
                                            <path d="m8 6.236-.894-1.789c-.222-.443-.607-1.08-1.152-1.595C5.418 2.345 4.776 2 4 2 2.324 2 1 3.326 1 4.92c0 1.211.554 2.066 1.868 3.37.337.334.721.695 1.146 1.093C5.122 10.423 6.5 11.717 8 13.447c1.5-1.73 2.878-3.024 3.986-4.064.425-.398.81-.76 1.146-1.093C14.446 6.986 15 6.131 15 4.92 15 3.326 13.676 2 12 2c-.777 0-1.418.345-1.954.852-.545.515-.93 1.152-1.152 1.595zm.392 8.292a.513.513 0 0 1-.784 0c-1.601-1.902-3.05-3.262-4.243-4.381C1.3 8.208 0 6.989 0 4.92 0 2.755 1.79 1 4 1c1.6 0 2.719 1.05 3.404 2.008.26.365.458.716.596.992a7.6 7.6 0 0 1 .596-.992C9.281 2.049 10.4 1 12 1c2.21 0 4 1.755 4 3.92 0 2.069-1.3 3.288-3.365 5.227-1.193 1.12-2.642 2.48-4.243 4.38z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        @endif
                    @endif
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

            <div class="row justify-content-center mb-3">
                <div class="col-md-12">
                    {!! $summary['summary'] !!}
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item disabled">Ingredients</li>
                        @foreach ($ingredients['ingredients'] as $index => $item)
                            <li class="list-group-item">{{ $index+1 }}. {{ $item['name'] }}
                            @if(in_array($index+1, $index_substitutes))

                            <a href="{{ route('ingredientSubst', ['ingredients' => $item['name']]) }}">Substitute</a>
                            @endif
                            </li>
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
