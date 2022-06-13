<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stalk-INATOR</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('assets/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- Fix Footer CSS -->
    <link type="text/css" href="{{ asset('assets/vendor/fix-footer.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('assets/css/material-icons.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/material-icons.rtl.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/fontawesome.rtl.css') }}" rel="stylesheet">
 
    <!-- Preloader -->
    <link type="text/css" href="{{ asset('assets/css/preloader.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/preloader.rtl.css') }}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/app.rtl.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/css/quill.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/css/quill.rtl.css') }}" rel="stylesheet">
</head>

<body class="layout-navbar-mini-fixed-bottom">
    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>
   

    <!-- Header Layout -->
   
    <div class="mdk-header-layout js-mdk-header-layout">
        <div id="header" class="mdk-header bg-dark js-mdk-header mb-0" data-effects="waterfall blend-background" data-fixed data-condenses>
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible" id= role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong> {{ session()->get('message') }}</strong> You are signed in now!
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Oh no!</strong>An error has occured. Please try again.
                </div>
            @endif

            <div class="mdk-header__content">
               
                <div class="navbar navbar-expand-sm navbar-dark bg-dark pr-0 pr-md-16pt" id="default-navbar" data-primary>

                    <!-- Navbar toggler -->
                    <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="{{ route('homepage') }}" class="navbar-brand">
                        <img class="navbar-brand-icon mr-0 mr-md-8pt" src="{{ asset('assets/images/logo/logo.png') }}" width="30" alt="Tutorio">
                        <span class="d-none d-md-block">Stalk-INATOR</span>
                    </a>
					
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					  
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                @if (Route::has('login'))
                                    @auth
                                        @if(Auth::user()->hasRole('student'))
                                            <a class="nav-item nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
                                            <a class="nav-item nav-link" href="{{ route('missions') }}">Missions</a>
                                            <a class="nav-item nav-link" href="#">Leaderboard</a>
                                            <a class="nav-item nav-link" href="{{ route('dashboard.studentDashboard') }}">Dashboard</a>
                                        @elseif(Auth::user()->hasRole('lecturer'))
                                            <a class="nav-item nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
                                            <a class="nav-item nav-link" href="{{ route('missions') }}">Missions</a>
                                            <a class="nav-item nav-link" href="#">Mission Configurations</a>
                                            <a class="nav-item nav-link" href="#">Submissions</a>
                                            <a class="nav-item nav-link" href="#">Leaderboard</a>
                                        @endif
                                @else
                                    <a class="nav-item nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
                                    <a class="nav-item nav-link" href="#">Start Playing</a>
                                    @endauth
                                @endif
                            </div>
                        </div>
					</nav>
                    <!-- <button class="btn btn-black mr-16pt" data-toggle="modal" data-target="#courses">Courses <i class="material-icons">arrow_drop_down</i></button> -->
                    @if (Route::has('login'))
                        @auth
                            <nav class="nav navbar-nav ml-auto flex-nowrap">
                                <div class="nav-item dropdown d-none d-sm-flex ml-16pt">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                        <img width="32" height="32" class="rounded-circle" src="{{ asset('assets/images/people/50/guy-3.jpg') }}" alt="student" />
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                                        <a class="dropdown-item" href="#">{{ Auth::user()->email }}</a>
                                        <div class="dropdown-divider"></div>
                                        <div class="dropdown-header"><strong>Account</strong></div>
                                        <a class="dropdown-item" href="student-edit-account.html">Edit Account</a>
                                        <form method ="POST" action ="{{ route('logout') }}">
                                            @csrf    
                                                <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a>
                                        </form> 
                                    </div>
                                </div>
                            </nav>
                        @else
                            <nav class="nav navbar-nav ml-auto flex-nowrap">
                                <div class="nav-item dropdown d-none d-sm-flex ml-16pt">
                                    <ul class="nav navbar-nav ml-auto flex-nowrap" style="white-space: nowrap;">
                                        <li class="d-none d-sm-flex nav-item">
                                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                        </li>
                                        <li class="d-none d-sm-flex nav-item">
                                        <a href="{{ route('login') }}" class="btn btn-accent">Login</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
       

        <!-- // END Header -->
		<!-- Header Layout Content -->
        @yield('content')
        <!-- // END Header Layout Content -->
		<div class="js-fix-footer bg-white border-top-2">
			<div class="bg-footer page-section py-lg-50pt">
				<p class="text-white-50 mb-0" style = "text-align:center">Copyright 2022 &copy;</p>
			</div>
		</div>
    </div>
    <!-- // END Header Layout -->
  
    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings theme-active="blue-light" :theme-location="{
      'blue-light': 'http://tutorio-bootstrap.frontendmatter.com/signup.html',
      'blue-dark': 'http://tutorio-dark.frontendmatter.com/signup.html',
      'teal-light': 'http://tutorio-teal.frontendmatter.com/signup.html',
      'teal-dark': 'http://tutorio-teal-dark.frontendmatter.com/signup.html'
    }" sidebar-variant="bg-transparent border-0"></app-settings>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>

    <!-- Perfect Scrollbar -->
    <script src="{{ asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>

    <!-- DOM Factory -->
    <script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>

    <!-- MDK -->
    <script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>

    <!-- Fix Footer -->
    <script src="{{ asset('assets/vendor/fix-footer.js') }}"></script>

    <!-- Chart.js -->
    <script src="{{ asset('assets/vendor/Chart.min.js') }}"></script>

    <!-- App JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Highlight.js -->
    <script src="{{ asset('assets/js/hljs.js') }}"></script>

    <!-- App Settings (safe to remove) -->
    <script src="{{ asset('assets/js/app-settings.js') }}"></script>
    <!-- Quill -->
    <script src="{{ asset('assets/vendor/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/quill.js') }}"></script>

    @yield('script')


</body>

</html>