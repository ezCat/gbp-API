<div id="modal-affaire">
    <!-- THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
    <div  id="btn-close-modal" class="close-modal-affaire close-modal">
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>

    <div class="modal-content dark">
        <h2>Projets existants</h2>

        <hr>

        <table class="table" id="table-liste-projet">
        	<tr>
        		<th>Nom projet</th>
        		<th>Commentaires</th>
        		<th>Chef de projet</th>
        		<th style="text-align: center">Supprimer</th>
        	</tr>
        </table>

    </div>
</div>

<script src="{{asset('/js/ajax/updateProjet.js')}}"></script>
<script src="{{asset('/js/ajax/deleteProjet.js')}}"></script>