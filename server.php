<?php 
	session_start();

	// Declare variables
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// Database connection
	$db = mysqli_connect('localhost', 'OFS', 'sesame', 'OFS');

	// REGISTER CUSTOMER
	if (isset($_POST['reg_user'])) {

		// Fetch input values from registration form 
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// Form Validation
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		// Check if passwords match
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// If no errors, proceed to register user
		if (count($errors) == 0) {

			// Encrypt password before saving into database
			$password = sha1($password_1);		
			$query = "INSERT INTO customer (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}
	}

	// LOGIN CUSTOMER
	if (isset($_POST['login_user'])) {

		// Fetch input values from login form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// Form validation
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// If no errors, proceed to register user
		if (count($errors) == 0) {

			// Encrypt password before saving into database
			$password = sha1($password);
			$query = "SELECT * FROM customer WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			} 
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>