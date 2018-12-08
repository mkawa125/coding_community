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
    <link href="{{ asset('css/my-s heet.css') }}" rel="stylesheet">
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

        <div class="col-sm-9">
            <div class=" main-content-head">
                <div class="row">
                    <div class="col-sm-7">
                        <label class="notes-search"><strong><a href="#">My Saved Notes  </a></strong></label>
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

            <div class="main-content" style="margin-top: 0; padding: 10px 40px 10px 40px; min-height: 370px">
                @forelse($data as $notes)
                    <div class="row">
                        <div class="col-sm-12 jumbotron">
                            <div class="row">
                                <div class="col-sm-12">
                                    <a href="{{ url('notes/details') }}?notes={{$notes->notes_id}}" class="notes-head">
                                        <strong style="color: #1F618D">{{ $notes->notes_title }}</strong>
                                    </a><br>
                                    <span class="date">{{ date('M, d Y:', strtotime($notes->notes_add_date)) }}</span>
                                    @if($notes->notes_accessibility == 'private')
                                        <span title="This notes can be viewed to public">
                                            <i class="fa fa-user-secret" style="color: #E6B0AA"></i>
                                        </span>
                                    @elseif($notes->notes_accessibility == 'public')
                                        <span title="This notes can be viewed to public">
                                            <i class="fa fa-users" style="color: inherit"></i>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="notes-body">
                                <div class="initial-body" style="max-height: 70px; overflow: hidden; margin-bottom: 10px">
                                    {!!$notes->notes_body !!}
                                </div>
                                <span style="padding-left: 10px"><i class="fa fa-thumbs-up" style="color: cornflowerblue"></i> 332</span>
                                <span style="padding-left: 10px">
                                    <a href="#" style="color: #707B7C">
                                        <i class="fa fa-comments" style="color: #EC7063"></i> 2 comments
                                    </a>
                                </span>
                                <a href="{{ url('notes/details') }}?notes={{$notes->notes_id}}" class="btn btn-default" style="float: right; padding: 3px; font-size: small">More details <i class="fa fa-angle-double-down"></i></a>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col-sm-12" style="padding-top: 15px">
                        <div class="row">
                            <label class="empty-hello">Hello <span>{{ Auth::user()->name }}</span></label>
                            <p class="empty-notes">
                                Your account currently does not have any saved notes. To add notes to your account for the future use
                                and for the benefits of other developers is free please <a href="{{ url('notes/create') }}" class="empty-link">click here </a> to create your add notes to your account
                            </p>
                            <label class="empty-hello">NB:</label>
                            <p class="empty-notes">
                                The added notes can be setup to public or private. Public notes will be viewed by anyone how searches for the
                                help of a particular problem of particular procedures for doing something. And the private notes will only
                                be seen by yourself. We recommend users to to make notes public so that they can provide the technical support for the
                                new developers
                            </p>
                        </div>
                    </div>
                @endforelse

        </div>
            <div class="pagination-link">
                <div class="col-sm-2" style="margin: 0 auto">
                    <span class="link">{{ $data->links() }}</span>
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