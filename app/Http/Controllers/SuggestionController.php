<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Role;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function index(Request $request)
    {
        $suggestion = Suggestion::select('suggestions.id','suggestions.description','suggestions.posted_at',
            'clients.name_client')

            ->join('clients','clients.id','=','suggestions.id_client')
            ->get();
            return view('suggestion.index', compact('suggestion'));
    }









    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //fonction qui renvoit le formulaire de creations des  utilsateurs
    public function create()
    {
            $client = Client::all();

            return view('suggestion.create', compact('client'));


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

        $this->validate($request, [

                    'description' => 'required',
                    'posted_at' => 'required',
                    'id_client' => 'required|exists:clients,id',

                ]);
                $requestData = $request->all();

                Client::create($requestData);

                return redirect('suggestion')->with('message', 'suggestion added!');




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

        $suggestion = Suggestion::findOrFail('id') ;
        $client = Client::findOrFail($suggestion['id_client']) ;
        return view('suggestion.show', compact('suggestion','client'));

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
                $client = Client::all();
                $suggestion = Suggestion::findOrFail($id);

                return view('suggestion.edit', compact('suggestion','client'));

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

                    'description' => 'required',
                    'posted_at' => 'required',
                    'id_client' => 'required|exists:clients,id',
                ]);
                $requestData = $request->all();

                $suggestion = Client::findOrFail($id);
                $suggestion->update($requestData);

                return redirect('suggestion');

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

                $delete= Suggestion::destroy($id);
                return redirect('suggestion')->with('message');


    }

}
