@extends('sidebar')

@section('content')

        <!-- Modal satisfaction -->
<div class="modal fade" id="modal-satisfaction-client" tabindex="-1" role="dialog"
     aria-labelledby="modal-satisfaction-client" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modifier la satisfaction client</h4>
            </div>
            <div class="modal-body">
                <h3>Alerte :</h3>
                <select class="form-control">
                    <option>Aucune alerte</option>
                    <option>Alerte produit</option>
                    <option>Alerte planning</option>
                    <option>Alerte produit + planning</option>
                    <option>Autre alerte</option>
                </select>
                <h3>FEP Qualification :</h3>
                <select class="form-control">
                    <option>Non communiqué</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                </select>
                <h3>FEP MSI :</h3>
                <select class="form-control">
                    <option>Non communiqué</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Sauvegarder</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal planning -->
<div class="modal fade" id="modal-planning" tabindex="-1" role="dialog" aria-labelledby="modal-change-projet"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modifier l'état d'avancement</h4>
            </div>
            <div class="modal-body">
                <h3>Phase planifiée :</h3>
                <select class="form-control">
                    <option>Phase 1</option>
                    <option>Phase 2</option>
                    <option>Phase 3</option>
                </select>
                <h3>Phase en cours :</h3>
                <select class="form-control">
                    <option>Phase 1</option>
                    <option>Phase 2</option>
                    <option>Phase 3</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Sauvegarder</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal livrables -->
<div class="modal fade" id="modal-livrable" tabindex="-1" role="dialog" aria-labelledby="modal-livrable"
     aria-hidden="true">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modifier l'état d'avancement</h4>
            </div>
            <div class="modal-body">
                <table border="1" style="width: 100%; text-align: center; font-size: 16">
                    <tr>
                        <td style="width: 35%">
                            <select style="margin: 0" class="form-control">
                                <option>Programme recette</option>
                                <option selected>DSI intervention</option>
                                <option>Document MSI</option>
                            </select>
                        </td>
                        <td style="width: 15%">
                            <select style="margin: 0" class="form-control">
                                <option>En cours</option>
                                <option>Terminé</option>
                            </select>
                        </td>
                        <td style="width: 10%">
                            <select style="margin: 0" class="form-control">
                                <option>En avance</option>
                                <option>Dans les temps</option>
                                <option>En retard</option>
                                <option>Très en retard</option>
                            </select>
                        </td>
                        <td style="width: 40%"><input type="text" class="form-control input-modal"
                                                      value="Ceci est un long commentaire"></td>
                    </tr>
                    <tr>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option selected>Programme recette</option>
                                <option>DSI intervention</option>
                                <option>Document MSI</option>
                            </select>
                        </td>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>En cours</option>
                                <option>Terminé</option>
                            </select>
                        </td>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>En avance</option>
                                <option>Dans les temps</option>
                                <option>En retard</option>
                                <option>Très en retard</option>
                            </select>
                        </td>
                        <td><input type="text" class="form-control input-modal" value="Ceci est un long commentaire">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option selected>Programme recette</option>
                                <option>DSI intervention</option>
                                <option>Document MSI</option>
                            </select>
                        </td>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>En cours</option>
                                <option>Terminé</option>
                            </select>
                        </td>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>En avance</option>
                                <option>Dans les temps</option>
                                <option>En retard</option>
                                <option>Très en retard</option>
                            </select>
                        </td>
                        <td><input type="text" class="form-control input-modal" value="Ceci est un long commentaire">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>Programme recette</option>
                                <option>DSI intervention</option>
                                <option selected>Document MSI</option>
                            </select>
                        </td>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>En cours</option>
                                <option>Terminé</option>
                            </select>
                        </td>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>En avance</option>
                                <option>Dans les temps</option>
                                <option>En retard</option>
                                <option>Très en retard</option>
                            </select>
                        </td>
                        <td><input type="text" class="form-control input-modal" value="Ceci est un long commentaire">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>Programme recette</option>
                                <option selected>DSI intervention</option>
                                <option>Document MSI</option>
                            </select>
                        </td>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>En cours</option>
                                <option>Terminé</option>
                            </select>
                        </td>
                        <td>
                            <select style="margin: 0" class="form-control">
                                <option>En avance</option>
                                <option>Dans les temps</option>
                                <option>En retard</option>
                                <option>Très en retard</option>
                            </select>
                        </td>
                        <td><input type="text" class="form-control input-modal" value="Ceci est un long commentaire">
                        </td>
                    </tr>
                    <tfoot>
                    <tr>
                        <td colspan="4">
                            <div class="add_livrable">
                                <button style="width: 100%" class="btn">+ Ajouter un livrable</button>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Sauvegarder</button>
            </div>
        </div>
    </div>
