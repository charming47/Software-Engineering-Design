<?php
	$servername = "localhost";
	$username = "root";
	$password = "15600758699";
	$dbname = "paper_manage";
	
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$identity=$_POST['identity'];
	$user_id=$_POST['user_id'];
	$input_pwd=$_POST['input_pwd'];
	
	// echo "$user_id"."\n";
	if($identity==='teacher'){
		$sql="select password from $identity where tea_id = '$user_id';";
	}
	//select password from student where stu_id = '1ttt';
	elseif($identity==='student'){
		$sql="select password from $identity where stu_id = '$user_id'";
	}
	$stmt=$conn->query($sql);
	$rows=$stmt->fetch(PDO::FETCH_ASSOC);
	$real_pwd=$rows['password'];
	if($real_pwd==$input_pwd){
		$result="successful"; 
	}
	else{
		$result="fail"; 
	}
	$data = array("state"=>$result); 
	echo json_encode($data);
?>