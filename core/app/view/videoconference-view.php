<?php 

//if(!isset($_SESSION["user_id"])){ Core::redir("./");}
$user= VideoconferenceData::getById($_SESSION["user_id"]);
// si el id  del usuario no existe.
//if($user==null){ Core::redir("./");}

if(isset($_GET["opt"]) && $_GET["opt"]=="all"):?>
<section class="container">
<div class="row">
	<div class="col-md-12">
		<h1>Facturación de videoconferencias</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded-pill bi bi-person-plus" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nueva videoconferencia
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva videoconferencia</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <section class="container">
<form class="form-horizontal" method="post" id="videoroom" action="index.php?action=videoconference&opt=add" role="form">
  
<div class="form-group">
    <label for="videoroom" class="col-lg-2 control-label">Sala</label>
    <div class="col-md-12">
  <select class="form-control" name="videoroom" required>
        <option value="">-- SELECCIONE LA SALA --</option>
        <?php foreach(VideoroomData::getAll() as $e):?>
        <option value="<?php echo $e->videoroom; ?>"><?php echo $e->videoroom; ?></option>
        <?php endforeach; ?>
      </select>
	  </div>

  <div class="form-group">
    <label for="customer" class="col-lg-2 control-label">Cliente</label>
    <div class="col-md-12">
      <input type="text" name="customer" required class="form-control" id="customer" placeholder="Cliente">
    </div>
  </div>
  <div class="form-group">
    <label for="groups" class="col-lg-2 control-label">Grupo</label>
    <div class="col-md-12">
    <select class="form-select" id="groups" name="groups" aria-label="Default select example" placeholder="Grupo">
  <option value="">-- SELECCIONE EL GRUPO --</option>
  <option value="100">COMUNICACIONES</option>
  <option value="200">OFIMATICA</option>
  <option value="300">TELEMATICA</option>
  <option value="400">APLICACIONES</option>
  </select>
  </div>
  </div>

  <div class="form-group">
    <label for="date" class="col-lg-2 control-label">Fecha</label>
    <div class="col-md-12">
      <input type="date" value="<?php echo date('Y-m-d');?>" name="date" class="form-control" id="date" placeholder="Fecha">
    </div>
  </div>

  <div class="form-group">
    <label for="start_time" class="col-lg-2 control-label">Hora inicio</label>
    <div class="col-md-12">
      <input type="time" value="<?php echo date('H:i:s');?>" name="start_time" required class="form-control" id="start_time" placeholder="Hora inicio ">
    </div>
  </div>
  <div class="form-group">
    <label for="finish_time" class="col-lg-2 control-label">Hora fin</label>
    <div class="col-md-12">
      <input type="time" name="finish_time" class="form-control"  id="finish_time" placeholder="Hora fin">
    </div>
  </div>

  <div class="form-group">
    <label for="price" class="col-lg-2 control-label">Precio</label>
    <div class="col-md-12">
    <select class="form-select" id="price" name="price" aria-label="Default select example" placeholder="Precio">
  <option value="218.25">Videoconferencia ($218.25)</option>
  <option value="251.60">Audioconferencia ($251.60)</option>
  </select>
  </div>
  </div>
<br>	
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

	<div class="row">
    <div class="col-md-6">
</div>
<div class="col-md-6">
<form class="form-inline" >
  <input type="hidden" name="view" value="videoconference">
  <input type="hidden" name="opt" value="all">
  <div class="form-group">
    <input type="date" name="date" value="<?php echo date('Y-m-d');?>" required class="form-control" id="exampleInputName2" placeholder="Jane Doe">
  </div>
  <button type="submit" class="btn btn-info rounded-pill bi bi-funnel"> Filtrar</button>
</form>

  </div>
</div>

  <br><br>
		<?php
    $users = array();
    if(isset($_GET["date"])){
    $users = VideoconferenceData::getAllBy("date", $_GET["date"]);

    }else{
		$users = VideoconferenceData::getAll();
    }
		if(count($users)>0){
			?>
			<div class="box box-primary">
			<table class="table table-bordered datatable table-hover">
			<thead>
			<th>Sala</th>
			<th>Cliente</th>
      <th>Grupo</th>
      <th>Fecha</th>
      <th>Hora inicio</th>
      <th>Hora fin</th>
      <th>Precio</th>
			<th></th>
			</thead>
      <?php
      $total=0;
			foreach($users as $user){
				?>
				<tr>
				<td ><?php echo $user->videoroom; ?></td>
				<td><?php echo $user->customer; ?></td>
        <td><?php echo $user->groups; ?></td>
        <td><?php echo $user->date; ?></td>
        <td><?php echo $user->start_time; ?></td>
        <td><?php echo $user->finish_time; ?></td>
        <td class="table-primary"><span class="badge bg-primary rounded-pill">$</span> <?php echo $user->price; ?></td>
				<td style="width:120px;">
				<a href="index.php?view=videoconference&opt=edit&id=<?php echo $user->id;?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a><br><br>
				<a href="index.php?action=videoconference&opt=del&id=<?php echo $user->id;?>" class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-trash"></i> Eliminar</a>
				</td>
				</tr>
        
				<?php
$total+=$user->price;
			}
 echo "</table></div>";
 echo "<h1>Total: $ $total</h1>";

		}else{
			?>
			<p class="alert alert-warning">No hay videoconferencias programadas.</p>
			<?php
		}

		?>

	</div>
</div>
</section>

<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):?>
<div class="container">
<?php $user = VideoconferenceData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar videoconferencia</h1>
	<br>
  <form class="form-horizontal" method="post" id="videoroom" action="index.php?action=videoconference&opt=upd" role="form">

<div class="form-group">
  <label for="videoroom" class="col-lg-2 control-label">Sala</label>
  <div class="col-md-6">
    <select class="form-control" name="videoroom" required>
      <option value="">-- SELECCIONE LA SALA --</option>
      <?php foreach(VideoroomData::getAll() as $e):?>
      <option value="<?php echo $e->videoroom; ?>" <?php if($user->videoroom==$e->videoroom){ echo "selected"; }?>><?php echo $e->videoroom; ?></option>
      <?php endforeach; ?>
    </select>

  </div>

  <div class="form-group">
    <label for="customer " class="col-lg-2 control-label">Cliente</label>
    <div class="col-md-6">
      <input type="text" name="customer" value="<?php echo $user->customer ;?>" class="form-control" id="customer" placeholder="Cliente">
    </div>
  </div>

  <div class="form-group">
    <label for="groups" class="col-lg-2 control-label">Grupo</label>
    <div class="col-md-6">
    <select class="form-select" id="groups" name="groups" aria-label="Default select example" placeholder="Grupo">
    <option value="">-- SELECCIONE EL GRUPO --</option>
    <option value="100">COMUNICACIONES</option>
  <option value="200">OFIMATICA</option>
  <option value="300">TELEMATICA</option>
  <option value="400">APLICACIONES</option>
  </select>
  </div>
  </div>

  <div class="form-group">
    <label for="date" class="col-lg-2 control-label">Fecha</label>
    <div class="col-md-6">
      <input type="date" value="<?php echo $user->date; ?>" name="date" class="form-control" id="date" placeholder="Fecha">
    </div>
  </div>
  <div class="form-group">
    <label for="start_time" class="col-lg-2 control-label">Hora inicio</label>
    <div class="col-md-6">
      <input type="time" value="<?php echo $user->start_time; ?>" name="start_time" required class="form-control" id="start_time" placeholder="Hora inicio ">
    </div>
  </div>
  <div class="form-group">
    <label for="finish_time" class="col-lg-2 control-label">Hora fin</label>
    <div class="col-md-6">
      <input type="time" name="finish_time" value="<?php echo $user->finish_time; ?>" class="form-control"  id="finish_time" placeholder="Hora fin">
    </div>
  </div>

  <div class="form-group">
    <label for="price" class="col-lg-2 control-label">Precio</label>
    <div class="col-md-6">
    <select class="form-select" id="price" name="price" aria-label="Default select example" placeholder="Precio">
  <option value="218.25">Videoconferencia ($218.25)</option>
  <option value="251.60">Audioconferencia ($251.60)</option>
  </select>
  </div>
  </div>
  <br>
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