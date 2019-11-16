<?php 
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/navbar.php';

 ?>
 <div class="container">

 	<h1 class="text-center"><span class="span1">S</span>chedule <span class="span2">M</span>anagement <span class="span1">S</span>ystem</h1>


 	<table class="table table-dark bordered">
 		<tr>
 			<th>Course</th>
 			<th>Course code</th>
 			<th>Section</th>
 			<th>Day</th>
 			<th>Lab</th>
 			<th>Time</th>
 			<th>Teacher</th>
 		</tr>
 		
 			<?php 

 				$sql= "SELECT * FROM all_schedule";
 				$result= mysqli_query($con, $sql);

 				while ($row = mysqli_fetch_assoc($result)) {
 					$course_name = $row['course_name'];
 					$course_code = $row['course_code'];
 					$section = $row['section'];
 					$day = $row['day'];
 					$lab = $row['lab'];
 					$course_time = $row['course_time'];
 					$course_teacher = $row['course_teacher'];
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
 		</tr>
 	</table>
 	</div>
<br>
 <?php include 'includes/footer.php'; ?>