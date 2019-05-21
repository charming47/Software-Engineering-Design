<?php
	require("DbConn.php");
	//querySingle("teacher","tea_id",1,"password")

	function querySingle($tableName,$keyName,$keyValue,$attr){
		$sql="select $attr from $tableName where $keyName = '$keyValue';";
		$stmt=$conn->query($sql);
		$rows=$stmt->fetch(PDO::FETCH_ASSOC);
		return $rows["$attr"];
	}

	function queryList($tableName,$attr){
		$sql="select $attr from $tableName;";
		$stmt=$conn->query($sql);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	function insert($tableName,$attrNameAndValue){
		$AttrArrStr="";
		$ValueArrStr="";
		foreach ($attrNameAndValue as $attrName => $insertValue) {
			$AttrArrStr=$attrName.",";
			$ValueArrStr="'".$insertValue."',";
		}
		$AttrArrStr=rtrim($AttrArrStr,',');
		$ValueArrStr=rtrim($ValueArrStr,',');
		$sql="insert into $tableName(".$AttrArrStr.") values (".$insertValue.");";
		$stmt=$conn->exec($sql);
	}



	function update($tableName,$keyName,$keyValue,$updateValue){
		$sql="update $tableName set name='$updateValue' where $keyName=$keyValue";
		$stmt=$conn->exec($sql);
	}

	function delete($tableName,$keyName,$keyValue){
		$sql="delete from $tableName where $keyName=$keyValue;";
		$conn->exec($sql);
	}



