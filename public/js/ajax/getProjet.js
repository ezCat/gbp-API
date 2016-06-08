$(document).ready(function(){

    $('#btn-affaire').on('click', function(){
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/getListeProjet',
            dataType: 'json',
            success: function (json) {
                // $('#table-liste-projet').append('<table id="aze">');
                console.log('<table border="1"><tr></tr>')
                $.each(json, function(i, val) {
                    $.each(val, function(i, val) {
                        if (i == "id") {
                            console.log('<tr id="projet-id-' + val + '">')
                            // $('#aze').append('<tr id="projet-id-' + val + '">');
                        } else {
                            console.log('<td>' + val + '</td>')
                            // $('#projet-id-' + val).append(
                            //     '<td><input type="text" class="form-tab" name="' + i + '" value="' + val + '"></td>'
                            // );
                        }
                        if ( i == 'p_commentaire') {
                            console.log('</tr>')
                            // $('#projet-id-' + val).append('<td style="padding-top: 15px" class="supprimer-click-projet"><i class="fa fa-close fa-2x"></i></td></tr>');
                        }
                    });
                });
                console.log('</table>')
                // $('#aze').append('</table>');
            },
            error: function () {
                alert("Erreur dans la récupération des données, contactez l'administrateur.");
            }
        });
    });

});