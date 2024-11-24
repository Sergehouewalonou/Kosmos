<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 15:05:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Broccoli - Organic Food HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('storage/front/img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('storage/front/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('storage/front/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('storage/front/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('storage/front/css/responsive.css')}}">
    <script src="https://cdn.kkiapay.me/k.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5" style="background-color:black;">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                                <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-right">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__language-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                    <ul>
                                                        <li><a href="#">Arabic</a></li>
                                                        <li><a href="#">Bengali</a></li>
                                                        <li><a href="#">Chinese</a></li>
                                                        <li><a href="#">English</a></li>
                                                        <li><a href="#">French</a></li>
                                                        <li><a href="#">Hindi</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                
                                                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->

        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black plr--9---">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="{{route('materiele.index')}}"><img src="{{asset('storage/front/img/logo.png')}}" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li class=""><a href="{{route('materiele.index')}}">Accueil</a>

                                        </li>

                                        <li><a href="{{route('materiele.index')}}">Catégories</a>

                                        </li>
                                        <li class=""><a href="{{url('propo')}}">A propos</a>
                                        
                                        <li class="special-link"><a href="{{route('contact.create')}}">Contacter</a> </li>
                                       
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2">
                        <!-- header-search-1 -->
                        <div class="header-search-wrap">
                            <div class="header-search-1">
                                <div class="search-icon">
                                    <i class="icon-search for-search-show"></i>
                                    <i class="icon-cancel  for-search-close"></i>
                                </div>
                            </div>
                            <div class="header-search-1-form">
                                <form id="#" method="get"  action="#">
                                    <input type="text" name="search" value="" placeholder="Search here..."/>
                                    <button type="submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                        <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        @if(!Auth::check())
                                            <li><a href="{{ route('login') }}">Se Connecter</a></li>
                                            <li><a href="{{ route('register') }}">S'inscrire</a></li>
                                          
                                        @else
                                            <li class="waves-effect waves-light" >
                                                <a href="{{ route('logout') }}"> Deconnecter</a>
                                            </li>
                                            <li><a href="{{route('commande.commande')}}">Mon Compte</a></li>
                                            <li><a href="{{ url('avis') }}">Avis</a></li>
                                        @endif
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- mini-cart -->
                        @if(count(Cart::content()) > 0)
                            
                            <div class="mini-cart-icon">
                                <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                    <i class="icon-shopping-cart"></i>
                                    <sup>
                                        {{ count(Cart::content()) }}
                                    </sup>
                                </a>
                            </div>
                            <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
                            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                                <div class="ltn__utilize-menu-head">
                                    <span class="ltn__utilize-menu-title">Cart</span>
                                    <button class="ltn__utilize-close">×</button>
                                </div>
                                <div class="mini-cart-product-area ltn__scrollbar">
                                                    @php $total = 0 @endphp
                                                    
                                                                       @foreach(Cart::content() as $materiel)
                                                                @php $total += $materiel->price * $materiel->qty @endphp
                                                            <div class="mini-cart-item clearfix">
                                                                <div class="mini-cart-img">
                                                                    <a href="#"><img src="{{asset(getPro($materiel->id)->file)}}" alt=""></a>
                                                                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                                                                </div>
                                                                <div class="mini-cart-info">
                                                                    <h6><a href="#">{{$materiel->name}}</a></h6>
                                                                    <span class="mini-cart-quantity">{{$materiel->price}}</span>
                                                                    <span>FCFA</span>
                                                                </div>
                                                            </div>
                                                        @endforeach  
                                </div>
                                <div class="mini-cart-footer">
                                    <div class="mini-cart-sub-total">
                                        <h5>Subtotal: <span>{{$total}}</span><span>FCFA</span></h5>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="{{route('panier.index')}}" class="theme-btn-1 btn btn-effect-1">Mon Panier</a>
                                        <a href="{{route('adresse.create')}}" class="theme-btn-2 btn btn-effect-2">Payer</a>
                                    </div>
                                </div>

                            </div>
                            </div>
                                            
                        @endif
                        <!-- mini-cart -->
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->
    
    <!-- Utilize Cart Menu Start -->
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->

    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-color-white bg-overlay-theme-black-70 bg-image" style="background-size: 100% 100%; " data-bg="{{asset('storage/front/img/bg/front.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <marquee behavior="" direction=""><h1 class="section-subtitle ltn__secondary-color">ETs KOSMOS le meilleur des quincailleries</h1></marquee>

                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Bienvenue à ETs KOSMOS</h6>
                            <h1 class="section-title white-color">Payement</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('materiele.index')}}">Accueil</a></li>
                                <li>Payement</li>
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

    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
            <div class="col-lg-2" style="background-size: 20% 20%;" >

                <img src="{{asset('storage/front/img/icons/kp.png')}}" alt="Payment Image" >

            </div>
                <div class="col-lg-10">
                    <div class="shoping-cart-total mt-50">
                        <h4 class="title-2 text-center">Total Commande</h4>
                        <table class="table " class="table-responsive" >
                            <tbody>
                                <!-- {{$total=0}} -->
                                <!-- {{$frais=0}} -->
                                <!-- {{$tata=0}} -->
                                <!-- {{$qty=0}} -->
                                <!-- {{$toto=0}} -->
                                @foreach(Cart::content() as $materiel)
                                     <!-- {{$total +=  $materiel->price * $materiel->qty  }} -->
                                     <!-- {{$qty += $materiel->qty }} -->

                                     @if($qty > 0 && $qty <= 20)
                                        <!-- {{$frais = $qty * 100 }} -->
                                        <!-- {{$tata = $frais }} -->
                                     @endif

                                     @if($qty > 20 && $qty <= 50)
                                        <!-- {{$frais = $qty * 100 }} -->
                                        <!-- {{$tata = $frais -( ($frais * 10) / 100) }} -->
                                     @endif
                                     @if($qty > 50 && $qty <= 100)
                                        <!-- {{$frais = $qty * 100 }} -->
                                        <!-- {{$tata = $frais -( ($frais * 20) / 100) }} -->
                                     @endif

                                     <!-- {{$toto= $total + $tata }} -->
                                <tr>
                                    <td>{{$materiel->name}}<strong>× {{$materiel->qty}}</strong></td>
                                    <td>{{$materiel->price * $materiel->qty }} FCFA</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td><strong>Frais de Livraison</strong></td>
                                    <td><strong>{{$tata}} FCFA</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Total commande</strong></td>
                                    <td><strong>{{$toto}} FCFA</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="margin-top:20px; margin-left:200px;">
                            <kkiapay-widget sandbox="true" amount="{{$total}}" key="5e400860787b11ef90e00b8ece587c02" callback="{{route('commande.store')}}"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->

    <!-- FEATURE AREA START ( Feature - 3) -->

    <!-- FEATURE AREA END -->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-1 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                <h4 class="footer-title">KOSMOS</h4>
                                </div>
                            </div>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>ETs KOSMOS, Abomey-Calavi, BENIN</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="{{url('propo')}}">+229 97 27 65 86 <br>94 46 02 23</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="{{url('propo')}}">kosmos@gmail.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Entreprise</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{url('propo')}}">A propos</a></li>
                                    <li><a href="{{route('materiele.index')}}">Nos Matériaux</a></li>
                                    <li><a href="{{url('contact')}}">Contacter nous</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Services</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{url('propo')}}">Construction</a></li>
                                    <li><a href="{{url('propo')}}">Ventes </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Clients</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{url('login')}}">S'inscrit</a></li>
                                    <li><a href="{{url('compte')}}">Mon compte</a></li>
                                    <li><a href="{{url('contact')}}">Contacter nous</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Payement</h4>
                            <p>Nous recevons avec plaisir <br> Payement via kkiapay.</p>

                            <h5 class="mt-30">ETs Kosmos</h5>
                            <img src="{{asset('storage/front/img/icons/kkp.png')}}" alt="Payment Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-2  ltn__border-top-2--- plr--5">
            <div class="container-fluid">
                <div class="row">
                   <h1 class="text-uppercase"><marquee behavior="" direction="">ETs KOSMOS le meilleure des quincailleries.Pour tout vos besoins pour une meilleure construction, veuillez nous contacter au +229 97-27-65-86 / 94-46-02-23.</marquee></h1>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->
</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="{{asset('storage/front/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('storage/front/js/main.js')}}"></script>
 

</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 15:05:11 GMT -->
</html>

