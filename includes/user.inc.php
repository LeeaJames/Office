<?php

class User extends dbh {

	protected function getAllUsers() {

		$sql = "SELECT * FROM user";
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


class Designers extends dbh {

	protected function getDesigners() {

		$sql = "SELECT * FROM user WHERE role='designer'";
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

class Developers extends dbh {

	protected function getDevelopers() {

		$sql = "SELECT * FROM user WHERE role='developer'";
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

?>