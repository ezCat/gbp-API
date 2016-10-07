<div class="tab-pane" id="Commande-r">
    <a href="#modal-fournisseur" id="btn-fournisseur">
        <button style="float: right;" class="btn-circle btn-inverse"
                title="Ajouter un fournisseur"><i class="fa fa-plus"></i> <i
                    class="fa fa-truck"></i></button>
    </a>
    <a href="#modal-commande" id="btn-commande">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green"
                title="Ajouter une entrée"><i class="fa fa-plus"></i></button>
    </a>
    <h2>Commandes existantes</h2>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th style="width: 5%; text-align: center; vertical-align: middle"><i class="fa fa-exclamation-triangle"></i></th>
                <th style="width: 17%; text-align: center; vertical-align: middle">Ensemble</th>
                <th style="width: 13%; text-align: center; vertical-align: middle">Fournisseur</th>
                <th style="width: 30%; text-align: center; vertical-align: middle">Descriptif de la commande</th>
                <th style="width: 20%; text-align: center; vertical-align: middle">N° du bon de commande</th>
                <th style="width: 10%; text-align: center; vertical-align: middle">Date de la commande</th>
                <th style="width: 10%; text-align: center; vertical-align: middle">Montant</th>
                <th style="width: 2%; text-align: center; vertical-align: middle">Défaut qualité</th>
                <th style="width: 2%; text-align: center; vertical-align: middle">Retard livraison</th>
                <th style="width: 5%; text-align: center; vertical-align: middle">Supprimer</th>
            </tr>
            </thead>

            <tbody>

                @if (empty($table_commande))
                    <tr>
                    <td colspan="10">Aucune entrée</td>
                    </tr>
                @endif

                @foreach($table_commande as $cmd)
                    <tr id="commande-id-{{ $cmd->id }}" data-id="{{ $cmd->id }}">
                        <td style="padding: 25px 0 0 0; text-align: center;">
                            @if ($cmd->c_insatisfaction_livraison == 1)
                                <i class="fa fa-truck" style="color: red" title="Livraison en retard"></i>
                            @endif

                            @if ($cmd->c_insatisfaction_qualite == 1)
                                <i class="fa fa-cog " style="color: red" title="Qualité non conforme"></i>
                            @endif
                        </td>
                        <td>{{Form::text('en_libelle', $cmd->en_libelle, ["class" => "form-tab width-input-text", "disabled"])}}</td>
                        <td>{{Form::text('f_libelle', $cmd->f_libelle, ["class" => "form-tab width-input-text", "disabled"])}}</td>
                        <td>{{Form::text('c_designation', $cmd->c_designation, ["class" => "form-tab width-input-text updatable-commande"])}}</td>
                        <td>{{Form::text('c_numero_commande', $cmd->c_numero_commande, ["class" => "form-tab width-input-text updatable-commande"])}}</td>
                        <td>{{Form::date('c_date_commande', $cmd->c_date_commande, ["class" => "form-tab width-input-text updatable-commande"])}}</td>
                        <td>{{Form::text('c_prix', $cmd->c_prix.' €', ["class" => "form-tab width-input-text updatable-commande"])}}</td>
                        
                        @if ($cmd->c_insatisfaction_livraison == 1)
                            <td class="check-tab"><input type="checkbox" name="c_insatisfaction_livraison" class="updatable-commande" checked></td>
                        @else
                            <td class="check-tab"><input type="checkbox" name="c_insatisfaction_livraison" class="updatable-commande"></td>
                        @endif

                        @if ($cmd->c_insatisfaction_qualite == 1)
                            <td class="check-tab"><input type="checkbox" name="c_insatisfaction_qualite" class="updatable-commande" checked></td>
                        @else
                            <td class="check-tab"><input type="checkbox" name="c_insatisfaction_qualite" class="updatable-commande"></td>
                        @endif

                        <td style="padding-top: 15px" class="supprimer-click supprimer-click-commande"><i class="fa fa-close fa-2x"></i></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>