<div class="container">
          <div class="row align-items-center">
            
            <div class="col-11 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Rant</a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                    @if ($linkActive === "accueil")
                        <li class="active"><a href="{{ route('home') }}"><span>Accueil</span></a></li>
                    @else
                        <li><a href="{{ route('home') }}"><span>Accueil</span></a></li>
                    @endif
                    
                    @if ($linkActive === "reserver")
                        <li class="active"><a href="{{ route('restaurant.reserver') }}"><span>Reserver</span></a></li>
                    @else
                        <li><a href="{{ route('restaurant.reserver') }}"><span>Reserver</span></a></li>
                    @endif

                    @if ($linkActive === "apropos")
                        <li class="active"><a href="{{ route('apropos') }}"><span>A propos de nous</span></a></li>
                    @else
                        <li><a href="{{ route('apropos') }}"><span>A propos de nous</span></a></li>
                    @endif

                    @if ($linkActive === "contact")
                        <li class="active"><a href="{{ route('contact') }}"><span>Contact</span></a></li>
                    @else
                        <li><a href="{{ route('contact') }}"><span>Contact</span></a></li>
                    @endif

                    @if ($linkActive === "compte")
                        <li class="active has-children">
                    @else
                        <li class="has-children">
                    @endif                  
                    <a href="#" onclick="return function(){return false;}" ><span>Mon compte</span></a>
                    <ul class="dropdown">
                        @guest
                            <li><a href="{{ route('login') }}"><span>{{ __('Se connecter') }}</span></a>
                            </li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}"><span>{{ __("S'inscrire") }}</span></a>
                                </li>
                            @endif
                        @else
                            <li><a href="#" onclick="return function(){return false;}" ><span>{{ Auth::user()->nom }}</span></a></li>
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            <li><a href="{{ route('mes-réservations', ['id' => Auth::user()->id]) }}"><span>Mes réservations</span></a></li>
                            <li><a href="{{ route('mon-profile', ['id' => Auth::user()->id]) }}"><span>Voir mon profil</span></a></li>
                        @endguest
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>

          </div>