@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Categorie </div>
                    <div class="card-body">
                        <div style="float:right">
                        <a href="{{ url('/categorie') }}" title="retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>

                        <a href="{{ url('/categorie/' . $categorie->id . '/edit') }}" title="Editer Categorie"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> Modifier</button></a>
                    </div>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> Nom Categorie </th>
                                        <td> {{ $categorie->libelle_cat }} </td>
                                    </tr>
                                    <tr>
                                        <th>Description </th>
                                        <td> {{ $categorie->description_c }} </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
