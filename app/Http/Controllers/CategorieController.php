<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;


class CategorieController extends Controller
{
    public function index(){

        $user=Auth::user();

        if($user)
        {


            $role = Role::Where('id','=',$user->id_role)->first() ;
            //
             if(  $role['nom_role']==="super_admin" || $role['nom_role']==="admin" )
            {
                $categorie= Categorie::get()->all();
                return view('categorie.index', compact('categorie'));
            }
            else{
                 return view('errors.403');
                }

        }
    }
    public function create()
    {
              return view('categorie.create');



    }
    public function store(Request $request)
    {
        $user=Auth::user();

        if($user)
        {



                $this->validate($request, [
                    'nom_categorie' => 'required',
                    'description_categorie' => 'required',


                ]);
                $requestData = $request->all();


                Categorie::create($requestData);

                return redirect('categorie')->with('message', 'Categorie added!');


        }
    }
    public function show($id)
    { $user=Auth::user();


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
