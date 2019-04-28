@extends ('template_inside')

@section('header_bar')
<?php $linkActive="contact" ?>
@include('subviews.headerBar')
@endsection


@section ('contenu')

<div class="site-blocks-cover inner-page-cover overlay bgPresentation" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center bgPresentation">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Me contacter</h1>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="100">Un service de qualité à des prix exceptionel !</p>
              </div>
            </div>

            
          </div>
        </div>
    </div>
</div>     

<div class="site-section "  data-aos="fade">
    <div class="container">
        <div class="row mb-5">
          <div class="col-md-12" >
            <h3>Ce site à été créer juste pour montrer mes capacités de <a href="#" onclick='return function(){return false;}' >FullStack Developper</a></h3>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-4 mx-auto">
            <h3>Qui suis-je</h3>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 ml-auto">
            <p class="text-justify">Je suis un jeune passionné et professionnel dans le développement des sites web. Titulaire de plusieurs certifications, mon expertise concerne non seulement la création de site web propre, beau et qui va avec tout type d’écran mais aussi le développement WordPress, la création de logo et la gestion de projet.</p>
          </div>
          <div class="col-md-6 ml-auto">
            <p class="text-justify">Au fil du temps, j’ai appris à coupler vitesse et efficacité. 
                Je m’appelle <a href="#" onclick='return function(){return false;}'>Patrissol KENFACK</a>, un jeune très dynamique.</p>
          </div>
        </div>

    </div>
</div>

@include('subviews.contactMe')

@endsection