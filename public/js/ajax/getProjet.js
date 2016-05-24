$(document).ready(function(){

    $('#btn-affaire').on('click', function(){
        $.ajax({
            type: 'POST',
            url: 'ajax/getListeProjet',
            dataType: 'json',
            success: function (json) {
                $.each(json, function(i, val) {
                    $.each(val, function(i, val) {
                        console.log(i + " : " + val);
                        //$("#" + i).append(document.createTextNode(" - " + val));
                    });
                });
            },
            error: function () {
                alert("Erreur dans la récupération des données, contactez l'adminsitrateur.");
            }
        });
    });

});

