@extends ('template_inside')


@section('header_bar')
<?php $linkActive="reserver" ?>
@include('subviews.headerBar')
@endsection

@section ('contenu')
<div class="site-blocks-cover inner-page-cover overlay bgPresentation" style="background-image: url({{ asset('/images/hero_1.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center bgPresentation"> <!-- Ceci c'est pour les éléments qui sont à l'interieur du div du background -->

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Listing des restaurants</h1>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="100"> Toujours les meilleurs </p>
              </div>
            </div><br>

            @include('subviews.searchBar')
            <br>

          </div>
        </div>
      </div>
    </div>  


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="divContainerPagination">
            <h3 id="totalSearch">{{ $restaurants->total() }} correspondance(s) trouvée(s) </h3><br>
              @include('restaurant.restaurantRecherche')
            </div>
          </div>
          

        </div>
      </div>
    </div>

    @include('subviews.questionAsked')

    <script type="text/javascript">
            $(document).ready(function(){
                        
                $(function(){
                    $('body').on('click', '.pagination a', function(e){
                        e.preventDefault();
                        alert('dans la pagi');
                        var url = $(this).attr('href');
                        var page = $(this).attr('href').split('page=')[1];
                        var nom = '{{ $dataSearch["nom"] }}';
                        var localite = '{{ $dataSearch["localite"] }}';
                        var cuisine = '{{ $dataSearch["cuisine"] }}';
                        
                        alert('cuisine datasearch est : '+cuisine);
                        //getArticle(page);
                        getArticle2(page, nom, localite, cuisine);
                        window.history.pushState("", "", url);
                    });
                    /*
                    function getArticle(page){
                        $.ajax({
                            url: "/restaurantRecherche?page="+page
                        }).done(function (data){
                            //alert('ca marche nous somme dans le done!');                            
                            $('.divContainerPagination').html(data);
                            //console.log(data);
                        }).fail(function (){
                            alert('Articles could not be loaded');
                        });
                    }*/
                    function getArticle2(page, nom, localite, cuisine){
                        $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            }
                          });
                        $.ajax({
                            url: "/restaurantRecherche?page="+page,
                            data: {
                              nom: nom,
                              localite: localite,
                              cuisine: cuisine,
                            }
                        }).done(function (data){
                            //alert('ca marche nous somme dans le done!');                            
                            $('.divContainerPagination').html(data);
                            //console.log(data);
                        }).fail(function (){
                            alert('Articles could not be loaded');
                        });
                    }
                });
            });
    </script>
@endsection

