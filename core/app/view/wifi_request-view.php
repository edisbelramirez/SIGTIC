<?php if(isset($_GET["opt"]) && $_GET["opt"]=="all"):
$wifi_request = Wifi_requestData::getAll();
  ?>

          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h1 class="bi bi-wifi"> Solicitud de acceso a WI-FI</h1>

                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary rounded-pill bi bi-person-plus" data-bs-toggle="modal" data-bs-target="#exampleModal">
Nueva solicitud de acceso a WI-FI
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva solicitud de acceso a WI-FI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="./?action=wifi_request&opt=add">
  <div class="mb-3">
    <label for="fullname" class="form-label">Nombre y apellidos</label>
    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Nombre y apellidos">
  </div>
  <div class="mb-3">
    <label for="ipaddress" class="form-label">Dirección IP</label>
    <input type="text" name="ipaddress" id="ipaddress" class="form-control" placeholder="Dirección IP" >
  </div>
  <div class="mb-3">
    <label for="macaddress" class="form-label">Dirección MAC</label>
    <input type="text" name="macaddress" id="macaddress" class="form-control" placeholder="Dirección MAC" >
  </div>
  <div class="mb-3">
    <label for="imei" class="form-label">IMEI </label>
    <input type="text" name="imei" class="form-control" placeholder="IMEI">
  </div>
<div class="mb-3">
    <label for="number" class="form-label">Número </label>
    <input type="text" name="number" class="form-control" placeholder="Numero">
  </div>

  <div class="mb-3">
    <label for="equipment" class="form-label">Equipo</label>
    <select class="form-select" id="equipment" name="equipment" aria-label="Default select example">
    <option value="CELULAR">Celular</option>
    <option value="TABLET">Tablet</option>
    <option value="LAPTOP">Laptop</option>
  </select>
  </div>

  <div class="mb-3">
    <label for="model" class="form-label">Modelo </label>
    <input type="text" name="model" class="form-control" placeholder="Modelo">
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
      title="Para agregar una nueva solicitud de acceso a WIFI presione el botón (Registrar usuario) y complete los campos en el formulario y de clic en el botón agregar." > 
   Ayuda 
 </button>
                </div>
                <div class="card-body">
                  <?php if(count($wifi_request)>0):?>
                    <div>
                    <table class="table table-bordered table-striped datatable">
                      <thead>
                        <th>Nombre y apellidos</th>
                        <th>Dirección IP</th>
                        <th>Dirección MAC</th>
                        <th>Imei</th>
                        <th>Número</th>
                        <th>Equipo</th>
                         <th>Modelo</th>
                        <th></th>
                      </thead>
                      <?php foreach($wifi_request as $con):?>
                        <tr>
                          <td><?php echo $con->fullname; ?></td>
                          <td><?php echo $con->ipaddress; ?></td>
                          <td><?php echo $con->macaddress; ?></td>
                          <td><?php echo $con->imei; ?></td>
                          <td><?php echo $con->number; ?></td>
                          <td><?php echo $con->equipment; ?></td>
                          <td><?php echo $con->model; ?></td>
                          <td style="width:160px; ">
                            <a href="./?view=wifi_request&opt=edit&id=<?php echo $con->id; ?>" class="btn btn-success btn-sm rounded-pill"><i class="ri ri-edit-2-fill"></i> Editar</a>
                            <a href="./?action=wifi_request&opt=del&id=<?php echo $con->id; ?>" id="item-<?php echo $con->id; ?>"  class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-trash"></i> Eliminar</a>
                            <script type="text/javascript">
                              $("#item-<?php echo $con->id; ?>").click(function(e){
                                e.preventDefault();
                                x = confirm("Seguro desea eliminar este elemento?");
                                if(x){
                                  window.location = "./?action=wifi_request&opt=del&id=<?php echo $con->id; ?>";
                                }
                              });
                            </script>
                          </td>
                        </tr>
                      <?php endforeach ;?>
                    </table>
                  </div>

                  <?php else:?>
                    <p class="alert alert-warning">No hay solicitud de acceso a WI-FI.</p>
                  <?php endif;?>
                </div>
              </div>

            </div>
          </div>

<?php elseif(isset($_GET["opt"]) && $_GET["opt"]=="edit"):
$con = Wifi_requestData::getById($_GET["id"]);
  ?>
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-header">
                  <h1 class="">Editar solicitud de acceso a WI-FI</h1>
                  <a href="./?view=wifi_request&opt=all" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
                </div>
                <div class="card-body">

<form method="post" action="./?action=wifi_request&opt=update">
  <input type="hidden" name="_id" value="<?php echo $con->id; ?>">
  <div class="mb-3">
    <label for="fullname" class="form-label">Nombre y apellidos</label>
    <input type="text" name="fullname" class="form-control" value="<?php echo $con->fullname; ?>" id="fullname" placeholder="Nombre y apellidos">
  </div>
  <div class="mb-3">
    <label for="ipaddress" class="form-label">Dirección IP</label>
    <input type="text" name="ipaddress" id="ipaddress" class="form-control"  value="<?php echo $con->ipaddress; ?>" placeholder="Dirección IP" >
  </div>
  <div class="mb-3">
    <label for="macaddress" class="form-label">Dirección MAC</label>
    <input type="text" name="macaddress" id="macaddress" class="form-control" value="<?php echo $con->macaddress; ?>" placeholder="Dirección MAC" >
  </div>
  <div class="mb-3">
    <label for="imei" class="form-label">Imei</label>
    <input type="text" name="imei" class="form-control" value="<?php echo $con->imei; ?>" placeholder="Imei">
</div>

<div class="mb-3">
    <label for="number" class="form-label">Número</label>
    <input type="text" name="number" class="form-control" value="<?php echo $con->number; ?>" placeholder="Número">
</div>

<div class="mb-3">
    <label for="equipment" class="form-label">Equipo</label>
    <select class="form-select" id="equipment" name="equipment" aria-label="Default select example">
    <option value="CELULAR">Celular</option>
    <option value="TABLET">Tablet</option>
    <option value="LAPTOP">Laptop</option>
</select>
  </div>

  <div class="mb-3">
    <label for="model" class="form-label">Modelo</label>
    <input type="text" name="model" class="form-control" value="<?php echo $con->model; ?>" placeholder="Modelo">
</div>

  
  <button type="submit" class="btn btn-success">Actualizar</button>
</form>
                </div>
              </div>

            </div>
          </div>
<?php endif; ?>

