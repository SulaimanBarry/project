  <?php
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/navbar.php';

 ?>
<br><div class="container">

	<br>
	<div class="box">

		<h2><span>S</span>M<span>S</span><span><small>&trade;</small></span></h2>
		<form method="POST" enctype="multipart/form-data">
			<div class="inputBox">
				<input type="text" name="course_name" required>
				<label><i class="fas fa-user"></i>Course</label>
			</div>
			<div class="inputBox">
				<input type="text" name="course_code" required>
				<label><i class="fas fa-user"></i>Course code</label>
			</div>
			<div class="inputBox">
				<input type="text" name="section" required>
				<label><i class="fas fa-user"></i>Section</label>
			</div>
			<div class="inputBox">
				<input type="text" name="day" required>
				<label><i class="fas fa-user"></i>Day</label>
			</div>
			<div class="inputBox">
				<input type="text" name="lab" required>
				<label><i class="fas fa-key"></i>Lab</label>
			</div>
			<div class="inputBox">
				<input type="text" name="course_time" required>
				<label><i class="fas fa-key"></i>Time</label>
			</div>
			<div class="inputBox">
				<input type="text" name="course_teacher" required>
				<label><i class="fas fa-key"></i>Teacher</label>
			</div>
			<div class="row">
				<div class="col-6">
					<input type="submit" name="submit" value="Add course">
				</div>
				<div class="col-lg-md-sm-xs-6">
					
				</div>
				</form>
			</div>

<?php 

 		if (isset($_POST['submit'])) {
 			 $course_name = $_POST['course_name'];
 			 $course_code = $_POST['course_code'];
 			 $section = $_POST['section'];
 			 $day = $_POST['day'];
 			 $lab = $_POST['lab'];
 			 $course_time = $_POST['course_time'];
 			 $course_teacher = $_POST['course_teacher'];
 			 

 			 $ssql = "SELECT * FROM all_schedule WHERE course_code = '$course_code' AND section = '$section'";
			$result = mysqli_query($con, $ssql);
			$resultCheck = mysqli_num_rows($result);
 			 if ($resultCheck > 0) {
 			 	echo "<h4 class='text-white'>Course already added</h4>";
 			 	exit();
 			 }else{

 			 	$sql = "INSERT INTO `all_schedule`(`course_name`, `course_code`, `section`, `day`, `lab`, `course_time`, `course_teacher`) VALUES ('$course_name', '$course_code', '$section', '$day', '$lab', '$course_time', '$course_teacher')";

 			 if (isset($sql)==TRUE) {
 			 	mysqli_query($con, $sql);
 			 	echo "<h5 class='text-light'>Schedule created</h5>";
 			 }
 			}
 			 

 		}

 	 ?>	
		

	</div>
</div>
<br>
<br>


 <?php include 'includes/footer.php'; ?>