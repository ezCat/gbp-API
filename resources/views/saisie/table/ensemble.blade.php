<!-- AJOUT ENSEMBLE -->
<div class="tab-pane active" id="Ensemble-r">
    <a href="#modal-ensemble" id="btn-ensemble">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green"
                title="Ajouter une entrée"><i class="fa fa-plus"></i></button>
    </a>

    <div class="row">
            <h2>Ensembles existants</h2>
            <h4>Total budget horaires : <b>572 h</b></h4>
            <h4>Total budget comamndes : <b>10000 €</b></h4>
    </div>

    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" width="100%">
            <thead>
            <tr>
                <th colspan="2"></th>
                <th colspan="7">Budget horaires</th>
                <th colspan="2"></th>
            </tr>
            <tr>
                <th style="width: 20%">Ensemble</th>
                <th style="width: 10%">Budget commandes</th>
                <th style="width: 5%">CDP</th>
                <th style="width: 5%">TEC</th>
                <th style="width: 5%">MET</th>
                <th style="width: 5%">MAINT</th>
                <th style="width: 5%">OPE</th>
                <th style="width: 5%">DIV</th>
                <th style="width: 5%">Total</th>
                <th style="width: 20%">Commentaires</th>
                <th style="text-align: center; width: 5%">Supprimer</th>
            </tr>
            </thead>

            <tbody>
                @if (empty($table_ensemble))
                    <tr>
                    <td colspan="11">Aucune entrée</td>
                    </tr>
                @endif

                @foreach($table_ensemble as $ens)
                    <tr>
                        <td>{{Form::text('en_libelle', $ens->en_libelle, ["class" => "form-tab width-input-text"])}}</td>
                        <td>{{Form::text('en_budget_commande', $ens->en_budget_commande, ["class" => "form-tab width-input-number"])}}</td>
                        <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
                        <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
                        <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
                        <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
                        <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
                        <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
                        <td><input type="text" class="form-tab tab-number total-budget-heure" value="0 h"></td>
                        <td>{{Form::text('en_commentaire', $ens->en_commentaire, ["class" => "form-tab width-input-text"])}}</td>
                        <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>