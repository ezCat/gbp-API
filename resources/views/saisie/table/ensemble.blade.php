<!-- AJOUT ENSEMBLE -->
<div class="tab-pane active" id="Ensemble-r">
    <a href="#modal-ensemble" id="btn-ensemble">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green"
                title="Ajouter une entrée"><i class="fa fa-plus"></i></button>
    </a>

    <div class="row">
            <h2>Ensembles existants</h2>
            <h3>Total budget horaire : <b>572 h</b></h3>
            <h3>Total budget comamnde : <b>10000 €</b></h3>
    </div>

    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" width="100%">
            <thead>
            <tr>
                <th style="width: 20%">Ensemble</th>
                <th style="width: 10%">Budget commande</th>
                <th style="width: 5%">CDP</th>
                <th style="width: 5%">TEC</th>
                <th style="width: 5%">MET</th>
                <th style="width: 5%">MAINT</th>
                <th style="width: 5%">OPE</th>
                <th style="width: 5%">DIV</th>
                <th style="width: 20%">Commentaires</th>
                <th style="text-align: center; width: 5%">Supprimer</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>{{Form::text('', 'Documentation', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '120000 €', ["class" => "form-tab width-input-number"])}}</td>
                <td>{{Form::text('', '12 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '21 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '30 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '4 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '1 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '90 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', 'Aucun commentaire', ["class" => "form-tab width-input-text"])}}</td>
                <td style="padding-top: 15px" class="supprimer-click"><i
                            class="fa fa-close fa-2x"></i></td>
            </tr>
            <tr>
                <td>{{Form::text('', 'Qualification', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '400 €', ["class" => "form-tab width-input-number"])}}</td>
                <td>{{Form::text('', '100 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '10 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '5 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', '40 h', ["class" => "form-tab tab-number"])}}</td>
                <td>{{Form::text('', 'Attention aux heures de validation internes', ["class" => "form-tab width-input-text"])}}</td>
                <td style="padding-top: 15px" class="supprimer-click"><i
                            class="fa fa-close fa-2x"></i></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>