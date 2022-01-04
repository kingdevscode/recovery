@extends('layouts.app')



@section('content')
<style>
    .row a {
        text-decoration: none;
        color: inherit;
        font-weight: 400;

    }

    .row a:hover {
        font-weight: 900;
        color: rgb(1, 8, 6);
        border-radius: 5px;

    }


</style>

<?php
use App\Models\Suggestion;
use App\Models\Categorie;

use App\Models\Role;
use App\Models\User;
use App\Models\objet;
use App\Models\agence;
use App\Models\Demande;
use App\Models\Client;
use App\Models\signale;
/*$user=Auth::user();

if($user)
        {


            $role = Role::Where('id','=',$user->id_role)->first() ;
            //
            if(  $role['libelle_role']==="utilisateur" )
            {*/
?>
<div class="page-title-wrapper">
    <div class="page-title-heading">

        <?php
       /* $demande = Demande::select('demandes.id','demandes.nom_demande','demandes.description_d','etats.nom_etat','users.name')
        ->join('etats','etats.id','=','demandes.id_etat')
        ->join('users','users.id','=','demandes.id_user')
        ->where('demandes.id_user','=',$user->id  )
        ->Where('etats.nom_etat' ,'=','Valider')
        ->get();
        $d=count($demande);*/
        //$demandes=Demande::all()->where('id_user','=',$user->id)->count();
       /* $demandes = Demande::select('demandes.id','demandes.nom_demande','etats.nom_etat')
            ->join('etats','etats.id','=','demandes.id_etat')
            ->join('users','users.id','=','demandes.id_user')
            ->where('demandes.id_user','=',$user->id  )
            ->Where('etats.nom_etat' ,'=','Valider')
            ->get()->count();
        $materiels=Materiel::all()->where('id_user','=',Auth::user()->id)->count();
*/

        ?>
      

    </div>
