<div id="modal-affaire">
    <!-- THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
    <div  id="btn-close-modal" class="close-modal-affaire">
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>

    <div class="modal-content dark">
        <h2>Projets existants</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Nom du projet</th>
                <th>Etat du projet</th>
                <th>Commentaires</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>{{Form::text('', 'LHP N4', ["class" => "form-tab"])}}</td>
                <td>{{Form::text('', 'Soldé', ["class" => "form-tab"])}}</td>
                <td>{{Form::text('', 'Commentaires...', ["class" => "form-tab"])}}</td>
            </tr>
            <tr>
                <td>{{Form::text('', 'ITV PE SUP 1400', ["class" => "form-tab"])}}</td>
                <td>{{Form::text('', 'En cours', ["class" => "form-tab"])}}</td>
                <td>{{Form::text('', 'Commentaires...', ["class" => "form-tab"])}}</td>
            </tr>
            </tbody>

        </table>
    </div>
</div>