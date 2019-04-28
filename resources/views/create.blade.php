@extends ('template')

@section ('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Creation d'un utilisateur</h3>
            </div>
                <div class="col-sm-12">
                    {!! Form::open(['route'=>'user.store', 'class'=>'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('name') ? 'has-errors' : '' !!}">
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nom']) !!}
                        {!! $errors->first('name', '<small class="help-block">:messages<small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-errors' : '' !!}">
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                        {!! $errors->first('email', '<small class="help-block">:messages<small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('password') ? 'has-errors' : '' !!}">
                        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Mot de passe']) !!}
                        {!! $errors->first('password', '<small class="help-block">:messages<small>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirmation mot de passe']) !!}
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                {!! Form::checkbox('admin', 1, null) !!} Administrateur
                            </label>
                        </div>
                    </div>
                    {!! Form::submit('Envoyer', ['class'=>'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
        </a>
    </div>
@endsection
