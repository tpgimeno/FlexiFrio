<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$nombre = $_POST['name'];
$email = $_POST['email'];
$coment = $_POST['coment'];
$headers = 'From: ' . $email;
$mensaje = $nombre . "desea informacion sobre el alquiler/renting." . "\n" . "Sus datos de contacto son: " . "\n" . " - Email: " . $email . "\n" . " - Telefono: " . $tel . "\n" . " - Poblacion: " . $pob;
$para = 'alquileres@automotiveservices.es'; 
$asunto = 'Solicitud informacion Renting'; 
if(mail($para, $asunto, $mensaje, $headers)){
	$url = '../index.html';
	$http_response_header = $this->get_headers(); 
	var_dump($http_response_header);die;
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