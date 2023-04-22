$(document).ready(function() {
    $('table').on('click', '#user', function() {
        var userURL = $(this).data('url');
        $.get(userURL, function(data) {
            $('#userShowModal').modal('show');
            $('#user-nama').text(data.pegawai_id);
            $('#user-id').val(data.username);
            $('#user-password').val(data.password);
            
        })
    });

});