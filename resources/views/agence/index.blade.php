@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">agence</div>
                    <div class="card-body">
                        <a href="{{ url('/agence/create') }}" class="mb-2 mr-2 btn-hover-shine btn btn-success btn-sm" title="Ajouter agence">
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
                                            <th>{{__('Nom De agence')}}</th>
                                            <th>{{__('ville De agence')}}</th>
                                            <th>{{__('Quartier')}}</th>
                                            <th>{{__('telephone De agence')}}</th>

                                            <th>{{__('Description ')}}</th>

                                            <th>{{__('Actions')}}</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($agence as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $item->nom_agence }}</td>
                                            <td>{{ $item->ville_agence }}</td>
                                            <td>{{ $item->quartier_agence }}</td>
                                            <td>{{ $item->telephone_agence }}</td>
                                            <td>{{ $item->description }}</td>

                                            <td >

                                                <a href="{{ url('/agence/' . $item->id) }}" title="Voir agence">
                                                    <button class="mb-2 mr-2 btn-hover-shine btn btn-info btn-sm">
                                                        <i class="fa fa-eye" aria-hidden="true">
                                                        </i></button></a>
                                                <a href="{{ url('/agence/' . $item->id . '/edit') }}" title="Editer agence">
                                                    <button class="mb-2 mr-2 btn-hover-shine btn btn-primary btn-sm">
                                                        <i class="fa fa-pen" aria-hidden="true"></i>
                                                    </button>
                                                </a>

                                                <form method="post" action="{{ url('/agence/delete/' . $item->id) }}"style="display:inline" >
                                                    {{ method_field('DELETE') }}
                                                    @csrf
                                                    <button class="mb-2 mr-2 btn-hover-shine btn btn-danger delete-confirm" type="submit"
                                                    title="supprimer agence" >
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
