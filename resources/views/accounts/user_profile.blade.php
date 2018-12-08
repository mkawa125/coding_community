<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 10/19/18
 * Time: 12:52 PM
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

    <!-- Include Editor style. -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_style.min.css' rel='stylesheet' type='text/css' />

    <!-- Include JS file. -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/js/froala_editor.min.js'></script>
    <!-- Styles -->
</head>
<body style="background-color: whitesmoke">

<div class="container-fluid">
    <header>
        @include('include.head')
    </header>

    <div class="row" style="margin-top: 80px">
        <div class="col-sm-3">
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    @if(Auth::guest())
                    @else
                        <a class="#" href="{{ url('notes/create') }}">
                            <button class="btn btn-primary" style="padding: 5px; margin-bottom: 10px"><i class="fa fa-pencil"></i> Create New Notes</button>
                        </a>
                    @endif
                    <h5 class="category-head"><strong>Top Categories</strong></h5>
                    <ul class="sidebar-menu" style="margin-top: 5px">

                        <li class="sub-menu">
                            <a href="" class="nav-link">
                                <span>Php Programing</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="#">
                                <span>Java</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="#" class="">
                                <span>Web development</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="#" class="">
                                <span>Android development</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="#" class="">
                                <span>Python</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="#" class="">
                                <span>JavaScript</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="#" class="">
                                <span>Database systems</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="#" class="">
                                <span>Networking</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="sidebar-menu">
                        <li class="sub-menu">
                            <a class="" href="#"><span>Settings</span></a>
                        </li>

                        <li class="sub-menu">
                            <a class="" href="#"><span>Logout</span></a>
                        </li>
                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
        </div>

        <div class="col-sm-8">
            <h4>Dahabu Saidi: Profile</h4>
            <div class="main-content" style="margin-top: 0; padding: 15px 50px 15px 50px; min-height: 430px;border: none; border-radius: 8px">

                <div class="row">
                    <div class="col-sm-12 profile-head">
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="{{ asset('images/naa-fb.jpg') }}" alt="Los Angeles"  width=100% class="img-responsive avatar">
                            </div>
                            <div class="col-sm-9">
                                <span style="font-size: small; color: chocolate"> <strong>Saidi Dahabu Mkawa</strong></span>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <ul class="list-inline">
                                            <li class="list-inline-item" style="background-color: #D5D8DC; border-radius: 18px">General</li>
                                            <li class="list-inline-item">Notes</li>
                                            <li class="list-inline-item">Followers</li>
                                            <li class="list-inline-item">Conversations</li>
                                            <li class="list-inline-item">Contributions</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-3 img-responsive">
                        <img src="{{ asset('images/naa-fb.jpg') }}" alt="Los Angeles"  width="100%" class="img-responsive">
                        <h5 style="font-size: small; text-align: center; margin-top: 10px"><a href="#">change photo</a></h5>
                    </div>
                    <div class="col-sm-9 contacts">
                        <div class="row">
                            <div class="col-sm-8">
                                <span style="font-size: 15px"> <strong>Contact Information</strong></span>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>Username:</td>
                                        <td contenteditable="true" style="color: cornflowerblue">mkawa95</td>
                                    </tr>
                                    <tr>
                                        <td>Names:</td>
                                        <td contenteditable="true" style="color: cornflowerblue">Dahabu Saidi</td>
                                    </tr>
                                    <tr>
                                        <td class="table">E-mail:</td>
                                        <td class="table" style="color: cornflowerblue" contenteditable="true">dahabusaidi@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td class="table">Mobile:</td>
                                        <td class="table" style="color: chocolate" contenteditable="true">0717495198</td>
                                    </tr>
                                    <tr>
                                        <td>Location:</td>
                                        <td contenteditable="true">Tanzania</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-4">
                                <div class="action-box">
                                    <label></label><span style="font-size: small"> <strong>Actions</strong></span><br>
                                    <button class="btn btn-primary btn-block"><i class="fa fa-edit"></i> Edit Profile</button>
                                </div>
                            </div>
                        </div>
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
<script>
    $(document).ready(function() {
        // Configure/customize these variables.
        var showChar = 100;  // How many characters are shown by default
        var ellipsestext = "...";
        var moretext = "Show more";
        var lesstext = "Show less";


        $('.more').each(function() {
            var content = $(this).html();

            if(content.length > showChar) {

                var c = content.substr(0, showChar);
                var h = content.substr(showChar, content.length - showChar);

                var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                $(this).html(html);
            }

        });

        $(".morelink").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).parent().prev().toggle();
            $(this).prev().toggle();
            return false;
        });
    });
</script>