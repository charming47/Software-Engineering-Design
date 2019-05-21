<?php
	require("Personel.php");
	class Student{
		private $stuId='';
		private $per=new Personel();

		public function getStuId(){
			return $this->stuId;
		}
		public function setStuId($stuId){
			$this->stuId=$stuId;
		}


		//TODO
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