@extends('layouts.app')

@section('content')

<div class="py-5 container">
        <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-3 display-4">جميع مقلات المجلة</h1>
                </div>
                <div class="col-md-6 clearfix">
                    <a href="{{route('articles.create', ['magazine_id'=>$magazine->id])}}" class="btn btn-secondary btn-sm mr-2 float-left">اضافة مقالة جديد</a>
                    <a href="/pdf/{{$magazine->pdf_path}}" class="btn btn-info btn-sm float-left">قراة الاصدار PDF</a>
                </div>
        
            </div>
    <div class="row">
        @if(count($articles) > 0)
            @foreach ($articles as $article)
                <div class="col-md-4 my-3">
                    <div class="card border border-secondary">
                        <a href="/channels/magazines/{{$magazine->id}}/articles/{{$article->id}}">
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