
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 50px;">
  <a href="#" class="navbar-brand"><span class="span1"><i class="fa fa-university" aria-hidden="true"></i>S</span><span class="span2">M</span><span class="span1">S</span><span class="span1"><small>&trade;</small></span></a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
          My account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="viewschedule.php"><i class="fa fa-user-circle" aria-hidden="true"></i> My schedule</a>
          <a class="dropdown-item" href="manageschedule.php"><i class="fa fa-cog" aria-hidden="true"></i> Manage Schedule</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="createschedule.php"><i class="fa fa-plus" aria-hidden="true"></i> Add records</a>
        </div>
      </li>
	

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
    <ul>
    	<li class="nav-item dropdown no-arrow">
              <div class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user_id']; ?></span>
                <img class="img-profile rounded-circle" src="photos/<?php echo $_SESSION['user_image']; ?>" style="width: 50px;height: 40px;">
              </div>

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
             
                <div class="dropdown-divider"></div>
                
                 <form action="" method="POST">
        <button type="submit" class="btn btn-default" name="logout"><i class="fa fa-lock" aria-hidden="true"></i></i> Logout</button>
        <?php if (isset($_POST['logout'])) {
        		session_start();
 				session_unset();
 				session_destroy();
 				header("Location: index.php");
 				exit();
        } ?>
      </form>
         
              </div>
            </li>
    </ul>
  </div>
</nav>

		
	