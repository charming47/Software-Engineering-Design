<?php
// require_once('../topic/Topic.php');
class Personel {
    private $name = '';
    private $password = '';
    private $email = '';
    private $phoneNumber = '';
    private $expertise = '';

    public function getName() {
        return $this->name;
    } 
    public function setName($name) {
        $this->name = $name;
    } 
    public function getPassword() {
        return $this->password;
    } 
    public function setPassword($password) {
        $this->password = $password;
    } 
    public function setEmail($email) {
        $this->email = $email;
    } 
    public function getEmail() {
        return $this->email;
    } 
    public function getPhoneNumber() {
        return $this->phoneNumber;
    } 
    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    } 
    public function setExpertise($expertise) {
        $this->expertise = $expertise;
    } 
    public function getExpertise() {
        return $this->expertise;
    } 
    // public abstract function initSinglePersonel();
    // //更新数据表中的人员的名字。
    // public abstract function updateName();//更新数据表中的人员的邮箱。
    // public abstract function updateEmail();
    // //更新数据表中的人员的电话号码。
    // public abstract function updatePhoneNumber();
    // //更新数据表中的人员的专长。
    // public abstract function updateExpertise();
    // //更新数据表中的人员的密码。
    // public abstract function updatePassword();
	
	public function setPersonelTopic($personelIdNameInDb,$personelId) {
		$topicArr = array();
        $TeacherTopIdArr = $this->getPersonelTopId($personelIdNameInDb,$personelId);
        foreach($TeacherTopIdArr as $topId) {
            $teacherSingleTopic = new Topic();
            $teacherSingleTopic->setTopId($topId);
            $teacherSingleTopic->getTopicInfoFromDb();
            array_push($topicArr, $teacherSingleTopic);
        } 
		return $topicArr;
	}
	
	// 该函数返回教师拥有的所有选题的选题号。
    // 返回的$topIdArr是一个数组，是正确的。
    // 经过测试，这个函数是稳定的。
	private function getPersonelTopId($personelIdNameInDb,$personelId) {
        // 注意下面的函数的参数里面的keyName和keyValue部分不是topic表中的key和相应的value。
        $topIdStmt = queryListCondition("topic", "top_id", $personelIdNameInDb, $personelId);
        $topIdArr = array();
        foreach ($topIdStmt as $row) {
            array_push($topIdArr, $row['top_id']);
        } 
        return $topIdArr;
    }
} 
