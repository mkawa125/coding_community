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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--commented because modal can not load calld by javascript function--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
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
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/js/froala_editor.min.js'></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="{{ asset('DataTables/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('DataTables/css/dataTables.bootstrap4.min.css') }}">

    <script src="{{ asset('javaScripts/myScripts.js') }}" type="text/javascript"></script>
</head>
<body>

<div class="container-fluid" style="background-color: whitesmoke">
    <div class="row" style="margin-top: 54px">
        <div class="col-md-2" style="padding: 0">
            @include('pages.side-nav-bar')
        </div>

        <div class="col-md-10">
            <div id="content">
                <header>
                    @include('include.head')
                </header>

                @yield('content')
            </div>

            <footer>
                @include('include.footer')
            </footer>
        </div>
    </div>
</div>






{{--<div style="display: none">--}}
    {{--@forelse($data as $notes)--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-12 ">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-12">--}}
                        {{--<a href="{{ url('notes/details') }}?notes={{$notes->notes_id}}" class="notes-head">--}}
                            {{--<strong style="color: #1F618D">{{ $notes->notes_title }}</strong>--}}
                        {{--</a><br>--}}
                        {{--<span class="date">{{ date('M, d Y:', strtotime($notes->notes_add_date)) }}</span>--}}
                        {{--@if($notes->notes_accessibility == 'private')--}}
                            {{--<span title="This notes can be viewed to public">--}}
                                    {{--<i class="fa fa-user-secret" style="color: #E6B0AA"></i>--}}
                                {{--</span>--}}
                        {{--@elseif($notes->notes_accessibility == 'public')--}}
                            {{--<span title="This notes can be viewed to public">--}}
                                    {{--<i class="fa fa-users" style="color: inherit"></i>--}}
                                {{--</span>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="notes">--}}
                    {{--<div class="initial-body" style="max-height: 70px; overflow: hidden; margin-bottom: 10px">--}}
                        {{--{!!$notes->notes_body !!}--}}
                    {{--</div>--}}
                    {{--<span style="padding-left: 10px"><i class="fa fa-thumbs-up" style="color: cornflowerblue"></i> 332</span>--}}
                    {{--<span style="padding-left: 10px">--}}
                            {{--<a href="#" style="color: #707B7C">--}}
                                {{--<i class="fa fa-comments" style="color: #EC7063"></i> 2 comments--}}
                            {{--</a>--}}
                        {{--</span>--}}
                    {{--<a href="{{ url('notes/details') }}?notes={{$notes->notes_id}}" class="btn btn-default" style="float: right; padding: 3px; font-size: small">More details <i class="fa fa-angle-double-down"></i></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--@empty--}}
        {{--<div class="col-sm-12" style="padding-top: 15px">--}}
            {{--<div class="row">--}}
                {{--<label class="empty-hello">Hello <span>{{ Auth::user()->name }}</span></label>--}}
                {{--<p class="empty-notes">--}}
                    {{--Your account currently does not have any saved notes. To add notes to your account for the future use--}}
                    {{--and for the benefits of other developers is free please <a href="{{ url('notes/create') }}" class="empty-link">click here </a> to create your add notes to your account--}}
                {{--</p>--}}
                {{--<label class="empty-hello">NB:</label>--}}
                {{--<p class="empty-notes">--}}
                    {{--The added notes can be setup to public or private. Public notes will be viewed by anyone how searches for the--}}
                    {{--help of a particular problem of particular procedures for doing something. And the private notes will only--}}
                    {{--be seen by yourself. We recommend users to to make notes public so that they can provide the technical support for the--}}
                    {{--new developers--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--@endforelse--}}
{{--</div>--}}





</body>
</html>
