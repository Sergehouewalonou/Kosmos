@extends('admin/layouts.base')



@section('content')

    <div class="card">
        <div class="card-header">
            <h2 class="text-center">LES COMMANDES TRAITEES</h2>
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
                            <th>CLIENTS</th>
                            <th>COMMANDE</th>
                            <th>OPTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $totos as $index=>$commande)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$commande->user->nom}}  {{$commande->user->prenom}}  {{$commande->user->telephone}}  {{$commande->user->email}}</td>
                            <td><button class="btn waves-effect waves-light btn-inverse btn-icon">{{$commande['id']}}</button></td>
                            <td  class="btn btn-success waves-effect waves-light" >

                                {{$commande['option']}}

                            </td>
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


