<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | Sexmedicinebd</title>
    <!-- css link -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- sec-1 start -->
    <div class="sec-1">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="{{ asset('img/logo/logo.png') }}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('new.arrivals') }}">New Arrivals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('shop') }}">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('aboutus') }}">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contactus') }}">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('privacy.policy') }}">Privacy & Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('terms.condition') }}">Terms & Conditions</a>
                            </li>
                            @if (Auth::guest())
                                <li class="nav-item ms-3">
                                    <a class="nav-link" href="{{ route('login') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                </li>
                            @else
                                <li>
                                    @if (Auth::user()->role == 1)
                                        <li class="nav-item ms-3">
                                            <a class="nav-link" href="{{ route('admin.index') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                        </li>
                                    @elseif(Auth::user()->role == 2)
                                        <li class="nav-item ms-3">
                                            <a class="nav-link" href="{{ route('admin.index') }}">Admin <i class="fa-solid fa-user-check"></i></a>
                                        </li>
                                    @endif
                                </li>
                            @endif
                        </ul>
                        </div>
                    </div>
                </nav>
            </div>
            </div>
        </div>
    </div>
    <!-- sec-1 end -->

    @yield('content')

    <!-- sec-6 start -->
    <div class="sec-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1>Address:</h1>
                <p>Number-2229,Rajgurumarg,Chuna mondi, <br>
                Pharganj , New Delhi. <br>
                Delhi-110006, India.
                </p>
            </div>
            <div class="col-lg-3 ftrwhtsap ">
                <h1>WhatsApp Number:</h1>
                <p> +918101245020</p>
            </div>
            <div class="col-lg-3 ftrwhtsap ">
                <a href="https://www.whatsapp.com/"> <img src="{{ asset('img/logo/WhatsApp_icon.png') }}" alt="">
                </a>
            </div>
            <div class="col-lg-3">
                <h1>E-mail:</h1>
                <p> sexmedicinebdteam@gmail.com</p>
            </div>
        </div>
    </div>
    </div>
    <!-- sec-6 end -->
    <!-- js -->
    <script src="{{ asset('js/jquery-3.6.0.slim.min.js') }}"></script>
    <script src="{{ asset('js/all.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>


