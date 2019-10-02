@extends('layouts.main')

@section('content')
    <style>
        .input-group-text{
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
            padding: 0 15px;
        }
    </style>
    <div class="container-fluid" style=" padding: 0">
        <div class="col-sm-10 main-content-4" style="margin: 0 auto; padding: 0">
            <div class="row">
                <div class="col-sm-8" style="margin: 0 auto">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title home-head" style="color: #424949">
                                <strong>
                                    Login to your account <i class="fa fa-lock" style="margin-left: 15px"></i>
                                </strong>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="pass1" ><strong>Username or Email:</strong></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
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
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                </div>
                                                <input type="password" required name="password" id="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your password" >
                                            </div>
                                        </div>

                                        <div>
                                            <button class="btn btn-dark" style="float: right; padding: 6px 20px" value="login" name="login" type="submit">
                                                Login <i class="fa fa-sign-in"></i></button>
                                        </div>
                                    </form>
                                    <div class="form-group" style="margin-bottom: 15px; color: #3b5998">
                                        <a href="#" class="#" style="margin-top: 15px; color: #3b5998; font-weight: bold; font-family: sans-serif">
                                            Forget Password ?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 instructions">

                    <a href="{{ url('/auth/github')}}" class="btn btn-success btn-block github">
                        <i class="fa fa-github" style="color: black; font-size: medium; margin-right: 10px"></i> Log In With Github
                    </a>
                    <a href="{{ url('/auth/google') }}" class="btn  btn-block google">
                        <img src="{{ asset('images/google-trans.png') }}" width="12" height="12" alt="" style="margin-right: 10px">
                        <span class="text-primary">Login</span> with <img src="{{ asset('images/Googlelogo.png') }}"  width="42" height="16" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
