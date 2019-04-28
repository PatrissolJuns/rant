
<div class="site-section" data-aos="fade">
      <div class="container">
                <div class="row justify-content-center mb-5">
                  <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Les restaurants les plus visités</h2>
                    <p class="color-black-opacity-5">Rien que les meilleurs</p>
                  </div>
                </div>

                <div class="row">
                  @foreach($restaurants as $restaurant)
                    <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                      
                      <div class="listing-item">
                        <div class="listing-image">
                          <a href="{{ route('restaurant.show', ['restaurant' => $restaurant->id]) }}"><img src="../images/{{$restaurant->image}}" alt="Image" class="img-fluid"></a>
                        </div>
                        <div class="listing-item-content">
                          <a statusColor="actif" onclick="return statusColorFunction(this,'Restaurant{{ $restaurant->id }}');"  class="bookmark" id="Restaurant{{ $restaurant->id }}" style="cursor: pointer;"><span class="icon-heart"></span></a>
                          
                          <form action="{{ route('restaurant.reserver') }}" id="popularRestaurantForm{{ $restaurant->cuisine }}" accept-charset="UTF-8" method="post">
                                {!! csrf_field() !!}
                                <input type="hidden" name="cuisine" value="{{ $restaurant->cuisine }}">
                                <input type="hidden" name="nom">
                                <input type="hidden" name="localite">
                            </form>
                            <a href="{{ route('restaurant.reserver') }}" 
                                onclick="event.preventDefault(); 
                                document.getElementById('popularRestaurantForm{{ $restaurant->cuisine }}').submit();" 
                                class="px-3 mb-3 category">
                                {{$restaurant->cuisine}}
                            </a>
                          
                          <h2 class="mb-1"><a href="{{ route('restaurant.show', ['restaurant' => $restaurant->id]) }}">{{$restaurant->nom}}</a></h2>
                          <span class="address">{!! $restaurant->immeuble !!}, {!! $restaurant->rue !!}, {!! $restaurant->quartier !!}</span>
                        </div>
                      </div>

                    </div>
                  @endforeach
                </div>

      </div>
</div>