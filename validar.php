    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        <script scr="js.js"></script>
<?php
// registrar
$nombre='car';
$contraseña='car';

if (isset($_POST['ingresar'])) {  
    if (($_POST['nombreL'] == $nombre) && ($_POST['passL'] == $contraseña)){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong> Hola accediste correctamente $nombre  </strong>  You should check in on some of those fields below.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' id=close>  </button>
  </div>";  
}
else{
    echo 
    "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong> no pudiste acceder  </strong>  You should check in on some of those fields below.
    <button name=volver type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' id=close>  </button>
  </div>"; 
 

else {
header("Location: index.html");
}
?>