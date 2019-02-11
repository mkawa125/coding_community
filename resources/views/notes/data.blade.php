@extends('layouts.main')
@section('content')
    @include('modals.notes_details')
    @php($num = 1)
<div class="col-sm-11" style="margin: 0 auto">
    <div class=" main-content-head" style=" margin:0 ">
        <div class="row" style="padding: 0; margin: 0">
            <div class="col-md-12 head-column" style="margin: 0">
                    <ul class="nav tabs-cyan" id="myClassicTabShadow" role="tablist">
                        <li class="nav-item" style="padding: 10px">
                            <a class="nav-link  waves-light active show" id="profile-tab-classic-shadow"
                               data-toggle="tab" href="#profile-classic-shadow" role="tab"
                               aria-controls="profile-classic-shadow" aria-selected="true">Profile
                            </a>
                        </li>
                        <li class="nav-item" style="padding: 10px">
                            <a class="nav-link waves-light" id="follow-tab-classic-shadow" data-toggle="tab" href="#follow-classic-shadow" role="tab" aria-controls="follow-classic-shadow" aria-selected="false">Follow</a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
    <!-- Classic tabs -->
        <div class="tab-content card main-content-notes" id="myClassicTabContentShadow">
            <div class="tab-pane fade active show" id="profile-classic-shadow"
                 role="tabpanel" aria-labelledby="profile-tab-classic-shadow" style=" padding-top: 0">
                    <table id="myTable" class=" table table-hover col-md-8"
                           style="font-size: small; background-color: whitesmoke; padding-bottom: 20px">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th style="text-align: right">Date added</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($data as $notes)
                            <tr>
                                <td style="width: 60px">
                                    <input type="checkbox" id="checkbox1" style="margin-right: 5px">
                                    <label for="checkbox1"></label>
                                    <span><i class="fa fa-star" style="color: silver; margin-right: 5px; font-size: medium"></i></span>

                                </td>
                                <td style="width: 400px">
                                    <a href="{{ url('/notes/'.$notes->notes_id.'/details') }}" style="cursor: pointer;">
                                        {{$notes->notes_title}}
                                        <span>
                            @if($notes->notes_accessibility == "private")
                                                <i class="fa fa-lock text-success" title="This title is private" style="font-size: small"> Private</i>
                                            @elseif($notes->notes_accessibility == "public")

                                                <i class="fa fa-group" title="This note is public" style="font-size: small; color: silver"> Public</i>
                                            @endif
                        </span>
                                    </a>

                                </td>
                                <td style="text-transform: capitalize; color: #7F8C8D">{{$notes->notes_category}}</td>
                                <td style="font-size: small; color: silver; text-align: right">
                                    {{\Carbon\Carbon::parse($notes->notes_add_date)->format('M d, Y')}}
                                </td>
                            </tr>

                            <div id="notes_details_modal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="notes_title"></h4>
                                            <button class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <form name="add_product_form" id="add_product_form">
                                                <div class="form-group">
                                                    <label for="product_name">Name:</label>
                                                    <input type="text" class="form-control" name="name" id="notes_category" placeholder="product name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="product_code">Code:</label>
                                                    <input type="text" class="form-control" name="code" id="product_code" placeholder="product code">
                                                </div>
                                                <div class="form-group" style="float: right">
                                                    <button class="btn btn-danger" data-dismiss="modal" style="padding: 5px; font-size: small">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>
            </div>
            <div class="tab-pane fade" id="follow-classic-shadow" role="tabpanel" aria-labelledby="follow-tab-classic-shadow">
                <p>
                   Tab 2
                </p>
            </div>
        </div>

    <!-- Classic tabs -->

</div>

    <script>
        $(document).ready( function() {
            callMe();
        });

        function callMe() {
            table = $("#myTable").DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ":not(:last-child)"
                        },
                        title: "Products",
                        messageTop: "The List Of Products As Of {{date('d-m-Y')}}"
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ":not(:last-child)"
                        },
                        title: "Products",
                        messageTop: "The List Of Products As Of {{date('d-m-Y')}}"
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ":not(:last-child)"
                        },
                        title: "Products",
                        messageTop: "The List Of Products As Of {{date('d-m-Y')}}"
                    }
                ],
                iDisplayLength: 5,
                bLengthChange: false
            });
        }
    </script>

    <script>
        $(document).ready(function () {

            $('.star').on('click', function () {
                $(this).toggleClass('star-checked');
            });

            $('.ckbox label').on('click', function () {
                $(this).parents('tr').toggleClass('selected');
            });

            $('.btn-filter').on('click', function () {
                var $target = $(this).data('target');
                if ($target != 'all') {
                    $('.table tr').css('display', 'none');
                    $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
                } else {
                    $('.table tr').css('display', 'none').fadeIn('slow');
                }
            });

        });
    </script>
@endsection