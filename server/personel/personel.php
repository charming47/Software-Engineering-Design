<?php
	class abstract Personel{
		private $name='';
		private $password='';
		private $email='';
		private $phoneNumber='';
		private $expertise='';
		
		public function getName(){
			return $this->name;
		}
		public function setName($name){
			$this->name=$name;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password=$password;
		}
		public function setEmail($email){
			$this->email=$email;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getPhoneNumber(){
			return $this->phoneNumber;
		}
		public function setPhoneNumber($phoneNumber){
			$this->phoneNumber=$phoneNumber;
		}
		public function setExpertise($expertise){
			$this->expertise=$expertise;
		}
		public function getExpertise(){
			return $this->expertise;
		}

		public abstract function initSinglePersonel();
		
		public abstract function updateName();//更新数据表中的人员的名字。
		public abstract function updateEmail();
		//更新数据表中的人员的电话号码。
		public abstract function updatePhoneNumber();
		//更新数据表中的人员的专长。
		public abstract function updateExpertise();
		//更新数据表中的人员的密码。
		public abstract function updatePassword();
		
	}
	