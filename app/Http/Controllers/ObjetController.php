<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categorie;

use App\Models\Objet;

class ObjetController extends Controller
{
    public function index(Request $request)
    {
            $objet = Objet::select('objets.id','objets.nom_objet', 'objets.lieu_trouvail','objets.date_trouvail',
    'objets.date_enregistrement','objets.date_restitution','objets.statut_objet','objets.description_o','objets.photo','categories.nom_categorie','users.name')

            ->join('categories','categories.id','=','objets.id_categorie')
            ->join('users','users.id','=','objets.id_user')
            ->get();
            return view('objet.index', compact('objet'));
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
            $user = User::all();
            return view('objet.create', compact('categorie','user'));


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


                    'nom_objet' => 'required',
                    'lieu_trouvail' => 'required',
                    'date_trouvail' => 'required',
                    'date_enregistrement' => 'required',
                    'date_restitution' => 'required',
                    'statut_objet' => 'required',
                    'description_o' => 'required',
                    'photo'  =>  'required',

                    'id_categorie' => 'required|exists:categories,id',
                    'id_user' => 'required|exists:users,id'

                ]);
                $requestData = $request->all();

                User::create($requestData);

                return redirect('objet')->with('message', 'objet added!');




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
                $objet = Objet::findOrFail($id);
                $categorie = Categorie::findOrFail($objet['id_categorie']) ;
                $user = user::findOrFail($objet['id_user']) ;

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
                $categorie = Categorie::all();
                $user = user::all();
                $objet = Objet::findOrFail($id);

                return view('objet.edit', compact('user','categorie','objet'));

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
                    'nom_objet' => 'required',
                    'lieu_trouvail' => 'required',
                    'date_trouvail' => 'required',
                    'date_enregistrement' => 'required',
                    'date_restitution' => 'required',
                    'statut_objet' => 'required',
                    'description_o' => 'required',
                    'photo'  =>  'required',

                    'id_categorie' => 'required|exists:categories,id',
                    'id_user' => 'required|exists:users,id'
                ]);
                $requestData = $request->all();

                $objet = Objet::findOrFail($id);
                $objet->update($requestData);

                return redirect('objet');

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

                $delete= Objet::destroy($id);
                return redirect('objet')->with('message');


    }
}
