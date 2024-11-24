@extends('admin/layouts.base')



@section('content')

    <div class="card">
        <div class="card-header">
            <h2 class="text-center">LES MATERIAUX</h2>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                </ul>
            </div>
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
                            <th>TYPE</th>
                            <th>STATUS</th>
                            <th class="text-center">OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $materiels as $index=>$materiel)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$materiel['name']}}</td>
                            <td>{{$materiel['description']}}</td>
                            <td>{{$materiel['unite']}}</td>
                            <td>{{$materiel['prix']}}</td>
                            <!-- <td>{{$materiel['file']}}</td>  -->
                            <td >{{$materiel->typemateriel->libellé}}</td>
                            <td>
                                <form action="{{route('materiel.option', $materiel)}}" method="POST">
                                    @csrf
                                    @method('put')
                                            <button type="submit"  class="btn btn-danger waves-effect waves-light" data-container="body"  data-toggle="popover" title="Danger color states" data-placement="bottom" data-content="<div class='color-code'>
                                                <div class='row'>
                                                <div class='col-sm-6 col-xs-12'>
                                                    <span class='block'>Normal</span>
                                                    <span class='block'>
                                                    <small>#FC6180</small>
                                                </span>
                                            </div>
                                            <div class='col-sm-6 col-xs-12'>
                                                <div class='display-color' style='background-color:#FC6180;'></div>
                                            </div>
                                            </div>
                                            </div>

                                            <div class='color-code'>
                                            <div class='row'>
                                                <div class='col-sm-6 col-xs-12'>
                                                <span class='block'>Hover</span>
                                                <span class='block'>
                                                    <small>#fd93a8</small>
                                                </span>
                                            </div>
                                            <div class='col-sm-6 col-xs-12'>
                                            <div class='display-color' style='background-color:#fd93a8;'></div>
                                            </div>
                                            </div>
                                            </div>

                                            <div class='color-code'>
                                            <div class='row'>
                                                <div class='col-sm-6 col-xs-12'>
                                                <span class='block'>Active</span>
                                                <span class='block'>
                                                    <small>#fb2550</small>
                                                </span>
                                            </div>
                                            <div class='col-sm-6 col-xs-12'>
                                            <div class='display-color' style='background-color:#fb2550;'></div>
                                            </div>
                                            </div>
                                            </div>

                                            <div class='color-code'>
                                            <div class='row'>
                                                <div class='col-sm-6 col-xs-12'>
                                                <span class='block'>Disabled</span>
                                                <span class='block'>
                                                    <small>#fecbd5</small>
                                                </span>
                                            </div>
                                            <div class='col-sm-6 col-xs-12'>
                                            <div class='display-color' style='background-color:#fecbd5;'></div>
                                            </div>
                                            </div>
                                            </div>">{{ $materiel->statut=='Activé'?'Desactivé' : 'Activé' }}
                                        </button>
                                </form>
                            </td>
                            <td><a href="{{route('post.show', $materiel)}}"><button type="button" class="btn btn-inverse waves-effect waves-light" data-container="body" data-toggle="popover" title="Inverse color states" data-placement="bottom" data-content="<div class='color-code'>
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
                                </div>">DETAILS</button></a></td>
                            <td> <a href="{{route('materiel.edit', $materiel)}}">                                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="primary-popover-content" data-container="body" data-toggle="popover" title="Primary color states" data-placement="bottom" data-content="<div class='color-code'>
                                                            <div class='row'>
                                                              <div class='col-sm-6 col-xs-12'>
                                                                <span class='block'>Normal</span>
                                                                <span class='block'>
                                                                  <small>#4680ff</small>
                                                              </span>
                                                          </div>
                                                          <div class='col-sm-6 col-xs-12'>
                                                            <div class='display-color' style='background-color:#4680ff;'></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='color-code'>
                                                  <div class='row'>
                                                    <div class='col-sm-6 col-xs-12'>
                                                      <span class='block'>Hover</span>
                                                      <span class='block'>
                                                        <small>#79a3ff</small>
                                                    </span>
                                                </div>
                                                <div class='col-sm-6 col-xs-12'>
                                                  <div class='display-color' style='background-color:#79a3ff;'></div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class='color-code'>
                                          <div class='row'>
                                            <div class='col-sm-6 col-xs-12'>
                                              <span class='block'>Active</span>
                                              <span class='block'>
                                                <small>#0956ff</small>
                                            </span>
                                        </div>
                                        <div class='col-sm-6 col-xs-12'>
                                          <div class='display-color' style='background-color:#0956ff;'></div>
                                      </div>
                                  </div>
                              </div>

                              <div class='color-code'>
                                  <div class='row'>
                                    <div class='col-sm-6 col-xs-12'>
                                      <span class='block'>Disabled</span>
                                      <span class='block'>
                                        <small>#c3d5ff</small>
                                    </span>
                                </div>
                                <div class='col-sm-6 col-xs-12'>
                                  <div class='display-color' style='background-color:#c3d5ff;'></div>
                              </div>
                          </div>
                      </div>

                      ">MODIFIER</button></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<script>
    function confirmation()
    {
        return confirm("VOULEZ-VOUS VRAIMENT SUPPRIMER L\'ELEMENT")
    }
</script>
@endsection


