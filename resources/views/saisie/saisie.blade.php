@extends('default')

@section('content')

    <div id="page-wrapper">
        <div id="page-inner">

            <input type="hidden" id="active_menu" value="saisie">

            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-pills nav-tabs nav-justified">
                        <li class="active"><a href="#Ensemble-r" data-toggle="tab">Ensemble</a></li>
                        <li><a href="#Heure-r" data-toggle="tab">Heure</a></li>
                        <li><a href="#Commande-r" data-toggle="tab">Commande</a></li>
                    </ul>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content">

                        @include('saisie.table.ensemble')
                        @include('saisie.table.heure')
                        @include('saisie.table.commande')

                    </div>
                </div>


            </div>

        </div>

        @include('saisie.modal.ensemble')
        @include('saisie.modal.heure')
        @include('saisie.modal.commande')
        @include('saisie.modal.fournisseur')
        
        <div class="clearfix"></div>

        <script src="{{asset('/js/ajax/postFournisseur.js')}}"></script>
        <script src="{{asset('/js/ajax/postEnsemble.js')}}"></script>

        <script src="{{asset('/js/ajax/deleteEnsemble.js')}}"></script>
        <script src="{{asset('/js/ajax/deleteCommande.js')}}"></script>
        <script src="{{asset('/js/ajax/deleteHeure.js')}}"></script>

        <script src="{{asset('/js/ajax/updateCommande.js')}}"></script>
        <script src="{{asset('/js/ajax/updateHeure.js')}}"></script>
        <script src="{{asset('/js/ajax/updateEnsemble.js')}}"></script>
        <script src="{{asset('/js/ajax/updateHeureBudget.js')}}"></script>

        <script src="{{asset('/js/ajax/getListFournisseur.js')}}"></script>

@endsection