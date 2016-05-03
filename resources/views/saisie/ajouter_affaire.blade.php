@extends('sidebar')

@section('content')

    <div id="page-wrapper">
        <div id="page-inner">

            <input type="hidden" id="active_menu" value="ajouter">

            @include('saisie.modal.affaire')

            <div class="col-xs-9">
                <a href="#modal-affaire" id="btn-affaire">
                    <button style="float: right" class="btn-inverse btn-circle"><i class="fa fa-list"></i></button>
                </a>
                <h3>Ajouter un projet</h3>
                <hr>

                {{Form::open()}}

                <label>Nom du projet :</label>
                {{Form::text('', null, ['class' => 'form-control', "placeholder" => "Entrez le nom du nouveau projet..."])}}

                <button class="btn btn-validate" style="float: right;"><i class="fa fa-arrow-right"></i> Soumettre
                </button>

                {{Form::close()}}
            </div>

@endsection