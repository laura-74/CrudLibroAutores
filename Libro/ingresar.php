<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingresar Libro</title>
    <link rel="stylesheet" href="/css/ingresar_libro.css">
    <link rel="shortcut icon" href="/imagenes/BOOK.png" type="image/x-icon">

</head>

<body>
    <header class="header">
        <a class="a_volver" href="/index.php">Volver</a>
        <div>
            <p class="p_header">Ingresar la información libro</p>
        </div>
    </header>
    <main>

        <section class="section_div">
            <form action="/Libro/administrar_libro.php" method="post">
                <div class="nombre_categoria_div">
                    <label>Nombre Libro</label>
                    <input class="input_cambio_nombre" type="text" name="nombre" placeholder="Ingrese el nombre del libro..." required>
                </div>
                <div class="nombre_categoria_div">
                    <label for="categoria">Categoria del libro</label>
                    <select class="input_cambio_nombre" name="categoria" required>
                        <option value="">Seleccione...</option>
                        <option value="Terror">Terror</option>
                        <option value="Ficcion">Ficción</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Romance">Romance</option>
                        <option value="Fantasia">Fantasía</option>
                        <option value="Misterio">Misterio</option>
                        <option value="Biografia">Biografía</option>
                        <option value="Historia">Historia</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <input type="hidden" name="insertar" value="insertar">
                <div>
                    <input type="submit" value="Guardar">
                </div>
            </form>
        </section>
    </main>
</body>

</html>