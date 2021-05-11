<?php  	include("header.php"); ?>
<?php  	include("comm.php"); ?>
<?php 
		$query = "SELECT * FROM autos";
		$result = $mysqli->query($query);
 ?>

	<div class="container">		
		<div class="row">			
			<div class="col-md-12 text-left">
				<h3>Listado de Vehiculos</h3>
				<a href="crear.php?op=crear" class="btn btn-success">Ingresar Vehiculos</a>
			</div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th></th>
						<th>Matricula</th>
						<th>Serial Motor</th>
						<th>Serial Carroceria</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Año</th>
						<th>Color</th>
						<th>Precio</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $AI = 1; while($row = $result->fetch_assoc()) { ?>	 
					<tr>
						<td><?=$AI?></td>
						<td><?=$row['matricula']?></td>
						<td><?=$row['serial_motor']?></td>
						<td><?=$row['serial_carroceria']?></td>
						<td><?=$row['marca']?></td>
						<td><?=$row['modelo']?></td>
						<td><?=$row['anio']?></td>
						<td><?=$row['color']?></td>
						<td><?=number_format($row['precio'], 0, ',', '.')?></td>
						<td>
							<a href="eliminar.php?id=<?=$row['id']?>" class="btn btn-danger">Eliminar</a>
							<a href="edit.php?id=<?=$row['id']?>" class="btn btn-primary">Editar</a>
						</td>
					</tr>
					<?php $AI++; }; ?>
				</tbody>
			</table>
			<div class="col-md-12 text-center">
				<h3><span id="response" class="alert-danger"></span></h3>
			</div>			
		</div>
	</div>

<?php  include("footer.php"); ?>