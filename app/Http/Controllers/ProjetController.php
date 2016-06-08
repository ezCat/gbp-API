<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Projet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ProjetController extends Controller
{
    /**
     * Requete AJAX d'ajout de projet.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $id_user = $request->input('id_user');


            $projet = new Projet();
            $projet->p_libelle = $request->input('libelle');
            $projet->save();

            $projet->User()->attach($id_user);

            return response()->json(Input::get('libelle'));
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Récupérer une liste de projet.
     *
     * @return \Illuminate\Http\Response
     */
    public function getListe()
    {
        $listProjet = DB::table('projet')
            ->select('projet.id', 'projet.p_libelle', 'utilisateur.nom', 'projet.p_commentaire')
            ->join('projet_utilisateur', 'projet_utilisateur.fk_id_projet', '=', 'projet.id')
            ->join('utilisateur', 'projet_utilisateur.fk_id_utilisateur', '=', 'utilisateur.id')
            ->join('etat', 'projet.fk_id_etat', '=', 'etat.id')
            ->get();
        return response()->json($listProjet);
    }

    /**
     * Affiche la page de choix de projet.
     *
     * @return \Illuminate\Http\Response
     */
    public function choisirProjet()
    {
        $projets = Projet::all();
        return view('choisir_projet', compact('projets'));
    }

    /**
     * Intégration dans la variable de session.
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function validationFormProjet(Request $request)
    {
        session()->put('id_projet', $request->input('id_projet'));

        $name_projet = Projet::findOrFail($request->input('id_projet'));
        session()->put('name_projet', $name_projet->p_libelle);

        return view('accueil');
    }

    /**
     * Requete AJAX de changement de statut
     *
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function postStatutProjet(Request $request)
    {
        if ($request->isMethod('post')) {

            $fk_id_etat = $request->input('etat');
            $id = $request->input('id_projet');

            DB::table('projet')
                ->where('id', '=', $id)
                ->update(['fk_id_etat' => $fk_id_etat]);

            $return = DB::table('etat')
                ->select('id', 'et_libelle')
                ->where('id', '=', $fk_id_etat)
                ->get();

            $request->session()->set('id_statut_projet', $fk_id_etat);
            $request->session()->save();

            return response()->json($return);
        }
    }

    public function getSessionIdStatutProjet(Request $request) {
        return $request->session()->get('id_statut_projet');
    }
}
