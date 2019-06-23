<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- the new body !-->
        <div id="app">
        <div class="top_header hidden-xs">

                       
                            <div class="row d-flex container">
                                    <div class="col-md-1">
                                            <div class="header-logo">  <!-- logo -->
                                                <a href="/">
                                                    <img class="td-retina-data img-responsive" src="/images/logo.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                <div class="col-md-3 mr-auto align-self-center">
                                    <div class="top_header_menu_wrap">
                                        <ul class="top-header-menu">
                                              <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل ') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{Auth::user()->first_name}} {{Auth::user()->last_name}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('تسجيل الخروج') }}
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
                                
                                
                                
                                
                                
                            </div>
                        </div>
                        @include('includes.messages')

     
            @yield('content')
            
            
    
    

        <div class="sub-footer">  <!-- sub footer -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p><a href="" class="color-1"></a> موضوع | جميع الحقوق محفوظة 2019</p>
                   
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
