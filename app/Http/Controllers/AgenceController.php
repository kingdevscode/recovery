<?php

namespace App\Http\Controllers;
use App\Models\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function index(){



        $agence= Agence::get()->all();
        return view('agence.index', compact('agence'));


    }
    public function create()
    {
              return view('agence.create');



    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'nom_Agence' => 'required',
            'ville_Agence' => 'required',
            'quartier_Agence' => 'required',
            'telephone_Agence' => 'required',
            'description_Agence' => 'required',



        ]);
        $requestData = $request->all();


        Agence::create($requestData);

        return redirect('agence')->with('message', 'agence added!');

    }
    public function show($id)
    {


        $agence = Agence::where('id', '=', $id)->first();

        return view('agence.show', compact('agence'));



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
        $Agence = Agence::findOrFail($id);
        return view('Agence.edit', compact('Agence'));

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
            'nom_Agence' => 'required',
            'ville_Agence' => 'required',
            'quartier_Agence' => 'required',
            'telephone_Agence' => 'required',
            'description_Agence' => 'required',

        ]);
        $requestData = $request->all();

        $agence = agence::findOrFail($id);
        $agence->update($requestData);


    }
    public function destroy($id)
    {

        $delete =  agence::destroy($id);
        return redirect('agence')->with('message');
    }

}
