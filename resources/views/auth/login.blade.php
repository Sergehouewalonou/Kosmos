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

<!-- <div class=" ltn__breadcrumb-color-white bg-overlay-theme-black-70 bg-image" style="background-size: 100% 100%; " data-bg="{{asset('storage/front/img/bg/front.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <marquee behavior="" direction=""><h1 class="section-subtitle ltn__secondary-color">ETs KOSMOS le meilleur des quincailleries</h1></marquee>

                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// Bienvenue à ETs KOSMOS</h6>
                            <h1 class="section-title white-color"> Mon compte</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{route('typemateriele.index')}}">Accueil</a></li>
                                <li>Se Connecter</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div> -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="index.html"><img src="{{asset('storage/front/img/logo.png')}}" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu">
                <ul>

                    <li> <a href="{{url('login')}}"> Se connecter</a></li>

                    <li><a href="{{ route('register') }}"> S'inscrire</a></li>

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
                        <h1 class="section-title"> Se Connecter</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-login-inner">
                        <form method="POST" action="{{ route('login') }}" class="ltn__form-box contact-form-box">
                            @csrf
                            <input type="email"  name="email" placeholder=" E-mail " value="{{old('email')?? ''}}" >
                            <span style=" color:red;"> @error('email'){{$message}}@enderror</span>
                            <input type="password"  name="password" placeholder="Mot de passe">
                            <span style=" color:red;"> @error('password'){{$message}}@enderror</span>
                            <div class="btn-wrapper mt-0">
                                <button class="theme-btn-1 btn btn-block" type="submit">SE CONNECTER</button>
                            </div>
                            <div class="go-to-btn mt-20">
                                <a href="{{route('password.request')}}"><small>MOT DE PASSE OUBLIÉ ?</small></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-create text-center pt-50">
                        <h4> VOUS N'AVEZ PAS DE COMPTE ?</h4>
                        <p>Cliquer sur le boutton s'inscrire pour créer un compte.</p>
                        <div class="btn-wrapper">
                            <a href="{{ route('register') }}" class="theme-btn-1 btn black-btn">S'INSCRIRE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <footer class="ltn__footer-area  ">
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
    </footer> -->

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



            

            