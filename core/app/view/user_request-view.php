<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$user_request = User_requestData::getAll();
  ?>

          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h1 class="bi bi-person-lines-fill"> Solicitud de Usuarios</h1>
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded-pill bi bi-person-plus" data-bs-toggle="modal" data-bs-target="#exampleModal">
Nueva solicitud de usuario
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva solicitud de usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="./?action=user_request&opt=add">
  <div class="mb-3">
    <label for="fullname" class="form-label">Nombre y apellidos</label>
    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nombre y apellidos">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Usuario</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="Usuario" >
  </div>
  <div class="mb-3">
    <label for="ci" class="form-label">Carnet de identidad</label>
    <input type="text" name="ci" id="ci" class="form-control" placeholder="Carnet de identidad" >
  </div>
  <div class="mb-3">
    <label for="groupusers" class="form-label">Grupo de Usuario </label>
    <input type="text" name="groupusers" class="form-control" placeholder="Grupo de usuario">
  </div>
<div class="mb-3">
    <label for="occupation" class="form-label">Ocupacion </label>
    <input type="text" name="occupation" class="form-control" placeholder="Ocupacion">
  </div>

  <div class="mb-3">
    <label for="services" class="form-label">Servicios</label>
    <select class="form-select" id="services" name="services" aria-label="Default select example">
    <option  value="Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP">Todos los servicios</option>
      <option  value="Usuario del dominio">Usuario del dominio</option>
      <option value="Correo Nacional">Correo Nacional</option>
      <option value="Correo Internacional">Correo Internacional</option>
      <option value="Navegacion nacional">Navegacion nacional</option>
      <option value="Navegacion internacional">Navegacion internacional</option>
      <option value="Mensajeria instantanea">Mensajeria instantanea</option>
      <option value="Servicio FTP">Servicio FTP</option>
</select>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary rounded-pill"> Agregar</button>
        </form>
      </div>
    </div>
  </div>
</div>

                  
<button  
class="btn btn-danger rounded-pill bi bi-question-circle"  
data-bs-toggle="tooltip"  
data-bs-placement="bottom"  
title="Para agregar una nueva solicitud de usuario presione el botón (Nueva solicitud de usuario) y complete los campos en el formulario y de clic en el botón agregar." > 
   Ayuda 
 </button>
                </div>
                <div class="card-body">
                  <?php if(count($user_request)>0):?>
                    <div>
                    <table class="table table-bordered table-striped datatable">
                      <thead>
                        <th>Nombre y apellidos</th>
                        <th>Usuario</th>
                        <th>CI</th>
                        <th>Grupo de usuario</th>
                        <th>Ocupacion</th>
                        <th>Servicios</th>
                        <th ></th>
                      </thead>
                      <?php foreach($user_request as $con):?>
                        <tr>
                          <td><?php echo $con->fullname; ?></td>
                          <td><?php echo $con->username; ?></td>
                          <td><?php echo $con->ci; ?></td>
                          <td><?php echo $con->groupusers; ?></td>
                          <td><?php echo $con->occupation; ?></td>
                          <td><?php echo $con->services; ?></td>
                          <td style="width:160px; ">
                            <a href="./?view=user_request&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a>
                            <a href="./?action=user_request&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm rounded-pill" ><i class="bi bi-trash"></i> Eliminar</a>
                            <script type="text/javascript">
                              $("#item-<?php echo $con->id; ?>").click(function(e){
                                e.preventDefault();
                                x = confirm("Seguro desea eliminar este elemento?");
                                if(x){
                                  window.location = "./?action=user_request&opt=del&id=<?php echo $con->id; ?>";
                                }
                              });
                            </script>
                          </td>
                        </tr>
                      <?php endforeach ;?>
                    </table>
                  </div>

                  <?php else:?>
                    <p class="alert alert-warning">No hay solicitud de usuarios.</p>
                  <?php endif;?>
                </div>
              </div>

            </div>
          </div>

<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = User_requestData::getById($_GET["id"]);
  ?>
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h1 class="">Editar solicitud de usuario</h1>
                  <a href="./?view=user_request&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
                </div>
                <div class="card-body">

<form method="post" action="./?action=user_request&opt=update">
  <input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  <div class="mb-3">
    <label for="fullname" class="form-label">Nombre y apellidos</label>
    <input type="text" name="fullname" class="form-control" value="<?php echo $con->fullname; ?>" id="fullname" placeholder="Nombre y apellidos">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Usuario</label>
    <input type="text" name="username" id="username" class="form-control"  value="<?php echo $con->username; ?>" placeholder="Usuario" >
  </div>
  <div class="mb-3">
    <label for="ci" class="form-label">Carnet de identidad</label>
    <input type="text" name="ci" id="ci" class="form-control" value="<?php echo $con->ci; ?>" placeholder="Carnet de identidad" >
  </div>
  <div class="mb-3">
    <label for="groupusers" class="form-label">Grupo de usuario </label>
    <input type="text" name="groupusers" class="form-control" value="<?php echo $con->groupusers; ?>" placeholder="Grupo de usuario">
</div>

<div class="mb-3">
    <label for="occupation" class="form-label">Ocupacion</label>
    <input type="text" name="occupation" class="form-control" value="<?php echo $con->occupation; ?>" placeholder="Ocupacion">
</div>

<div class="mb-3">
    <label for="services" class="form-label">Servicios</label>
    <select class="form-select" id="services" name="services" aria-label="Default select example">
    <option  value="Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP">Todos los servicios</option>
      <option  value="Usuario del dominio">Usuario del dominio</option>
      <option value="Correo Nacional">Correo Nacional</option>
      <option value="Correo Internacional">Correo Internacional</option>
      <option value="Navegacion nacional">Navegacion nacional</option>
      <option value="Navegacion internacional">Navegacion internacional</option>
      <option value="Mensajeria instantanea">Mensajeria instantanea</option>
      <option value="Servicio FTP">Servicio FTP</option>
</select>
  </div>

  
  <button type="submit" class="btn btn-success">Actualizar</button>
</form>
                </div>
              </div>

            </div>
          </div>
<?php endif; ?>

