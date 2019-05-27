<?php
class TeacherView {
    public function displayTopicsOfTeacher($topicsOfTeacher) {
		echo "在TeacherView的displayTopicsOfTeacher中，";
		if($topicsOfTeacher==null){
			echo '$topicsOfTeacher为空。<br>';
		}
		else{
			echo '$topicsOfTeacher不为空。<br>';
		}
        foreach($topicsOfTeacher as $singleTopic) {
            echo "<td>";
            echo $singleTopic['name'];
            echo "</td>";
            echo "<td>";
            echo $singleTopic['background'];
            echo "</td>";
            echo "<td>";
            echo $singleTopic['requirement'];
            echo "</td>";
        } 
    } 
} 
