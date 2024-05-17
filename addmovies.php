<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/addmoviestyle.css">
    <title>Añadir Peliculas</title>
</head>
<header>
    <div class="encabezado">
        <a href=""></a>
        <h1>Añadir peliculas nuevas</h1>
        <nav class="back">
            <a href="index.php">Regresar</a>
        </nav>
    </div>
</header>
<body>
    <div class="formu">
        <div class="formu1">
            <h2>Informacion de la pelicula</h2>
            <form class="formulario" action="process_form.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <div class="contenedor-campos">
                        <div class="campo">
                            <label for="nombre">
                                Nombre
                            </label>
                            <input type="text" name="name" id="name" placeholder="Nombre de la pelicula">
                        </div>
                        <div class="campo">
                            <label for="categoria">
                                Categoria
                            </label>
                            <select name="category">
                                <option value="">Categorias</option>
                                <option value="Animadas">Animadas</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Romanticas">Romanticas</option>
                                <option value="Terror">Terror</option>
                            </select>
                        </div>
                        <div class="campo">
                            <label for="poster">
                                Poster
                            </label>
                            <input type="file" name="file" id="file" placeholder="Sube tu imagen">
                        </div>
                    </div>
                    <div class="buttom">
                        <input type="submit" value="Añadir"/>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>
<footer>

</footer>
</html>