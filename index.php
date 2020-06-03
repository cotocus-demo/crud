<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
  <?php include 'link.php'?>
  <?php include 'css/style.css'?>
</head>
<body>
   <div class="container register">
   	  <div class="row">
   	  	<div class="col-md-3 register-left">
   	  		<img src="" alt=""/>
   	  		<h3>Welcome</h3>
   	  		<p>Please fill all the details carefully</p>
   	  		<a href="">Check Form</a>
   	  	</div>
   	  	<div class="col-md-9 register-right">
   	  		<div class="tab-content" id="myTabContent">
   	  			<div class="tab-pane fade show active " id="home" role ="tablepanel" aria-labelledby="home-tab">
   	  				<h3 class="register-heading">Apply for web Developer post</h3>
   	  				<form action="index.php" method="POST">
   	  				<div class="row register-form">
   	  				<div class="col-md-6">
   	  				    <div class="form-group">
   	  				    <input type="text" class="form-control" placeholder="enter your name *" name="user" value="" required/></div>
   	  			        <div class="form-group">
   	  				     <input type="tel" class="form-control" placeholder="mobile number *" name="mobile" value="" required/></div>
   	  			         <div class="form-group">
   	  				     <input type="text" class="form-control" placeholder="Any references *" name="refer" value="" required/></div>
   	  	           </div>
   	  	           <div class="col-md-6">
   	  				    <div class="form-group">
   	  				    <input type="text" class="form-control" placeholder="enter your qualification *" name="degree" value="" required/></div>
   	  			        <div class="form-group">
   	  				     <input type="tel" class="form-control" placeholder="email id *" name="email" value="" required/></div>
   	  			         <div class="form-group">
   	  				     <input type="text" class="form-control" placeholder="jobpost*" name="jobpost" value=""></div>
   	  				     <input type="submit" class="btn btn-primary" name="submit" value="Register">
   	  	           </div>
   	  			   </div>
   	  				</form>
   	  	        </div>
   	  	
   	  		</div>
   	  		
   	  	</div>
   	  		
   	  </div>
   </div>

</html>
<?php
include 'config.php';
if (isset($_POST['submit'])) {
	$name = $_POST['user'];
	$degree =$_POST['degree'];
	$mobile =$_POST['mobile'];
	$email =$_POST['email'];
	$refer =$_POST['refer'];
	$jobpost=$_POST['jobpost'];
	$insertquery= "insert into jobregistration(name,degree,mobile,email,refer,jobpost)values('$name','$degree','$mobile','$email','$refer','$jobpost')";
	$result =mysqli_query($con,$insertquery);
	if ($result) {
		?>
		<script>
			alert("data inserted properly");
		</script>
		<?php
	}else{
	?>
	<script>
		alert("data not inserted");
	</script>
	<?php
}
}
?>