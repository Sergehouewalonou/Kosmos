@extends('admin/layouts.base')



@section('content')

    <div class="card">
        <div class="card-header">
            <h2 class="text-center"> COMMANDE N°{{$commande->id}}</h2>
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
                            <th>MATERIELS</th>
                            <th>QUANTITE</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $commande->materiels as $index=>$commander)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$commander->name}}</td>
                            <td>{{$commander->pivot->qty}}</td>
                        </tr>
                    @endforeach
                        <tr>
                            <td><h2>CLIENT</h2></td>
                            <td>{{$commande->user->nom}}</td>
                            <td>{{$commande->user->prenom}}</td>
                            <td>{{$commande->user->telephone}}</td>
                        </tr>
                        <tr>
                            <td><h2>ADRESSE</h2></td>
                            <td>{{$commande->adresse->ville}}</td>
                            <td>{{$commande->adresse->arrondissement}} </td>
                            <td>{{$commande->adresse->quartier}}</td>
                            <td>{{$commande->adresse->situe}}</td>
                        </tr>

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


