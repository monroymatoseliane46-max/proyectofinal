<!DOCTYPE html>
<html>
    <head>
        <title>Listado</title>
        </head>

    <body>

        <div class="contenedor">
            <h1>Listado de Registros</h1>

            <?php
               $conexion = mysqli_connect("sql302.infinityfree.com", "if0_40475212", "kim08011", "if0_40475212_pruebaeliane");
            if(!$conexion){
                echo "Error: no se pudo conectar a MySQL.";
                exit;
            }

            $resultado = mysqli_query($conexion, "SELECT id, nombre, comentario FROM china1");
            ?>

            <table id="tabla">
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>comentario</th>
                </tr>

                <?php
                while($fila = $resultado->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" . $fila['id'] . "</td>";
                    echo "<td>" . $fila['nombre'] . "</td>";
                    echo "<td>" . $fila['comentario'] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($conexion);
                ?>
            </table>

            <a href="formulario.php">Agregar registro nuevo</a>
            <br>
            <a href="index.html">regresar al interactivo</a>
        </div>

    </body>
</html>