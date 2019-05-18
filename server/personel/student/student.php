<?php
	class Student{
		private $stuId='';
		
		public function setStuId($stuId){
			$this->stuId=$stuId;
		}
		public function getStuId(){
			return $this->stuId;
		}
	}
	$stu1=new Student();
	$stu1->setStuId("1111111");
	echo $stu1->getStuId();
	