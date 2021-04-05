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

/* insert statement*/

function insert($fname = NULL, $lname = NULL, $phone = NULL ){
	global $mysqli;
	$stmt = $mysqli->prepare('INSERT INTO employees(fname, lname, phone) VALUES (?, ?, ?)');
	$stmt->bind_param('sss', $fname, $lname, $phone);
	$stmt->execute();
	$stmt->close();
}

/* update statement*/

// function update($fname = NULL, $lname = NULL, $phone = NULL){
// 	global $mysqli;
// 	$stmt = $mysqli->prepare('INSERT INTO employees(fname, lname, phone) VALUES (?, ?, ?)');
// 	$stmt->bind_param('sss', $fname, $lname, $phone);
// 	$stmt->execute(); left off at minute 31 on video
// 	$stmt->close();
// }