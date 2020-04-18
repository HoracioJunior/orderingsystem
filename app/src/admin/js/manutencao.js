$('.manutencao').submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: '/admin/manutencao',
        type: 'POST',
        data: $(this).serialize(),
        success: function () {
            Swal.fire({
                timer: 2500,
                icon: 'success',
                title: '',
                showConfirmButton: false
            })
        },
        error: function () {
            Swal.fire({
                timer: 2500,
                icon: 'error',
                title: '',
                showConfirmButton: false
            })
        }
    });
});
