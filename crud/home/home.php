<!DOCTYPE html>
<?php
	include '../../auth/conn.php';
	session_start();
	
	if(!ISSET($_SESSION['user'])){
		header('location:../index.php');
	}
?>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<style>
			a {
				text-align: center;
			}
		</style>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://voz.vn">VOZ</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">VOZ Forum</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h3>Welcome!</h3>
			<br />
			<?php
				$id = $_SESSION['user'];
				$sql = $conn->prepare("SELECT * FROM `user` WHERE `user_id`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
			?>
			
				<h4>
					<?php echo $fetch['firstname']." ". $fetch['lastname']?>
				</h4>

			<a href = "../../auth/logout.php">Logout</a>
		</div>
	</div>
</body>
</html>