<?php

 class Vehiculo
 {
 	private $matricula;
 	private $serie_motor;
 	private $serie_carroceria;
 	private $marca;
 	private $modelo;
 	private $anio;
 	private $color; 
 	private $precio;

 	
 	//============================================
 	// Accesador y Commutador Matricula
 	//============================================
 	public function setMatricula($matricula_nueva){
 		$this->matricula = $matricula_nueva;
 	}

 	public function getMatricula(){
 		return $this->matricula;
 	}

 	//============================================
 	// Accesador y Commutador Serie Motor
 	//============================================
 	public function setSerieMotor($serie_motor_nuevo){
 		$this->serie_motor = $serie_motor_nuevo;
 	}

 	public function getSerieMotor(){
 		return $this->serie_motor;
 	}

	//============================================
 	// Accesador y Commutador Serie Carroceria
 	//============================================
 	public function setSerieCarroceria($serie_carroceria_nueva){
 		$this->serie_carroceria = $serie_carroceria_nueva;
 	}

 	public function getSerieCarroceria(){
 		return $this->serie_carroceria;
 	}

 	//============================================
 	// Accesador y Commutador Marca
 	//============================================
 	public function setMarca($marca_nueva){
 		$this->marca = $marca_nueva;
 	}

 	public function getMarca(){
 		return $this->marca;
 	}

 	//============================================
 	// Accesador y Commutador Modelo  
 	//============================================
 	public function setModelo($modelo_nuevo){
 		$this->modelo = $modelo_nuevo;
 	}

 	public function getModelo(){
 		return $this->modelo;
 	}

	//============================================
 	// Accesador y Commutador Año  
 	//============================================
 	public function setAnio($anio_nuevo){
 		$this->anio = $anio_nuevo;
 	}

 	public function getAnio(){
 		return $this->anio;
 	}

 	//============================================
 	// Accesador y Commutador Color  
 	//============================================
 	public function setColor($color_nuevo){
 		$this->color = $color_nuevo;
 	}

 	public function getColor(){
 		return $this->color;
 	}

 	//============================================
 	// Accesador y Commutador Precio  
 	//============================================
 	public function setPrecio($precio_nuevo){
 		$this->precio = $precio_nuevo;
 	}

 	public function getPrecio(){
 		return $this->precio;
 	} 	
 }