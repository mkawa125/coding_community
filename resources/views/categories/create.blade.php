<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/12/19
 * Time: 9:55 PM
 */
?>
@extends('layouts.app')

@section('content')
    <div class="col-md-11" style="margin: 0 auto">
        <div class="card mb-3" style="padding: 15px">
            <div class="card-header-tab card-header" style=" border-bottom: 1px solid cadetblue">
                <div class="card-header-title font-size-lg text-capitalize " style="font-size: 18px; font-family: cursive">
                    <i class="header-icon fa fa-pencil-square-o mr-3 text-muted " style="font-size: small"> </i>
                    Create New Category
                </div>
                <div class="btn-actions-pane-right actions-icon-btn" style="text-transform: capitalize">
                    {{ \Carbon\Carbon::parse(today())->format('M, d - Y')}}
                </div>
            </div>
            <div class="card-body" style="; border-top: 1px solid cadetblue; margin-top: 1px; padding: 15px 0">

                <div class="col-md-12">
                    <div class="category-header">
                        <h4>Fill the form Bellow to create category</h4>
                    </div>

                    <div class="col-md-12" style="margin: 0 auto; border: 1px solid whitesmoke">
                        <form class="category-create-form" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <div class="input-group">
                                    <input type="text" id="category_name" required name="category_name"
                                           placeholder="category name"
                                           class="form-control{{ $errors->has('category_name') ? ' is-invalid' : '' }}">
                                </div>
                                @if ($errors->has('category_name'))
                                    <span class="help-block {{ $errors->has('category_name') ? ' has-error' : '' }}">
                                            <strong>{{ $errors->first('category_name') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="category_name">Description</label>
                                <div class="input-group">
                                    <textarea id="description" name="description" required rows="3"
                                              placeholder="Write something about this category ..."
                                              class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"></textarea>
                                </div>
                                @if ($errors->has('description'))
                                    <span class="help-block {{ $errors->has('description') ? ' has-error' : '' }}">
                                            <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                @endif
                            </div>
                            <div class="field_wrapper">
                                <label for="subcategories">Create Subcategories</label>
                                <div class="input-group">
                                    <input type="text" name="subcategories[]" class="form-control"
                                           placeholder="Subcategory name"
                                           value="" id="subcategories"/>
                                    <a href="javascript:void(0);" class="add_button btn btn-success"
                                       title="Add New Subcategory"
                                    style="border-radius: 0"> <i class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 15px">
                                <div class="input-group">
                                    <button class="btn btn-primary btn-block" type="submit">Save Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

