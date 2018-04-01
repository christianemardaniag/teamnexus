<?php
    
    $datepicked = $_GET['datePicked'];
    $con = mysqli_connect("localhost", "root", "", "adamarc") or die("cannot connect to db!");
    
    $query = "select * from visitation where scheduled_date = '$datepicked'";
    
    $res = mysqli_query($con, $query);
    $list = array();
    if (mysqli_num_rows($res) > 0)
    {
        
        while ($row = mysqli_fetch_array($res))
        {
            $arr = explode(":", $row['from_time']);
            
            array_push($list, $arr[0]);
        }   
        echo implode(",", $list);
    }
?>
