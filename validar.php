<?php
$Name="Choco";
$Password="1234";
if (isset($_POST['ingresar'])) {  
    if (($_POST['nombre']== $Name)&& ($_POST['pass']== $Password))
    echo"<h1>Has podido entrar</h1>";
else{
echo "no te hemos permitido acceder, pues no eres el admin";
}
}
else {
header("Location: index.html");
}
?>