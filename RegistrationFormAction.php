<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>
	<h1>Registration Form Action</h1>

	<?php 

		$firstName = $_POST['fname'];
		$lastName = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$userName = $_POST['uname'];
		$password = $_POST['passw'];
		$recEmail = $_POST['recEmail'];

		
		if($_SERVER['REQUEST_METHOD'] == "POST") {

			if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['uname']) || empty($_POST['passw']) || empty($_POST['recEmail'])) {
				echo "Please fill up the full form properly";
			} 
			else {
				//$firstName = $_POST['fname'];
				//$lastName = $_POST['lname'];
				echo "REGISTRATION COMPLETED SUCCESSFULLY!";

				$filePath = "info.txt";

				$f1 = fopen($filePath, "a");

				fwrite($f1, "Name: $firstName $lastName\n");
				fwrite($f1, "Gender: $gender\n");
				fwrite($f1, "Email: $email\n");
				fwrite($f1, "User Name: $userName\n");
				fwrite($f1, "Password: $password\n");
				fwrite($f1, "Recovery Email: $recEmail\n");

				fclose($f1);

			}
		}
	?>

</body>
</html>