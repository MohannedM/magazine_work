@extends('layouts.app');
@section('content')
    

<div class="py-5">
    <div class="container">
        <h1 class="display-4">اضف مجلة</h1>
        <form action="/magazine" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="magazine_name">اسم المجلة</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="path">رفع المجلة بسيغة PDF</label>
                <div class="custom-file">
                    <input type="file" name="path" class="custom-file-input">
                    <label for="" class="custom-file-label"></label>
                </div>
            </div>
            <div class="form-group">
                <label for="date">تاريخ الاصدار</label>
                <input type="date" value="{{date("Y-m-d")}}" name="created_at" class="form-control">
            </div>
            <input type="submit" class="btn btn-primary" value="اضافة">
        </form>
    </div>
</div>

@endsection