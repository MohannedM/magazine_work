@extends('layouts.app')

@section('content')

<div class="py-5 container">
    <h1 class="mb-3 display-4">جميع المجلات</h1>
    <a href="/channel/magazines/create" class="btn btn-secondaey"></a>
    <div class="row">
        @if(count($channels) > 0)
            @foreach ($channels as $channel)
                <div class="col-md-4 my-3">
                    <div class="card border border-secondary">
                        <a href="/channels/{{$channel->id}}">
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