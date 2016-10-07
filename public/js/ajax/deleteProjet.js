$(document).ready(function(){

    $('.supprimer-click-projet').on('click', function(){

        // Confirmation
        var r = confirm("Voulez-vous supprimer cet enregistrement ?");
        if (r == false) {
            return false
        }
        
        var id = $(this).parent("tr").attr('id')
        console.log(id)
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/deleteProjet',
            data: {'id': id},
            success: function (id) {
                $('#projet-id-' + id).remove();
            },
            error: function () {
                alert("Erreur dans l'enregistrement des données, contactez l'administrateur.")
            }
        });
    });
});