@extends('admin/layouts.base')



@section('content')

    <div class="card">
        <div class="card-header">
            <h2 class="text-center">NOS CONTACTES</h2>
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
                            <th>NOM</th>
                            <th>PRENOM</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>MESSAGES</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $docs as $index=>$contact)
                        <tr>
                            <td class="table-active">{{$index+1}}</td>
                            <td>{{$contact['nom']}}</td>
                            <td class="table-success">{{$contact['prenom']}}</td>
                            <td>{{$contact['email']}}</td>
                            <td  class="table-warning">{{$contact['phone']}}</td>
                            <td>{{$contact['message']}}</td>
                            <td><a href="{{route('contact.delete', $contact )}}"><button  class="btn btn-success waves-effect waves-light" >Réçu</button></a></td>
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


