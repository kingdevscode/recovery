@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{__('user')}}</div>
                    <div class="card-body">
                        <div style="float:right">
                        <a href="{{ url('user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> {{__('Retour')}}</button></a>

                        <a href="{{ url('/user/' . $user->id . '/edit') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i class="fa fa-pen" aria-hidden="true"></i> {{__('Modifier')}}</button></a>
                    </div>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> {{__('Nom')}} </th>
                                        <td> {{ $user->name }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('Prenom')}} </th>
                                        <td> {{ $user->prenom }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('Poste')}} </th>
                                        <td> {{ $user->poste }} </td>
                                    </tr>
                                    <tr>
                                        <th>{{__('Role')}}  </th>
                                        <td> {{ $role->libelle_role }} </td>
                                    </tr>
                                    <tr>
                                        <th> {{__('Batiment')}} </th>
                                        <td> {{ $batiment->libelle_bat }} </td>
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
