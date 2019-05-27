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
		//更新数据表中的人员的名字。
		public function updateName(){
			update("student","stu_id",getStuId(),getName());
		}
		//更新数据表中的人员的邮箱。
		public function updateEmail(){
			update("student","stu_id",getStuId(),getEmail());
		}
		//更新数据表中的人员的电话号码。
		public function updatePhoneNumber(){
			update("student","stu_id",getStuId(),getEmail());
		}
		//更新数据表中的人员的专长。
		public function updateExpertise(){
			update("student","stu_id",getStuId(),getExpertise());
		}
		//更新数据表中的人员的密码。
		public function updatePassword(){
			update("student","stu_id",getStuId(),getExpertise());
		}
		public function viewOverTopic(){

			//showTopic还没有写好，等前端这个界面写好之后再把这行代码解注释。
			//showTopic(queryListAll("topic","name");)
		}
		
		
		
		//类图中没有的方法
		public function viewProgressRate(){
			querySingle("student","stu_id",getStuId(),"progress_rate");
		}
	}