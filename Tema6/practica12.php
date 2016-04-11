<?php
$error=false;

$dni= filter_input(INPUT_POST, "dni", FILTER_VALIDATE_INT);
if ($dni === false) {
echo "El valor del dni no se ha establecido correctamente <br>";
$error=true;
}

$mail= filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL);
if ($mail === false) {
echo "El valor de ladireccion de email no se ha establecido correctamente <br>";
$error=true;
}

if (!$error) {
echo "El registro se ha realizado correctamente";
}

?>