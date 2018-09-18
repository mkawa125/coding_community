<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>coders-tz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap.min.js') }}" rel="stylesheet">
        <link href="{{ asset('css/my-sheet.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
    <div class="container">
        <div class="content header-panel">
            Please login
        </div>
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="pass1" ><strong>Username or Email:</strong></label>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" class="form-control" id="username" name="username" placeholder="username or email">
                        </div>

                        <label for="pass2"><strong>ENter password:</strong></label>
                        <div class="form-group input-group form-horizontal">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" class="form-control" placeholder="password" >
                        </div>

                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember me</label>
                        <button class="btn btn-primary btn-block" name="login" type="submit" style="border-radius: 0">Login</button>
                        <a href="#" class="#">forget password ?</a>
                    </div>
                </div>
            </div>
        </div>
    <footer>
        @include('include.footer')
    </footer>
    </body>
</html>
