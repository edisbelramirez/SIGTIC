<!-- Función de editar -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar usuario</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_usuarios_wifi.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nombres:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Apellidos:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tipo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tipo" value="<?php echo $row['tipo']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Modelo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="modelo" value="<?php echo $row['modelo']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Imei:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="imei" value="<?php echo $row['imei']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dirección IP:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="direccion_ip" value="<?php echo $row['direccion_ip']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dirección MAC:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="direccion_mac" value="<?php echo $row['direccion_mac']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Número asociado:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="numero_asociado" value="<?php echo $row['numero_asociado']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Guardar</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Función de eliminar -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Eliminar usuario</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Estás seguro de eliminar este registro?</p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="delete_usuarios_wifi.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Aceptar</a>
            </div>

        </div>
    </div>
</div>