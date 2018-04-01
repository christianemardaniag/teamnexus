<?php
  
  include("DatabaseQuery.php");

  class Customer 
  {
    private $dbQ;
    
    public function __construct(DatabaseQuery $dbQ)
    {
      $this->dbQ = $dbQ;  
    }
    public function getColVal($colname)
    {
      $getRow = $this->dbQ->selectedRows;
      $row = mysqli_fetch_array($getRow);
      return $row[$colname];
    }
    
    
  }

?>