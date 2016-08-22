$(document).on('change', '.updatable-budgetheure', function(){
		var field = $(this).closest("tr").attr("id");
        var id_ensemble = field.match(/\d/g);
        id_ensemble = id_ensemble.join("");
        var id_ressource = $(this).attr('data-id_ressource');
		var value = $(this).val();
		var data = "value=" + value +"&id_ressource=" + id_ressource +"&id_ensemble=" + id_ensemble;

		console.log("budgetheure")

		$.ajax({
			type: "POST",
			url: "http://localhost/gbp-API/public/ajax/updateHeureBudget",
			data: {'id_ensemble': id_ensemble, 'id_ressource': id_ressource, "value": value},
			success: function(){
				
			}
		 });
	});