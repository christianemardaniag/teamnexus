<?php

  include("BlindsCategory.php");
  
  class Blinds
  {
    
    private $blindsCat;
    
    public function __construct(BlindCategory $bc)
    {
      $this->blindsCat;
      
    }
    
    public function getAllBlindsCategory()
    {
      return $this->blindsCat->getAllTypes();
    }
  
    
    
    
  }

?>