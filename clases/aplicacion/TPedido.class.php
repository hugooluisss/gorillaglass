<?php
/**
* TPedido
* Un pedido
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TPedido{
	private $idPedido;
	public $estado;
	public $cliente;
	public $usuario;
	private $fecha;
	public $movimientos;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TPedido($id = ''){
		$this->movimientos = array();
		$this->cliente = new TCliente;
		$this->estado = new TEstado;
		$this->usuario = new TUsuario;
		
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
		$rs = $db->Execute("select * from pedido where idPedido = ".$id);
		
		foreach($rs->fields as $field => $val){
			switch($field){
				case 'idCliente': $this->cliente = new TCliente($val); break;
				case 'idEstado': $this->estado = new TEstado($val); break;
				case 'idUsuario': $this->usuario = new TUsuario($val);
				default: $this->$field = $val;
			}
		}
		
		$this->getMovimientos();
		
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
	public function getMovimientos(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select idMovimiento from movpedido where idPedido = ".$this->getId());
		$this->movimientos = array();
		while(!$rs->EOF){
			array_push($this->movimientos, new TMovimiento($rs->fields['idMovimiento']));
			$rs->moveNext();
		}
		
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
		return $this->idPedido;
	}
	
	/**
	* Establece el cliente
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCliente($val = ''){
		$this->cliente = new TCliente($val);
		return true;
	}
	
	/**
	* Establece el estado
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEstado($val = ''){
		$this->estado = new TEstado($val);
		return true;
	}
	
	
	/**
	* Establece la fecha
	*
	* @autor Hugo
	* @access public
	* @param mix $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	public function setFecha($val = ''){
		$this->fecha = $val;
		
		return true;
	}
	
	/**
	* Retorna la fecha
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	public function getFecha(){
		return $this->fecha;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	public function guardar(){
		if ($this->cliente->getId() == '') return false;
		
		if ($this->usuario->getId() == ''){
			global $userSesion;
			$this->usuario->setId($userSesion->getId());
		}
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$this->estado->setId(1);
			$rs = $db->Execute("INSERT INTO pedido(idUsuario, idCliente, idEstado, fecha) VALUES (".$this->usuario->getId().", ".$this->cliente->getId().", ".$this->estado->getId().", now())");
			
			$this->idPedido = $db->Insert_ID();
		}
		
		if ($this->idPedido == '') return false;
		
		$rs = $db->Execute("UPDATE pedido
			SET
				idCliente = ".$this->cliente->getId().",
				fecha = '".$this->getFecha()."',
				idEstado = ".$this->estado->getId()."
			WHERE idPedido = ".$this->getId());
			
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
		return $db->Execute("delete from pedido where idPedido = ".$this->getId())?true:false;
	}
}
?>