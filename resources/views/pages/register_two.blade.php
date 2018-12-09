@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="col-sm-10 offset-1 main-content-4" style="">
        <div class="row">
            <div class="col-sm-4">
                <h5 class="register-head"><strong>You are about to complete your registration. Please follow the steps to complete registration</strong></h5>
                <h5 class="register-head" style="color: chocolate"><strong>Step 2 of 2</strong></h5>
                <p class="welcome-register">Please select the options on the given form and click finish to complete your registration
                </p>

                <div class="social">
                    <h5 class="register-head"><strong style="color: cornflowerblue">Social Networks</strong></h5>
                    <a class="#" href="#" title="facebook" ><i class="fa fa-facebook-square"></i></a>
                    <a class="#" href="#" title="Instagram" ><i class="fa fa-instagram"></i></a>
                    <a class="#" href="#" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
                    <a class="#" href="#" title="twitter"><i class="fa fa-twitter-square"></i></a>
                    <a class="#" href="#" title="youtube"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-sm-7" style="margin: 0 auto">
                <div class="panel">

                    <!-- Modal Header -->
                    <div class="panel-heading">
                        <h4 class="panel-title home-head"><strong> Add your professional skills </strong></h4>
                    </div>

                    <!-- Modal body -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ url('signup/addSkills') }}" name="register-form" class="#" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="#">
                                        <label><strong style="color: cornflowerblue">Favourite programming languages and professional skills: </strong></label><br>
                                        <h5 style="font-size: small">
                                            @if($errors->has('skills'))
                                                <span class="has-error">
                                                    <small>{{ $errors->first('skills', 'please select at least one professional skills') }}</small>
                                                </span>
                                            @endif
                                        </h5>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="php">Php: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="javaScript">JavaScript: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="python">Python: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="java">Java: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="kotlin">Kotlin: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="web">web development: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="android">Android Development: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="ussd">USSD Application: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="network">Network: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="mysql">MySQL: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="laravel">Laravel expert: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="angular">Angular 4: </label>
                                        <label for="pass1" class=".checkbox-inline"><input type="checkbox" class="" id="username" name="skills[]" value="desktop">Desktop Applications: </label>

                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="user_status" ><strong style="color: cornflowerblue">Current status:</strong></label>
                                            <h5 style="font-size: small">
                                                @if($errors->has('user_status'))
                                                    <span class="has-error">
                                                    <small>{{ $errors->first('user_status', 'Please select your status here') }}</small>
                                                </span>
                                                @endif
                                            </h5>
                                            <ul>
                                                <li><input type="radio" class="" id="user_status" name="user_status" value="student"> Student</li>
                                                <li><input type="radio" class="" id="user_status" name="user_status" value="employed"> Employed</li>
                                                <li><input type="radio" class="" id="user_status" name="user_status" value="none"> None</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="gender" ><strong style="color: chocolate">gender:</strong></label>
                                            <h5 style="font-size: small">
                                                @if($errors->has('gender'))
                                                    <span class="has-error">
                                                    <small>{{ $errors->first('gender', 'please select your gender') }}</small>
                                                </span>
                                                @endif
                                            </h5>
                                            <ul>
                                                <li><input type="radio" class="" id="gender" name="gender" value="male"> Male</li>
                                                <li><input type="radio" class="" id="gender" name="gender" value="female"> Female</li>
                                            </ul>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 style="font-size: small">
                                                @if($errors->has('phone_number'))
                                                    <span class="has-error" style="border: 3px dotted red">
                                                    <small>{{ $errors->first('phone_number') }}</small>
                                                </span>
                                                @endif
                                            </h5>
                                            <label for="first-name"><strong style="color: cornflowerblue">Phone number:</strong></label>
                                            <div class="input-group">
                                                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="e.g. 0717495198" >
                                            </div>


                                        </div>
                                        <div class="col-sm-6">

                                        </div>
                                    </div>

                                    <div class="row">

                                    </div>
                                    <button class="btn btn-primary btn-xs" name="login" type="submit" style="background-color: #2874A6; float: right; margin-top: 5px; padding: 5px; font-size: small">Finish </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="panel-footer">
                        <a href="#">terms of services</a> and <a href="#">privacy policies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


