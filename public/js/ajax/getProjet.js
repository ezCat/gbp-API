$(document).ready(function(){

    $('#btn-affaire').on('click', function(){
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/getListeProjet',
            dataType: 'json',
            success: function (json) {
                $('#table-liste-projet').html('<table>');
                $.each(json, function(i, val) {
                    $.each(val, function(i, val) {
                        if (i == "id") {
                            $('#table-liste-projet').append('<tr id="' + val + '">');
                        } else {
                            $('#table-liste-projet').append(
                                '<td><input type="text" class="form-tab" name="' + i + '" value="' + val + '"></td>'
                            );
                        }
                    });
                    $('#table-liste-projet').append('</tr>');
                });
                $('#table-liste-projet').append('</table>');
            },
            error: function () {
                alert("Erreur dans la récupération des données, contactez l'administrateur.");
            }
        });
    });

});