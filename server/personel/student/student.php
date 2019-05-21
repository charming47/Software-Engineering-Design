<?php
	require("../Personel.php");
	require(../../db/DbFun.php);
	class Student extends Personel{
		private $stuId='';
		
		private $selectTopic;

		public function getStuId(){
			return $this->stuId;
		}
		public function setStuId($stuId){
			$this->stuId=$stuId;
		}

		//获得该名学生选的所有题目的题目号。
		public function getTopidAppled(){
			return 
		}
		
		//学生的密码默认为学生的学号。
		public function initSinglePersonel(){
			$stuInfo=array("stu_id"=>getStuId(),"name"=>getName(),"password"=>getStuId());
			insert("student",$stuInfo);
		}
		public function updateSinglePersonel($){
			
		}
		public function lookOverTopic(){

			queryDb(getStuId(),"topic","name");
			if(checkSuccess()){
				showSuccess();
			}
			else{
					showErro();
		}
			}
	}