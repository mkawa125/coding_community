@extends('layouts.app')

@section('content')
    <div class="container-fluid" style=" padding: 0">
        <div class="col-sm-10 main-content-4" style="margin: 0 auto; padding: 0">
            <div class="row">
                <div class="col-sm-4 instructions">
                    <h5 class="register-head" style="text-align: center; border-bottom: 1px solid #c1c5cc">
                        <strong style="color: #AF7AC5; text-align: center">
                            Welcome back to codeCom enter your details to login
                        </strong></h5>
                    {{--<h5 class="register-head" style="color: chocolate"><strong>Step 1 of 2</strong></h5>--}}
                    <p class="welcome-register">Fill the the correct details to form the given form to sign in or sign in with social networks below.
                    </p>
                    <button class="btn btn-default btn-block" style="border-radius: 16px; color: white; background-color: #3b5998">
                        <i class="fa fa-facebook"></i> Sign in with facebook
                    </button>

                    <button class="btn btn-danger btn-block" style="border-radius: 16px; background-color: #CC3333">
                        <i class="fa fa-google"></i> Sign in with google
                    </button>

                    <button class="btn btn-primary btn-block" style="border-radius: 16px; background-color: #0077B5">
                        <i class="fa fa-linkedin"></i> Sign in with LinkedIn
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
                        <div class="panel-heading" style="background-color: #73C6B6; border: none">
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

                                    </form>
                                    <div class="col-md-12" style="margin-bottom: 15px; color: #3b5998">
                                        <a href="#" class="#" style="margin-top: 15px; color: #3b5998; font-weight: bold; font-family: sans-serif">
                                            Forget Password ?
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
