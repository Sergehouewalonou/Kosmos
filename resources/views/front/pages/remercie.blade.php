@extends('front/layouts.base')

@section('content')

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.html"><img src="{{asset('storage/front/img/logo.png')}}" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Rechercher ici...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>

                    <li> <a href="{{route('materiele.index')}}"> Accueil</a></li>

                    <li><a href="{{route('materiele.index')}}"> Catégories</a></li>

                    <li> <a href="{{url('propo')}}"> A propos</a></li>

                    <li><a href="{{url('contact')}}">Contact</a></li>

                    <li><a href="{{url('avis')}}">Avis</a></li>

                    <li><a href=" {{route('logout')}}"> Deconnecter</a></li>

                </ul>
            </div>
            <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                <ul>
                    <li>
                        <a href="{{route('commande.commande')}}" title="Mon compte">
                            <span class="utilize-btn-icon">
                                <i class="far fa-user"></i>
                            </span>
                            Mon compte
                        </a>
                    </li>
                    <li>
                        <a href="{{route('panier.index')}}" title="Mon panier">
                            <span class="utilize-btn-icon">
                                <i class="fas fa-shopping-cart"></i>
                                <sup>{{ count(Cart::content()) }}</sup>
                            </span>
                            Mon panier
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

@endsection