
$('.form-adiconar').submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: '/carrinho/adicionar',
        type: 'POST',
        data: $(this).serialize(),
        success: function () {
            Swal.fire({
                timer: 2500,
                icon: 'success',
                title: 'O Item foi adicionado ao Carrinho',
                showConfirmButton: false
            })
        },
        error: function () {
            console.log('it failed!');
        }
    });
});

