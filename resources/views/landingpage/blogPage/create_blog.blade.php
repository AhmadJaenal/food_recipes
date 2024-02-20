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
    <link rel="stylesheet"
        href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">


    <title>Create Blog</title>


    <!-- bootstrap core css -->
    {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> --}}
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fonts style -->
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap') }}"
        rel="stylesheet">

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css') }}"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- slidck slider -->
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css') }}"
        integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map') }}"
        integrity="undefined" crossorigin="anonymous" />


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

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

    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 10px 16px;
        border-radius: 35px;
        font-size: 24px;
        line-height: 1.33;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        padding: 6px 0px;
        border-radius: 15px;
        text-align: center;
        font-size: 12px;
        line-height: 1.42857;
    }
</style>

<body class="sub_page">

    <form action="{{ route('postBlog', ['id' => Auth()->user()->id, 'action' => 'add']) }}" id="formBlog"
        method="post" enctype="multipart/form-data">
        @csrf
        <div style="margin: 0">

            <div class="hero_area">
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
                                            <a class="btn dropdown-toggle" href="#" role="button"
                                                id="userDropdown" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
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
                                        <a href="" id="openLoginModal" data-toggle="modal"
                                            data-target="#loginModal">
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

                <!-- slider section -->
                @if (session('success'))
                    <div class="alert alert-success m-2">
                        <b>Success!</b> {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger m-2">
                        <b>Error!</b> {{ session('error') }}
                    </div>
                @endif

                <section class="slider_section">
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="detail-box">
                                    <input type="text" value="" name="idBlog" id="idBlog" readonly
                                        style="display: none" required>
                                    <h1>
                                        <textarea id="postTitle" class="transparent-input" name="postTitle" rows="3" cols="20"
                                            placeholder="please enter the title of your blog post" style="line-height: .9" required></textarea>
                                    </h1>
                                    <p>
                                        <textarea id="tagLine" class="transparent-input" name="tagLine" rows="2" cols="60"
                                            placeholder="You can add a short tagline or excerpt from this blog post" required></textarea>
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
                                <input class="file-upload-input" name="image_url" type='file' required
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
            <section class="slider_section" style="padding-bottom: 40px">
                <div class="container">
                    <div class="col-lg-10 mx-auto">
                        <div class="detail-box">
                            <p>
                                <textarea id="content" class="content" name="content" rows="20" cols="100"
                                    placeholder="You can add a short tagline or excerpt from this blog post" required></textarea>
                            </p>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <input type="text" class="form-control" id="hastag" name="hastag"
                                placeholder="Hastag" required>
                        </div>
                        <div class="d-grid gap-2 col-2 mx-auto mt-2">
                            <button type="submit" class="btn btn-primary" id="submitButton"> Post</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </form>

    <!-- blog section -->
    <section class="recipe_section">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Your Blog
                </h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-sm-6 col-md-4 mx-auto">
                        <a href="{{ route('detailBlog', ['id' => $blog->id]) }}" style="color: black">
                            <div class="box mb-3">
                                <div class="">
                                    <img src="{{ asset('blogs/' . $blog->image) }}" class="box-img rounded"
                                        alt="" style="object-fit: cover; max-width: 100%; max-height: 200px;">
                                </div>
                                <div class="detail-box">
                                    <div style="max-height: 1.2em; overflow: hidden; text-overflow: ellipsis;">
                                        <h6>{{ $blog->tagline }}</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col">
                            <div class="d-flex align-items-center">
                                <form action="{{ route('publishBlog') }}" method="get"
                                    id="publishForm{{ $blog->id }}">
                                    @csrf
                                    <input type="text" value="{{ $blog->id }}" name="idBlogPublish"
                                        style="display: none">

                                    <button type="button"
                                        class="btn {{ $blog->status ? 'btn-warning' : 'btn-primary' }} me-2"
                                        data-toggle="modal" data-target="#confirmModalBlog{{ $blog->id }}">
                                        {{ $blog->status ? 'Blog Published' : 'Not Published' }}
                                    </button>

                                    <div class="modal fade" id="confirmModalBlog{{ $blog->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="confirmModalBlog{{ $blog->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmModalLabel">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to
                                                    {{ $blog->status ? 'unpublish' : 'publish' }} this blog?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <button type="button"
                                    class="btn btn-warning btn-circle btn-lg edit-button updateButton"
                                    id="updateButton" data-id="{{ $blog->id }}" style="margin-left: 5px"><i
                                        class="fa fa-edit" style="color: white"></i>
                                </button>

                                <form action="{{ route('deleteBlog') }}" method="get"
                                    id="deleteForm{{ $blog->id }}">
                                    @csrf
                                    <input type="hidden" value="{{ $blog->id }}" name="idBlogDelete">
                                    <button type="button" class="btn btn-warning btn-circle btn-lg"
                                        data-toggle="modal" data-target="#confirmModal{{ $blog->id }}"
                                        style="margin-left: 5px">
                                        <i class="fa fa-times" style="color: white"></i>
                                    </button>

                                    <div class="modal fade" id="confirmModal{{ $blog->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="confirmModalLabel{{ $blog->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmModalLabel">Confirmation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this blog?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>

                                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="recipe_section layout_padding-top">

    </section>

    <!-- end blog section -->

    @include('partials.footer')

    <!-- jQery -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- slick  slider -->
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js') }}"></script>
    <!-- nice select -->
    <script
        src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js') }}"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script type="module" src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js') }}"></script>
    <script nomodule src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js') }}"></script>
    <script src="{{ asset('https://code.jquery.com/jquery-3.6.0.min.js') }}"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+M5O3y0t/HzJF8/XnEhFQ5EJq1CKD61z6XvCaih" crossorigin="anonymous">
    </script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>

</body>

<script>
    document.querySelectorAll('.edit-button').forEach(item => {
        item.addEventListener('click', event => {
            const blogId = item.getAttribute('data-id');
            fetch(`/getBlogData/${blogId}`)
                .then(response => response.json())
                .then(data => {

                    document.getElementById('idBlog').value = data.id;
                    document.getElementById('postTitle').value = data.title;
                    document.getElementById('tagLine').value = data.tagline;
                    document.getElementById('content').value = data.content;
                    document.getElementById('hastag').value = data.hastag;
                })
                .catch(error => console.error('Error:', error));
        });
    });
</script>

{{-- <script>
    const updateButton = document.getElementById('updateButton');
    const submitButton = document.getElementById('submitButton');

    updateButton.addEventListener('click', () => {
        const blogId = updateButton.getAttribute('data-id');
        const form = document.getElementById('formBlog');
        form.action = `{{ route('postBlog', ['id' => Auth()->user()->id, 'action' => 'update']) }}`;
    });

    updateButton.addEventListener('click', () => {
        submitButton.textContent = 'Save Changes';
    });
</script> --}}


{{-- <script>
    document.querySelectorAll('.edit-button').forEach(item => {
        item.addEventListener('click', event => {
            // Dapatkan elemen form
            const form = item.closest('form');
            // Ubah nilai atribut action menjadi 'update'
            form.setAttribute('action',
                "{{ route('postBlog', ['id' => Auth()->user()->id, 'action' => 'update']) }}");
        });
    });
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
