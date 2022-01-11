<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CategorieController extends Controller
{
    public function index()
    {
        $user = User::where('id','=',2)->first();
        $rep=Auth::user()->hasPermission('update-client');
        if($rep)
        return "true";
        return "false";
       // dd($rep);

        /*
        $role = Role::where('id','=',1)->first();

        $user->attachRole($role);
        return 'bonjour';*/

        // $permissions=PermissionRole::select('permission_id')->where('role_id','=',1)->get();
            $user->permissions()->attach(10);



        $client = Role::where('name', '=', 'client')->first();
        $permissions = Permission::where('name', 'like', '%client')
            ->orWhere('name', 'like', '%suggestion')
            ->orWhere('name', 'like', '%signaler')
            ->orWhere('name', 'like', 'show-objet')
            ->orWhere('name', 'like', 'index-objet')
            ->orWhere('name', '=', '%demande')
            ->get();
        return $permissions;
        return $client;

        $categorie = Categorie::get()->all();
        return view('categorie.index', compact('categorie'));
    }
    public function create()
    {
        return view('categorie.create');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'nom_categorie' => 'required',
            'description_categorie' => 'required',


        ]);
        $requestData = $request->all();


        Categorie::create($requestData);

        return redirect('categorie')->with('message', 'Categorie added!');
    }
    public function show($id)
    {


        $categorie = Categorie::where('id', '=', $id)->first();

        return view('categorie.show', compact('categorie'));
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
        $categorie = Categorie::findOrFail($id);
        return view('categorie.edit', compact('categorie'));
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
            'nom_categorie' => 'required',
            'description_categorie' => 'required',

        ]);
        $requestData = $request->all();

        $categorie = Categorie::findOrFail($id);
        $categorie->update($requestData);
    }
    public function destroy($id)
    {

        $delete =  Categorie::destroy($id);
        return redirect('categorie')->with('message');
    }
}
