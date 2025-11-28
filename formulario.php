<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Personas</title>
    <style>
        /* Estilo general de la página */
        body {
            font-family: Arial, sans-serif;
            background: url('imagen/terror.jpg'); 
            background-size: cover;
            margin: 0;
            padding: 0;
            color: white;
            text-align: center;
        }

        /* Contenedor del formulario */
        .form-container {
            background-color: rgba(128, 0, 0, 0.7); /* Fondo con opacidad para que se vea el fondo pero no opaque el texto */
            width: 50%;
            margin: 100px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        h3 {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        p {
            font-size: 18px;
            margin: 15px 0;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.7);
            color: #800000;
        }

        input[type="submit"] {
            width: 60%;
            padding: 12px;
            font-size: 18px;
            background-color: #800000;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #b30000;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h3>Ingresa tus datos:</h3>
        <form method="post" action="procesar.php">
            <p>Nombre: <input name="camponombre" type="text" /></p>
            <p>Comentario: <input name="campocomentario" type="text" /></p>
            <p><input id="btEnviar" type="submit" value="Enviar" /></p>
        </form>
    </div>

</body>
</html>
