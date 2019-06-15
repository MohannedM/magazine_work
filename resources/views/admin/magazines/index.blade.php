@extends('layouts.admin')
@section('content')
    
<div class="container">
<div class="row mt-5 col-md-10 offset-md-1">
        
            <div>
                <h1 class="display-4 mb-3">المجالات</h1>
            </div>
            @if(count($magazines)>0)
            <table class="table table-striped"">
                <thead>
                <tr>
                    <th>#</th>
                    <th>غلاف الإصدار</th>
                    <th>عنوان الإصدار</th>
                    <th>الإصدار PDF</th>
                    <th>تفعيل/ايقاف</th>
                    <th>مسح</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($magazines as $magazine)
                    <tr>
                        <td>{{$magazine->id}}</td>
                        <td><img src="/images/{{$magazine->cover_path}}" style="height:50px" class="img-fluid"></td>
                        <td><a href="/channels/{{$magazine->channel_id}}/magazines/{{$magazine->id}}">{{$magazine->magazine_name}}</a></td>
                        <td><a class="btn btn-info" target="_blank" href="/pdfs/{{$magazine->pdf_path}}">{{$magazine->magazine_name}} PDF</a></td>
                        <td>

                           
                            <form action="/admin/magazines/{{$magazine->id}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <button type="submit" class="btn btn-secondary">
                                    <i class="far fa-edit"></i> {{$magazine->is_active == 0 ? 'تفعيل' : 'إقاف'}} 
                                </button>
                            </form>
                            
                        </td>
                        <td>
                        <form action="/admin/magazines/{{$magazine->id}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> مسح</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

@endsection