@extends ('template')

@section ('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Fiche d'utilisation</h3>
            </div>
            <p>Nom :   {{ $user->name  }}</p>
            <p>Email : {{ $user->email }}</p>
            @if( $user->admin == '1')
                <p>Administrateur</p>
            @endif
            </div>
        </div>
    <a href="javascript:history.back()" class="btn btn-primary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
    </a>
    </div>
@endsection