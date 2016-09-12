<?php
/**
* TProducto
* Productos definidos en base a sus categorias
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TProducto{
	private $idProducto;
	private $idPadre;
	private $nombre;
		
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TProducto($id = ''){
		$this->setId($id);		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from producto where idProducto = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idProducto;
	}
	
	/**
	* Establece el identificador del padre
	*
	* @autor Hugo
	* @access public
	* @param int $id Padre
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPadre($val = 0){
		$this->idPadre = $val;
		return true;
	}
	
	/**
	* Retorna el identificador del padre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPadre(){
		return $this->idPadre;
	}
	
	/**
	* Establece la clave
	*
	* @autor Hugo
	* @access public
	* @param string $val Clave
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setClave($val = ""){
		$this->clave = $val;
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getClave(){
		return $this->clave;
	}
	
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Nombre
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNombre($val = ""){
		$this->nombre = $val;
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Establece el precio
	*
	* @autor Hugo
	* @access public
	* @param float $val precio
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPrecio($val = 0){
		$this->precio = $val;
		return true;
	}
	
	/**
	* Retorna el precio
	*
	* @autor Hugo
	* @access public
	* @return float Texto
	*/
	
	public function getPrecio(){
		return $this->precio;
	}
		
	/**
	* Guarda los datos en la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->getPadre() == '') return false;
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO producto(idPadre) VALUES('".$this->getPadre()."');");
			if (!$rs) return false;
				
			$this->idProducto = $db->Insert_ID();
		}		
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE producto
			SET
				nombre = '".$this->getNombre()."',
				clave = '".$this->getClave()."',
				precio = ".$this->getPrecio()."
			WHERE idProducto = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from producto where idProducto = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>