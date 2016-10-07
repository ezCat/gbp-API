$(document).ready(function(){

    $('.supprimer-click-commande').on('click', function(){

        // Confirmation
        var r = confirm("Voulez-vous supprimer cet enregistrement ?");
        if (r == false) {
            return false
        }
        
        var id = $(this).parent("tr").attr('data-id')
        console.log(id)
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/deleteCommande',
            data: {'id': id},
            success: function (id) {
                $('#commande-id-' + id).remove();
            },
            error: function () {
                alert("Erreur dans l'enregistrement des données, contactez l'administrateur.")
            }
        });
    });
});