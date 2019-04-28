<div class="site-section">
    <div class="container">
    
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">cuisines Populaires  </h2>
            <p class="color-black-opacity-5">Les types de cuisines les plus populaires</p>
          </div>
        </div>

        <div class="row align-items-stretch">
          @foreach($categories as $categorie)
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <form action="{{ route('restaurant.reserver') }}" id="popularCategorieForm{{ $categorie->cuisine }}" accept-charset="UTF-8" method="post">
              {!! csrf_field() !!}
              <input type="hidden" name="cuisine" value="{{ $categorie->cuisine }}">
              <input type="hidden" name="nom">
              <input type="hidden" name="localite">
            </form>
            <a href="{{ route('restaurant.reserver') }}" 
              onclick="event.preventDefault(); 
              document.getElementById('popularCategorieForm{{ $categorie->cuisine }}').submit();" 
              class="popular-category h-100">
                
                <span class="icon"><span class="flaticon-cocktail"></span></span>
                <span class="caption mb-2 d-block">{{ $categorie->cuisine }}</span>
                <span class="number">{{ $categorie->rest_count }}</span>
            </a>
      
          </div>
          @endforeach
        </div>

    </div>
</div>