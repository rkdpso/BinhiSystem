<?php
	include 'includes/session.php';
	
	/*$date = date('M d, Y', strtotime($row['date']));*/
	

	require_once('../tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Irregular Employees Payslip');  
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

	$sql = "SELECT * FROM contracts WHERE  DATE(date) = CURDATE()";
	$query = $conn->query($sql) or die($conn->error);
	while($row = $query->fetch_assoc()){
		$contents .= '
			<h2 align="center">Tric\'s Rice Mill</h2>
			<table cellspacing="0" cellpadding="3">  
    	       	<tr>  
            		<td width="25%" align="right">Contract Number: </td>
                 	<td width="25%"><b>'.$row['contract_no'].'</b></td>
				 	<td width="25%" align="right">Rate: </td>
                 	<td width="25%" align="right">'.number_format($row['rate'], 2).'</td>
    	    	</tr>
    	    	<tr>
    	    		<td width="25%" align="right">Contract Job: </td>
				 	<td width="25%">'.$row['contract_job'].'</td>   
				 	<td width="25%" align="right">Workers: </td>
				 	<td width="25%" align="right">'.number_format($row['workers'], 2).'</td> 
    	    	</tr>
    	    	<tr> 
    	    		<td width="25%" align="right">Date: </td>
				 	<td width="25%">'.date('M d, Y', strtotime($row['date'])).'</td>
				 	<td width="25%" align="right">Output: </td>
				 	<td width="25%" align="right">'.number_format($row['output'], 2).'</td> 
    	    	</tr>
                <tr> 
    	    		<td></td> 
    	    		<td></td>
				 	<td width="25%" align="right"><b>Total Amount: </b></td>
				 	<td width="25%" align="right"><b>'.number_format(($row['rate']*$row['output']), 2).'</b></td> 
    	    	</tr>
                
                <tr> 
    	    		<td></td> 
    	    		<td></td>
				 	<td width="25%" align="right"><b>Salary each Worker: </b></td>
				 	<td width="25%" align="right"><b>'.number_format((($row['rate']*$row['output'])/$row['workers']), 2).'</b></td> 
    	    	</tr>
    	    </table>
    	    <br><hr>
		';
	}
    ob_end_clean();
    $pdf->writeHTML($contents);  
    $pdf->Output('payslip_irreg.pdf', 'I');

?>