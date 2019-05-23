<?php
	require("DbConn.php");
	//querySingle("teacher","tea_id",1,"password")

	function querySingle($tableName,$keyName,$keyValue,$attr){
		$sql="select $attr from $tableName where $keyName = '$keyValue';";
		$stmt=$conn->query($sql);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	//函数返回的是一个PDO statement对象。
	//如果想取出里面的值，需要通过foreach遍历。
	function queryList($tableName,$attr,$keyName,$keyValue){
		$sql="select $attr from $tableName;";
		$stmt=$conn->query($sql);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//函数返回的是一个PDO statement对象。
	//如果想取出里面的值，需要通过foreach遍历。
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

	//函数返回的是一个PDO statement对象。
	//如果想取出里面的值，需要通过foreach遍历。
	function update($tableName,$attrName,$updateValue,$keyName,$keyValue){
		$sql="update $tableName set $attrName='$updateValue' where $keyName=$keyValue";
		$stmt=$conn->exec($sql);
	}

	function delete($tableName,$keyName,$keyValue){
		$sql="delete from $tableName where $keyName=$keyValue;";
		$conn->exec($sql);
	}



/*  */