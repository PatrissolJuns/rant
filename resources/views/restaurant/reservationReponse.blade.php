        
        
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <h4>Reservation effetuer avec success</h4>
        <h5>Pour plus d'information allez dans <a href="{{ route('mes-réservations', ['id' => Auth::user()->id]) }}">Mes reservations</a></h5>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
      </div>