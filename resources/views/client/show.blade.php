@extends('layout.apps')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{__('client')}}</div>
                    <div class="card-body">
                        <div style="float:right">
                        <a href="{{ url('client') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{__('Retour')}}</button></a>

                        <a href="{{ url('/client/' . $client->id . '/edit') }}" title="Edit client"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> {{__('Modifier')}}</button></a>
                    </div>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> {{__('Nom')}} </th>
                                        <td> {{ $client->name_client }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('Prenom')}} </th>
                                        <td> {{ $client->prenom_client }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('Ville')}} </th>
                                        <td> {{ $client->ville_c }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('Quartier')}}  </th>
                                        <td> {{ $client->quartier_c }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('Telephone')}} </th>
                                        <td> {{ $client->telephone_c }} </td>
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
