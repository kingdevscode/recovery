@extends('layouts.app')

@section('content')
<style>
    .conteneur{
        display: inline-flex;
    }
</style>
    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Utilisateur</div>
                    <div class="card-body">
                        <a href="{{ url('/user/create') }}" class="mb-2 mr-2 btn-hover-shine btn btn-success " title="Ajouter user">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter
                        </a>
                        &nbsp;&nbsp;

                       <br><br>


                        <div class="main-card mb-3 card">
                            <div class="card-body">


                                <table style="width: 100%;" id="example"
                                    class="table table-hover table-striped table-bordered">

                                    <thead>
                                        <tr>


                                            <th>#</th>
                                            <th>{{__('nom')}}</th>
                                            <th>{{__('prenom')}}</th>
                                            <th>{{__('poste')}}</th>
                                            <th>{{__('role')}}</th>
                                            <th>{{__('batiment')}}</th>
                                            <th>{{__('Actions')}}</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->prenom }}</td>
                                            <td>{{ $item->poste }}</td>
                                            <td>{{ $item->nom_role }}</td>
                                            <td>{{ $item->nom_agence }}</td>


                                            <td class="conteneur">
                                                <a href="{{ url('/user/' . $item->id) }}" title="Voir user"><button class="mb-2 mr-2 btn-hover-shine btn btn-info "><i class="fa fa-eye" aria-hidden="true"></i> Détails</button></a>
                                                <a href="{{ url('/user/' . $item->id . '/edit') }}" title="Editer user"><button class="mb-2 mr-2 btn-hover-shine btn btn-primary"><i class="fa fa-pen" aria-hidden="true"></i> Modifier</button></a>
                                                <form method="post" action="{{ url('/user/delete/' . $item->id) }}"style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button class="mb-2 mr-2 btn-hover-shine btn btn-danger btn-sm delete-confirm" title="supprimer user" type="submit">
                                                        <i class="fa fa-trash"></i>
                                                       </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
