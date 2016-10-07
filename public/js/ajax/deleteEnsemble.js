$(document).ready(function(){

    $('.supprimer-click-ensemble').on('click', function(){

        // Confirmation
        var r = confirm("Voulez-vous supprimer cet enregistrement ?");
        if (r == false) {
            return false
        }
        
        var id = $(this).parent("tr").attr('id').slice(-1)
        var id = $(this).parent("tr").attr('data-id')
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/deleteEnsemble',
            data: {'id': id},
            success: function (id) {
                $('#ensemble-id-' + id).remove();
            },
            error: function () {
                alert("Erreur dans l'enregistrement des données, contactez l'administrateur.")
            }
        });
    });
});