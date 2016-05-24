$(document).ready(function(){

    $('#aa_submit').on('click', function(event){
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'ajax/ajouterProjet',
            data: {'libelle': $('input[name=libelle]').val()},
            dataType: 'json',
            success: function (json) {
                $('#for_alert').html('<div class="alert alert-success"><i class="fa fa-check-circle"></i> Le projet ' + json + ' a bien été ajouté</div>')
            },
            error: function (json) {
                $('#for_alert').html('<div class="alert alert-danger"><i class="fa fa-warning"></i> Le projet ' + json + ' n\'a pas pu être ajouté</div>')
            }
        });
    });

});