</div>

<div id="page-wrapper">

    <div style="margin:  1% 5% 0 5% ">

        <input type="hidden" id="active_menu" value="master">

        <div class="row">
            <div style="margin-left: 20px"><h2><b>LHP N4</b> : Gestion de projet globale</h2></div>
        </div>

        <div class="row">
            <div class="col-xs-4" data-toggle="modal" data-target="#modal-planning">

                <div class="panel back-dash-master">
                    <div class="back-dash-heading">
                        <i class="fa fa-calendar fa-3x"></i><strong> &nbsp; PLANNING</strong>
                    </div>

                    <div class="back-dash-content">
                        <div class="back-dash-sub-content">
                            <table style="width: 100%">
                                <tr>
                                    <td style="width: 40%"><p>Planifiée : </p></td>
                                    <td style="width: 60%"><p><strong>N°5 : Projet Soldé</strong></p></td>
                                </tr>
                                <tr>
                                    <td><p>En cours : </p></td>
                                    <td><p><strong>N°4 : Préparation MSI</strong></p></td>
                                </tr>
                            </table>
                        </div>

                        <div class="back-dash-sub-comment">
                            <hr>
                            <p class="back-dash-comment">Ceci est un commentaire</p>
                        </div>
                    </div>

                    <div class="back-dash-footer danger">
                        <i class="fa fa-thumbs-down"></i> &nbsp; Mauvais résultat
                    </div>
                </div>
            </div>

            <div class="col-xs-4" data-toggle="modal" data-target="#modal-satisfaction-client">

                <div class="panel back-dash-master">
                    <div class="back-dash-heading">
                        <i class="fa fa-user-secret fa-3x"></i><strong> &nbsp; SATISFACTION CLIENT</strong>
                    </div>

                    <div class="back-dash-content">
                        <div class="back-dash-sub-content">
                            <table style="width: 100%">
                                <tr>
                                    <td><p>Alerte :</p></td>
                                    <td><p><strong>Aucune alerte</strong></p></td>
                                </tr>
                                <tr>
                                    <td style="width: 50%"><p>FEP Qualification : </p></td>
                                    <td style="width: 50%"><p><strong>B</strong></p></td>
                                </tr>
                                <tr>
                                    <td><p>FEP MSI : </p></td>
                                    <td><p><strong>B</strong></p></td>
                                </tr>
                            </table>
                        </div>

                        <div class="back-dash-sub-comment">
                            <hr>
                            <p class="back-dash-comment">Ceci est un commentaire</p>
                        </div>
                    </div>

                    <div class="back-dash-footer warning">
                        <i class="fa fa-hand-stop-o"></i> &nbsp; Améliorable
                    </div>
                </div>

            </div>
            <div class="col-xs-4">

                <div class="panel back-dash-master">
                    <div class="back-dash-heading">
                        <i class="fa fa-truck fa-3x"></i><strong> &nbsp; FOURNISSEUR</strong>
                    </div>

                    <div class="back-dash-content">
                        <div class="back-dash-sub-content">
                            <table style="width: 100%">
                                <tr>
                                    <td style="width: 50%"><p>Non conformité : </p></td>
                                    <td><p><strong>2</strong></p></td>
                                </tr>
                                <tr>
                                    <td style="width: 50%"><p>Retard livraison : </p></td>
                                    <td><p><strong>1</strong></p></td>
                                </tr>
                            </table>
                        </div>

                        <div class="back-dash-sub-comment">
                            <hr>
                            <p class="back-dash-comment">Ceci est un commentaire</p>
                        </div>
                    </div>

                    <div class="back-dash-footer success">
                        <i class="fa fa-thumbs-up"></i> &nbsp; Bon résultat
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-6">

                <div class="panel back-dash-master">
                    <div class="back-dash-heading">
                        <i class="fa fa-euro fa-3x"></i><strong> &nbsp; BILAN FINANCIER</strong>
                    </div>

                    <div class="back-dash-content">
                        <div class="back-dash-sub-content">
                            <table style="width: 100%">
                                <tr>
                                    <td style="width: 45%"><p>Budget : </p></td>
                                    <td style="width: 65%"><p><strong>514 298 €</strong></p></td>
                                </tr>
                                <tr>
                                    <td><p>Dépenses : </p></td>
                                    <td><p><strong>414 298 €</strong></p></td>
                                </tr>
                                <tr>
                                    <td style="width: 40%"><p>Résultat : </p></td>
                                    <td style="width: 65%"><p><strong style="color: green">100 000 €</strong></p></td>
                                </tr>
                            </table>
                        </div>

                        <div class="back-dash-sub-comment">
                            <hr>
                            <p class="back-dash-comment">Ceci est un commentaire</p>
                        </div>

                    </div>

                    <div class="back-dash-footer success">
                        <i class="fa fa-thumbs-up"></i> &nbsp; Bon résultat
                    </div>
                </div>

            </div>

            <div class="col-xs-6">

                <div class="panel back-dash-master">
                    <div class="back-dash-heading">
                        <i class="fa fa-group fa-3x"></i><strong> &nbsp; RESSOURCES</strong>
                    </div>

                    <div class="back-dash-content">
                        <div class="back-dash-sub-content">
                            <table style="width: 100%">
                                <tr>
                                    <td style="width: 40%"><p>Prévues : </p></td>
                                    <td style="width: 60%"><p><strong>241 h</strong></p></td>
                                </tr>
                                <tr>
                                    <td><p>Réalisées : </p></td>
                                    <td><p><strong>253 h</strong></p></td>
                                </tr>
                                <tr>
                                    <td style="width: 40%"><p>Résultat : </p></td>
                                    <td style="width: 65%"><p><strong style="color: red">- 12 h</strong></p></td>
                                </tr>
                            </table>
                        </div>

                        <div class="back-dash-sub-comment">
                            <hr>
                            <p class="back-dash-comment">Ceci est un commentaire</p>
                        </div>

                    </div>

                    <div class="back-dash-footer danger">
                        <i class="fa fa-thumbs-down"></i> &nbsp; Mauvais résultat
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-xs-12" data-toggle="modal" data-target="#modal-livrable">
                <div class="panel back-dash-master">
                    <div class="back-dash-heading">
                        <i class="fa fa-thumb-tack fa-3x"></i><strong> &nbsp; LIVRABLES</strong>
                    </div>

                    <div class="back-dash-content" style="height: auto;">
                        <table border="1" style="width: 100%; text-align: center;">
                            <tr style="height: 4rem">
                                <td style="width: 30%">Dosier de conception</td>
                                <td style="width: 10%"><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
                                <td style="width: 10%">Terminé</td>
                                <td style="width: 50%">Ceci est un long commentaire</td>
                            </tr>
                            <tr style="height: 4rem">
                                <td>Programme recette</td>
                                <td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
                                <td>Terminé</td>
                                <td>Ceci est un long commentaire</td>
                            </tr>
                            <tr style="height: 4rem">
                                <td>Dossier formation</td>
                                <td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
                                <td>Terminé</td>
                                <td>Ceci est un long commentaire</td>
                            </tr>
                            <tr style="height: 4rem">
                                <td>DRT Qualification</td>
                                <td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
                                <td>Terminé</td>
                                <td>Ceci est un long commentaire</td>
                            </tr>
                        </table>
                    </div>

                    <div class="back-dash-footer success">
                        <i class="fa fa-thumbs-up"></i> &nbsp; Bon résultat
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection