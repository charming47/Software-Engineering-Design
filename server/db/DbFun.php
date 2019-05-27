<?php
require_once('DbConn.php');

// echo "在DbFun.php中。<br>";
// echo "密码为：".$password."。<br>";
// $str1="ssssssss";

//方法返回的是一个数组。
function querySingle($tableName, $keyName, $keyValue, $attr) {
	global $conn;
    $sql = "select $attr from $tableName where $keyName = '$keyValue';";
    $stmt = $conn->query($sql);
    return $stmt->fetch(PDO::FETCH_ASSOC);
} 
// 查询表中某一个属性中的所有的值。
// 函数返回的是一个PDO statement对象。
// 如果想取出里面的值，需要通过foreach遍历。
function queryListAll($tableName, $attr) {
	global $conn;
    $sql = "select $attr from $tableName;";
    $stmt = $conn->query($sql);
    return $stmt->fetch(PDO::FETCH_ASSOC);
} 
// 查询表中某一个属性中符合某一个条件的值。
// 函数返回的是一个PDO statement对象。
// 如果想取出里面的值，需要通过foreach遍历。
function queryListCondition($tableName, $attr, $keyName, $keyValue) {
	global $conn;
    $sql = "select $attr from $tableName where $keyName='$keyValue';"; 
	// echo '$sql为：'.$sql.'<br>';
	// echo '在DbFun.php的queryListCondition中，';
    // if($conn==null){
		// echo '$conn为空。<br>';
    // }
	// else{
		// echo '$conn不为空。<br>';
	// }
	// echo '$str1为：'.$str1.'<br>';
	// echo '$password为：'.$password.'<br>';
    $stmt = $conn->query($sql);
	
    // $topicArr=$stmt->fetch(PDO::FETCH_ASSOC);
	// echo $topicArr['top_id'];
	return $stmt;
} 
// 函数返回的是一个PDO statement对象。
// 如果想取出里面的值，需要通过foreach遍历。
function insert($tableName, $attrNameAndValue) {
	global $conn;
    $AttrArrStr = "";
    $ValueArrStr = "";
    foreach ($attrNameAndValue as $attrName => $insertValue) {
        $AttrArrStr = $attrName . ",";
        $ValueArrStr = "'" . $insertValue . "',";
    } 
    $AttrArrStr = rtrim($AttrArrStr, ',');
    $ValueArrStr = rtrim($ValueArrStr, ',');
    $sql = "insert into $tableName(" . $AttrArrStr . ") values (" . $insertValue . ");";
    $stmt = $conn->exec($sql);
} 
// 函数返回的是一个PDO statement对象。
// 如果想取出里面的值，需要通过foreach遍历。
function update($tableName, $attrName, $updateValue, $keyName, $keyValue) {
	global $conn;
    $sql = "update $tableName set $attrName='$updateValue' where $keyName=$keyValue";
    $stmt = $conn->exec($sql);
} 

function delete($tableName, $keyName, $keyValue) {
	global $conn;
    $sql = "delete from $tableName where $keyName=$keyValue;";
    $conn->exec($sql);
} 
