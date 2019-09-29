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
    <style>
        .card{
            box-shadow: 1px 3px 3px 1px #c1c5cc;
        }
    </style>
    @include('notebook.modal')
    <div class="col-md-10" style="margin: 0 auto">
        @if($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ $message }}
            </div>
        @endif
        <div class="card mb-3" style="padding: 0">
            <div class="card-header" style="background-color: whitesmoke">
                <div class="">
                    <i class="header-icon fa fa-book mr-3 text-muted opacity-6" style="font-size: small"> </i>
                    My Notebook
                </div>
                <div class="btn-actions-pane-right actions-icon-btn">
                    <div class="btn-group dropdown"  style="margin-right: 10px">
                        <a  id="create_category">
                            <button class="btn btn-primary">
                                <i class="fa fa-plus"></i> New Category
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body" style="margin-top: 1px">
                <div class="col-md-12">
                    <div class="row" style="padding: 0 auto">
                        <div class="col-md-3">
                            <a href="#" class="category_link">
                                <div class="row" style="padding: 10px 15px 10px 0">
                                    <div class="col-md-12 category_box">
                                        <h4><i class="fa fa-folder"></i> Category one</h4>
                                        <label>
                                            <i class="fa fa-pencil-square-o"></i> 201 Notes
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="category_link">
                                <div class="row" style="padding: 10px 15px 10px 0">
                                    <div class="col-md-12 category_box">
                                        <h4><i class="fa fa-folder"></i> Category one</h4>
                                        <label>
                                            <i class="fa fa-pencil-square-o"></i> 201 Notes
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="category_link">
                                <div class="row" style="padding: 10px 15px 10px 0">
                                    <div class="col-md-12 category_box">
                                        <h4><i class="fa fa-folder"></i> Category one</h4>
                                        <label>
                                            <i class="fa fa-pencil-square-o"></i> 201 Notes
                                        </label>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#" class="category_link">
                                <div class="row" style="padding: 10px 15px 10px 0">
                                    <div class="col-md-12 category_box">
                                        <h4><i class="fa fa-folder"></i> Category one</h4>
                                        <label>
                                            <i class="fa fa-pencil-square-o"></i> 201 Notes
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

