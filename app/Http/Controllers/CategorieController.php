<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;


class CategorieController extends Controller
{
    public function index(){


        
        $categorie= Categorie::get()->all();
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
