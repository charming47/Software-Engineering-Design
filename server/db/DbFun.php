<?php
	require_once("DbConn.php");

	function querySingle($tableName,$keyName,$keyValue,$attr){
		$sql="select $attr from $tableName where $keyName = '$keyValue';";
		$stmt=$conn->query($sql);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//查询表中某一个属性中的所有的值。
	//函数返回的是一个PDO statement对象。
	//如果想取出里面的值，需要通过foreach遍历。
	function queryListAll($tableName,$attr){
		$sql="select $attr from $tableName;";
		$stmt=$conn->query($sql);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	//查询表中某一个属性中符合某一个条件的值。
	//函数返回的是一个PDO statement对象。
	//如果想取出里面的值，需要通过foreach遍历。
	function queryListCondition($tableName,$attr,$keyName,$keyValue){
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="select $attr from $tableName where $keyName='$keyValue';";
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