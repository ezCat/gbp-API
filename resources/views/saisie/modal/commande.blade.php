<div id="modal-commande">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-commande">
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>

    <div class="modal-content dark">
        <h2>Ajouter une Commande</h2>
        {{Form::open()}}

        Ensemble :
        {{Form::select('c_id', $array_ensembles, null, ["class" => "form-control"])}}

        Fournisseur :
        {{Form::select('fk_id_fournisseur', $array_fournisseurs, null, ["class" => "form-control"])}}

        Descriptif de la commande :
        {{Form::text('c_designation', null, ["class" => "form-control"])}}

        Numéro du bon de commande :
        {{Form::text('c_numero_bon_commande', null, ["class" => "form-control", "placeholder" => "Exemple : SO160301255"])}}

        Date de la commande :
        {{Form::date('c_date_commande', null, ["class" => "form-control"])}}

        Montant de la commande :
        {{Form::text('c_prix', null, ["class" => "form-control", "placeholder" => "Exemple : 1280"])}}

        <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Ajouter
        </button>

        {{Form::close()}}
    </div>
</div>