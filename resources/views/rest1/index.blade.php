@extends ('template_inside')

@section('titre')
    Listing des restaurants
@endsection

@section ('contenu')
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(../images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Listing des restaurants</h1>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="100">We Make You Better!</p>
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

            @foreach($rest1s as $rest1)
            <div class="d-block d-md-flex listing-horizontal">

              <a href="#" class="img d-block" style="background-image: url('../{!! $rest1->image !!}')">
                <span class="category">Restaurants</span>
              </a>

              <div class="lh-content">
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="#"> {!! $rest1->nom !!} </a></h3>
                {!! link_to_route('rest1.show', 'Voir', [$rest1->rest_id], ['class'=>'btn btn-success btn-block']) !!}
                <p>{!! $rest1->immeuble !!}, {!! $rest1->rue !!}, {!! $rest1->quartier !!}</p>
                <p>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span>(3 Reviews)</span>
                </p>

                
              </div>

            </div>
            @endforeach

            
            <div class="col-12 mt-5 text-center">
              <div class="custom-pagination">
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <span class="more-page">...</span>
                <a href="#">10</a>
              </div>
            </div>

          </div>
          <div class="col-lg-3 ml-auto">

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Filters</h3>
              <form action="#" method="post">
                <div class="form-group">
                  <input type="text" placeholder="What are you looking for?" class="form-control">
                </div>
                <div class="form-group">
                  <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="" id="">
                        <option value="">All Categories</option>
                        <option value="">Appartment</option>
                        <option value="">Restaurant</option>
                        <option value="">Eat &amp; Drink</option>
                        <option value="">Events</option>
                        <option value="">Fitness</option>
                        <option value="">Others</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <!-- select-wrap, .wrap-icon -->
                  <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <input type="text" placeholder="Location" class="form-control">
                  </div>
                </div>
              </form>
            </div>
            
            <div class="mb-5">
              <form action="#" method="post">
                <div class="form-group">
                  <p>Radius around selected destination</p>
                </div>
                <div class="form-group">
                  <input type="range" min="0" max="100" value="20" data-rangeslider>
                </div>
              </form>
            </div>

            <div class="mb-5">
              <form action="#" method="post">
                <div class="form-group">
                  <p>Category 'Restaurant' is selected</p>
                  <p>More filters</p>
                </div>
                <div class="form-group">
                  <ul class="list-unstyled">
                    <li>
                      <label for="option1">
                        <input type="checkbox" id="option1">
                        Coffee
                      </label>
                    </li>
                    <li>
                      <label for="option2">
                        <input type="checkbox" id="option2">
                        Vegetarian
                      </label>
                    </li>
                    <li>
                      <label for="option3">
                        <input type="checkbox" id="option3">
                        Vegan Foods
                      </label>
                    </li>
                    <li>
                      <label for="option4">
                        <input type="checkbox" id="option4">
                        Sea Foods
                      </label>
                    </li>
                  </ul>
                </div>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Popular Categories</h2>
            <p class="color-black-opacity-5">Lorem Ipsum Dolor Sit Amet</p>
          </div>
        </div>

        <div class="row align-items-stretch">
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-house"></span></span>
              <span class="caption mb-2 d-block">Appartments</span>
              <span class="number">3,921</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-guitar"></span></span>
              <span class="caption mb-2 d-block">Events</span>
              <span class="number">398</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-gym"></span></span>
              <span class="caption mb-2 d-block">Fitness</span>
              <span class="number">1,229</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-shopping-bag"></span></span>
              <span class="caption mb-2 d-block">Department Store</span>
              <span class="number">32,891</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-mexican-taco"></span></span>
              <span class="caption mb-2 d-block">Restaurants</span>
              <span class="number">29,221</span>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="#" class="popular-category h-100">
              <span class="icon"><span class="flaticon-cocktail"></span></span>
              <span class="caption mb-2 d-block">Other</span>
              <span class="number">219</span>
            </a>
          </div>
        </div>
      </div>
    </div>

@endsection

