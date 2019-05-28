<?php
require_once("../../db/DbFun.php");
// require_once("../Applytop.php");
class Topic {
    private $name;

    private $background;

    private $requirement;

    private $topId; 
    // 下面这个类实现之后再取消注释。
    // private $applytop = new Applytop();
    public function getName() {
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
    // 经过测试，这个方法是稳定的。
    public function getTopicInfoFromDb() {
        $topicInfoStmt = queryListCondition('topic', '*', 'top_id', $this->getTopId());
        $topicInfoArr = $topicInfoStmt->fetch(PDO::FETCH_ASSOC);
        $this->setName($topicInfoArr['name']);
        $this->setBackground($topicInfoArr['background']);
        $this->setRequirement($topicInfoArr['requirement']);
    } 
} 
