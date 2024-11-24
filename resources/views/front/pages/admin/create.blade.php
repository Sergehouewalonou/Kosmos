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
                        <h1 class="section-title">Register <br>Your Account</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
                             Sit aliquid,  Non distinctio vel iste.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                    <h2 style="color:blue; text-align:center;">INSCRIPTION</h2>
                        <form method="POST" action="{{route('admin.store')}}" class="get-a-quote-form">

                            @csrf
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="nom" placeholder="Enter your nom" value="{{old('nom')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('nom'){{$message}}@enderror</span>
                                </div>
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text"  name="prenom" placeholder="Enter your prenom" value="{{old('prenom')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('prenom'){{$message}}@enderror</span>
                                </div>
                                
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text"  name="telephone" placeholder="Enter your telephone" value="{{old('telephone')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('telephone'){{$message}}@enderror</span>
                                </div>
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text"  name="adresse" placeholder="Enter your adresse" value="{{old('adresse')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('adresse'){{$message}}@enderror</span>
                                </div>

                                <div class="input-item input-item-name  ltn__custom-icon">
                                    <input type="text"  name="ville" placeholder="Enter your ville" value="{{old('ville')?? ''}}">
                                    <span style=" color:red;"> @error('ville'){{$message}}@enderror</span>
                                </div>

                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email"  name="email" placeholder="Enter your email" value="{{old('email')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('email'){{$message}}@enderror</span>
                                </div>

                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="password"  name="password" placeholder="Enter your password" value="{{old('password')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('password'){{$message}}@enderror</span>
                                </div>
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="password"  name="password_confirmation" placeholder="confirme your password" value="{{old('password_confirmation')?? ''}}"> <br>
                                    <span style=" color:red;"> @error('password_confirmation'){{$message}}@enderror</span>
                                </div>

                                

                                <div class="btn-wrapper mt-0">
                                    <button type="submit" class="theme-btn-1 btn black-btn">S'INSCRIRE</button>
                                </div>
                        </form>
                        <div class="by-agree text-center">
                            <p>By creating an account, you agree to our:</p>
                            <p><a href="#">TERMS OF CONDITIONS  &nbsp; &nbsp; | &nbsp; &nbsp;  PRIVACY POLICY</a></p>
                            <div class="go-to-btn mt-50">
                                <a href="{{url('login')}}">ALREADY HAVE AN ACCOUNT ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection