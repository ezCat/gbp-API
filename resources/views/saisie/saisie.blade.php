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
                    <!-- Tab panes -->
                    <div class="tab-content">

                        @include('saisie.modal.ensemble')
                        @include('saisie.table.ensemble')
                        @include('saisie.modal.heure')
                        @include('saisie.table.heure')
                        @include('saisie.modal.commande')
                        @include('saisie.modal.fournisseur')
                        @include('saisie.table.commande')

                    </div>
                </div>


            </div>

        </div>

        <div class="clearfix"></div>

        <script src="{{asset('/js/ajax/postFournisseur.js')}}"></script>
        <script src="{{asset('/js/ajax/postEnsemble.js')}}"></script>

@endsection