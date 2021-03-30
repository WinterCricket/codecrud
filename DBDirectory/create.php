
<?php 
include('includes/functions.php');
if(isset($_POST['btnInsert'])) :
	insert($_POST['fname'],$_POST['lname'],$_POST['phone']);
endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CodeCrud DB</title>
	<link rel="stylesheet" href="includes/style.css">
</head>
<body>
	<h1>Add to the Records</h1>
	
	<form action="" method="post">
		<label for="fname">First Name</label>
		<input type="text" name="fname" id="fname" value="">
		<br>
		<label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname" value="">
		<br>
		<label for="phone" >Phone Number</label>
		<input type="" name="phone" id="phone" value="">
		<br>
		<button name="btnInsert">Add</button>
	</form>
</body>
</html>

