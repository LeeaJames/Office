<?php include 'header.php'; ?>

<div class="content">
	<h1>WebBoss Developers</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste repellat commodi odit deleniti doloribus, quisquam at enim quod, vitae nesciunt molestias incidunt, quidem rem, minus praesentium voluptatibus reprehenderit optio dicta.</p>
   	<?php
			$users = new ViewDevelopers();
			$users->showDevelopers();	
		?>
</div>



<?php include 'footer.php'; ?>