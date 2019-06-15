@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col">
            <h1 class="display-4">{{$article->article_title}}</h1>
            <span class="badge badge-secondary">{{$article->created_at->day}}/{{$article->created_at->month}}/{{$article->created_at->year}}</span><br>
            <p class="lead">{{$article->article_content}}</p>
            <span class="badge badge-success"> الكاتب {{$article->user_id == 0 ? 'مجهول' : $article->user->first_name . ' ' . $article->user->last_name}}</span><br>
        </div>
    </div>

</div>
    
@endsection