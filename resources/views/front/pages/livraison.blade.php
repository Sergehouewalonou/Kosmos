@extends('front/layouts.base')

@section('content')


<div class="ltn__checkout-area mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__checkout-inner">
                        <div class="ltn__checkout-single-content mt-50">
                            <h4 class="title-2 text-center">Votre adresse de livraison.</h4>
                            <div class="ltn__checkout-single-content-info">
                                <form action="{{route('livraison.store')}}" method="POST" >
                                    @csrf
                                    <h6 class="text-center">Livraison</h6>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-website ltn__custom-icon">
                                            <select name="adresse_id" id="">
                                                @foreach($datas as $data)
                                                    <option value="" placeholder=""></option>
                                                    <option value="{{$data->id}}">{{$data->ville}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <span style=" color:red;"> @error('ville'){{$message}}@enderror</span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                            <select name="adresse_id" id="">
                                                @foreach($datas as $data)
                                                    <option value="" placeholder=""></option>
                                                    <option value="{{$data->id}}">{{$data->quartier}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <span style=" color:red;"> @error('quartier'){{$message}}@enderror</span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                            <select name="adresse_id" id="">
                                                @foreach($datas as $data)
                                                    <option value="" placeholder=""></option>
                                                    <option value="{{$data->id}}">{{$data->rue}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <span style=" color:red;"> @error('rue'){{$message}}@enderror</span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-website ltn__custom-icon">
                                            <select name="adresse_id" id="">
                                                @foreach($datas as $data)
                                                    <option value="" placeholder=""></option>
                                                    <option value="{{$data->id}}">{{$data->code_postal}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <span style=" color:red;"> @error('code_postal'){{$message}}@enderror</span>
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