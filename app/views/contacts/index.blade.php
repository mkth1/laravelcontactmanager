@extends('master')

@section('container')
	
			<table id="allContacts" class="module">
				<thead>
					<tr>
						<td>First Name</td>
						<td>Last Name</td>
						<td>Email Address</td>
						<td>Description</td>
						<td>Options</td>
					</tr>
				</thead>
			</table>
			
			<script id="allContactTemplate" type="text/template">
				<td><%= first_name %></td>
				<td><%= last_name %></td>
				<td><%= email_address %></td>
				<td><%= description %></td>
				<td><a href="#contacts/<%= id %>" class="edit">Edit</a></td>
				<td><a href="#contacts/<%= id %>" class="delete">Delete</a></td>
			</script>
	{{ Form::open( array('url'=>'')) }}

		{{ Form::textarea('snippet')}}
		<div class="btn-group nav">
			{{ Form::submit('Save',array('class'=>'btn btn-success')) }}
		</div>
	{{ Form::close() }}	
@stop



