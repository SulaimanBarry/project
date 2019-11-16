
<?php 
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/navbar.php';

 
 ?>
 <div class="container">
 	<br>
 	<h1 class="text-center"><span class="span1">S</span>chedule <span class="span2">M</span>anagement <span class="span1">S</span>ystem</h1>
<?php  
 $sql = "SELECT * FROM admin WHERE admin_id = {$_SESSION['admin_id']} ";
  $result = mysqli_query($con, $sql);
  while ($rows= mysqli_fetch_assoc($result)) {
  	  $admin_name = $rows['admin_name'];
  	  $admin_id = $rows['admin_id'];
  	  $admin_school = $rows['admin_school'];
  	  $admin_image = $rows['admin_image'];

  	  echo "<div class='row'>
  	  			<div class='col-md-4'>
  	  				
  	  			</div>
  	  			<div class='col-md-4'>
  	  				<img src='photos/$admin_image' style='border-radius:50%; width:100%; height:100%;align:center;'>
  	  				<h4 class='text-center'>$admin_name</h4>
  	  				<h4 class='text-center'>$admin_school</h4>
  	  			</div>
  	  			<div class='col-md-4'>
  	  				
  	  			</div>
  	  		</div>";
  }


?>
<br>
<br>
<br>
<hr>
<br>
<table class="table table-dark col-12">
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
		$user_id = 3878;
		echo "<h4 class='text-center'>Sulaiman A. Barry</h4>";
		$sql = "SELECT * FROM schedule WHERE user_id = {$user_id} ";
	 $result= mysqli_query($con, $sql);
	 while ($rows=mysqli_fetch_assoc($result)) {
 					$id = $rows['id'];
 					$user_id = $rows['user_id'];
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
<br>
<br>
<table class="table table-dark col-12">
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
		$user_id = 2422;
		echo "<h4 class='text-center'>Jeremiah F Alfred</h4>";
		$sql = "SELECT * FROM schedule WHERE user_id = {$user_id} ";
	 $result= mysqli_query($con, $sql);
	 while ($rows=mysqli_fetch_assoc($result)) {
 					$id = $rows['id'];
 					$user_id = $rows['user_id'];
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
<br>
<br>
<table class="table table-dark col-12">
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
		$user_id = 2014;
		echo "<h4 class='text-center'>Willette G. Gbelee</h4>";
		$sql = "SELECT * FROM schedule WHERE user_id = {$user_id} ";
	 $result= mysqli_query($con, $sql);
	 while ($rows=mysqli_fetch_assoc($result)) {
 					$id = $rows['id'];
 					$user_id = $rows['user_id'];
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