@extends('app')
@section('content')
@include('partials.header')
<style>
  .grosDiv{
    height: 1100px;
    background-image: url('images/foret5.jpg');
    background-size:100%;
    background-repeat: no-repeat;
    overflow: hidden;
  }
  .p1{
    padding-bottom: 20px;
  }
  textarea{
    height: 100px;
  }
  #rouge{
    color: red;
  }
</style>
  <div class="gamme">
    <a href="#">Accueil > Gamme > Camry</a>
  </div>
  <p class="p1">FAITES VOTRE RESERVATION DE VOITURE</p>

   <div class="row d-flex justify-center align-center grosDiv" style="display: flex; align-items: center; justify-content: center; ">

    <form class="" style="width: 60%; border: none; border-radius: 15px;padding: 30px" action="{{route('reservation.store')}}" method="POST">
     @csrf
   
      
      <div class="form-row row">
        {{-- <div class="col-6">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="civilite">
                <option selected>Civilité *</option>
                <option value="1">Monsieur</option>
                <option value="2">Madame</option>
                <option value="3">Aucun</option>
              </select>
        </div> --}}
        <div class="col-6">
         
          <input type="text" class="form-control" name="societe" placeholder="Société * ">
        </div>
      </div>


      {{-- <div class="form-row row">
        <div class="col-6">
         
          <input type="text" class="form-control" name="nom" placeholder="Nom *"> 
        </div>
        <div class="col-6">
         
          <input type="text" class="form-control" name="prenom" placeholder="Prénom *">
        </div>
      </div> --}}


      <div class="form-row row">
        <div class="col-6">
          
          <input type="text" class="form-control" name="adresse" placeholder="Adresse *">
        </div>
        <div class="col-6">
          
          <input type="text" class="form-control" name="ville" placeholder="Ville *">
        </div>
      </div>


      <div class="form-row row">
        <div class="col-6">
          
          <input type="text" class="form-control" name="pays" placeholder="Pays ">
        </div>
        {{-- <div class="col-6">
          
          <input type="email" class="form-control" name="email" placeholder="Email *">
        </div> --}}
      </div>

      <div class="form-row row">
        {{-- <div class="col-6">
          
          <input type="phone" class="form-control" name="phone" placeholder="Téléphone * ">
        </div> --}}
        <div class="col-6">
          
          <input type="text" class="form-control" name="maison" placeholder="Maison *">
        </div>
      </div>


      <div class="form-row">
        <div class="col">
          <label for="photo">Pièce d'identité</label>
          <input type="file" class="form-control" name="card" placeholder="Pièce d'identité *" id="photo">
        </div>
      </div>
      <br>
      <hr>
      <br>
      <div class="form-row row">
        <div class="col-6">
          <label for="dateLocation">Date de la location</label>
          <input type="date" class="form-control" name="date_location" placeholder="Date souhaitée *" id="dateLocation">
        </div>
        <div class="col-6">
          <label for="horaireLocation">Heure de la location</label>
          <input type="time" class="form-control" name="heure_location" placeholder="Horaire souhaitée *">
        </div>
      </div>

      <div class="form-row row">
        <div class="col-6">
          <label for="dateRetour">Date de retour</label>
          <input type="date" class="form-control" name="date_location_back" placeholder="Date retour *">
        </div>
        <div class="col-6">
          <label for="horaireRetour">Heure de retour</label>
          <input type="time" class="form-control" name="heure_location_back" placeholder="Horaire retour *">
        </div>
      </div>



      <div class="form-row">
        <div class="col">
         
          <textarea class="form-control" name="message" placeholder="Autres détails utiles"></textarea>
          {{-- <button class="btn bg-primary h-2 text-white fw-bold fs-5" style="margin-top: 20px">Envoyer</button> --}}
          <input type="submit" value="RESERVER VOITURE" id="sendVoiture" name="sendVoiture" >
        </div>
      </div>
    </form>
  </div>
 

  @include('partials.footer')
@endsection