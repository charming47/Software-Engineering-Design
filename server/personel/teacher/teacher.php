<?php
	/**
	 * 
	 */
	require("../Personel.php");
	require("../../db/DbFun.php");
	class ClassName extends Personel
	{
		private $teaId;

		public function getTeaId(){
			return $this->teaId;
		}
		public function setTeaId($teaId){
			$this->teaId=$teaId;
		}
		//TODO
		public function initSinglePersonel(){

		}
		public function updateSinglePersonel(){
			
		}//ENDTODO
		public function releaseTopic($name,$background,$requirement){
			$insertTopic = array('teaId'=>getTeaId()，'name' => $name , 'background' =>$background,'requirement'=>$requirement);
			insert("topic",$insertTopic);
		}


	}