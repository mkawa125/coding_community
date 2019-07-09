<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">

    @include('_partials.header')

    {{--Main menu start--}}
    <div class="app-main">
        @include('_partials.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">

            </div>
            <div class="app-wrapper-footer">
                <div class="app-footer">
                    <div class="app-footer__inner">

                        <div class="app-footer-right">
                            <ul class="header-megamenu nav">
                                <li class="nav-item">
                                    <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                                        Footer Menu
                                        <i class="fa fa-angle-up ml-2 opacity-8"></i>
                                    </a>
                                    <div class="rm-max-width rm-pointers">
                                        <div class="d-none popover-custom-content">
                                            <div class="dropdown-mega-menu dropdown-mega-menu-sm">
                                                <div class="grid-menu grid-menu-2col">
                                                    <div class="no-gutters row">
                                                        <div class="col-sm-6 col-xl-6">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item-header nav-item">Overview</li>
                                                                <li class="nav-item"><a class="nav-link"><i class="nav-link-icon lnr-inbox"> </i><span>Contacts</span></a></li>
                                                                <li class="nav-item"><a class="nav-link"><i class="nav-link-icon lnr-book"> </i><span>Incidents</span>
                                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                                    </a></li>
                                                                <li class="nav-item"><a class="nav-link"><i class="nav-link-icon lnr-picture"> </i><span>Companies</span></a></li>
                                                                <li class="nav-item"><a disabled="" class="nav-link disabled"><i class="nav-link-icon lnr-file-empty"> </i><span>Dashboards</span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6 col-xl-6">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item-header nav-item">Sales &amp; Marketing</li>
                                                                <li class="nav-item"><a class="nav-link">Queues</a></li>
                                                                <li class="nav-item"><a class="nav-link">Resource Groups</a></li>
                                                                <li class="nav-item"><a class="nav-link">Goal Metrics
                                                                        <div class="ml-auto badge badge-warning">3</div>
                                                                    </a></li>
                                                                <li class="nav-item"><a class="nav-link">Campaigns</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                                        Grid Menu
                                        <div class="badge badge-dark ml-0 ml-1">
                                            <small>NEW</small>
                                        </div>
                                        <i class="fa fa-angle-up ml-2 opacity-8"></i>
                                    </a>
                                    <div class="rm-max-width rm-pointers">
                                        <div class="d-none popover-custom-content">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-tempting-azure">
                                                    <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city5.jpg');"></div>
                                                    <div class="menu-header-content text-dark"><h5 class="menu-header-title">Two Column Grid</h5><h6 class="menu-header-subtitle">Easy grid navigation inside popovers</h6></div>
                                                </div>
                                            </div>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark"><i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"> </i>Automation
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger"><i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"> </i>Reports
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success"><i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"> </i>Activity
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus"><i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"> </i>Settings
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn clearfix nav-item">
                                                    <div class="float-left">
                                                        <button class="btn btn-link btn-sm">Link Button</button>
                                                    </div>
                                                    <div class="float-right">
                                                        <button class="btn-shadow btn btn-info btn-sm">Info Button</button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="{{ asset('assets/scripts/main.cba69814a806ecc7945a.js') }}"></script></body>
</html>
