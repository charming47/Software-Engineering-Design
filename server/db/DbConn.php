<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "paper_manage";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::ATTR_PERSISTENT => true));
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo '在DbConn.php的queryListCondition中，';
// if($conn==null){
	// echo '$conn为空。<br>';
// }
// else{
	// echo '$conn不为空。<br>';
// }