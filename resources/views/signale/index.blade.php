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
                    <div class="card-header">declarer perte</div>
                    <div class="card-body">
                        <a href="{{ url('/signale/create') }}" class="mb-2 mr-2 btn-hover-shine btn btn-success " title="Ajouter signale">
                            <i class="fa fa-plus" aria-hidden="true"></i> Ajouter une declaration de perte
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
                                            <th>{{__('description')}}</th>
                                            <th>{{__('lieu_perte')}}</th>
                                            <th>{{__('date_perte')}}</th>
                                            <th>{{__('statut_signale')}}</th>
                                            <th>{{__('categorie')}}</th>
                                            <th>{{__('client')}}</th>
                                            <th>{{__('Actions')}}</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($signale as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $item->description_signale }}</td>
                                            <td>{{ $item->lieu_perte }}</td>
                                            <td>{{ $item->date_perte }}</td>
                                            <td>{{ $item->statut_signale }}</td>
                                            <td>{{ $item->nom_categorie }}</td>
                                            <td>{{ $item->name_client }}</td>

                                            <td class="conteneur">
                                                <a href="{{ url('/signale/' . $item->id) }}" title="Voir signale"><button class="mb-2 mr-2 btn-hover-shine btn btn-info "><i class="fa fa-eye" aria-hidden="true"></i> Détails</button></a>
                                                <a href="{{ url('/signale/' . $item->id . '/edit') }}" title="Editer signale"><button class="mb-2 mr-2 btn-hover-shine btn btn-primary"><i class="fa fa-pen" aria-hidden="true"></i> Modifier</button></a>
                                                <form method="post" action="{{ url('/signale/delete/' . $item->id) }}"style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button class="mb-2 mr-2 btn-hover-shine btn btn-danger btn-sm delete-confirm" title="supprimer signale" type="submit">
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
