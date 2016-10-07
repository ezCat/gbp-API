$(document).ready(function(){

    $('.supprimer-click-heure').on('click', function(){

        // Confirmation
        var r = confirm("Voulez-vous supprimer cet enregistrement ?");
        if (r == false) {
            return false
        }
        
        var id = $(this).parent("tr").attr('data-id')
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/deleteHeure',
            data: {'id': id},
            success: function (id) {
                $('#heure-id-' + id).remove();
            },
            error: function () {
                alert("Erreur dans l'enregistrement des données, contactez l'administrateur.")
            }
        });
    });
});