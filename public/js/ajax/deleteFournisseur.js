$(document).ready(function(){

    $('.supprimer-click-fournisseur').on('click', function(){

        // Confirmation
        var r = confirm("Voulez-vous supprimer cet enregistrement ?");
        if (r == false) {
            return false
        }
        
        var id = $(this).parent("tr").attr('id').slice(-1)
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/deleteFournisseur',
            data: {'id': id},
            success: function (id) {
                $('#fournisseur-id-' + id).remove();
            },
            error: function () {
                alert("Erreur dans l'enregistrement des données, contactez l'administrateur.")
            }
        });
    });
});