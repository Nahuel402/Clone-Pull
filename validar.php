<?php
$Name="";
$Password="";

if(isset($_POST['ingresarR'])){
    $Name=($_POST['ingresarR']);
    $Password=($_POST[])
}


if (isset($_POST['ingresar'])) {  
    if (($_POST['nombre']== $Name) && ($_POST['pass']== $Password))
    echo"<h1>Has podido entrar</h1>";
else{
echo "no te hemos permitido acceder, pues no eres el admin";
}
}
else {
header("Location: index.html");
}
?>