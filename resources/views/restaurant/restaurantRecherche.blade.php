              <!-- <h3 id="totalSearch">{{ count($restaurants) }} correspondance(s) trouvée(s) </h3><br> -->
              @foreach($restaurants as $restaurant)
              <div class="d-block d-md-flex listing-horizontal">

                <a href="{{ route('restaurant.show', ['restaurant' => $restaurant->id]) }}" class="img d-block" style="background-image: url('../images/{{ $restaurant->image }}')">
                  <span class="category">{{$restaurant->cuisine}}</span>
                </a>

                <div class="lh-content">
                  <a href="#" statusColor="actif" onclick="return statusColorFunction(this,'RestaurantRecherche{{ $restaurant->id }}');"  class="bookmark" id="RestaurantRecherche{{ $restaurant->id }}" ><span class="icon-heart"></span></a>
                  <h3><a href="{{ route('restaurant.show', ['restaurant' => $restaurant->id]) }}"> {{ $restaurant->nom }} </a></h3>
                  <p>Adresse: <strong>{{ $restaurant->immeuble }}, {{ $restaurant->rue }}</strong></p>
                  <p>quartier: <strong>{{ $restaurant->quartier }}</strong></p>
                  {{ link_to_route('restaurant.show', 'Reserver une table', [$restaurant->id], ['class'=>'btn btn-primary btn-block']) }}
                </div>

              </div>
              @endforeach
            

              {{ $restaurants->links() }}