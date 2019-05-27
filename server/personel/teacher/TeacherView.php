<?php
class TeacherView {
    public function displayTopicsOfTeacher($topicsOfTeacher) {
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
