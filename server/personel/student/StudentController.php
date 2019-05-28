<?php
require_once('Teacher.php');
require_once('TeacherView.php');
class TeacherController{
	function showTopicsOfTeacher(){
		$singleTeacher=new Teacher();
		$singleTeacher->setTeaId('1');
		$singleTeacher->setTeacherTopic();
		//$topicsOfTeacher是教师所拥有的选题数组。
		$topicsOfTeacher=$singleTeacher->getTopicArr();
		$singleTeacherView=new TeacherView();
		$singleTeacherView->displayTopicsOfTeacher($topicsOfTeacher);
	}
}