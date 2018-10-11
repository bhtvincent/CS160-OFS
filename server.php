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
			header('location: home.php');
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
				header('location: home.php');
			} 
			else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	// CREATE PROFILE
	if (isset($_POST['create_profile'])) {

		// Fetch input values from login form
		$firstname = mysqli_real_escape_string($db, $_POST['first_name']);
		$lastname = mysqli_real_escape_string($db, $_POST['last_name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$phone = mysqli_real_escape_string($db, $_POST['phone_number']);
		$city = mysqli_real_escape_string($db, $_POST['city']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		
		// Form Validation
		if (empty($firstname)) { array_push($errors, "First name is required"); }
		if (empty($lastname)) { array_push($errors, "Last name is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($phone)) { array_push($errors, "Phone number is required"); }
		if (empty($city)) { array_push($errors, "City name is required"); }
		if (empty($address)) { array_push($errors, "Street address is required"); }

		// If no errors, proceed to register user
		if (count($errors) == 0) {

			$query = "INSERT INTO customer_profile (first_name, last_name, username, phone_number, city, address) 
					  VALUES('$firstname', '$lastname', '$username', '$phone', '$city', $address)";
			mysqli_query($db, $query);

			// $_SESSION['username'] = $username;
			// $_SESSION['success'] = "You are now logged in";
			// header('location: home.php');
		}
	}

?>