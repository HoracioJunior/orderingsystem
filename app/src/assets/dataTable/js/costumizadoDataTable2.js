$(document).ready(function() {
    var table = $('#tabela2').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ registos por pagina",
            "zeroRecords": "Nenhum registo foi encontrado",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "Nenhum registo disponivel",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Procurar:",
            "paginate":{
                "previous": "Anterior",
                "next": "Próximo",
                "first": "Primeiro",
                "last": "Ultimo"
            }

        },
        "lengthMenu": [ [5,10, 25, 50, -1], [5,10, 25, 50, "Todos"] ],
    } );

    table.buttons().container()
        .appendTo( '#tabela2_wrapper .col-sm-6:eq(0)' );
} );