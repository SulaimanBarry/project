
<?php 
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/navbar.php';

 
 ?>
 <div class="container">
 	<br>
 	<h1 class="text-center"><span class="span1">S</span>chedule <span class="span2">M</span>anagement <span class="span1">S</span>ystem</h1>
 	<div class="row">
 		<div class="col-md-4"></div>
 		<div class="col-md-4">
 <?php  
	$admin_id = $_SESSION['admin_id'];

 $sql = "SELECT * FROM admin where admin_id= '$admin_id'";
  $result = mysqli_query($con, $sql);
  while ($rows= mysqli_fetch_assoc($result)) {
  	  $admin_name = $rows['admin_name'];
  	  $admin_id = $rows['admin_id'];
  	  $admin_school = $rows['admin_school'];
  	  $admin_image = $rows['admin_image'];
  	  
  	   echo '<div class="card" style="width: 18rem;">';
				echo '<img src="photos/'.$admin_image.'" class="card-img-top" alt="...">';
				 	echo '<div class="card-body">';
					 	echo '<h5 class="card-title">'.$admin_name.'</h5>';
				 		echo '<h5 class="card-title">'.$admin_id.'</h5>';
				 		echo '<h5 class="card-title">'.$admin_school.'</h5>';
					 echo '</div>';
  	  echo '</div>';
  }


?>


 		</div>
 		<div class="col-md-4"></div>

 	</div>


<table class="table table-dark">
	<tr>
		<th>Course</th>
		<th>Code</th>
		<th>Section</th>
		<th>Day</th>
		<th>Lab</th>
		<th>Time</th>
		<th>Teacher</th>
	</tr>
	
	<?php 

	 $sql = "SELECT * FROM all_schedule";
	 $result= mysqli_query($con, $sql);
	 while ($rows=mysqli_fetch_assoc($result)) {
	 	$course_name = $rows['course_name'];
	 	$course_code = $rows['course_code'];
	 	$section = $rows['section'];
	 	$day = $rows['day'];
	 	$lab = $rows['lab'];
	 	$course_time = $rows['course_time'];
	 	$course_teacher = $rows['course_teacher'];

	 	echo "<tr>";
	 		echo "<td>$course_name</td>";
	 		echo "<td>$course_code</td>";
	 		echo "<td>$section</td>";
	 		echo "<td>$day</td>";
	 		echo "<td>$lab</td>";
	 		echo "<td>$course_time</td>";
	 		echo "<td>$course_teacher</td>";
	 	echo "</tr>";
	 }
	 



	 ?>
	 	
	 
</table>
</div>
 
 <?php include 'includes/footer.php' ?>