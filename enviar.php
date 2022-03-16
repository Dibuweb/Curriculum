<?php
// Imprimir en pantalla el contenido del array que nos ha llegado desde el formualrio
// print_r($_POST);
//Configuro el mensaje, estas lineas son casi siempre fijas y solo habrá que sustituir por los campos que nos llegan $_POST["XXXXXX"]
$headers = "From: ".stripslashes($_POST["nombre"])."<" . $_POST["email"] . "> \n";
$headers.= "Reply-to:" . $_POST["email"] . "\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers = "Content-Type: text/html; charset=utf-8\n".$headers;
//Construyo el mensaje, deberé tener en cuenta todos los campos que ha rellenado el usuario en el formulario
$cuerpo = "Consulta enviada <br/>";
$cuerpo .= "Nom: " .$_POST["nombre"] . "<br/>";
$cuerpo .= "Telèfon: " .$_POST["tel"] . "<br/>";
$cuerpo .= "Correu electrònic: " .$_POST["email"] . "<br/>";
$cuerpo .= "Missatge: " .$_POST["mensaje"] . "<br/>";
$cuerpo .= "Urgent: " .$_POST["urgent"] . "<br/>";
//Envío del formulario
mail("dibuweb@hotmail.com", "Consulta desde la web de prácticas",$cuerpo,$headers);
//redireccionamos a la página de contacto
header("Location: http://www.XXX.html");
?>

