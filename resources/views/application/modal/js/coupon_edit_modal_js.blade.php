<script>
    function editVoucherFormShow(id) {
        event.preventDefault();
        $('.modal-title').html(add_title);
        $('#add_data_form').html('');
        url = edit_voucher_form_url.replace(':id', id);

        $.ajax({
            type: 'GET',
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $('#edit_voucher_data_form').html(data);
            },
        });
    }


    $('#edit_voucher_data_form').on('submit', function(e) {
        e.preventDefault();
        let singleDeleteDraw = {
            ...dataTable
        };
        let id = $('#edit_id').val()
        console.log('id: ', id);
        url = update_voucher_data_url.replace(':id', id);


        var formData = new FormData(this);
        console.log('formData: ', formData);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "PUT",
            url: url,
            data: $(this).serialize(),
            success: function(response) {
                console.log('response: ', response);
                singleDeleteDraw._fnDraw();
                myalert("success", response, 5000);
                $('#myModalVoucherEdit').modal('hide')
            },
            error: function(xhr, status, error) {
                console.log('error: ', xhr.responseJSON);
                myalert("error", xhr.responseJSON, 10000);
            },
        });
    });
</script>
