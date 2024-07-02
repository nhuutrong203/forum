<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>

		<script>
      function showPassword() {
         var x = document.getElementById("password");
         if (x.type === "password") {
            x.type = "text";
         } else {
            x.type = "password";
         }
      }
   </script>
	</head>

<body>

	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Welcome to my forum</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
			<script>
				(function() {
					// removing the message 3 seconds after the page load
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},3000)
				})();
			</script>
			<?php 
				endif;
				// clearing the message
				unset($_SESSION['message']);
			?>
			<form action="auth/login.php"  method="POST">	
				<h4 class="text-success">Login here...</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Username</label>
					<i class='bx bxs-user-circle'></i>
					<input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<i class='bx bxs-lock-alt' ></i>
					<input type="password" class="form-control" name="password" id="password" />
					<Br><br>
					<input type="checkbox" onclick="showPassword()">Show Password

				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="login">Login</button>
				</div>
				<a href="auth/signup.php">Registration</a>
			</form>
		</div>
	</div>
</body>
</html>