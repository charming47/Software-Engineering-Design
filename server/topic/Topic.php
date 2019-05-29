<?php
require_once("../../db/DbFun.php");
require_once("TaskBook.php");
//require_once("../Applytop.php");
class Topic {
    private $name;

    private $background;

    private $requirement;

    private $topId; 

    private $taskBook;

    private $topicSelectionReport;

    private $midtermTestForm;

    private $paper;

    public function getTaskBook(){
        return $this->taskBook;
    }
    public function setTaskBook($taskBook){
        $this->taskBook = $taskBook;
    }
    public function getTopicSelectionReport(){
        return $this->topicSelectionReport;
    }
    public function setTopicSelectionReport($topicSelectionReport){
        $this->topicSelectionReport = $topicSelectionReport;
    }
    public function getMidtermTestForm(){
        return $this->midtermTestForm;
    }
    public function setMidtermTestForm($midtermTestForm){
        $this->midtermTestForm = $midtermTestForm;
    }
    public function getPaper(){
        return $this->paper;
    }
    public function setPaper($paper){
        $this->paper=$paper;
    }
    // 下面这个类实现之后再取消注释。
    // private $applytop = new Applytop();
    public function getName() {
		// echo 'Topic类里面的getName方法被调用了<br>';
		// echo '$this->name为'.$this->name.'<br>';
        return $this->name;
    } 
    public function setName($name) {
        $this->name = $name;
    } 
    public function getTopId() {
        return $this->topId;
    } 
    public function setTopId($topId) {
        $this->topId = $topId;
    } 
    public function getBackground() {
        return $this->background;
    } 
    public function setBackground($background) {
        $this->background = $background;
    } 
    public function getRequirement() {
        return $this->requirement;
    } 
    public function setRequirement($requirement) {
        $this->requirement = $requirement;
    } 
    // *****************************************
    public function defineStudent($stuId) {
        $insertStuAndtop = array('stuId' => $stuId , 'topId' => getTopId());
        insert('successfull_apply', $insertStuAndtop);
    } 
    public function defineApplyStudent($stuId, $applyReason) {
        // $insertApplyStudent=array('' => , );
        // 调用createtopeApply方法实现
        $applytop->createtopApply(getTopId(), $stuId, $applyReason);
    } 
    public function createTopic($teaId, $name, $background, $requirement) {
        $inserttop = array('teaId' => $teaId, 'name' => $name , 'background' => $background, 'requirement' => $requirement);
        insert("top", $inserttop);
    } 
    public function updateBackgrond() {
        update('top', 'background', getBackground(), 'top_id', getTopId());
    } 
    public function updateRequirement() {
        update('top', 'requirement', getRequirement(), 'top_id', getTopId());
    } 
    public function deleteTopic() {
        delete('top', 'top_id', getTopId());
    } 
    // 把Topic对象中的变量赋值为数据库中的数据。
    public function getTopicInfoFromDb() {
        $topicInfoStmt = queryListCondition('topic', '*', 'top_id', $this->getTopId());
		$topicInfoArr=$topicInfoStmt->fetch(PDO::FETCH_ASSOC);
		//到此，$topicInfoArr['name']还是数据库中的值。
        $this->setName($topicInfoArr['name']);
		// echo '在Topic的getTopicInfoFromDb方法里，$topicInfoArr[name]为：<br>'.$topicInfoArr['name'];
		// echo '在Topic的getTopicInfoFromDb方法里，$topicInfoArr[name]为：<br>'.$this->getName();
        $this->setBackground($topicInfoArr['background']);
        $this->setRequirement($topicInfoArr['requirement']);
    } 
} 