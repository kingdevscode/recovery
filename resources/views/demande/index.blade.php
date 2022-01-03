@extends('layouts.apps')

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
                    <div class="card-header">demande</div>
                    <div class="card-body">
                        <a href="{{ url('/demande/create') }}" class="mb-2 mr-2 btn-hover-shine btn btn-success " title="Ajouter demande">
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
                                            <th>{{__('date_demande')}}</th>
                                            <th>{{__('date_traitement')}}</th>
                                            <th>{{__('statut_demande')}}</th>
                                            <th>{{__('id_personnel')}}</th>
                                            <th>{{__('client')}}</th>
                                            <th>{{__('objet')}}</th>
                                            <th>{{__('Actions')}}</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($demande as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $item->date_demande }}</td>
                                            <td>{{ $item->date_traitement }}</td>
                                            <td>{{ $item->statut_demande }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->name_client }}</td>
                                            <td>{{ $item->nom_objet }}</td>


                                            <td class="conteneur">
                                                <a href="{{ url('/demande/' . $item->id) }}" title="Voir demande"><button class="mb-2 mr-2 btn-hover-shine btn btn-info "><i class="fa fa-eye" aria-hidden="true"></i> Détails</button></a>
                                                <a href="{{ url('/demande/' . $item->id . '/edit') }}" title="Editer demande"><button class="mb-2 mr-2 btn-hover-shine btn btn-primary"><i class="fa fa-pen" aria-hidden="true"></i> Modifier</button></a>
                                                <form method="post" action="{{ url('/demande/delete/' . $item->id) }}"style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button class="mb-2 mr-2 btn-hover-shine btn btn-danger btn-sm delete-confirm" title="supprimer demande" type="submit">
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
