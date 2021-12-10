<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

use App\Models\Agence;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $user=Auth::user();



            $user = User::select('users.id','users.name','users.prenom','users.num_cni','users.telephone','users.poste','users.email','users.password','roles.libelle_role','agences.libelle_bat')
            ->join('roles','roles.id','=','users.id_role')
            ->join('agences','agences.id','=','agences.id_Agence')
            ->get();
            return view('user.index', compact('user'));
            }









    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //fonction qui renvoit le formulaire de creations des  utilsateurs
    public function create()
    {
            $role = Role::all();
            $Agence = Agence::all();
            return view('user.create', compact('role','Agence'));


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
        $user=Auth::user();



                $this->validate($request, [

                    'name' => 'required',
                    'prenom' => 'required',
                    'num_cni' => 'required',
                    'telephone' => 'required',
                    'email' => 'required',
                    'poste' => 'required',
                    'password' => 'required|string|min:8|confirmed',
                    'password_confirmation'  =>  'required|same:password',

                    'id_role' => 'required|exists:roles,id',
                    'id_Agence' => 'required|exists:Agences,id'

                ]);
                $requestData = $request->all();
                $requestData['password'] = bcrypt( $requestData['password']);
                User::create($requestData);

                return redirect('user')->with('message', 'user added!');




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
                $user = User::findOrFail($id);
                $role = Role::findOrFail($user['id_role']) ;
                $Agence = Agence::findOrFail($user['id_Agence']) ;

                return view('user.show', compact('user','role','Agence'));

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
                $role = Role::all();
                $Agence = Agence::all();
                $user = User::findOrFail($id);

                return view('user.edit', compact('user','role','Agence'));

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

                    'nom' => 'required',
                    'prenom' => 'required',
                    'poste' => 'required',
                    'email' => 'required',
                    'password' => 'required|string|min:8|confirmed',
                    'password_confirmation'  =>  'required|min:8|confirmed',
                    'id_role' => 'required|exists:roles,id',
                    'id_Agence' => 'required|exists:Agences,id'
                ]);
                $requestData = $request->all();

                $user = user::findOrFail($id);
                $user->update($requestData);

                return redirect('user');

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

                $delete= user::destroy($id);
                return redirect('user')->with('message');


    }

}
