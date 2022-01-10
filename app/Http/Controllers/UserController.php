<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $user=Auth::user();



            $user = User::select('users.id','users.name','users.prenom',
            'users.email','users.num_cni','users.password')->get();
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

            return view('user.create');


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
                    'password' => 'required|string|min:8|confirmed',
                    'password_confirmation'  =>  'required|same:password',
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
                return view('user.show', compact('user'));

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

                $user = User::findOrFail($id);

                return view('user.edit', compact('user'));

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
                    'num_cni' => 'required',
                    'email' => 'required',
                    'password' => 'required|string|min:8|confirmed',
                    'password_confirmation'  =>  'required|min:8|confirmed',

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
