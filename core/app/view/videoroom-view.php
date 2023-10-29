<?php 

//if(!isset($_SESSION["user_id"])){ Core::redir("./");}
$user= VideoroomData::getById($_SESSION["user_id"]);
// si el id  del usuario no existe.
//if($user==null){ Core::redir("./");}

if(isset($_GET["opt"]) && $_GET["opt"]=="all"):?>
<section class="container">
<div class="row">
	<div class="col-md-12">
		<h1>Salas de videoconferencias</h1>
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded-pill bi bi-person-plus" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Agregar sala
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar sala</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <section class="container">
<div class="row">
	<div class="col-md-12">
<form class="form-horizontal" method="post" id="videoroom" action="index.php?action=videoroom&opt=add" role="form">
  <div class="form-group">
    <label for="videoroom" class="col-lg-12 control-label">Sala</label>
    <div class="col-md-12">
      <input type="text" name="videoroom" class="form-control" id="videoroom" placeholder="Sala">
    </div>
  </div>
  <div class="form-group">
    <label for="code" class="col-lg-12 control-label">Codigo</label>
    <div class="col-md-12">
      <input type="text" name="code" required class="form-control" id="code" placeholder="Codigo">
    </div>
  </div>
  <div class="form-group">
    <label for="linkaddress" class="col-lg-12 control-label">Direccion de la sala</label>
    <div class="col-md-12">
      <input type="text" name="linkaddress" class="form-control" required id="linkaddress" placeholder="Direccion de la sala">
    </div>
  </div>

	</div>
</div>
</section>
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
      title="Para agregar una nueva sala presione el botón (Nueva sala) y complete los campos en el formulario y de clic en el botón Agregar sala." 
  > 
   Ayuda 
 </button>
<br><br>
		<?php
		$users = VideoroomData::getAll();
		if(count($users)>0){
			?>
			<div class="box box-primary">
			<table class="table table-bordered datatable table-hover">
			<thead>
			<th>Sala</th>
			<th>Codigo</th>
      <th>Direccion</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->videoroom; ?></td>
				<td><?php echo $user->code; ?></td>
        <td><span class="badge bg-primary rounded-pill">URL</span> <?php echo $user->linkaddress; ?></td>
				<td style="width:120px;">
				<a href="index.php?view=videoroom&opt=edit&id=<?php echo $user->id;?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a><br><br>
				<a href="index.php?action=videoroom&opt=del&id=<?php echo $user->id;?>" class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-trash"></i> Eliminar</a>
				</td>
				</tr>
        
				<?php

			}
 echo "</table></div>";

		}else{
			?>
			<p class="alert alert-warning">No hay salas de videoconferencias.</p>
			<?php
		}

		?>

	</div>
</div>
</section>



<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):?>
<div class="container">
<?php $user = VideoroomData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar sala</h1>
	<br>
		<form class="form-horizontal" method="post" id="videoroom" action="index.php?action=videoroom&opt=upd" role="form">


  <div class="form-group">
    <label for="videoroom" class="col-lg-2 control-label">Sala</label>
    <div class="col-md-6">
      <input type="text" name="videoroom" value="<?php echo $user->videoroom;?>" class="form-control" id="videoroom" placeholder="Sala">
    </div>
  </div>
  <div class="form-group">
    <label for="code" class="col-lg-2 control-label">Codigo</label>
    <div class="col-md-6">
      <input type="text" name="code" value="<?php echo $user->code;?>" class="form-control" id="code" placeholder="Codigo">
    </div>
  </div>
  <div class="form-group">
    <label for="linkaddress" class="col-lg-2 control-label">Direccion de la sala</label>
    <div class="col-md-6">
      <input type="text" name="linkaddress" value="<?php echo $user->linkaddress;?>" class="form-control" id="linkaddress" placeholder="Direccion de la sala">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar sala</button>
    </div>
  </div>
</form>
	</div>
</div>
</div>
<?php endif; ?>