@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">role </div>
                    <div class="card-body">
                        <div style="float:right">
                        <a href="{{ url('/role') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>

                        <a href="{{ url('/role/' . $role->id . '/edit') }}" title="Editer role"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> Modifier</button></a>
                    </div>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> Nom role </th>
                                        <td> {{ $role->libelle_role }} </td>
                                    </tr>
                                    <tr>
                                        <th>Description </th>
                                        <td> {{ $role->description_r }} </td>
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
