
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

			$user = selectSingle(2);
			echo "Morty, this is ".$user['fname']." ".$user['lname']." from down the street. Hey, ".$user['fname'].", your id number is ".$user['ID'].".";
		 ?>
	</div>
</body>
</html>
</html>
