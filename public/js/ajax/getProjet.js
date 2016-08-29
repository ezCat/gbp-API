$(document).ready(function(){

    $('#btn-affaire').on('click', function(){
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/getListeProjet',
            dataType: 'json',
            success: function (json) {
                // Rentre dans les objets
                $.each(json, function(i, val) {
                        // Select son id et le mets dans un tr
                        $('#table-liste-projet').append(
                            '<tr id="' + val["id"] + '">' +
                                '<td><input type="text" class="form-tab updatable-projet" name="p_libelle" value="' + val["p_libelle"] + '"></td>' +
                                '<td><input type="text" class="form-tab updatable-projet" name="p_commentaire" value="' + val["p_commentaire"] + '"></td>' +
                                '<td><input type="text" class="form-tab" name="nom" value="' + val["nom"] + '" disabled></td>' +
                                '<td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>' +
                                '</tr>'
                        );
                });
            },
            error: function () {
                alert("Erreur dans la récupération des données, contactez l'administrateur.");
            }
        });
    });

});