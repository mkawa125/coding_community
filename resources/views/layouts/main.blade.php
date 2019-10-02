<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CodeCom - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my-sheet.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">


</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">

    @include('_partials.header')

    {{--Main menu start--}}
    <div class="app-main">
        <div class="outer_main">
            <div class="app-main__inner">
                <div class="col-md-8 offset-3" style="background-color: ">
                    @yield('content')
                </div>
            </div>
            {{--footer start--}}
            @include('_partials.login_footer')
            {{--footer ends--}}
        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>

<script type="text/javascript" src="{{ asset('assets/scripts/main.cba69814a806ecc7945a.js') }}"></script>
<script src="{{ asset('javaScripts/notebook.js') }}" type="text/javascript"></script>

</body>
</html>
