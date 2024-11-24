@extends('admin/layouts.base')



@section('content')

    <div class="card">
        <div class="card-header">
            <h2 class="text-center">LES AVIS</h2>
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
                            <th class="text-center">CLIENT</th>
                            <th>COMMANDE</th>
                            <th>LIVRAISON</th>
                            <th class="text-center">MESSAGES</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $zozo as $index=>$avis)
                        <tr>
                            <td class="table-success">{{$index+1}}</td>
                            <td>{{$avis->livraison->commande->user->nom}}  {{$avis->livraison->commande->user->prenom}}  {{$avis->livraison->commande->user->telephone }}  {{$avis->livraison->commande->user->email}}</td>
                            <td > <button class="btn waves-effect waves-light btn-inverse btn-icon" >{{$avis->livraison->commande_id}}</button> </td>
                            <td> <button class="btn waves-effect waves-light btn-inverse btn-icon" >{{$avis->livraison_id}}</button> </td>
                            <td>{{$avis['message']}}</td>
                            <td><a href="{{route('avis.delete' , $avis)}}"><button  class="btn btn-success waves-effect waves-light">Réçu</button></a></td>
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


