<?php

  include("comm.php");
  $id = $_GET['id'];

  $query  = "DELETE FROM autos WHERE id = " . $id; 

  $result = $mysqli->query($query);
  
  header("Refresh:0;url=inicio.php");