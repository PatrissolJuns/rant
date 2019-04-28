<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Rant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{csrf_token()}}">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/fonts/icomoon/style.css') }}">

    <!-- <link rel="stylesheet" href="http://localhost/MyRestaurant/resources/views/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/rangeslider.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>

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

      @yield('header_bar')
        <!-- </div> -->
        
      </header>
      
      @yield('contenu');

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
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Entrer votre email" aria-label="Enter Email" aria-describedby="button-addon2">
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
            Copyright &copy; All rights reserved <a href="https://patrissolkenfack.heroku.com" target="_blank" >Patrissol KENFACK #Jun's</a>
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div>
  
  <script src="{{ asset('/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('/js/popper.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('/js/aos.js') }}"></script>
  <script src="{{ asset('/js/rangeslider.min.js') }}"></script>
  

  <script src="{{ asset('/js/typed.js') }}"></script>
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
              
              // function qui traite les bookmark
              function statusColorFunction(a, e){
                var statusColor = document.getElementById(''+e).getAttribute('statusColor');
                if( statusColor == 'actif' )
                {
                  //$(this).css('background', '#f23a2e');
                  $(a).css({'background': '#f23a2e'});
                  $(a).children().css('color', '#fff');                          
                  document.getElementById(''+e).setAttribute('statusColor','inactif')
                } else {
                  //$(this).css('background', 'green');
                  //$(this).css({'background': 'rgb(255, 255, 255)', 'opacity': '0.3'});
                  $(a).css({'background': 'rgba(255, 255, 255, 0.3)'});
                  $(a).children().css({'color': '#7971EA'});
                  document.getElementById(''+e).setAttribute('statusColor','actif')
                }          
                return false;
              }

            </script>

  <script src="{{ asset('/js/main.js') }}"></script>
    
              
  @yield('codejs')

  </body>
</html>