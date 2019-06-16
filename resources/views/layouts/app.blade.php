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
                       
                            <div class="row">
                                <div class="col-sm-3 col-md-3">
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
                                <!--breaking news-->
                                
                                
                                
                            </div>
                        </div>
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                
                    <div class="top_banner_wrap">
                        <div class="container" style="height:100px;">
                            <div class="row">
                                <div class="col-xs-12 col-md-4 col-sm-4">
                                    <div class="header-logo">  <!-- logo -->
                                        <a href="home-style-one.html">
                                            <img class="td-retina-data img-responsive" src="images/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                          
                            </div>
                        </div>
                
                    <!-- main navber -->
                    <div class="container hidden-xs">
                        <nav class="navbar">
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="home-style-one.html" class="category01">الصفحة الرئيسية</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle category02" data-toggle="dropdown" aria-expanded="false">كل الصفحات<span class="pe-7s-angle-down"></span></a>
                                        <ul class="dropdown-menu menu-slide"> 
                                            <li class="dropdown-submenu"><a href="#">الصفحة الرئيسية</a>
                                                <ul class="dropdown-menu zoomIn">
                                                    <li><a href="home-style-one.html">منزل نمط واحد</a></li>
                                                    <li><a href="home-style-two.html">نمط المنزل اثنين</a></li> 
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">الفئات</a>
                                                <ul class="dropdown-menu zoomIn">
                                                    <li><a href="category-style-one.html">فئة نمط واحد</a></li>
                                                    <li><a href="category-style-two.html">فئة أسلوب اثنين</a></li>
                                                    <li><a href="category-style-three.html">فئة أسلوب ثلاثة</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">أرشيف</a>
                                                <ul class="dropdown-menu zoomIn">
                                                    <li><a href="archive-one.html">أسلوب أرشيف واحد</a></li>
                                                    <li><a href="archive-two.html">أرشيف أسلوب اثنين</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">أخبار</a>
                                                <ul class="dropdown-menu zoomIn">
                                                    <li><a href="details-style-one.html">أخبار وظيفة واحدة</a></li>
                                                    <li><a href="details-style-two.html">آخر الأخبار اثنين</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">اتصال</a>
                                                <ul class="dropdown-menu zoomIn">
                                                    <li><a href="contact-style-one.html">الاتصال نمط واحد</a> </li>
                                                    <li><a href="contact-style-two.html">أسلوب الاتصال اثنين</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="login&amp;registration.html">تسجيل الدخول والتسجيل</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle category03" data-toggle="dropdown" aria-expanded="false">دولي <span class="pe-7s-angle-down"></span></a>
                                        <ul class="dropdown-menu menu-slide">
                                            <li><a href="#">أحياناً عن طريق</a></li>
                                            <li class="dropdown-submenu"><a href="#">هناك حقيقة مثبتة منذ زمن</a>
                                                <ul class="dropdown-menu zoomIn">
                                                    <li><a href="#">لوريم إيبسوم</a></li>
                                                    <li><a href="#">خلافاَ للإعتقاد السائد</a></li>
                                                    <li><a href="#">فلقد اتضح أن</a></li>
                                                    <li><a href="#">هنالك العديد من</a></li>
                                                    <li><a href="#">أحياناً عن طريق</a></li>
                                                    <li><a href="#">هنالك العديد من</a></li>
                                                    <li><a href="#">بينما تعمل جميع</a></li>
                                                </ul>
                                            </li>
                                            <!--<li class="divider"></li>-->
                                            <li><a href="#">على أكثر من</a></li>
                                            <li><a href="#">هنالك العديد من</a></li>
                                            <li><a href="#">لمهتمين قمنا بوضع</a></li>
                                            <li><a href="#">إيبسوم ذو شكل</a></li>
                                            <li><a href="#">إدخال بعض</a></li>
                                            <li><a href="#">عليك أن تتحقق</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="category-style-two.html" class="category04">موضة</a></li>
                                    <li><a href="category-style-one.html" class="category05">سفر</a></li>
                                    <li><a href="#" class="category06">طعام</a></li>
                                    <li><a href="#" class="category07">تكنولوجيا</a></li>
                                    <li><a href="#" class="category08">نمط الحياة</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle category09" data-toggle="dropdown">اتصال <span class="pe-7s-angle-down"></span></a>
                                        <ul class="dropdown-menu menu-slide">
                                            <li><a href="contact-style-one.html">الاتصال نمط واحد</a> </li>
                                            <li><a href="contact-style-two.html">أسلوب الاتصال اثنين</a></li>
                                        </ul>
                                    </li>
                                    @if(Auth::check())
                                    <li><a href="/channels/create" class="category04">اضافة مجلة</a></li>
                                    @endif
                                    <li><a href="/articles/create" class="category01">اضافة مقالة</a></li>
                                    <li><a href="channels/magazines/0/articles" class="category01">جميع المقلات</a></li>
                                </ul>
                            </div><!-- navbar-collapse -->
                        </nav>
                    </div>
               
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    
                </div>
            </nav>
    
     
            @yield('content')
            
            
    
    

        <div class="sub-footer" style=" padding-bottom:-7.5rem">  <!-- sub footer -->
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
