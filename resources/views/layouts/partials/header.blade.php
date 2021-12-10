<style>
    .nav a {
        text-decoration: none;
        color: inherit;
        font-weight: 600;

    }

    .nav a:hover {
        font-weight: 1000;
        color: rgb(15, 22, 21);
        border-radius: 5px;

    }

</style>




<div class="app-header header-shadow">
    <div>
        <div style="margin-left:80px">
            <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                <span class="icon-wrapper-bg bg-success"></span>
                <img src="{{asset('assets/images/favicon.png')}}" width="55px" alt="photo">
            </span>

        </div>

        <div class="logo-src"></div>
            <div class="header__pane ml-auto">

            </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">

            <ul class="header-megamenu nav">
                <li class="nav-item">
                    <a href="javascript:void(0);" data-placement="bottom" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                        <i class="nav-link-icon pe-7s-gift"> </i>
                        Mega Menu
                        <i class="fa fa-angle-down ml-2 opacity-5"></i>
                    </a>
                    <div class="rm-max-width">
                        <div class="d-none popover-custom-content">
                            <div class="dropdown-mega-menu">
                                <div class="grid-menu grid-menu-3col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-6 col-xl-4">
                                            <ul class="nav flex-column">
                                                <?php
                                                use App\Models\Role;
                                                $user=Auth::user();

                                                if( $user)
                                                {
                                                    $role = Role::Where('id','=',$user->id_role)->first();
                                                    if(  $role['libelle_role']==="super_admin" || $role['libelle_role']==="admin"|| $role['libelle_role']==="utilisateur")
                                                    {

                                                ?>
                                                <li class="nav-item-header nav-item">
                                                    Menu
                                                </li>
                                                <li class="mm-active">

                                                    <a href="{{url('/home')}}">
                                                        <i class="fas fa-home" aria-hidden="true"></i>
                                                        &nbsp &nbsp &nbsp <b> Dashboard</b> <br><br>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/" >
                                                        <i class="fa fa-toolbox"></i>
                                                        &nbsp &nbsp &nbsp <b> Materiel </b>
                                                    </a>
                                                </li> <br>

                                                <li>
                                                    <a href="/" >
                                                        <i class="fas fa-sticky-note"></i>
                                                        &nbsp &nbsp &nbsp<b> Demande</b><br><br>

                                                        </a>
                                                </li>

                                                <?php
                                                }
                                                }
                                             ?>

                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                           <ul class="nav flex-column">
                                            <?php

                                            $user=Auth::user();

                                            if( $user)
                                            {
                                                $role = Role::Where('id','=',$user->id_role)->first();
                                                if(  $role['libelle_role']==="super_admin" || $role['libelle_role']==="admin"){

                                            ?>
                                            <br>
                                            <li>

                                                <a href="/batiment" >
                                                    <i class="fas fa-building"></i>
                                                    &nbsp &nbsp &nbsp <b> Batiment</b> <br>

                                                </a>

                                            </li> <br>
                                                <li>
                                                    <a href="/" >
                                                        <i class="fas fa-object-group"></i>
                                                        &nbsp &nbsp &nbsp <b>Categorie De Materiels</b>


                                                    </a>
                                                </li><br>



                                                <li>
                                                    <a href="/statut" >
                                                        <i class="fas fa-splotch"></i>
                                                        &nbsp &nbsp &nbsp <b>Statut</b>


                                                    </a> <br> <br>
                                                </li>
                                                <?php
                                                 }else {
                                                ?>
                                                    <div align="center" >
                                                        <img src="{{asset('assets/images/favicon.png')}}" alt="photo"
                                                        width="130px"  >
                                                    </div>
                                                     <?php
                                                }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <ul class="nav flex-column">
                                                <?php

                                                $user=Auth::user();

                                                if( $user)
                                                {
                                                    $role = Role::Where('id','=',$user->id_role)->first();
                                                    if(  $role['libelle_role']==="super_admin" ){

                                                ?>
                                                <br>
                                                <li>
                                                    <a href="/">
                                                        <i class="fas fa-user"></i>
                                                        &nbsp &nbsp &nbsp<b> Utilisateur</b>

                                                    </a>
                                                </li><br>



                                                <li>
                                                    <a href="/role" >
                                                    <i class="fas fa-users-cog"></i>
                                                    &nbsp &nbsp &nbsp<b> Role</b>
                                                    </a>
                                                </li><br>
                                                <?php
                                                    }else {
                                                ?>
                                                    <div align="center"  >
                                                        <img src="{{asset('assets/images/favicon.png')}}" alt="photo"
                                                        width="130px"  >
                                                    </div>
                                                     <?php
                                                }
                                                }
                                               ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
        <?php
        use App\Models\Materiel;
        use App\Models\Categorie;



        use App\Models\Statut;
        use App\Models\Batiment;
        use App\Models\Demande;
        use App\Models\Etat;
        $user=Auth::user();

            if($user)
            {


        $role = Role::Where('id','=',$user->id_role)->first() ;
        //
        if(  $role['libelle_role']==="super_admin"|| $role['libelle_role']==="admin"|| $role['libelle_role']==="utilisateur" )
        {

            //$etat = Etat::Where('nom_etat','=', 'En attente') ;
        //$d=Demande::all()->Where('id_etat','=',$etat->id);
        //afficher les 5 derniere demandes valider ou non valider
        $d = Demande::select('demandes.id','demandes.nom_demande','etats.nom_etat')
            ->join('etats','etats.id','=','demandes.id_etat')
            ->join('users','users.id','=','demandes.id_user')
            ->where('demandes.id_user','=',$user->id  )
            ->Where('etats.nom_etat' ,'=','Valider')
            ->orWhere('etats.nom_etat','=','Non Valider')
            ->orderBy('demandes.id', 'desc')
            ->limit(5)
            ->get();

            //compter les demandes en attentes
            $demande = Demande::select('demandes.id','demandes.nom_demande','demandes.description_d','etats.nom_etat','users.name')
            ->join('etats','etats.id','=','demandes.id_etat')
            ->join('users','users.id','=','demandes.id_user')
            ->Where('etats.nom_etat' ,'=','En attente')
            ->count();
            //demandes en attente
            $d1 = Demande::select('demandes.id','demandes.nom_demande','etats.nom_etat')
            ->join('etats','etats.id','=','demandes.id_etat')
            ->join('users','users.id','=','demandes.id_user')
            ->Where('etats.nom_etat' ,'=','En attente')
            ->orderBy('demandes.id', 'desc')
            ->limit(5)
            ->get();
           // dd($d1);
        ?>
        <div class="app-header-right">
            <div class="header-dots">
                <div class="dropdown">
                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                            <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                <span class="icon-wrapper-bg bg-danger"></span>
                                <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                                <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                            </span>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-header mb-0">
                                <div class="dropdown-menu-header-inner bg-deep-blue">
                                    <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                    <div class="menu-header-content text-dark">
                                        <h5 class="menu-header-title">Notifications</h5>
                                        <?php
                                            $user=Auth::user();

                                            if($user)
                                            {
                                            $role = Role::Where('id','=',$user->id_role)->first() ;
                                            if( $role['libelle_role']==="super_admin"|| $role['libelle_role']==="admin" )
                                            {
                                        ?>
                                        <h6 class="menu-header-subtitle">Vous avez <b>{{$demande}}</b> demande en attente</h6>
                                        <?php }}?>
                                        <?php
                                            $user=Auth::user();

                                            if($user)
                                            {
                                            $role = Role::Where('id','=',$user->id_role)->first() ;
                                            if( $role['libelle_role']==="utilisateur" )
                                            {
                                        ?>
                                        <h6 class="menu-header-subtitle">Vous avez <b>{{count($d)}}</b>qui ont ete traiter</h6>
                                        <?php }}?>
                                    </div>
                                </div>
                            </div>
                            <div class="main-card mb-3 card">

                                <table style="width: 100%;">

                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('nom du materiel')}}</th>

                                                <th>{{__('etat de la demande')}}</th>



                                            </tr>
                                        </thead>

                                    <tbody>
                                        <?php
                                            $user=Auth::user();

                                            if($user)
                                            {
                                            $role = Role::Where('id','=',$user->id_role)->first() ;
                                            if(  $role['libelle_role']==="super_admin"|| $role['libelle_role']==="admin")
                                            {
                                        ?>
                                            @foreach($d1 as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td>{{ $item->nom_demande }}</td>


                                                    <td>{{ $item->nom_etat }}</td>
                                                </tr>
                                            @endforeach
                                        <?php }} ?>
                                        <?php

                                            $user=Auth::user();

                                                if($user)
                                                {


                                            $role = Role::Where('id','=',$user->id_role)->first() ;
                                            //
                                            if(  $role['libelle_role']==="super_admin"|| $role['libelle_role']==="admin"|| $role['libelle_role']==="utilisateur" )
                                            {
                                        ?>
                                            @foreach($d as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>{{ $item->nom_demande }}</td>


                                                <td>{{ $item->nom_etat }}</td>
                                            </tr>
                                            @endforeach
                                        <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider nav-item"></li>
                                <li class="nav-item-btn text-center nav-item">
                                    <a href="{{url('demande/')}}">
                                        <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">voir toutes les demandes</button>

                                    </a>
                                </li>
                            </ul>
                        </div>
                </div>

            </div>

            <?php
            }
            }
            ?>

            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <button type="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false" class="p-0 btn btn-link dd-chart-btn">
                                    <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                        <span class="icon-wrapper-bg bg-success"></span>
                                        <i class="icon text-success ion-ios-analytics"></i>
                                    </span>
                                </button>

                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');">

                                            </div>
                                            <div class="menu-header-content text-left">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">

                                                        <div class="widget-content-right">
                                                            <div class="widget-heading">
                                                                {{ Auth::user()->name }}
                                                                {{ Auth::user()->prenom }}
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="scroll-area-xs" style="height: 150px;">
                                        <div class="scrollbar-container ps">
                                            <ul class="nav flex-column">

                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Nom
                                                        <div class="ml-auto badge  badge-alternate">{{ Auth::user()->name }}
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Prenom
                                                        <div class="ml-auto badge  badge-alternate">
                                                            {{ Auth::user()->prenom }}

                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="javascript:void(0);" class="nav-link">Email
                                                        <div class="ml-auto badge  badge-alternate">
                                                            {{ Auth::user()->email }}
                                                        </div>
                                                    </a>
                                                </li>

                                                <div class="widget-content-right">


                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <a class="dropdown-item" href="route('logout')"
                                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                                <button
                                                                    class="btn-pill btn-shadow btn-shine btn btn-focus">{{ __('Deconnecter') }}
                                                                </button>
                                                            </a>
                                                        </form>

                                                </div>



                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{ Auth::user()->name}}
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
