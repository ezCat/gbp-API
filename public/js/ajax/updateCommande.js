$(document).on('change', '.updatable-commande', function(){
		var field = $(this).closest("tr").attr("id");
        var id = field.match(/\d/g);
        id = id.join("");
		var attr = $(this).attr('name');
		var value = $(this).val();
		var data = "value=" + value +"&attr=" + attr +"&id=" + id;

		if (attr === "c_insatisfaction_livraison" || attr === "c_insatisfaction_qualite"){
			value = this.checked ? 1 : 0
		}

		if (attr === "c_insatisfaction_livraison"){
			var tr = $(this).closest('tr')
			tr.find('td:first').text(" ")
			tr.find('td:first').append('<i class="fa fa-truck" style="color: red" title="Livraison en retard"></i>')
		}
		if (attr === "c_insatisfaction_qualite"){
			var tr = $(this).closest('tr')
			tr.find('td:first').text(" ")
			tr.find('td:first').append('<i class="fa fa-cog" style="color: red" title="Qualité non conforme"></i>')
		}

		$.ajax({
			type: "POST",
			url: "http://localhost/gbp-API/public/ajax/updateCommande",
			data: {'id': id, "value": value, 'attr': attr},
			success: function(){
				//
			}
		 });

	});