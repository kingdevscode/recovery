@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">batiment </div>
                    <div class="card-body">
                        <div style="float:right">
                            <a href="{{ url('/batiment') }}" title="retour">
                                <button class="btn btn-warning btn-sm">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> 
                                    Retour
                                </button>
                            </a>
                            <a href="{{ url('/batiment/' . $batiment->id . '/edit') }}" title="Editer batiment">
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
                                        <th> Nom batiment </th>
                                        <td> {{ $batiment->libelle_bat }} </td>
                                    </tr>
                                    <tr>
                                        <th>Description </th>
                                        <td> {{ $batiment->description_b }} </td>
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
