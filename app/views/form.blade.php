@section('form')
	
	@if ( isset($contact['id']) )
		{{ Form::model($contact, array('route' => array('contacts.update', $contact['id']), 'method' => 'PUT','class'=>'form-inline','role'=>'form')) }}
	@else
		{{ Form::open( array('url'=>'/contacts','class'=>'form-inline','role'=>'form') ) }}
	@endif
		<div class="form-group">
			{{ Form::text('first_name', Input::old('first_name'),array('placeholder'=>'First name','class'=>'form-control','data-toggle'=>'tooltip','title'=>'First name is required')) }} 
		</div>

		<div class="form-group">
			{{ Form::text('last_name', Input::old('last_name'),  array('placeholder'=>'Last name','class'=>'form-control','data-toggle'=>'tooltip','title'=>'Last name is required')) }} 
		</div>
		
		<div class="form-group">
			{{ Form::text('phone_number', Input::old('phone_number'),  array('placeholder'=>'Phone number','class'=>'form-control','data-toggle'=>'tooltip','title'=>'Phone number is required and must be 5 digit')) }} 
		</div>

		<div class="form-group">
			{{ Form::email('email_address', Input::old('email_address'),  array('placeholder'=>'Email','class'=>'form-control','data-toggle'=>'tooltip','title'=>'Email address is required')) }}
		</div>

		<div class="form-group">
		{{ Form::text('description', Input::old('description'),  array('placeholder'=>'Description','class'=>'form-control')) }}
		</div>

		<div class="btn-group nav">
			{{ Form::submit('Save',array('class'=>'btn btn-success')) }}
		</div>
		<div class="btn-group"> {{ HTML::link('/', 'New', array('class' => 'btn btn-success')) }}</div>
	{{ Form::close() }}
@stop

