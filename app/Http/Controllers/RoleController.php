<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index(){
        $role= Role::get()->all();
        return view('role.index', compact('role'));
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
        return view('role.create');
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
            'nom_role' => 'required',
            'description_r' => 'required',


        ]);
        $requestData = $request->all();


        Role::create($requestData);

        return redirect('role')->with('message', 'role added!');
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
        $role = Role::where('id', '=', $id)->first();

                return view('role.show', compact('role'));
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
        $role = Role::findOrFail($id);
        return view('role.edit', compact('role'));
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
            'nom_role' => 'required',
            'description_r' => 'required',

        ]);
        $requestData = $request->all();

        $role = Role::findOrFail($id);
        $role->update($requestData);

        return redirect('role')->with('info', 'role updated!');
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

        $delete =  Role::destroy($id);
        return redirect('role')->with('message');
        /*$user=Auth::user();

        if($user)
        {


            $role = Role::Where('id','=',$user->id_role)->first() ;
            //
            if(  $role['nom_role']==="admin"  )
            {
                    $delete =  Role::destroy($id);
                return redirect('role')->with('message');

            }

            else{
                 return view('errors.403');
            }
        }*/
    }


}
