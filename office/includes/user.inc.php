<?php

// ------------------------------------------- get user information from database

class User extends dbh {

	protected function getAllUsers() {

		$sql = "SELECT * FROM `user` ORDER BY `FNAME` ASC";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;

		if ($numRows > 0) {
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
	}
}

// ------------------------------------------- get Designer information from database

class Designers extends dbh {

	protected function getDesigners() {

		$sql = "SELECT * FROM `user` WHERE role='designer'";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;

		if ($numRows > 0) {
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
	}
}

// -------------------------------------------- get Developer information from database

class Developers extends dbh {

	protected function getDevelopers() {

		$sql = "SELECT * FROM `user` WHERE role='developer'";
		$result = $this->connect()->query($sql);
		$numRows = $result->num_rows;

		if ($numRows > 0) {
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
	}
}

// ------------------------------------------- add user information prepared statement for security

function AddUser($name, $lname, $email, $role) {

	include "includes/login.php";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";

	//prepare statement
	$new = $conn->prepare("INSERT INTO `user` (`FNAME`, `LNAME`, `EMAIL`, `role`) VALUES (?,?,?,?)");
	$new->bind_param("ssss", $name, $lname, $email, $role);
	$new->execute();

	if($new->affected_rows > 0) {
		echo "yay!";
	} else {
		echo "crap!";
	}
}

?>