<?php 
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/navbar.php';

 ?>
 <div class="container">

<h1 class="text-center"><span class="span1">S</span>chedule <span class="span2">M</span>anagement <span class="span1">S</span>ystem</h1>
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
	 	$id = $rows['id'];
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
	 		echo "<td><button class='btn btn-primary mr-1 text-white'><a class='text-white' href='edit_schedule.php?id=$id'><i class='far fa-edit'></i></a></button><button class='btn btn-danger text-white'><a class='text-white' href='admin_manageschedule.php?id=$id'><i class='fas fa-trash'></i></a></button></td>";
	 	echo "</tr>";
	 }
	 



	 ?>
	 	
	 
</table>
</div>
 <?php 
 	if (isset($_GET['id'])) {
 		$course_code=$_GET['id'];

 		$sql = "DELETE FROM all_schedule WHERE id=$id";
 		mysqli_query($con, $sql);
 		header("Location: admin_manageschedule.php");
 	}
   
  ?>
 <?php include 'includes/footer.php' ?>