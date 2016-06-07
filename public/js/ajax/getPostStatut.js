$(document).ready(function(){

    $('#change-statut-projet').on('change', function(){
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/postStatutProjet',
            data: {'etat': $('#change-statut-projet').val(), 'id_projet': $('#btn-id-projet').attr('data-id')},
            dataType: 'json',
            success: function (json) {
                $.each(json, function(i, val) {
                    alert("Votre projet est maintenant : " + val.et_libelle);
                    location.reload();
                });
            },
            error: function () {
                alert("Erreur dans l'enregistrement des données, contactez l'administrateur.");
                location.reload();
            }
        });
    });
});