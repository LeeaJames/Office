<div class="clear"></div>

<footer>
	
	<div class="container">
  <div class="row">
    <div class="col">
      <h2>Users</h2>

      	<?php
			$users = new ViewUser();
			$users->showAllUsers();	
		?>

    </div>
    <div class="col">
      <h2>Packages</h2>
      <?php
      $Packages = new viewPackage();
      $Packages->showAllPackages(); 
    ?>
    </div>
    <div class="col">
      <h2>Navigation</h2>
    </div>
  </div>
</div>

</footer>

</body>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src = "includes/bootstrap/js/bootstrap.js"></script>

</html>