<?php include 'header.php'; ?>
<content>
<div class="contentConatainer">
	<nav class="nav nav-pills flex-column flex-sm-row">
		<a class="flex-sm-fill text-sm-center nav-link active" href="#!">In Progress</a>
		<a class="flex-sm-fill text-sm-center nav-link" href="#!">Review</a>
		<a class="flex-sm-fill text-sm-center nav-link" href="#!">Training</a>
	</nav>

	

	<div class="container">
  <div class="row">
    <div class="col">
      <p>Brian Plant</p>
    </div>
    <div class="col">
      <div class="progress">
	  <div class="progress-bar" role="progressbar" style="width: 41%" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
    </div>
    <div class="col">
      <span class="badge badge-success">Success</span>
    </div>
    <div class="col">
      <p>£1,000</p>
    </div>
  </div>
</div>

</div>



<sidebar>
<ul class="list-group">
	<li class="list-group-item active">Pre Production</li>
	<a href="<?php echo 'Designers.php' ?>"><li class="list-group-item">Designers</li></a>
	<a href="<?php echo 'Developers.php' ?>"><li class="list-group-item">Developers</li></a>
	<li class="list-group-item">Post Production</li>
</ul>

</sidebar>
</content>

<?php include 'footer.php'; ?>