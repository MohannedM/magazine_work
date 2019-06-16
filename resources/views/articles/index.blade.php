@extends('layouts.app')

@section('content')

<div class="py-5 container">
        <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-3 display-4">جميع المقلات</h1>
                </div>
                <div class="col-md-6 clearfix">
                    <a href="/articles/create" class="btn btn-secondary btn-sm float-left">اضافة مقالة جديد</a>
                </div>
        
            </div>
    <div class="row">
        @if(count($articles) > 0)
            @foreach ($articles as $article)
                <div class="col-md-4 my-3">
                    <div class="card border border-secondary">
                        <a href="/channels/magazines/{{$article->magazine_id}}/articles/{{$article->id}}   ">
                        <img src="/images/{{$article->article_cover}}" alt="" class="img-fluid card-img">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">{{$article->article_title}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<div style="min-height:250px"></div>
    
@endsection