@extends('layouts.main')
@section('content')
    @include('modals.confirm_delete_notes')
    <div class="col-sm-11 offset-1">
        <div class=" main-content-head" style=" margin: 10px 0 0 0">
            <div class="row" style="padding: 0; margin: 0">
                <div class="col-md-12 head-column" style="padding: 0">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active"
                           style="padding: 10px 20px 10px 20px" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                        <a class="nav-item nav-link"
                           style="padding: 10px 20px 10px 20px" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                        <a class="nav-item nav-link"
                           style="padding: 10px 20px 10px 20px" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content-notes" style="padding: 25px 45px 45px 45px">
            @if($data)
                <div class="row">
                    <div class="col-sm-12">
                        <a href="#" class="details-head"><strong>{{ $data->notes_title }}</strong></a>
                        <span class="category-details"><a href="#" style="color: chocolate">{{ $data->notes_category }}</a></span>
                    </div>
                </div>
                <div class="">
                    {!!$data->notes_body !!}
                    <img src="{{ asset('images/sample-image.png') }}" alt="Chicago" width="100%" height="250" style="margin-bottom: 10px">
                    <span><strong>{{ $data->notes_add_date }}</strong></span>
                    <span><strong style="color: cadetblue">Author: </strong> <a href="#">{{ $data->name }} {{ $data->surname }}</a>, <a href="#" style="color: coral">Web Programmer</a></span>
                </div>
                <div class="action">
                    <div class="btn-group">
                        <a href="{{ url('notes/edit') }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                        @if($data->notes_accessibility == 'public')
                            <a class="btn btn-info btn-xs" title="make this public">
                                <i class="fa fa-eye"></i>
                            </a>
                        @else
                            <a class="btn btn-warning btn-xs" title="make this notes private">
                                <i class="fa fa-eye-slash"></i>
                            </a>
                        @endif
                        <button type="button" class="btn btn-danger btn-xs" onclick="showModal('confirm_delete_notes')">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>
































































{{--<div class="col-sm-10 offset-1">--}}
    {{--<div class=" main-content-head">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-7" style="padding-left: 40px">--}}
                {{--<label class="notes-search"><strong><a href="#">Notes</a><span> <i class="fa fa-angle-double-right"></i> <a href="#">Details</a></span></strong></label>--}}
            {{--</div>--}}
            {{--<div class="col-sm-3">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="search" class="form-control" placeholder="search notes" id="notes" name="notes" style="font-size: small">--}}
                    {{--<div class="input-group-append">--}}
                    {{--<span class="input-group-text" style="background-color: white">--}}
                        {{--<a href="#">--}}
                            {{--<i class="fa fa-search" style="color: #707B7C"></i>--}}
                        {{--</a>--}}
                    {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="results"></div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    {{--<div class=" main-content" style="margin-top: 0; padding: 15px 50px 15px 50px; min-height: 390px">--}}
        {{--<div class="row" style="margin-top: 10px">--}}
            {{--<div class="col-sm-12 jumbotron">--}}

                {{--@if($data)--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-12">--}}
                            {{--<a href="#" class="details-head"><strong>{{ $data->notes_title }}</strong></a>--}}
                            {{--<span class="category-details"><a href="#" style="color: chocolate">{{ $data->notes_category }}</a></span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="notes-body">--}}
                        {{--{!!$data->notes_body !!}--}}
                        {{--<img src="{{ asset('images/sample-image.png') }}" alt="Chicago" width="100%" height="250" style="margin-bottom: 10px">--}}
                        {{--<span><strong>{{ $data->notes_add_date }}</strong></span>--}}
                        {{--<span><strong style="color: cadetblue">Author: </strong> <a href="#">{{ $data->name }} {{ $data->surname }}</a>, <a href="#" style="color: coral">Web Programmer</a></span>--}}
                    {{--</div>--}}
                    {{--<div class="actions">--}}
                        {{--<div class="btn-group" style="float: right">--}}
                            {{--<a href="{{ url('notes/edit') }}" class="btn btn-success"><i class="fa fa-edit"></i></a>--}}
                            {{--@if($data->notes_accessibility == 'public')--}}
                                {{--<a class="btn btn-info btn-xs" title="make this public">--}}
                                    {{--<i class="fa fa-eye"></i>--}}
                                {{--</a>--}}
                            {{--@else--}}
                                {{--<a class="btn btn-warning btn-xs" title="make this notes private">--}}
                                    {{--<i class="fa fa-eye-slash"></i>--}}
                                {{--</a>--}}
                            {{--@endif--}}
                            {{--<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal{{ $data->notes_id }}" title="delete this note">--}}
                                {{--<i class="fa fa-trash"></i>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
