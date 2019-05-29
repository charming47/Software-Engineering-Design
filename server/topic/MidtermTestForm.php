<?php
require_once('../../db/DbFun.php');
require_once('Topic.php');

class MidtermTestForm{
	private $midtermTestFormContent;
	public function getMidtermTestFormContent(){
		return $this->midtermTestFormContent;
	}

	public function setMidtermTestFormContent($midtermTestFormContent){
		$this->midtermTestFormContent= $midtermTestFormContent;
	}
	
	public function createMidtermTestFormContent($stuId,$midtermTestFormUrl){
		$midtermTestForm=array("stu_id"=>$stuId,"midterm_test_form_url"=>$midtermTestFormUrl);
		insert("midterm_test_form",$midtermTestForm);
	}
}