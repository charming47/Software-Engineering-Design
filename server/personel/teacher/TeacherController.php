<?php
require_once('Teacher.php');
class TeacherController{
	function showTopicsOfTeacher(){
		$singleTeacher=new Teacher();
		$singleTeacher->setTeaId('1');
		$singleTeacher->setTeacherTopic();
		$topicsOfTeacher=$singleTeacher->getTopicArr();
		$singleTeacherView=new TeacherView();
		$singleTeacherView->displayTopicsOfTeacher($topicsOfTeacher);
	}
}