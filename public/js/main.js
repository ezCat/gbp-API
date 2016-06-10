$( document ).ready(function() {

	// MODAL SUR FORM DE SAISIE
  $("#btn-ensemble").animatedModal({
  		modalTarget: 'modal-ensemble',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
	$("#btn-heure").animatedModal({
		modalTarget: 'modal-heure',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
	$("#btn-commande").animatedModal({
  		modalTarget: 'modal-commande',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
	$("#btn-ressource").animatedModal({
  		modalTarget: 'modal-ressource',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
	$("#btn-fournisseur").animatedModal({
  		modalTarget: 'modal-fournisseur',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
  $("#btn-affaire").animatedModal({
      modalTarget: 'modal-affaire',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });

	// MODAL BILAN GENERAL
  $("#btn-etat-global-general").animatedModal({
      modalTarget: 'modal-etat-global-general',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
  $("#btn-liste-affaire").animatedModal({
      modalTarget: 'modal-liste-affaire',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
  $("#btn-bilan-commande").animatedModal({
      modalTarget: 'modal-bilan-commande',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
  $("#btn-bilan-heure").animatedModal({
      modalTarget: 'modal-bilan-heure',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });

	// MODAL BILAN UNIQUE
  $("#btn-etat-global-unique").animatedModal({
      modalTarget: 'modal-etat-global-unique',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
  $("#btn-heure-ensemble").animatedModal({
      modalTarget: 'modal-heure-ensemble',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
  $("#btn-heure-ressource").animatedModal({
      modalTarget: 'modal-heure-ressource',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
  $("#btn-commande-fournisseur").animatedModal({
      modalTarget: 'modal-commande-fournisseur',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });
  $("#btn-commande-ensemble").animatedModal({
      modalTarget: 'modal-commande-ensemble',
        animatedIn:'zoomIn',
        animatedOut:'zoomOut',
        color:'#ecf0f1'
  });

  $('.close-modal').on('click', function(e){
    e.preventDefault();
    location.reload();
  })

  $.ajax({
    type: 'GET',
    url: 'http://localhost/gbp-API/public/ajax/getStatutProjet',
    data: {'id_projet': $('#btn-id-projet').attr('data-id')},
  })
    .success(function(json) {
      $('#change-statut-projet option[value="' + json + '"]').prop('selected', true);
  })

});