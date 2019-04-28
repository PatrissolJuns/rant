@extends ('template_inside')

@section('header_bar')
<?php $linkActive="reserver" ?>
@include('subviews.headerBar')
@endsection

@section ('contenu')


<div class="site-blocks-cover inner-page-cover overlay bgPresentation bgPresentation" style="background-image: url('../images/{!! $rest->image !!}'); min-height: 200px;" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center bgPresentation">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>{!! $rest->nom !!}</h1>
                <p class="mb-0">{!! $rest->immeuble !!}, {!! $rest->rue !!}, {!! $rest->quartier !!}</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>


<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

            <div class="mb-5 border-bottom pb-5">
              <img src="../images/{!! $rest->image !!}" alt="Image" class="img-fluid mb-4">

              <div class="row mb-5">
                <div class="col-md">
                  <p>{!! $rest->description !!}</p>
                </div>                  
              </div>
              
            </div>
            
          </div>

          <div class="col-lg-3 ml-auto">
            
            <h2 class="h5 text-black mb-3 text-center">Liste des tables</h2>
              <div id="divContainerPagination">
                @include('restaurant.tableRecherche')
              </div>

              <!-- The Modal -->
              <section class="modal fade" id="myModalReserver">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Rerservation au restaurant  {!! $rest->nom !!}</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    @auth

                    <!-- Modal body -->
                    <div class="modal-body">
                            <h5>Les paiements ne sont valides que par carte bancaire</h5>
                            
                            <form>                          
                              {!! csrf_field() !!}
                              <div class="form-group">
                                  <label class="text-black" for="fname">Numero de carte bancaire</label>
                                  <input type="text" id="cbank" class="form-control">                            
                              </div>
                            </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" id="accepterReservation">Reserver</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    </div>

                    <script type="text/javascript">
                      //$(document).ready(function(){
                        $('#accepterReservation').click(function(e){
                          e.preventDefault();
                          var cb = $("#cbank").val();
                          var tablerest_id = document.getElementById('debutReservation').getAttribute('tableid');
                          var user_id = {{ Auth::user()->id }};
                          var restaurant_id = {{ $rest->id }};
                          var day = new Date().getDate();
                          var month = new Date().getMonth();
                          var year = new Date().getFullYear();
                          var dateAujourdhui = year+"-"+month+"-"+day;

                          $.ajaxSetup({
                            headers: {
                              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            }
                          });
                          $.ajax({
                            url: "{{url('restaurant/reservation')}}",
                            method: 'post',
                            data: {
                              cbank: $("#cbank").val(),
                              table_id: tablerest_id,                             
                              date_reservation: dateAujourdhui,
                              rest_id: restaurant_id,
                              user_id: user_id
                            },
                            success: function(result){
                              //$('.alert').show(2000);
                              $('.modal-content').html(result);
                              //document.getElementById('debutReservation').setAttribute('data-dismiss', "modal");
                              //$('.alert').hide(1000);
                            }
                          /*}) .done(function(result){
                              $('.alert').show(1000);
                              $('.alert').html(result.success);
                              $('.alert').hide(3000);
                              document.getElementById('debutReservation').setAttribute('data-dismiss', "modal");
                          
                            }).fail(function(){
                              $('.alert-danger').show();
                              //$('.alert-danger').html();
                            });     */                        
                          });
                        });
                      //});
                    </script>     
                    @endauth

                    @guest
                      <!-- Modal body -->
                      <div class="modal-body">
                            <h5>Merci de bien vouloir vous connecter pour pouvoir valider votre reservation</h5>
                      </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <a type="button" href="{{ route('login') }}"  class="btn btn-success" >Se connecter</a>
                      <a type="button" href="{{ route('register') }}"  class="btn btn-primary" >S'enregistrer</a>
                    </div>
                    @endguest

                  </div>
                </div>
              </section>

          </div>
            
    </div>
  </div>
</div>

@include('subviews.restaurantLesPlusVus')

@include('subviews.popularCategories')

@include('subviews.questionAsked')

@endsection

@section('codejs')
<script type="text/javascript">
            
            
            
            $(document).ready(function(){
                
                
                $(function(){
                    // function pour la pagination des autres restaurants
                    $('body').on('click', '.pagination a', function(e){
                        e.preventDefault();
                        var url = $(this).attr('href');
                        var page = $(this).attr('href').split('page=')[1];
                        var restaurant_id = {{ $rest->id }};
                        getArticle(page, restaurant_id);
                        window.history.pushState("", "", url);
                    });
                    
                    function getArticle(page, rest_id){
                        $.ajax({
                            url: "/tableRecherche/"+rest_id+"?page="+page,
                            data: {
                              id: rest_id
                            }
                        }).done(function (data){
                            //alert('ca marche nous somme dans le done!');                            
                            $('#divContainerPagination').html(data);
                            //console.log(data);
                        }).fail(function (){
                            alert('Articles could not be loaded');
                        });
                    }
                });
            });
    </script>
@endsection