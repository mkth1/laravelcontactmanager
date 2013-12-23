<ul id="form-errors">
	
	<?php 
		global $msg; 
		$msg = json_encode($errors->getMessages()); 
	?>
	
	<!--{{ $errors->first('first_name','<li>:message</li>') }}
	{{ $errors->first('last_name','<li>:message</li>') }}
	{{ $errors->first('phone_number','<li>:message</li>') }}
	{{ $errors->first('email_address','<li>:message</li>') }} -->

	<script>
		 var msgs = <?php print_r($msg); ?>;
		 //console.log( "error balde ", msgs );
	</script>
</ul>

