<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$computer = ComputerData::getAll();
?>

								

							<div class="card">
								<div class="card-header">
									<h1 class="">Computadoras</h1>
									
	<div class="row">
	<div class="col-12">
	 <!-- Basic Modal -->
	 <button type="button" class="btn btn-primary rounded-pill bi bi-person-plus" data-bs-toggle="modal" data-bs-target="#basicModal">
     Nueva computadora
    </button>
    <div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Agregar nueva computadora</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
	<form method="post" action="./?action=computer&opt=add">
  <div class="mb-3">
    <label for="fullname" class="form-label">Nombre y apellidos</label>
    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nombre y apellidos">
  </div>
  <div class="mb-3">
    <label for="user" class="form-label">Usuario</label>
    <input type="text" name="user" id="user" class="form-control" placeholder="Usuario" >
  </div>
  <div class="mb-3">
    <label for="ipaddress" class="form-label">IP Address</label>
    <input type="text" name="ipaddress" id="ipaddress" class="form-control" placeholder="IP Address" >
  </div>
  <div class="mb-3">
    <label for="macddress" class="form-label">MAC Address </label>
    <input type="text" name="macddress" class="form-control" placeholder="MAC Address">

  </div>
 
  <div class="mb-3">
<label for="department" class="form-label">Departamento</label>
  <select class="form-control" name="department" required>
        <option value="">-- SELECCIONE --</option>
        <?php foreach(CategoryData::getAll() as $e):?>
        <option value="<?php echo $e->name; ?>"><?php echo $e->name; ?></option>
        <?php endforeach; ?>
      </select>
	  </div>

<div class="mb-3">
    <label for="equipment" class="form-label">Equipo</label>
    <select class="form-select" id="equipment" name="equipment" aria-label="Default select example">
  <option value="COMPUTADORA">Computadora</option>
  <option value="LAPTOP">Laptop</option>
  <option value="TABLET">Tablet</option>
<option value="CELULAR">Celular</option>
<option value="IMPRESORA">Impresora</option>
<option value="PLOTER">Ploter</option>
<option value="DATASHOP">Datashop</option>
<option value="SMARTTV">SmartTV</option>
</select>
</div>
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

<button  
class="btn btn-danger rounded-pill bi bi-question-circle"  
data-bs-toggle="tooltip"  
data-bs-placement="bottom"  
title="Para agregar una nueva computadora presione el botón (Nueva Computadora) y complete los campos en el formulario y de clic en el botón actualizar." 
> 
   Ayuda 
 </button>
 
                                </div>
								<div class="card-body">
									<?php if(count($computer)>0):?>
										<div>
										<table class="table table-bordered table-striped datatable">
											<thead>
												<th>Nombre y Apellidos</th>
												<th>Usuario</th>
												<th>Direccion IP</th>
												<th>Mac Address</th>
                                                <th>Departamento</th>
                                                <th>Equipo</th>
												<th></th>
											</thead>
											<?php foreach($computer as $con):?>
												<tr>
													<td><?php echo $con->fullname; ?></td>
													<td><?php echo $con->user; ?></td>
													<td><?php echo $con->ipaddress; ?></td>
													<td><?php echo $con->macddress; ?></td>
                                                    <td><?php echo $con->department; ?></td>
                                                  <td><?php echo $con->equipment; ?></td>
													<td style="width:160px; ">
														<a href="./?view=computer&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a>
														<a href="./?action=computer&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-trash"></i> Eliminar</a>
														<script type="text/javascript">
															$("#item-<?php echo $con->id; ?>").click(function(e){
																e.preventDefault();
																x = confirm("Seguro desea eliminar este elemento?");
																if(x){
																	window.location = "./?action=computer&opt=del&id=<?php echo $con->id; ?>";
																}
															});
														</script>
													</td>
												</tr>
											<?php endforeach ;?>
										</table>
									</div>

									<?php else:?>
										<p class="alert alert-warning">No hay Computadoras.</p>
									<?php endif;?>
								</div>
							</div>

						</div>
					</div>
					
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = ComputerData::getById($_GET["id"]);
	?>
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Editar Computadora</h1>
									<a href="./?view=computer&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" action="./?action=computer&opt=update">
	<input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  <div class="mb-3">
    <label for="fullname" class="form-label">Nombre y Apellidos</label>
    <input type="text" name="fullname" class="form-control" value="<?php echo $con->fullname; ?>" id="fullname" placeholder="Nombre y Apellidos">
  </div>
  <div class="mb-3">
    <label for="user" class="form-label">Usuario</label>
    <input type="text" name="user" id="user" class="form-control"  value="<?php echo $con->user; ?>" placeholder="Usuario" >
  </div>
  <div class="mb-3">
    <label for="ipaddress" class="form-label">IP Address</label>
    <input type="text" name="ipaddress" id="ipaddress" class="form-control" value="<?php echo $con->ipaddress; ?>" placeholder="IP Address" >
  </div>
  <div class="mb-3">
    <label for="macddress" class="form-label">MAC Address </label>
    <input type="text" name="macddress" class="form-control" value="<?php echo $con->macddress; ?>" placeholder="MAC Address">
	</div>

<div class="mb-3">
<label for="department" class="form-label">Departamento</label>
  <select class="form-control" name="department" required>
        <option value="">-- SELECCIONE --</option>
        <?php foreach(CategoryData::getAll() as $e):?>
        <option value="<?php echo $e->name; ?>"><?php echo $e->name; ?></option>
        <?php endforeach; ?>
      </select>
	  </div>


<div class="mb-3">
    <label for="equipment" class="form-label">Equipo</label>
    <select class="form-select" id="equipment" name="equipment" aria-label="Default select example">
  <option value="COMPUTADORA">Computadora</option>
  <option value="LAPTOP">Laptop</option>
  <option value="TABLET">Tablet</option>
<option value="CELULAR">Celular</option>
<option value="IMPRESORA">Impresora</option>
<option value="PLOTER">Ploter</option>
<option value="DATASHOP">Datashop</option>
<option value="SMARTTV">SmartTV</option>
</select>
  </div>

  <button type="submit" class="btn btn-success">Actualizar</button>
</form>
								</div>
							</div>

						</div>
					</div>
<?php endif; ?>



