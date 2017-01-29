<?php 
   //veit ekki hvort þetta virkar.
  
     class Book
  {
      // Properties
       public $title;
       public $price;


      // Method

     public function setPrice($price)
     {
     	$this->price = $price;
     }

     public function getPrice(){
      return $this->price;
     }

    public function setTitle($title) 
     {
      $this->title = $title;    
     }
     public function getTitle(){
      return $this->title;
     }


     class Novel extends Book
     {
      public  $publisher;
      public function setPublisher($publisher)
      {
          $this->publisher = $publisher;
      }
      public function getPublisher()
      {
          return $this->publisher;
      }
     }
  }

    public $efnafraedi;
    public $staerdfraedi;
    public $islenska;

?>