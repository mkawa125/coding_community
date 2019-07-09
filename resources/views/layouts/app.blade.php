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
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>

            {{--Sidebar start--}}
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Menu</li>
                        <li class="mm-active">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Dashboards
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="index-2.html" class="mm-active">
                                        <i class="metismenu-icon">
                                        </i>Analytics
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboards-commerce.html">
                                        <i class="metismenu-icon">
                                        </i>Commerce
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboards-sales.html">
                                        <i class="metismenu-icon">
                                        </i>Sales
                                    </a>
                                </li>
                                <li


                                >
                                    <a href="#">
                                        <i class="metismenu-icon"></i>
                                        Minimal
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul


                                    >
                                        <li>
                                            <a href="dashboards-minimal-1.html">
                                                <i class="metismenu-icon">
                                                </i>Variation 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dashboards-minimal-2.html">
                                                <i class="metismenu-icon">
                                                </i>Variation 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="dashboards-crm.html">
                                        <i class="metismenu-icon"></i>
                                        CRM
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-browser"></i>
                                Pages
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="pages-login.html">
                                        <i class="metismenu-icon"></i>
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-login-boxed.html">
                                        <i class="metismenu-icon">
                                        </i>Login Boxed
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-register.html">
                                        <i class="metismenu-icon">
                                        </i>Register
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-register-boxed.html">
                                        <i class="metismenu-icon">
                                        </i>Register Boxed
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-forgot-password.html">
                                        <i class="metismenu-icon">
                                        </i>Forgot Password
                                    </a>
                                </li>
                                <li>
                                    <a href="pages-forgot-password-boxed.html">
                                        <i class="metismenu-icon">
                                        </i>Forgot Password Boxed
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-plugin"></i>
                                Applications
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-mailbox.html">
                                        <i class="metismenu-icon">
                                        </i>Mailbox
                                    </a>
                                </li>
                                <li>
                                    <a href="apps-chat.html">
                                        <i class="metismenu-icon">
                                        </i>Chat
                                    </a>
                                </li>
                                <li>
                                    <a href="apps-faq-section.html">
                                        <i class="metismenu-icon">
                                        </i>FAQ Section
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon"></i>
                                        Forums
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="apps-forum-list.html">
                                                <i class="metismenu-icon">
                                                </i>Forum Listing
                                            </a>
                                        </li>
                                        <li>
                                            <a href="apps-forum-threads.html">
                                                <i class="metismenu-icon">
                                                </i>Forum Threads
                                            </a>
                                        </li>
                                        <li>
                                            <a href="apps-forum-discussion.html">
                                                <i class="metismenu-icon">
                                                </i>Forum Discussion
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">UI Components</li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-diamond"></i>
                                Elements
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon"></i>
                                        Buttons
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="elements-buttons-standard.html">
                                                <i class="metismenu-icon">
                                                </i>Standard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-pills.html">
                                                <i class="metismenu-icon">
                                                </i>Pills
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-square.html">
                                                <i class="metismenu-icon">
                                                </i>Square
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-shadow.html">
                                                <i class="metismenu-icon">
                                                </i>Shadow
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elements-buttons-icons.html">
                                                <i class="metismenu-icon">
                                                </i>With Icons
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="elements-dropdowns.html">
                                        <i class="metismenu-icon">
                                        </i>Dropdowns
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-icons.html">
                                        <i class="metismenu-icon">
                                        </i>Icons
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-badges-labels.html">
                                        <i class="metismenu-icon">
                                        </i>Badges
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-cards.html">
                                        <i class="metismenu-icon">
                                        </i>Cards
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-loaders.html">
                                        <i class="metismenu-icon">
                                        </i>Loading Indicators
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-list-group.html">
                                        <i class="metismenu-icon">
                                        </i>List Groups
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-navigation.html">
                                        <i class="metismenu-icon">
                                        </i>Navigation Menus
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-timelines.html">
                                        <i class="metismenu-icon">
                                        </i>Timeline
                                    </a>
                                </li>
                                <li>
                                    <a href="elements-utilities.html">
                                        <i class="metismenu-icon">
                                        </i>Utilities
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-car"></i>
                                Components
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="components-tabs.html">
                                        <i class="metismenu-icon">
                                        </i>Tabs
                                    </a>
                                </li>
                                <li>
                                    <a href="components-accordions.html">
                                        <i class="metismenu-icon">
                                        </i>Accordions
                                    </a>
                                </li>
                                <li>
                                    <a href="components-notifications.html">
                                        <i class="metismenu-icon">
                                        </i>Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="components-modals.html">
                                        <i class="metismenu-icon">
                                        </i>Modals
                                    </a>
                                </li>
                                <li>
                                    <a href="components-loading-blocks.html">
                                        <i class="metismenu-icon">
                                        </i>Loading Blockers
                                    </a>
                                </li>
                                <li>
                                    <a href="components-progress-bar.html">
                                        <i class="metismenu-icon">
                                        </i>Progress Bar
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tooltips-popovers.html">
                                        <i class="metismenu-icon">
                                        </i>Tooltips &amp; Popovers
                                    </a>
                                </li>
                                <li>
                                    <a href="components-carousel.html">
                                        <i class="metismenu-icon">
                                        </i>Carousel
                                    </a>
                                </li>
                                <li>
                                    <a href="components-calendar.html">
                                        <i class="metismenu-icon">
                                        </i>Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="components-pagination.html">
                                        <i class="metismenu-icon">
                                        </i>Pagination
                                    </a>
                                </li>
                                <li>
                                    <a href="components-count-up.html">
                                        <i class="metismenu-icon">
                                        </i>Count Up
                                    </a>
                                </li>
                                <li>
                                    <a href="components-scrollable-elements.html">
                                        <i class="metismenu-icon">
                                        </i>Scrollable
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tree-view.html">
                                        <i class="metismenu-icon">
                                        </i>Tree View
                                    </a>
                                </li>
                                <li>
                                    <a href="components-maps.html">
                                        <i class="metismenu-icon">
                                        </i>Maps
                                    </a>
                                </li>
                                <li>
                                    <a href="components-ratings.html">
                                        <i class="metismenu-icon">
                                        </i>Ratings
                                    </a>
                                </li>
                                <li>
                                    <a href="components-image-crop.html">
                                        <i class="metismenu-icon">
                                        </i>Image Crop
                                    </a>
                                </li>
                                <li>
                                    <a href="components-guided-tours.html">
                                        <i class="metismenu-icon">
                                        </i>Guided Tours
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-display2"></i>
                                Tables
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="tables-data-tables.html">
                                        <i class="metismenu-icon">
                                        </i>Data Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="tables-regular.html">
                                        <i class="metismenu-icon">
                                        </i>Regular Tables
                                    </a>
                                </li>
                                <li>
                                    <a href="tables-grid.html">
                                        <i class="metismenu-icon">
                                        </i>Grid Tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">Dashboard Widgets</li>
                        <li>
                            <a href="widgets-chart-boxes.html">
                                <i class="metismenu-icon pe-7s-graph">
                                </i>Chart Boxes 1
                            </a>
                        </li>
                        <li>
                            <a href="widgets-chart-boxes-2.html">
                                <i class="metismenu-icon pe-7s-way">
                                </i>Chart Boxes 2
                            </a>
                        </li>
                        <li>
                            <a href="widgets-chart-boxes-3.html">
                                <i class="metismenu-icon pe-7s-ball">
                                </i>Chart Boxes 3
                            </a>
                        </li>
                        <li>
                            <a href="widgets-profile-boxes.html">
                                <i class="metismenu-icon pe-7s-id">
                                </i>Profile Boxes
                            </a>
                        </li>
                        <li class="app-sidebar__heading">Forms</li>
                        <li




                        >
                            <a href="#">
                                <i class="metismenu-icon pe-7s-light"></i>
                                Elements
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul




                            >
                                <li>
                                    <a href="forms-controls.html">
                                        <i class="metismenu-icon">
                                        </i>Controls
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-layouts.html">
                                        <i class="metismenu-icon">
                                        </i>Layouts
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">
                                        <i class="metismenu-icon">
                                        </i>Validation
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-wizard.html">
                                        <i class="metismenu-icon">
                                        </i>Wizard
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li









                        >
                            <a href="#">
                                <i class="metismenu-icon pe-7s-joy"></i>
                                Widgets
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul









                            >
                                <li>
                                    <a href="forms-datepicker.html">
                                        <i class="metismenu-icon">
                                        </i>Datepicker
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-range-slider.html">
                                        <i class="metismenu-icon">
                                        </i>Range Slider
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-input-selects.html">
                                        <i class="metismenu-icon">
                                        </i>Input Selects
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-toggle-switch.html">
                                        <i class="metismenu-icon">
                                        </i>Toggle Switch
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-wysiwyg-editor.html">
                                        <i class="metismenu-icon">
                                        </i>WYSIWYG Editor
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-input-mask.html">
                                        <i class="metismenu-icon">
                                        </i>Input Mask
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-clipboard.html">
                                        <i class="metismenu-icon">
                                        </i>Clipboard
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-textarea-autosize.html">
                                        <i class="metismenu-icon">
                                        </i>Textarea Autosize
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">Charts</li>
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="metismenu-icon pe-7s-graph2">
                                </i>ChartJS
                            </a>
                        </li>
                        <li>
                            <a href="charts-apexcharts.html">
                                <i class="metismenu-icon pe-7s-graph">
                                </i>Apex Charts
                            </a>
                        </li>
                        <li>
                            <a href="charts-sparklines.html">
                                <i class="metismenu-icon pe-7s-graph1">
                                </i>Chart Sparklines
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

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
