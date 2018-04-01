<?php
    
    require_once("DatabaseInfo.php");
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
        public function setBlob($blobImg)
		{
			$newimg = mysqli_escape_string($this->dbInfo->con, file_get_contents($blobImg));
			return $newimg;
		}
<<<<<<< HEAD
      
      
=======
>>>>>>> 544b1522ec6a545ee52d7b4d45dbd39494060a3d
		
		public function getBlob($img)
		{
			$parseImg = "data:image/jpeg;base64,".base64_encode($img);
			
			return $parseImg; 
		}
       
    }

?>