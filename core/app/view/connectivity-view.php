<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$connectivity = ConnectivityData::getAll();
?>

								

							<div class="card">
								<div class="card-header">
									<h1 class="">Conectividad VPN</h1>
									
	<div class="row">
	<div class="col-12">
	 <!-- Basic Modal -->
	 <button type="button" class="btn btn-primary rounded-pill bi bi-person-plus" data-bs-toggle="modal" data-bs-target="#basicModal">
     Nuevo enlace
    </button>
    <div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Nuevo enlace</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
	<form method="post" action="./?action=connectivity&opt=add">
 
  <div class="mb-3">
    <label for="company" class="form-label">Empresa</label>
    <input type="text" name="company" id="company" class="form-control" placeholder="Empresa" >
  </div>
  <div class="mb-3">
    <label for="ed" class="form-label">ED </label>
    <input type="text" name="ed" class="form-control" placeholder="ED del enlace">

  </div>

  <div class="mb-3">
    <label for="wan" class="form-label">WAN </label>
    <input type="text" name="wan" class="form-control" placeholder="WAN">

  </div>
 
  <div class="mb-3">
    <label for="lan" class="form-label">LAN </label>
    <input type="text" name="lan" class="form-control" placeholder="LAN">

  </div>

  <div class="mb-3">
    <label for="firewall" class="form-label">Firewall </label>
    <input type="text" name="firewall" class="form-control" placeholder="Firewall">

  </div>

  <div class="mb-3">
    <label for="domain" class="form-label">Dominio </label>
    <input type="text" name="domain" class="form-control" placeholder="Dominio">

  </div>

  <div class="mb-3">
    <label for="bandwidth" class="form-label">Ancho de Banda</label>
   
    <select class="form-select" id="bandwidth" name="bandwidth" aria-label="Default select example" placeholder="Ancho de Banda">
	<option selected>Seleccione el ancho de banda</option>
	<option value="128 KB">128 KB</option>
  <option value="256 KB">256 KB</option>
   <option value="512 KB">512 KB</option>
  <option value="1 MB">1 MB</option>
  <option value="2 MB">2 MB</option>
  <option value="4 MB">4 MB</option>
  <option value="10 MB">10 MB</option>
  <option value="20 MB">20 MB</option>
  <option value="20 MB">34 MB</option>
  <option value="50 MB">50 MB</option>
  </select>
  
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
									<?php if(count($connectivity)>0):?>
										<div>
										<table class="table table-bordered table-striped datatable">
											<thead>
												<th class="table-primary">Empresa</th>
												<th>ED</th>
												<th>WAN</th>
												<th>LAN</th>
                                                <th>Firewall</th>
                                                <th>Dominio</th>
						                        <th class="table-danger">Ancho de Banda</th>
												<th></th>
											</thead>
											<?php foreach($connectivity as $con):?>
												<tr>
													<td class="table-primary"><?php echo $con->company; ?></td>
													<td><span class="badge bg-info rounded-pill">ACTIVO</span> <?php echo $con->ed; ?></td>
													<td><?php echo $con->wan; ?></td>
													<td><?php echo $con->lan; ?></td>
                                                    <td><?php echo $con->firewall; ?></td>
                                                    <td><?php echo $con->domain; ?></td>
													<td class="table-danger"><?php echo $con->bandwidth; ?></td>
                                                  
													<td style="width:160px; ">
														<a href="./?view=connectivity&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a>
														<a href="./?action=connectivity&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-trash"></i> Eliminar</a>
														<script type="text/javascript">
															$("#item-<?php echo $con->id; ?>").click(function(e){
																e.preventDefault();
																x = confirm("Seguro desea eliminar este elemento?");
																if(x){
																	window.location = "./?action=connectivity&opt=del&id=<?php echo $con->id; ?>";
																}
															});
														</script>
													</td>
												</tr>
											<?php endforeach ;?>
										</table>
									</div>

									<?php else:?>
										<p class="alert alert-warning">No hay enlaces para mostar.</p>
									<?php endif;?>
								</div>
							</div>

						</div>
					</div>
					
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = ConnectivityData::getById($_GET["id"]);
	?>
					<div class="row">
						<div class="col-12">

							<div class="card">
								<div class="card-header">
									<h1 class="">Editar enlace</h1>
									<a href="./?view=connectivity&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
								</div>
								<div class="card-body">

<form method="post" action="./?action=connectivity&opt=update">
	<input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  
	<div class="mb-3">
    <label for="company" class="form-label">Empresa</label>
    <input type="text" name="company" class="form-control" value="<?php echo $con->company; ?>" id="company" placeholder="Empresa">
  </div>

  
  <div class="mb-3">
    <label for="ed" class="form-label">ED</label>
    <input type="text" name="ed" id="ed" class="form-control" value="<?php echo $con->ed; ?>" placeholder="ED" >
  </div>

  <div class="mb-3">
    <label for="wan" class="form-label">WAN </label>
    <input type="text" name="wan" class="form-control" value="<?php echo $con->wan; ?>" placeholder="WAN">
	</div>

  <div class="mb-3">
    <label for="lan" class="form-label">LAN </label>
    <input type="text" name="lan" class="form-control" value="<?php echo $con->lan; ?>" placeholder="LAN">
	</div>

  <div class="mb-3">
    <label for="firewall" class="form-label">Firewall </label>
    <input type="text" name="firewall" class="form-control" value="<?php echo $con->firewall; ?>" placeholder="Firewall">
	</div>

	<div class="mb-3">
    <label for="domain" class="form-label">Dominio </label>
    <input type="text" name="domain" class="form-control" value="<?php echo $con->domain; ?>" placeholder="Dominio">
	</div>

	<div class="mb-3">
    <label for="bandwidth" class="form-label">Ancho de Banda</label>
   
    <select class="form-select" id="bandwidth" name="bandwidth" aria-label="Default select example" placeholder="Ancho de Banda">
	<option selected>Seleccione el ancho de banda</option>
	<option value="128 KB">128 KB</option>
  <option value="256 KB">256 KB</option>
   <option value="512 KB">512 KB</option>
  <option value="1 MB">1 MB</option>
  <option value="2 MB">2 MB</option>
  <option value="4 MB">4 MB</option>
  <option value="10 MB">10 MB</option>
  <option value="20 MB">20 MB</option>
  <option value="20 MB">34 MB</option>
  <option value="50 MB">50 MB</option>
  </select>
  
  </div>

  <button type="submit" class="btn btn-success">Actualizar</button>
</form>
								</div>
							</div>

						</div>
					</div>
<?php endif; ?>



