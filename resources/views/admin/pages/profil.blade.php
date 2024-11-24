@extends('admin/layouts.base')



@section('content')

                    <div class="pcoded-inner-content">
                            <div class="main-body">

                                <div class="col-lg-6 offset-3 "  >
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h5 class="card-header-text " >Profile Gerant </h5>
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-block accordion-block">
                                            <div class="accordion-box" id="single-open">
                                                <a class="accordion-msg waves-effect waves-dark">NOM</a>
                                                <div class="accordion-desc">
                                                    <h1>{{auth()->user()->nom}}</h1>
                                                </div>
                                                <a class="accordion-msg waves-effect waves-dark">PRENOM</a>
                                                <div class="accordion-desc">
                                                    <h2>{{auth()->user()->prenom}}</h2>
                                                </div>
                                                <a class="accordion-msg waves-effect waves-dark">ADRESSE</a>
                                                <div class="accordion-desc">
                                                    <h3>{{auth()->user()->adresse}}</h3>
                                                </div>
                                                <a class="accordion-msg waves-effect waves-dark">PHONE</a>
                                                <div class="accordion-desc">
                                                    <h3>{{auth()->user()->telephone}}</h3>
                                                </div>
                                                <a class="accordion-msg waves-effect waves-dark">Email</a>
                                                <div class="accordion-desc">
                                                    <h3>{{auth()->user()->email}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Open Accordion ends -->
                            </div>
                        </div>
@endsection


