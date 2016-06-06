<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ensemble;
use App\Fournisseur;
use App\Commande;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommandeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $id_ensemble = $request->input('id_ensemble');
            $id_fournisseur = $request->input('id_fournisseur');

            $cmd = new Commande();

            $cmd->c_designation = $request->input('c_designation');
            $cmd->c_numero_commande = $request->input('c_numero_commande');
            $cmd->c_insatisfaction_livraison = $request->input('c_insatisfaction_livraison');
            $cmd->c_insatisfaction_qualite = $request->input('c_insatisfaction_qualite');
            $cmd->c_date_commande = $request->input('c_date_commande');
            $cmd->c_prix = $request->input('c_prix');
            $cmd->fk_id_fournisseur = $id_fournisseur;
            $cmd->fk_id_ensemble = $id_ensemble;

            $cmd->save();

            $cmd->Ensemble()->attach($id_ensemble);
            $cmd->Fournisseur()->attach($id_fournisseur);

            return response()->json('Ajout effectué !');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
