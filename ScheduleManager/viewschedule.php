<?php 
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/navbar.php';

 ?>
 <div class="container">

 	<h1 class="text-center"><span class="span1">S</span>chedule <span class="span2">M</span>anagement <span class="span1">S</span>ystem</h1>
<?php  
	$user_id = $_SESSION['user_id'];

 $sql = "SELECT * FROM user where user_id= '$user_id'";
  $result = mysqli_query($con, $sql);
  while ($rows= mysqli_fetch_assoc($result)) {
  	  $user_name = $rows['user_name'];
  	  $user_id = $rows['user_id'];
  	  $school_name = $rows['school_name'];
  	  $user_image = $rows['user_image'];
  	  echo '<div class="card" style="width: 18rem;">';
				echo '<img src="photos/'.$user_image.'" class="card-img-top" alt="...">';
				 	echo '<div class="card-body">';
					 	echo '<h5 class="card-title">Name: '.$user_name.'</h5>';
				 		echo '<h5 class="card-title">ID: '.$user_id.'</h5>';
				 		echo '<h5 class="card-title">School: '.$school_name.'</h5>';
					 echo '</div>';
  	  echo '</div>';
  }
?>
<br>
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
 					echo "</tr>";
 				}
 			 ?>
 		</tr>
 	</table>
 	</div>
<br>

 <?php include 'includes/footer.php'; ?>