@extends('layouts.app')
@section('content')
<section id="subscribe">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 text-center" >
          <h2 class="subscribe-title">¡Nuestras Playas!</h2>
          <p class="subscribe-text">Encuentra todas las playas de nuestro hermoso estado de Quintana Roo</p>
        </div>
      </div>
    </div>
  </section>

<div clas="caja">
@foreach($playas as $recorrido)
  <div id="carta" class="card mb-3">
    <div class="card-body">
      <h4 class="card-title text-center">Playa:  {{$recorrido->nombre}} <?php if(($recorrido->bandera)==1) {
        echo '<img src="images/banV.png" alt="">';

    }else if(($recorrido->bandera)==2) {
      echo '<img src="images/banA.png" alt="">';

    }else if(($recorrido->bandera)==3) {
      echo '<img src="images/banR.png" alt="">';

    }else if(($recorrido->bandera)==4) {
      echo '<img src="images/banAz.png" alt="">';

    }else if(($recorrido->bandera)==5) {
      echo '<img src="images/banB.png" alt="">';

    }else if(($recorrido->bandera)==6) {
      echo '<img src="images/banN" alt="">';

    }?></h4>
      <br>
      <a href="/playas/{{$recorrido->id}}"><img class="card-img-top" src="images/delfines.jpg" alt=""></a>
      <p class="card-text">
            
            </p>
            <p class="card-text font-size-18">Estacionamiento: {{$recorrido->Estacionamiento}}</p>
            <p class="card-text font-size-18">Estado de la republica: {{$recorrido->ubicacion}}</p>
            <p class="card-text font-size-18">Evento actual: {{$recorrido->evento}}</p>
    </div>
  </div>
    @endforeach
  </div>
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="row">
              <div class="col-md-7">
                <h2 class="footer-heading mb-4">Mi PlayaQR:</h2>
                <p>Todos los derechos reservados a Mi PlayaQR</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Nos localizamos en:</h2>
                <p>Carretera Cancún-Aeropuerto, Km. 11.5 S.M. 299, Mz. 5, Lt 1, 77565 Cancùn, Q.R.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 ml-auto">
            <h2 class="footer-heading mb-4">Contacto:</h2>
            <li><a href="#about-section" class="smoothscroll pl-0 "><span class="icon-facebook"> Facebook</span></a></li>
            <li><a href="#about-section" class="smoothscroll pl-0 "><span class="icon-twitter"> Twiiter</span></a></li>
            <li><a href="#about-section" class="smoothscroll pl-0 "><span class="icon-instagram"> Instagram</span></a></li>
            </form>
          </div>
        </div>
      </div>
    </footer>
@endsection