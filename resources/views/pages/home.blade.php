@extends('layouts.main')
@section('content')
<div class="main-content-2">
    <div class="row" style="margin-top: 10px; padding: 5px 5px 5px 20px">
        <div class="col-sm-8 slide-show" >
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/java.png') }}" alt="Los Angeles" width="100%" height="250">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/code.jpg') }}" alt="Chicago" width="100%" height="250">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/africans.jpg') }}" alt="New York" width="100%" height="250">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/night-code.jpg') }}" alt="Chicago" width="100%" height="250">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/php.jpg') }}" alt="New York" width="100%" height="250">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

            <h5 class="home-head" style="margin-top: 20px; color: chocolate">Computer programmers or Software Developers <span><i class="fa fa-code"></i></span></h5>
            <p class="welcome">Tanzania programming community have several registered <a href="#">programmers</a> with
                their associated curriculum vitae. If you have any project and your are in need of developers here is the right place
                to find competent programmers who ca be able to work on your project.
            </p>

            <p class="welcome">
                Also if you your looking for the <a href="#">programmers</a>
                to hire on your institution also here is the right place t find them. On the other hand if you are programmer
                and you are looking for the opportunity be please <a href="#">registered here </a> people are always looking for developers</p>

        </div>
        <div class="col-sm-3">
            <div class="latest_head">
                <h5 class="home-head head">Recent discussions <i class="fa fa-clock-o"></i></h5>
            </div>
            <div class="column">
                <ul class="list-group" style="padding: 0">
                    <li class="list-group-item">
                        <i class="fa fa-list-alt"></i>
                        <a href="#">
                            How to install laravel in linux mint by using composer
                            <span style="color: #D4AC0D; font-size: 11px"><?php echo date('M,d,Y') ?></span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-list-alt"></i>
                        <a href="#">
                            How to install laravel in linux mint by using composer
                            <span style="color: #D4AC0D; font-size: 11px"><?php echo date('M,d,Y') ?></span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-list-alt"></i>
                        <a href="#">
                            How to install laravel in linux mint by using composer
                            <span style="color: #D4AC0D; font-size: 11px"><?php echo date('M,d,Y') ?></span>
                        </a>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-list-alt"></i>
                        <a href="#">
                            How to install laravel in linux mint by using composer
                            <span style="color: #D4AC0D; font-size: 11px"><?php echo date('M,d,Y') ?></span>
                        </a>
                    </li>
                </ul>

                <div class="social" style="padding: 15px">
                    <h5 class="register-head"><strong>Find us on social networks</strong></h5>
                    <a class="#" href="#" title="facebook" ><i class="fa fa-facebook-square"></i></a>
                    <a class="#" href="#" title="Instagram" ><i class="fa fa-instagram"></i></a>
                    <a class="#" href="#" title="Linkedin"><i class="fa fa-linkedin-square"></i></a>
                    <a class="#" href="#" title="twitter"><i class="fa fa-twitter-square"></i></a>
                    <a class="#" href="#" title="youtube"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
            </div>
    </div>
</div>


<div class="main-content" style="margin-top: 20px">
    <h5 class="home-head" style="margin-top: 10px; color: chocolate">Categories of Programming discussions <span><i class="fa fa-code"></i></span></h5>
    <div class="row" style="margin-top: 10px">
        <div class="col-sm-3 category">
            <h5 style="border-bottom: 1px solid #c1c5cc; padding: 5px; font-size: 16px; box-shadow: 0 3px 5px 0 #BB8FCE;">
                <img src="{{ asset('images/php-my.png') }}" width="50" height="50" style="margin-left:10px">
                <span>Php Programming</span>
            </h5>
            <ul>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
            </ul>
            <button class="btn btn-default btn-block" style="background-color: #D2B4DE">view more</button>
            <p></p>
        </div>
        <div class="col-sm-5 category">
            <h5 style="border-bottom: 1px solid #c1c5cc; padding: 5px; font-size: 16px; box-shadow: 0 3px 5px 0 #2471A3;">
                <img src="{{ asset('images/js2.png') }}" width="50" height="50" style="margin-left:10px">
                <span>JavaScript Programming</span>
            </h5>
            <ul>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
            </ul>
            <button class="btn btn-default btn-block" style="background-color: #5499C7">view more</button>
        </div>
        <div class="col-sm-3 category">
            <h5 style="border-bottom: 1px solid #c1c5cc; padding: 5px; font-size: 16px; box-shadow: 0 3px 5px 0 #CD6155;">
                <img src="{{ asset('images/java1.png') }}" width="50" height="50" style="margin-left:10px">
                <span><strong>Java Programming</strong></span>
            </h5>
            <ul>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
            </ul>
            <button class="btn btn-default btn-block" style="background-color: #CD6155">view more</button>
        </div>
    </div>
