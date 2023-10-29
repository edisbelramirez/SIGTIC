<?php
$conn=new PDO('mysql:host=localhost; dbname=sigticdb', 'root', '') or die(mysql_error());

if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"upload/".$fname);
 if($move){
 	$query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
	if($query){
	header("location:./?view=upload&opt=all");
	}
	else{
	die(mysql_error());
	}
 }
}
?>
<html>
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
<body>
	    <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
		<h2><p>FTP Web <span class="badge bg-success rounded-pill">Versión 1.4</span></p></h2>	

		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th class="table-primary"  width="90%" align="center">Archivos</th>
					<th class="table-primary" align="center">Acción</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
			
				<td >
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
			<a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>" class="btn btn-primary btn-sm rounded-pill">Descargar</a>
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
</body>
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
</html>