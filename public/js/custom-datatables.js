$(document).ready(function() {
    let table = $('#example').DataTable({
        buttons: ['copy', 'csv', 'excel', 'pdf']
    });

    table.buttons().container().appendTo('#example_wrapper')
})