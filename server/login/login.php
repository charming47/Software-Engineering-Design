<?php
require_once('../db/DbFun.php');

$identity = $_POST['identity'];
$user_id = $_POST['user_id'];
$input_pwd = $_POST['input_pwd']; 
// echo "$user_id"."\n";
if ($identity === 'teacher') {
    $arrTypePwd = querySingle('teacher', 'tea_id', $user_id, 'password');
    $real_pwd = $arrTypePwd['password'];
} 
// select password from student where stu_id = '1ttt';
elseif ($identity === 'student') {
    $arrTypePwd = querySingle('student', 'stu_id', $user_id, 'password');
    $real_pwd = $arrTypePwd['password'];
} 
if ($real_pwd == $input_pwd) {
    $result = "successful";
	session_start();
	if($identity === 'teacher'){
		$_SESSION["teacher"] = true;
	}elseif ($identity === 'student') {
		$_SESSION["student"] = true;
	}
} else {
    $result = "fail";
} 
$data = array("state" => $result);
echo json_encode($data);
