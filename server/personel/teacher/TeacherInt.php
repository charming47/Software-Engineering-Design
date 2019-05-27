<?php
//http://localhost/Software-Engineering-Design/server/personel/teacher/TeacherInt.php
require_once('TeacherController.php');
$singleTeachelController=new TeacherController();
$singleTeachelController->showTopicsOfTeacher();
