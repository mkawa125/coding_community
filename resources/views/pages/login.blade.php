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
    <div class="col-sm-10 main-content-3" style="">
        <div class="row" style="margin-top: 100px; padding: 20px">
            <div class="col-sm-6 content" style="margin: 0 auto">
                <form action="{{ route('login') }}" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}

                    {{--Displying errors--}}
                    <h5 style="font-size: small">
                        @if($errors->has('email'))
                            <span class="has-error">
                                        <small>{{ $errors->first('email') }}</small>
                                    </span>
                        @endif
                    </h5>
                    <label for="pass1" ><strong>Username or Email:</strong></label>
                    <div class="form-group input-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="username or email">
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
                    <button class="btn btn-primary btn-block" value="login" name="login" type="submit" style="background-color: #2874A6">Signin</button>
                    <a href="#" class="#">forget password ?</a>
                </form>
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


