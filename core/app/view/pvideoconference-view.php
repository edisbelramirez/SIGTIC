<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$computer = PVideoconferenceData::getAll();
?>

								

							<div class="card">
								<div class="card-header">
									<h1 class="">Programa de videoconferencias</h1>
									
	<div class="row">
	<div class="col-12">
	 <!-- Basic Modal -->
	 <button type="button" class="btn btn-primary rounded-pill bi bi-person-plus" data-bs-toggle="modal" data-bs-target="#basicModal">
     Nueva video
    </button>
    <div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Nueva video</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
	<form method="post" action="./?action=pvideoconference&opt=add">
  <div class="mb-3">
    <label for="date" class="form-label">Fecha</label>
    <input type="date" name="date" class="form-control" id="date" placeholder="Fecha de la videoconferencia">
  </div>
  <div class="mb-3">
<label for="videoroom" class="form-label">Sala</label>
  <select class="form-control" name="videoroom" required>
        <option value="">-- SELECCIONE --</option>
        <?php foreach(VideoroomData::getAll() as $e):?>
        <option value="<?php echo $e->videoroom; ?>"><?php echo $e->videoroom; ?></option>
        <?php endforeach; ?>
      </select>
	  </div>
  <div class="mb-3">
    <label for="requested" class="form-label">Solicita</label>
    <input type="text" name="requested" id="requested" class="form-control" placeholder="Solicita" >
  </div>
  <div class="mb-3">
    <label for="directs" class="form-label">Dirige </label>
    <input type="text" name="directs" class="form-control" placeholder="Dirige">

  </div>

  <div class="mb-3">
    <label for="start_time" class="form-label">Hora inicio </label>
    <input type="time" name="start_time" class="form-control" placeholder="Hora inicio">

  </div>
 
  <div class="mb-3">
    <label for="finish_time" class="form-label">Hora inicio </label>
    <input type="time" name="finish_time" class="form-control" placeholder="Hora fin">

  </div>
 
<div class="modal-footer">
<button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Cancelar</button>
<button type="submit" class="btn btn-primary rounded-pill">Agregar</button>
</form>
</div>
</div>
</div>
</div>
<!-- End Basic Modal-->
</div>
								<div class="card-body">
									<?php if(count($computer)>0):?>
										<div>
										<table class="table table-bordered table-striped datatable">
											<thead>
												<th>Dia</th>
												<th class="table-primary">Sala</th>
												<th>Solicitada</th>
												<th>Dirige</th>
                        <th>Hora inicio</th>
                        <th>Hora fin</th>
												<th></th>
											</thead>
											<?php foreach($computer as $con):?>
												<tr>
													<td><?php echo $con->date; ?></td>
													<td class="table-primary"><?php echo $con->videoroom; ?></td>
													<td><?php echo $con->requested; ?></td>
													<td><?php echo $con->directs; ?></td>
                                                    <td><?php echo $con->start_time; ?></td>
                                                    <td><?php echo $con->finish_time; ?></td>
                                                  
													<td style="width:160px; ">
														<a href="./?view=pvideoconference&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a>
														<a href="./?action=pvideoconference&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-trash"></i> Eliminar</a>
														<script type="text/javascript">
															$("#item-<?php echo $con->id; ?>").click(function(e){
																e.preventDefault();
																x = confirm("Seguro desea eliminar este elemento?");
																if(x){
																	window.location = "./?action=pvideoconference&opt=del&id=<?php echo $con->id; ?>";
																}
															});
														</script>
													</td>
												</tr>
											<?php endforeach ;?>
										</table>
									</div>

									<?php else:?>
										<p class="alert alert-warning">No hay videoconferencias progrmadas.</p>
									<?php endif;?>
								</div>
							</div>

						</div>
					</div>
					
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = PVideoconferenceData::getById($_GET["id"]);
	?>
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Editar videoconferencia</h1>
									<a href="./?view=pvideoconference&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" action="./?action=pvideoconference&opt=update">
	<input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  <div class="mb-3">
    <label for="date" class="form-label">Dia</label>
    <input type="date" name="date" class="form-control" value="<?php echo $con->date; ?>" id="date" placeholder="Dia">
  </div>
  <div class="mb-3">
<label for="videoroom" class="form-label">Sala </label>
  <select class="form-control" name="videoroom" required>
        <option value="">-- SELECCIONE --</option>
        <?php foreach(VideoroomData::getAll() as $e):?>
        <option value="<?php echo $e->videoroom; ?>"><?php echo $e->videoroom; ?></option>
        <?php endforeach; ?>
      </select>
	  </div>
  <div class="mb-3">
    <label for="requested" class="form-label">Solicita</label>
    <input type="text" name="requested" id="requested" class="form-control" value="<?php echo $con->requested; ?>" placeholder="Solicita" >
  </div>
  <div class="mb-3">
    <label for="directs" class="form-label">Dirige </label>
    <input type="text" name="directs" class="form-control" value="<?php echo $con->directs; ?>" placeholder="Dirige">
	</div>

  <div class="mb-3">
    <label for="start_time" class="form-label">Hora inicio </label>
    <input type="time" name="start_time" class="form-control" value="<?php echo $con->start_time; ?>" placeholder="Hora inicio">
	</div>

  <div class="mb-3">
    <label for="finish_time" class="form-label">Hora fin </label>
    <input type="time" name="finish_time" class="form-control" value="<?php echo $con->finish_time; ?>" placeholder="Hora fin">
	</div>

  <button type="submit" class="btn btn-success">Actualizar</button>
</form>
								</div>
							</div>

						</div>
					</div>
<?php endif; ?>



