<?php

require_once 'response.php';

$nombre = $_POST['name'];
$email = $_POST['email'];
$coment = $_POST['coment'];
$headers = 'From: ' . $email;
$mensaje = $nombre . "desea informacion sobre el alquiler/renting." . "\n" . "Sus datos de contacto son: " . "\n" . " - Email: " . $email . "\n";
$para = 'alquileres@automotiveservices.es'; 
$asunto = 'Solicitud informacion Renting'; 
if(mail($para, $asunto, $mensaje, $headers)){
	header("Location: ../index.html?message= $response");
}else{
echo "Error sending email";
}
exit();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

</head>
<body>

</body>
</html>