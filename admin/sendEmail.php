<?php
	require_once("PHPMailer\class.phpmailer.php");
					$mailer = new PHPMailer();
					$mailer->IsSMTP();
					$mailer->Host = 'ssl://smtp.gmail.com:465';
					$mailer->SMTPAuth = TRUE;
					$mailer->Username = 'subaraymond17@gmail.com';  
					$mailer->Password = 'may_2123';
					$mailer->From = 'subaraymond17@gmail.com';  
					$mailer->FromName = 'Deliveroo'; 
					//edit message	
					$mailer->Body = "pagaling ka.";
					$mailer->Subject = 'health';
					$mailer->AddAddress("chixx.reign2123@gmail.com");
					if(!$mailer->Send())
					{
					   echo "Message not sent<br/ >";
					   echo "Mailer Error: " . $mailer->ErrorInfo;
					}
					else                                                                                      
					{
					//fix
					
					}

//question no. 1 
//$strWord = "S";
//$recurringLetter = "";
//
//for ($i = 0; $i< strlen($strWord); $i++)
//{
//  $tempChar = $strWord[$i];
//  $ctr = 0;
//  for ($j = 0; $j< strlen($strWord); $j++)
//  {
//    if ($i == $j)
//    {
//      continue;
//    }
//    if ($tempChar == $strWord[$j])
//    {
//      
//      $ctr++;
//    }
//  }
//  if ($ctr > 0 && strpos($recurringLetter, $tempChar) === false)
//  {
//    
//    $recurringLetter .= $tempChar;
//  }
//}
//if 
//echo $strWord ."=". $recurringLetter;


?>