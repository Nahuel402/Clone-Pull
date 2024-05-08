<?php
// registrar
$nombre='car';
$contraseña='car';

if (isset($_POST['ingresar'])) {  
    if (($_POST['nombreL'] == $nombre) && ($_POST['passL'] == $contraseña))
    echo"<h1>Has podido entrar</h1>";
else{
echo "no te hemos permitido acceder, pues no eres el admin";
}
}
else {
header("Location: index.html");
}
?>