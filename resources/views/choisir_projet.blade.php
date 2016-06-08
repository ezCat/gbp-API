@extends('default')

@section('content')

    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-sm-6">

                    {!! Form::open(array('route'=>'accueil','method'=>'POST', 'id'=>'form')) !!}

                    <h2>Débuter avec l'application Gestion Base Projet</h2>
                    <hr>
                    <h3>Veuillez choisir un projet dans la liste ci-dessous :</h3>
                    <select class="form-control" name="id_projet">
                        @foreach($projets as $projet)
                            <option value="{{ $projet->id }}">{{ $projet->p_libelle }}</option>
                        @endforeach
                    </select>

                    <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Valider
                    </button>

                    {!! Form::close() !!}

                </div>
            </div>


        </div>
    </div>

@endsection