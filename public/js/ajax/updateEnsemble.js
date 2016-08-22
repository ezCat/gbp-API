$(document).on('change', '.updatable-ensemble', function(){
		var field = $(this).closest("tr").attr("id");
        var id = field.match(/\d/g);
        id = id.join("");
		var attr = $(this).attr('name');
		var value = $(this).val();
		var data = "value=" + value +"&attr=" + attr +"&id=" + id;

		console.log("ensemble")

		$.ajax({
			type: "POST",
			url: "http://localhost/gbp-API/public/ajax/updateEnsemble",
			data: {'id': id, "value": value, 'attr': attr},
			success: function(){
				// 
			}
		 });
	});