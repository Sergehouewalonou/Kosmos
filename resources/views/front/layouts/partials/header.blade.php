<header class="ltn__header-area ltn__header-5  " style="background-color:black;" >
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area top-area-color-white d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="{{route('materiele.index')}}">KOSMOS</a></li>
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
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black sticky-active-into-mobile plr--9---">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo" >
                                <a href="{{route('materiele.index')}}">KOSMOS</a>
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
                                        
                                        <li class="special-link"><a href="{{route('contact.create')}}"> Contacter</a> </li>
                                       
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
                                    <input type="text" name="search" value="" placeholder="Rechercher ici..."/>
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
                                                <a href="{{ route('logout') }}"> Déconnecter</a>
                                            </li>
                                            <li><a href="{{route('commande.commande')}}">Mon Compte</a></li>
                                            <li><a href="{{route('avis.create')}}">Avis</a></li>
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
                                                                @php $total += $materiel->price @endphp
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
                                        <a href="{{route('panier.index')}}" class="theme-btn-1 btn btn-effect-1">Mon panier</a>
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