</div>

<div class="main-content" style="margin-top: 20px">
    <div class="row" style="margin-top: 10px">
        <div class="col-sm-3 category">
            <h5 style="border-bottom: 1px solid #c1c5cc; padding: 5px; font-size: 16px; box-shadow: 0 3px 3px 0 #F5B041;">
                <img src="{{ asset('images/python.png') }}" width="50" height="50" style="margin-left:10px">
                Python Programming
            </h5>
            <ul>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
            </ul>
            <button class="btn btn-default btn-block" style="background-color: #F5B041">view more</button>
        </div>
        <div class="col-sm-5 category">
            <h5 style="border-bottom: 1px solid #c1c5cc; padding: 5px; font-size: 16px; box-shadow: 0 5px 5px 0 #c1c5cc;">
                <img src="{{ asset('images/ussd.png') }}" width="50" height="50" style="margin-left:10px">
                USSD Applications
            </h5>
            <ul>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
            </ul>
            <button class="btn btn-default btn-block" style="background-color: #c1c5cc">view more</button>
        </div>
        <div class="col-sm-3 category">
            <h5 style="border-bottom: 1px solid #c1c5cc; padding: 5px; font-size: 16px; box-shadow: 0 5px 5px 0 #AED6F1;">
                <img src="{{ asset('images/database-web.jpeg') }}" width="50" height="50" style="margin-left:10px">
                Database Systems
            </h5>
            <ul>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
            </ul>
            <button class="btn btn-default btn-block" style="background-color: #AED6F1">view more</button>
        </div>
    </div>
</div>

<div class="main-content" style="margin-top: 20px">
    <h5 class="home-head" style="margin-top: 10px; color: chocolate">Categories of Programming discussions <span><i class="fa fa-code"></i></span></h5>
    <div class="row" style="margin-top: 10px">
        <div class="col-sm-3 category">
            <h5 style="border-bottom: 1px solid #c1c5cc; padding: 5px; font-size: 16px; box-shadow: 0 3px 5px 0 #BB8FCE;">
                <img src="{{ asset('images/php-my.png') }}" width="50" height="50" style="margin-left:10px">
                <span>Php Programming</span>
            </h5>
            <ul>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
            </ul>
            <button class="btn btn-default btn-block" style="background-color: #D2B4DE">view more</button>
            <p></p>
        </div>
        <div class="col-sm-5 category">
            <h5 style="border-bottom: 1px solid #c1c5cc; padding: 5px; font-size: 16px; box-shadow: 0 3px 5px 0 #2471A3;">
                <img src="{{ asset('images/js2.png') }}" width="50" height="50" style="margin-left:10px">
                <span>JavaScript Programming</span>
            </h5>
            <ul>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
            </ul>
            <button class="btn btn-default btn-block" style="background-color: #5499C7">view more</button>
        </div>
        <div class="col-sm-3 category">
            <h5 style="border-bottom: 1px solid #c1c5cc; padding: 5px; font-size: 16px; box-shadow: 0 3px 5px 0 #CD6155;">
                <img src="{{ asset('images/java1.png') }}" width="50" height="50" style="margin-left:10px">
                <span><strong>Java Programming</strong></span>
            </h5>
            <ul>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
                <li><a href="#">Total questions (23500) </a></li>
                <li><a href="#">php programmers (1542) </a></li>
            </ul>
            <button class="btn btn-default btn-block" style="background-color: #CD6155">view more</button>
        </div>
    </div>
</div>
@endsection
