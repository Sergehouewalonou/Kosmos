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

<div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2 text-center">Votre adresse de livraison.</h4>
                            <div class="ltn__checkout-single-content-info">
                                <form action="{{route('adresse.store')}}" method="POST" >
                                    @csrf
                                    <h6 class="text-center">ADRESSE</h6>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-website ltn__custom-icon">
                                            <label for="ville"> Ville</label>
                                                <select name="ville" id=""  placeholder="sélectionné votre ville">
                                                    <option value=""></option>
                                                    <option value="ABOMEY-CALAVI">ABOMEY-CALAVI</option>
                                                    <!-- <option value="ALADA">ALADA</option>
                                                    <option value="COTONOU">COTONOU</option> -->
                                                </select>
                                            </div>
                                            <span style=" color:red;"> @error('ville'){{$message}}@enderror</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="quartier"> Arrondissement</label>
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="arrondissement" placeholder="Arrondissement" value="{{old('arrondissement')?? ''}}">
                                            </div>
                                            <span style=" color:red;"> @error('arrondissement'){{$message}}@enderror</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="rue">Quartier</label>
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="quartier" placeholder="Quartier"  value="{{old('quartier')?? ''}}">
                                            </div>
                                            <span style=" color:red;"> @error('quartier'){{$message}}@enderror</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="code_postal">Situé nous </label>
                                            <div class="input-item input-item-website ltn__custom-icon">
                                                <input type="text" name="situe" placeholder="Situé nous" value="{{old('situe')?? ''}}"> 
                                            </div>
                                            <span style=" color:red;"> @error('situe'){{$message}}@enderror</span>
                                        </div>

                                    </div>       
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">CONTINUER</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection