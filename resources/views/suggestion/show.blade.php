@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">suggestion</div>
                    <div class="card-body">
                        <div style="float:right">
                        <a href="{{ url('/suggestion/') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>

                        <a href="{{ url('/suggestion/' . $suggestion->id . '/edit') }}" title="Editer suggestion"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> Modifier</button></a>
                    </div>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> {{__('Commentaire')}} </th>
                                        <td> {{ $suggestion->nom_suggestion }} </td>
                                    </tr>

                                    <tr>
                                        <th>{{__('date')}} </th>
                                        <td> {{ $suggestion->posted_at}} </td>
                                    </tr>

                                    <tr>
                                        <th>{{__('civil')}}  </th>
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
