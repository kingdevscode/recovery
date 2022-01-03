<?php

namespace App\Http\Controllers;
use App\Models\client;
use App\Models\Objet;

use App\Models\Demande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{

  public function index(Request $request)
    {
            $objet = Objet::select('objtes.id','objets.date_demande', 'objets.date_traitement','objets.statut_demande',
    'objets.nom_objet','clients.name_client')

            ->join('clients','clients.id','=','demandes.id_client')
            ->join('objets','objets.id','=','demandes.id_objet')
            ->get();
            return view('demande.index', compact('objet'));
    }









    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //fonction qui renvoit le formulaire de creations des  utilsateurs
    public function create()
    {
            $objet = Objet::all();
            $client = client::all();
            return view('demande.create', compact('client','objet'));


    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */

    public function store(Request $request)
    {



                $this->validate($request, [

                    'date_demande' => 'required',
                    'date_traitement',
                    'statut_demande' => 'required',

                    'id_personnel',
                    'id_objet' => 'required|exists:objets,id',
                    'id_client' => 'required|exists:clients,id'

                ]);
                $requestData = $request->all();

                Demande::create($requestData);

                return redirect('demande')->with('message', 'demande added!');




    }


     //fonction qui renvoit les details sur un utilsateur
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                $demande = Demande::findOrFail($id);
                $objet = Objet::findOrFail($demande['id_objet']) ;
                $client = client::findOrFail($demande['id_client']) ;

                return view('objet.show', compact('user','objet','categorie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */


       //fonction qui renvoit le formulaire sur un utilsateur a modifier
    public function edit($id)
    {
                $objet = Objet::all();
                $client = client::all();
                $demande = Demande::findOrFail($id);

                return view('demande.edit', compact('client','objet','demande'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */


       //fonction qui valide les informations modifiees sur un utilsateur
    public function update(Request $request, $id)
    {
                $this->validate($request, [
                    'date_demande' => 'required',
                    'date_traitement',
                    'statut_demande' => 'required',

                    'id_personnel',
                    'id_objet' => 'required|exists:objets,id',
                    'id_client' => 'required|exists:clients,id'
                ]);
                $requestData = $request->all();

                $demande = Demande::findOrFail($id);
                $demande->update($requestData);

                return redirect('demande');

    }

      //fonction qui supprime un utilsateur
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

                $delete= Demande::destroy($id);
                return redirect('objet')->with('message');


    }
}
