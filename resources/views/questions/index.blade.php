@extends('layouts.app')

@section('content')
    <div class="app-main__inner" style="background-color: rgba(255,255,255,0.45); padding-bottom: 10px; margin: 10px 20px">
        <div class="app-page-title" style="background-color: #c1cffc">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <i class="fa fa-question-circle-o"
                           style="background-color: white; padding: 8px; border-radius: 360px; height: 36px;
                           width: 36px; border: 1px solid #c1c5cc"></i>
                            My Questions
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" class="btn btn-shadow btn-wide btn-primary">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-question-circle"></i>
                    </span>
                        New Question
                    </button>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-between">
            <div>

            </div>
            <div class="col-12 col-md-3 p-0 mb-3">
                <input type="text" class="form-control" placeholder="Search...">
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header pl-0 pr-0">
                <div class="row no-gutters w-100 align-items-center">
                    <div class="col"></div>
                    <div class="col-4 text-muted">
                        <div class="row no-gutters align-items-center">
                            <div class="col-4">Replies</div>
                            <div class="col-8">Last update</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body py-3">
                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <a href="" class="text-big">Aliquam et velit vel nisi egestas pulvinar sit amet ac tellus</a>
                        <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="" class="text-muted">Leon Wilson</a></div>
                    </div>
                    <div class="d-none d-md-block col-4">

                        <div class="row no-gutters align-items-center">
                            <div class="col-4">12</div>
                            <div class="media col-8 align-items-center">
                                <img style="width: 40px; height: auto;" src="assets/images/avatars/2.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                <div class="media-body flex-truncate ml-2">
                                    <div class="line-height-1 text-truncate">1 day ago</div>
                                    <a href="" class="text-muted small text-truncate">by Leon Wilson</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <hr class="m-0">
            <div class="card-body py-3">
                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <a href="" class="text-big">Sed scelerisque justo elit, sed maximus arcu fringilla at</a>
                        <span class="badge badge-success align-text-bottom ml-1">Solved</span>
                        <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="" class="text-muted">Allie Rodriguez</a></div>
                    </div>
                    <div class="d-none d-md-block col-4">

                        <div class="row no-gutters align-items-center">
                            <div class="col-4">43</div>
                            <div class="media col-8 align-items-center">
                                <img style="width: 40px; height: auto;" src="assets/images/avatars/3.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                <div class="media-body flex-truncate ml-2">
                                    <div class="line-height-1 text-truncate">1 day ago</div>
                                    <a href="" class="text-muted small text-truncate">by Allie Rodriguez</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <hr class="m-0">
            <div class="card-body py-3">

                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <a href="" class="text-big">Donec lobortis molestie sem, ac consectetur turpis egestas quis</a>
                        <span class="badge badge-default align-text-bottom ml-1">Locked</span>
                        <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="" class="text-muted">Kenneth Frazier</a></div>
                    </div>
                    <div class="d-none d-md-block col-4">

                        <div class="row no-gutters align-items-center">
                            <div class="col-4">42</div>
                            <div class="media col-8 align-items-center">
                                <img style="width: 40px; height: auto;" src="assets/images/avatars/4.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                <div class="media-body flex-truncate ml-2">
                                    <div class="line-height-1 text-truncate">1 day ago</div>
                                    <a href="" class="text-muted small text-truncate">by Kenneth Frazier</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
