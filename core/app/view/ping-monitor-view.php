<div class="card">
<div class="card-header">
<h1 class="">Ping Monitor</h1>
                                    
<?php
// Create a table showing the results
$iplist = array 
(
    array("172.16.64.1","DNS NACIONAL"),
    array("172.16.64.2","DNS NACIONAL"),
    array("172.16.65.2","DNS NACIONAL"),
    array("172.16.64.7","RELAY EICMA"),
    array("172.16.64.8","RELAY EICMA"),
    array("172.16.64.9","RELAY EICMA"),
    array("172.16.65.4","RELAY2 EICMA"),
    array("172.16.65.57","PROXY NACIONAL"),
   


);

$i = count($iplist);
$results = [];
for($j=0;$j<$i;$j++){
    $ip = $iplist[$j] [0];   
    $ping = exec("ping -c 1 $ip",$output,$status);
    $results[] = $status;
}

//Table
echo "<table border=1>
<tr>
<td>#</td>
<td>IP/URL</td>
<td>Estado</td>
<td>Descripcion</td>
</tr>";
foreach ($results as $item =>$k) {
    echo '<tr>';
    echo '<td>'.$item.'</td>';
    echo '<td>'.$iplist[$item] [0].'</td>';
    if ($results[$item]==0){
    echo '<td>En linea</td>';
}
else{
    echo '<td>Desconectado</td>';

}
echo '<td>'.$iplist[$item] [1].'</td>';
    echo '</tr>';
}
echo "</table>";
?>
</div>
</div>