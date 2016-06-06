$(document).ready(function(){

    $('#aen_submit').on('click', function(event){
        event.preventDefault();
        var str = $('#form').serialize();
        $.ajax({
            type: 'POST',
            url: 'http://localhost/gbp-API/public/ajax/postEnsemble',
            data: str,
            success: function (json) {
                alert('L\'ensemble a bien été ajouté.')
                // location.reload()
            },
            error: function () {
                alert('Erreur dans la transmission des données, veuillez réesayer.')
            }
        });
    });

});