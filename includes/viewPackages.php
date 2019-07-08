<?php

class viewPackage extends Package {

	public function showAllPackages() {
		$datas = $this->getAllPackages();
		foreach ($datas as $data) {

			echo "<div id='packages'>";
			echo "<p id='details'>";
			echo $data['name'] . " " . "£" . $data['price'] . " " . $data['deal'];
			echo "<p>";
			echo "</div>";
		}
	}
}

?>