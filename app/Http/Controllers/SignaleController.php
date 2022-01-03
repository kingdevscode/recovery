<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use App\Models\Categorie;

use App\Models\signale;
class SignaleController extends Controller
{
    public function index(Request $request)
    {
            $signale = signale::select('signales.id','signales.description_signale', 'signales.lieu_perte','signales.date_perte',
    'signales.statut_signale','categories.nom_categorie','clients.name')

            ->join('categories','categories.id','=','signales.id_categorie')
            ->join('clients','clients.id','=','signales.id_client')
            ->get();
            return view('signale.index', compact('signale'));
    }









    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //fonction qui renvoit le formulaire de creations des  utilsateurs
    public function create()
    {
            $categorie = Categorie::all();
            $client = client::all();
            return view('signale.create', compact('categorie','client'));


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


                    'description_signale' => 'required',
                    'lieu_perte' => 'required',
                    'date_perte' => 'required',
                    'statut_signale' => 'required',


                    'id_categorie' => 'required|exists:categories,id',
                    'id_client' => 'required|exists:clients,id'

                ]);
                $requestData = $request->all();

                client::create($requestData);

                return redirect('signale')->with('message', 'signale added!');




    }


     //fonction qui renvoit les details sur un utilsateur
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                $signale = signale::findOrFail($id);
                $categorie = Categorie::findOrFail($signale['id_categorie']) ;
                $client = client::findOrFail($signale['id_client']) ;

                return view('signale.show', compact('client','signale','categorie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */


       //fonction qui renvoit le formulaire sur un utilsateur a modifier
    public function edit($id)
    {
                $categorie = Categorie::all();
                $client = client::all();
                $signale = signale::findOrFail($id);

                return view('signale.edit', compact('client','categorie','signale'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */


       //fonction qui valide les informations modifiees sur un utilsateur
    public function update(Request $request, $id)
    {
                $this->validate($request, [
                    'description_signale' => 'required',
                    'lieu_perte' => 'required',
                    'date_perte' => 'required',
                    'statut_signale' => 'required',


                    'id_categorie' => 'required|exists:categories,id',
                    'id_client' => 'required|exists:clients,id'
                ]);
                $requestData = $request->all();

                $signale = signale::findOrFail($id);
                $signale->update($requestData);

                return redirect('signale');

    }

      //fonction qui supprime un utilsateur
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

                $delete= signale::destroy($id);
                return redirect('signale')->with('message');


    }
}
