<?php
class TeacherView {
    public function displayTopicsOfTeacher($topicsOfTeacher) {
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
