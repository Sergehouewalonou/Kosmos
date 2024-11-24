<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="{{route('admin.create')}}"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <ul class="pcoded-item pcoded-left-item">
            <li class=" {{Route::currentRouteName() == 'gerant.bilan'? 'active' : ''}}">
                <a href="{{route('gerant.bilan')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{Route::currentRouteName() == 'typemateriel.create'? 'active pcoded-trigger' : ''}} {{Route::currentRouteName() == 'typemateriel.index'? 'active pcoded-trigger' : ''}}">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Categorie</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{Route::currentRouteName() == 'typemateriel.create'? 'active' : ''}}">
                        <a href="{{route('typemateriel.create')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Créer</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{Route::currentRouteName() == 'typemateriel.index'? 'active' : ''}}">
                        <a href="{{route('typemateriel.index')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Listes</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{Route::currentRouteName() == 'materiel.create'? 'active pcoded-trigger' : ''}} {{Route::currentRouteName() == 'materiel.index'? 'active pcoded-trigger' : ''}}">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Matériaux</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{Route::currentRouteName() == 'materiel.create'? 'active ' : ''}} ">
                        <a href="{{route('materiel.create')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Ajouter</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="{{Route::currentRouteName() == 'materiel.index'? 'active ' : ''}} ">
                        <a href="{{route('materiel.index')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Listes</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>

        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{Route::currentRouteName() == 'commande.index'? 'active pcoded-trigger' : ''}} {{Route::currentRouteName() == 'commande.cours'? 'active pcoded-trigger' : ''}} {{Route::currentRouteName() == 'commande.traitée'? 'active pcoded-trigger' : ''}}">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Commandes</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{Route::currentRouteName() == 'commande.index'? 'active ' : ''}} ">
                        <a href="{{route('commande.index')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">En attente</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" {{Route::currentRouteName() == 'commande.cours'? 'active ' : ''}} ">
                        <a href="{{route('commande.cours')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">En coures</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" {{Route::currentRouteName() == 'commande.traitée'? 'active ' : ''}} ">
                        <a href="{{route('commande.traitée')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Traitées</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>

        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{Route::currentRouteName() == 'livraison.cours'? 'active pcoded-trigger' : ''}} {{Route::currentRouteName() == 'livraison.traitée'? 'active pcoded-trigger' : ''}} ">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Livraisons</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{Route::currentRouteName() == 'livraison.cours'? 'active ' : ''}} ">
                        <a href="{{route('livraison.cours')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">En coures</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" {{Route::currentRouteName() == 'livraison.traitée'? 'active ' : ''}} ">
                        <a href="{{route('livraison.traitée')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Traitées</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>

        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu {{Route::currentRouteName() == 'profile.gerant'? 'active pcoded-trigger' : ''}} {{Route::currentRouteName() == 'logout'? 'active pcoded-trigger' : ''}} ">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Utilisateur</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" {{Route::currentRouteName() == 'profile.gerant'? 'active ' : ''}} ">
                        <a href="{{route('profile.gerant')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Profile</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" {{Route::currentRouteName() == 'logout'? 'active ' : ''}} ">
                        <a href="{{route('logout')}}" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Déconnecter</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
        <ul class="pcoded-item pcoded-left-item">
            
            <li class=" {{Route::currentRouteName() == 'avis.liste'? 'active' : ''}}">

                <a href="{{route('avis.liste')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Avis</span>
                    <span class="pcoded-mcaret"></span>
                </a>                
            </li> 
            <li class=" {{Route::currentRouteName() == 'contact.liste'? 'active' : ''}}" >

                <a href="{{route('contact.liste')}}" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Contact</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li> 

                    
           

        </ul>  


    </div>
</nav>