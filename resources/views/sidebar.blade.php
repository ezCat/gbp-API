@extends('default')
    
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}" style="padding-top: 20px;">Cellule Projets</a> 
            </div>

            <ul class="nav navbar-nav navbar-left">
                <li style="margin: 10px 10px 0 10px">
                    <a style="margin: 0; padding:0" href="{{url('ajouter-projet')}}"><button class="btn btn-blue-green"><i class="fa fa-plus"></i> Ajouter un projet</button></a>
                </li>
                <li style="margin: 10px 10px 0 10px">
                    <button class="btn btn-inverse" data-toggle="modal" data-target="#modal-change-projet"><i class="fa fa-refresh"></i> Changer de projet</button>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li  style="margin: 0px 10px 0 10px">
                    <button class="btn light-orange" style="font-size: 20; height: 58px;"><b>LHP N4</b></button>
                </li>
                <li style="margin: 0 25px 0 15px">
                    <select class="form-control" style="margin: 12px 10px 0 0; background-color: transparent; color: #fff;">
                        <option style="background-color: #4d4d4d; color: #fff">En cours</option>
                        <option style="background-color: #4d4d4d; color: #fff">Soldé</option>
                    </select>
                </li>
            </ul>

              <!-- Modal change projet -->
              <div class="modal fade" id="modal-change-projet" tabindex="-1" role="dialog" aria-labelledby="modal-change-projet" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                        <h4 class="modal-title" id="myModalLabel">Choisir un projet</h4>
                        </div>
                        <div class="modal-body">
                            <h3>Liste des projets</h3>
                            <select class="form-control">
                                <option>Projet 1</option>
                                <option>Projet 2</option>
                                <option>Projet 3</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary">Sélectionner</button>
                        </div>
                </div>
              </div>
            </div>
        </nav>   


        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{asset('img/suez.png')}}" class="user-image img-responsive"/>
					</li>	
                    <li>
                        <a href="{{ url('saisir-projet') }}" id="saisie"><i class="fa fa-pencil-square-o fa-3x"></i> Saisie d'une affaire</a>
                    </li>	
                    <li>
                        <a></a>
                    </li>
                    <li>
                        <a href="{{ url('dashboard/unique') }}" id="unique"><i class="fa fa-line-chart fa-3x"></i> Bilan du projet</a>
                    </li>               
                    <li>
                        <a href="{{ url('dashboard/master') }}" id="master"><i class="fa fa-tasks fa-3x"></i> Tableau de bord du projet</a>
                    </li>   
                    <li>
                        <a></a>
                    </li>
                    <li>
                        <a href="{{ url('dashboard/general') }}" id="general"><i class="fa fa-money fa-3x"></i> Bilan tous projets</a>
                    </li>	
                    <li>
                        <a></a>
                    </li>
                    <li>
                        <a href="{{ url('help') }}"><i class="fa fa-cogs fa-3x"></i> Besoin d'aide ?</a>
                    </li>
                </ul>
            </div>
        </nav>  