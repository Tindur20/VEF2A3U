<?php 
   //veit ekki hvort þetta virkar.
  
     class Book
  {
      // Properties
       private $title;
       private $price;

       //smiður 
       public function __construct($t, $p){
          $this->title = $t;
          $this->price = $p;
       }

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
}

   class Novel extends Book
   {
      private  $publisher;

       //smiður 
       public function __construct($ti, $pr,$pu){
          parent::__construct($ti,$pr);
          $this->publisher = $pu;
       }


      public function setPublisher($publisher)
      {
          $this->publisher = $publisher;
      }
      public function getPublisher()
      {
          return $this->publisher;
      }
  }

  class SmallNovel{
    //Properties
    public $length;

    //Smiður
    public function __construct($le){
      $this->length = $le;
    }

    //Method
    public function setlength($length){
      $this->length = $length;
    }

    public function getLength(){
      return $this->length;
    }

  }

  class NovelLength extends SmallNovel{
    public $width;

    public function __construct($le,$wi){
      parent::__construct($le);
      $this->width = $wi;
    }

    public function setWidth($width){
      $this->width = $width;
    }

    public function getWidth(){
      return $this->width;
    }
  }
?>