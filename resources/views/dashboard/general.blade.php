@extends('default')

@section('content')

<div id="page-wrapper">
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
        <table class="table" style="width: 100%; text-align: center">
          <thead>
             <tr>
              <th style="text-align: center">Nom du projet</th>
              <th style="text-align: center">Budget Prévisionnel</th>
              <th style="text-align: center">Dépenses Réelles</th>
              <th style="text-align: center">Delta</th>
            </tr> 
          </thead>

          <tbody>

            @foreach($etat_global_commandes as $result)

              <tr>
                <td style="width: 28%">{{$result->p_libelle}}</td>
                <td style="width: 28%">{{$result->budget}} €</td>
                <td style="width: 28%">{{$result->reel}} €</td>
                
                @if($result->diff > 0)
                  <td style="width: 15%; color: green"><b class="sum_commande">{{$result->diff}}</b> €</td>
                @else
                  <td style="width: 15%; color: red"><b class="sum_commande">{{$result->diff}}</b> €</td>
                @endif

              </tr>
            @endforeach

            <tr>
              <td></td>
              <td></td>
              <td style="text-align: right">Total : </td>
              <td style="font-size: 20px"><b><span id="total_commande_eg"></span></b></td>
            </tr>

          </tbody>
        </table>

        <h2>Etat Global : Heures</h2>
        <table class="table" style="width: 100%; text-align: center">
          <thead>
             <tr>
              <th style="text-align: center">Nom du projet</th>
              <th style="text-align: center">Heures Prévisionnelles</th>
              <th style="text-align: center">Heures Réelles</th>
              <th style="text-align: center">Delta</th>
            </tr> 
          </thead>

          <tbody>

            @foreach($etat_global_heures as $result)

              <tr>
                  <td style="width: 28%">{{$result->p_libelle}}</td>
                  <td style="width: 28%">{{$result->budget}} h</td>
                  <td style="width: 28%">{{$result->reel}} h</td>
                  @if($result->diff > 0)
                    <td style="width: 15%; color: green"><b class="sum_heure">{{$result->diff}}</b> h</td>
                  @else
                    <td style="width: 15%; color: red"><b class="sum_heure">{{$result->diff}}</b> h</td>
                  @endif
              </tr>
            @endforeach

            <tr>
              <td></td>
              <td></td>
              <td style="text-align: right">Total : </td>
              <td style="font-size: 20px"><b><span id="total_heure_eg"></span></b></td>
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
</div>
<hr/>

<div class="row">

	<div class="col-sm-5">

		<h3>Informations générales sur la base projet</h3>

    <hr>

    <div class="row">
      <div class="col-sm-5">
        <h4>Sélectionner une année :</h4>
      </div>
      <div class="col-sm-2">
        <select id="select_date" class="form-control" style="margin-top: 3px;">
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
          <option>2024</option>
          <option>2025</option>
          <option>2026</option>
        </select>
      </div>
    </div>

    <hr>

    <br>

		<h4>Nombre de projet soldés : <b><span id="nbProjetSolde"></span></b></h4>
		<h4>Nombre de projet en cours : <b><span id="nbProjetEnCours"></span></b></h4>

		<br>

		<h4>Heures prévues totales : <b><span id="heure_prev"></span> h</b></h4>
		<h4>Heures réalisées totales : <b><span id="heure_reel"></span> h</b></h4>

		<br>

		<h4>Total des commandes prévues : <b><span id="comm_prev"></span> €</b></h4>
		<h4>Total des commandes réalisées : <b><span id="comm_reel"></span> €</b></h4>

	</div>
	<div class="col-sm-7">
		<div class="row" style="margin-top: 20px">
			
			<a href="#modal-liste-affaire" id="btn-liste-affaire"><div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel back-dash light-orange">
                       <i class="fa fa-file-text-o fa-3x"></i><strong> &nbsp; LISTE AFFAIRE</strong>
                     <p class="text-muted">Cliquez ici pour ouvrir la liste des projets en cours ou soldés. Cette liste reprend plusieurs informations générales sur les différents projets.</p>
                </div>
            </div>
      </a>

			<a href="#modal-etat-global-general" id="btn-etat-global-general"><div class="col-md-6 col-sm-12 col-xs-12">
          <div class="panel back-dash blue">
                     <i class="fa fa-bar-chart fa-3x"></i><strong> &nbsp; ETAT GLOBAL</strong>
                   <p class="text-muted">Cliquez ici pour ouvrir l'état global concernant l'ensemble des projets existants. Cet état reprend les budgets commandes et horaires. </p>
              </div>
          </div>
      </a>

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
  $(document).ready(function () {
    var total_heure = 0

    $(".sum_heure").each(function() {
        total_heure += parseInt($(this).text(), 10)
    });

    $('#total_heure_eg').text(total_heure + ' h')
    if (total_heure > 0) {
      $('#total_heure_eg').css('color', 'green');
    }else{
      $('#total_heure_eg').css('color', 'red');
    }

    var total_commande = 0

    $(".sum_commande").each(function() {
        total_commande += parseInt($(this).text(), 10)
    });

    $('#total_commande_eg').text(total_commande + ' €')
    if (total_commande > 0) {
      $('#total_commande_eg').css('color', 'green');
    }else{
      $('#total_commande_eg').css('color', 'red');
    }
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

<script src="{{asset('/js/ajax/getInfosBG.js')}}"></script>

@endsection