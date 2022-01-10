<style>
    .nav a {
        text-decoration: none;
        color: inherit;
        font-weight: 400;

    }

    .nav a:hover {
        font-weight: 900;
        color: rgb(0, 111, 152);
        border-radius: 5px;

    }

</style>
<div class="app-header header-shadow">
    <div>
        <div style="margin-left:80px">
            <a href="{{asset('assets/autres/img/logo.png')}}" target="_self">

                {{-- <span class="icon-wrapper-bg bg-success"></span> --}}
                <img src="{{asset('assets/autres/img/logo.png')}}" style="filter:invert()" width="100px" alt="photo">

            </a>        </div>

    <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <!--div>
                      <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                          <span class="hamburger-box">
                              <span class="hamburger-inner"></span>
                          </span>
                      </button>
                  </div-->
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
            {{-- <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div> --}}
            <ul class="header-megamenu nav">
                <li class="nav-item">
                    <a href="javascript:void(0);" data-placement="bottom" rel="popover-focus" data-offset="300"
                        data-toggle="popover-custom" class="nav-link">
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
                                                <li class="nav-item-header nav-item">
                                                    {{ __('Menu') }}
                                                </li>
                                                <li class="mm-active">

                                                    <a href="dashboard">
                                                        <i class="fas fa-home" aria-hidden="true"></i>
                                                        &nbsp &nbsp &nbsp {{ __('Dashboard') }} <br><br>
                                                    </a>
                                                <li class="nav-item">
                                                    <a href="{{ url('admin/entreprise') }}">
                                                        <i class="fas fa-briefcase"></i>
                                                        &nbsp &nbsp &nbsp {{ __('Entreprises') }}
                                                    </a>

                                                </li> <br>
                                                <li>
                                                    <a href="{{ url('admin/engin') }}">
                                                        <i class="fas fa-car"></i>
                                                        &nbsp &nbsp &nbsp {{ __('Engins') }}
                                                    </a>

                                                </li> <br>
                                                <li>
                                                    <a href="{{ url('admin/reparation') }}">
                                                        <i class="fas fa-wrench"></i>
                                                        &nbsp &nbsp &nbsp {{ __('Réparations') }}
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <ul class="nav flex-column">
                                                <li>
                                                    <a href="{{ url('admin/cout') }}">
                                                        <i class="fa fa-file" aria-hidden="true"></i>
                                                        &nbsp &nbsp &nbsp {{ __('Dévis | Facturations') }}
                                                    </a>
                                                </li><br>
                                                <li>
                                                    <a href="{{ url('admin/programme_entretien') }}">
                                                        <i class="fas fa-calendar"></i>
                                                        &nbsp &nbsp &nbsp {{ __('Programmes Entretiens') }}
                                                    </a>
                                                </li><br>

                                                <li>
                                                    <a href="{{ url('admin/depense') }}">
                                                        <i class="fa fa-money-bill" aria-hidden="true"></i>
                                                        &nbsp &nbsp &nbsp {{ __('Dépenses') }}
                                                    </a>
                                                </li> <br>
                                                <li>
                                                    <a href="{{ url('admin/signalerpb') }}">
                                                        <i class="fa fa-exclamation-triangle"></i>
                                                        &nbsp &nbsp &nbsp {{ __('Signaler une Panne') }}
                                                    </a>
                                                </li> <br>


                                                <li>
                                                    <a href="{{ url('admin/check-lists') }}">
                                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                                        &nbsp &nbsp &nbsp {{ __('Checklist') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <ul class="nav flex-column">

                                                <li>
                                                    <a href="index.html#">
                                                        <i class="fa fa-folder"></i>
                                                        &nbsp &nbsp &nbsp <b>{{ __('Documments Engins') }}</b>
                                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                                    </a>

                                                    <ul>

                                                        <li>
                                                            <a href="{{ url('admin/assurance') }}">

                                                                {{ __('Assurance') }}
                                                                <!-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> -->
                                                            </a>
                                                        </li><br>
                                                        <li>
                                                            <a href="{{ url('admin/patente') }}">

                                                                {{ __(' Patente | taxe') }}
                                                                <!-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> -->
                                                            </a>
                                                        </li> <br>

                                                        <li>
                                                            <a href="{{ url('admin/visite-technique') }}">

                                                                {{ __('Visite technique') }}
                                                                <!-- <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i> -->
                                                            </a>
                                                        </li><br>

                                                    </ul>





                                                </li>






                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="btn-group nav-item">
                    <a class="nav-link" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        &nbsp &nbsp{{ __('Paramètres') }}
                        <i class="fa fa-angle-down ml-2 opacity-5"></i>
                    </a>
                    <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-secondary">
                                <div class="menu-header-image opacity-5"
                                    style="background-image: url('assets/images/dropdown-header/abstract2.jpg');"></div>
                                <div class="menu-header-content">
                                    <h5 class="menu-header-title"> {{ __('Paramètres') }}</h5>
                                    <h6 class="menu-header-subtitle">{{ __('Configuration de l application') }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-area-xs">
                            <div class="scrollbar-container">
                                <h6 tabindex="-1" class="dropdown-header">{{ __('Liste Configurations') }}</h6>
                                <ul>

                                    <li class="mm-active">
                                        <a href="{{ url('admin/site') }}">

                                            &nbsp &nbsp {{ __('Site') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/engintype') }}">
                                            &nbsp &nbsp {{ __('Type Engin') }}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('admin/gamme') }}">
                                            &nbsp &nbsp {{ __('Gamme') }}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('admin/secteur-activiter') }}">
                                            &nbsp &nbsp {{ 'secteur d\'activite' }}
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>

                    </div>
                </li>
                <li class="dropdown nav-item">
                    {{-- <a aria-haspopup="true"  data-toggle="dropdown" class="nav-link" aria-expanded="false">
                              <i class="nav-link-icon pe-7s-settings"></i>
                              Projects
                              <i class="fa fa-angle-down ml-2 opacity-5"></i>
                          </a> --}}
                    <div tabindex="-1" role="menu" aria-hidden="true"
                        class="dropdown-menu-rounded dropdown-menu-lg rm-pointers dropdown-menu">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-success">
                                <div class="menu-header-image opacity-1"
                                    style="background-image: url('assets/images/dropdown-header/abstract3.jpg');"></div>
                                <div class="menu-header-content text-left">
                                    <h5 class="menu-header-title">Overview</h5>
                                    <h6 class="menu-header-subtitle">Unlimited options</h6>
                                    <div class="menu-header-btn-pane">
                                        <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                        <button class="btn-icon btn-icon-only btn btn-warning btn-sm">
                                            <i class="pe-7s-config btn-icon-wrapper"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" tabindex="0" class="dropdown-item"><i
                                class="dropdown-icon lnr-file-empty"> </i>Graphic Design</button>
                        <button type="button" tabindex="0" class="dropdown-item"><i
                                class="dropdown-icon lnr-file-empty"> </i>App Development</button>
                        <button type="button" tabindex="0" class="dropdown-item"><i
                                class="dropdown-icon lnr-file-empty"> </i>Icon Design</button>
                        <div tabindex="-1" class="dropdown-divider"></div>
                        <button type="button" tabindex="0" class="dropdown-item"><i
                                class="dropdown-icon lnr-file-empty"> </i>Miscellaneous</button>
                        <button type="button" tabindex="0" class="dropdown-item"><i
                                class="dropdown-icon lnr-file-empty"> </i>Frontend Dev</button>
                    </div>
                </li>
            </ul>
        </div>
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
