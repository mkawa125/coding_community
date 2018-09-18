<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 9/9/18
 * Time: 11:08 PM
 */
?>
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>coders-tz</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my-sheet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- Styles -->
</head>
<body style="background-color: whitesmoke">

<div class="container-fluid">
    <header>
        @include('include.head')
    </header>
</div>

<div class="container-fluid">
    <div class="col-sm-10 main-content" style="">
        <div class="row">
            <div class="col-sm-5">
                <h5 class="register-head"><strong>You are about to complete your registration. Please follow the steps to complete registration</strong></h5>
                <h5 class="register-head" style="color: chocolate"><strong>Step 2 of 2</strong></h5>
                <p class="welcome-register">Please select the options on the given form and click finish to complete your registration
                </p>

                <div class="social">
                    <h5 class="register-head"><strong style="color: cornflowerblue">Social Networks</strong></h5>
                    <a class="#" href="#" title="facebook" ><i class="fa fa-facebook-square"></i></a>
                    <a class="#" href="#" title="Instagram" ><i class="fa fa-instagram"></i></a>
                    <a class="#" href="#" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
                    <a class="#" href="#" title="twitter"><i class="fa fa-twitter-square"></i></a>
                    <a class="#" href="#" title="youtube"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-sm-6" style="margin: 0 auto">
                <div class="panel">

                    <!-- Modal Header -->
                    <div class="panel-heading">
                        <h4 class="panel-title home-head"><strong> Add your professional skills </strong></h4>
                    </div>

                    <!-- Modal body -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="/register" name="register-form" class="#" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="#">
                                        <label><strong style="color: cornflowerblue">Favourite programming languages and professional skills: </strong></label><br>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="php">Php: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="javaScript">JavaScript: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="python">Python: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="java">Java: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="kotlin">Kotlin: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="web">web development: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="android">Android Development: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="ussd">USSD Application: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="network">Network: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="mysql">MySQL: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="laravel">Laravel expert: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="angular">Angular 4: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="desktop">Desktop Applications: </label>

                                    </div>

                                    <div class="">
                                        <label for="user_status" ><strong style="color: cornflowerblue">Current status:</strong></label>
                                        <ul>
                                            <li><input type="radio" class="" id="user_status" name="user_status" value="student"> Student</li>
                                            <li><input type="radio" class="" id="user_status" name="user_status" value="employed"> Employed</li>
                                            <li><input type="radio" class="" id="user_status" name="user_status" value="none"> None</li>
                                        </ul>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 style="font-size: small">
                                                @if($errors->has('first_name'))
                                                    <span class="has-error">
                                                    <small>{{ $errors->first('first_name') }}</small>
                                                </span>
                                                @endif
                                            </h5>
                                            <label for="first-name"><strong style="color: cornflowerblue">Phone number:</strong></label>
                                            <div class="input-group">
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="e.g. 0717495198" >
                                            </div>


                                        </div>
                                        <div class="col-sm-6">
                                            <h5 style="font-size: small">
                                                @if($errors->has('first_name'))
                                                    <span class="has-error">
                                                    <small>{{ $errors->first('first_name') }}</small>
                                                </span>
                                                @endif
                                            </h5>
                                            <label for="pass2"><strong style="color: cornflowerblue">Link on github/gitlab:</strong></label>
                                            <div class="input-group">
                                                <input type="text" name="surname" id="surname" class="form-control" placeholder="https://github.com/mkawa95" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                    </div>
                                    <button class="btn btn-primary btn-xs" name="login" type="submit" style="background-color: #2874A6; float: right; margin-top: 5px; padding: 5px; font-size: small">Finish </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="panel-footer">
                        <a href="#">terms of services</a> and <a href="#">privacy policies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--modal for user login--}}

<footer>
    @include('include.footer')
</footer>

</body>
</html>


