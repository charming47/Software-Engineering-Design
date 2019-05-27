<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "paper_manage";
	
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
