@extends('admin/layouts.base')



@section('content')
<div class="card">
        <div class="card-header">
            <h2 class="text-center">LES DETAILS</h2>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>NAME</th>
                            <th>DESCRIPTION</th>
                            <th>UNITE</th>
                            <th>PRIX</th>
                            <!-- <th>IMG</th> -->
                        </tr>
                    </thead>
                    <tbody>
                 
                        <tr>
                            <td>{{$materiel->id}}</td>
                            <td>{{$materiel->name}}</td>
                            <td>{{$materiel->description}}</td>
                            <td>{{$materiel->unite}}</td>
                            <td>{{$materiel->prix}}</td>
                            <!-- <td>{{$materiel->file}}</td> -->
                            <td><a href="{{route('materiel.index')}}"><button type="button" class="btn btn-inverse waves-effect waves-light" data-container="body" data-toggle="popover" title="Inverse color states" data-placement="bottom" data-content="<div class='color-code'>
                                    <div class='row'>
                                    <div class='col-sm-6 col-xs-12'>
                                        <span class='block'>Normal</span>
                                        <span class='block'>
                                        <small>#303548</small>
                                    </span>
                                </div>
                                <div class='col-sm-6 col-xs-12'>
                                    <div class='display-color' style='background-color:#303548;'></div>
                                </div>
                                </div>
                                </div>

                                <div class='color-code'>
                                <div class='row'>
                                    <div class='col-sm-6 col-xs-12'>
                                    <span class='block'>Hover</span>
                                    <span class='block'>
                                        <small>#444c67</small>
                                    </span>
                                </div>
                                <div class='col-sm-6 col-xs-12'>
                                <div class='display-color' style='background-color:#444c67;'></div>
                                </div>
                                </div>
                                </div>

                                <div class='color-code'>
                                <div class='row'>
                                    <div class='col-sm-6 col-xs-12'>
                                    <span class='block'>Active</span>
                                    <span class='block'>
                                        <small>#181a23</small>
                                    </span>
                                </div>
                                <div class='col-sm-6 col-xs-12'>
                                <div class='display-color' style='background-color:#181a23;'></div>
                                </div>
                                </div>
                                </div>

                                <div class='color-code'>
                                <div class='row'>
                                    <div class='col-sm-6 col-xs-12'>
                                    <span class='block'>Disabled</span>
                                    <span class='block'>
                                        <small>#bbbdc3</small>
                                    </span>
                                </div>
                                <div class='col-sm-6 col-xs-12'>
                                <div class='display-color' style='background-color:#bbbdc3;'></div>
                                </div>
                                </div>
                                </div>">RETOUR</button></a></td>
                        </tr>
                  
                    </tbody>
                </table>
            </div>
        </div>
</div>

@endsection


