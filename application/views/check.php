
<?php

if(isset($_POST['d'])){
	echo $x=$_POST['d'];
	// echo $input=$this->security->xss_clean($this->input->post('d'));

}


// <script>alert("hello") </script>

?>
<form method="post" action="check">
	<input type="index" name="d">
	<input type="submit" name="check">
	
</form>
