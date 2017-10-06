<?php include_once 'header.php'; ?>

<div class="container-fluid">

	<h3>Welcome</h3>


	<form action="../controller/home_controller.php" method="POST">

		<input type="text" name="username" class="form-control" placeholder="username" autofocus required><br/>
		<input type="email" name="email" class="form-control" placeholder="Email" required><br/>
		<input type="password" name="password" class="form-control" placeholder="password" required><br/>
		<input type="submit" class="btn btn-primary form-control" value="Add User">
	</form>
	
</div>

<?php include_once 'footer.php'; ?>