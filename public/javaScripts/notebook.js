
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    /*  When user click add user button */
    $('#create_category').click(function () {
        $('#btn-save').val("create_category");
        $('#merchantTypeForm').trigger("reset");
        $('#userCrudModal').html("Create New Category");
        $('#ajax-crud-modal').modal('show');
        $('#ajax-crud-modal').appendTo("body");
    });

    /* When click edit user */
    $('body').on('click', '#edit_category', function () {
        var folder_id = $(this).data('id');
        $.get('/folders/' + folder_id +'/edit', function (data) {
            $('#userCrudModal').html("Edit Merchant Type");
            $('#btn-save').val("edit-merchantType");
            $('#ajax-crud-modal').modal('show');
            $('#merchant_id').val(data.id);
            $('#name').val(data.Name);
            $('#description').val(data.Description);
        })
    });
    //delete user login
    $('body').on('click', '.delete-merchant', function () {
        var merchant_id = $(this).data("id");
        var delete_item = confirm("Are You sure want to delete !");
        if (delete_item === true){
            $.ajax({
                type: "DELETE",
                url: '/merchantTypes/'+ merchant_id,
                success: function (data) {
                    toastr.options = {
                        "closeButton": true,
                        "newestOnTop": false,
                        "positionClass": "toast-bottom-right",
                        "timeOut": "2000",
                        "title": 'Success',
                    };
                    toastr.success('Merchant Type Deleted', 'Delete Success');
                    $("#merchant_id_" + merchant_id).remove();
                },
                error: function (data) {
                    toastr.options = {
                        "closeButton": true,
                        "newestOnTop": false,
                        "positionClass": "toast-bottom-right",
                        "timeOut": "2000",
                        "title": 'Success',
                    };
                    toastr.Error('Error while deleting merchant type', 'Error');
                    console.log('Error:', data);
                }
            });
        }else {
            return false;
        }
    });
});

if ($("#categoryForm").length > 0) {
    $("#categoryForm").validate({

        submitHandler: function(form) {

            var actionType = $('#btn-save').val();
            $('#btn-save').html('Sending..');

            $.ajax({
                data: $('#categoryForm').serialize(),
                url: "/folders",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    var folder = '<div>' +
                        '<a href="#">' +

                        '</a>'+
                        '</div>'
                    ;

                    if (actionType == "create_category") {
                        $('#notebook_body').prepend(folder);

                    } else {
                        $("#merchant_id_" + data.id).replaceWith(folder);

                    }

                    $('#merchantTypeForm').trigger("reset");
                    $('#ajax-crud-modal').modal('hide');
                    $('#btn-save').html('Save Changes');

                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#btn-save').html('Save Changes');
                }
            });
        }
    })
}
