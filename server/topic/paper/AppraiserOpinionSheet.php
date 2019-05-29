<?php
class AppraiserOpinionSheet{
	private $appraiserOpinionSheetContent;

	public function getAppraiserOpinionSheetContent(){
		return $this->appraiserOpinionSheetContent;
	}
	public function setAppraiserOpinionSheetContent($appraiserOpinionSheetContent){
		$this->appraiserOpinionSheetContent=$appraiserOpinionSheetContent;
	}

	public function setAppraiser($appraiser){
		$chooseAppraiser = array('tea_id' => $appraiser);
        insert("appraiser", $chooseAppraiser);
	}
}
