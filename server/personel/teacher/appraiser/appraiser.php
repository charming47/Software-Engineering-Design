<?php
require_once("../../../db/DbFun.php");
class Appraiser{
	public function writeAppraiseTable($stuId,$url){
		 update("final_paper",'stu_id',$stuId,'appraiser_opinion_sheet_url',$url);
	}
}