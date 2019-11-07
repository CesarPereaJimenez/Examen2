<html>
<head><title>Área del rectangulo</title></head>
<body bgcolor="pink" text="000033">
<h2>Resultado: Área del rectangulo</h2>
<p>
<?php
 extract($_REQUEST, EXTR_SKIP); //Extrayendo los imputs del formulario

 $result = $base * $altura;
 print "$result = $base * $altura <br>";
?>
</body>
</html> 
