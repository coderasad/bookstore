@extends('layouts.app')
@section('title')
	Log In
@endsection

@section('content')
<div class="bg-white">
    <div class="container-login100" style="background-image: url('{{asset('public/frontend/img/img-01.jpg')}}');">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex vh-100">
                <div class="col-md-4 mx-auto">
                    <div class="osahan-login py-4">
                        <div class="text-center mb-4">
                            <a href="#" class="showImg">
                                <img class="imgAttr" src="{{asset('public/frontend/img/logo.png')}}" alt="">
                            </a>
                            <div class="welcome">
                                <h5 class="font-weight-bold mt-3">Log In</h5>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label class="mb-1">Phone</label>
                                <label class="mb-1 float-right"></label>
                                <div class="position-relative icon-form-control">
                                    <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" value="00000000000" autocomplete="off" >
                                    <i class="feather-user position-absolute"></i>
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif 
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="mb-1">Password</label>
                                <div class="position-relative icon-form-control">
                                    <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="12345678">
                                    <i class="feather-unlock position-absolute"></i>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Remember password</label>
                            </div>
                            <button class="btn btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                            <div class="text-center mt-3 pb-3">
                                <p class="small text-white">Or login with</p>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="{{ url('/google-login') }}" class="btn btn-sm btn-danger btn-block ">
                                            Log In With Google
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-3 d-flex align-item-center">
                                <a class="text-white" href="#">Forgot password?</a>
                                <span class="ml-auto"> New to codeFun? <a class="font-weight-bold text-white" href="{{route('register')}}">Join now</a></span>
                            </div>
                        </form>
                        <div id="getImg" action="{{ url('getimg') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
