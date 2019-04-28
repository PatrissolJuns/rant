<h3 id="totalSearch">{{ $restaurants->total() }} correspondance(s) trouvée(s) </h3><br>
              <!-- <h3 id="totalSearch">{{ count($restaurants) }} correspondance(s) trouvée(s) </h3><br> -->
              @foreach($restaurants as $restaurant)
              <div class="d-block d-md-flex listing-horizontal">

                <a href="#" class="img d-block" style="background-image: url('../images/{!! $restaurant->image !!}')">
                  <span class="category">{{$restaurant->cuisine}}</span>
                </a>

                <div class="lh-content">
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="{{ route('restaurant.show', ['restaurant' => $restaurant->id]) }}"> {!! $restaurant->nom !!} </a></h3>
                  <p>{!! $restaurant->immeuble !!}, {!! $restaurant->rue !!}, {!! $restaurant->quartier !!}</p>
                  <p>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span>(3 Reviews)</span>
                  </p>
                  {!! link_to_route('restaurant.show', 'Reserver une table', [$restaurant->id], ['class'=>'btn btn-primary btn-block']) !!}
                </div>

              </div>
              @endforeach
            

              {{ $restaurants->links() }}