<?php
    
    include("DatabaseInfo.php");
    class DatabaseQuery
    {
        private $dbInfo;
       
        
        function __construct(DatabaseInfo $di)
        {
            $this->dbInfo = $di;
            
        }
        public function query($sql)
        { 
            return mysqli_query($this->dbInfo->con,$sql);
            
                
        }
        
        public function getBlob($img)
		{
			$parseImg = "data:image/jpeg;base64,".base64_encode($img);
			
			return $parseImg; 
		}
      
      
      
        
      
      
        
    }

?>