<?php
    include("../classes/DatabaseQuery.php");

    $datepicked = $_GET['datePicked'];
   
    $query = "select * from visitation where scheduled_date = '$datepicked'";
    $dbQ = new DatabaseQuery(new DatabaseInfo);

    $res = $dbQ->query($query);
    $list = array();
    if (mysqli_num_rows($res) > 0)
    {
        
        while ($row = mysqli_fetch_array($res))
        {
            $arr = explode(":", $row['from_time']);
            
            array_push($list, $arr[0]);
        }   
        //echo implode(",", $list);
    }
?>
