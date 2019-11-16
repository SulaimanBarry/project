<?php 
	include 'includes/db.php';
	include 'includes/header.php';
	include 'includes/navbar.php';
 ?>
<br><div class="container">
	<h1 class="text-center"><span class="span1">S</span>chedule <span class="span2">M</span>anagement <span class="span1">S</span>ystem</h1>
<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

	 $sql = "SELECT * FROM all_schedule WHERE id=$id";
	 $result= mysqli_query($con, $sql);
	 while ($rows = mysqli_fetch_assoc($result)) {
	 	 $id = $rows['id'];
	 	 $course_name = $rows['course_name'];
	 	 $course_code = $rows['course_code'];
	 	 $section = $rows['section'];
	 	 $day = $rows['day'];
	 	 $lab = $rows['lab'];
	 	 $course_time = $rows['course_time'];
	 	 $course_teacher = $rows['course_teacher'];
	 }
	}


 ?>
	<br>
	<div class="box">

		<h2><span>S</span>M<span>S</span><span><small>&trade;</small></span></h2>
		<form method="POST" enctype="multipart/form-data">
			<div class="inputBox">
				<input type="hidden" name="id" value="<?php echo $id?>">
				<input type="text" name="course_name" value="<?php echo $course_name?>" required>
				<label><i class="fas fa-user"></i>Course</label>
			</div>
			<div class="inputBox">
				<input type="text" name="course_code" value="<?php echo $course_code?>" required>
				<label><i class="fas fa-user"></i>Course code</label>
			</div>
			<div class="inputBox">
				<input type="text" name="section" value="<?php echo $section?>" required>
				<label><i class="fas fa-user"></i>Section</label>
			</div>
			<div class="inputBox">
				<input type="text" name="day" value="<?php echo $day?>" required>
				<label><i class="fas fa-user"></i>Day</label>
			</div>
			<div class="inputBox">
				<input type="text" name="lab" value="<?php echo $lab?>" required>
				<label><i class="fas fa-key"></i>Lab</label>
			</div>
			<div class="inputBox">
				<input type="text" name="course_time" value="<?php echo $course_time?>" required>
				<label><i class="fas fa-key"></i>Time</label>
			</div>
			<div class="inputBox">
				<input type="text" name="course_teacher" value="<?php echo $course_teacher?>" required>
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
 			 $id = $_POST['id'];
 			 $course_name = $_POST['course_name'];
 			 $course_code = $_POST['course_code'];
 			 $section = $_POST['section'];
 			 $day = $_POST['day'];
 			 $lab = $_POST['lab'];
 			 $course_time = $_POST['course_time'];
 			 $course_teacher = $_POST['course_teacher'];
 			 

 			 	$sql = "UPDATE  `all_schedule` SET course_name = '$course_name', course_code = '$course_code', section = '$section', day = '$day', lab = '$lab',course_time = '$course_time',course_teacher = '$course_teacher' WHERE id = '$id'";

 			 if (isset($sql)==TRUE) {
 			 	mysqli_query($con, $sql);
 			 	header('Location: admin_manageschedule.php?course=updated');
 			 }

 		
 			}
 			 

 	 ?>	
		

	</div>
</div>
<br>
<br>


 <?php include 'includes/footer.php'; ?>