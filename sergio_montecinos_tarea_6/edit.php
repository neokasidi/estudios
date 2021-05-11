<?php  
	include("header.php");
    include("comm.php");
    $id = $_GET["id"];
    $query  = "SELECT * FROM autos WHERE id = " . $id;
    $result = $mysqli->query($query);  
 ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left">
				<h3>Ingreso de Vehiculos</h3>
			</div>			
			<form action="ingresar_auto.php" method="post" accept-charset="utf-8">
				<?php while($row = $result->fetch_assoc()) { ?>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Matricula</label>
						<input type="text" name="matricula" minlength="6" value="<?=$row['matricula']?>">
					</div>
					<div class="form-group">
						<label for="">Serial Motor</label>
						<input type="text" name="serieMotor" value="<?=$row['serial_motor']?>">
					</div>
					<div class="form-group">
						<label for="">Serial Carroceria</label>
						<input type="text" name="serieCarroceria" value="<?=$row['serial_carroceria']?>">
					</div>
					<div class="form-group">
						<label for="">Marca</label>
						<input type="text" name="marca" value="<?=$row['marca']?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Modelo</label>
						<input type="text" name="modelo" value="<?=$row['modelo']?>">
					</div>
					<div class="form-group">
						<label for="">Año</label>
						<input type="text" onblur="validaLargo(this)" pattern="[0-9]{4}" maxlength="4" name="anio" value="<?=$row['anio']?>">
					</div>
					<div class="form-group">
						<label for="">Color</label>
						<select name="color" class="form-control" required>
							<option value="">Seleccion de Color</option>
							<option value="verde" <?=($row['color'] == "verde")?"selected":"";?>>Verde</option>
							<option value="rojo" <?=($row['color'] == "rojo")?"selected":"";?>>Rojo</option>
							<option value="azul" <?=($row['color'] == "azul")?"selected":"";?>>Azul</option>
							<option value="amarillo" <?=($row['color'] == "amarillo")?"selected":"";?>>Amarillo</option>
							<option value="blanco" <?=($row['color'] == "blanco")?"selected":"";?>>Blanco</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Precio</label>
						<input type="text" name="precio" onkeyup="format(this)" value="<?=number_format($row['precio'], 0, ',', '.')?>">
					</div>
				</div>
				<div class="col-md-12 text-right">				  
					<button id="submit" class="btn btn-danger">Modificar</button>
					<a href="inicio.php" class="btn btn-success">Cancelar</a>
				</div>
				<input type="hidden" name="tipo" value="2">
				<input type="hidden" name="id" value="<?=$row['id']?>">
				<?php  }; ?>
			</form>
			<div class="col-md-12 text-center">
				<h3><span id="response" class="alert-danger"></span></h3>
			</div>			
		</div>
	</div>

<?php  include("footer.php"); ?>