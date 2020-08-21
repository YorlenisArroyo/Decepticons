$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$para = 'crewdecepticons@gmail.com';
$titulo = 'Contacto';
 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Asunto:\n $asunto" Mensaje:\n $mensaje";
 
if ($_POST['enviar']) {
if (mail ($para, $titulo, $msjCorreo)) {
echo 'El mensaje se ha enviado';
} else {
echo 'Falló el envio';
}
}
