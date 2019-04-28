@extends ('template_inside')

@section('header_bar')
<?php $linkActive="compte" ?>
@include('subviews.headerBar')
@endsection

@section ('contenu')

<div class="site-blocks-cover inner-page-cover overlay bgPresentation" style="background-image: url(../images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center bgPresentation">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Liste de mes réservations</h1>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="100">Un service de qualité !</p>
              </div>
            </div>

            
          </div>
        </div>
    </div>
</div>     

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mb-5"  data-aos="fade">
                <div class="border p-3 rounded mb-2 {{ route('user.update', ['id' => $user[0]->id ]) }}">
                    <a data-toggle="collapse" href="#update-1" role="button" aria-expanded="false" aria-controls="update-1" class="accordion-item h5 d-block mb-0">Modifer mon nom et mon prenom</a>
                        <br>
                        <form action="{{ route('utilisateurUpdate', ['id' => $user[0]->id ]) }}" method="post" id="update-1" class="p-5 bg-white">             
                        {!! csrf_field() !!}
                            <div class="row form-group">
                                <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">Votre Nom</label>
                                <input type="text" name="nom" placeholder="{{ $user[0]->nom }}" class="form-control {{ $errors->has('nom') ? ' is-invalid' : '' }}">
                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="col-md-6">
                                <label class="text-black" for="lname">Votre Prenom</label>
                                <input type="text" name="prenom" placeholder="{{ $user[0]->prenom }}" class="form-control {{ $errors->has('prenom') ? ' is-invalid' : '' }}">
                                @if ($errors->has('prenom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                <label class="text-black" for="lname">Votre Email</label>
                                <input type="email" name="email" placeholder="{{ $user[0]->email }}" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                <input type="submit" value="Valider" class="btn btn-primary py-2 px-4 text-white">
                                </div>
                            </div>
                        </form>
                </div>
                <div class="border p-3 rounded mb-2">
                    <a data-toggle="collapse" href="#update-2" role="button" aria-expanded="false" aria-controls="update-2" class="accordion-item h5 d-block mb-0">Modifer mon mot de passe</a>
                        <br>
                        
                        <div id="update-2">
                            <p class="text-justify" ><span style="color: red;">*</span> La modification s'effectue par e-mail donc une fois le formulaire ci-dessous remplir, vous allez recevoir un email contenant un lien qui une fois le lien suivie, vous permetra de modifier votre mot de passe</p>

                            @include('auth.passwords.emailInside')
                        </div>

                </div>
            </div>

          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            
            <div class="p-4 mb-3 bg-white">
             <p class="mb-0">Votre nom</p>
              <p class="mb-4 font-weight-bold">{{ $user[0]->nom }}</p>

              <p class="mb-0">Votre prenom</p>
              <p class="mb-4 font-weight-bold">{{ $user[0]->prenom }}</p>

              <p class="mb-0">Votre email</p>
              <p class="mb-4 font-weight-bold">{{ $user[0]->email }}</p>

            </div>

          </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
          <div class="col-lg-8">

            <h2 class="mb-5 text-primary">Voir aussi</h2>
              <div class="divContainerPagination">
                @include('restaurant.restaurantRecherche')
              </div>
          </div>
        </div>
    </div>
</div>


@endsection


@section('codejs')
<script type="text/javascript">
            
            
            
            $(document).ready(function(){
                
                
                $(function(){
                    
                    $('body').on('click', '.bookmark', function(e){
                        var statusColor = document.getElementById('bookmark').getAttribute('statusColor');
                        if( statusColor == 'actif' )
                        {
                          //$(this).css('background', '#f23a2e');
                          $(this).css({'background': '#f23a2e'});
                          $(this).children().css('color', '#fff');                          
                          document.getElementById('bookmark').setAttribute('statusColor','inactif')
                        } else {
                          //$(this).css('background', 'green');
                          //$(this).css({'background': 'rgb(255, 255, 255)', 'opacity': '0.3'});
                          $(this).css({'background': 'rgba(255, 255, 255, 0.3)'});
                          $(this).children().css({'color': '#7971EA'});
                          document.getElementById('bookmark').setAttribute('statusColor','actif')
                        }          
                        return false;
                    });
                    // function pour la pagination des autres restaurants
                    $('body').on('click', '.pagination a', function(e){
                        e.preventDefault();
                        var url = $(this).attr('href');
                        var page = $(this).attr('href').split('page=')[1];
                        getArticle(page);
                        window.history.pushState("", "", url);
                    });
                    
                    function getArticle(page){
                        $.ajax({
                            url: "/restaurantRecherche?page="+page
                        }).done(function (data){
                            //alert('ca marche nous somme dans le done!');                            
                            $('.divContainerPagination').html(data);
                            //console.log(data);
                        }).fail(function (){
                            alert("Oups une erreur s'est produite");
                        });
                    }
                });
            });
    </script>
@endsection