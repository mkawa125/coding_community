<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 9/28/19
 * Time: 10:56 PM
 */
?>

    <style type="text/css" media="screen">
        #editor {
            position: absolute;
            top: 10px;
            right: 100px;
            bottom: 100px;
            left: 100px;
        }
    </style>
    <div class="col-md-10 offset-1" style="background-color: whitesmoke; border-radius: 4px">
        <div class="row" style="margin-top: 10px; padding: 5px 5px 5px 20px">
            <div class="col-sm-11" style="text-align: center;">
                <h6>TO DO </h6>
                <p>Add landing page</p>
                <div id="editor">function foo(items) {
                    var x = "All this is syntax highlighted";
                    return x;
                    }</div>
            </div>
        </div>
    </div>
    <script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('ace/src/ace.js') }}" type="text/javascript" charset="utf-8"></script>
    <script>
        var editor = ace.edit("editor");
        editor.setTheme("ace/theme/monokai");
        editor.session.setMode("ace/mode/javascript");
    </script>
