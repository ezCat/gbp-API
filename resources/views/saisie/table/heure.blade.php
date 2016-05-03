<div class="tab-pane" id="Heure-r">
    <a href="#modal-heure" id="btn-heure">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green"
                title="Ajouter une entrée"><i class="fa fa-plus"></i></button>
    </a>

    <h2>Heures réalisées</h2>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" width="100%">
            <thead>
            <tr>
                <th style="width: 20%">Ensemble</th>
                <th style="width: 15%">Ressource</th>
                <th style="width: 20%">Tâche</th>
                <th style="width: 8%">Début</th>
                <th style="width: 8%">Fin</th>
                <th style="width: 5%">Durée effective</th>
                <th style="width: 5%; text-align: center">Supprimer</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>{{Form::text('', 'Documentation', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'MET', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'Création du document de qualification', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '05/12/2016', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '07/12/2016', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '5 h', ["class" => "form-tab width-input-text"])}}</td>
                <td style="padding-top: 15px" class="supprimer-click"><i
                            class="fa fa-close fa-2x"></i></td>
            </tr>
            <tr>
                <td>{{Form::text('', 'Qualification', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'CDP', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'Qualification du matériel', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '10/12/2016', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '23/12/2016', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '110 h', ["class" => "form-tab width-input-text"])}}</td>
                <td style="padding-top: 15px" class="supprimer-click"><i
                            class="fa fa-close fa-2x"></i></td>
            </tr>
            </tbody>

        </table>
    </div>
</div>