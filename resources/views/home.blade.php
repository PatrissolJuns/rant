@extends('template_inside')


@section('header_bar')
<?php $linkActive="accueil" ?>
@include('subviews.headerBar')
@endsection

@section('contenu')
    
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg); min-height: 600px; height: calc(100vh);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center" style="min-height: 500px; height: calc(30vh);">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Chercher près de chez moi <span class="typed-words"></span></h1>
                <p data-aos="fade-up" data-aos-delay="100">Découvrez les meilleurs restaurants à travers le monde</p>
              </div>
            </div>

            @include('subviews.searchBar')

          </div>
        </div>
      </div>
    </div>  


    @include('subviews.restaurantLesPlusVus')
  
    @include('subviews.popularCategories')



    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">Pourquoi Nous</h2>
            <p>Rant met a disposition des centaines de restaurants et éffectue des classements selon vos appreciations.</p>
            <p class="mb-4">Rant est tout simplement le meilleur, une occasion exceptionnelle de découvrir les meilleurs plats du monde</p>

            <ul class="ul-check list-unstyled success">
              <li>Simple</li>
              <li>Efficace</li>
              <li>Gratuit</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Ce que les gens pensent de nous</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-3">
                <p>Jean-Michel</p>
              </figure>
              <blockquote>
                <p>&ldquo;Grâce à ce site j'ai expréimenter un restaurant, c'etait un troquet de quartier, accueil sympathique, ambiance bon enfant, beaucoup d'habitués. J'y suis allé parce que j'adore les tartares et j'avais lu des avis incroyablement élogieux. Celui que j'ai mangé (préparé à la thai) était correct sans plus, viande fraiche mais un peu sèche.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-3">
                <p>Christine Laurette</p>
              </figure>
              <blockquote>
                <p>&ldquo;#Rant doit être mondialiser j'ai fait la connaissance de plusieurs restaurants, un moment unique, un délice absolu, un accueil chaleureux et très agréable foncez si vous pouvez vous ne regretterez pas!! Le meilleur burger de ma life a des prix sympas!! Les lillois♥️&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Robert Lacroix</p>
              </figure>
              <blockquote>
                <p>&ldquo;hum, merci beaucoup #Rant  Très bon accueil avec présentation des plats, burgers au top qualité et gourmands, tartare savoureux&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Adrien Nadege</p>
              </figure>
              <blockquote>
                <p>&ldquo;J'ai connu grâce à #Rant un fabuleux restaurant, Le cadre est sympathique, les employés sont joviaux, et la nourriture est délicieuse. Nous sommes venus à 2 sans réservation un mardi soir du mois d'Avril, et malgré les nombreux clients, nous avons étés placé très rapidement sur une petite table isolée.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>


    @include('subviews.questionAsked')
    
    
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-2 text-white">Qu'attendez-vous encore ? </h2>
            <p class="mb-4 lead text-white-opacity-05">Créer votre compte dès maintenant et découvrer un univers de restaurant prestigieux rien que pour vous servir</p>
            <p class="mb-0"><a href="{{ route('register') }}" class="btn btn-outline-white text-white btn-md font-weight-bold">S'inscrire</a></p>
          </div>
        </div>
      </div>
    </div>
    
@endsection
