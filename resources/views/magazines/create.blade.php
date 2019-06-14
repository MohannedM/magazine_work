@extends('layouts.app');
@section('content')
    

<div class="py-5">
    <div class="container">
        <h1 class="display-4">اضف مجلة</h1>
        <form action="/magazine" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="form-group">
                <label for="magazine_name">عنوان الاصدار</label>
                <input type="text" name="name" class="form-control {{ $errors->has('magazine_name') ? 'is-invalid' : ''}}">
                <span class="invalid-feedback">عنوان الاصدار مطلوب</span>
            </div>
            <div class="form-group">
                <label for="path">رفع المجلة بسيغة PDF</label>
                <div class="custom-file">
                    <input type="file" name="path" class="custom-file-input  {{ $errors->has('pdf_path') ? 'is-invalid' : ''}}">
                    <label for="" class="custom-file-label"></label>
                    <span class="invalid-feedback">المجلة الالكترونية مطلوبة</span>
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