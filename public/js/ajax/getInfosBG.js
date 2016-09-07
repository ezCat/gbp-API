$(document).ready(function(){
    var year = $('#select_date').val()

    $.ajax({
        type: 'GET',
        url: 'http://localhost/gbp-API/public/ajax/getSumUpBG',
        data: {year: year},
        success: function (data) {
            $('#nbProjetSolde').text(data['nbProjetSolde'])
            $('#nbProjetEnCours').text(data['nbProjetEnCours'])
            $('#heure_prev').text(data['heure_prev'])
            $('#comm_prev').text(data['comm_prev'])
            $('#comm_reel').text(data['comm_reel'])
            $('#heure_reel').text(data['heure_reel'])
            console.log(data)
        },
        error: function () {
            alert("Not GOOD")
        }
    });

    $('#select_date').on('change', function(){
        var year = $('#select_date').val()

        $.ajax({
            type: 'GET',
            url: 'http://localhost/gbp-API/public/ajax/getSumUpBG',
            data: {year: year},
            success: function (data) {
                $('#nbProjetSolde').text(data['nbProjetSolde'])
                $('#nbProjetEnCours').text(data['nbProjetEnCours'])
                $('#heure_prev').text(data['heure_prev'])
                $('#comm_prev').text(data['comm_prev'])
                $('#comm_reel').text(data['comm_reel'])
                $('#heure_reel').text(data['heure_reel'])
                console.log(data)
            },
            error: function () {
                alert("Not GOOD")
            }
        });
    })

});