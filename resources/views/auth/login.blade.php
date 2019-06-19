@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div id="logreg-forms">
                        <form class="form-signin" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @csrf
                            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> تسجيل الدخول</h1>
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
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        
                                        <label class="form-check-label" for="remember">
                                            {{ __('تذكرني') }}
                                        </label>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> تسجيل</button>
                            

                            <a href="{{ route('password.request') }}" id="forgot_pswd">نسيت كلمة المرور؟</a>
                            <hr>
                            <!-- <p>Don't have an account!</p>  -->
                            <a href="{{route('register')}}" class="btn btn-primary btn-block text-white" type="button" id="btn-signup"> تسجيل حساب جديد</a>
                            </form>
                            <br>
                            
                    </div>
                </div>
            </div>
        </div>
@endsection
