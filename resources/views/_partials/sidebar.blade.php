<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/8/19
 * Time: 5:21 PM
 */
?>

{{--Sidebar start--}}
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

    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading" style="color: #CCD1D1">Main Menu</li>
                <li class="mm-active">
                    <a href="{{ route('index') }}">
                        <i class="metismenu-icon fa fa-home" style="font-size: 15px"></i>
                        Home
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="metismenu-icon fa fa-list" style="font-size: small"></i>
                        Categories
                        <i class="metismenu-state-icon fa fa-angle-right" style="font-size: small"></i>
                    </a>
                    <ul>

                        <li>
                            <a href="{{ route('index') }}">
                                <i class="fa fa-code"></i>
                                 Programming
                            </a>
                        </li>
                        <li>
                            <a href="pages-login-boxed.html">
                                <i class="fa fa-shield">
                                </i> Operating systems
                            </a>
                        </li>
                        <li>
                            <a href="pages-register.html">
                                <i class="fa fa-video-camera">
                                </i> Multimedia
                            </a>
                        </li>
                        <li>
                            <a href="pages-register-boxed.html">
                                <i class="fa fa-code-fork">
                                </i> Software development
                            </a>
                        </li>
                        <li>
                            <a href="pages-forgot-password.html">
                                <i class="fa fa-globe">
                                </i> Networking
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon fa fa-balance-scale" style="font-size: small"></i>
                        Jobs
                        <i class="metismenu-state-icon fa fa-angle-right" style="font-size: small"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="apps-mailbox.html">
                                <i class="fa fa-code">
                                </i> Programming
                            </a>
                        </li>
                        <li>
                            <a href="apps-chat.html">
                                <i class="fa fa-globe">
                                </i> Networking
                            </a>
                        </li>
                        <li>
                            <a href="apps-faq-section.html">
                                <i class="fa fa-code-fork">
                                </i> System Analysis
                            </a>
                        </li>

                        <li>
                            <a href="apps-faq-section.html">
                                <i class="fa fa-camera">
                                </i> Graphics Design
                            </a>
                        </li>
                        <li>
                            <a href="apps-faq-section.html">
                                <i class="fa fa-list">
                                </i> Others
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="app-sidebar__heading" style="color: #CCD1D1">Management</li>
                <li>
                    <a href="{{ route('categories.index') }}">
                        <i class="metismenu-icon fa fa-list" style="font-size: 15px"></i>
                        Categories
                    </a>
                </li>

                <li>
                    <a href="{{ route('users.index') }}">
                        <i class="metismenu-icon fa fa-users" style="font-size: 15px"></i>
                        Users
                    </a>
                </li>

                <li>
                    <a href="{{ route('jobs.index') }}">
                        <i class="metismenu-icon fa fa-balance-scale" style="font-size: 15px"></i>
                        Jobs
                    </a>
                </li>

                <li>
                    <a href="{{ route('categories.index') }}">
                        <i class="metismenu-icon fa fa-question" style="font-size: 15px"></i>
                        Questions
                    </a>
                </li>


                <li class="app-sidebar__heading" style="color: #CCD1D1">MY ACCOUNT</li>
                <li class="">
                    <a href="{{ route('myNotebook.index') }}">
                        <i class="metismenu-icon fa fa-folder" style="font-size: 15px"></i>
                        My Storage
                    </a>
                </li>

                <li class="">
                    <a href="#">
                        <i class="metismenu-icon fa fa-bookmark" style="font-size: 15px"></i>
                        Bookmarks
                    </a>
                </li>

                <li class="">
                    <a href="#">
                        <i class="metismenu-icon fa fa-history" style="font-size: 15px"></i>
                        History
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('MyQuestions.index') }}">
                        <i class="metismenu-icon fa fa-question-circle" style="font-size: 15px"></i>
                        My Questions
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
{{--Sidebar ends--}}
