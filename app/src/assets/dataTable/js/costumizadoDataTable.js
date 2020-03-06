$(document).ready(function() {
    $('#tabela').DataTable({
        dom:'Blrftip',
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
            },

        },
        "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"] ],

        buttons: ['csvHtml5',
            {
                extend: 'pdfHtml5',
                text: 'Exportar PDF',
                exportOptions: {
                    modifier: {
                        page: 'current'
                    }
                }
            }
        ]
    } );

} );