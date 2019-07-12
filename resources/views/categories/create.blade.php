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
            <div class="card-body" style="; border-top: 1px solid cadetblue; margin-top: 1px">

                <div class="col-md-10 category-body">
                    <div class="category-header">
                        <h4>Fill the form Bellow to create category</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

