<?php 
	global $msg; 
	$msg = json_encode($errors->getMessages()); 
?>
<script>
	 var msgs = <?php print_r($msg); ?>;
	 //console.log( "error balde ", msgs );
</script>


