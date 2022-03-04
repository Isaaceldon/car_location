@extends('app')
@section('content')
    <form action="{{route('reservation')}}" method="post">
        @csrf
     
        <div class="row d-flex justify-center align-center grosDiv" style="display: flex; align-items: center; justify-content: center; ">
            <div class="form-row row">
                <div class="col-6">
                    <input type="text" class="form-control" name="adresse" placeholder="Adresse * ">
                </div>  
                <div class="col-6">
                    <input type="text" class="form-control" name="ville" placeholder="Ville * ">
                </div>   
            </div>  


            <div class="form-row row">
                <div class="col-6">
                    <input type="text" class="form-control" name="pays" placeholder="Pays * ">
                </div>  
                <div class="col-6">
                    <input type="text" class="form-control" name="maison" placeholder="Maison * ">
                </div>   
            </div> 

            <div class="form-row row">
                <div class="col-6">
                    <input type="text" class="form-control" name="societe" placeholder="Société * ">
                </div>  
                <div class="col-6">
                    <input type="text" class="form-control" name="societe" placeholder="Société * ">
                </div>   
            </div>
            
            <div class="form-row row">
                <div class="col-6">
                    <input type="date" class="form-control" name="date_location" placeholder="Date de location * ">
                </div>  
                <div class="col-6">
                    <input type="time" class="form-control" name="heure_location" placeholder="Heure de location * ">
                </div>   
            </div> 
            
            <div class="form-row row">
                <div class="col-6">
                    <input type="date" class="form-control" name="date_location_back" placeholder="Date de retour* ">
                </div>  
                <div class="col-6">
                    <input type="time" class="form-control" name="heure_location_back" placeholder="Heure de retour * ">
                </div>   
            </div> 

            <div class="form-row row">
                <input type="submit" value="Envoie">  
            </div>

                
        </div>    
    
    </form>
@endsection