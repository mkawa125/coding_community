@extends('layouts.main')
@section('content')
<div class="col-sm-10 offset-1 profile-body" style="background-color: whitesmoke; padding-bottom: 10px">
    <h4 style="padding: 10px; color: #616A6B; font-size: small">Dahabu Saidi: Profile
        <span class="last-update">last updated 12, jan 2018</span>
    </h4>

    <div class="main-content" style="margin-top: 0; padding: 15px 50px 15px 50px; min-height: 430px;border: none; border-radius: 1px">
        <div class="row">
            <div class="col-sm-12 profile-head">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="{{ asset('images/naa-fb.jpg') }}" alt="Los Angeles"  width=100% class="img-responsive avatar">
                    </div>
                    <div class="col-sm-9">
                        <span style="font-size: small; color: chocolate"> <strong>Saidi Dahabu Mkawa</strong></span>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-inline">
                                    <li class="list-inline-item" style="background-color: #D5D8DC; border-radius: 18px">General</li>
                                    <li class="list-inline-item">Notes</li>
                                    <li class="list-inline-item">Followers</li>
                                    <li class="list-inline-item">Conversations</li>
                                    <li class="list-inline-item">Contributions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-3 img-responsive" style="padding: 0">
                <img src="{{ asset('images/naa-fb.jpg') }}" alt="Los Angeles"  width="100%" class="img-responsive">
                <h5 style="font-size: small; text-align: center; margin-top: 10px"><a href="#">change photo</a></h5>
            </div>
            <div class="col-sm-9 contacts">
                <div class="row">
                    <div class="col-sm-8">
                        <span style="font-size: 15px"> <strong>Contact Information</strong></span>
                        <table>
                            <tbody>
                            <tr>
                                <td>Username:</td>
                                <td contenteditable="true" style="color: cornflowerblue">mkawa95</td>
                            </tr>
                            <tr>
                                <td>Names:</td>
                                <td contenteditable="true" style="color: cornflowerblue">Dahabu Saidi</td>
                            </tr>
                            <tr>
                                <td class="table">E-mail:</td>
                                <td class="table" style="color: cornflowerblue" contenteditable="true">dahabusaidi@gmail.com</td>
                            </tr>
                            <tr>
                                <td class="table">Mobile:</td>
                                <td class="table" style="color: chocolate" contenteditable="true">0717495198</td>
                            </tr>
                            <tr>
                                <td>Location:</td>
                                <td contenteditable="true">Tanzania</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4">
                        <div class="action-box">
                            <label></label><span style="font-size: small"> <strong>Actions</strong></span><br>
                            <button class="btn btn-primary btn-block"><i class="fa fa-edit"></i> Edit Profile</button>
                            <button class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Delete Account</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
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