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


    {{-- ADD Comment Section --}}
    <div class="row mt-8">
        <div class="col">
            <div class="media d-flex">
                <div class="media-img ml-3 align-self-center">
                    <img src="/images/user.png" alt="">
                </div> 
                <div class="media-body align-center-end ">
                    <form method="POST" action="/comments">
                        {{ csrf_field() }}
                        @if(Auth::check())
                            {{-- <textarea name="user_name" placeholder="your name " required="required" class="form-control form-control-sm" style="height: 46px; width: 410px; margin-top: 0px; margin-bottom: 0px;"></textarea>  --}}
                            <label class="align-center">{{Auth::user()->first_name }} {{Auth::user()->last_name }} </label>
                        @else
                            <input type="text" name="username" placeholder="ادخل اسم المستخدم" class="form-control form-control-sm" style="height: 46px; width: 410px;" required>
                        @endif   
                            <textarea name="comment_content" placeholder="ادخل تعليقك " required="required" class="form-control" style="height: 129px; width: 412px; margin-top: 0px; margin-bottom: 0px;"></textarea>
                            <input type="submit" value="اضف التعليق" class="btn btn-primary">
                    </form>
                </div>
            
            </div>
        </div>
    </div>
    


    {{-- Fetch the Comment --}}
    <div class="row mt-5">
        <div class="col">
                <ul >
            @foreach($comments as $comment)
             <li >
               <div class="media d-flex">
              
                <div class="media-img">
                    <img src="/images/user.png "  style="height:50px; width:50px;" alt="">
                </div>
                <div class="media-body align-center-end ">
                  
                    {{  $comment->comment_content }} - 
                    {{$comment->created_at->diffforHumans()}}
                </div>
              </div>
            </li>
             @endforeach  
         </ul>
        </div>
    
    </div>

</div>
    
@endsection