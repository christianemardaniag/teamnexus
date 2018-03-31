<?php
 include("DatabaseQuery.php");
   
  class BlindCategory
  {
    
    private $DBQuery;
    public function __construct(DatabaseQuery $dbq)
    {
      $this->DBQuery = $dbq;
    }
    
    public function getAllTypes()
    {
      $arrType = new array();
      $query = "select blinds_type_name from blinds_category";
      $res = $this->DBQuery->query($query);
      while($row = mysqli_fetch_array($res))
      {
        array_push($arrType, $row["blinds_type_name"]);
      }
      return "hi";
    }
  
  }
?>