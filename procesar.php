<?php
//se procesan los datos del formulario
$nombre_post = $_POST["camponombre"];
$comentario_post = $_POST["campocomentario"];


//se invoca la funcion para conectase a la base de datos MySQL
$conexion = mysqli_connect("sql302.infinityfree.com", "if0_40475212", "kim08011", "if0_40475212_pruebaeliane");

//si no se logra la conexion se imprime los errores la conexion y aborta el script php
if(!$conexion){
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuracion:". mysqli_connect_errno();
    echo "errno de depuracion:". mysqli_connect_errno();
    exit;
}

//se realiza la consulta a la tabla de personas con un SELECT
$sql = "INSERT INTO china1(nombre, comentario) values ('$nombre_post','$comentario_post')";
if(mysqli_query($conexion, $sql)){
    echo "registro insertado exitosamente";
}else{
    echo "Error: no se pudo realizar el registro" . "<br>" . mysqli_error($conexion);
}
?>
<!--Inicia la plantilla HTML con código PHP intercalado-->
<h1>¡felicidades <?php echo $nombre_post; ?>!</h1>
<p>Te has registrado exitosamente, estos son tus datos:</p>
<p>nombre: <?php echo $nombre_post;?></p>
<p>comentario: <?php echo $comentario_post;?></p>

<a href="listado.php"target="_self">Ir al listado </a>

<?