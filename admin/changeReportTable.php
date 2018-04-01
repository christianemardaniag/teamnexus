<?php 
  
  $tblName = $_GET["tblName"];
  $query = $_GET["query"];

  include("classes/DatabaseQuery.php");
  $dbQ = new DatabaseQuery(new DatabaseInfo);
                              

  if ($tblName == "Transaction")
  {
    echo "<thead>
      <tr>
        <th><input type='checkbox' class='form-control' name='checkAll' id='checkAll' /></th>
        <th>Order ID</th>
        <th>Blinds Name</th>
        <th>Quantity</th>
        <th>Fabric Code</th>
        <th>Customer Name</th>
        <th>Address</th>
        <th>Order Date</th>
        <th>Status</th>
      </tr>
    </thead><tbody>";
                
                                
                                
                                $res = $dbQ->query($query);
                                while($row = mysqli_fetch_array($res))
                                {
                                  
                                  echo "<tr>
                                    <td><input type='checkbox' name='check1' id='check1'></td>

                                    <td>".$row['order_id']."</td>
                                    <td>".$row['blName']."</td>
                                    <td>".$row['quantity']."</td>
                                    <td>".$row['fabric_id']."</td>
                                    <td>".$row['firstname']." ".$row['lastname']."</td>
                                    <td>".$row['address']."</td>
                                    <td>".$row['order_date']."</td>
                                    <td>".$row['status']."</td>
                                
                                </tr>";
                                }
                              



    echo "</tbody>
            <tfoot>
              <tr>
                <th><input type='checkbox' class='form-control' name='checkAll' id='checkAll' /></th>
                <th>Order ID</th>
                <th>Blinds Name</th>
                <th>Quantity</th>
                <th>Fabric Code</th>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Order Date</th>
                <th>Status</th>

                </tr>
            </tfoot>";
  }
  else if ($tblName == "Customer")
  {
    echo "<thead>
      <tr>
        <th><input type='checkbox' class='form-control' name='checkAll' id='checkAll' /></th>
        <th>Email</th>
        <th>Customer Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Transaction Count</th>
      
      </tr>
    </thead><tbody>";
                
                                
                                $res = $dbQ->query($query);
                                while($row = mysqli_fetch_array($res))
                                {
                                  
                                  echo "<tr>
                                    <td><input type='checkbox' name='check1' id='check1'></td>

                                    <td>".$row['email']."</td>
                                    <td>".$row['firstname']." ".$row['lastname']."</td>
                                    <td>".$row['address']."</td>
                                    <td>".$row['contact']."</td>
                                    <td>".$row['transactionCount']."</td>
                                   
                                </tr>";
                                }
                              



    echo "</tbody>
            <tfoot>
            <tr>
        <th><input type='checkbox' class='form-control' name='checkAll' id='checkAll' /></th>
        <th>Email</th>
        <th>Customer Name</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Transaction Count</th>
      
      </tr>
            </tfoot>";
    
  }
else if ($tblName == "Most Customed Blinds")
{
  echo "<thead>
      <tr>
        <th><input type='checkbox' class='form-control' name='checkAll' id='checkAll' /></th>
        <th>Blinds ID</th>
        <th>Blinds Name</th>
        <th>Category</th>
        <th>Custom Count</th>
       
      </tr>
    </thead><tbody>";
                
                                
                                $res = $dbQ->query($query);
                                while($row = mysqli_fetch_array($res))
                                {
                                  
                                  echo "<tr>
                                    <td><input type='checkbox' name='check1' id='check1'></td>

                                    <td>".$row['blinds_id']."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['type']."</td>
                                    <td>".$row['customCount']."</td>
                                   
                                </tr>";
                                }
                              



    echo "</tbody>
            <tfoot>
       <tr>
        <th><input type='checkbox' class='form-control' name='checkAll' id='checkAll' /></th>
        <th>Blinds ID</th>
        <th>Blinds Name</th>
        <th>Category</th>
        <th>Custom Count</th>
       
      </tr>
            </tfoot>";
}


?>
