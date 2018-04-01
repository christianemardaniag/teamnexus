<?php
    
    require_once("DatabaseInfo.php");
    class DatabaseQuery
    {
        public $selectedRows;
        public $dbInfo;
        function __construct(DatabaseInfo $di)
        {
            $this->dbInfo = $di;
        }
        public function query($sql)
        {
            $this->selectedRows = mysqli_query($this->dbInfo->con,$sql);
            return $this->selectedRows;
                
        }
        public function setBlob($blobImg)
		{
			$newimg = mysqli_escape_string($this->dbInfo->con, file_get_contents($blobImg));
			return $newimg;
		}
      public function setBlob2($blobImg)
		{
			$newimg = mysqli_escape_string($this->dbInfo->con, $blobImg);
			return $newimg;
		}
		
		public function getBlob($img)
		{
			$parseImg = "data:image/jpeg;base64,".base64_encode($img);
			
			return $parseImg; 
		}
      
        public function sendEmail($email, $subject, $message)
        {
					
					include("../admin/PHPMailer/class.phpmailer.php");
					$mailer = new PHPMailer();
					$mailer->isSMTP();
                    $mailer->SMTPDebug = 2;
                    $mailer->SMTPSecure = 'ssl';
					$mailer->Host = 'smtp.gmail.com';
                    $mailer->Port = 465; 
					$mailer->SMTPAuth = true;
					$mailer->Username = 'subaraymond17@gmail.com';  
					$mailer->Password = 'may_2123';
					$mailer->From = 'Adam Arc';  
					$mailer->FromName = 'AdamArc'; 
//					//edit message	
					$mailer->Body = $message;
					$mailer->Subject = $subject;
					$mailer->addAddress($email);
					if(!$mailer->Send())
					{
					   echo "Message not sent<br/ >";
					   echo "Mailer Error: " . $mailer->ErrorInfo;
					}
					else                                                                                      
					{
					   echo "Message Successfully sent!";
					
					}
	

      }
    }
?>