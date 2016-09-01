@extends('default')

@section('content')

<div id="page-wrapper" >
<div id="page-inner">

<input type="hidden" id="active_menu" value="unique">

<div  class="col-sm-12">
<h3>Tableau de bord : LHP N4</h3>
<hr/>
</div>

<!-- ALL MODAL -->

<!-- MODAL ETAT GLOBAL -->
<div id="modal-etat-global-unique">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-etat-global-unique"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Etat Global : Commandes<button class="btn-circle warning" style="float: right"><i class="fa fa-print fa-2x" style="color: white"></i></button></h2>
        <table class="table" style="width: 100%">
          <thead>
             <tr>
              <th>Ensemble</th>
              <th>Budget Prévisionnel</th>
              <th>Dépenses Réelles</th>
              <th>Delta</th>
            </tr> 
          </thead>

          <tbody>
            <tr>
              <td style="width: 28%">Qualification</td>
              <td style="width: 28%">14 000 €</td>
              <td style="width: 28%">15 550 €</td>
              <td style="width: 15%">+ 1 550 €</td>
            </tr> 
            <tr>
              <td>Colisage</td>
              <td>1600 €</td>
              <td>1600 €</td>
              <td>0 €</td>
            </tr> 
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><strong>+ 1 550 €</strong></td>
            </tr> 
          </tbody>
        </table>

        <h2>Etat Global : Heures</h2>
        <table class="table" style="width: 100%">
          <thead>
             <tr>
              <th>Ensemble</th>
              <th>Heures Prévisionnelles</th>
              <th>Heures Réelles</th>
              <th>Delta</th>
            </tr> 
          </thead>

          <tbody>
            <tr>
              <td style="width: 28%">Qualification</td>
              <td style="width: 28%">140 h</td>
              <td style="width: 28%">160 h</td>
              <td style="width: 15%">+ 20 h</td>
            </tr> 
            <tr>
              <td>Colisage</td>
              <td>15 h</td>
              <td>8 h</td>
              <td>- 7 h</td>
            </tr> 
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><strong>+ 13 h</strong></td>
            </tr> 
          </tbody>
        </table>

    </div>
</div>


<!-- MODAL HEURE RESSOURCE -->
<div id="modal-heure-ressource">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-heure-ressource"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Bilan des heures par ressource<button class="btn-circle warning" style="float: right"><i class="fa fa-print fa-2x" style="color: white"></i></button></h2>
        
        <div style="margin-left:20px; width: 100%;">
            <table id="heure-ressource-bu"></table>
            <div id="pager-hr"></div>
        </div>

    </div>
</div>


<!-- MODAL HEURE ENSEMBLE -->
<div id="modal-heure-ensemble">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-heure-ensemble"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Bilan des heures par ensemble<button class="btn-circle warning" style="float: right"><i class="fa fa-print fa-2x" style="color: white"></i></button></h2>
        
        <div style="margin-left:20px; width: 100%;">
            <table id="heure-ensemble-bu"></table>
            <div id="pager-he"></div>
        </div>

    </div>
</div>


<!-- MODAL COMMANDE ENSEMBLE -->
<div id="modal-commande-ensemble">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-commande-ensemble"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Bilan des commandes par ensemble<button class="btn-circle warning" style="float: right"><i class="fa fa-print fa-2x" style="color: white"></i></button></h2>
        
        <div style="margin-left:20px; width: 100%;">
            <table id="commande-ensemble-bu"></table>
            <div id="pager-ce"></div>
        </div>

    </div>
</div>


<!-- MODAL COMMANDE FOURNISSUER -->
<div id="modal-commande-fournisseur">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-commande-fournisseur"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Bilan des commandes par fournisseur<button class="btn-circle warning" style="float: right"><i class="fa fa-print fa-2x" style="color: white"></i></button></h2>
        
        <div style="margin-left:20px; width: 100%;">
            <table id="commande-fournisseur-bu"></table>
            <div id="pager-cf"></div>
        </div>

    </div>
</div>

