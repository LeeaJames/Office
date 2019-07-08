<?php

class ViewUser extends User {

	public function showAllUsers() {
		$datas = $this->getAllUsers();
		foreach ($datas as $data) {

			echo "<div id='familyMember'>";
			echo "<p id='name'>";
			echo $data['FNAME'] . " " . $data['LNAME'] . "<br>";
			echo "<p>";
			echo "<p id='email'>";
			echo $data['EMAIL']."<br>";
			echo "<p>";
			echo "</div>";
		}
	}
}

class ViewDesigners extends Designers {

	public function showDesigners() {
		$datas = $this->getDesigners();
		foreach ($datas as $data) {

			echo "<div id='Designers'>";
			echo "<p id='name'>";
			echo $data['FNAME'] . " " . $data['LNAME'] . "<br>";
			echo "<p>";
			echo "<p id='email'>";
			echo $data['EMAIL']."<br>";
			echo "<p>";
			echo "<a href='edit.php'><p class='updateQuery'>edit</p></a>";
			echo "</div>";
		}
	}
}

class ViewDevelopers extends Developers {

	public function showDevelopers() {
		$datas = $this->getDevelopers();
		foreach ($datas as $data) {

			echo "<div id='Designers'>";
			echo "<p id='name'>";
			echo $data['FNAME'] . " " . $data['LNAME'] . "<br>";
			echo "<p>";
			echo "<p id='email'>";
			echo $data['EMAIL']."<br>";
			echo "<p>";
			echo "<a href='edit.php'><p class='updateQuery'>edit</p></a>";
			echo "</div>";
		}
	}
}


?>