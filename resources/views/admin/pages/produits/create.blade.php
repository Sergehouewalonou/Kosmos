@extends('admin/layouts.base')



@section('content')
<section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material" style="" method="POST" action="{{route('materiel.store')}}" enctype="multipart/form-data">
                           @csrf
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Ajouter un materiel</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="name" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">name</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="description" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Description</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="unite" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Unité</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="nomber" name="prix" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Prix</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="file" name="file" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label"></label>
                                    </div>

                                    <div class="form-group form-primary">
                                    <select name="typemateriel_id" id="">
                                            <option value="" placeholder="type"></option>
                                            @foreach($types as $type)
                                                <option value="{{$type->id}}">{{$type->libellé}}</option>
                                            @endforeach
                                    </select>
                                    </div>

                                    <div class="row m-t-30">
                                        <div class="col-md-4" style="margin-left:150px;">
                                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">CREER</button>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
@endsection