<?php 

 	$mysqli = new mysqli("localhost", "root", "root", "codecrud", "3306");

 	if($mysqli->connect_error){
 		exit('Error while attempting to connect with the database...');
 	}