<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 7/21/19
 * Time: 8:54 PM
 */
?>
<style>
    .team-column h1{
        font-size: medium;
        font-weight: bold;
    }
    .event-schedule h4{
        text-align: left;
        font-size: medium;
        padding: 0;
        color: #D61069;
        font-weight: bold;
    }
    .modal-header{
        padding: 5px;
    }
    .modal-header h4.modal-title{
        text-align: center;
        font-size: 14px;
        margin: 0 auto;
        font-weight: bold;
        color: #646464;
    }
    .modal-title{
        text-align: center;
        padding: 8px;
    }
    .modal-footer{
        background-color: whitesmoke;
        border-top: 1px solid #D1D1D1;
        text-align: center;
    }
    .modal-body{
        font-size: small;
        padding: 10px 40px;
    }
    .modal-body label{
        font-size: small;
        font-weight: bold;
    }
    .form-group{
        margin-top: 5px;
    }
    .form-group input.form-control{
        font-size: small;
    }
    .form-group input.form-control::placeholder{
        font-size: small;
        color: #ABB2B9;
        font-style: italic;
    }
    .form-group textarea.form-control::placeholder{
        font-size: small;
        color: #ABB2B9;
        font-style: italic;
    }
</style>
<div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: whitesmoke; box-shadow: 0 2px 2px 0 #D5D8DC">
                <div class="row">
                    <div class="col-md-11">
                        <h4 class="modal-title" id="userCrudModal" style="text-align: center"></h4>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="close pull-right text-danger" data-dismiss="modal">&times;</button>
                    </div>
                </div>

            </div>
            <div class="modal-body">
                <form id="merchantTypeForm" name="merchantTypeForm" class="form-horizontal">
                    <input type="hidden" name="id" id="merchant_id">
                    <input type="hidden" name="admin_name" id="admin_name" value="<?php echo auth()->user()->name ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="col-sm-12">Merchant Type Name</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Merchant type name" value="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-sm-12" for="description">Descriptions</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" required placeholder="Write something about this merchant type ..." name="description" rows="4" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 15px">
                        <div class="col-sm-12">
                            <button type="submit" style="float: right" class="btn btn-primary btn-block" id="btn-save" value="create">
                                Save changes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <small style="text-align: center; font-size: small; color: #B5B5B6; margin: 0 auto">@PayIt create new merchant type</small>
            </div>
        </div>
    </div>
</div>

