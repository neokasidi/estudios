<?php  include("header.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left">
				<h3>Ingreso de Vehiculos</h3>
			</div>			
			<form action="ingresar_auto.php" method="post" accept-charset="utf-8">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Matricula</label>
						<input type="text" name="matricula" minlength="6" placeholder="Matricula">
					</div>
					<div class="form-group">
						<label for="">Serial Motor</label>
						<input type="text" name="serieMotor" placeholder="Serial Motor">
					</div>
					<div class="form-group">
						<label for="">Serial Carroceria</label>
						<input type="text" name="serieCarroceria" placeholder="Serial Carroceria">
					</div>
					<div class="form-group">
						<label for="">Marca</label>
						<input type="text" name="marca" placeholder="Marca">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="">Modelo</label>
						<input type="text" name="modelo" placeholder="Modelo">
					</div>
					<div class="form-group">
						<label for="">Año</label>
						<input type="text" onblur="validaLargo(this)" pattern="[0-9]{4}" maxlength="4" name="anio" placeholder="Año">
					</div>
					<div class="form-group">
						<label for="">Color</label>
						<select name="color" class="form-control" required>
							<option value="">Seleccion de Color</option>
							<option value="verde">Verde</option>
							<option value="rojo">Rojo</option>
							<option value="azul">Azul</option>
							<option value="amarillo">Amarillo</option>
							<option value="blanco">Blanco</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Precio</label>
						<input type="text" name="precio" onkeyup="format(this)" placeholder="Precio">
					</div>
				</div>
				<div class="col-md-12 text-right">				  
					<button id="submit" class="btn btn-danger">Enviar</button>
					<a href="programacion_web_2_index08.html" class="btn btn-primary">Limpiar</a>
				</div>
			</form>
			<div class="col-md-12 text-center">
				<h3><span id="response" class="alert-danger"></span></h3>
			</div>			
		</div>
	</div>

<?php  include("footer.php"); ?>