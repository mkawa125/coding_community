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

    <div class="col-sm-10 main-content" style="background-color: #2874A6">
        <div class="row">
            <div class="col-sm-8"><h5 class="logo-head">About Tanzania programming community</h5></div>
            <div class="col-sm-4">

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-10 main-content-3" style="">
        <div class="row" style="margin-top: 10px">
            <div class="col-sm-8" style="margin-top: 10px">

                <h5 class="home-head" style="margin-top: 15px; color: #707B7C"><strong>Historical background</strong></h5>
                <p class="welcome">Tanzania programming community is the discussion forum developed by saidi dahabu from university of Dar es salaam on 2018 so as to develope
                    the knowledge and programming capabilities of new <a href="#">programmers</a>. Not only new programmers but also
                    helps other programmers to exchange some ideas with other programmers from different areas around the world
                    which will make them being more updated and gain some new knowledge use full in programming and other computer science field.
                </p>

                <h5 class="home-head" style="margin-top: 15px; color: #707B7C"><strong>Mission</strong></h5>
                <p class="welcome">
                    Tanzania coding community aimed to develop a strong programming community among the programmers from different areas
                    around the world so as to make programmers to get quick technical assistance and exchange some knowledge. This wil make programmers
                    being most updated because everyday new technologies are invented
                </p>

                <h5 class="home-head" style="margin-top: 15px; color: #707B7C"><strong>vision</strong></h5>
                <p class="welcome">
                    Our vision is to create better means for communication among the programmers and non programmers from different areas
                </p>

                <h5 class="home-head" style="margin-top: 15px; color: #707B7C"><strong>Job announcements</strong></h5>
                <p class="welcome">
                    If you have a project and you are looking for the programmers who can work for your project
                    you can search for the developer depending to what type of developer you need to work with
                </p>

                <h5 class="home-head" style="margin-top: 15px; color: #707B7C"><strong>Developer opportunities</strong></h5>
                <p class="welcome">
                    People are always looking for the competent  programmers. If your are developer and you are looking for the opportunity when you are registered to this community
                    you are in good chance of having invited for the interview from different firms which are looking for the professionals for their particular needs.
                    what you need to do is to be create account and upload your professional details and your project links if any so that people can see your curriculum vitae (CV)
                </p>
            </div>
            <div class="col-sm-3 column" style="margin-top: 10px; margin-left: 60px">

                <h5 class="home-head head">Related links </h5>

                <ul style="list-style: -moz-ethiopic-numeric">
                    <li>
                        <a href="#">How to install laravel in linux mint by using composer <span><?php echo date('M,d,Y') ?></span></a>
                    </li>
                    <li>
                        <a href="#">How to install laravel in linux mint by using composer <span><?php echo date('M,d,Y') ?></span></a>
                    </li>
                    <li>
                        <a href="#">How to install laravel in linux mint by using composer <span><?php echo date('M,d,Y') ?></span></a>
                    </li>
                    <li>
                        <a href="#">How to install laravel in linux mint by using composer <span><?php echo date('M,d,Y') ?></span></a>
                    </li>

                </ul>

                <img src="{{ asset('images/africans.jpg') }}" alt="New York" width="100%" height="150" class="about-img">

                <div class="social" style="margin-top: 15px">
                    <h5 class="register-head"><strong>Find us on Social Networks</strong></h5>
                    <a class="#" href="#" title="facebook" ><i class="fa fa-facebook-square"></i></a>
                    <a class="#" href="#" title="Instagram" ><i class="fa fa-instagram"></i></a>
                    <a class="#" href="#" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
                    <a class="#" href="#" title="twitter"><i class="fa fa-twitter-square"></i></a>
                    <a class="#" href="#" title="youtube"><i class="fa fa-youtube"></i></a>
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


