<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/16/19
 * Time: 10:38 PM
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
                    <i class="header-icon fa fa-list mr-3 text-muted opacity-6" style="font-size: small"> </i>
                    Jobs
                </div>
                <div class="btn-actions-pane-right actions-icon-btn">
                    <div class="btn-group dropdown"  style="margin-right: 10px">
                        <a href="{{ route('categories.create') }}">
                            <button class="btn btn-success">
                                <i class="fa fa-plus"></i> Add New Job
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body" style="; border-top: 1px solid cadetblue; margin-top: 1px">
                <table style="width: 100%; font-size: small" id="example" class="table table-sm table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Job Title</th>
                        <th>Job Category</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $key => $job)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $job->title }}</td>
                            <td>{{ $job->category }}</td>
                            <td>{{ $job->position }}</td>
                            <td>{{ $job->status }}</td>
                            <td>
                                <a class="#" href="#" style="text-decoration: none">
                                    <button class="btn btn-info btn-sm" style="padding: 0 4px"
                                            title="CLick here to view more details">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </a>

                                <a class="#" href="#" style="text-decoration: none">
                                    <button class="btn btn-success btn-sm" style="padding: 0 4px"
                                            title="Click here to edit this category">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>

                                <a class="#" href="#" style="text-decoration: none">
                                    <button class="btn btn-danger btn-sm" style="padding: 0 4px"
                                            title="Click here to delete category">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

