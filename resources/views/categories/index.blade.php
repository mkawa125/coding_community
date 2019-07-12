<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/12/19
 * Time: 8:14 PM
 */
?>
@extends('layouts.app')

@section('content')
    <div class="col-md-11" style="margin: 0 auto">
        <div class="card mb-3" style="padding: 15px">
            <div class="card-header-tab card-header" style=" border-bottom: 1px solid cadetblue">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                    <i class="header-icon fa fa-list mr-3 text-muted opacity-6" style="font-size: small"> </i>
                    List of all categories
                </div>
                <div class="btn-actions-pane-right actions-icon-btn">
                    <div class="btn-group dropdown"  style="margin-right: 10px">
                        <a href="#">
                            <button class="btn btn-success">
                                <i class="fa fa-plus"></i> Add Category
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body" style="; border-top: 1px solid cadetblue; margin-top: 1px">
                <table style="width: 100%; font-size: small" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Created By</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>1</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->addedBy->name }}</td>
                        <td>
                            <a class="#" href="#" style="text-decoration: none">
                                <button class="btn btn-info btn-sm" title="CLick here to view more details">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </a>

                            <a class="#" href="#" style="text-decoration: none">
                                <button class="btn btn-success btn-sm" title="Click here to edit this category">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </a>

                            <a class="#" href="#" style="text-decoration: none">
                                <button class="btn btn-danger btn-sm" title="Click here to delete category">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Created By</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
