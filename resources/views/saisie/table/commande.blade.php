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
                <th style="width: 5%; text-align: center"><i
                            class="fa fa-exclamation-triangle"></i></th>
                <th style="width: 17%">Ensemble</th>
                <th style="width: 13%">Fournisseur</th>
                <th style="width: 30%">Descriptif de la commande</th>
                <th style="width: 10%">N° du bon de commande</th>
                <th style="width: 10%">Date de la commande</th>
                <th style="width: 10%">Montant</th>
                <th style="width: 2%">Défaut qualité</th>
                <th style="width: 2%">Retard livraison</th>
                <th style="width: 10%; text-align: center">Supprimer</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td style="padding: 25px 0 0 0; text-align: center;">
                    <i class="fa fa-cog" style="color: red" title="Qualité non conforme"></i>
                </td>
                <td>{{Form::text('', 'Colisage', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'BABCOCK', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'Commande d\'un coffret', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'S0160312455', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '07/12/2016', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '1200,52 €', ["class" => "form-tab width-input-text"])}}</td>
                <td class="check-tab"><input type="checkbox" name="c_insatisfaction_livraison"
                                             value="1" checked></td>
                <td class="check-tab"><input type="checkbox" name="c_insatisfaction_qualite"
                                             value="1"></td>
                <td style="padding-top: 15px" class="supprimer-click"><i
                            class="fa fa-close fa-2x"></i></td>
            </tr>
            <tr>
                <td style="padding: 25px 0 0 0; text-align: center;">
                    <i class="fa fa-clock-o" style="color: red" title="Retard livraison"></i>
                    <i class="fa fa-cog" style="color: red" title="Qualité non conforme"></i>
                </td>
                <td>{{Form::text('', 'Qualification', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'CARREFOUR', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'Pièces pour barres TO', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', 'S0160312412', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '23/12/2016', ["class" => "form-tab width-input-text"])}}</td>
                <td>{{Form::text('', '4502,99 €', ["class" => "form-tab width-input-text"])}}</td>
                <td class="check-tab"><input type="checkbox" name="c_insatisfaction_livraison"
                                             value="1" checked></td>
                <td class="check-tab"><input type="checkbox" name="c_insatisfaction_qualite"
                                             value="1" checked></td>
                <td style="padding-top: 15px" class="supprimer-click"><i
                            class="fa fa-close fa-2x"></i></td>
            </tr>
            </tbody>

        </table>
    </div>
</div>