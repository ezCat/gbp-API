$(document).ready(function(){

    $('#aen_submit').on('click', function(event){
        event.preventDefault();
        var str = $('#form_ensemble').serialize();
        var id_projet = $('#btn-id-projet').attr('data-id');
        
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/postEnsemble',
            data: str + '&id_projet=' + id_projet,
            success: function (json) {
                alert('L\'ensemble a bien été ajouté.')
                location.reload()
            },
            error: function () {
                alert('Erreur dans la transmission des données, veuillez réesayer.')
            }
        });
    });

});