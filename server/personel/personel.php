<?php
	class Personel{
		private $name='';
		private $password='';
		private $email='';
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
		public function setExpertise($expertise){
			$this->expertise=$expertise;
		}
		public function getExpertise(){
			return $this->expertise;
		}

		//TODO
		public function initSinglePersonel(){

		}
		public function updateSinglePersonel(){
			
		}

	}
	