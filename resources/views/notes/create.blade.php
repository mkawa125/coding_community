<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 10/19/18
 * Time: 12:51 PM
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

        <div class="col-sm-9 main-content" style="margin-top: 100px; padding: 15px 70px 15px 70px">
            <div class="row" style="margin-top: 10px">
                <div class="col-sm-12">
                    <h4 class="home-head"><strong>Add New Notes <span><i class="fa fa-edit"></i></span></strong></h4>

                    <form class="notes-form" action="{{ 'save' }}" enctype="multipart/form-data" name="form" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="title" class="#"><strong>Notes title: </strong></label>
                                @if($errors->has('title'))
                                    <span class="has-error">
                                     <small>{{ $errors->first('title') }}</small>
                                      </span>
                                @endif
                                <div class="form-group input-group">
                                    <input type="text" name="title" id="title" class="form-control" placeholder="e.g laravel installation in linux">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="category" class="#"><strong>Notes Category: </strong></label>
                                @if($errors->has('category'))
                                    <span class="has-error">
                                     <small>{{ $errors->first('category') }}</small>
                                      </span>
                                @endif
                                <div class="form-group input-group">
                                    <select class="form-control" id="category" name="category">
                                        <option value="" selected >--select notes category--</option>
                                        <option value="php">PHp programming</option>
                                        <option value="web">Web Development</option>
                                        <option value="android">Android Development</option>
                                        <option value="ussd">USSD Applications</option>
                                        <option value="javaScript">JavaScript</option>
                                        <option value="java">Java Programming</option>
                                        <option value="database">Database systems</option>
                                        <option value="php">Python programming</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="photo" class="#"><strong>Add Photo if necessary: </strong></label>
                                <div class="form-group input-group">
                                    <input type="file" name="photo" id="photo" class="form-control" style="padding-bottom: 30px">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="access" class="#"><strong>Accessibility: </strong></label>
                                @if($errors->has('access'))
                                    <span class="has-error">
                                     <small>{{ $errors->first('access') }}</small>
                                      </span>
                                @endif
                                <div class="form-group input-group">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><input id="access" type="radio" name="access" class="" value="public"> Public</li>
                                        <li class="list-inline-item"><input id="access" type="radio" name="access" class="" value="private"> Private</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <label for="notes_body"><strong>Notes body</strong></label>
                        @if($errors->has('notes_body'))
                            <span class="has-error">
                                     <small>{{ $errors->first('notes_body') }}</small>
                                      </span>
                        @endif
                        <textarea name="notes_body" id="notes_body"></textarea>

                        <button class="btn btn-primary" style="float: right"><i class="fa fa-save"></i> Save</button>
                    </form>
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
    $(function() {
        $('div#froala-editor').froalaEditor({
            toolbarButtons: ['bold', 'italic', 'underline',
                'strikeThrough', 'subscript', 'superscript',
                'fontFamily', 'fontSize', 'color', 'formatBlock',
                'blockStyle', 'align', 'insertOrderedList',
                'insertUnorderedList', 'outdent', 'indent', 'selectAll',
                'createLink', 'insertImage', 'insertTable', 'undo',
                'redo', 'html', 'save', 'insertHorizontalRule', 'uploadFile',
                'removeFormat', 'fullscreen'],

            // Define new inline styles.
            inlineStyles: {
                'Big Red': 'font-size: 20px; color: red;',
                'Small Blue': 'font-size: 14px; color: blue;'
            }
        })
    });
</script>
<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/js/froala_editor.pkgd.min.js"></script>

<!-- Initialize the editor. -->
<script> $(function() { $('textarea').froalaEditor() }); </script>

