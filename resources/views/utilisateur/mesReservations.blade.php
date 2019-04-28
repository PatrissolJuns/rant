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

<div class="site-section "  data-aos="fade">
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nom du restaurant</th>
                    <th>Nom de la table</th>
                    <th>Prix</th>
                    <th>Date de la réservation</th>
                </tr>
                </thead>
                <tbody>
                <?php $total = 0;?>
                @foreach($datas as $data)
                <?php $total = $total + $data->prix ?>
                <tr>
                    <td>{{ $data->rest_nom }}</td>
                    <td>{{ $data->nom }}</td>
                    <td>{{ $data->prix }} €</td>
                    <td>{{ $data->date_reservation }}</td>
                </tr>
                @endforeach
                </tbody>
                <tfooter>
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th>{{ $total }} €</th>
                        <th></th>
                    </tr>
                </tfooter>
            </table>
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