@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div id="logreg-forms">
                        <form class="form-signin" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                @csrf
                            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> تسجيل حساب جديد</h1>
                            <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" placeholder="اسمك" required autofocus>
                            @if ($errors->has('first_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                            <input  id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="اسم العائلة" name="last_name" value="{{ old('last_name') }}" required autofocus>
                            @if ($errors->has('last_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                            <input type="email" id="inputEmail" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="البريد الالكتروني" name="email" value="{{ old('email') }}" autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            <input type="password" id="inputPassword" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="كلمة المرور"  name="password">
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="تاكيد كلمة المرور" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif

                            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> تسجيل</button>
                            

                            </form>
                            <br>
                            
                    </div>
        </div>
    </div>
</div>
@endsection
