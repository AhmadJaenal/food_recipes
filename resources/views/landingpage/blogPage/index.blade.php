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


    <title>Search</title>


    <!-- bootstrap core css -->
    {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
<style>
    .transparent-input {
        background-color: transparent;
        border: none;
        outline: none;
        text-align: center;
        color: white;
        poin
    }

    ::placeholder {
        color: white;
        text-align: center;
    }

    .transparent-input::placeholder {
        color: white;
    }

    .transparent-input:focus {
        color: white;
    }

    .content {
        padding: 20px;
        color: black;
        border: 3px solid #d5dbe4;
        border-radius: 16px;
        background-color: white;
    }

    .content:focus {
        border: 3px solid #0d6efd;
        border-radius: 16px;
        background-color: white;
        outline: none;
    }

    textarea {
        resize: none;
    }


    .file-upload {
        background-color: #ffffff;
        width: 600px;
        height: 400px;
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #007bff;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #a0ceff;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #0072ec;
        color: #ffffff;
        transition: all .5s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 3.5px dashed #007bff;
        border-radius: 10px;
        position: relative;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #a0ceff;
        transition: all .5s ease;
        color: white;
        border: 4px dashed #ffffff;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #007bff;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
</style>

<body>

    <form action="{{ route('postBlog', ['id' => Auth()->user()->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>

            <div class="hero_area">

                <!-- slider section -->
                @if (session('message'))
                    <div class="alert alert-success m-2">
                        <b>Your Blog Published Successfully!</b> {{ session('message') }}
                    </div>
                @endif

                <section class="slider_section">
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="detail-box">
                                    <h1>
                                        <textarea id="postTitle" class="transparent-input" name="postTitle" rows="3" cols="20"
                                            placeholder="please enter the title of your blog post" style="line-height: .7"></textarea>
                                    </h1>
                                    <p>
                                        <textarea id="tagLine" class="transparent-input" name="tagLine" rows="2" cols="60"
                                            placeholder="You can add a short tagline or excerpt from this blog post"></textarea>
                                    </p>
                                    {{-- <p id="currentDate"> </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end slider section -->
            </div>

            <section class="news_section">
                <div class="container">
                    <div class="d-grid gap-2 col-6 mx-auto">

                        <div class="file-upload">
                            <button class="file-upload-btn" type="button"
                                onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                            <div class="image-upload-wrap">
                                <input class="file-upload-input" name="image_url" type='file'
                                    onchange="readURL(this);" accept="image/*" />
                                <div class="drag-text">
                                    <h3>Drag and drop a file or select add Image</h3>
                                </div>
                            </div>
                            <div class="file-upload-content">
                                <img class="file-upload-image" src="#" alt="your image" />
                                <div class="image-title-wrap">
                                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span
                                            class="image-title">Uploaded Image</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="slider_section">
                <div class="container">
                    <div class="col-lg-10 mx-auto">
                        <div class="detail-box">
                            <p>
                                <textarea id="content" class="content" name="content" rows="20" cols="100"
                                    placeholder="You can add a short tagline or excerpt from this blog post"></textarea>
                            </p>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="text" class="form-control" id="hastag" name="hastag"
                                placeholder="Hastag">
                        </div>
                        <div class="d-grid gap-2 col-2 mx-auto mt-2">
                            <button type="submit" class="btn btn-primary"> Post</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </form>

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

{{-- <script>
    window.onload = function() {
        // Mendapatkan tanggal saat ini
        var currentDate = new Date();

        // Mendapatkan elemen di HTML tempat Anda ingin menampilkan tanggal
        var dateElement = document.getElementById('currentDate');

        // Format tanggal ke dalam format yang diinginkan
        var formattedDate = currentDate.toLocaleDateString('en-US', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });

        // Menampilkan tanggal dalam elemen HTML
        dateElement.innerHTML = 'Posted ' + formattedDate + ' by Jeje';
    };
</script> --}}

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>
<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
