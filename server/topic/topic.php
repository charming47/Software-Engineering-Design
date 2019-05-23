<?php
	/**
	 * 
	 */
	require("../../db/DbFun.php");
	require("../Applytop.php");
	class top 
	{
		private $topName;

		private $background;

		private $requirement;

		private $topId;

		private $applytop=new Applytop();

		public function getTopName(){
			return $this->topName;
		}
		public function setTopName($topId){
			$this->topName=$topName;
		}
		public function getTopId(){
			return $this->topId;
		}
		public function setTopId($topId){
			$this->topId=$topId;
		}
		public function getbackground(){
			return $this->topName;
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
			$insertStuAndtop=array('stuId'=>$stuId ,'topId'=>getTopId());
			insert('successfull_apply', $insertStuAndtop);

		}
		public function defineApplyStudent($stuId,$applyReason){
			//$insertApplyStudent=array('' => , );
			//调用createtopeApply方法实现
			$applytop->createtopApply(getTopId(),$stuId,$applyReason);
		}
		public function createtop($teaId,$name,$background,$requirement){
			$inserttop = array('teaId'=>$teaId，'name' => $name , 'background' =>$background,'requirement'=>$requirement);
			insert("top",$inserttop);
		}
		public function updateBackgrond(){
			update('top','background',getbackground(),'top_id',getTopId());
		}
		public function updateRequirement(){
			update('top','requirement',getrequirement(),'top_id',getTopId());
		}
		public function deleteTop(){
			delete('top','top_id',getTopId());
		}
		public function queryTop(){
			return querySingle('top','top_id',getTopId(),'*');
		}
		}
	}