<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'third_party/fpdf/fpdf.php');
class Pdf extends FPDF{
	/*public function __construct() {
		//$pdf = new FPDF('P', 'mm', 'legal');
		//$pdf->AddPage();		
	}*/
	function Header()
	{
	    // Logo
	    $this->Image('assets/images/logoDCJN.png', 10,20,50,25,'PNG');
	    // Line break
	    $this->Ln(45);
	}

	// Page footer
	function Footer()
	{
	    
	}
}

$pdf = new Pdf('P', 'mm', 'legal');
//$pdf->SetMargins(30, 20 , 30); 
$pdf->AliasNbPages();
//$pdf->AddPage();
$pdf->SetAutoPageBreak(true,30);  
$pdf->SetFont('Times','',12);
$CI =& get_instance();
$CI->fpdf = $pdf;
