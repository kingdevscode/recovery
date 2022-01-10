<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

use App\Models\Agence;
use App\Models\Personnel;
use App\Models\User;

class PersonnelController extends Controller
{
    public function index(Request $request)
    {




            $personnel = Personnel::select('users.id','users.name','users.prenom','users.poste',
            'users.email','users.password','users.num_cni','personnels.poste','personnels.description','roles.nom_role','agences.nom_agence')
            ->join('roles','roles.id','=','personnels.id_role')
            ->join('agences','agences.id','=','personnels.id_agence')
            ->join('users','users.id','=','personnels.id_user')
            ->get();
            return view('personnel.index', compact('personnel'));
    }


    public function create()
    {
          //  $role = Role::all();
            $Agence = Agence::all();
            $user = User::all();
            return view('personnel.create', compact('role','Agence','user'));


    }
    public function store(Request $request)
    {



                $this->validate($request, [

                    'poste' => 'required',
                    'description' => 'required',

                    'id_role' => 'required|exists:roles,id',
                    'id_agence' => 'required|exists:Agences,id',
                    'id_user' => 'required|exists:users,id',
                ]);
                $requestData = $request->all();
                Personnel::create($requestData);

                return redirect('personnel')->with('message', 'personnel added!');





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
                $personnel = Personnel::findOrFail($id);
               // $role = Role::findOrFail($personnel['id_role']) ;
                $user = User::findOrFail($personnel['id_user']) ;
                $Agence = Agence::findOrFail($personnel['id_agence']) ;

                return view('user.show', compact('user','role','Agence','personnel'));

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
               // $role = Role::all();
                $Agence = Agence::all();
                $user = User::all();

                $personnel = personnel::findOrFail($id);

                return view('user.edit', compact('user','role','Agence','personnel'));

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

            'poste' => 'required',
            'description' => 'required',

            'id_role' => 'required|exists:roles,id',
            'id_agence' => 'required|exists:Agences,id',
            'id_user' => 'required|exists:users,id',
        ]);

                $requestData = $request->all();

                $personnel = Personnel::findOrFail($id);
                $personnel->update($requestData);

                return redirect('personnel');

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

                $delete= Personnel::destroy($id);
                return redirect('personnel')->with('message');


    }

}






