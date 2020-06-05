<?php
include 'config.php';
$ids = $_GET['id'];
$showquery= "select * from jobregistration where id={$ids}";
$showdata = mysqli_query($con,$showquery);
$arrdata = mysqli_fetch_array($showdata);
if (isset($_POST['submit'])) {
	$idupdate= $_GET['id'];
	$name = $_POST['user'];
	$degree =$_POST['degree'];
	$mobile =$_POST['mobile'];
	$email =$_POST['email'];
	$refer =$_POST['refer'];
	$jobpost=$_POST['jobpost'];
	//$insertquery= "insert into jobregistration(name,degree,mobile,email,refer,jobpost)values('$name','$degree','$mobile','$email','$refer','$jobpost')";

	$query = "update jobregistration set  name='$name', degree='$degree', mobile='$mobile', refer='$refer',jobpost='$jobpost' where id =$idupdate";
	$result =mysqli_query($con,$query);
	if ($result) {
		?>
		<script>
			alert("data Updated properly");

		</script>

		<?php
		header('Location: display.php');
	}else{
	?>
	<script>
		alert("data not Updated");
	</script>
	<?php
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
  <?php include 'link.php';?>
  <?php include 'css/style.css';?>
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
   	  				<form action="update.php?id=<?php echo $arrdata['id'];?>" method="POST">
   	  				<div class="row register-form">
   	  				<div class="col-md-6">
   	  				    <div class="form-group">
   	  				   <input type="text" class="form-control" placeholder="enter your name *" name="user"
   	  				    value="<?php echo $arrdata['name'];?>" required/></div>
   	  			        <div class="form-group">
   	  				     <input type="tel" class="form-control" placeholder="mobile number *" name="mobile" 
   	  				     value="<?php echo $arrdata['mobile'];?>" required/></div>
   	  			         <div class="form-group">
   	  				     <input type="text" class="form-control" placeholder="Any references *" name="refer" 
   	  				     value="<?php echo $arrdata['refer'];?>" required/></div>
   	  	           </div>
   	  	           <div class="col-md-6">
   	  				    <div class="form-group">
   	  				    <input type="text" class="form-control" placeholder="enter your qualification *" name="degree"
   	  				     value="<?php echo $arrdata['degree'];?>" required/></div>
   	  			        <div class="form-group">
   	  				     <input type="tel" class="form-control" placeholder="email id *" name="email" 
   	  				     value="<?php echo $arrdata['email'];?>" required/></div>
   	  			         <div class="form-group">
   	  				     <input type="text" class="form-control" placeholder="jobpost*" name="jobpost"
   	  				      value="<?php echo $arrdata['jobpost'];?>"></div>
   	  				     <input type="submit" class="btn btn-primary" name="submit" value="Update">
   	  	           </div>
   	  			   </div>
   	  				</form>
   	  	        </div>
   	  	
   	  		</div>
   	  		
   	  	</div>
   	  		
   	  </div>
   </div>

</html>
