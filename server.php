<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ittach');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$Firstname = mysqli_real_escape_string($db, $_POST['Firstname']);
		$Email = mysqli_real_escape_string($db, $_POST['Email']);
		$Lastname = mysqli_real_escape_string($db, $_POST['Lastname']);
		$Password = mysqli_real_escape_string($db, $_POST['Password']);
		$Category = mysqli_real_escape_string($db, $_POST['Category']);

		// form validation: ensure that the form is correctly filled
		if (empty($Firstname)) { array_push($errors, "Firstname is required"); }
		if (empty($Lastname)) { array_push($errors, "Last name is required"); }
		if (empty($Email)) { array_push($errors, "Email is required"); }
		if (empty($Password)) { array_push($errors, "Password is required"); }
		if (empty($Category)) { array_push($errors, "Category is required"); }

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($Password);//encrypt the password before saving in the database
			$query = "INSERT INTO users (Firstname, Lastname, Email, Category, Password) 
					   VALUES('$Firstname','$Lastname','$Email','$Category','$Password')";
			mysqli_query($db, $query);

			$_SESSION['Firstname'] = $Firstname;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username or password");
			}
		}
	}

?>