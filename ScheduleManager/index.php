<?php include 'includes/db.php'; 
 include 'includes/header.php'; 
 ?>

<div class="container">
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<br>
		<br>
		<div class="box">

		<h2><span>S</span>M<span>S</span><span><small>&trade;</small></span></h2>
		<form method="post">
			
			<div class="inputBox">
				<input type="text" name="name" required>
				<label><i class="fas fa-user"></i> ID Number</label>
			</div>
			<div class="inputBox">
				<input type="password" name="pass" required>
				<label><i class="fas fa-key"></i> Password</label>
			</div>
			<div class="row">
				<div class="col-5">
					<button type="submit" class="btn btn-success bg-success" name="submit"><i class="fa fa-unlock" aria-hidden="true"></i> Login</button>
				</div>
				<div class="col-md-7">
					<button type="button" class="btn btn-secondary"><a class = "text-light text-decoration-none" href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Add account</a></button>
				</div>
				
			</div>
				<div class="row">
				<div class="col-md-5">
					<label class="text-lead py-2 "><a href="admin/admin_login.php" class="text-light">Admin login</a></label>
				</div>
				<div class="col-md-7">
					<label class="text-lead py-2">
						<a class = "text-light text-decoration-none" href="../index.php">Forget Password</a>
					</label>
				</div>
			</div>

<?php 

	

if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$pass = mysqli_real_escape_string($con, $_POST['pass']);

		

	if (empty($name) ||empty($pass)) {
			echo "<p class='text-light'>Please fillin all field!</p>";
			exit();
	}else{
			$sql = "SELECT * FROM user WHERE user_id = '$name'";
			$result = mysqli_query($con, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
				echo "<p class='text-light'>Wrong user ID or Password!</p>";
				exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
				$dehash_pass= password_verify($pass, $row['pass']);
				if ($dehash_pass==FALSE) {
				echo "<p class='text-light'>Invalid password!</p>";
				exit();
				}elseif ($dehash_pass==TRUE) {
					$_SESSION['name']=$row['user_name'];
					$_SESSION['user_id']=$row['user_id'];
					$_SESSION['school_name']=$row['school_name'];
					$_SESSION['user_image']=$row['user_image'];
					header("Location: home.php?user_id=$name");
				}
			}
			
				}
			}
}
			// else{
// 	header("Location: index.php");
// 	exit();
// }
 ;?>
		</form>

	</div>
</div>
	
	
	<div class="col-md-3"></div>
	</div>
</div>



</body>
</html>