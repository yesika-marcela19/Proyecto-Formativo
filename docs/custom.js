$(document).ready(function() {
    $(document).on('click', '.edit', function() {
        var id = $(this).val();
        var first = $('#id_persona' + id).text();
        var last = $('#nombre' + id).text();
        $('#edit').modal('show');
        $('#id_persona').val(first);
        $('#nombre').val(last);
    });
});