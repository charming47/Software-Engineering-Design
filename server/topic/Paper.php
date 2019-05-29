<?php
require_once('../../db/DbFun.php');
class Paper{
	private $paperContent;

	private $isTerminal;

	private $createTime;

	private $appraiserOpinionSheet;

	public function getAppraiserOpinionSheet(){
		return $this->appraiserOpinionSheet;
	}

	public function setAppraiserOpinionSheet($appraiserOpinionSheet){
		$this->appraiserOpinionSheet=$appraiserOpinionSheet;
	}

	public function getPaperContent(){
		return $this->paperContent;
	}

	public function setPaperContent($paperContent){
		$this->paperContent=$paperContent;
	}

	public function getIsTerminal(){
		return $this->isTerminal;
	}
	public function setIsTerminal($stuId, $versionId){
		if($versionId <> querySingle('final_paper','stu_id',$stuId,'version_id')){
			$this->versionId = False;
		}
		else{
			$this->versionId = True;
		}
	}
	public function getCreateTime(){
		return $this->createTime;
	}
	public function setCreateTime($createTime){
		$this->createTime=$createTime;
	}
	//创建或覆盖论文
	public function insertPaper($stuId,$versionId,$paperUrl){
		$paper = array('stu_id' => $stuId, 'version_id' => $versionId, 'paper_url' => $paperUrl);
		insert('editing_paper',$paper);
	}
	public function viewPaper($stuId,$versionId){
		//等待query方法写好再进行编写
		return query('editing_paper',)
	} 


}
