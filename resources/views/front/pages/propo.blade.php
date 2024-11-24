@extends('front/layouts.base')

@section('content')

<div class="body-wrapper">

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class=" ltn__breadcrumb-color-white bg-overlay-theme-black-70 bg-image" style="background-size: 100% 100%; " data-bg="{{asset('storage/front/img/bg/front.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <marquee behavior="" direction=""><h1 class="section-subtitle ltn__secondary-color">ETs KOSMOS le meilleur des quincailleries</h1></marquee>

                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Bienvenue à KOSMOS</h6>
                            <h1 class="section-title white-color">ETs KOSMOS</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('materiele.index')}}">Accueil</a></li>
                                <li>Informations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
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
                    <input type="text" placeholder="Rechercher ici ...">
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
    <!-- TEAM DETAILS AREA START -->
    <div class="ltn__team-details-area mb-90">
        <div class="container">
            <div class="row" style="margin-top:60px;">
                <div class="col-lg-4">
                    <div class="ltn__team-details-member-info text-center mb-40">
                        <div class="team-details-img">
                            <img src="{{asset('storage/front/img/team/avatar.png')}}" alt="Team Member Image">
                        </div>
                        <h2>Firmin KPOSSOU</h2>
                        <h6 class="text-uppercase ltn__secondary-color">Kosmos</h6>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ltn__team-details-member-info-details">
                        <p>Elle a su gagner le respect de ses clients aussi bien professionnels que particuliers, en répondant à  leurs besoins et en leur  garantissant du matériel de qualité.<br>

                        Avec une équipe technico-commerciale expérimentée elle a désormais un service après-vente pour toutes vos préoccupations.</p>
                        <p>Les matériaux de constructions ultra-modernes, performants, économiques, résistants, respectant les normes internationales.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ltn__team-details-member-about">
                                    <ul>
                                        <li><strong>Existence:</strong> Depuis 2007 </li>
                                        <li><strong>Positions:</strong>En face du pavé KEREKOU</li>
                                        <li style="margin-left:120px;"> A côté de BAR METRO </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ltn__team-details-member-about">
                                    <ul>
                                        <li><strong>Email:</strong> kosmos@gmail.com</li>
                                        <li><strong>Phone:</strong> +229 97 27 65 86 </li>
                                        <li style="margin-left:130px;">  94 46 02 23  </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__team-details-member-info-details">
                        <p>La fabrication d’une brique est simple.Plusieurs ingrédients sont utilisés notamment le ciment, le sable, l’eau qui sont en générale les éléments de base.<br>

                        Vous souhaitez acheter des briques et agglos en grande quantité à Cotonou , Calavi ou à Alada ? <br> Nous vous proposons un choix étendu de briques et agglos à prix concurrentiels. <br> Creuse ou pleine, chaque type de brique possède ses propres composants et se destine à un usage bien spécifique. <br>
                        Ainsi, en fonction de la stratégie et des besoins de la construction, <br> on choisira de préférences des briques 15 creuses,<br> des briques 15 pleines ou encore des Agglos 10 Creux.</p>

                        <hr>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__team-details-member-info text-center mb-40">
                        <div class="team-details-img">
                            <img src="{{asset('storage/front/img/team/aaa.jpeg')}}" alt="Team Member Image">
                        </div>
                        <h6 class="text-uppercase ltn__secondary-color">Briques</h6>

                    </div>
                </div>
                <hr>

            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__team-details-member-info-details">
                        <p>
                            Seule la moule qui donne la forme finale à la brique diffère d’un pays à l’autre. <br> Ainsi, les moules d’origines béninois sont souvent différent de ceux utilisés au Ghana, <br> au Maroc ou d’autres parties du monde. <br>
                            Les normes en matière de dosage sont sensiblement les mêmes. <br> Quant à la qualité du sable, elle peut varier selon l’objectif que veut atteindre <br> le constructeur ou l’entrepreneur. <br>
                            Les tarifs des briques avec le transport inclus .</p>
                        <hr>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__team-details-member-info text-center mb-40">
                        <div class="team-details-img">
                            <img src="{{asset('storage/front/img/team/avatar.png')}}" alt="Team Member Image">
                        </div>
                        <h6 class="text-uppercase ltn__secondary-color">Briques</h6>

                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>
    <!-- TEAM DETAILS AREA END -->

</div>
@endsection