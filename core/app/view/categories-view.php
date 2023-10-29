<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$contacts = CategoryData::getAll();
	?>

					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Grupos de usuarios</h1>
									<!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded-pill bi bi-person-plus" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nuevo Departamento
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Departamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  <form method="post" action="./?action=categories&opt=add">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre del departamento">
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
      title="Para agregar un nuevo departamento presione el botón (Nuevo Departamento) y complete los campos en el formulario y de clic en el botón agregar." > 
   Ayuda 
 </button>
								</div>
								<div class="card-body">
									<?php if(count($contacts)>0):?>
										<div>
										<table class="table table-bordered table-striped datatable">
											<thead>
												<th>Nombre</th>

												<th></th>
											</thead>
											<?php foreach($contacts as $con):?>
												<tr>
													<td><?php echo $con->name; ?></td>

													<td style="width:160px; ">
														<a href="./?view=categories&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a>
														<a href="./?action=categories&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-trash"></i> Eliminar</a>
														<script type="text/javascript">
															$("#item-<?php echo $con->id; ?>").click(function(e){
																e.preventDefault();
																x = confirm("Seguro desea eliminar este elemento?");
																if(x){
																	window.location = "./?action=categories&opt=del&id=<?php echo $con->id; ?>";
																}
															});
														</script>
													</td>
												</tr>
											<?php endforeach ;?>
										</table>
									</div>

									<?php else:?>
										<p class="alert alert-warning">No hay Departamentos.</p>
									<?php endif;?>
								</div>
							</div>

						</div>
					</div>

<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = CategoryData::getById($_GET["id"]);
	?>
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Editar Departamento</h1>
									<a href="./?view=categories&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" action="./?action=categories&opt=update">
	<input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control" value="<?php echo $con->name; ?>" id="name" placeholder="Nombre">
  </div>


  <button type="submit" class="btn btn-success">Actualizar</button>
</form>
								</div>
							</div>

						</div>
					</div>
<?php endif; ?>

