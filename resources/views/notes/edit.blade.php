@extends('layouts.main')
@section('content')
    <div class="col-sm-11 offset-1">
        <div class=" main-content-head" style=" margin: 10px 0 0 0">
            <div class="row" style="padding: 0; margin: 0">
                <div class="col-md-12 head-column" style="padding: 0">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active"
                           style="padding: 10px 20px 10px 20px" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                        <a class="nav-item nav-link"
                           style="padding: 10px 20px 10px 20px" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                        <a class="nav-item nav-link"
                           style="padding: 10px 20px 10px 20px" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content-notes" style="padding: 25px 45px 25px 45px">
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
@endsection

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

