

<?php // <form method="post" action="{{route('testForm')}}"> ?>
{!! Form::open(['route'=>'testf']) !!}
                <div class="row align-items-center">
                  <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                    <input type="text" name="nom" class="form-control" placeholder="Nom du restaurant (Facultatif)">
                  </div>
                  <?php
                  /*
                  <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="localite" id="">
                        <option value="">Localité</option>
                        @foreach($restaurants as $restaurant)
                          <option value="{{$restaurant->quartier}}">{{$restaurant->quartier}}</option>
                        @endforeach
                      </select>
                    </div>
                    
                  </div>
                  <div class="col-lg-12 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="cuisine" id="">
                        <option value="">Type de cuisines</option>
                        @foreach($restaurants as $restaurant)
                          <option value="{{$restaurant->cuisine}}">{{$restaurant->cuisine}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  
                */
                ?>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn btn-primary" value="Go">
                  </div>
                  
                </div>
</form>