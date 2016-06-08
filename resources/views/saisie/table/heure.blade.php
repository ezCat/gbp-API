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
                @if (empty($table_heure))
                    <tr>
                    <td colspan="7">Aucune entrée</td>
                    </tr>
                @endif

                @foreach($table_heure as $heure)
                    <tr id="heure-id-{{ $heure->id }}">
                        <td>{{Form::text('en_libelle', $heure->en_libelle, ["class" => "form-tab width-input-text"])}}</td>
                        <td>{{Form::text('r_libelle', $heure->r_libelle, ["class" => "form-tab width-input-text"])}}</td>
                        <td>{{Form::text('h_designation', $heure->h_designation, ["class" => "form-tab width-input-text"])}}</td>
                        <td>{{Form::date('h_date_debut', $heure->h_date_debut, ["class" => "form-tab width-input-text"])}}</td>
                        <td>{{Form::date('h_date_fin', $heure->h_date_fin, ["class" => "form-tab width-input-text"])}}</td>
                        <td>{{Form::text('h_duree_mission', $heure->h_duree_mission, ["class" => "form-tab width-input-text"])}}</td>
                        <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>