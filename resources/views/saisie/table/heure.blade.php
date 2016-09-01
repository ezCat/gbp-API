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
                <th style="width: 20%; text-align: center; vertical-align: middle">Ensemble</th>
                <th style="width: 15%; text-align: center; vertical-align: middle">Ressource</th>
                <th style="width: 20%; text-align: center; vertical-align: middle">Tâche</th>
                <th style="width: 8%; text-align: center; vertical-align: middle">Début</th>
                <th style="width: 8%; text-align: center; vertical-align: middle">Fin</th>
                <th style="width: 5%; text-align: center; vertical-align: middle">Durée effective</th>
                <th style="width: 5%;; text-align: center; vertical-align: middle">Supprimer</th>
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
                        <td>{{Form::text('en_libelle', $heure->en_libelle, ["class" => "form-tab width-input-text", "disabled"])}}</td>
                        <td>{{Form::text('r_libelle', $heure->r_libelle, ["class" => "form-tab width-input-text", "disabled"])}}</td>
                        <td>{{Form::text('h_designation', $heure->h_designation, ["class" => "form-tab width-input-text updatable-heure"])}}</td>
                        <td>{{Form::date('h_date_debut', $heure->h_date_debut, ["class" => "form-tab width-input-text updatable-heure"])}}</td>
                        <td>{{Form::date('h_date_fin', $heure->h_date_fin, ["class" => "form-tab width-input-text updatable-heure"])}}</td>
                        <td>{{Form::text('h_duree_mission', $heure->h_duree_mission.' h', ["class" => "form-tab width-input-text updatable-heure"])}}</td>
                        <td style="padding-top: 15px" class="supprimer-click supprimer-click-heure"><i class="fa fa-close fa-2x"></i></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>