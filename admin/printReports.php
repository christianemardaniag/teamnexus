<?php

require('tcpdf/tcpdf.php');
include("classes/DatabaseQuery.php");
// extend TCPF with custom functions
class MYPDF extends TCPDF {
  
   

	// Colored table
	public function ColoredTable($header,$data, $columnPerRow, $colNameWidth) {
		// Colors, line width and bold font
		$this->SetFillColor(0,128,128);
		$this->SetTextColor(255);
		$this->SetDrawColor(0,128,128);
		$this->SetLineWidth(0.3);
		$this->SetFont('', 'B');
		// Header
		
        $w = $colNameWidth;
		$num_headers = count($header);
		for($i = 0; $i < $num_headers; $i++) {
			$this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', 1);
		}
		$this->Ln();
		// Color and font restoration
		$this->SetFillColor(224, 235, 255);
		$this->SetTextColor(0);
		$this->SetFont('');
		// Data
		$fill = 0;
        $ctr = 0;
        while($ctr < count($data))
        {
          for ($i = 0; $i < $columnPerRow; $i++)
          {
            $this->Cell($w[$i], 6, $data[$ctr], 'LR', 0, 'L', $fill);
          
            $ctr++;
          }
          $this->Ln();
		  $fill=!$fill;
        }

        
          

		
		$this->Cell(array_sum($w), 0, '', 'T');
	}
}


function createPDF($pgLayout,$reportType, $header,$data, $columnPerRow, $colNameWidth)
{

// Include the main TCPDF library (search for installation path).

// create new PDF document
$pageLayout = $pgLayout;
//					
$pdf = new MYPDF("L", "mm", $pageLayout, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Noel Manio');
$pdf->SetTitle( $reportType.'Report');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
  date_default_timezone_set('Asia/Manila');
$pdf->SetHeaderData('thumnail-logo.png', 100, $reportType.' Report                      Date: '.date("m-d-Y H:i:sa"), "Admin: Noel Manio");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 12);

// add a page
$pdf->AddPage();

// print colored table
  
$pdf->ColoredTable($header,$data, $columnPerRow, $colNameWidth);

// ---------------------------------------------------------

// close and output PDF document
$pdf->Output($reportType."_".date("m-d-Y h:sa").".pdf", 'I');

//============================================================+
// END OF FILE
//============================================================+

}

$report_type = $_GET['reportType'];
$data = array();
$colNameWidth = array();
$perRowCol = 0;
$pgLayout = array();
$headers = array();
$dbQ = new DatabaseQuery(new DatabaseInfo);
  
if ($report_type == "Transaction")
{
   $sql = "select *, (select blinds.name from blinds where blinds.blinds_id = design.blinds_id) as 'blName' from tblorder, order_details, customer, design WHERE tblorder.order_id = order_details.order_id and tblorder.customer_id = customer.customer_id and tblorder.order_id = design.order_id";
    
//                              
    $res = $dbQ->query($sql);
          while ($row = mysqli_fetch_array($res))
          {
            array_push($data,$row['order_id']);
            array_push($data,$row['blName']);
            array_push($data,$row['quantity']);
            array_push($data,$row['fabric_id']);
            array_push($data,$row['firstname']." ".$row['lastname']);
            array_push($data,$row['address']);
            array_push($data,$row['order_date']);
            array_push($data,$row['status']);
            
          }
  $w = array(70,70, 40, 75, 70, 100, 50, 40);
  $colNameWidth = $w;
  $perRowCol = 8;
  $headers = array("Order ID", "Blinds Name", "Quantity", "Fabric Code", "Customer Name", "Address", "Order Date", "Status");
  $pgLayout = array(200,550);
  
    
}
else if ($report_type == "Customer")
{
     $sql = "select customer.*, (select count(customer_id) from tblorder where tblorder.customer_id = customer.customer_id) as 'transactionCount' from customer";
                          
    $res = $dbQ->query($sql);
          while ($row = mysqli_fetch_array($res))
          {
          
            array_push($data,$row['email']);
            array_push($data,$row['firstname']." ".$row['lastname']);
            array_push($data,$row['address']);
            array_push($data,$row['contact']);
            array_push($data,$row['transactionCount']);
         
            
          }
  $w = array(60,80, 100, 50, 60);
  $colNameWidth = $w;
  $perRowCol = 5;
  $headers = array("Email", "Customer Name", "Address", "Contact", "No. of Transactions");
  $pgLayout = array(200,400);
  
             
}
else if ($report_type == "Most Customed Blinds")
{
    $sql = "select  count(order_id) as 'customCount', blinds.*, (select blinds_category.blinds_type_name from blinds_category where blinds_category.blinds_category_id  = blinds.blinds_category_id) as type from design, blinds where design.blinds_id = blinds.blinds_id";
  
    $res = $dbQ->query($sql);
          while ($row = mysqli_fetch_array($res))
          {
            array_push($data,$row['blinds_id']);
            array_push($data,$row['name']);
            array_push($data,$row['type']);
            array_push($data,$row['customCount']);
            
            
          }
  $w = array(50,80, 50, 50);
  $colNameWidth = $w;
  $perRowCol = 4;
  $headers = array("Blinds ID", "Blinds Name", "Blinds Category", "Custom Count");
  $pgLayout = array(200,260);
  
              
}
createPDF($pgLayout, $report_type, $headers, $data, $perRowCol, $colNameWidth);


?>