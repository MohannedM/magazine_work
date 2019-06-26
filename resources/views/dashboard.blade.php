@extends('layouts.app')
<?php use Arabic\Arabic; ?>
            @section('content')
            <div class="se-pre-con" style="display: none;"></div>
            @if(count($most_viewed)>=3)
            <section class="news-feed">
                <div class="container">
                    <div class="row row-margin">
                        <div class="col-sm-3 hidden-xs col-padding mb-3">
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
                        <div class="col-md-6 d-none d-md-block">
                            
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            @if (count($most_popular) > 0)
                                            @foreach ($most_popular as $index => $item)
                                            @if($index == 1)
                                            <?php $article = App\Article::findOrFail($item['id']);  ?> 
                                            <div class="carousel-item active">
                                                <a href="{{route('articles.show', ['magazine_id'=>$article->magazine_id, 'article'=>$article->id])}}">
                                                <img class="d-block w-100" style="height: 400px;" src="/images/{{$article->article_cover}}" alt="First slide">
                                                </a>
                                            </div>
                                            @else
                                            <?php $article = App\Article::findOrFail($item['id']);  ?> 
                                            <div class="carousel-item">
                                            <a href="{{route('articles.show', ['magazine_id'=>$article->magazine_id, 'article'=>$article->id])}}">
                                                <img class="d-block w-100" style="height: 400px;" src="/images/{{$article->article_cover}}" alt="Second slide">
                                            </a>
                                            <div class="carousel-caption d-none d-md-block text-right">
                                                    <span class="color-5">{{$article->category->category_name}} </span>
                                                <h3 class="post-title post-title-size"><a class="text-white" href="{{route('articles.show', ['magazine_id'=>$article->magazine_id, 'article'=>$article->id])}}" rel="bookmark">{{$article->article_title}} </a></h3>
                                                <div class="post-editor-date">
                                                        <!-- post date -->
                                                        <div class="post-date">
                                                            <i class="pe-7s-clock"></i> {{$article->created_at->day}}/{{$article->created_at->month}}/{{$article->created_at->year}}
                                                        </div>
                                                        <!-- post comment -->
                                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> {{count($article->comments)}} </div>
                                                        <!-- read more -->
                                                        <a class="readmore pull-left" href="{{route('articles.show', ['magazine_id'=>$article->magazine_id, 'article'=>$article->id])}}"><i class="pe-7s-angle-right"></i></a>
                                                    </div>
                                            </div>
                                            </div>
                                            @endif
                                            @endforeach
                                            @endif
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
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
            @endif	

            <section class="recent_news_inner d-none d-md-block my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12"> <!-- right content inner -->
                            @include('pdf.latest');
                        </div>
                    </div>
                </div>
            </section>

            <section class="recent_news_inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12"> <!-- right content inner -->
                            <h2 class="category-headding ">أخبار حديثة</h2>
                            <div class="headding-border"></div>
                            <div class="row">
                                <div id="content-slide" class="owlousel">
                                    @if (count($firstArticles) > 0)
                                    @foreach ($firstArticles as $article)
                                        <div class="col-md-6">
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
                                                    <p> {{substr($article['article_content'], 0, 60)}} <a href="{{route('articles.show',['magazine_id'=>$article['magazine_id'], 'article'=>$article['id']])}}">...اقرأ أكثر</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif
                                        
                                </div>
                            </div>
                            <div class="row my-3">
                                    <div id="content-slide" class="owlousel">
                                        @if (count($secondArticles) > 0)
                                        @foreach ($secondArticles as $article)
                                            <div class="col-md-4">
                                                <div class="item">
                                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
                                                        <h3><a href="#">{{$article['article_title']}} </a></h3>
                                                        <div class="post-thumb">
                                                            <a href="{{route('articles.show',['magazine_id'=>$article['magazine_id'], 'article'=>$article['id']])}}">
                                                                <img class="img-responsive" src="/images/{{$article['article_cover']}}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post-title-author-details"  style="width:80%; marign:auto;">
                                                        <div class="post-editor-date">
                                                            <div class="post-date">
                                                                <i class="pe-7s-clock"></i> {{Arabic::since($article['created_at'])}}
                                                            </div>
                                                            <div class="post-author-comment"><i class="pe-7s-comment"></i> {{count(App\Article::find($article['id'])->comments)}} </div>
                                                        </div>
                                                        <p> {{substr($article['article_content'], 0, 60)}} <a href="{{route('articles.show',['magazine_id'=>$article['magazine_id'], 'article'=>$article['id']])}}">...اقرأ أكثر</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        @endif
                                            
                                    </div>
                                </div>
                            <!-- Politics Area
                                ============================================ -->
                                <!-- /.Politics -->
                                
                            </div> <!-- /.left content inner -->
                            <div class="col-md-4 d-none d-md-block">
                                    <h2 class="category-headding ">الرعاة</h2>
                                    <div class="headding-border"></div>
                                @if (count($sponsors) > 0)
                                @foreach ($sponsors as $sponsor)
                                <div class="item sponsor-item">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s"><!-- image -->
                                        <div class="post-thumb">
                                            <img class="img-responsive" src="/images/{{$sponsor->logo_path}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                    
                                @endforeach
                                @endif
                            </div>
                            <!-- side content end -->
                        </div> <!-- row end -->
                    </div> <!-- container end -->
                </section>
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
                    <h3>احدث الاصدرات</h3>
                        <div class="headding-border bg-color-1"></div>
                    <div class="row">
                        @if (count($latest_magazines) > 0)
                            @foreach ($latest_magazines as $magazine)
                                
                            
                            <div class="col-md-4 col-sm-4">
                                  <!-- sports -->
                                <div class="sports-inner">
                                    <h3 class="category-headding ">{{$magazine['magazine_name']}}</h3>
                                    
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- post image -->
                                        <div class="post-thumb">
                                            <a href="{{route('magazines.show', ['magazine'=> $magazine['id']])}}">
                                                <img src="/images/{{$magazine['cover_path']}}" height="250" class="img-responsive" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-title-author-details">
                                        <div class="post-editor-date">
                                            <!-- post date -->
                                            <div class="post-date">
                                                <i class="pe-7s-clock"></i>  {{Arabic::since($magazine['created_at'])}}
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
                                <h3 class="category-headding ">أرشيف</h3>
                                <div class="headding-border bg-color-2"></div>
                                <div class="cats-widget">
                                    <ul>	
                                        @foreach ($archives as $archive)
                                       <li class=""><a href="{{route('archives.show', ['year'=>$archive['year'] , 'month'=>date("m", strtotime($archive['month']))])}}" title="Title goes here.">{{$archive['year']}}</a> {{$archive['month']}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>	
            
   
            @endsection
    