<?php
require_once('../../db/DbFun.php');
require_once('Topic.php');
class TaskBook{
	//属性：毕业设计任务书内容
	private $taskBookContent;

	public function getTaskBookContent(){
		return $this->taskBookContent;
	}

	public function setTaskBookContent($taskBookContent){
		$this->taskBookContent = $taskBookContent;
	}
	
	//创建毕业设计任务书方法（）
	public function createTaskBook($taskBookUrl, $topic){
		$taskBook = array('top_id' => $topic->getTopId(), 'task_book_name' => $taskBookUrl);
        insert("task_book", $taskBook);
	}

}