@extends ('template_inside')

@section('titre')
    Ajout d"un restaurant
@endsection

@section ('contenu')
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(../images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 data-aos="fade-up">Ajout d'un restaurant</h1>
                <p class="mb-0" data-aos="fade-up" data-aos-delay="100">We Make You Better!</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5"  data-aos="fade">

            
            {!! Form::open(['route'=>'junt', 'class'=>'p-5 bg-white']) !!}
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0  {!! $errors->has('nom') ? 'has-errors' : '' !!}">
                  <label class="text-black" for="fname">Nom</label>
                  <input type="text" id="fname" class="form-control" name="nom">
                </div>
                <div class="col-md-6  {!! $errors->has('immeuble') ? 'has-errors' : '' !!}">
                  <label class="text-black" for="lname">Immeuble</label>
                  <input type="text" id="lname" class="form-control" name="immeuble">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0  {!! $errors->has('rue') ? 'has-errors' : '' !!}">
                  <label class="text-black" for="fname">Rue</label>
                  <input type="text" id="fname" class="form-control" name="rue">
                </div>
                <div class="col-md-6  {!! $errors->has('quartier') ? 'has-errors' : '' !!}">
                  <label class="text-black" for="lname">Quartier</label>
                  <input type="text" id="lname" class="form-control" name="quartier">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0  {!! $errors->has('rue') ? 'has-errors' : '' !!}">
                  <label class="text-black" for="fname">Cuisine</label>
                  <input type="text" id="fname" class="form-control" name="cuisine">
                </div>
                <div class="col-md-6  {!! $errors->has('image') ? 'has-errors' : '' !!}">
                  <label class="text-black" for="lname">Image</label>
                  <input type="text" id="lname" class="form-control" name="image">
                </div>
              </div>
            
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  {!! Form::submit('Envoyer', ['class'=>'btn btn-primary py-2 px-4 text-white']) !!}
                </div>
              </div>

  
            </form>
        </div>
       </div>

        <div class="row">
                    {!! Form::open(['route'=>'rest1.store', 'class'=>'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('nom') ? 'has-errors' : '' !!}">
                        {!! Form::text('nom', null, ['class'=>'form-control', 'placeholder'=>'Nom']) !!}
                        {!! $errors->first('nom', '<small class="help-block">:messages<small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('immeuble') ? 'has-errors' : '' !!}">
                        {!! Form::text('immeuble', null, ['class'=>'form-control', 'placeholder'=>'immeuble']) !!}
                        {!! $errors->first('immeuble', '<small class="help-block">:messages<small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('rue') ? 'has-errors' : '' !!}">
                        {!! Form::text('rue', null, ['class'=>'form-control', 'placeholder'=>'rue']) !!}
                        {!! $errors->first('rue', '<small class="help-block">:messages<small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('quartier') ? 'has-errors' : '' !!}">
                        {!! Form::text('quartier', null, ['class'=>'form-control', 'placeholder'=>'quartier']) !!}
                        {!! $errors->first('quartier', '<small class="help-block">:messages<small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('cuisine') ? 'has-errors' : '' !!}">
                        {!! Form::text('cuisine', null, ['class'=>'form-control', 'placeholder'=>'cuisine']) !!}
                        {!! $errors->first('cuisine', '<small class="help-block">:messages<small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('image') ? 'has-errors' : '' !!}">
                        {!! Form::text('image', null, ['class'=>'form-control', 'placeholder'=>'image']) !!}
                        {!! $errors->first('image', '<small class="help-block">:messages<small>') !!}
                    </div>

                    {!! Form::submit('Envoyer', ['class'=>'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
        </div>

      </div>
    </div>
@endsection

