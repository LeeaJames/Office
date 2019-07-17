<?php include 'header.php'; ?>

<form name="items" action = "" method="POST">
	<div class="form-group">
		<label for="name">Name</label>
          <input type = "text" id="name" name="name">
    </div>
    <div class="form-group">
    	<label for="lname">Surname</label>
          <input type = "text" id="lname" name="lname">
	</div>
    <div class="form-group">
    	<label for="email">Email</label>
          <input type = "email" id="email" name="email">
	</div>
    <div class="form-group">
    	<label for="role">Job role</label>
          <input type = "text" id="role" name="role">
	</div>

          <input class="btn btn-primary" type = "submit" id="but" name="but" value="Submit">
</form>

<?php 

$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$role = $_POST['role'];

AddUser($name, $lname, $email, $role);

?>



<?php include 'footer.php'; ?>