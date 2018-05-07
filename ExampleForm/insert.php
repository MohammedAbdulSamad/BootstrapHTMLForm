<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "exampledatabase";

	//Create Connection to Database
	$con = new mysqli($servername, $username, $password, $dbname);

	if ($con->connect_error) {
		echo 'database connection error';
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$receive = $_POST['receive'];
	$password = $_POST['password'];

	//Prepare SQL Query
        $sql = "INSERT INTO `user`( `name`, `email`, `gender`, `receive communication`, `password`) VALUES ('$name', '$email', '$gender', '$receive', '$password')";

	$result = mysqli_query($con, $sql);

	if ($result) {
		echo "New Record Successfully Added";
	} else {
		echo "Error: " . $result . "<br>" . $con->error;;
	}

	$con->close();
?>
