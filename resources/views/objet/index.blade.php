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
                        <a href="{{ url('/objet/create') }}" class="mb-2 mr-2 btn-hover-shine btn btn-success " title="Ajouter objet">
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
                                            <th>{{__('nom_objet')}}</th>
                                            <th>{{__('lieu_trouvail')}}</th>
                                            <th>{{__('date_trouvail')}}</th>
                                            <th>{{__('client')}}</th>
                                            <th>{{__('categorie')}}</th>
                                            <th>{{__('Actions')}}</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($objet as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>


                                            <td>{{ $item->nom_objet }}</td>
                                            <td>{{ $item->lieu_trouvail }}</td>
                                            <td>{{ $item->date_trouvail }}</td>
                                            <td>{{ $item->name_client }}</td>
                                            <td>{{ $item->nom_categorie }}</td>


                                            <td class="conteneur">
                                                <a href="{{ url('/objet/' . $item->id) }}" title="Voir objet"><button class="mb-2 mr-2 btn-hover-shine btn btn-info "><i class="fa fa-eye" aria-hidden="true"></i> Détails</button></a>
                                                <a href="{{ url('/objet/' . $item->id . '/edit') }}" title="Editer objet"><button class="mb-2 mr-2 btn-hover-shine btn btn-primary"><i class="fa fa-pen" aria-hidden="true"></i> Modifier</button></a>
                                                <form method="post" action="{{ url('/objet/delete/' . $item->id) }}"style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button class="mb-2 mr-2 btn-hover-shine btn btn-danger btn-sm delete-confirm" title="supprimer objet" type="submit">
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
