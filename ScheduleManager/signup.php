<?php include 'includes/db.php'; 
 include 'includes/header.php'; 
 ?>

<div class="container">
	<br>
	<br>
	<br>
	<div class="box">

		<h2><span>S</span>M<span>S</span><span><small>&trade;</small></span></h2>
		<form method="POST" enctype="multipart/form-data">
			<div class="inputBox">
				<input type="text" name="user_name" required>
				<label><i class="fas fa-user"></i>Name</label>
			</div>
			<div class="inputBox">
				<input type="text" name="user_id" required>
				<label><i class="fas fa-user"></i>User ID</label>
			</div>
			<div class="inputBox">
				<input type="text" name="school_name" required>
				<label><i class="fas fa-user"></i>School Name</label>
			</div>
			<div class="inputBox">
				<input type="file" name="user_image" required>
				<label><i class="fas fa-key"></i></label>
			</div>
			<div class="inputBox">
				<input type="password" name="pass" required>
				<label><i class="fas fa-key"></i> Password</label>
			</div>
			<div class="row">
				<div class="col-6">
					<input type="submit" name="submit" value="Signin">
				</div>
				<div class="col-lg-md-sm-xs-6">
					<label class="text-lead py-2 "><a href="">Forget Password</a></label><br>
					<label class="text-lead py-2 "><a href="index.php">have an account</a></label>
				</div>
			</div>

<?php 

 		if (isset($_POST['submit'])) {
 			 $user_name = $_POST['user_name'];
 			 $user_id = $_POST['user_id'];
 			 $school_name = $_POST['school_name'];
 			 $pass = $_POST['pass'];
 			 $user_image = $_FILES['user_image']['name'];
 			 $imgtmp_name = $_FILES['user_image']['tmp_name'];
 			 $folder = 'photos/';

 			 $ssql = "SELECT * FROM user WHERE user_id = '$user_id'";
			$result = mysqli_query($con, $ssql);
			$resultCheck = mysqli_num_rows($result);
 			 if ($resultCheck>0) {
 			 	echo "<h4 class='text-white'>User id taken</h4>";
 			 	exit();
 			 }else{
 			 	$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

 				move_uploaded_file($imgtmp_name, $folder.$user_image);

 			 	$sql = "INSERT INTO `user`(`user_name`, `user_id`, `school_name`, `user_image`, `pass`) VALUES('$user_name', '$user_id', '$school_name', '$user_image', '$pass_hash')";
 			 if (isset($sql)===TRUE) {
 			 	mysqli_query($con, $sql);
 			 	header('Location: index.php?account=created');
 			 }
 			}
 			 

 		}

 	 ?>	
		</form>

	</div>
</div>


<?php 

 		if (isset($_POST['submit'])) {
 			 $user_name = $_POST['user_name'];
 			 $user_id = $_POST['user_id'];
 			 $school_name = $_POST['school_name'];
 			 $pass = $_POST['pass'];
 			 $user_image = $_FILES['user_image']['name'];
 			 $imgtmp_name = $_FILES['user_image']['tmp_name'];
 			 $folder = 'photos/';

 			 $ssql = "SELECT * FROM user WHERE user_id = '$user_id' OR pass = '$pass'";
			$result = mysqli_query($con, $ssql);
			$resultCheck = mysqli_num_rows($result);
 			 if ($resultCheck>0) {
 			 	echo "<h4>User id taken</h4>";
 			 	exit();
 			 }else{
 			move_uploaded_file($imgtmp_name, $folder.$user_image);

 			 $sql = "INSERT INTO `user`(`user_name`, `user_id`, `school_name`, `user_image`, `pass`) VALUES('$user_name', '$user_id', '$school_name', '$user_image', '$pass')";
 			 if (isset($sql)===TRUE) {
 			 	mysqli_query($con, $sql);
 			 }
 			}
 			 

 		}

 	 ?>	
</body>
</html>

