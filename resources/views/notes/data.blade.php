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
            @foreach($data as $notes)
                <div class="row" style="margin-top: 10px">
                    <div class="col-sm-12 jumbotron">
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="{{ url('notes/details') }}" class="notes-head"><strong>{{ $notes->notes_title }}</strong></a>
                            </div>
                        </div>
                        <div class="notes-body">
                            <p class="notes-paragraph more" id="more">{!!$notes->notes_body !!}</p>
                            <span>{{$notes->notes_add_date}}</span>
                            <span style="color: chocolate">{{$notes->notes_category}}</span>
                            @if($notes->notes_accessibility == 'private')
                                <span title="This notes can be viewed to public"><i class="fa fa-eye-slash"></i></span>
                                @elseif($notes->notes_accessibility == 'public')
                                <span title="This notes can be viewed to public"><i class="fa fa-eye"></i></span>
                            @endif
                            <a href="{{ url('notes/details') }}" class="btn btn-default" style="float: right; padding: 3px; font-size: small">More details <i class="fa fa-angle-double-down"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
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