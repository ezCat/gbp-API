$(document).on('change', '.updatable-heure', function(){
		var field = $(this).closest("tr").attr("id");
        var id = field.match(/\d/g);
        id = id.join("");
		var attr = $(this).attr('name');
		var value = $(this).val();
		var data = "value=" + value +"&attr=" + attr +"&id=" + id;

		$.ajax({
			type: "POST",
			url: "http://localhost/gbp-API/public/ajax/updateHeure",
			data: {'id': id, "value": value, 'attr': attr},
			success: function(){
				// 
			}
		 });
	});