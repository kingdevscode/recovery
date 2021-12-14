@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Ajouter une categorie</div>
                <div class="card-body">
                <div style="float:right">
                 <a href="{{ url('/categorie') }}" title="Retour"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</button></a>
                    </div>
                    <br />
                    <br />

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ url('/categorie') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}




                        @include ('categorie.form', ['formMode' => 'create'])


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

