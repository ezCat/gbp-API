$(document).ready(function(){

    $('#af_submit').on('click', function(event){
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/postFournisseur',
            data: {'libelle': $('input[name=libelle]').val()},
            dataType: 'json',
            success: function (json) {
                alert('Le fournisseur ' + json + ' a bien été ajouté.')
                location.reload();
            },
            error: function () {
                alert('Erreur dans la transmission des données, veuillez réesayer.')
            }
        });
    });

});