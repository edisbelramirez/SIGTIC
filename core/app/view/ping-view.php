<!DOCTYPE html>
<html>
<head>
    <title>Ping AJAX</title>
</head>
<body>
<div class="row">

<div class="col-12">
<div class="card">
<div class="card-header">
<h1 class="">Ping</h1>
									
<div class="container">
<div class="row"></div>
<div class="row">
<div class="col-md-12 mb-3"></div>
</div>
</div>

    <div>
        Dominio / Direccion IP: <input id="domain" type="text"> 
        <button type="button" class="btn btn-primary rounded-pill" id="ping" value="Ping">Ping</button>
    </div>
    <div id="result"></div>
    <script>
        function updateText(domain) {
            var ajax = new XMLHttpRequest();
              ajax.onreadystatechange = function() {
                if (this.readyState == 3) {
                  var old_value = document.getElementById("result").innerHTML; 
                  document.getElementById("result").innerHTML = this.responseText;
                }               
            };          
            var url = 'core/app/action/ajax.php?domain='+domain;
            ajax.open('GET', url,true);
            ajax.send();
        }
        document.getElementById("ping").onclick = function(){
            domain = document.getElementById("domain").value;
            updateText(domain);
        }
    </script>
</body>
</html>