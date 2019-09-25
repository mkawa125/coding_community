<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 12/12/18
 * Time: 1:52 PM
 */
?>
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header modal-head">
                <h4 class="modal-title home-head"><strong>Please Login</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">

                        <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data" class="login-modal">
                            {{ csrf_field() }}

                            Displying errors
                            <h5 style="font-size: small">
                                @if($errors->has('email'))
                                    <span class="has-error">
                                        <small>{{ $errors->first('email') }}</small>
                                    </span>
                                @endif
                            </h5>
                            <label for="pass1" ><strong>Username or Email:</strong></label>
                            <div class="form-group input-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="username or email">
                            </div>

                            Displying errors
                            <h5 style="font-size: small">
                                @if($errors->has('password'))
                                    <span class="has-error">
                                       <small>{{ $errors->first('password') }}</small>
                                    </span>
                                @endif
                            </h5>
                            <label for="pass2"><strong>Enter password:</strong></label>
                            <div class="form-group input-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" >
                            </div>

                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label>
                            <button class="btn btn-primary btn-block" value="login" name="login" type="submit" style="background-color: #2874A6">
                                Signin <i class="fa fa-sign-in"></i></button>
                            <a href="#" class="#">forget password ?</a>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>

        </div>
    </div>
</div>
