<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>

<?php 
include('includes/sign_up.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/my-login.css">
	<link href="/OnePage/img/img/Sommer___Dane_Law-removebg-preview.png" rel="icon">
  <link href="/OnePage/img/img/Sommer___Dane_Law-removebg-preview.png" rel="apple-touch-icon">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="/img/img/Sommer___Dane_Law-removebg-preview.png" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<div class="main-card mb-3 card">
								<form class="" method="post">
									<div class="form-row">
										<div class="col-md-6">
											<div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="with a placeholder" type="email" class="form-control"></div>
										</div>
										<div class="col-md-6">
											<div class="position-relative form-group"><label for="phonenum" class="">Phone</label>
											<input name="phonenum" id="phonenum" placeholder="Insert Your Phone Number" type="text" class="form-control"></div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6">
											<div class="position-relative form-group"><label for="fname" class="">First Name</label><input name="fname" id="fname" placeholder="Insert Your First Name" type="text" class="form-control">
										</div>
										</div>
										<div class="col-md-6">
											<div class="position-relative form-group"><label for="lname" class="">Last Name</label>
											<input name="lname" id="lname" placeholder="Insert Your Last Name" type="text" class="form-control"></div>
										</div>
									</div>
									<div class="position-relative form-group">
										<label for="address" class="">Address</label>
									<input name="address" id="address" placeholder="Street Address, Town, State, Zip Code " type="text" class="form-control">
									</div>
									<div class="form-row">
										<div class="col-md-4">
											<div class="position-relative form-group"><label for="citizen_num" class="">Citizen Number</label>
											<input name="citizen_num" id="citizen_num" type="text" class="form-control"></div>
										</div>
										<div class="col-md-4">
											<div class="position-relative form-group"><label for="min_wage" class="">Wage (RM)</label>
											<input name="min_wage" id="min_wage" type="text" class="form-control"></div>
										</div>
										<div class="col-md-4">
											<div class="position-relative form-group"><label for="occupation" class="occupation">Occupation</label><input name="occupation" id="occupation" type="text" class="form-control"></div>
										</div>
									</div>
									<div class="position-relative form-group">
										<label for="password" class="">Password</label>
									<input name="password" id="password" placeholder="Insert Your Password" type="password" class="form-control">
									</div>
									<div class="position-relative form-check">
										<input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label>
								</div>
									<button name='submit' type="submit" class="mt-2 btn btn-primary">Register</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer">
					Copyright &copy; 2021 &mdash; Bujang
				</div>
			</div>
		</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="assets/js/my-login.js"></script>
</body>

</html>