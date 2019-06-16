@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col">
            <h1 class="display-4">{{$article->article_title}}</h1>
            <div>
                <img src="/images/{{$article->article_cover}}" alt="" class="img-fluid w-50">
            </div>
            <span class="badge badge-secondary">{{$article->created_at->day}}/{{$article->created_at->month}}/{{$article->created_at->year}}</span><br>
            <p class="lead">{{$article->article_content}}</p>
            <span class="badge badge-success"> الكاتب {{$article->user_id == 0 ? 'مجهول' : $article->user->first_name . ' ' . $article->user->last_name}}</span><br>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="media d-flex">
                <div class="media-img"><img src="http://placehold.it/50x50" alt=""></div>
                <div class="media-body align-self-end">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel tempore ipsam tempora quo in nihil deleniti, repellat error harum maiores!
                </div>
            </div>

        </div>
    </div>

</div>
    
@endsection