<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Bridged') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet"type="text/css" >
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/barrowerinfo">Loan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/barrowersource">Partners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Promos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News & Blogs</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link loginModalTrigger" data-toggle="modal" data-target="#loginModal">
                                        <div style="font-size: 0.5rem;">
                                            <i class="far fa-user fa-2x"></i>
                                        </div>
                                    </a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    My Account <span class="caret"></span>
                                </a>

                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<body>
  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

 <footer class="container-fluid">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-3">
                        <ul>
                            <li>ABOUT US</li>
                            <li>Home</li>
                            <li>Who we are</li>
                            <li>Product & Services</li>
                            <li>Our Credit Partners</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>NEED HELP?</li>
                            <li>FAQs</li>
                            <li>Terms</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>NEWS</li>
                            <li>Financial Blogs</li>
                            <li>News and Updates</li>
                            <li>Process Flow</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>TOOLS</li>
                            <li>Account Setting</li>
                            <li>Loan Calculator</li>
                        </ul>
                    </div>
                </div>
                <div class="text-center col-md-12 pb-3">
                    <p>Copyright @ 2018</p>
                </div>
            </div>
        </footer>
    </div>
</html>