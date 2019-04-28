{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('nb_place', 'Nb_place:') !!}
			{!! Form::text('nb_place') !!}
		</li>
		<li>
			{!! Form::label('date_reservation', 'Date_reservation:') !!}
			{!! Form::text('date_reservation') !!}
		</li>
		<li>
			{!! Form::label('rest_id', 'Rest_id:') !!}
			{!! Form::text('rest_id') !!}
		</li>
		<li>
			{!! Form::label('user_id', 'User_id:') !!}
			{!! Form::text('user_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}