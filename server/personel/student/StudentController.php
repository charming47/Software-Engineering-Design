<?php
require_once('Student.php');
require_once('StudentView.php');
class StudentController{
	function showTopicsOfStudent(){
		$singleStudent=new Student();
		$singleStudent->setTeaId('1');
		$singleStudent->setStudentTopic();
		//$topicsOfStudent是教师所拥有的选题数组。
		$topicsOfStudent=$singleStudent->getTopicArr();
		$singleStudentView=new StudentView();
		$singleStudentView->displayTopicsOfStudent($topicsOfStudent);
	}
}