<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Ecommerce HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css/fontawesome.css">
    <link rel="stylesheet" href="/css/tooplate-main.css">
    <link rel="stylesheet" href="/css/owl.css">


    <!--
    <title>@ViewBag.Title</title>
</head>
<body>
         Pre Header -->
    <div id="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Suspendisse laoreet magna vel diam lobortis imperdiet</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="/image/header-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" asp-controller="Home" asp-action="Index">
                            Home

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
        @section('header')
        @auth
            Chao {{ Auth::user()->name }}
            @can('isAdmin')
                <a href="{{ route('dashboard') }}">admin</a>
            @endcan
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <input type="submit" value="Đăng Xuất">
            </form>
        @endauth
        @guest
            <a href="{{ route('login') }}">Dang nhap</a>
        @endguest
        <br>
        <a href="/">Home</a>
    @show
        <div class="container">
            @yield('content')
            <div class="row-">
                <div class="col-md-12">
                    <div class="caption">
                        <h2>Ecommerce HTML Template</h2>
                        <div class="line-dec"></div>
                        <p>
                            Pixie HTML Template can be converted into your desired CMS theme. Total <strong>5
                                pages</strong> included. You can use this Bootstrap v4.1.3 layout for any CMS.
                            <br><br>Please tell your friends about <a rel="nofollow"
                                href="https://www.facebook.com/tooplate/">Tooplate</a> free template site. Thank you.
                            Photo credit goes to <a rel="nofollow" href="https://www.pexels.com">Pexels website</a>.
                        </p>
                        <div class="main-button">
                            <a href="#">Order Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->
    <!-- Featured Starts Here -->
    <div class="featured-items">
        <div class="container">

        </div>
    </div>
    <!-- Featred Ends Here -->
    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Subscribe on PIXIE now!</h1>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="main-content">
                        <p>Integer vel turpis ultricies, lacinia ligula id, lobortis augue. Vivamus porttitor dui id
                            dictum efficitur. Phasellus vel interdum elit.</p>
                        <div class="container">
                            <form id="subscribe" action="" method="get">
                                <div class="row">
                                    <div class="col-md-7">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email"
                                                onfocus="if(this.value == 'Your Email...') { this.value = ''; }"
                                                onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                                                value="Your Email..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-5">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="button">Subscribe
                                                Now!</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Form Ends Here -->
    <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <img src="/image/header-logo.png" alt="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">How It Works ?</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Ends Here -->
    <!-- Sub Footer Starts Here -->
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>
                            Copyright &copy; 2019 Company Name

                            - Design: <a rel="nofollow" href="https://www.facebook.com/tooplate">Tooplate</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Footer Ends Here -->
    <!-- Bootstrap core JavaScript -->
    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/js/custom.js"></script>
    <script src="/js/owl.js"></script>


    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
    </script>
    </body>

</html>
