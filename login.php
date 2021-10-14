<?php
// connectDatabase // // connectDatabase //
// connectDatabase // // connectDatabase //

require 'function.php';
$conn = databaseConnection();

// login // // login //
// login // // login //

session_start();

if(isset($_POST['login'])) {

	$user = $_POST['username'];
	$pass = $_POST['password'];

		if(empty($user) || empty($pass)) {
		$message = 'All field are required';
		} 

		else {
			$query = $conn->prepare("SELECT username, password FROM users WHERE username=? AND password=? ");
			$query->execute(array($user,$pass));
			$row = $query->fetch(PDO::FETCH_BOTH);

				if($query->rowCount() > 0) {
  				$_SESSION['username'] = $user;
  				header('location:home.php');
				 } 
			 		else {
  						echo "Username/Password is wrong";
					}


			}

}


?>