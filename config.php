<?php
$username = "root";
$password = "";
$server ='localhost';
$db = 'dbcrud';
$con = mysqli_connect($server,$username, $password, $db);
if ($con) {
	//echo "connection successful";
	?>
	<script>
		alert('connection successful');
	</script>
	<?php
}else{
	//echo "connection failed";
	die("no connection" .mysqli_connect_error());
}
?>