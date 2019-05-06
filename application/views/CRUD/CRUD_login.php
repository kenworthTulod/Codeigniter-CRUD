<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">

    <title>CRUDS</title>

  </head>
<body>
	<div class="login col-md-4 mx-auto text-center">

		<br>
		<br>

		<h2>CRUDS Login</h2>

		<br>

		<form method="post" action="<?php echo base_url('CRUD_control_login/verify')?>">
			<div class="form-group">
				<input class="form-control" type="text" name="username" placeholder="Username" required>
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="Password" required>
			</div>
			<div class="form-group">
				<button type="submit" name="login" class="btn btn-primary" value="save">Login</button>
			</div>
		</form>
	</div>
</body>
</html>