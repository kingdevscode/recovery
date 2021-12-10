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
                    <div class="card-header">role</div>
                    <div class="card-body">
                        <a href="{{ url('/role/create') }}" class="mb-2 mr-2 btn-hover-shine btn btn-success btn-sm" title="Ajouter role">
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
                                            <th>{{__('Nom Du role')}}</th>
                                            <th>{{__('Description ')}}</th>

                                            <th>{{__('Actions')}}</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($role as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $item->nom_role }}</td>
                                            <td>{{ $item->description_r }}</td>


                                            <td class="conteneur">
                                                <a href="{{ url('/role/' . $item->id) }}" title="Voir role">
                                                    <button class="mb-2 mr-2 btn-hover-shine btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> </button></a>
                                                <a href="{{ url('/role/' . $item->id . '/edit') }}" title="Editer role">
                                                    <button class="mb-2 mr-2 btn-hover-shine btn btn-primary"><i class="fa fa-pen" aria-hidden="true"></i> </button></a>

                                                    <form method="post" action="{{ url('/role/delete/' . $item->id) }}"style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        @csrf
                                                        <button class="mb-2 mr-2 btn-hover-shine btn btn-danger delete-confirm" title="supprimer role" type="submit">
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