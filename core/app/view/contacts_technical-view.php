<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$contacts_technical = Contacts_technicalData::getAll();
	?>

					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Contactos técnicos</h1>
									<!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded-pill bi bi-person-plus" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nuevo usuario
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form method="post" action="./?action=contacts_technical&opt=add">

	  <div class="mb-3">
<label for="company" class="form-label">Empresa</label>
  <select class="form-control" name="company" required>
        <option value="">-- SELECCIONE --</option>
        <?php foreach(ConnectivityData::getAll() as $e):?>
        <option value="<?php echo $e->company; ?>"><?php echo $e->company; ?></option>
        <?php endforeach; ?>
      </select>
	  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Apellidos</label>
    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Apellidos" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Direccion</label>
    <input type="text" name="address" id="address" class="form-control" placeholder="Direccion" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" name="email" class="form-control" placeholder="Email">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefono</label>
    <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefono" >
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

					
<button  
     class="btn btn-danger rounded-pill bi bi-question-circle"  
     data-bs-toggle="tooltip"  
     data-bs-placement="bottom"  
      title="Para agregar un nuevo usuario presione el botón (Nuevo Usuario) y complete los campos en el formulario y de clic en el botón agregar." > 
   Ayuda 
 </button>
								</div>
								<div class="card-body">
									<?php if(count($contacts_technical)>0):?>
										<div>
										<table class="table table-bordered table-striped datatable">
											<thead>
											    <th>Empresa</th>
												<th>Nombre</th>
												<th>Direccion</th>
												<th>Telefono</th>
												<th>Email</th>
												<th></th>
											</thead>
											<?php foreach($contacts_technical as $con):?>
												<tr>
												<td><?php echo $con->company; ?></td>
													<td><?php echo $con->name." ".$con->lastname; ?></td>
													<td><?php echo $con->address; ?></td>
													<td><?php echo $con->phone; ?></td>
													<td><?php echo $con->email; ?></td>
													<td style="width:160px; ">
														<a href="./?view=contacts_technical&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a>
														<a href="./?action=contacts_technical&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-trash"></i> Eliminar</a>
														<script type="text/javascript">
															$("#item-<?php echo $con->id; ?>").click(function(e){
																e.preventDefault();
																x = confirm("Seguro desea eliminar este elemento?");
																if(x){
																	window.location = "./?action=contacts_technical&opt=del&id=<?php echo $con->id; ?>";
																}
															});
														</script>
													</td>
												</tr>
											<?php endforeach ;?>
										</table>
									</div>

									<?php else:?>
										<p class="alert alert-warning">No hay contactos.</p>
									<?php endif;?>
								</div>
							</div>

						</div>
					</div>

<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = Contacts_technicalData::getById($_GET["id"]);
	?>
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Editar contacto técnico</h1>
									<a href="./?view=contacts_technical&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" action="./?action=contacts_technical&opt=update">
	<input type="hidden" name="_id" value="<?php echo $con->id; ?>">

	<div class="mb-3">
    <label for="company" class="form-label">Empresa</label>
    <input type="text" name="company" class="form-control" value="<?php echo $con->company; ?>" id="company" placeholder="Empresa">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control" value="<?php echo $con->name; ?>" id="name" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Apellidos</label>
    <input type="text" name="lastname" id="lastname" class="form-control"  value="<?php echo $con->lastname; ?>" placeholder="Apellidos" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Direccion</label>
    <input type="text" name="address" id="address" class="form-control" value="<?php echo $con->address; ?>" placeholder="Direccion" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" name="email" class="form-control" value="<?php echo $con->email; ?>" placeholder="Email">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Telefono</label>
    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $con->phone; ?>" placeholder="Telefono" >
  </div>

  <button type="submit" class="btn btn-success">Actualizar</button>
</form>
								</div>
							</div>

						</div>
					</div>
<?php endif; ?>

