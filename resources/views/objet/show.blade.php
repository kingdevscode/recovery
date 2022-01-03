@extends('layout.apps')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{__('objet')}}</div>
                    <div class="card-body">
                        <div style="float:right">
                        <a href="{{ url('objet') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{__('Retour')}}</button></a>

                        <a href="{{ url('/objet/' . $objet->id . '/edit') }}" title="Edit objet"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> {{__('Modifier')}}</button></a>
                    </div>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> {{__('Nom')}} </th>
                                        <td> {{ $objet->nom_objet }} </td>
                                    </tr>
                                   
                                    <tr>
                                        <th>{{__('lieu_trouvail')}} </th>
                                        <td> {{ $objet->lieu_trouvail }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('date_trouvail')}} </th>
                                        <td> {{ $objet->date_trouvail }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('categorie')}}  </th>
                                        <td> {{ $categorie->nom_categorie }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('client')}} </th>
                                        <td> {{ $client->name_client }} </td>
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
