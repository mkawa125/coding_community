@extends('layouts.app')

@section('content')
    <div class="container-fluid" style=" padding: 0">
        <div class="col-sm-10 main-content-4" style="margin: 0 auto; padding: 0">
            <div class="row">
                <div class="col-sm-4 instructions">
                    <h5 class="register-head" style="text-align: center; border-bottom: 1px solid #c1c5cc"><strong style="color: #707B7C; text-align: center">
                            Welcome to codeCom to join more than million developers
                        </strong></h5>
                    <h5 class="register-head" style="color: chocolate"><strong>Step 1 of 2</strong></h5>
                    <p class="welcome-register">Fill the the correct details to form the given form and then click register to proceed with the other steps.
                    </p>
                    <button class="btn btn-primary btn-block">
                        <i class="fa fa-facebook"></i> Sign in with facebook
                    </button>

                    <button class="btn btn-danger btn-block">
                        <i class="fa fa-google"></i> Sign in with google
                    </button>
                    <div class="social">
                        <h5 class="register-head"><strong>Find us on social networks</strong></h5>
                        <a class="#" href="#" title="facebook" ><i class="fa fa-facebook-square"></i></a>
                        <a class="#" href="#" title="Instagram" ><i class="fa fa-instagram"></i></a>
                        <a class="#" href="#" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
                        <a class="#" href="#" title="Click here to join whatssap group"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-sm-7" style="margin: 0 auto">
                    <div class="panel" style="border: none">
                        <div class="panel-heading" style="background-color: #E6B0AA; border: none">
                            <h4 class="panel-title home-head" style="color: #424949">
                                <strong>
                                    Login to your account <i class="fa fa-lock" style="margin-left: 15px"></i>
                                </strong>
                            </h4>
                        </div>
                        <div class="panel-body" style="border: none">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data" class="login-modal">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="pass1" ><strong>Username or Email:</strong></label>
                                            <div class="input-group">
                                                <input type="email" required class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="username or email">
                                            </div>
                                            @if ($errors->has('email'))
                                            <span class="help-block {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>


                                        {{--Displying errors--}}
                                        <div class="form-group">
                                            <label for="pass2"><strong>Enter password:</strong></label>
                                            <div class="input-group">
                                                <input type="password" required name="password" id="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your password" >
                                            </div>
                                        </div>

                                        <input type="checkbox" name="remember" id="remember">
                                        <label for="remember">Remember me</label>
                                        <button class="btn btn-dark btn-block" value="login" name="login" type="submit">
                                            Signin <i class="fa fa-sign-in"></i></button>
                                        <a href="#" class="#">forget password ?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
