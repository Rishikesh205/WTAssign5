<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usre Registraion | PHP </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php 
		if(isset($_POST['create'])){
		$firstname     = $_POST['firstname'];
		$lastname      = $_POST['lastname'];
		$email         = $_POST['email'];
		$phonenumber   = $_POST['phonenumber'];
		$password      = $_POST['password'];

		$sql = "INSERT INTO users (firstname, lastname, email, phonenumber, password ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
		if($result){
			echo 'Successfully saved';
		}else{
			echo 'There were errors while savin data';
		}
	}
	?>
</div>

<div>
	<form action="registration.php" method="post">
		<div clas="container">

			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the Form with correct values</p>
					<hr class="mb-3">
					<lebel for="firstname"><b>First Name</b></lebel>
					<input class="form-control" type="text" name="firstname" required>

					<lebel for="lastname"><b>Last Name</b></lebel>
					<input class="form-control" type="text" name="lastname" required>

					<lebel for="email"><b>Email Address</b></lebel>
					<input class="form-control" type="email" name="email" required>

					<lebel for="phonenumber"><b>Phone No.</b></lebel>
					<input class="form-control" type="text" name="phonenumber" required>

					<lebel for="password"><b>Password</b></lebel>
					<input class="form-control" type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" name="create" value="Sign Up">
			    </div>
		    </div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	$(function(){
		//alert('hello.');
		swal.fire({
			'title' : 'Hello World',
			'text' : 'This is from sweetalert2',
			'type' : 'success'
		})
	});
</script>
</body>
</html>	