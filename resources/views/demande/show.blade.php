@extends('layout.apps')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{__('demande')}}</div>
                    <div class="card-body">
                        <div style="float:right">
                        <a href="{{ url('demande') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{__('Retour')}}</button></a>

                        <a href="{{ url('/demande/' . $demande->id . '/edit') }}" title="Edit demande"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> {{__('Modifier')}}</button></a>
                    </div>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> {{__('date_demande')}} </th>
                                        <td> {{ $demande->date_demande }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('date_traitement')}} </th>
                                        <td> {{ $demande->date_traitement }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('statut_demande')}} </th>
                                        <td> {{ $demande->statut_demande }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('client')}}  </th>
                                        <td> {{ $client->name_client }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('objet')}} </th>
                                        <td> {{ $objet->nom_objet }} </td>
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
