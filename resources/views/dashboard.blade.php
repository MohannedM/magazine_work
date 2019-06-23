@extends('layouts.app')
<?php use Arabic\Arabic; ?>
            @section('content')
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                
                
                    <!-- main navber -->
                    <div class="d-none d-sm-block">
                        <nav class="navbar py-3">
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="/" class="category01">الصفحة الرئيسية</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle category02" data-toggle="dropdown" aria-expanded="false">الاقسام<span class="pe-7s-angle-down"></span></a>
                                        <ul class="dropdown-menu menu-slide"> 
                                            @foreach ($categories as $category)
                                            <li><a href="{{route('categories.show', ['category'=>$category->id])}}">{{$category->category_name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('channels.index')}}" class="category04">جميع المجلات</a></li>
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
                                    <li><a href="{{route('channels.create')}}" class="category04">اضافة مجلة</a></li>
                                    @endif
                                    <li><a href="{{route('create_article')}}" class="category01">اضافة مقالة</a></li>
                                    <li><a href="{{route('articles.index', ['magazine_id'=>0])}}" class="category01">جميع المقلات</a></li>
                                </ul>
                            </div><!-- navbar-collapse -->
                        </nav>
                    </div>
               
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    
                </div>
            </nav>
       
            <div class="se-pre-con" style="display: none;"></div>
     
            <section class="news-feed">
                <div class="container">
                    <div class="row row-margin">
                        <div class="col-sm-3 hidden-xs col-padding">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="{{route('articles.show', ['magazine_id'=>$most_viewed[1]->magazine_id, 'article'=>$most_viewed[1]->id])}}">
                                        <img class="entry-thumb" src="images/{{$most_viewed[1]->article_cover}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-5">{{$most_viewed[1]->category->category_name}} </span>
                                    <h3 class="post-title post-title-size"><a href="#" rel="bookmark">{{$most_viewed[1]->article_title}} </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{$most_viewed[1]->created_at->day}}/{{$most_viewed[1]->created_at->month}}/{{$most_viewed[1]->created_at->year}}
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> {{count($most_viewed[1]->comments)}} </div>
                                        <!-- read more -->
                                        <a class="readmore pull-left" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="{{route('articles.show', ['magazine_id'=>$most_viewed[0]->magazine_id, 'article'=>$most_viewed[0]->id])}}">
                                        <img class="entry-thumb" src="/images/{{$most_viewed[0]->article_cover}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-1">{{$most_viewed[0]->category->category_name}} </span>
                                    <h3 class="post-title post-title-size"><a href="#" rel="bookmark">{{$most_viewed[0]->article_title}}  </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i>  {{$most_viewed[0]->created_at->day}}/{{$most_viewed[0]->created_at->month}}/{{$most_viewed[0]->created_at->year}}
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i>  {{count($most_viewed[0]->comments)}} </div>
                                        <!-- read more -->
                                        <a class="readmore pull-left" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 hidden-xs col-padding">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="{{route('articles.show', ['magazine_id'=>$most_viewed[2]->magazine_id, 'article'=>$most_viewed[2]->id])}}">
                                        <img class="entry-thumb" src="images/{{$most_viewed[2]->article_cover}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-5">{{$most_viewed[2]->category->category_name}} </span>
                                    <h3 class="post-title post-title-size"><a href="#" rel="bookmark">{{$most_viewed[2]->article_title}} </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{$most_viewed[2]->created_at->day}}/{{$most_viewed[2]->created_at->month}}/{{$most_viewed[2]->created_at->year}}
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> {{count($most_viewed[2]->comments)}} </div>
                                        <!-- read more -->
                                        <a class="readmore pull-left" href="#"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>	
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12"> <!-- right content inner -->
                        <section class="recent_news_inner">
                            <h3 class="category-headding ">أخبار حديثة</h3>
                            <div class="headding-border"></div>
                            <div class="row">
                                <div id="content-slide" class="owlousel">
                                    @if (count($firstArticles) > 0)
                                    @foreach ($firstArticles as $article)
                                        
                                    <!-- item-1 -->
                                    <div class="item">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
                                            <h3><a href="#">{{$article['article_title']}} </a></h3>
                                            <div class="post-thumb">
                                                <a href="{{route('articles.show',['magazine_id'=>$article['magazine_id'], 'article'=>$article['id']])}}">
                                                    <img class="img-responsive" src="/images/{{$article['article_cover']}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> {{Arabic::since($article['created_at'])}}
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> {{count(App\Article::find($article['id'])->comments)}} </div>
                                            </div>
                                            <p> {{substr($article['article_content'], 0, 200)}} <a href="{{route('articles.show',['magazine_id'=>$article['magazine_id'], 'article'=>$article['id']])}}">...اقرأ أكثر</a></p>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                        
                                </div>
                            </div>
                        </section>
                        <!-- Politics Area
                        ============================================ -->
                         <!-- /.Politics -->
                        
                    </div> <!-- /.left content inner -->
                     <!-- side content end -->
                </div> <!-- row end -->
            </div> <!-- container end -->
            <!-- Weekly News Area
            ============================================ -->
             
            <!-- second content -->
             <!-- second content end -->
            <div class="container"> <!-- /.adds -->
                <div class="row">
                    
                </div>
            </div> <!-- /.adds-->
            <!-- all category  news Area
            ============================================ -->
            <section class="all-category-inner">
                <div class="container">
                    <h3>احدث المجلات</h3>
                        <div class="headding-border bg-color-1"></div>
                    <div class="row">
                        @if (count($latest_channels) > 0)
                            @foreach ($latest_channels as $channel)
                                
                            
                            <div class="col-md-4 col-sm-4">
                                  <!-- sports -->
                                <div class="sports-inner">
                                    <h3 class="category-headding ">{{$channel['channel_name']}}</h3>
                                    
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- post image -->
                                        <div class="post-thumb">
                                            <a href="{{route('channels.show', ['channel'=> $channel['id']])}}">
                                                <img src="/images/{{$channel['cover_path']}}" height="250" class="img-responsive" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i>  {{Arabic::since($channel['created_at'])}}
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>  <!-- /.sports -->
                            @endforeach
                            @endif

                    </div>
                </div>
            </section>
            <!-- article section Area
            ============================================ -->
            <div class="lat_arti_cont_wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">  <!-- article -->	 				
                            
                            <section class="articale-inner">

                                <div class="row">

                                    <div id="content-slide-5" class="owlsel">
                                        <!-- item-1 -->
                                        <div class="item">
                                            <div class="row rn_block">
                                                    @foreach ($categories as $category)
                                                    @if (count($category->articles) > 0)
                                                        
                                                    
                                                    <div class="col-xs-6 col-md-4 col-sm-4">  <!-- sports -->
                                                        <div class="sports-inner">
                                                            <h3 class="category-headding ">{{$category->category_name}}</h3>
                                                            <div class="headding-border bg-color-1"></div>
                                                            <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                                <!-- post title -->
                                                                <?php $article = $category->articles()->orderBy('created_at','desc')->first();?>
                                                                <h3><a href="{{route('articles.show', ['magazine_id'=> $article['magazine_id'], 'article'=>$article['id']])}}">{{$article['article_title']}} </a></h3>
                                                                <!-- post image -->
                                                                <div class="post-thumb">
                                                                    <a href="{{route('articles.show', ['magazine_id'=> $article['magazine_id'], 'article'=>$article['id']])}}">
                                                                        <img src="/images/{{$article->article_cover}}" class="img-responsive" alt="">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="post-title-author-details">
                                                                <div class="post-editor-date">
                                                                    <!-- post date -->
                                                                    <div class="post-date">
                                                                        <i class="pe-7s-clock"></i>  {{$article->created_at->day}}/{{$article->created_at->month}}/{{$article->created_at->year}}
                                                                    </div>
                                                                    <!-- post comment -->
                                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> {{count($article->comments)}} </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  <!-- /.sports -->
                                                    @endif
                                                    @endforeach
 
    
                                            </div>
                                        </div>
                                        <!-- item-2 -->
                                    </div>  
                                </div>
                            </section>
                        </div>  <!-- /.article -->
                        <div class="col-sm-4 right-padding">
                            <aside>
                                <h3 class="category-headding ">فئة</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="cats-widget">
                                    <ul>	
                                        @foreach ($categories as $category)
                                        <li class=""><a href="{{route('categories.show', ['category'=>$category->id])}}" title="Title goes here.">{{$category->category_name}}</a> <span>{{count($category->articles)}}</span></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>
                             <!-- /.flicker widget -->
                             <aside>
                                    <h3 class="category-headding ">فئة</h3>
                                    <div class="headding-border bg-color-2"></div>
                                    <div class="cats-widget">
                                        <ul>	
                                            @foreach ($categories as $category)
                                            <li class=""><a href="{{route('categories.show', ['category'=>$category->id])}}" title="Title goes here.">{{$category->category_name}}</a> <span>{{count($category->articles)}}</span></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </aside>
                        </div>
                    </div>
                </div>
            </div>	
            <!-- footer Area
            ============================================ -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="footer-box">
                                <h3 class="category-headding">علامات شعبية</h3>
                                <div class="headding-border"></div>
                                <a class="tag" href="" title="">التعليم</a>
                                <a class="tag" href="" title="">موضة</a>
                                <a class="tag" href="" title="">خلاق</a>
                                <a class="tag" href="" title="">سم</a>
                                <a class="tag" href="" title="">تسلية</a>
                                <a class="tag" href="" title="">تكنولوجيا</a>
                                <a class="tag" href="" title="">كلية</a>
                                <a class="tag" href="" title="">ثقافة</a>
                                <a class="tag" href="" title="">مدونة</a>
                                <a class="tag" href="" title="">عمل</a>
                                <a class="tag" href="" title="">موسيقى</a>
                                <div class="newsletter-inner"> <!-- newsletter -->
                                    <h3 class="category-headding ">النشرة الإخبارية</h3>
                                    <div class="headding-border"></div>
                                    <p>أدخل عنوان بريدك الإلكتروني للحصول قائمتنا البريدية!</p>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="ادخل بريدك الإلكتروني" required="">
                                    <button type="button" class="btn btn-style">الاشتراك</button>
                                </div> <!-- /.newsletter -->
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footer-box"> <!-- featured news -->
                                <h3 class="category-headding ">أخبار مميزة</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="box-item wow fadeIn" data-wow-duration="2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_01.jpg" alt="" height="80" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-1">
                                            <a href="#">رياضات</a>
                                        </h6>
                                        <h3 class="td-module-title"><a href="#">يبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_02.jpg" alt="" height="80" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-2">
                                            <a href="#">تكنولوجيا</a>
                                        </h6>
                                        <h3 class="td-module-title"><a href="#">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        </div>
    
                                    </div>
                                </div>
                                <div class="box-item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                    <div class="img-thumb">
                                        <a href="#" rel="bookmark"><img class="entry-thumb" src="images/popular_news_03.jpg" alt="" height="80" width="100"></a>
                                    </div>
                                    <div class="item-details">
                                        <h6 class="sub-category-title bg-color-3">
                                            <a href="#">الصحة</a>
                                        </h6>
                                        <h3 class="td-module-title"><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له</a></h3>
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i> ديسمبر ٢٠ ، ٢٠١٦
                                            </div>
                                            <!-- post comment -->
                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> ١٣ </div>
                                        </div>
    
                                    </div>
                                </div>
                            </div>  <!-- /.featured news -->
                        </div>
                        <div class="col-sm-4"> 
                            <div class="footer-box"> <!-- top rated  -->
                                <h3 class="category-headding">أعلى التقييمات</h3>
                                <div class="headding-border bg-color-3"></div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </td>
                                            <td><a href="#">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">هامبدن-سيدني في فيرجينيا بالبحث عن أصول</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">هنالك العديد من الأنواع المتوفرة لنصوص لوريم </a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">عليك أن تتحقق أولاً أن ليس هناك أي</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">خلافاَ للإعتقاد السائد فإن لوريم</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">هنالك العديد من الأنواع المتوفرة لنصوص لوريم </a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </td>
                                            <td><a href="#">عليك أن تتحقق أولاً أن ليس هناك أي</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- /.top rated  -->
                    </div><hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="footer-box footer-logo-address"> <!-- address  -->
                                <img src="images/footer-logo.png" class="img-responsive" alt="">
                                <address>
                                    14L.E Goulburn St, Sydney 2000NSW<br>
                                    Tell: 01922296392<br>
                                    Email: bdtask@gmail.com
                                </address>
                            </div> <!-- /.address  -->
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-box">
                                <h3 class="category-headding">الفئات</h3>
                                <div class="headding-border bg-color-4"></div>
                                <ul>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">النشرة الإخبارية</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">غرفة الصحافة</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">الإعلان على شبكة الإنترنت</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">لغة</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">كونها جزءا</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-box">
                                <h3 class="category-headding">الفئات الشعبية</h3>
                                <div class="headding-border bg-color-5"></div>
                                <ul>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">الطبعة الرقمية</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">خريطة الموقع</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">خريطة الموقع</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">أعط هدية</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">معلومات عنا</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="footer-box">
                                <h3 class="category-headding ">الفئات الشعبية</h3>
                                <div class="headding-border"></div>
                                <ul>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">النشرة الإخبارية</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">غرفة الصحافة</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">الإعلان على شبكة الإنترنت</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">لغة</a></li>
                                    <li><i class="fa fa-dot-circle-o"></i><a href="#">كونها جزءا</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
   
            @endsection
    