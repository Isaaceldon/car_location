@extends("../dashbord")
@section('main-content')
    <div class="col-md-12" style="margin: 0px auto;">
        <div class="tile">
            <div class="tile-body">
                @if (session('updatedMessage'))
                    <div class="alert alert-success mb-3">
                        <h6> {{ session('updatedMessage') }} </h3>
                    </div>
                @endif
                @if (session('deletedMessage'))
                <div class="alert alert-success mb-3">
                    <h6> {{ session('deletedMessage') }} </h3>
                </div>
            @endif
                <div class="text-center mb-4">
                    <a class="btn btn-info" href=" {{ route('cars.create') }} ">Liste des utilisateur ayant fait des réservations</a>
                </div>
                <div>
                    <table class="table table-responsive table-striped table-success table-bordered text-center" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
                                <th>Ville</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Date location</th>
                                <th>Date retour</th>
                                <th>Véhicule loué</th>
                                <th>Pièce</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($locationVoitures as $voiture)
                                <tr>
                                  
                                    <td> {{ $voiture->$user->nom}} </td>
                                    <td>{{ $voiture->$user->prenom }}</td>
                                    <td>{{ $voiture->$user->adresse }}</td>
                                    <td>{{ $voiture->$user->ville}}</td>
                                    <td>{{ $voiture->$user->email }}</td>
                                    <td>{{ $voiture->$user->telephone }}</td>
                                    <td>{{ $voiture->$date_location }}</td>
                                    <td>{{ $voiture->$date_retour}}</td>
                                    <td>{{ $voiture->$car->nom }}</td>
                                    <td><img src="{{ asset('storage/images_pieces/' . $voiture->card) }}" width="50" height="50"
                                        alt="piece"></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
