<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 9/9/18
 * Time: 11:14 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my-sheet.css') }}" rel="stylesheet">



</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#" style="font-size: medium; font-family: 'Noto Sans Georgian'">MKAWA CODING COMMUNITY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav" style="margin-left: 30px">
            <li class="nav-item">
                <a class="nav-link" href="{{ action("Auth\RegisterController@home") }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ action("Auth\RegisterController@categories") }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ action("Auth\RegisterController@developers") }}">Developers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ action("Auth\RegisterController@jobs") }}">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ action("Auth\RegisterController@about") }}">About us</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/register"><i class="fa fa-user-o"></i> Register</a>
            </li>
            <li class="nav-item">
                @if( auth()->check())
                <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-lock"></i> Login</a>
                <a class="nav-link" href="#">{{ auth()->user()->username }}</a>
                    @else( !auth()->check())
                    <a class="nav-link" href="/login" data-toggle="modal" data-target="#myModal"><i class="fa fa-lock"></i> Login</a>
                @endif
            </li>

        </ul>
    </div>
</nav>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header modal-head">
                <h4 class="modal-title home-head"><strong>Please enter your details to login</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">

                        <form action="/login" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}

                            {{--Displying errors--}}
                            <h5 style="font-size: small">
                                @if($errors->has('username'))
                                    <span class="has-error">
                                        <small>{{ $errors->first('username') }}</small>
                                    </span>
                                @endif
                            </h5>
                            <label for="pass1" ><strong>Username or Email:</strong></label>
                            <div class="form-group input-group">
                                <input type="email" class="form-control" id="username" name="username" placeholder="username or email">
                            </div>

                            {{--Displying errors--}}
                            <h5 style="font-size: small">
                                @if($errors->has('password'))
                                    <span class="has-error">
                                       <small>{{ $errors->first('password') }}</small>
                                    </span>
                                @endif
                            </h5>
                            <label for="pass2"><strong>Enter password:</strong></label>
                            <div class="form-group input-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" >
                            </div>

                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label>
                            <button class="btn btn-primary btn-block" name="login" type="submit" style="background-color: #2874A6">Signin</button>
                            <a href="#" class="#">forget password ?</a>
                        </form>

                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>
</body>
</html>