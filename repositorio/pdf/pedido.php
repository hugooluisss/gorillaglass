<?php
//require_once('Image_Barcode-1.1.0/Barcode.php');
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class RPedido extends tFPDF{
	private $cotizacion;
	private $formatoFondo;
	
	public function RPedido($id, $formatoFondo = true){
		$this->pedido = new TPedido($id);
		
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
		$this->Image('repositorio/img/orden.jpg', 0, 0, 190, 240);
		$this->SetXY(140, 32);
		$this->Cell(0, 5, $this->pedido->getFecha(), 0, 0, 'C');
		
		$this->SetXY(35, 41);
		$this->Cell(0, 5, utf8_decode(strtoupper($this->pedido->cliente->getNombre())));
		
		$this->SetXY(10, 69);
	}
	
	public function generar($id = ''){
		if ($id <> '')
			$this->pedido = new TPedido($id);
			
		$this->AddPage();
		$this->SetFont('Arial', '', 5);
		$ancho = 3.4;
		$total = 0;
		$cont = 0;
		#for($x = 0 ; $x < 20; $x ++)
		foreach($this->pedido->movimientos as $mov){
			$this->Cell(1, $ancho, "");
			$this->Cell(27, $ancho, $mov->getClave());
			$this->Cell(97, $ancho, $mov->getDescripcion());
			$this->Cell(12, $ancho, $mov->getCantidad(), 0, 0, 'R');
			$this->Cell(12.5, $ancho, sprintf("%.2f", $mov->getPrecio() / $mov->getCantidad()), 0, 0, 'R');
			$this->Cell(19, $ancho, $mov->getPrecio(), 0, 0, 'R');
			$total += $mov->getPrecio();
			$this->Ln($ancho);
			$cont++;
			if ($cont % 38 == 0){
				$this->Ln($ancho/2);
				$this->SetFont('Arial', 'B', 11);
				$this->Cell(0, $ancho, "--------", 0, 0, 'R');
				$this->AddPage();
				$this->SetFont('Arial', '', 5);
			}
		}
		
		
		$this->SetFont('Arial', 'B', 11);
		$this->SetXY(140, 200);
		$this->Cell(0, $ancho, sprintf("%.2f", $total), 0, 0, 'R');
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