
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<?php include 'link.php';?>
    <?php include 'css/style.css';?>
</head>
<body>
      <div class="main-div">
      	<h1>List of candidates for web developers</h1>
      	<div class="center-div">
      		<div class="table-responsive">
      			<table>
      				<thead>

      					 <tr>
      					 	<th>id</th>
      					 	<th>name</th>
      					 	<th>degree</th>
      					 	<th>mobile</th>
      					 	<th>email</th>
      					 	<th>refer</th>
      					 	<th>jobpost</th>
      					 	<th colspan="2">operation</th>
      					 </tr>
      				</thead>
      				<tbody>
      					<?php
include 'config.php';
$selectquery = " select * from jobregistration";
$query = mysqli_query($con, $selectquery);
$num = mysqli_num_rows($query);
while ($res = mysqli_fetch_array($query)){ 
	?>
                         <tr>
                           <td><?php echo $res['id'];?></td>
                           <td><?php echo $res['name'];?></td>
                           <td><?php echo $res['degree'];?></td>
                           <td><?php echo $res['mobile'];?></td>
                           <td><span class="email-style"></span><?php echo $res['email'];?></span></td>
                           <td><?php echo $res['refer'];?></td>
                           <td><?php echo $res['jobpost'];?></td>
                           <td><i class="fa fa-edit" aria-hidden="true"></i></td>
                           <td><i class="fa fa-trash" aria-hidden="true"></i></td>
      					</tr>
      					<?php
                       }
                       ?>
      					
      				</tbody>
      			</table>
      		</div>
      	</div>
      </div>
</body>
</html>