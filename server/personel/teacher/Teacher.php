<?php
require_once("../Personel.php");
require_once("../../db/DbFun.php");
require_once("../../topic/Topic.php");
require_once("../../topic/TaskBook.php");
require_once("../../topic/paper/AppraiserOpinionSheet.php");
class Teacher extends Personel {
    private $teaId; 
    // 用于存放教师拥有的选题的数组。
    private $topicArr;
	
    private $taskBook;

    private $appraiserOpinionSheet;

    private $topicArr=array();

    public function getTaskBook(){
        return $this->$taskBook;
    }

    public function setTaskBook($taskBook){
        $this->taskBook=$taskBook;
    }

    public function getAppraiserOpinionSheet(){
        return $this->$appraiserOpinionSheet;
    }

    public function setAppraiserOpinionSheet($appraiserOpinionSheet){
        $this->appraiserOpinionSheet=$appraiserOpinionSheet;
    }

    public function getTeaId() {
        return $this->teaId;
    } 
    public function setTeaId($teaId) {
        $this->teaId = $teaId;
    } 
    public function getTopicArr() {
        return $this->topicArr;
    } 
    public function setTopicArr($topicArr) {
        $this->topicArr = $topicArr;
    } 
    // ***************************************
<<<<<<< HEAD
    // 初始化教师信息
    public function initSinglePersonel() {
        $teaInfo = array("tea_id" => $this->getTeaId(), "name" => $this->getName(), "password" => $this->getTeaId());
        insert("teacher", $teaInfo);
    } 
    public function updateName() {
        update("teacher", "tea_id", $this->getTeaId(), $this->getName());
    } 
    // 更新数据表中的人员的邮箱。
    public function updateEmail() {
        update("teacher", "tea_id", $this->getTeaId(), $this->getEmail());
    } 
    // 更新数据表中的人员的电话号码。
    public function updatePhoneNumber() {
        update("teacher", "tea_id", $this->getTeaId(), $this->getEmail());
    } 
    // 更新数据表中的人员的专长。
    public function updateExpertise() {
        update("teacher", "tea_id", $this->getTeaId(), $this->getExpertise());
    } 
    // 更新数据表中的人员的密码。
    public function updatePassword() {
        update("teacher", "tea_id", $this->getTeaId(), $this->getExpertise());
    } 
    // 在$TopicArr数组中存放教师所拥有的选题。
    // 这个函数执行完了之后，$TopicArr数组中的选题的对象中只有选题的题号，其他属性还没有初始化。
    // 经过测试，这个函数是稳定的。
    public function setTeacherTopic() {
        $this->setTopicArr($this->setPersonelTopic('tea_id',$this->getTeaId()));
    } 
    // TODO
    public function updateSinglePersonel() {
    } //ENDTODO
    public function releaseTopic($name, $background, $requirement) {
        $releaseTop->createTop($this->getTeaId(), $name, $background, $requirement);
    } 
    public function updateBackgrond($topic) {
        $topic->updateBackgrond();
    } 
    public function updateReqirement($topic) {
        $topic->updateRqirement();
    } 
    public function deleteTopic($topic) {
        $topic->deleteTopic();
    } 
    // topic是选题的对象，taskBookUrl是存放的路径。
    public function writeTaskBook($taskBookUrl, $topic) {
        $singleTaskBook=new TaskBook();
        $topic->setTaskBook($singleTaskBook);
        $singleTaskBook->createTaskBook($taskBookUrl,$topic);
    }    
    public function selectStudent($stuId, $topId) {
        //update $tableName set $attrName='$updateValue' where $keyName=$keyValue
        $selectStu = array('stu_id' => $stuId, 'top_id' => $topId);
        insert("successful_apply", $selectStu);
    } 
    public function viewTopicSelectionReport($stuId) {
        return querySingle('topic_selection_report', 'stu_id', $stuId, 'topic_selection_report_url');
    } 
	
    public function writeGuidingOpinion($stuId, $guidingOpinionContent) {
        update("topic_selection_report",'guiding_opinion',$guidingOpinionContent,'stu_id',$stuId);
    }

    public function writeAmendment($stuId,$amendment) {
        //这里update应该是双主键的，所以应该在DbFun里面新加一个update
        update("editing_paper","amendment",$amendment,"stuId",$stuId);
    } 
    public function writeTutorOpinion($stuId,$url) {
        update("final_paper",'stu_id',$stuId,'instructor_opinion_sheet_url',$url);
    } 
    public function selectAppraiser($appraiser) {
        $appraiser = new AppraiserOpinionSheet();
        $appraiser->setAppraiser($appraiser)
    } 
    public function viewFinalPaper($stuId) {
        return querySingle('final_paper', 'stu_id', $stuId, 'paper_name');
    } 
} 
