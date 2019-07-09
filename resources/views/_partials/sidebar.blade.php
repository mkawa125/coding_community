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
                <li class="app-sidebar__heading">Menu</li>
                <li class="mm-active">
                    <a href="#">
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
            </ul>
        </div>
    </div>
</div>
{{--Sidebar ends--}}
