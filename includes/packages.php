<?php

class Package extends dbh {

	protected function getAllPackages() {

		$sql = "SELECT * FROM packages";
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