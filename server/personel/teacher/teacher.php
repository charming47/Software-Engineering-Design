<?php
	/**
	 * 
	 */
	require("../Personel.php");
	require("../../db/DbFun.php");
	require("../../topic/Topic.php");
	class Teacher extends Personel
	{
		private $teaId;

		private $Top=new array();

		public function recordTop(){
			array_push($Top );
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
		public function releaseTop($name,$background,$requirement){
			$releaseTop->createTop(getTeaId(),$name,$background,$requirement);
		}
		public function updateBack(){
			updateBackgrond();
		}
		public function updateRqire(){
			updateRqirement();
		}
		public function deleteT(){
			deleteTop();
		}
		//Top 是选题的对象 taskbookname 是存放的路径
		public function writeTaskBook($taskBookName,$Top){
			$taskBook = array('top_id' => $Top->getTopId(),'task_book_name' => $taskbookname);
			insert("task_book",$taskBook);
		}
		public function selectStudent($stuId,$topId){
			$selectStu = array('stu_id' => $stuId,'top_id' => $topId);
			insert("successful_apply",$selectStu);
		}
		public function viewTopicSelectionReport($stuId){
			return querySingle('topic_selection_report','stu_id',$stuId,'topic_selection_report_name');
		}
		public function writeGuidingOpinion(){
			
		}



	}