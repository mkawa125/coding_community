<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 9/9/18
 * Time: 11:06 PM
 */
?>


<html>

<head>

    @include('include.head');
    @import

</head>

<body>

<div class="container">

    <header class="row">

        @include('include.header')

    </header>

    <div id="main" class="row">

        @yield('content')

    </div>

    <footer class="row">

        @include('include.footer')

    </footer>

</div>

</body>

</html>
