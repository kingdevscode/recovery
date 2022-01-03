<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
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
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Menu</li>


                <ul>

                    <li>

                        <a href="{{url('/home')}}">
                            <i class="fas fa-home" aria-hidden="true"></i>
                                &nbsp &nbsp &nbsp <b>Dashboard </b>
                        </a>
                    </li>








                    <li>
                        <a href="/" >
                            <i class="fas fa-object-group"></i>
                            &nbsp &nbsp &nbsp <b>Categorie D' Objets</b>


                        </a>
                        <ul>
                            <li>
                                <a href="{{url('/categorie')}}">
                                    <i class="fa fa-angle-right"></i> &nbsp &nbsp &nbsp consulter
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li>
                        <a href="/" >

                            <i class="fas fa-star"></i>
                            &nbsp &nbsp &nbsp <b> Objets</b>


                        </a>
                        <ul>
                            <li>
                                <a href="{{url('/objet')}}">
                                    <i class="fa fa-angle-right"></i> &nbsp &nbsp &nbsp consulter
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="/" >
                            <i class="fas fa-users"></i>
                                                 &nbsp &nbsp &nbsp <b> client</b>


                        </a>
                        <ul>
                            <li>
                                <a href="{{url('/client')}}">
                                    <i class="fa fa-angle-right"></i> &nbsp &nbsp &nbsp consulter
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="/" >
                            <i class="fas fa-sticky-note"></i>
                            &nbsp &nbsp &nbsp <b> Demandes</b>


                        </a>
                        <ul>
                            <li>
                                <a href="{{url('/demande')}}">
                                    <i class="fa fa-angle-right"></i> &nbsp &nbsp &nbsp consulter
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="/" >
                            <i class="fas fa-flag"></i>
                                                        &nbsp &nbsp &nbsp <b> Signaler</b>


                        </a>
                        <ul>
                            <li>
                                <a href="{{url('/signale')}}">
                                    <i class="fa fa-angle-right"></i> &nbsp &nbsp &nbsp consulter
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="/" >
                            <i class="fas fa-object-group"></i>
                            &nbsp &nbsp &nbsp <b> Suggestions</b>


                        </a>
                        <ul>
                            <li>
                                <a href="{{url('/suggestion')}}">
                                    <i class="fa fa-angle-right"></i> &nbsp &nbsp &nbsp consulter
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li>

                        <a href="/" >
                            <i class="fas fa-building"></i>
                            &nbsp &nbsp &nbsp <b> Agence</b>

                        </a>
                        <ul>
                            <li>
                                <a href="{{url('/agence')}}">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp &nbsp &nbsp consulter
                                </a>
                            </li>

                        </ul>

                    </li>

                    <li>

                            <a href="/">
                                <i class="fas fa-user"></i>
                                &nbsp &nbsp &nbsp<b> Personnel</b>

                            </a>
                            <ul>
                                <li>
                                    <a href="{{url('/user')}}">
                                        <i class="fa fa-angle-right"></i> &nbsp &nbsp &nbsp consulter
                                    </a>
                                </li>

                            </ul>

                    </li>

                    <li>
                        <a href="/">
                            <i class="fas fa-users-cog"></i>
                            &nbsp &nbsp &nbsp<b> Role</b>

                        </a>

                        <ul>
                            <li>
                                <a href="{{url('/role')}}">
                                    <i class="fa fa-angle-right"></i> &nbsp &nbsp &nbsp consulter
                                </a>
                            </li>

                        </ul>

                    </li>

                </ul>














            </ul>
        </div>
    </div>
</div>

