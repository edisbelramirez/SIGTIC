<div class="row">

<div class="col-12">
<div class="card">
<div class="card-header">
<h1 class="">Escanear puertos</h1>
									
<div class="container">
<div class="row"></div>
<div class="row">
<div class="col-md-12 mb-3"></div>
</div>
</div>

    <div>
<form method="post" >
    Dominio o IP: 
    <input type="text" name="domain" /> 
    <input type="submit" class="btn btn-primary rounded-pill" value="Escanear" />
    
</form>
<br />

<?php
if(!empty($_POST['domain'])) {  
    //list of port numbers to scan
    $ports = array(20, 21, 22, 23, 95, 107, 25, 66, 53, 80, 110, 143, 220, 993, 465, 1521, 4662, 4672, 5400, 5500, 5700, 5800, 5900, 6667, 6881, 6869, 1433, 3306, 443);
    
    $results = array();
    foreach($ports as $port) {
        if($pf = @fsockopen($_POST['domain'], $port, $err, $err_string, 1)) {
            $results[$port] = true;
            fclose($pf);
        } else {
            $results[$port] = false;
        }
    }

    foreach($results as $port=>$val) {
        $prot = getservbyport($port,"tcp");
                echo "Port $port ($prot): ";
        if($val) {
            echo "<span style=\"color:green\">OK</span><br/>";
        }
        else {
            echo "<span style=\"color:red\">Inaccessible</span><br/>";
        }
    }
}
?>

