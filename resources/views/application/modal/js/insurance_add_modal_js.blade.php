<script>
    function addFormInsurnaceShow(company_id) {
        console.log('console:test ');
        event.preventDefault();
        $('#edit_data_form').html('');
        $('#modalTitle').html(add_title);
        $.ajax({
            type: 'GET',
            url: add_form_insurance_url+`?id=${company_id}`,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $('#add_insurance_data_form').html(data);
                console.log('data: ', data);
            },
        });
    }

    $('#add_insurance_data_form').on('submit', function(e) {
        e.preventDefault();
        let singleDeleteDraw = {
            ...dataTable
        };
        var formData = new FormData(this);
        console.log('formData: ', formData);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: save_data_insurance_url,
            data: formData,
            success: function(response) {
                console.log('response: ', response);
                singleDeleteDraw._fnDraw();
                myalert("success", response, 5000);
                $('#myInsuranceModal').modal('hide')
                $('#myModal').modal('hide')
            },
            error: function(xhr, status, error) {
                console.log('error: ', xhr.responseJSON);
                myalert("error", xhr.responseJSON, 10000);
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>
