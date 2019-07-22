<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/21/19
 * Time: 7:20 PM
 */
?>
@extends('layouts.app')

@section('content')
    <div class="col-md-11" style="margin: 0 auto">
        @if($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ $message }}
            </div>
        @endif
        <div class="card mb-3" style="padding: 15px">


            <div class="card-header-tab card-header" style=" border-bottom: 1px solid cadetblue">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon fa fa-book mr-3 text-muted opacity-6" style="font-size: small"> </i>
                    My Notebook
                </div>
                <div class="btn-actions-pane-right actions-icon-btn">
                    <div class="btn-group dropdown"  style="margin-right: 10px">
                        <a href="{{ route('categories.create') }}">
                            <button class="btn btn-primary">
                                <i class="fa fa-plus"></i> Create Notes Category
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body" style="; border-top: 1px solid cadetblue; margin-top: 1px">
                Categories
                <div class="col-md-12">
                    <div class="row" style="padding: 0 auto">
                        <div class="col-md-3">
                            <a href="#" class="category_link">
                                <div class="row" style="padding: 10px 15px 10px 0">
                                    <div class="col-md-12 category_box">
                                        <h4>Category one</h4>
                                        <label>
                                            <i class="fa fa-pencil"></i> 201 Notes
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="category_link">
                                <div class="row" style="padding: 10px 15px 10px 0">
                                    <div class="col-md-12 category_box">
                                        <h4>Category one</h4>
                                        <label>
                                            <i class="fa fa-pencil"></i> 201 Notes
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="category_link">
                                <div class="row" style="padding: 10px 15px 10px 0">
                                    <div class="col-md-12 category_box">
                                        <h4>Category one</h4>
                                        <label>
                                            <i class="fa fa-pencil"></i> 201 Notes
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="category_link">
                                <div class="row" style="padding: 10px 15px 10px 0">
                                    <div class="col-md-12 category_box">
                                        <h4>Category one</h4>
                                        <label>
                                            <i class="fa fa-pencil"></i> 201 Notes
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

