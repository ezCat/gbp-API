@extends('default')

@section('content')

<div id="page-wrapper" >
<div id="page-inner">

<input type="hidden" id="active_menu" value="general">

<!-- ALL MODAL -->

<!-- MODAL LISTE AFFAIRE -->
<div id="modal-liste-affaire">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-liste-affaire"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Liste des projets existants<button class="btn-circle warning" style="float: right"><i class="fa fa-print fa-2x" style="color: white"></i></button></h2>

        <div style="margin-left:20px; width: 100%;">
            <table id="liste-affaire-bilan"></table>
            <div id="pager-lab"></div>
        </div>
    </div>
</div>

<!-- MODAL ETAT GLOBAL -->
<div id="modal-etat-global-general">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-etat-global-general"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Etat Global : Commandes<button class="btn-circle warning" style="float: right"><i class="fa fa-print fa-2x" style="color: white"></i></button></h2>
        <table class="table" style="width: 100%">
          <thead>
             <tr>
              <th>Nom du projet</th>
              <th>Budget Prévisionnel</th>
              <th>Dépenses Réelles</th>
              <th>Delta</th>
            </tr> 
          </thead>

          <tbody>
            <tr class="italic">
              <td style="width: 28%">LHP N4</td>
              <td style="width: 28%">14 000 €</td>
              <td style="width: 28%">15 550 €</td>
              <td style="width: 15%">+ 1 550 €</td>
            </tr> 
            <tr>
              <td>PROJET Z</td>
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
              <th>Nom du projet</th>
              <th>Heures Prévisionnelles</th>
              <th>Heures Réelles</th>
              <th>Delta</th>
            </tr> 
          </thead>

          <tbody>
            <tr class="italic">
              <td style="width: 28%">LHP N4</td>
              <td style="width: 28%">140 h</td>
              <td style="width: 28%">160 h</td>
              <td style="width: 15%">+ 20 h</td>
            </tr> 
            <tr>
              <td>PROJET Z</td>
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


<!-- MODAL BILAN COMMANDE -->
<div id="modal-bilan-commande">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-bilan-commande"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Bilan des commandes par fournisseur<button class="btn-circle warning" style="float: right"><i class="fa fa-print fa-2x" style="color: white"></i></button></h2>
        
        <div style="margin-left:20px; width: 100%;">
            <table id="commande-bilan"></table>
            <div id="pager-comb"></div>
        </div>

    </div>
</div>


<!-- MODAL BILAN HEURES -->
<div id="modal-bilan-heure">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-bilan-heure"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Bilan des heures par ressource<button class="btn-circle warning" style="float: right"><i class="fa fa-print fa-2x" style="color: white"></i></button></h2>

            <table id="heure-bilan"></table>
            <div id="pager-heub"></div>

    </div>
</div>

<div class="row">
<div class="col-sm-7">
  <h3>Tableau de bord : Tous Projets</h3>
</div>

{{-- <div class="col-sm-5" style="text-align: right">
  Choisir l'état des projets :
  <select class="form-control" style="display: inline-block; width: auto;">
    <option>Tous projets</option>
    <option>Projets soldés</option>
    <option>Projets en cours</option>
  </select>
</div> --}}
</div>
<hr/>

