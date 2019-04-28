{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('immeuble', 'Immeuble:') !!}
			{!! Form::text('immeuble') !!}
		</li>
		<li>
			{!! Form::label('rue', 'Rue:') !!}
			{!! Form::text('rue') !!}
		</li>
		<li>
			{!! Form::label('quartier', 'Quartier:') !!}
			{!! Form::text('quartier') !!}
		</li>
		<li>
			{!! Form::label('image', 'Image:') !!}
			{!! Form::text('image') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}