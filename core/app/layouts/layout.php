<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/favicons.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>SIGTIC - Sistema de Gestión de las TIC</title>

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="css/app.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <script type="text/javascript" src="plugins/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="plugins/datatables/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/datatables/buttons.bootstrap5.min.css">
  <script type="text/javascript" src="plugins/datatables/datatables.min.js"></script>

<title>SIGTIC - Sistema Gestion de las TIC</title>

  <link href="css/app.css" rel="stylesheet">
</head>
<?php if(!isset($_SESSION["user_id"])):?>
  <main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="img/logo/logo.png" alt="Charles Hall" class="img-fluid rounded-square" width="200" height="200" />
									</div>
									<form method="post" action="./?action=access&opt=login">
										<div class="mb-3">
											<label class="form-label">Usuario</label>
											<input class="form-control form-control-lg"  name="email" placeholder="Introduzca su usuario" />
										</div>
										<div class="mb-3">
											<label class="form-label">Contrseña</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Introduzca su contrseña" />
											<small>
                                           </small>
										</div>
										<div>
											
										</div>
										<div class="text-center mt-3">
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Aceptar</button>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">SIGTIC - Copyright © 2023. Infotec Studio. All right reserved</span>
  </div>
</footer>
<?php else:?>
<body>



<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="./">
				<img src="img/icons/favicons.png" alt="Charles Hall" class="img-fluid rounded-square" width="30" height="30" /> <span class="align-middle">SIGTIC ®</span> <span class="badge bg-success rounded-pill">Versión 1.4</span></td>
        </a>

				<ul class="sidebar-nav">
        <li class="sidebar-item active">
						<a class="sidebar-link" href="./">
              <i class="align-middle" data-feather="home"></i> <span class="align-middle">Inicio</span>
            </a>
					</li>

<li class="sidebar-header">
						Monitoreo de red
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=ping&opt=all">
              <i class="align-middle" data-feather="terminal"></i> <span class="align-middle">Ping</span>
            </a>
					</li>
<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=ping-monitor&opt=all">
              <i class="align-middle" data-feather="terminal"></i> <span class="align-middle">Ping Monitor</span>
            </a>
					</li>

					</li>
<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=portscanner&opt=all">
              <i class="align-middle" data-feather="terminal"></i> <span class="align-middle">Escanear puertos</span>
            </a>
					</li>
					</li>
<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=upload&opt=all">
              <i class="align-middle" data-feather="terminal"></i> <span class="align-middle">FTP Web</span>
            </a>
					</li>

					<li class="sidebar-header">
						Usuarios del dominio
					</li>

					

					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=user_request&opt=all">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Solicitud de usuario</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=wifi_request&opt=all">
              <i class="align-middle" data-feather="wifi"></i> <span class="align-middle">Solicitud de acceso a wifi</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=categories&opt=all">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Grupos de usuarios</span>
            </a>
					</li>

					<li class="sidebar-header">
						Equipos
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=computer&opt=all">
              <i class="align-middle" data-feather="monitor"></i> <span class="align-middle">Computadoras</span>
            </a>
					</li>

					<li class="sidebar-header">
						Conectividad
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=connectivity&opt=all">
              <i class="align-middle" data-feather="monitor"></i> <span class="align-middle">Conectividad VPN</span>
            </a>
					</li>


					<li class="sidebar-header">
						Contactos
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=contacts_technical&opt=all">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Contactos técnicos</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=contacts&opt=all">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Contactos económicos</span>
            </a>
					</li>

					

					<li class="sidebar-header">
						Plan de trabajo
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=calendar&opt=all">
              <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Plan de trabajo</span>
            </a>
					</li>





<li class="sidebar-header">
						Plan de videoconferencias
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=pvideoconference&opt=all">
              <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Programa

            </a>

			<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=videoroom&opt=all">
              <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Salas</span>

            </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="./?view=videoconference&opt=all">
              <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">Facturación

            </a>
					</li>

			</div>
		</nav>

    <div class="main">
    <nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.png" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo Core::$user->username;?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i> Perfil</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Estadística</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="./?view=settings&opt=all"><i class="align-middle me-1" data-feather="settings"></i> Configuración</a>
                <a class="dropdown-item" href="./?view=users&opt=all"><i class="align-middle me-1" data-feather="users"></i> Usuarios</a>
                <a class="dropdown-item" href="./?view=bakupdb&opt=all"><i class="align-middle me-1" data-feather="database"></i> Respaldar BD</a>
				<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#control_versionModal"><i class="align-middle me-1" data-feather="info"></i>Control de cambios</a>
								<a class="dropdown-item" href="./?view=help&opt=all"><i class="align-middle me-1" data-feather="help-circle"></i> Ayuda</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="./?action=access&opt=logout"><i class="align-middle me-1" data-feather="log-out"></i> Cerrar sesión</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

      <main class="content">
        <div class="container-fluid p-0">

          <?php View::load("index");?>

        </div>
      </main>

      <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
							<strong>SIGTIC - Copyright © 2023. Infotec Studio. All right reserved</strong>
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://infotecstudio.nat.cu" target="_blank">Soporte</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://infotecstudio.nat.cu" target="_blank">Ayuda</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://infotecstudio.nat.cu" target="_blank">Privacidad</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://infotecstudio.nat.cu" target="_blank">Términos y condiciones</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
</footer>



<!-- Modal -->
<div class="modal fade" id="control_versionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Control de cambios</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <b><div>Versión 1.0 Beta (Primer release)</div></b> 
	   <div>- Ajustes generales del sistema</div>
<br>
	   <b><div>Versión 1.0</div></b> 
	   <u><div>Agregado el módulo Usuarios</div></u> 
		 <div>- Solicitud de usuario</div>
		 <div>- Solicitud de acceso a wifi</div>
         <div>- Grupos de usuarios</div>
         <div>- Contactos de usuario</div>
		 <br>
		 <u><div>Agregado el módulo Equipos</div></u> 
		 <div>- Computadoras</div>
		<br>
		<b><div>Versión 1.2</div></b>  
	  <u><div>Agregado el módulo Plan de trabajo</div></u>  
		 <div>- Pan de trabajo</div>
		 <br>
		<u><div>Agregado el módulo Plan de videoconferencias </div></u>  
		 <div>- Programa</div>
		 <div>- Salas</div>
		 <div>- Facturación</div>
		 <br>
		 <b><div>Versión 1.3</div></b>  
	  <u><div>Monitoreo de red</div></u>  
		 <div>- Ping</div>
		 <div>- Ping Monitor</div>
		 <div>- Escanear puertos</div>
<br>
<br>
<b><div>Versión 1.4</div></b>  
<u><div>Conectividad</div></u>  
<div>- Conectividad VPN</div>
<br>
<b><div>Dirección IP</div></b>
		 <div><?php $ip_add = $_SERVER['REMOTE_ADDR']; echo $ip_add; ?></div>
		
<br>
<b><div> Datos del navegador </div></b>
		 <div><?php echo $_SERVER['HTTP_USER_AGENT'];?></div>
		 <br>
		 <b><div>Software servidor</div></b>
		 <div><?php echo $_SERVER['SERVER_SOFTWARE']."<br/>";  ?></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

<script src="js/app.js"></script>

<script type="text/javascript">
$(document).ready(function(){
$(".datatable").DataTable();
});
</script>

<script type="text/javascript"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("datetimepicker-dashboard").flatpickr({
inline: true,
prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
});
});
</script>

<script>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
<?php endif; ?>
</html>