<?php
class TeacherView {
    public function displayTopicsOfTeacher($topicsOfTeacher) {
		// echo "在TeacherView的displayTopicsOfTeacher中，";
		// if($topicsOfTeacher==null){
			// echo '$topicsOfTeacher为空。<br>';
		// }
		// else{
			// echo '$topicsOfTeacher不为空。<br>';
		// }
        foreach($topicsOfTeacher as $singleTopic) {
            echo $singleTopic->getName();
            echo "<br>";
            echo $singleTopic->getBackground();
            echo "<br>";
            echo $singleTopic->getRequirement();
            echo "<br>";
            echo "<br>";
        } 
    } 
} 
