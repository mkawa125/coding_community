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

    <div class="row"  style="margin-top: 80px">
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

        <div class="col-sm-9">
            <div class=" main-content-head">
                <div class="row">
                    <div class="col-sm-7" style="padding-left: 40px">
                        <label class="notes-search"><strong><a href="#">Notes</a><span> <i class="fa fa-angle-double-right"></i> <a href="#">Details</a></span></strong></label>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="search notes" id="notes" name="notes" style="font-size: small">
                            <div class="input-group-append">
                            <span class="input-group-text" style="background-color: white">
                                <a href="#">
                                    <i class="fa fa-search" style="color: #707B7C"></i>
                                </a>
                            </span>
                            </div>
                        </div>
                        <div class="results"></div>
                    </div>

                </div>
            </div>
            <div class=" main-content" style="margin-top: 0; padding: 15px 50px 15px 50px; min-height: 390px">
                <div class="row" style="margin-top: 10px">
                    <div class="col-sm-12 jumbotron">

                        @if($data)
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="#" class="details-head"><strong>{{ $data->notes_title }}</strong></a>
                                    <span class="category-details"><a href="#" style="color: chocolate">{{ $data->notes_category }}</a></span>
                                </div>
                            </div>
                            <div class="notes-body">
                                {!!$data->notes_body !!}
                                <img src="{{ asset('images/sample-image.png') }}" alt="Chicago" width="100%" height="250" style="margin-bottom: 10px">
                                <span><strong>{{ $data->notes_add_date }}</strong></span>
                                <span><strong style="color: cadetblue">Author: </strong> <a href="#">{{ $data->name }} {{ $data->surname }}</a>, <a href="#" style="color: coral">Web Programmer</a></span>
                            </div>
                            <div class="actions">
                                <div class="btn-group" style="float: right">
                                    <a href="{{ url('notes/edit') }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                    @if($data->notes_accessibility == 'public')
                                        <a class="btn btn-info btn-xs" title="make this public">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-warning btn-xs" title="make this notes private">
                                            <i class="fa fa-eye-slash"></i>
                                        </a>
                                    @endif
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{ $data->notes_id }}" title="delete this note">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>




                <!-- The Modal -->
                <div class="modal" id="deleteModal{{ $data->notes_id }}">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header modal-head">
                                <h4 class="modal-title home-head"><strong style="color: cornflowerblue">Are you sure you want to delete this note ?</strong></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <form  action="{{ 'delete' }}?notes={{ $data->notes_id }}" enctype="multipart/form-data" name="form" method="post">
                                            {{ csrf_field() }}
                                            <label for="title" ><strong>Notes Title:</strong></label>
                                            <div class="form-group input-group">
                                                <input type="text" class="form-control" disabled="" id="title" name="email" value="{{ $data->notes_title }}">
                                            </div>
                                                <button type="submit" name="delete" class="btn btn-danger" style="float: right">
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