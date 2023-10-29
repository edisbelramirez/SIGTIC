<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$contacts = UserData::getAll();
  ?>

          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                <h1 class="bi bi-people-fill"> Usuarios</h1>
                  <a href="./?view=users&opt=new" class="btn btn-secondary rounded-pill bi bi-person-plus"> Nuevo Usuario</a>
                  <button  
     class="btn btn-danger rounded-pill bi bi-question-circle"  
     data-bs-toggle="tooltip"  
     data-bs-placement="bottom"  
      title="Para agregar un nuevo usuario del sistema presione el botón (Nuevo Usuario) y complete los campos en el formulario y de clic en el botón agregar." 
  > 
   Ayuda 
 </button>
                </div>
                <div class="card-body">
                  <?php if(count($contacts)>0):?>
                    <div>
                    <table class="table table-bordered table-striped datatable">
                      <thead>
                        <th>Nombre</th>
                        <th>Nombre de usuario</th>
                        <th>Email</th>
                        <th></th>
                      </thead>
                      <?php foreach($contacts as $con):?>
                        <tr>
                          <td><?php echo $con->name." ".$con->lastname; ?></td>
                          <td><?php echo $con->username; ?></td>
                          <td><?php echo $con->email; ?></td>
                          <td style="width:160px; ">
                            <a href="./?view=users&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a>
                            <a href="./?action=users&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-trash"></i> Eliminar</a>
                            <script type="text/javascript">
                              $("#item-<?php echo $con->id; ?>").click(function(e){
                                e.preventDefault();
                                x = confirm("Seguro desea eliminar este elemento?");
                                if(x){
                                  window.location = "./?action=users&opt=del&id=<?php echo $con->id; ?>";
                                }
                              });
                            </script>
                          </td>
                        </tr>
                      <?php endforeach ;?>
                    </table>
                  </div>

                  <?php else:?>
                    <p class="alert alert-warning">No hay Usuarios.</p>
                  <?php endif;?>
                </div>
              </div>

            </div>
          </div>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="new"):?>
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h1 class="">Nuevo Usuario</h1>
                  <a href="./?view=users&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
                </div>
                <div class="card-body">

<form method="post" action="./?action=users&opt=add">
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
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" name="passsword" id="passsword" class="form-control" placeholder="Password" >
  </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
                </div>
              </div>

            </div>
          </div>
<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = UserData::getById($_GET["id"]);
  ?>
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h1 class="">Editar Usuario</h1>
                  <a href="./?view=users&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
                </div>
                <div class="card-body">

<form method="post" action="./?action=users&opt=update">
  <input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" name="name" class="form-control" value="<?php echo $con->name; ?>" id="name" placeholder="Nombre">
  </div>
  <div class="mb-3">
    <label for="lastname" class="form-label">Apellidos</label>
    <input type="text" name="lastname" id="lastname" class="form-control"  value="<?php echo $con->lastname; ?>" placeholder="Apellidos" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="text" name="username" id="username" class="form-control" value="<?php echo $con->username; ?>" placeholder="Nombre de usuario" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" name="email" class="form-control" value="<?php echo $con->email; ?>" placeholder="Email">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
  </div>

  <button type="submit" class="btn btn-success">Actualizar</button>
</form>
                </div>
              </div>

            </div>
          </div>
<?php endif; ?>

