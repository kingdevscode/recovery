<?php

namespace App\Http\Controllers;

use App\Models\Client;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClientController extends Controller
{
    public function index(Request $request)
    {




            $client = Client::select('users.id','users.name','users.prenom',
            'users.email','users.password','users.num_cni','clients.photo_c','clients.ville_c','clients.quartier_c')

            ->join('users','users.id','=','clients.id_user')
            ->get();
            return view('client.index', compact('client'));
    }


    public function create()
    {

            $user = User::all();
            return view('client.create', compact('user'));


    }
    public function store(Request $request)
    {



                $this->validate($request, [

                    'photo_c' => 'required',
                    'ville_c' => 'required',
                    'quartier_c' => 'required',

                    'id_user' => 'required|exists:users,id',
                ]);
                $requestData = $request->all();
                Client::create($requestData);

                return redirect('client')->with('message', 'client added!');





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
                $client = Client::findOrFail($id);

                $user = User::findOrFail($client['id_user']) ;
                return view('clinet.show', compact('user','personnel'));

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

                $user = User::all();

                $client = client::findOrFail($id);

                return view('client.edit', compact('user','client'));

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

            'photo_c' => 'required',
            'ville_c' => 'required',
            'quartier_c' => 'required',



            'id_user' => 'required|exists:users,id',
        ]);

                $requestData = $request->all();

                $client = client::findOrFail($id);
                $client->update($requestData);

                return redirect('client');

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

                $delete= User::destroy($id);
                return redirect('user')->with('message');


    }

}






