<?php 

  require "Vehiculo.php";
  include("comm.php");

  $matricula          = $_POST['matricula'];
  $serie_motor        = $_POST['serieMotor'];
  $serie_carroceria   = $_POST['serieCarroceria'];
  $marca              = $_POST['marca'];
  $modelo             = $_POST['modelo'];
  $anio               = $_POST['anio'];
  $color              = $_POST['color'];
  $precio             = $_POST['precio'];
  $tipo               = $_POST['tipo'];
  $id                 = $_POST['id'];

  
  $objetoVehiculo = new Vehiculo();

  $objetoVehiculo->setMatricula($matricula);
  $objetoVehiculo->setSerieCarroceria($serie_carroceria);
  $objetoVehiculo->setSerieMotor($serie_motor);
  $objetoVehiculo->setPrecio($precio);
  $objetoVehiculo->setColor($color);
  $objetoVehiculo->setAnio($anio);
  $objetoVehiculo->setModelo($modelo);
  $objetoVehiculo->setMarca($marca);

  $query  = "";
  
  # CREAR
  if ($tipo == 1) {
    $query .= "INSERT INTO autos(matricula,serial_motor,serial_carroceria,marca,modelo,anio,color,precio,activo) VALUES('";
    $query .= $objetoVehiculo->getMatricula() ."','";
    $query .= $objetoVehiculo->getSerieMotor() ."','";
    $query .= $objetoVehiculo->getSerieCarroceria() ."','";   
    $query .= $objetoVehiculo->getMarca() ."','";
    $query .= $objetoVehiculo->getModelo() ."',";
    $query .= $objetoVehiculo->getAnio() .",'";
    $query .= $objetoVehiculo->getColor() ."','";
    $query .= str_replace('.','',$objetoVehiculo->getPrecio());
    $query .= "',1);";    
  }

  # MODIFICAR
  if ($tipo == 2) {
    $query .= "UPDATE autos SET matricula ='" . $objetoVehiculo->getMatricula() . "', "; //serial_carroceria,marca,modelo,anio,color,precio,activo) VALUES('";    
    $query .= "serial_motor ='"               . $objetoVehiculo->getSerieMotor() ."', ";
    $query .= "serial_carroceria ='"          . $objetoVehiculo->getSerieCarroceria() ."', ";   
    $query .= "marca ='"                      . $objetoVehiculo->getMarca() ."', ";
    $query .= "modelo ='"                     . $objetoVehiculo->getModelo() ."', ";
    $query .= "anio ="                        . $objetoVehiculo->getAnio() .", ";
    $query .= "color ='"                      . $objetoVehiculo->getColor() ."', ";
    $query .= "precio ='"                     . str_replace('.','',$objetoVehiculo->getPrecio());
    $query .= "' WHERE id = "                 . $id . ";";    
  }

  //print_r($query);
  
  $result = $mysqli->query($query);
  
  header("Refresh:0;url=inicio.php");