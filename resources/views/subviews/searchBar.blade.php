<div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">

              <form method="POST" action="{{route('restaurant.reserver')}}" accept-charset="UTF-8">
              {!! csrf_field() !!}
                <div class="row align-items-center">
                  <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                    <input type="text" name="nom" class="form-control" placeholder="Nom du restaurant (Facultatif)">
                  </div>
                  <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="localite" id="">
                        <option value="">Localité</option>
                        @foreach($search_localites as $search_localite)
                          <option value="{{$search_localite->quartier}}">{{$search_localite->quartier}}</option>
                        @endforeach
                      </select>
                    </div>
                    
                  </div>
                  <div class="col-lg-12 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="cuisine" id="">
                        <option value="">Type de cuisines</option>
                        @foreach($search_cuisines as $search_cuisine)
                          <option value="{{$search_cuisine->cuisine}}">{{$search_cuisine->cuisine}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn btn-primary" value="Go">
                  </div>
                  
                </div>
              </form>

            </div>