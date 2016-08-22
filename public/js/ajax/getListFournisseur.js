$(document).ready(function(){
    let fournisseurs = [];
    $.ajax({
        type: 'GET',
        url: 'http://localhost/gbp-API/public/ajax/getListFournisseur',
        success: function (json) {
            $.each(json, function(i, val) {
                fournisseurs.push(val);
            });

            $('#autocomplete').autocomplete({
                lookup: fournisseurs
            });
        },
        error: function () {
            alert("Impossible de récupérer les données, contactez l'administrateur.");
        }
    });
});