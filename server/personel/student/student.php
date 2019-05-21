<?php
	require("../Personel.php");
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
		public function initSinglePersonel(){
			
		}
		public function updateSinglePersonel(){
			
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