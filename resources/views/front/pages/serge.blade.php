@extends('front/layouts.base')

@section('content')

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-2" style="margin-top:50px;" >
                    <div class="ltn__shop-details-inner mb-60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title-area ltn__section-title-1 text-center">
                                    <h3 class="section-title">Information {{$materiel->name}}</h3>
                                </div>
                                <div class="ltn__shop-details-img-gallery">
                                    <div class="ltn__shop-details-large-img">
                                        <div class="single-large-img">
                                                <img src="{{asset($materiel->file)}}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-info shop-details-info pl-0">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h3>{{$materiel->name}}</h3>
                                    <div class="product-price">
                                        <span>{{$materiel->prix}}</span>
                                        <span>FCFA</span>
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                <strong>Categories:</strong> 
                                                <span>
                                                    {{$materiel->description}}
                                                </span>
                                            </li>
                                            <li>
                                                <strong>Comment:</strong> 
                                                <span>
                                                    {{$materiel->unite}}
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ltn__product-details-menu-2">
                                        <ul>
                                            <li>
                                                <a href="{{route('materiele.index')}}" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" >
                                                    <span>RETOUR</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('cart.add', $materiel) }}" class="theme-btn-1 btn btn-effect-1" title="Ajouter au panier" >
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>Ajouter au panier</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

@endsection