<div class="row">

	<div class="col-sm-5">

		<h3>Informations générales sur le projet</h3>

		<br>

		<h4>Nom du projet : <b>LHP N4</b></h4>

		<br>

		<h4>Heures prévues : <b>160 h</b></h4>

		<h4>Heures réalisées : <b>124 h</b></h4>

		<br>

		<h4>Montant des commandes prévues : <b>12000 €</b></h4>

		<h4>Montant des commandes réalisées : <b>11000 €</b></h4>

	</div>
	<div class="col-sm-7">
		<div class="row" style="margin-top: 20px">
			
			<a href="#modal-etat-global-unique" id="btn-etat-global-unique"><div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel back-dash blue">
                       <i class="fa fa-area-chart fa-3x"></i><strong> &nbsp; ETAT GLOBAL</strong>
                     <p class="text-muted">Cliquez ici pour ouvrir l'état global permettant de comparer les budgets prévus et l'activité réalisée sur le projet.</p>
                </div>
            </div></a>
		</div>

		<div class="row">

			<a href="#modal-heure-ensemble" id="btn-heure-ensemble"><div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel back-dash light-orange">
                       <i class="fa fa-hourglass-half fa-3x"></i><strong> &nbsp; HEURES / ENSEMBLE</strong>
                     <p class="text-muted">Cliquez ici pour ouvrir le bilan des heures affectées en fonction des ensembles.</p>
                </div>
            </div></a>

			<a href="#modal-heure-ressource" id="btn-heure-ressource"><div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel back-dash dark-blue">
                       <i class="fa fa-hourglass-half fa-3x"></i><strong> &nbsp; HEURES / RESSOURCES</strong>
                     <p class="text-muted">Cliquez ici pour ouvrir le bilan des heures affectées en fonction des ressources.</p>
                </div>
            </div></a>

        </div>

        <div class="row">
			<a href="#modal-commande-fournisseur" id="btn-commande-fournisseur"><div class="col-md-6 col-sm-12 col-xs-12">
	            <div class="panel back-dash dark-blue">
	                   <i class="fa fa-archive fa-3x"></i><strong> &nbsp; COMMANDES / FOURNISSEUR</strong>
	                 <p class="text-muted">Cliquez ici pour ouvrir le bilan des commandes passées en fonction des ensembles.</p>
	            </div>
	        </div></a>

			<a href="#modal-commande-ensemble" id="btn-commande-ensemble"><div class="col-md-6 col-sm-12 col-xs-12">
	            <div class="panel back-dash light-orange">
	                   <i class="fa fa-archive fa-3x"></i><strong> &nbsp; COMMANDES / ENSEMBLE</strong>
	                 <p class="text-muted">Cliquez ici pour ouvrir le bilan des commandes passées en fonction des fournisseurs.</p>
	            </div>
	        </div></a>
        </div>
	</div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    $("#commande-ensemble-bu").jqGrid({
        url: 'http://localhost/gbp-API/public/ajax/getCommandeEnsembleBU',
        mtype: "GET",
        datatype: "json",
        colModel: [
            { label: 'Ensemble', name: 'en_libelle', key: true, width: 150 },
            { label: 'Fournisseur', name: 'f_libelle', width: 150 },
            { label: 'Désignation', name: 'c_designation', width: 150 },
            { label: 'Date commande', name: 'c_date_commande', width: 150 },
            { label: 'Montant (en €)', name: 'c_prix', width: 100, formatter: 'number', summaryTpl: "Sum: {0}", summaryType: "sum" }
        ],
        loadonce: true,
        width: null,
        height: 380,
        rowNum: 30,
        rowList:[20,30,50],
        sortname: 'OrderDate',
        pager: "#pager-ce",
        viewrecords: true,
        grouping: true,
        groupingView: {
            groupField: ["en_libelle"],
            groupColumnShow: [true],
            groupText: ["<b>{0}</b>"],
            groupOrder: ["asc"],
            groupSummary: [true],
            groupCollapse: false
            
        }
    });

    $("#commande-fournisseur-bu").jqGrid({
        url: 'http://localhost/gbp-API/public/ajax/getCommandeFournisseurBU',
        mtype: "GET",
        datatype: "json",
        colModel: [
            { label: 'Fournisseur', name: 'f_libelle', width: 150 },
            { label: 'Ensemble', name: 'en_libelle', key: true, width: 150 },
            { label: 'Désignation', name: 'c_designation', width: 150 },
            { label: 'Date commande', name: 'c_date_commande', width: 150 },
            { label: 'Montant (en €)', name: 'c_prix', width: 100, formatter: 'number', summaryTpl: "Sum: {0}", summaryType: "sum" }
        ],
        loadonce: true,
        width: null,
        height: 380,
        rowNum: 30,
        rowList:[20,30,50],
        sortname: 'OrderDate',
        pager: "#pager-cf",
        viewrecords: true,
        grouping: true,
        groupingView: {
            groupField: ["f_libelle"],
            groupColumnShow: [true],
            groupText: ["<b>{0}</b>"],
            groupOrder: ["asc"],
            groupSummary: [true],
            groupCollapse: false
            
        }
    });

    $("#heure-ensemble-bu").jqGrid({
        url: 'http://localhost/gbp-API/public/ajax/getHeureEnsembleBU',
        mtype: "GET",
        datatype: "json",
        colModel: [
            { label: 'Ensemble', name: 'en_libelle', key: true, width: 150 },
            { label: 'Ressource', name: 'r_libelle', width: 150 },
            { label: 'Date début', name: 'h_date_debut', width: 150 },
            { label: 'Date fin', name: 'h_date_fin', width: 150 },
            { label: 'Durée effective (en h)', name: 'h_duree_mission', width: 100, formatter: 'number', summaryTpl: "Sum: {0}", summaryType: "sum" }
        ],
        loadonce: true,
        width: null,
        height: 380,
        rowNum: 30,
        rowList:[20,30,50],
        sortname: 'OrderDate',
        pager: "#pager-he",
        viewrecords: true,
        grouping: true,
        groupingView: {
            groupField: ["en_libelle"],
            groupColumnShow: [true],
            groupText: ["<b>{0}</b>"],
            groupOrder: ["asc"],
            groupSummary: [true],
            groupCollapse: false
            
        }
    });

    $("#heure-ressource-bu").jqGrid({
        url: 'http://localhost/gbp-API/public/ajax/getHeureRessourceBU',
        mtype: "GET",
        datatype: "json",
        colModel: [
            { label: 'Ressource', name: 'r_libelle', width: 150 },
            { label: 'Ensemble', name: 'en_libelle', key: true, width: 150 },
            { label: 'Date début', name: 'h_date_debut', width: 150 },
            { label: 'Date fin', name: 'h_date_fin', width: 150 },
            { label: 'Durée effective (en h)', name: 'h_duree_mission', width: 100, formatter: 'number', summaryTpl: "Sum: {0}", summaryType: "sum" }
        ],
        loadonce: true,
        width: null,
        height: 380,
        rowNum: 30,
        rowList:[20,30,50],
        sortname: 'OrderDate',
        pager: "#pager-hr",
        viewrecords: true,
        grouping: true,
        groupingView: {
            groupField: ["r_libelle"],
            groupColumnShow: [true],
            groupText: ["<b>{0}</b>"],
            groupOrder: ["asc"],
            groupSummary: [true],
            groupCollapse: false
            
        }
    });

  });
</script>

@endsection