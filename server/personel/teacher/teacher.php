<?php
	/**
	 * 
	 */
	require("../Personel.php");
	require("../../db/DbFun.php");
	require("../../topic/topic.php");
	class Teacher extends Personel
	{
		private $teaId;

		private $topic=new array();

		public function recordTopic(){
			array_push($topic );
		}

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
			$releaseTopic->createTopic(getTeaId(),$name,$background,$requirement);
		}
		public function updateBack(){
			updateBackgrond();
		}
		public function updateRqire(){
			updateRqirement();
		}
		public function deleteTop(){
			deltetTopic();
		}
		//topic 是选题的对象 taskbookname 是存放的路径
		public function writeTaskBook($taskBookName,$topic){
			$taskBook = array('top_id' => $topic->getTopId(),'task_book_name' => $taskbookname);
			insert("task_book",$taskBook);
		}



	}