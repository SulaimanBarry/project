<?php 

	if (isset($_POST['logout'])) {
 		session_start();
 		session_unset();
 		session_destroy();
 		header("Location: login.php");
 		exit();
 	}
 	
  ?>
 
 <?php include 'top.php' ?>
  			
  			 <form action="" method="post">
				<button type="submit" class="btn btn-primary text-right" name="logout">Logout</button>
			</form>

  <?php include 'footer.php' ?>
