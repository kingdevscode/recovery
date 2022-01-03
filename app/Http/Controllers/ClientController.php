<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $client= Client::get()->all();
        return view('client.index', compact('client'));
       /* $user=Auth::user();

        if($user)
        {


            $role = Role::Where('id','=',$user->id_role)->first() ;
            //
            if(  $role['nom_role']==="admin"  )
            {
                $role= Role::get()->all();
                return view('role.index', compact('role'));
            }

            else{
                 return view('errors.403');
            }

        }*/
    }



    public function create()
    {
        return view('client.create');
        /*$user=Auth::user();

        if($user)
        {


            $role = Role::Where('id','=',$user->id_role)->first() ;
            //
            if(  $role['nom_role']==="admin"  )
            {
                return view('role.create');
            }

            else{
                 return view('errors.403');
            }
        }*/
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_client' => 'required',
            'prenom_client' => 'required',
            'num_cni_c' => 'required',
            'telephone_c' => 'required',
            'email_c' => 'required',

            'password_client' => 'required|string|min:8|confirmed',
            'password_confirmation'  =>  'required|same:password',
            'photo_c' ,
            'ville_c' => 'required',
            'quartier_c' => 'required',

    ]);
    $requestData = $request->all();
    $requestData['password_client'] = bcrypt( $requestData['password']);
    Client::create($requestData);

    return redirect('client')->with('message', 'client added!');
        /*$user=Auth::user();

        if($user)
        {


            $role = Role::Where('id','=',$user->id_role)->first() ;
            //
            if(  $role['nom_role']==="admin"  )
            {
                $this->validate($request, [
                    'nom_role' => 'required',
                    'description_r' => 'required',


                ]);
                $requestData = $request->all();


                Role::create($requestData);

                return redirect('role')->with('message', 'role added!');
            }

            else{
                 return view('errors.403');
            }
        }*/
    }


    public function show($id)
    {
        $client = Client::where('id', '=', $id)->first();

                return view('client.show', compact('client'));
        /*$user=Auth::user();

        if($user)
        {


            $role = Role::Where('id','=',$user->id_role)->first() ;
            //
            if(  $role['nom_role']==="admin"  )
            {
                $role = Role::where('id', '=', $id)->first();

                return view('role.show', compact('role'));
            }

            else{
                 return view('errors.403');
            }
        }*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client.edit', compact('client'));
       /* $user=Auth::user();

        if($user)
        {


            //$role = Role::Where('id','=',$user->id_role)->first() ;
            //
           // if(  $role['nom_role']==="admin"  )
            {
                $role = Role::findOrFail($id);
                return view('role.edit', compact('role'));
            }

            else{
                 return view('errors.403');
            }
        }*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_client' => 'required',
        'prenom_client' => 'required',
        'num_cni_c' => 'required',
        'telephone_c' => 'required',
        'email_c' => 'required',

        'password_client' => 'required|string|min:8|confirmed',
        'password_confirmation'  =>  'required|same:password',
        'photo_c' ,
        'ville_c' => 'required',
        'quartier_c' => 'required',

        ]);
        $requestData = $request->all();

        $client = Client::findOrFail($id);
        $client->update($requestData);

        return redirect('client');

        /*$user=Auth::user();

        if($user)
        {


            $role = Role::Where('id','=',$user->id_role)->first() ;
            //
            if(  $role['nom_role']==="admin"  )
            {
                $this->validate($request, [
                    'nom_role' => 'required',
                    'description_r' => 'required',

                ]);
                $requestData = $request->all();

                $role = Role::findOrFail($id);
                $role->update($requestData);

                return redirect('role')->with('info', 'role updated!');
            }

            else{
                 return view('errors.403');
            }
        }*/

    }
    public function destroy($id)
    {

        $delete =  Client::destroy($id);
        return redirect('client')->with('message');

    }


}
