@extends('app')
@section('content')
    @include('partials.header')

    <div class="gamme">
        <a href="#">Gamme > Camry</a>
    </div>
    <p class="p1">TOYOTA CAMRY LOUE A 10000 FCFA/JOURS</p>
    <div class="divH4" >
        <h4 class="h41" style="z-index: -100;">
            Cette berline allie élégance et modernité pour offrir une expérience de conduite unique. Sa technologie de pointe confère à la Camry une accélération sportive, des changements de vitesse en douceur et une agilité incomparable. Ses moteurs de 2,5L ou 3,5L à essence avec transmission automatique à 6 ou 8 vitesses, permettent un rendement énergétique exceptionnel. La Camry est dotée d’équipements de sécurité active et passive tels que les airbags et la sécurité enfant qui garantissent la tranquillité d’esprit du conducteur et de ses passagers. Transformez vos déplacements en de véritables moments de plaisir et entrez dans l’excellence avec Camry. 
        </h4>
    </div>
    <hr>
    
   
    <section id="features" class="features" style="margin-top: 0;padding-top:0;">

        <div class="container-fluid" data-aos="fade-up" style="padding:0;margin-top:0;">
          <div class="row feature-icons" data-aos="fade-up" style="padding:0;margin-top:0;">
            <p class="p1">CARACTERISTIQUES</p>
            <br>
            
            <div class="row">
  
              <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100" >
                <img src="images/auto2.png" class="img-fluid p-4" alt="" style="width: 100%;">
              </div>
  
              <div class="col-xl-8 d-flex content">
                <div class="row align-self-center gy-4">
                    <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                        <img src="images/moteur.png" alt="#">
                        <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                        <h4>MOTEUR</h4>
                        <div class="listeCaracteristique" >
                            <p> <span>Alimentation:</span><span> Injection électronique, Injection directe</span> </p>
                            <p> <span>Carburant:</span><span>Essence</span> </p>
                            <p> <span>Cylindrés(cm <sup>3</sup>:</span><span>2487</span> </p>
                        </div>
                        </div>
                  </div>

                  <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                    <img src="images/dimension.png" alt="#">
                    <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                    <h4>DIMENSION</h4>
                    <div class="listeCaracteristique"  >
                        <p> <span>Dimensions (Lxlxh) en mm : </span><span> 4885 x 1840 x 1455</span> </p>
                        <p> <span>Empattement (mm) :</span><span>2825</span> </p>
                        <p> <span>Garde au sol (mm) : </span><span>145</span> </p>
                    </div>


                    </div>
              </div>
  
              <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center;">
                <img src="images/poids.png" alt="#">
                <div style="display: flex; justify-content: center; flex-direction: column; align-items: center; ">
                <h4>POIDS / CAPACITE </h4>
                <div class="listeCaracteristique" >
                    <p> <span>Capacité réservoir carburant (L) : </span><span> 60</span> </p>
                    <p> <span>Poids à vide (kg) : </span><span>1560</span> </p>
                    <p> <span>Nombre d'usagers : </span><span>5 maximum</span> </p>
                </div>
                </div>
          </div>
          <div class="col-md-6 icon-box" data-aos="fade-up" style="display: flex; flex-direction: column; justify-content: center;align-items: center; z-index:5;">
            
            <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;position: absolute; z-index:5; ">
                
              <a href="#" class="btn-reserve" onclick="document.getElementById('id01').style.display='block'" >RESERVEZ MAINTENANT</a>


                <a href="#" class="btn-info" onclick="document.getElementById('id02').style.display='block'" >CONTACTEZ-NOUS</a>

              
            </div>
      </div>
  
                </div>
              </div>
  
            </div>
  
          </div><!-- End Feature Icons -->
  
        </div>
  
      </section>

      @include('partials.footer')
@endsection