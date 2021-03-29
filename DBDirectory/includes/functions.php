<?php 
	 require_once('db.php');


/*format arrays */

function formatcode($arr){
	echo '<prev>';
	print_r($arr);
	echo '</prev>';
}

/* select statement */

function selectAll(){
	global $mysqli;
	$stmt = $mysqli->prepare('SELECT * FROM employees');
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows === 0){
		echo 'No rows';//echo ('No rows');
	}
	while($row = $result->fetch_assoc()){
		$data[] = $row;
	}
	$stmt->close();
}