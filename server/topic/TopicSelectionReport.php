<?php
require_once('../../db/DbFun.php');
require_once('Topic.php');

class TopicSelectionReport{
	private $selectionReportContent;

	public function getSelectionReportContent(){
		return $this->selectionReportContent;
	}
	
	public function setSelectionReportContent($selectionReportContent){
		$this->selectionReportContent = $selectionReportContent;
	}

	public function createSelectionReportContent($stuId,$topicSelectionReportUrl){
		$topicSelectionReport=array("stu_id"=>$stuId,"topic_selection_report_url"=>$topicSelectionReportUrl);
		insert("topic_selection_report",$topicSelectionReport);
	}
}