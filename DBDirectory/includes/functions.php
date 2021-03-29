<?php 
	 require_once('db.php');


/*format arrays */

function formatcode($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

/* select statement */

function selectAll(){
	global $mysqli;
	$data = array();
	$stmt = $mysqli->prepare('SELECT * FROM employees');
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows === 0){
		echo 'No rows today';
	}
	while($row = $result->fetch_assoc()){
		$data[] = $row;
	}
	$stmt->close();
	return $data;
}

/* select single statement */

function selectSingle($id = NULL){
	global $mysqli;
	
	$stmt = $mysqli->prepare('SELECT * FROM employees WHERE id = ?');
	$stmt->bind_param('i', $id);
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows === 0){
		echo 'No rows today';
	}
	$row = $result->fetch_assoc();

	$stmt->close();
	return $row;
}