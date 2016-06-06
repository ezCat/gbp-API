<div id="modal-ensemble">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-ensemble">
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>

    <div class="modal-content dark">
        <h2>Ajouter un ensemble</h2>
        {{Form::open(array('url'=>'#', 'method'=>'POST', 'id'=>'form'))}}

        Ensemble :
        {{Form::text('en_libelle', null, ["class" => "form-control"])}}

        Budget affecté aux heures :<br><br>
        <table width="100%">
            <tr>
                <th>CDP</th>
                <th>TEC</th>
                <th>MET</th>
                <th>MAINT</th>
                <th>OPE</th>
                <th>DIV</th>
            </tr>
            <tr>
                <td>{{Form::text('be_val_1', null, ["class" => "form-control width-text", "placeholder" => "0", 'be_attr_1' => '1'])}}</td>
                <td>{{Form::text('be_val_2', null, ["class" => "form-control width-text", "placeholder" => "0", 'be_attr_2' => '2'])}}</td>
                <td>{{Form::text('be_val_3', null, ["class" => "form-control width-text", "placeholder" => "0", 'be_attr_3' => '3'])}}</td>
                <td>{{Form::text('be_val_4', null, ["class" => "form-control width-text", "placeholder" => "0", 'be_attr_4' => '4'])}}</td>
                <td>{{Form::text('be_val_5', null, ["class" => "form-control width-text", "placeholder" => "0", 'be_attr_5' => '5'])}}</td>
                <td>{{Form::text('be_val_6', null, ["class" => "form-control width-text", "placeholder" => "0", 'be_attr_6' => '6'])}}</td>
            </tr>
        </table>

        Budget affecté aux commandes :
        {{Form::text('en_budget_commande', null, ["class" => "form-control", "placeholder" => "Exemple : 1280"])}}

        Commentaires :
        {{Form::textarea('en_commentaire', null, ["class" => "form-control"])}}

        <button style="float: right" id="aen_submit" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Ajouter
        </button>

        {{Form::close()}}


    </div>
</div>