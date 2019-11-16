

<!DOCTYPE html>


<html>
<head>
	<title>Uploaded File</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="Enter name"><br><br>
		<input type="file" name="uploadedFile"><br><br>
		<input type="submit" name="UploadFile">
	</form>
</body>
</html>
<?php 

$conn = mysqli_connect('localhost','root','','file');
	if (!$conn) {
		echo "Connection fail: ". mysqli_connect_error();
	}

	if (isset($_POST['UploadFile'])) {
			$name =  $_POST['name'];
			
			$filename = $_FILES['uploadedFile']['name'];
			
			$fileTmpName = $_FILES['uploadedFile']['tmp_name'];

			$folder = 'photo/';
			
			move_uploaded_file($fileTmpName, $folder.$filename);

			$sql = "INSERT INTO `upload` (`name`,`uploadedFile`) VALUES ('$name','$filename')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
			header("Location: index.php?index=success");
			exit();
			}
		}


 ;?>