<?php
	$fname = filter_input(INPUT_POST, 'fname');
	$lname = filter_input(INPUT_POST, 'lname');
	$sid = filter_input(INPUT_POST, 'sid');
	$email = filter_input(INPUT_POST, 'email');
	$phone = filter_input(INPUT_POST, 'phone');
	$slot = filter_input(INPUT_POST, 'slot');

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "student_registration";
	// Create connection
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


		if (mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() .') '
		. mysqli_connect_error());
		}
		else{
			$sql_sid = "SELECT * FROM registration WHERE sid='$sid'";
  			$res_sid = mysqli_query($conn, $sql_sid);


			if (mysqli_num_rows($res_sid) > 0) {
  	 		echo "Sorry... username already taken";	
  			}
			else{
				$sql = "INSERT INTO registration (fname, lname, sid,email,phone,slot)
				values ('$fname','$lname','$sid','$email','$phone','$slot')";
					if ($conn->query($sql)){
					header("Location: index.php");
					}
					else{
					echo "Error: ". $sql ."
					". $conn->error;
					}
		$conn->close();
			}

		}
?>