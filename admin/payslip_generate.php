<?php
	include 'includes/session.php';
	
	$range = $_POST['date_range'];
	$ex = explode(' - ', $range);
	$from = date('Y-m-d', strtotime($ex[0]));
	$to = date('Y-m-d', strtotime($ex[1]));

	$sql = "SELECT *, SUM(amount) as total_amount FROM deductions";
    $query = $conn->query($sql);
   	$drow = $query->fetch_assoc();
    $deduction = $drow['total_amount'];

	$from_title = date('M d, Y', strtotime($ex[0]));
	$to_title = date('M d, Y', strtotime($ex[1]));

	require_once('../tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Payslip: '.$from_title.' - '.$to_title);  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('courier', '', 10);  
    $pdf->AddPage(); 
    $contents = '';

	$sql = "SELECT *, SUM(num_hr) AS total_hr, attendance.employee_id AS empid, employees.employee_id AS employee FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id LEFT JOIN position ON position.id=employees.position_id WHERE date BETWEEN '$from' AND '$to' GROUP BY attendance.employee_id ORDER BY employees.lastname ASC, employees.firstname ASC";

	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
		$empid = $row['empid'];
                      
      	$casql = "SELECT *, SUM(amount) AS cashamount FROM cashadvance WHERE employee_id='$empid' AND date_advance BETWEEN '$from' AND '$to'";
      
      	$caquery = $conn->query($casql);
      	$carow = $caquery->fetch_assoc();
      	$cashadvance = $carow['cashamount'];

		$gross = $row['rate'] * $row['total_hr'];
        $sss = $gross *0.045;
                        $pagibig = $gross * 0.02;
                        $philhealth = $gross * 0.04;
                        
                        if($gross <= 10416.5){
                            $tax = "0.00";
                        }  
                        else if($gross > 10416.5 && $gross < 16666.5){
                            $tax = $gross * .20;
                        }
                        else if($gross > 16666.5 && $gross < 33333.5){
                            $tax = ($gross * .25) + 2500;
                        }
                        else if($gross > 33333.5 && $gross < 83333.5){
                            $tax = ($gross * .30) + 10833;
                        }
		$total_deduction = (($deduction/100)*$gross) + $cashadvance;
  		$net = $gross - $total_deduction;

		$contents .= '
			<h2 align="center">Tric\'s Rice Mill</h2>
			<h4 align="center">'.$from_title." - ".$to_title.'</h4>
			<table cellspacing="0" cellpadding="3">  
    	       	<tr>  
            		<td width="25%" align="right">Employee Name: </td>
                 	<td width="25%"><b>'.$row['firstname']." ".$row['lastname'].'</b></td>
				 	<td width="25%" align="right">Rate per Hour: </td>
                 	<td width="25%" align="right">'.number_format($row['rate'], 2).'</td>
    	    	</tr>
    	    	<tr>
    	    		<td width="25%" align="right">Employee ID: </td>
				 	<td width="25%">'.$row['employee'].'</td>   
				 	<td width="25%" align="right">Total Hours: </td>
				 	<td width="25%" align="right">'.number_format($row['total_hr'], 2).'</td> 
    	    	</tr>
    	    	<tr> 
    	    		<td width="25%" align="right">Employee Status: </td>
				 	<td width="25%">Regular</td>
				 	<td width="25%" align="right"><b>Gross Pay: </b></td>
				 	<td width="25%" align="right"><b>'.number_format(($row['rate']*$row['total_hr']), 2).'</b></td> 
    	    	</tr>
                <tr> 
    	    		<td></td> 
    	    		<td></td>
				 	<td width="25%" align="right">SSS: </td>
				 	<td width="25%" align="right">'.number_format($sss, 2).'</td> 
    	    	</tr>
                <tr> 
    	    		<td></td> 
    	    		<td></td>
				 	<td width="25%" align="right">Philhealth: </td>
				 	<td width="25%" align="right">'.number_format($philhealth, 2).'</td> 
    	    	</tr>
                <tr> 
    	    		<td></td> 
    	    		<td></td>
				 	<td width="25%" align="right">Pag-ibig: </td>
				 	<td width="25%" align="right">'.number_format($pagibig, 2).'</td> 
    	    	</tr>
                <tr> 
    	    		<td></td> 
    	    		<td></td>
				 	<td width="25%" align="right">Tax: </td>
				 	<td width="25%" align="right">'.number_format($tax, 2).'</td> 
    	    	</tr>
    	    	<tr> 
    	    		<td></td> 
    	    		<td></td>
				 	<td width="25%" align="right">Cash Advance: </td>
				 	<td width="25%" align="right">'.number_format($cashadvance, 2).'</td> 
    	    	</tr>
    	    	<tr> 
    	    		<td></td> 
    	    		<td></td>
				 	<td width="25%" align="right"><b>Total Deduction:</b></td>
				 	<td width="25%" align="right"><b>'.number_format($total_deduction, 2).'</b></td> 
    	    	</tr>
    	    	<tr> 
    	    		<td></td> 
    	    		<td></td>
				 	<td width="25%" align="right"><b>Net Pay:</b></td>
				 	<td width="25%" align="right"><b>'.number_format($net, 2).'</b></td> 
    	    	</tr>
    	    </table>
    	    <br><hr>
		';
	}
    ob_end_clean();
    $pdf->writeHTML($contents);  
    $pdf->Output('payslip.pdf', 'I');

?>