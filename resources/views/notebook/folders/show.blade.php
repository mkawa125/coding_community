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
    @include('notebook.folders.modal')
    <div class="col-md-10" style="margin: 0 auto">
        @if($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ $message }}
            </div>
        @endif
        <div class="card mb-3" style="padding: 0; box-shadow: 0 1px 2px 0 #CCD1D1; border-top: 1px solid whitesmoke">
            <div class="card-header card_head" style="background-color: #FBFCFC; border: none; ">
                <div class="">
                    <i class="header-icon fa fa-book mr-3 text-muted opacity-6" style="font-size: small"> </i>
                    My Notebook
                </div>
            </div>
            <div class="card-body" id="" style="margin-top: 1px">
                <div class="col-md-12">
                    <div class="row" style="padding: 0 auto" id="notebook_body">
                        {{ $folder->folder_name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

