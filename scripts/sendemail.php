<<<<<<< HEAD
<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$nombre = $_POST['nom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$pob = $_POST['pob'];
$coment = $_POST['coment'];
$headers = 'From: ' . $email;
$mensaje = $nombre . "desea informacion sobre el alquiler/renting." . "\n" . "Sus datos de contacto son: " . "\n" . " - Email: " . $email . "\n" . " - Telefono: " . $tel . "\n" . " - Poblacion: " . $pob;
$para = 'alquileres@automotiveservices.es'; 
$asunto = 'Solicitud informacion Renting'; 
if(mail($para, $asunto, $mensaje, $headers)){
	header('Location: ../index.html'); 
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
=======
<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$nombre = $_POST['nom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$pob = $_POST['pob'];
$coment = $_POST['coment'];
$headers = 'From: ' . $email;
$mensaje = $nombre . "desea informacion sobre el alquiler/renting." . "\n" . "Sus datos de contacto son: " . "\n" . " - Email: " . $email . "\n" . " - Telefono: " . $tel . "\n" . " - Poblacion: " . $pob;
$para = 'alquileres@automotiveservices.es'; 
$asunto = 'Solicitud informacion Renting'; 
if(mail($para, $asunto, $mensaje, $headers)){
	header('Location: ../index.html'); 
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
>>>>>>> d6cf558f4c59b3b58453f6147d5d9bdd7bc27dcc
</html>