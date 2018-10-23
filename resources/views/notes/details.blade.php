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
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 side-menu" id="sticky-sidebar">
            <div class="sticky-top">
                <div class="nav flex-column">
                    @if (Auth::guest())

                    @else
                        <div class="btn-group" style="margin-bottom: 15px; font-size: small">
                            <button type="button" class="btn btn-primary">Add Note <i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-danger">Question <i class="fa fa-question"></i></button>
                        </div>
                    @endif
                    <h5><strong>My Notes</strong></h5>
                    <ul class="list-inline">
                        <li><a href="" class="nav-link">Php Programing</a></li>
                        <li><a href="" class="nav-link">Web Programming</a></li>
                        <li><a href="" class="nav-link">Android development</a></li>
                        <li><a href="" class="nav-link">USSD applications</a></li>
                        <li><a href="" class="nav-link">JavaScript</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-sm-9 main-content" style="margin-top: 100px;">
            <div class="row" style="margin-top: 10px">
                <div class="col-sm-7">
                    <label class="notes-search"><strong>My Saved Notes  <span><i class="fa fa-save"></i></span></strong></label>
                </div>
                <div class="col-sm-3">
                    <div class="ui transparent icon input">
                        <input class="prompt form-control" type="text" placeholder="search notes here...">
                    </div>
                    <div class="results"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="col-sm-9 main-content" style="margin-top: 0; padding: 15px 50px 15px 50px; min-height: 390px">
    <div class="row" style="margin-top: 10px">
        <div class="col-sm-12 jumbotron">
            <div class="row">
                <div class="col-sm-12">
                    <a href="#" class="details-head"><strong>How to install linux mint on mac os</strong></a>
                    <span class="category-details"><a href="#" style="color: chocolate">Windows installation</a></span>
                </div>
            </div>
            <div class="notes-body">
                <p class="notes-paragraph">Linux is just an operating system developed to meet the development needs and the following
                    are some steps to install it in the mac operating systems
                </p>
                <strong>steps to install linux</strong>
                <ol>
                    <li>Download your linux image</li>
                    <li>Prepare disc image</li>
                    <li>Insert your disc and restart your machine</li>
                    <li>Follow the steps to install your os</li>
                    <li>remove disc and restart your machine</li>
                </ol>
                <img src="{{ asset('images/sample-image.png') }}" alt="Chicago" width="100%" height="250" style="margin-bottom: 10px">
                <span><strong>July 10, 2018</strong></span>
                <span><strong style="color: cadetblue">Author: </strong> <a href="#">Dahabu Saidi</a>, <a href="#" style="color: coral">Web Programmer</a></span>
            </div>
            <div class="actions">
                <div class="btn-group" style="float: right">
                    <a href="{{ url('notes/edit') }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <button type="button" class="btn btn-info btn-xs" title="make this public">
                        <i class="fa fa-eye"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal" title="delete this note">
                        <i class="fa fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>




    <!-- The Modal -->
    <div class="modal" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header modal-head">
                    <h4 class="modal-title home-head"><strong>Are you sure you want to delete this note ?</strong></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <form method="POST" action="#" enctype="multipart/form-data">
                                <label for="title" ><strong>Notes Title:</strong></label>
                                <div class="form-group input-group">
                                    <input type="text" class="form-control" disabled="" id="title" name="email" value="Installation of linux">
                                </div>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" style="float: right">
                                    <i class="fa fa-trash"></i> Yes...Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
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