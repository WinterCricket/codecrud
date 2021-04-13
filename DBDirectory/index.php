
<?php 
include('includes/functions.php');

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
	<h1>This is CodeCrud!</h1>
	<div class="boxy">
		<ul id="unbullet">
			<li>C</li>
			<li>R</li>
			<li>U</li>
			<li>D</li> 

		</ul>

		<?php 

			formatcode(selectAll());
			formatcode(selectSingle(1));

			$user = selectSingle(3);
			echo "Morty, this is ".$user['fname']." ".$user['lname']." from down the street. Hey, ".$user['fname'].", your id number is ".$user['ID'].". Is your phone number still ".$user['phone']."?";
		 ?>
		 <h2>The emergency fix as been merged with master, as this shows</h2>


		 <h3>This is the new index addition on the secretPHP branch, now merged with the master</h3>
		 <h3>This is a push version</h3>
		<h2>And this is created on Github to be shipped to local machine, but on the butter-lemon branch.</h2>
	</div>
</body>
</html>

