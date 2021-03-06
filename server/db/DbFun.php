<?php
require_once('DbConn.php');
// 方法返回的是一个数组。
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
// 经过测试，这个方法是稳定的。
function queryListCondition($tableName, $attr, $keyName, $keyValue) {
    global $conn;
    $sql = "select $attr from $tableName where $keyName='$keyValue';";
    $stmt = $conn->query($sql);
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
// 如果想取出里面的值，需要通过foreach遍历。
function update($tableName, $attrName, $updateValue, $keyName, $keyValue) {
    global $conn;
    $sql = "update $tableName set $attrName='$updateValue' where $keyName=$keyValue";
    $stmt = $conn->exec($sql);
} 

// SQL语句测试成功。
// update editing_paper set pass='1' where stu_id=3 and version_id=1;
function updateByDoubleKeys($tableName, $attrName, $updateValue, $keyName1, $keyValue1,$keyName1, $keyValue1) {
    global $conn;
    $sql = "update $tableName set $attrName='$updateValue' where $keyName1=$keyValue1 and $keyName2=$keyValue2;";
    $stmt = $conn->exec($sql);
} 

function delete($tableName, $keyName, $keyValue) {
    global $conn;
    $sql = "delete from $tableName where $keyName=$keyValue;";
    $conn->exec($sql);
} 
