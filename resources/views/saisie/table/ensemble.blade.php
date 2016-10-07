<!-- AJOUT ENSEMBLE -->
<div class="tab-pane active" id="Ensemble-r">
    <a href="#modal-ensemble" id="btn-ensemble">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green"
                title="Ajouter une entrée"><i class="fa fa-plus"></i></button>
    </a>

    <div class="row">
            <h2>Ensembles existants</h2>
            <h4>Total budget horaires : <b><span id="sum-heure"></span> H</b></h4>
            <h4>Total budget commandes : <b><span id="sum-cmd"></span> €</b></h4>
    </div>

    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" width="100%">
            <thead>
            <tr>
                <th style="width: 20%; text-align: center; vertical-align: middle" rowspan="2">Ensemble</th>
                <th style="width: 10%; text-align: center;; vertical-align: middle" rowspan="2">Budget planifié</th>
                <th colspan="6" style="text-align: center;">Heures planifiées</th>
                <th style="width: 20%; text-align: center;; vertical-align: middle" rowspan="2">Commentaires</th>
                <th style="text-align: center; width: 5%; vertical-align: middle" rowspan="2">Supprimer</th>
            </tr>
            <tr>
                <th style="width: 5%">CDP</th>
                <th style="width: 5%">TEC</th>
                <th style="width: 5%">MET</th>
                <th style="width: 5%">MAINT</th>
                <th style="width: 5%">OPE</th>
                <th style="width: 5%">DIV</th>
            </tr>
            </thead>

            <tbody>
                @if (empty($table_ensemble))
                    <tr>
                        <td colspan="11">Aucune entrée</td>
                    </tr>
                @endif

                @foreach($table_ensemble as $yop)
                    <tr id="ensemble-id-{{ $yop['id'] }}" data-id="{{ $yop['id'] }}">
                        <td>{{Form::text('en_libelle', $yop['en_libelle'], ["class" => "form-tab width-input-text updatable-ensemble"])}}</td>
                        <td>{{Form::text('en_budget_commande', $yop['en_budget_commande'].' €', ["class" => "form-tab width-input-number sum-ensemble-cmd updatable-ensemble"])}}</td>

                        <td>{{Form::text('be_val_1', $yop['1'].' h', ["class" => "form-tab tab-number sum-ensemble-heure updatable-budgetheure", "data-id_ressource" => '1'])}}</td>
                        <td>{{Form::text('be_val_2', $yop['2'].' h', ["class" => "form-tab tab-number sum-ensemble-heure updatable-budgetheure", "data-id_ressource" => '2'])}}</td>
                        <td>{{Form::text('be_val_3', $yop['3'].' h', ["class" => "form-tab tab-number sum-ensemble-heure updatable-budgetheure", "data-id_ressource" => '3'])}}</td>
                        <td>{{Form::text('be_val_4', $yop['4'].' h', ["class" => "form-tab tab-number sum-ensemble-heure updatable-budgetheure", "data-id_ressource" => '4'])}}</td>
                        <td>{{Form::text('be_val_5', $yop['5'].' h', ["class" => "form-tab tab-number sum-ensemble-heure updatable-budgetheure", "data-id_ressource" => '5'])}}</td>
                        <td>{{Form::text('be_val_6', $yop['6'].' h', ["class" => "form-tab tab-number sum-ensemble-heure updatable-budgetheure", "data-id_ressource" => '6'])}}</td>


                        <!-- <td><input type="text" class="form-tab tab-number total-budget-heure" value="0 h"></td> -->
                        <td>{{Form::text('en_commentaire', $yop['en_commentaire'], ["class" => "form-tab width-input-text updatable-ensemble"])}}</td>
                        <td style="padding-top: 15px" class="supprimer-click supprimer-click-ensemble"><i class="fa fa-close fa-2x"></i></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>