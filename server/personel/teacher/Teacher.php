<?php
require("../Personel.php");
require("../../db/DbFun.php");
require("../../topic/Topic.php");
class Teacher extends Personel {
    private $teaId;
	
	//用于存放教师拥有的选题的数组。
    private $TopicArr;

    

    public function getTeaId() {
        return $this->teaId;
    } 
    public function setTeaId($teaId) {
        $this->teaId = $teaId;
    } 
	public function setTopic() {
        array_push($Top);
    } 
	
	//该函数返回教师拥有的所有选题的选题号。
	private function getTeacherTopId(){
		return queryListCondition("topic","top_id","top_id",getTeaId());
	}
    // TODO
    public function initSinglePersonel() {
    } 
    public function updateSinglePersonel() {
    } //ENDTODO
    public function releaseTop($name, $background, $requirement) {
        $releaseTop->createTop(getTeaId(), $name, $background, $requirement);
    } 
    public function updateBack() {
        updateBackgrond();
    } 
    public function updateRqire() {
        updateRqirement();
    } 
    public function deleteT() {
        deleteTop();
    } 
    // Top 是选题的对象 taskbookname 是存放的路径
    public function writeTaskBook($taskBookName, $top) {
        $taskBook = array('top_id' => $top->getTopId(), 'task_book_name' => $taskbookname);
        insert("task_book", $taskBook);
    } 
    public function selectStudent($stuId, $topId) {
        $selectStu = array('stu_id' => $stuId, 'top_id' => $topId);
        insert("successful_apply", $selectStu);
    } 
    public function viewTopicSelectionReport($stuId) {
        return querySingle('topic_selection_report', 'stu_id', $stuId, 'topic_selection_report_name');
    } 
    // 这里guidingOpinionContent存放的也是路径吗？
    public function writeGuidingOpinion($stuId, $guidingOpinionContent) {
        $guidingOpinion = array('stu_id' => $stuId, 'guiding_opinion' => $guidingOpinionContent);
        insert("topic_selection_report", $guidingOpinion);
    } 
    public function writeAmendment($stuId, $amendment) {
        $amendments = array('stu_id' => $stuId, 'expertise' => $amendment);
        insert("editing_paper", $amendments);
    } 
    public function writeTutorOpinion($modifyingOpinion) {
        $modifyingOpinion = array('tea_id' => $teaId->getTeaId(), 'expertise' => $modifyingOpinion);
        insert("teacher", $modifyingOpinion);
    } 
    public function selectAppraiser($Appraiser) {
        $chooseAppraiser = array('tea_id' => $Appraiser);
        insert("appraiser", $chooseAppraiser);
    } 
    public viewFinalPaper($stuId) {
        return querySingle('final_paper', 'stu_id', $stuId, 'paper_name');
    } 
} 
