
<?php 
include('includes/functions.php');
if(isset($_POST['btnUpdate'])) :
	update($_POST['fname'],$_POST['lname'],$_POST['phone']);
endif;

$user = (isset($_GET['id'])) ? selectSingle($_GET['id']) : false;

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
	<?php 
		if($user != false) :
	 ?>
	<h1>Update</h1>
	
	<form action="" method="post">
		<label for="fname">First Name</label>
		<input type="text" name="fname" id="fname" value="<?php echo $user['fname']; ?>">
		<br>
		<label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname" value="<?php echo $user['lname']; ?>">
		<br>
		<label for="phone" >Phone Number</label>
		<input type="" name="phone" id="phone" value="<?php echo $user['phone']; ?>">
		<br>
		<button name="btnUpdate">Update</button>
	</form>
	<?php else : ?>
		<h1>User not Set. Retry!</h1>
	<?php endif; ?>
</body>
</html>

