@extends('layouts.app')

@section('content')

<div class="py-5 container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mb-3 display-4">جميع المجلات</h1>
        </div>
        <div class="col-md-6 clearfix">
            <a href="{{route('channels.create')}}" class="btn btn-secondary btn-sm float-left">اضافة مجلة جديد</a>
        </div>
    </div>
    <div class="row">
        @if(count($channels) > 0)
            @foreach ($channels as $channel)
                <div class="col-md-4 my-3">
                    <div class="card border border-secondary">
                        <a href="{{route('channels.show', ['id' => $channel->id])}}">
                        <img src="/images/{{$channel->cover_path}}" alt="" class="img-fluid card-img">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">{{$channel->channel_name}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<div style="min-height:250px"></div>
    
@endsection