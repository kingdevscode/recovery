@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">{{__('BON A SAVOIR')}}</div>
          <div class="card-body">
            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <!-- Small boxes (Stat box) -->
                  <div class="rounded mt-2 mb-2 container col-md-3">
                    <div class="rounded small-box" style="color:white; background-color:#3AC47D;">
                      <div class="px-4">
                        <div style="display:flex; justify-content:space-between"  href=" {{ url('admin/article') }} " class="row">
                          <div class="inner">
                            <h3> {{ $article }} </h3>
                            <p><b>{{__('Article(s)')}}</b></p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <a style="width:100%"   href=" {{ url('admin/articles') }} " style="background-color:rgb(110, 123, 165);" class="btn btn-primary small-box-footer">
                        {{__('Voir les Article')}} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <!-- Small boxes (Stat box) -->
                  <div class="rounded mt-2 mb-2 container col-md-3">
                    <div class="rounded small-box" style="color:white; background-color:#3AC47D;">
                      <div class="px-4">
                        <div style="display:flex; justify-content:space-between"  href=" {{ url('admin/users') }} " class="row">
                          <div class="inner">
                            <h3> {{ $user }} </h3>

                            <p><b>{{__('Utilisateur(s)')}}</b></p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <a style="width:100%"   href=" {{ url('admin/users') }} " style="background-color:rgb(110, 123, 165);" class="btn btn-primary small-box-footer">
                        {{__('Voir les Utilisateurs')}} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <!-- Small boxes (Stat box) -->
                  <div class="rounded mt-2 mb-2 container col-md-3">
                    <div class="rounded small-box" style="color:white; background-color:#3AC47D;">
                      <div class="px-4">
                        <div style="display:flex; justify-content:space-between"  href=" {{ url('admin/formations') }} " class="row">
                          <div class="inner">
                            <h3> {{ $formation }} </h3>

                            <p><b>{{__('Formation(s)')}}</b></p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <a style="width:100%"   href=" {{ url('admin/formations ') }} " style="background-color:rgb(110, 123, 165);" class="btn btn-primary small-box-footer">
                       {{__('Voir les formations')}} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <!-- Small boxes (Stat box) -->
                  <div class="rounded mt-2 mb-2 container col-md-3">
                    <div class="rounded small-box" style="color:white; background-color:#3AC47D;">
                      <div class="px-4">
                        <div style="display:flex; justify-content:space-between"  href=" {{ url('admin/boutiques') }} " class="row">
                          <div class="inner">
                            <h3> {{ $boutique }} </h3>

                            <p><b>{{__('Boutique(s)')}}</b></p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <a style="width:100%"   href=" {{ url('admin/boutiques') }} " style="background-color:rgb(110, 123, 165);" class="btn btn-primary small-box-footer">
                        {{__('Voir les boutiques')}} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <!-- Small boxes (Stat box) -->
                  <div class="rounded mt-2 mb-2 container col-md-3">
                    <div class="rounded small-box" style="color:white; background-color:#3AC47D;">
                      <div class="px-4">
                        <div style="display:flex; justify-content:space-between"  href=" {{ url('admin/offre_emplois') }} " class="row">
                          <div class="inner">
                            <h3> {{ $offre }} </h3>

                            <p><b>{{__('Offre(s) d\'emploi')}}</b></p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <a style="width:100%"   href=" {{ url('admin/offre_emplois') }} " style="background-color:rgb(110, 123, 165);" class="btn btn-primary small-box-footer">
                        {{__('Voir les Offres d\'emploi')}}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <!-- Small boxes (Stat box) -->
                  <div class="rounded mt-2 mb-2 container col-md-3">
                    <div class="rounded small-box" style="color:white; background-color:#3AC47D;">
                      <div class="px-4">
                        <div style="display:flex; justify-content:space-between"  href=" {{ url('admin/conferences') }} " class="row">
                          <div class="inner">
                            <h3> {{ $conference }} </h3>

                            <p><b>{{__('Conference(s)')}}</b></p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <a style="width:100%"   href=" {{ url('admin/conferences') }} " style="background-color:rgb(110, 123, 165);" class="btn btn-primary small-box-footer">
                        {{__('Voir les conferences')}} <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <!-- Small boxes (Stat box) -->
                  <div class="rounded mt-2 mb-2 container col-md-3">
                    <div class="rounded small-box" style="color:white; background-color:#3AC47D;">
                      <div class="px-4">
                        <div style="display:flex; justify-content:space-between"  href=" {{ url('admin/spetialistes') }} " class="row">
                          <div class="inner">
                            <h3> {{ $spetialiste }} </h3>

                            <p><b>{{__('Spetialiste(s)')}}</b></p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <a style="width:100%"   href=" {{ url('admin/spetialistes') }} " style="background-color:rgb(110, 123, 165);" class="btn btn-primary small-box-footer">
                        {{__('Voir les spetialistes')}}<i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <!-- Small boxes (Stat box) -->
                  <div class="rounded mt-2 mb-2 container col-md-3">
                    <div class="rounded small-box" style="color:white; background-color:#3AC47D;">
                      <div class="px-4">
                        <div style="display:flex; justify-content:space-between"  href=" {{ url('admin/terrains') }} " class="row">
                          <div class="inner">
                            <h3> {{ $terrain }} </h3>

                            <p><b>{{('Terrain(s)')}}</b></p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <a style="width:100%"   href=" {{ url('admin/terrains') }} " style="background-color:rgb(110, 123, 165);" class="btn btn-primary small-box-footer">
                        {{__('Voir les terrains')}}
                        <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