<div class="row">

	<div class="col-sm-5">

		<h3>Informations générales sur la base projet</h3>

		<br>

		<h4>Nombre de projet soldés: <b>14</b></h4>

		<h4>Nombre de projet en cours: <b>7</b></h4>

		<br>

		<h4>Heures prévues totales : <b>16150 h</b></h4>

		<h4>Heures réalisées totales: <b>12544 h</b></h4>

		<br>

		<h4>Total des commandes prévues: <b>1212000 €</b></h4>

		<h4>Total des commandes réalisées : <b>1145000 €</b></h4>

	</div>
	<div class="col-sm-7">
		<div class="row" style="margin-top: 20px">
			
			<a href="#modal-liste-affaire" id="btn-liste-affaire"><div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel back-dash light-orange">
                       <i class="fa fa-file-text-o fa-3x"></i><strong> &nbsp; LISTE AFFAIRE</strong>
                     <p class="text-muted">Cliquez ici pour ouvrir la liste des projets en cours ou soldés. Cette liste reprend plusieurs informations générales sur les différents projets.</p>
                </div>
            </div></a>

			<a href="#modal-etat-global-general" id="btn-etat-global-general"><div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel back-dash blue">
                       <i class="fa fa-bar-chart fa-3x"></i><strong> &nbsp; ETAT GLOBAL</strong>
                     <p class="text-muted">Cliquez ici pour ouvrir l'état global concernant l'ensemble des projets existants. Cet état reprend les budgets commandes et horaires. </p>
                </div>
            </div></a>

		</div>

		<div class="row">

			<a href="#modal-bilan-commande" id="btn-bilan-commande"><div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel back-dash blue">
                       <i class="fa fa-euro fa-3x"></i><strong> &nbsp; BILAN COMMANDES</strong>
                     <p class="text-muted">Cliquez ici pour ouvrir le bilan général concernant les commandes affectées aux fournisseurs. Les filtres peuvent vous guider.</p>
                </div>
            </div></a>

			<a href="#modal-bilan-heure" id="btn-bilan-heure"><div class="col-md-6 col-sm-12 col-xs-12">
                <div class="panel back-dash light-orange">
                       <i class="fa fa-clock-o fa-3x"></i><strong> &nbsp; BILAN HEURES</strong>
                     <p class="text-muted">Cliquez ici pour ouvrir le bilan général concernant les heures affectées aux ressources internes. Les filtres peuvent vous guider.</p>
                </div>
            </div></a>

		</div>
	</div>
</div>

<script type="text/javascript">
  $(function(){
    function tally (selector) {
      $(selector).each(function () {
        var total = 0,
          column = $(this).siblings(selector).andSelf().index(this);
        $(this).parents().prevUntil(':has(' + selector + ')').each(function () {
          total += parseFloat($('td.sum:eq(' + column + ')', this).html()) || 0;
        })
        $(this).html(total);
      });
    }
    tally('td.subtotal');
    tally('td.total');
  });
</script>

{{-- Liste affaire tableau --}}

<script type="text/javascript">
    $(document).ready(function () {
        $("#liste-affaire-bilan").jqGrid({
            url: 'http://localhost/gbp-API/public/ajax/getListeProjetBilan',
            mtype: "GET",
            styleUI : 'Bootstrap',
            datatype: "json",
            colModel: [
                { label: 'Nom du projet', name: 'p_libelle', key: true, width: 250 },
                { label: 'Chef de projet', name: 'nom', width: 150 },
                { label: 'Commentaire', name: 'p_commentaire', width: 200 },
                { label: 'Etat', name: 'et_libelle', width: 50 }
            ],
            viewrecords: true,
            height: 380,
            width: null,
            rowNum: 40,
            pager: "#pager-lab"
        });
    });
</script>

{{-- Bilan commande tableau --}}

<script type="text/javascript">
    $(document).ready(function () {
        $("#commande-bilan").jqGrid({
            url: 'http://localhost/gbp-API/public/ajax/getCommandeBilan',
            mtype: "GET",
            datatype: "json",
            colModel: [
                { label: 'Fournisseur', name: 'f_libelle', key: true, width: 150 },
                { label: 'Projet', name: 'p_libelle', width: 150 },
                { label: 'Total (en €)', name: 'total_prix', width: 100, formatter: 'number', summaryTpl: "Sum: {0}", summaryType: "sum" }
            ],
            loadonce: true,
            width: null,
            height: 380,
            rowNum: 30,
            rowList:[20,30,50],
            sortname: 'OrderDate',
            pager: "#pager-comb",
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
    });
</script>

{{-- Bilan heure tableau --}}

<script type="text/javascript">
    $(document).ready(function () {
            $("#heure-bilan").jqGrid({
                url: 'http://localhost/gbp-API/public/ajax/getHeureBilan',
                mtype: "GET",
                datatype: "json",
                colModel: [
                    { label: 'Ressource', name: 'r_libelle', key: true, width: 150 },
                    { label: 'Projet', name: 'p_libelle', width: 150 },
                    { label: 'Total (en h)', name: 'total_heure', width: 100, formatter: 'number', summaryTpl: "Sum: {0}", summaryType: "sum" }
                ],
                loadonce: true,
                width: null,
                height: 380,
                rowNum: 30,
                rowList:[20,30,50],
                sortname: 'OrderDate',
                pager: "#pager-heub",
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