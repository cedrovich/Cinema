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
            <form class="formulario">
                <fieldset>
                    <div class="contenedor-campos">
                        <div class="campo">
                            <label for="name">
                                Nombre
                            </label>
                            <input type="text" name="name" id="name" placeholder="Nombre de la pelicula"> 
                        </div>
                        <div class="campo">
                            <label for="phone">
                                Categoria
                            </label>
                            <select id="miSelect" onchange="redireccionar()">
                                <option value="">Categorias</option>
                                <option value="">Animadas</option>
                                <option value="">Comedia</option>
                                <option value="">Romanticas</option>
                                <option value="">Terror</option>
                            </select>
                        </div>
                        <div class="campo">
                            <label for="phone">
                                Sinopsis
                            </label>
                            <input type="text" name="sinop" id="sinop" placeholder="Añade la sinopsis">
                        </div>
                        <div class="campo">
                            <label for="email">
                                Poster
                            </label>
                            <input type="file" name="file" id="file" placeholder="Sube tu iamgen">
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