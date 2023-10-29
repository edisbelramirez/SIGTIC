<?php
/* Ejemplo de un script PHP para hacer un TELNET
 * Andr�s de la Paz � 2010
 * http://www.wextensible.com
 */

//Vemos si tiene magic_quotes activado el servidor
$magicq = (get_magic_quotes_gpc() == 1);

//Iniciamos las variables que contendr�n los valores 
//enviados por el usuario
$un_dominio = "";
$un_protocolo = "HTTP/1.1";
$un_metodo = "GET";
$un_puerto = "80";
$un_timeout = "30";
$una_ruta = "/";
$una_cabecera = "";

//Saltos de l�nea para separar partes del env�o seg�n protocolo
define("SALTO", "\r\n");

//Iniciamos recogiendo los campos enviados por el usuario
foreach($_POST as $campo=>$valor){
    switch ($campo) {
        case "dominio":
            //La funci�n htmlspecialchars() evita que
            //el usuario env�e caracteres no deseados
            $un_dominio = htmlspecialchars($valor, ENT_QUOTES);
            if ($magicq) $un_dominio = stripslashes($un_dominio);   
            //Quita todo espacio y saltos antes y despu�s
            $un_dominio = trim($un_dominio);                    
            break;
        case "protocolo":
            $un_protocolo = htmlspecialchars($valor, ENT_QUOTES);
            if ($magicq) $un_protocolo = stripslashes($un_protocolo);
            break;
        case "metodo":
            $un_metodo = htmlspecialchars($valor, ENT_QUOTES);
            if ($magicq) $un_metodo = stripslashes($un_metodo);
            break;
        case "puerto":
            $un_puerto = htmlspecialchars($valor, ENT_QUOTES);
            if ($magicq) $un_puerto = stripslashes($un_puerto);
            break;
        case "timeout":
            $un_timeout = htmlspecialchars($valor, ENT_QUOTES);
            if ($magicq) $un_timeout = stripslashes($un_timeout);
            break;                                                  
        case "ruta":
            $una_ruta = htmlspecialchars($valor, ENT_QUOTES);
            if ($magicq) $una_ruta = stripslashes($una_ruta);
            //Quita todo espacio y saltos antes y despu�s
            $una_ruta = trim($una_ruta);
            break;  
        case "cabecera":
            $una_cabecera = htmlspecialchars($valor, ENT_QUOTES);
            if ($magicq) $una_cabecera = stripslashes($una_cabecera);
            //Quita todo espacio y saltos antes y despu�s
            $una_cabecera = trim($una_cabecera);
            break;                    
    }
} 
//Ahora componemos la p�gina de salida
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
    <title>Telnet con PHP</title>
    <meta http-equiv="X-UA-Compatible" content="IE=8" />    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    ... 
</head>
<body>
    ...
    <h3>HACER UN TELNET CON PHP</h3>
    <form action="telnet.php" method="post">
        <p>El script eliminar� todos los espacios y saltos antes y despu�s
        del dominio, ruta y cabecera, agreg�ndole a continuaci�n los
        saltos de l�nea pertinentes. La ruta es relativa al dominio y no se
        incluir� m�todo ni protocolo, que se agregar� en el script seg�n los
        seleccionados en los desplegables.
        No es necesario incluir <code>Connection: Close</code> al final de la 
        cabecera, pues ser� agregado en el script. 
        </p>    
        <label>Dominio:<br /><input type="text" name="dominio" class="codigo"
        value="<?php echo $un_dominio; ?>" size="100" /></label><br />
        <label>Protocolo:
        <select name="protocolo" class="codigo">
            <option value="HTTP/1.1" 
            <?php 
            if ($un_protocolo == "HTTP/1.1") echo " selected=\"selected\"";
            ?>
            >HTTP/1.1</option>
        </select>
        </label>
        <label> M�todo:
        <select name="metodo" class="codigo">
            <option value="GET" 
            <?php 
            if ($un_metodo == "GET") echo " selected=\"selected\"";
            ?>
            >GET</option>
        </select>
        </label>
        <label>Puerto:  <input type="text" name="puerto" class="codigo"
        value="<?php echo $un_puerto; ?>" size="5" /></label>
        <label>Timeout: <input type="text" name="timeout" class="codigo"
        value="<?php echo $un_timeout; ?>" size="3" /></label>                
        <br/>        
        <label>Ruta (s�lo la ruta relativa, sin dominio, m�todo ni protocolo):
        <br /><textarea name="ruta" rows="5" cols="100"  class="codigo"
        ><?php echo $una_ruta; ?></textarea></label><br />
        <label>Cabeceras:<br /><textarea name="cabecera" 
        rows="5" cols="100"  class="codigo"
        ><?php echo $una_cabecera; ?></textarea></label><br />
        <input type="submit" value="enviar" />
        <input type="reset" value="borrar" /><br />

    </form>
    <?php
        /* No se controla si el dominio existe. Puede hacerse con
         * checkdnsrr() pero s�lo funciona con PHP 5.3.0 y mi versi�n
         * local es 5.2.13, por lo que no la incluyo.
         */
        if (($un_dominio != "")&&($una_ruta != "")){
            $http_respuesta = "";
            //Abre un socket para una conexi�n con un dominio
            $mi_telnet = @fsockopen($un_dominio, $un_puerto, $errno, $errstr, $un_timeout);
            if (!$mi_telnet){
                echo "<p style='color: red'>Error: "
                .utf8_encode($errno)." <big>La conexi�n no ha podido 
                realizarse:</big>".
                "<br />".utf8_encode($errstr)."</p>";
            } else {
                //Preparamos una cadena de petici�n HTTP
                $escribe = $un_metodo." ".$una_ruta." ".$un_protocolo.SALTO.
                "Host: ".$un_dominio.SALTO;
                //Si hay cabecera la agregamos
                if ($una_cabecera != "") $escribe .= $una_cabecera.SALTO;
                $escribe .= "Connection: Close".SALTO.SALTO;
                //Preparamos una cadena para presentar la petici�n recibida en 
                //el servidor, resaltando los saltos de l�nea
                $escribe_rn = str_replace(SALTO, "?".SALTO, $escribe);
                echo "<h3>Cadena de petici�n recibida en el servidor</h3>".
                "<p>En esta presentaci�n de la cabecera recibida se agrega la flecha
                &rArr; para indicar donde hay un salto de l�nea. Al final tiene
                que haber 2 saltos de l�nea.</p>".
                "<pre>$escribe_rn</pre>";
                //Escribimos la petici�n en el socket                
                fwrite($mi_telnet, $escribe);
                //Leemos l�neas del socket
                while (!feof($mi_telnet)){
                    $http_respuesta .= fgets($mi_telnet, 128);
                }
            }
            //Cerramos el socket
            @fclose($mi_telnet);
            //Limpiamos caracteres reservados
            $cadena_html = htmlentities($http_respuesta, ENT_QUOTES, "UTF-8");
            //Ponemos el contenido HTML del documento   
            echo "<h3>Respuesta desde el servidor</h3>".
            "<pre>".$cadena_html."</pre>";
        }
    ?>
</body>
</html>
