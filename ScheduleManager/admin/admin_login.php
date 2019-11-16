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
				<input type="text" name="admin_id" required>
				<label><i class="fas fa-user"></i> ID Number</label>
			</div>
			<div class="inputBox">
				<input type="password" name="pass" required>
				<label><i class="fas fa-key"></i> Password</label>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4"><button type="submit" class="btn btn-success bg-success" name="submit"><i class="fa fa-unlock" aria-hidden="true"></i> Login</button></div>
				<div class="col-md-4"></div>

				
			</div>
			<div class="row">
				<div class="col-md-7">
					<label class="text-lead py-2 "><a href="" class="text-light">Forget Password</a></label>
				</div>
				<div class="col-md-5">
					<label class="text-lead py-2">
						<a class = "text-light text-decoration-none" href="../index.php"> User login</a>
					</label>
				</div>
				</div>
			</div>
		 
			
				
			

<?php 

if (isset($_POST['submit'])) {
		$admin_id = mysqli_real_escape_string($con, $_POST['admin_id']);
		$pass = mysqli_real_escape_string($con, $_POST['pass']);

		

	if (empty($admin_id) ||empty($pass)) {
			echo "<p class='text-light'>Please fillin all field!</p>";
			exit();
	}else{
			$sql = "SELECT * FROM Admin WHERE admin_id = '$admin_id'";
			$result = mysqli_query($con, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1) {
				echo "<p class='text-light'>Wrong ID or Password!</p>";
				exit();
		}else{
			if ($row = mysqli_fetch_assoc($result)) {
				// $pass = $row['pass'];
				if ($pass!==$row['pass']) {
				echo "<p class='text-light'>Invalid password!</p>";
				exit();
				}elseif ($pass==$row['pass']) {
					$_SESSION['admin_name']=$row['admin_name'];
					$_SESSION['admin_id']=$row['admin_id'];
					$_SESSION['admin_school']=$row['admin_school'];
					$_SESSION['admin_image']=$row['admin_image'];
					$id = $_SESSION['admin_id'];
					header("Location: admin.php?admin_id=$id");
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