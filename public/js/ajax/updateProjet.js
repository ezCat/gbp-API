$(document).on('change', '.updatable-projet', function(){
        var id = $(this).closest("tr").attr("id");
		var attr = $(this).attr('name');
		var value = $(this).val();
		var data = "value=" + value +"&attr=" + attr +"&id=" + id;

		$.ajax({
			type: "POST",
			url: "http://localhost/gbp-API/public/ajax/updateProjet",
			data: {'id': id, "value": value, 'attr': attr},
			success: function(){
				console.log("ok");
			}
		 });
	});