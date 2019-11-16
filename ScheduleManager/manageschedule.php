<?php 
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/navbar.php';

 ?>
 <div class="container">

 	<h1 class="text-center"><span class="span1">S</span>chedule <span class="span2">M</span>anagement <span class="span1">S</span>ystem</h1>


 	<table class="table table-dark bordered">
 		<tr>
 			<th>User ID</th>
 			<th>Course</th>
 			<th>Course code</th>
 			<th>Section</th>
 			<th>Day</th>
 			<th>Lab</th>
 			<th>Time</th>
 			<th>Teacher</th>
 			<th>Action</th>
 		</tr>
 		
 			<?php 
 					$user_id = $_SESSION['user_id'];
 				$sql= "SELECT * FROM schedule where user_id=$user_id";
 				$result= mysqli_query($con, $sql);

 				while ($row = mysqli_fetch_assoc($result)) {
 					$id = $row['id'];
 					$user_id = $row['user_id'];
 					$course_name = $row['course_name'];
 					$course_code = $row['course_code'];
 					$section = $row['section'];
 					$day = $row['day'];
 					$lab = $row['lab'];
 					$course_time = $row['course_time'];
 					$course_teacher = $row['course_teacher'];
 					echo "<tr>";
 					echo "<td>$user_id</td>";
 					echo "<td>$course_name</td>";
 					echo "<td>$course_code</td>";
 					echo "<td>$section</td>";
 					echo "<td>$day</td>";
 					echo "<td>$lab</td>";
 					echo "<td>$course_time</td>";
 					echo "<td>$course_teacher</td>";
 					echo "<td><button class='btn btn-danger text-white'><a class='text-white' href='manageschedule.php?id=$id'>Delete</a></button></td>";
 					echo "</tr>";
 				}
 			 ?>
 		</tr>
 	</table>
 	</div>
<br>
 <?php 
 	if (isset($_GET['id'])) {
 		$course_code=$_GET['id'];

 		$sql = "DELETE FROM schedule WHERE id=$id";
 		if (isset($sql)) {
 		mysqli_query($con, $sql);
 		echo "<p>course deleted</p>";
 		}
 		
 	}
   
  ?>
 <?php include 'includes/footer.php'; ?>