<?php 
  include 'includes/db.php';
  include 'includes/header.php';
  include 'includes/navbar.php';

 ?>
 <?php 
 $_SESSION['user_id'];
  ?>
 <div class="container">
 	<h1 class="text-center"><span class="span1">A</span>dd <span class="span2">S</span>chedul<span class="span1">e</span></h1>
 	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<br>
		<br>
		<div class="box">

		<h2><span>S</span>M<span>S</span><span><small>&trade;</small></span></h2>
		<form method="POST" enctype="multipart/form-data">
			<div class="inputBox">
				<input type="text" name="course_code" required>
				<input type="hidden" name="user_id" value=" <?php echo $_SESSION['user_id']; ?>" required>
				<label><i class="fas fa-user"></i>Course code</label>
			</div>
			<div class="inputBox">
				<input type="text" name="section" required>
				<label><i class="fas fa-user"></i>Section</label>
			</div>
			<div class="row">
				<div class="col-6">
					<input type="submit" name="submit" value="Add course">
				</div>
				<div class="col-lg-md-sm-xs-6">
					
				</div>
				<?php 
		
		if (isset($_POST['submit'])) {
			$course_code = $_POST['course_code'];
			$section = $_POST['section'];
			$user_id = $_POST['user_id'];

			$sql = "SELECT * FROM `all_schedule` WHERE course_code = '$course_code' and section = '$section'";
			$result = mysqli_query($con, $sql);
			while ($rows = mysqli_fetch_assoc($result)) {
				 $course_name = $rows['course_name'];
				 $course_code = $rows['course_code'];
				 $section = $rows['section'];
				 $section = $rows['section'];
				 $day = $rows['day'];
				 $lab = $rows['lab'];
				 $course_time = $rows['course_time'];
				 $course_teacher = $rows['course_teacher'];

		$ssql = "SELECT * FROM schedule WHERE course_code = '$course_code'AND user_id = '$user_id'";
			$result1 = mysqli_query($con, $ssql);
			$resultCheck = mysqli_num_rows($result1);
 			 if ($resultCheck > 0) {
 			 	echo "<h4 class='text-white'>Course already added</h4>";
 			 	exit();
 			 }else{
 			 	$xsql = "SELECT * FROM schedule WHERE course_code = '$course_code' AND course_time = ' $course_time' ";
 			 		$results = mysqli_query($con, $xsql);
 			 		$resultcheck = mysqli_num_rows($results);
 			 		if ($resultcheck > 0) {
 			 			echo "<h5>conflicting schedule</h5>";
 			 			exit();
 			 		}else{

 			 			$csql = "INSERT INTO `schedule`(`user_id`, `course_name`, `course_code`, `section`, `day`, `lab`, `course_time`, `course_teacher`) VALUES ('$user_id', '$course_name', '$course_code', '$section', '$day', '$lab', '$course_time', '$course_teacher')";

 			 	 if (isset($sql)==TRUE) {
					 mysqli_query($con, $csql);
					 echo "<h5 class='text-white'>course added</h5>";
 			 		}
 			 		}
 			 	 
 			 	 	 
 			 }

		  	
			}
		}
 	 ?>	
				</form>
			</div>
</div>
	
	
	<div class="col-md-3"></div>
	</div>
</div>	 

		





<br><br><br><br>
 <?php include 'includes/footer.php' ?>