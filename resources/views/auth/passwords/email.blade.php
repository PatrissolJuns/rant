<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Rant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{csrf_token()}}">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="../../fonts/icomoon/style.css">

    <!-- <link rel="stylesheet" href="http://localhost/MyRestaurant/resources/views/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../../css/aos.css">
    <link rel="stylesheet" href="../../css/rangeslider.css">

    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/jquery-3.3.1.min.js"></script>

  </head>
  <body>
  <div class="site-wrap">

<div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
      
      <header class="site-navbar py-2 bg-white" role="banner">

        <?php $linkActive="compte" ?>
        @include('subviews.headerBar')
        <!-- </div> -->
        
      </header>
      

<div class="site-blocks-cover inner-page-cover overlay bgPresentation bgPresentation" style="background-image: url('../../images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center bgPresentation">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Reception du mot de passe par email</h1>
                <p class="mb-0">Veillez remplir le formulaire ci-dessous</p>
              </div>
            </div>

            
          </div>
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="text-justify" ><span style="color: red;">*</span> La modification s'effectue par e-mail donc une fois le formulaire ci-dessous remplir, vous allez recevoir un email contenant un lien qui une fois le lien suivie, vous permetra de modifier votre mot de passe</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rénitialisation du mot de passe') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Addresse e-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">Lien rapide</h2>
                <ul class="list-unstyled">
                  <li><a href="{{ route('apropos') }}">A propos de nous</a></li>
                  <li><a href="{{ route('restaurant.reserver') }}">Réserver une table</a></li>
                  <li><a href="{{ route('home') }}">Ce que les gens pensent</a></li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">Suivez-nous</h2>
                <a href="https://facebook.com" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://instagram.com" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://linkedln.com" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Me contacter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Envoyer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; All rights reserved <a href="https://patrissolkenfack.heroku.com" target="_blank" >Patrissol KENFACK #Jun's</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>
  
  <script src="../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../js/jquery-ui.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.stellar.min.js"></script>
  <script src="../../js/jquery.countdown.min.js"></script>
  <script src="../../js/jquery.magnific-popup.min.js"></script>
  <script src="../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../js/aos.js"></script>
  <script src="../../js/rangeslider.min.js"></script>
  

  <script src="../../js/typed.js"></script>
            <script>
              var typed = new Typed('.typed-words', {
                strings: [" un restaurant adéquat"," de la nourriture de haute qualité", " un rapport qualité/prix d'excellent"],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true
              });

              $(document).ready(function(){
                
              });

            </script>

  <script src="../../js/main.js"></script>
    
  </body>
</html>