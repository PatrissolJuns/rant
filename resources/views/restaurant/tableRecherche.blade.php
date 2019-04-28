              @foreach($tablerests as $tablerest)
              <div class="mb-5">             
                <div class="d-block d-md-flex listing-horizontal">
          
                  <div class="lh-content">
                    <h5><a href="#">{{ $tablerest->nom }}</a></h5>
                    <h6>{{ $tablerest->prix }} Places</h6>
                    <h6>prix: {{ $tablerest->nb_place }} €</h6>
                    @if($tablerest->date_reservation === null)
                      <h6>Disponibe</h6>
                      <button class="btn btn-primary btnTable" tableid="{{ $tablerest->id }}" id="debutReservation" data-toggle="modal" data-target="#myModalReserver" >Reserver</button>
                    @else
                      <p>Non Disponible, deja réserver pour le <h6>{{ $tablerest->date_reservation }}</h6></p>
                    @endif
                  </div>
                </div>                 
              </div>
              @endforeach

              {{ $tablerests->links() }}