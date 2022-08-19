<?php
	include 'includes/session.php';

	function generateRow($conn){
		$contents = '';
		
		$sql = "SELECT * FROM contracts";

		$query = $conn->query($sql);
		$total = 0;
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
                          <td align=center>".date('M d, Y', strtotime($row['date']))."</td>
                          <td align=center>".$row['contract_no']."</td>
                          <td align=center>".$row['contract_job']."</td>
                          <td align=center>".$row['output']."</td>
                          <td align=center>".$row['workers']."</td>
                          <td align=center>".number_format($row['rate'],2)."</td>
                          <td align=center>".number_format($row['rate']*$row['output'],2)."</td>
			</tr>
			";
		}

		return $contents;
	}

	require_once('../tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle('Tric\'s Rice Mill - Employee Payroll Irregular');  
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
    $content = '';  
    $content .= '
      	<h2 align="center">Tric\'s Rice Mill</h2>
      	<h4 align="center">Irregular Payroll</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                 <th width="20%" align="center"><b>Date</b></th>
                 <th width="15%" align="center"><b>Contract No.</b></th>
                 <th width="15%" align="center"><b>Contract Job</b></th>
                 <th width="10%" align="center"><b>Output</b></th>
                 <th width="10%" align="center"><b>Workers</b></th>
                 <th width="10%" align="center"><b>Rate</b></th>
                 <th width="15%" align="center"><b>Amount</b></th>
           </tr>  
      ';  
    ob_end_clean();
    $content .= generateRow($conn); 
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('contract.pdf', 'I');

?>