<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 12/12/18
 * Time: 1:50 PM
 */
?>

<div id="confirm_delete_notes" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info">Confirmation</h5>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form name="confirm_payment_status" method="post" action="{{ '/notes/'.$data->id.'/delete' }}"
                      id="confirm_payment_status">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="password"><strong>Confirm Password to delete this notes:</strong></label>
                        <input style="border-radius: 0" type="password" class="form-control" required
                               name="password" id="password" placeholder="Enter password">
                        <span id="password_error" class="text-danger" style="display: none;"></span>
                    </div>
                    <button class="btn btn-danger btn-block" type="submit"
                            style="border-radius: 0; margin-top: 15px; margin-bottom: 10px">Confirm Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

