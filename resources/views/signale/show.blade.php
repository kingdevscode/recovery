@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{__('signale')}}</div>
                    <div class="card-body">
                        <div style="float:right">
                        <a href="{{ url('signale') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{__('Retour')}}</button></a>

                        <a href="{{ url('/signale/' . $signale->id . '/edit') }}" title="Edit signale"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> {{__('Modifier')}}</button></a>
                    </div>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> {{__('Nom')}} </th>
                                        <td> {{ $signale->description_signale }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('Prenom')}} </th>
                                        <td> {{ $signale->lieu_perte }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('Poste')}} </th>
                                        <td> {{ $signale->date_perte }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('Role')}}  </th>
                                        <td> {{ $signale->statut_signale }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('categorie')}} </th>
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
