<?php
//require_once('Image_Barcode-1.1.0/Barcode.php');
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class RProductos extends tFPDF{
	private $cotizacion;
	private $formatoFondo;
	
	public function RProductos($id){
		parent::tFPDF('P', 'mm', array(187, 239));
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		$this->cleanFiles();
		$this->SetAutoPageBreak(false, 0);
		$this->formatoFondo = $formatoFondo;
		$this->AliasNbPages();
	}	
	
	public function AddPage(){
		parent::AddPage();
		
		$this->SetFont('Arial', 'B', 11);
		$this->Image('repositorio/img/logo.jpg', 86, 5, 15, 15);
		$this->SetXY(95, 20);
		$this->Ln(1);
		$this->Cell(0, 5, "GorillaGlass", 0, 0, 'C');
		$this->SetFont('Arial', 'B', 6);
		$this->Ln(5);
		$this->Cell(50, 5, "DATE: ".date("Y-m-d"), 0, 0, 'L');
		
		$this->Cell(0, 5, utf8_decode(strtoupper("product catalog")), 0, 0, 'R');
		
		$this->SetXY(10, 40);
		$ancho = 4;
		$this->SetTextColor(255, 255, 255);
		$this->Cell(27, $ancho, "CODE", 1, 0, 'C', true);
		$this->Cell(100, $ancho, "DESCRIPTION", 1, 0, 'C', true);
		$this->SetFont('Arial', 'B', 4);
		$this->Cell(19.5, $ancho, "PRICE PER PIECE (USD)", 1, 0, 'C', true);
		$this->Cell(19.5, $ancho, "PRICE PER PAIR (USD)", 1, 1, 'C', true);
		$this->SetTextColor(0, 0, 0);
		$this->SetFont('Arial', '', 7);
	}
	
	public function generar($productos = ''){
		$this->AddPage();
		$this->SetFont('Arial', '', 7);
		$ancho = 3.4;
		$total = 0;
		$cont = 0;
		
		foreach($productos as $producto){
			$this->Cell(27, $ancho, $producto["clave"], "LR");
			$this->Cell(100, $ancho, $producto["descripcion2"], 'R');
			$this->Cell(19.5, $ancho, sprintf("%.2f", $producto["precio"]), 'R', 0, 'R');
			
			$clave = explode("-", $producto["clave"]);
			if(in_array($clave[0], array("P", "W", "E", "F")))
				$this->Cell(19.5, $ancho, sprintf("%.2f", $producto["precio"] * 2), 'R', 0, 'R');
			else
				$this->Cell(19.5, $ancho, "", 'R', 0, 'R');
				
			$this->Ln($ancho);
			$cont++;
			if ($cont % 53 == 0){
				$this->Cell(37, $ancho, "", "T");
				$this->Cell(117, $ancho, "", 'T');
				$this->Cell(12, $ancho, "", 'T');
				$this->Ln($ancho/2);
				$this->AddPage();
			}
		}
	}
		
	private function cleanFiles(){
    	$t = time();
    	$dir = "temporal";
    	$h = opendir($dir);
    	while($file=readdir($h)){
        	if(substr($file,0,3)=='tmp' && substr($file,-4)=='.pdf'){
            	$path = $dir.'/'.$file;
            	if($t-filemtime($path)>3600)
                	@unlink($path);
        	}
    	}
    	closedir($h);
	}
	
	public function Output(){
		$file = "temporal/".basename(tempnam("temporal/", 'tmp'));
		rename($file, $file.'.pdf');
		$file .= '.pdf';
		parent::Output($file, 'F');
		chmod($file, 0555);
		//header('Location: temporal/'.$file);
		
		return $file;
	}
	
	public function Output2(){
		parent::Output("PriceList.pdf", 'I');
	}
	
	function Footer(){
		// Go to 1.5 cm from bottom
		$this->SetY(-15);
		// Select Arial italic 8
		$this->SetFont('Arial','I',8);
		// Print centered page number
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');
	}
}
?>