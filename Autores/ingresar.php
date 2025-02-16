<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Autor</title>
    <link rel="stylesheet" href="/css/actualizar.css">
    <link rel="shortcut icon" href="/imagenes/BOOK.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <a class="a_volver" href="/index.php">Volver</a>
        <div>
            <p class="p_header">Ingresar datos del autor</p>
        </div>
    </header>
    <main>
        <div class="form_div">
            <form action="/Autores/administrar_autor.php" method="post">
                <div>
                    <p>Nombre</p>
                    <input class="input_cambio_nombre" type="text" name="nombre" placeholder="Ingrese el nombre..." required>
                </div>
                <div>
                    <p>Apellido</p>
                    <input class="input_cambio_nombre" type="text" name="apellido" placeholder="Ingrese el apellido..." required>
                </div>
                <div>
                    <p>Dirección</p>
                    <input class="input_cambio_nombre" type="text" name="direccion" placeholder="Ingrese la dirección..." required>
                </div>
                <div>
                    <p>Teléfono</p>
                    <input class="input_cambio_nombre" type="text" name="telefono" placeholder="Ingrese el teléfono..." required>
                </div>
                <div>
                    <p>Email</p>
                    <input class="input_cambio_nombre" type="email" name="email" placeholder="Ingrese el email..." required>
                </div>
                <div>
                    <p>Ciudad</p>
                    <input class="input_cambio_nombre" type="text" name="ciudad" placeholder="Ingrese la ciudad..." required>
                </div>
                <input type="hidden" name="insertar" value="insertar">
                <input type="submit" value="Guardar">
            </form>
        </div>
    </main>

</body>
<footer>
        
</footer>

</html>