</div>
<br>
{{--<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">--}}
        <div class="row">


            {{--<div class="col-md-4">
                <div class="card mb-3 widget-chart widget-chart2 text-left">
                    <div class="widget-chart-actions">
                        <div class="btn-group dropdown">
                            <button type="button" aria-haspopup="true" aria-expanded="false" class="btn btn-link" data-toggle="dropdown">
                                <i class="fa fa-ellipsis-h ">
                                </i>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-lg dropdown-menu-right dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-primary">
                                        <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract1.jpg');"></div>
                                        <div class="menu-header-content">
                                            <div><h5 class="menu-header-title">Details du materiel</h5><h6 class="menu-header-subtitle">Manage all of your options</h6></div>

                                        </div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-header nav-item">nom</li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">{{ $item->nom_demande }}
                                        </a>
                                    </li>
                                    <li class="nav-item-header nav-item">description</li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">{{ $item->description_d }}
                                        </a>
                                    </li>

                                    <li class="nav-item-header nav-item">nom</li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">{{ $item->nom_etat }}
                                        </a>
                                    </li>

                                    <li class="nav-item-header nav-item">nom</li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">{{ $item->nom_demande }}
                                        </a>
                                    </li>

                                    <li class="nav-item-header nav-item">nom</li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">{{ $item->nom_demande }}
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-title">Materiel</div>
                        </div>
                        <div class="widget-chart-flex">
                            <div class="widget-numbers text-primary"><span>{{ $item->nom_demande }}</span></div>

                        </div>
                    </div>
                </div>
            </div>--}}


        </div>
    {{--</div>
</div>--}}



    <div class="row">


        <div class="col-md-5">
            <div class="card mb-3 widget-chart">
                <a href=" {{ url('role') }} "><div class="icon-wrapper rounded-circle" >
                    <div class="icon-wrapper-bg bg-danger"  ></div>

                   <i class="lnr-laptop-phone text-danger"></i></div></a>
                <div class="widget-numbers"><span>{{ $role }} </span></div>
                <div class="widget-subheading">role</div>
                <a href=" {{ url('role') }} ">
                    <div class="widget-description text-primary">
                        <span class="pr-1">Voir le(s) role(s)</span>
                       <i class="fa fa-angle-up ">

                     </i>
                    </div>
                </a>
            </div>
        </div>


        <div class="col-md-5">
            <div class="card mb-3 widget-chart">
                <a href=" {{ url('objet') }} "><div class="icon-wrapper rounded-circle" >
                    <div class="icon-wrapper-bg bg-danger"  ></div>

                   <i class="lnr-laptop-phone text-danger"></i></div></a>
                <div class="widget-numbers"><span>{{ $objet }} </span></div>
                <div class="widget-subheading">objet</div>
                <a href=" {{ url('objet') }} ">
                    <div class="widget-description text-primary">
                        <span class="pr-1">Voir le(s) objet(s)</span>
                       <i class="fa fa-angle-up ">

                     </i>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card mb-3 widget-chart">
                <a href=" {{ url('signale') }} "><div class="icon-wrapper rounded-circle" >
                    <div class="icon-wrapper-bg bg-danger"  ></div>

                   <i class="lnr-laptop-phone text-danger"></i></div></a>
                <div class="widget-numbers"><span>{{ $signale }} </span></div>
                <div class="widget-subheading">signale</div>
                <a href=" {{ url('signale') }} ">
                    <div class="widget-description text-primary">
                        <span class="pr-1">Voir le(s) signale(s)</span>
                       <i class="fa fa-angle-up ">

                     </i>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card mb-3 widget-chart">
                <a href=" {{ url('categorie') }} "><div class="icon-wrapper rounded-circle" >
                    <div class="icon-wrapper-bg bg-danger"  ></div>

                   <i class="lnr-laptop-phone text-danger"></i></div></a>
                <div class="widget-numbers"><span>{{ $categorie }} </span></div>
                <div class="widget-subheading">Categorie</div>
                <a href=" {{ url('categorie') }} ">
                    <div class="widget-description text-primary">
                        <span class="pr-1">Voir le(s) categorie(s)</span>
                       <i class="fa fa-angle-up ">

                     </i>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card mb-3 widget-chart">
                <a href=" {{ url('demande') }} "><div class="icon-wrapper rounded-circle" >
                    <div class="icon-wrapper-bg bg-danger"  ></div>

                   <i class="lnr-laptop-phone text-danger"></i></div></a>
                <div class="widget-numbers"><span>{{ $demande }} </span></div>
                <div class="widget-subheading">Demande</div>
                <a href=" {{ url('demande') }} ">
                    <div class="widget-description text-primary">
                        <span class="pr-1">Voir le(s) demande(s)</span>
                       <i class="fa fa-angle-up ">

                     </i>
                    </div>
                </a>
            </div>
        </div>

    </div>



<div class="row">




    <div class="col-md-5">
        <div class="card mb-3 widget-chart">
            <a href=" {{ url('agence') }} "><div class="icon-wrapper rounded-circle" >
                <div class="icon-wrapper-bg bg-danger"  ></div>

               <i class="lnr-laptop-phone text-danger"></i></div></a>
            <div class="widget-numbers"><span>{{ $agence }} </span></div>
            <div class="widget-subheading">Agence</div>
            <a href=" {{ url('agence') }} ">
                <div class="widget-description text-dark">
                    <span class="pr-1">Voir le(s) agence(s)</span>
                   <i class="fa fa-angle-up ">

                 </i>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card mb-3 widget-chart">
            <a href=" {{ url('client') }} "><div class="icon-wrapper rounded-circle" >
                <div class="icon-wrapper-bg bg-danger"  ></div>

               <i class="lnr-laptop-phone text-danger"></i></div></a>
            <div class="widget-numbers"><span>{{ $client }} </span></div>
            <div class="widget-subheading">Client</div>
            <a href=" {{ url('client') }} ">
                <div class="widget-description text-dark">
                    <span class="pr-1">Voir le(s) client(s)</span>
                   <i class="fa fa-angle-up ">

                 </i>
                </div>
            </a>
        </div>
    </div>

    {{--<div class="col-md-5">
        <div class="card mb-3 widget-chart">
            <a href=" {{ url('suggestion') }} "><div class="icon-wrapper rounded-circle" >
                <div class="icon-wrapper-bg bg-danger"  ></div>

               <i class="lnr-laptop-phone text-danger"></i></div></a>
            <div class="widget-numbers"><span>{{ $suggestion }} </span></div>
            <div class="widget-subheading">Suggestion</div>
            <a href=" {{ url('suggestion') }} ">
                <div class="widget-description text-dark">
                    <span class="pr-1">Voir le(s) suggestion(s)</span>
                   <i class="fa fa-angle-up "></i>
                </div>
            </a>
        </div>
    </div>
--}}
    <div class="col-md-5">
        <div class="card mb-3 widget-chart">
            <a href=" {{ url('categorie') }} "><div class="icon-wrapper rounded-circle" >
                <div class="icon-wrapper-bg bg-danger"  ></div>

               <i class="lnr-laptop-phone text-danger"></i></div></a>
            <div class="widget-numbers"><span>{{ $categorie }} </span></div>
            <div class="widget-subheading">Categorie</div>
            <a href=" {{ url('categorie') }} ">
                <div class="widget-description text-dark">
                    <span class="pr-1">Voir le(s) categorie(s)</span>
                   <i class="fa fa-angle-up ">

                 </i>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card mb-3 widget-chart">
            <a href=" {{ url('demande') }} "><div class="icon-wrapper rounded-circle" >
                <div class="icon-wrapper-bg bg-danger"  ></div>

               <i class="lnr-laptop-phone text-danger"></i></div></a>
            <div class="widget-numbers"><span>{{ $demande }} </span></div>
            <div class="widget-subheading">Demande</div>
            <a href=" {{ url('demande') }} ">
                <div class="widget-description text-dark">
                    <span class="pr-1">Voir le(s) demande(s)</span>
                   <i class="fa fa-angle-up ">

                 </i>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card mb-3 widget-chart">
            <a href=" {{ url('user') }} "><div class="icon-wrapper rounded-circle" >
                <div class="icon-wrapper-bg bg-danger"  ></div>

               <i class="lnr-laptop-phone text-danger"></i></div></a>
            <div class="widget-numbers"><span>{{ $user }} </span></div>
            <div class="widget-subheading">Personnel</div>
            <a href=" {{ url('user') }} ">
                <div class="widget-description text-dark">
                    <span class="pr-1">Voir le(s) Personnel(s)</span>
                   <i class="fa fa-angle-up ">

                 </i>
                </div>
            </a>
        </div>
    </div>


</div>






@endsection
