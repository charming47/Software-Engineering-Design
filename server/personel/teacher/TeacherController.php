<?php
require_once('Teacher.php');
require_once('TeacherView.php');
class TeacherController{
	function showTopicsOfTeacher(){
		$singleTeacher=new Teacher();
		$singleTeacher->setTeaId('1');
		$singleTeacher->setTeacherTopic();
		$topicsOfTeacher=$singleTeacher->getTopicArr();
		echo "在TeacherController的showTopicsOfTeacher中，";
		if($topicsOfTeacher==null){
			echo '$topicsOfTeacher为空。<br>';
		}
		else{
			echo '$topicsOfTeacher不为空。<br>';
		}
		// foreach($topicsOfTeacher as $singleTopic) {
            // echo "<td>";
            // echo $singleTopic['name'];
            // echo "</td>";
            // echo "<td>";
            // echo $singleTopic['background'];
            // echo "</td>";
            // echo "<td>";
            // echo $singleTopic['requirement'];
            // echo "</td>";
        // }
		$singleTeacherView=new TeacherView();
		$singleTeacherView->displayTopicsOfTeacher($topicsOfTeacher);
	}
}