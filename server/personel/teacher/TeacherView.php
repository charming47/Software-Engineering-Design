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
		echo "<tr>
			<th>背景</th>
			<th>需求</th>
		</tr>";
        foreach($topicsOfTeacher as $singleTopic) {
            echo "<td>";
            echo $singleTopic->getName();
            echo "</td>";
            echo "<td>";
            echo $singleTopic->getBackground();
            echo "</td>";
            echo "<td>";
            echo $singleTopic->getRequirement();
            echo "</td>";
        } 
    } 
} 
