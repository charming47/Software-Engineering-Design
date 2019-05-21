<?php
	/**
	 * 
	 */
	require("../../db/DbFun.php");
	require("../ApplyTopic.php");
	class Topic 
	{
		private $topicName;

		private $background;

		private $requirement;

		private $topicId;

		private $applyTopic=new ApplyTopic();

		public function getTopicName(){
			return $this->topicName;
		}
		public function setTopicName($topicId){
			$this->topicName=$topicName;
		}
		public function getTopicId(){
			return $this->topicId;
		}
		public function setTopicId($topicId){
			$this->topicId=$topicId;
		}
		public function getbackground(){
			return $this->topicName;
		}
		public function setbackground($background){
			$this->background=$background;
		}
		public function getrequirement(){
			return $this->requirement;
		}
		public function setrequirement($requirement){
			$this->requirement=$requirement;
		}
		public function defineStudent($stuId){
			$insertStuAndTopic=array('stuId'=>$stuId ,'topicId'=>getTopicId());
			insert('successfull_apply', $insertStuAndTopic);

		}
		public function defineApplyStudent($stuId,$applyReason){
			//$insertApplyStudent=array('' => , );
			//调用createTopiceApply方法实现
			$applyTopic->createTopicApply(getTopicId(),$stuId,$applyReason);
		}
		public function createTopic($teaId,$name,$background,$requirement){
			$insertTopic = array('teaId'=>$teaId，'name' => $name , 'background' =>$background,'requirement'=>$requirement);
			insert("topic",$insertTopic);
		}
		public function updateBackgrond(){
			update('topic','background',getbackground(),'top_id',getTopicId());
		}
		public function updateRequirement(){
			update('topic','requirement',getrequirement(),'top_id',getTopicId());
		}
		public function deleteTopic(){
			delete('topic','top_id',getTopicId());
		}
		public function queryTopic(){
			return querySingle('topic','top_id',getTopicId(),'*');
		}
		}
	}