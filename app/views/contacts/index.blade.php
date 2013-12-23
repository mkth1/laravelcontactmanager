@extends('master')
@include('form')

@section('content')
	@if ( $errors->has() )
		@include('contacts.error')
	@endif
	<div class="table-responsive">
		<table class="table table-condensed  table-bordered text-center">
			<thead>
			<tr>
				<th> First Name</th>
				<th> Last Name</th>
				<th> Email </th>
				<th> Description </th>
				<th> Option </th>
			</tr>
			</thead>
			<tr>
			
			@foreach( $contacts as $contact ) 
				 
				<td>{{{ $contact->first_name }}}</td>
				<td>{{{ $contact->last_name }}}</td>
				<td>{{{ $contact->email_address }}}</td>
				<td>{{{ $contact->description }}}</td>
				<td> 
					<div class="btn-group">
						{{ HTML::linkRoute('contacts.update', 'Edit',$contact->id,array('class'=>'btn btn-primary') )}}
					</div>
					<div class="btn-group">
						{{ Form::open(array('url' => 'contacts/' . $contact->id) ) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete ', array('class' => 'btn btn-warning')) }}
						{{ Form::close() }}
					</div>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
@stop



