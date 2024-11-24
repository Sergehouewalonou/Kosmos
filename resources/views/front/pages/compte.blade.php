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

    <div class="ltn__login-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">MON COMPTE</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-login-inner" style="margin-top:30px;" >
                        <div><h1>{{auth()->user()->nom}}</h1></div>
                        <div><h2>{{auth()->user()->prenom}}</h2></div>
                        <div><h3>{{auth()->user()->telephone}}</h3></div>
                        <div><h4>{{auth()->user()->email}}</h4></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-create text-center pt-50">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Materiel Commandé</th> 
                                <th>Quantité Commandée</th> 
                             </tr>
                             @foreach( $commandes as $index=>$commande)
                                @foreach($commande->materiels as $clients)
                                <tr>
                                    <td>{{$clients->name}}</td>
                                    <td>{{$clients->pivot->qty}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td>
                                        <h2>Statuts</h2>
                                    </td>

                                        <td>
                                        @if($commande->option=='en cours')
                                                <a href="{{route('commande.action',$commande)}}"><button  class="btn btn-success waves-effect waves-light"  >Réçu</button></a>
                                        @endif

                                        @if($commande->option=='traité')
                                            <button  class="btn btn-success waves-effect waves-light"  >Traitée</button>
                                        @endif

                                        </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
                     

@endsection