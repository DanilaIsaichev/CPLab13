$(document).ready(function(){
    $.ajax({
        url: '/functions.php?action=list',
        method: 'GET',
        success: function(data) {
            console.log(data);
            $('#messages').append('<ul></ul>');
            data.forEach(function(msg) {
                $('#messages ul').append(`<li>${msg}</li>`);
            });
        }
    });

    $('#msg-form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: '/functions.php?action=add',
            method: 'POST',
            data: $(this).serialize(),
            success: function(data) {
                if (data.status == 'success') {
                    let msg = $('#message').val();
                    msg = $(`<li>${msg}</li>`);
                    $('#messages ul').append(msg);
                }
            }
        });
    });
});