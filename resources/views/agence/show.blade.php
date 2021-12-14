@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">agence </div>
                    <div class="card-body">
                        <div style="float:right">
                            <a href="{{ url('/agence') }}" title="retour">
                                <button class="btn btn-warning btn-sm">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                    Retour
                                </button>
                            </a>
                            <a href="{{ url('/agence/' . $agence->id . '/edit') }}" title="Editer agence">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-pen" aria-hidden="true"></i> Modifier
                                </button>
                            </a>
                        </div>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <th> Nom agence </th>
                                        <td> {{ $agence->libelle_agence }} </td>
                                    </tr>
                                    <tr>
                                        <th>Description </th>
                                        <td> {{ $agence->description_agence }} </td>
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
