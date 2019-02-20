<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>C & BT</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <!-- font icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app2.css') }}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vertical-menu.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="content-right-sidebar" class="vertical-layout vertical-menu content-right-sidebar  fixed-navbar">
    
    <!-- - var navbarCustom = "navbar-fixed-top navbar-semi-dark navbar-shadow"-->
    <!-- navbar-fixed-top-->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper" style="width: 100%;">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="C & BT" src="" data-expand="{{ asset('imagenes/logo.png') }}" data-collapse="{{ asset('imagenes/logop.png') }}" class="brand-logo"></a></li>
            <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x fa-rotate-90"></i></a></li>
          </ul>
        </div>
        <div class="container" style="background-color:#1d2b36; width: 100%;">
          <div class="row">
            <div class="col-md-1">
                <button type="button" style="color: #fff;" class="btn btn-outline-dark"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="fas fa-th-list"></i></a></button>
            </div>
            <div class="col-md-8" style="justify-content: center; display: flex; align-items: center; color: #fff;">
                @guest
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                <h3><strong>{{ Auth::user()->name }}</strong></h3>                      
            </div>
            <div class="col-md-3">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <strong style="color: #fff;">{{ __('Cerrar sesión  ') }}<i class="fas fa-sign-out-alt" style="color: #F60A0A"></i></strong>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                @endguest
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    @if(auth()->user()->id_tipoUsuario == 1)
      @include('admin.menuAdmi')
      @include('admin.indexAdmin')
    @else
      @include('user.menuUser')
      @include('user.indexUser')
    @endif

    
    <!-- ////////////////////////////////////////////////////////////////////////////-->



    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('js/app-assets/js/core/libraries/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/vendors/js/ui/tether.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/vendors/js/ui/unison.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/vendors/js/ui/blockUI.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/vendors/js/ui/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/vendors/js/ui/screenfull.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/vendors/js/extensions/pace.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{ asset('js/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/js/core/app.js') }}" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS
    <script src="{{ asset('js/app-assets/js/scripts/documentation.js') }}" type="text/javascript"></script>-->
    <script src="{{ asset('js/app-assets/vendors/js/ui/prism.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app-assets/vendors/js/ui/affix.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>