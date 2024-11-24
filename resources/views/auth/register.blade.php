<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 15:03:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ETs KOSMOS</title>
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
</head>
<body>
    <!-- BREADCRUMB AREA START -->
    <!-- <div class="ltn__breadcrumb-color-white bg-overlay-theme-black-70 bg-image" style="background-size: 100% 100%; " data-bg="{{asset('storage/front/img/bg/front.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <marquee behavior="" direction=""><h1 class="section-subtitle ltn__secondary-color">ETs KOSMOS le meilleur des quincailleries</h1></marquee>

                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Bienvenue à ETs KOSMOS</h6>
                            <h1 class="section-title white-color">Avoir un Compte</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('typemateriele.index')}}">Accueil</a></li>
                                <li>Inscription</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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
                        <a href="{{url('compte')}}" title="Mon compte">
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

    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">S'INSCRIRE</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                    <h5 style="color:blue; text-align:center;">Entrer vos informations</h5>
                        <form action="#" method="POST" action="{{ route('register') }}" class="get-a-quote-form">

                            @csrf
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="nom" placeholder="Entrer votre nom" value="{{old('nom')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('nom'){{$message}}@enderror</span>
                                </div>
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text"  name="prenom" placeholder="Entrer votre prenom" value="{{old('prenom')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('prenom'){{$message}}@enderror</span>
                                </div>
                                
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text"  name="telephone" placeholder="Entrer votre telephone" value="{{old('telephone')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('telephone'){{$message}}@enderror</span>
                                </div>
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text"  name="adresse" placeholder="Entrer votre adresse" value="{{old('adresse')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('adresse'){{$message}}@enderror</span>
                                </div>

                                <div class="input-item input-item-name  ltn__custom-icon">
                                    <input type="text"  name="ville" placeholder="Entrer votre ville" value="{{old('ville')?? ''}}">
                                    <span style=" color:red;"> @error('ville'){{$message}}@enderror</span>
                                </div>

                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email"  name="email" placeholder="Entrer votre email" value="{{old('email')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('email'){{$message}}@enderror</span>
                                </div>

                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="password"  name="password" placeholder="Entrer votre mot de passe" value="{{old('password')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('password'){{$message}}@enderror</span>
                                </div>
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="password"  name="password_confirmation" placeholder="confirme your mot de passe" value="{{old('password_confirmation')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('password_confirmation'){{$message}}@enderror</span>
                                </div>

                                

                                <div class="btn-wrapper mt-0">
                                    <button type="submit" class="theme-btn-1 btn black-btn">S'INSCRIRE</button>
                                </div>
                        </form>
                        <div class="by-agree text-center">
                            <div class="go-to-btn mt-50">
                                <a href="{{url('login')}}">VOUS AVEZ DÉJÀ UN COMPTE ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="{{asset('storage/front/js/plugins.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('storage/front/js/main.js')}}"></script>
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/broccoli-preview/broccoli/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 15:03:55 GMT -->
</html>



            

            