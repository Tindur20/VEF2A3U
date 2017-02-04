<?php 

	class user{

		// Properties
		private $email;
		private $password;

		//smiður 
       public function __construct($em, $pa){
          $this->email = $em;
          $this->password = $pa;
       }

       //method
       public function setEmail(){
       	$this->email = $email;
       }
       public function getEmail(){
       	return $this->email;
       }
        public function setPassword(){
       	$this->password = $password;
       }
       public function getPassword(){
       	return $this->password;
       }
	}

	

 ?>