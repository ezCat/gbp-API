<div id="modal-fournisseur">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-fournisseur">
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>

    <div class="modal-content dark">
        <h2>Ajouter un Fournisseur</h2>
        {{Form::open(array('url'=>'#', 'method'=>'POST', 'id'=>'form_fournisseur'))}}

        Fournisseur :
        {{Form::text('libelle', null, ["class" => "form-control"])}}

        <button style="float: right" class="btn btn-validate" id="af_submit"><i class="fa fa-arrow-right"></i> Ajouter
        </button>

        {{Form::close()}}
    </div>
</div>