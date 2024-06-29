<script>
    function openViewShowModal(id) {
        $('#applicationViewModal').modal('show')
        event.preventDefault();
        url = view_form_url.replace(':id', id);
        $.ajax({
            type: 'GET',
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                $('#application_data_show').html(data);
            },
        });
    }
</script>
