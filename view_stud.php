<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
		<img src="img/1.jpg" width="780" style="margin-left:10px;" class="sha">
		<div class="sidebar">
			<?php include"sidebar.php";?>
		</div>
		<div class="content">
			<h1 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h1><br><hr><br>
			<h1 > School Information</h1><br>
			
		</div>
		
<div class="footer">
			<footer><p>Copyright &copy; Tutor Joe's </p></footer>
</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			
		});
	</script>
	</body>
</html>