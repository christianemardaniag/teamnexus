<?php
    session_start();
    include("../classes/DatabaseQuery.php");
    
    $year = $_GET["year"];
    $month = $_GET["month"];
    $custid = $_SESSION["cust_id"]; //block or none
    $userCanView = "";
    
    if ($custid != "")
    {
      $userCanView = " and customer_id = $custid";
    }
  
  
    
    
    makeCalendar($year, $month);
    
    function makeCalendar($year, $month)
    {
        $ctr = 1;
        
        $dbQ = new DatabaseQuery(new DatabaseInfo);
        global $userCanView;
        date_default_timezone_set('Asia/Manila');
          
        //always 1
        $timestamp = strtotime($year."-".$month."-"."1");
        
        $daysInThisMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        
      $startDay = date('N', $timestamp);
      
        
        //echo $day . "<br />";
        
        echo "<h2 class='text-center'><span onclick='nextMonth(-1)'><i class='fas fa-chevron-left mr-5 text-info' data-toggle='tooltip' title='Previous'></i></span>".date('F', mktime(0, 0, 0, $month, 10)) ." ".$year."<span onclick='nextMonth(1)'><i class='fas fa-chevron-right ml-5 text-info' data-toggle='tooltip' title='Next'></i></span></h2>";
        echo "<table class='table table-bordered'>";
        echo "<thead class='bg-info text-light'><tr><th class='text-center' scope='col'>Monday</th><th class='text-center' scope='col'>Tuesday</th><th class='text-center' scope='col'>Wednesday</th><th class='text-center' scope='col'>Thursday</th><th class='text-center' scope='col'>Friday</th><th class='text-center' scope='col'>Saturday</th><th class='text-center' scope='col'>Sunday</th></tr></thead>";
        
        echo "<tr>";
        
        for ($i = 1; $i < $startDay; $i++)
        {
            echo "<td></td>"; 
        }
        for ($i = $startDay; $i <= 7; $i++)
        {
          //classes
           $dt = $year."-".$month."-".$ctr;
            $q = "select * from visitation where scheduled_date = '$dt' and status = 'unavailable' " .$userCanView;
            $tbl = $dbQ->query($q);
              
          
                echo "<td class ='tdDay text-right' style='height:100px; vertical-align: top; cursor:pointer; padding:10px' data-tday = '$dt' onclick='alertMe(this)'> ".$ctr;
                if (mysqli_num_rows($tbl) > 0)
                {
                  
                  while ($sched = mysqli_fetch_array($tbl))
                  {
                    
                    echo "<div class='w-100 bg-dark text-light small mb-1 rounded p-1' onclick = 'schedClick(this)' data-sched='".$sched['visitation_id']."'>".substr($sched['from_time'], 0,-3)." ".$sched['address']."</div>";  
                  } 
                }
                
                echo "</td>";
                $ctr++;
        }
        echo "</tr>";
        while ($ctr <= $daysInThisMonth)
        {
            echo "<tr>";
            for ($i = 1; $i <= 7 && $ctr <= $daysInThisMonth; $i++)
            {
              $dt = $year."-".$month."-".$ctr;
            $q = "select * from visitation where scheduled_date = '$dt' and status = 'unavailable' " .$userCanView;
            $tbl = $dbQ->query($q);
            
                $setColorToday = "";
                if (strtotime($dt) == strtotime(date("Y-m-d"))) 
                {
                  $setColorToday = "bg-primary";
                  
                }
                echo "<td class ='tdDay text-right $setColorToday' style='height:100px; vertical-align: top; cursor:pointer; padding:10px' data-tday = '$dt' onclick='alertMe(this)'> ".$ctr;
                if (mysqli_num_rows($tbl) > 0)
                {
                  
                  while ($sched = mysqli_fetch_array($tbl))
                  {
                    
                   echo "<div class='w-100 bg-dark text-light small mb-1 rounded p-1' onclick = 'schedClick(this)' data-sched='".$sched['visitation_id']."'>".substr($sched['from_time'], 0,-3)." ".$sched['address']."</div>";  
                  } 
                }
                
                echo "</td>";
                $ctr++;
                
              $j = $i;
                  
            }
          if ($ctr == $daysInThisMonth)
                {
                  
                  for ($j = $j; $j <= 7; $j++)
                  {
                    echo "<td></td>";
                  }
                  break;
                }
            echo "</tr>";
        }
      
      
        echo "</table>";
        
        
    }


?>