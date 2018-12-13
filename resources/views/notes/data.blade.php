@extends('layouts.main')
@section('content')
    @include('modals.notes_details')
    @php($num = 1)
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

    <div class="main-content-notes table-responsive">
        <table id="myTable" class="table table-hover table-bordered table-sm"
               style="font-size: small">
            <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Category</th>
                <th>Date added</th>
                <th>Action</th>
            </tr>

            </thead>
            <tbody>
            @foreach($data as $notes)
                <tr>
                    <td>{{$num++}}</td>
                    <td>
                        <a href="{{ url('/notes/'.$notes->notes_id.'/details') }}" style="cursor: pointer">
                            {{$notes->notes_title}}
                           <span>
                            @if($notes->notes_accessibility == "private")
                                   <i class="fa fa-lock text-success" title="This title is private"></i>
                               @elseif($notes->notes_accessibility == "public")

                                   <i class="fa fa-unlock text-warning" title="This note is public"></i>
                               @endif
                        </span>
                        </a>

                    </td>
                    <td>{{$notes->notes_category}}</td>
                    <td>
                        {{\Carbon\Carbon::parse($notes->notes_add_date)->format('M d, Y')}}
                    </td>
                    <td>
                        <a href="{{ url('/notes/'.$notes->notes_id.'/details') }}">
                            <button class="btn btn-info" title="view prices"
                                    style="float: right; margin: 2px; padding: 5px; font-size: small">
                                <i class="fa fa-eye"></i> More
                            </button>
                        </a>
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
@endsection