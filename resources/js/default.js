$(document).on('submit', '#modalEditar', function(e) {
    e.preventDefault();
    let data = $(this).serialize();

    var name

    $.ajax({
        method: 'PUT',
        url: url('usuarios/' + $(this).find("input[name='user_id']").val()),
        data: data
    }).done(function( msg ) {
        alert( "Data Saved: " + msg );
    }).fail(function(error) {
        alert('Algo ha fallado.');
    });
});

$('.edit-user-button').click(function() {
    alert($(this).data('user-id'));
    let userId = $(this).data('user-id');
});
