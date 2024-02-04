<style>
    body {
      background-color: #f8f9fa;
    }
    .login-modal {
      text-align: center;
    }
  </style>

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
                            @if(Auth::check())
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>{{Auth::user()->name}}</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="{{ route('actionlogout') }}">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            @else
                                <a href="" data-toggle="modal" data-target="#loginModal">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Login</span>
                                </a>
                            @endif
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

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('actionlogin') }}" method="post">
                @csrf
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                </div>
                <p class="text-center fs-6">Belum punya akun? <a href="" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">Register</a> sekarang!</p>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Register Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('actionregister') }}" method="post">
                @csrf
                <div class="form-group">
                    <label><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Username</label>
                    <input type="text" name="name" class="form-control" placeholder="name" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <p class="text-center fs-6">Sudah punya akun silahkan <a href="" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Login Disini!</a></p>
                <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-user"></i>
                    Register</button>
            </form>
        </div>
      </div>
    </div>
  </div>