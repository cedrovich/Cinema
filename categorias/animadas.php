<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/categorias.css">
    <title>Document</title>
</head>
<header>
    <div class="encabezado">
        <nav class="back">
            <select id="miSelect" onchange="redireccionar()">
                <option value="">Categorias</option>
                <option value="animadas.php">Animadas</option>
                <option value="comedia.php">Comedia</option>
                <option value="romanticas.php">Romanticas</option>
                <option value="terror.php">Terror</option>
            </select>
        </nav>
        <h1>Animadas</h1>
        <nav class="back">
            <a href="../index.php">Regresar</a>
        </nav>
    </div>
</header>
<body>
    <div class="princ">
    <ul id="movie-complete-list"></ul>
            <input type="hidden" id="movie-category" value="Animadas">
            <!-- Películas se cargarán aquí -->
    </div>
</body>
<footer>

</footer>

<script>
    function redireccionar() {
  var seleccion = document.getElementById("miSelect").value;
  if (seleccion !== "") {
    window.location.href = seleccion;
  }
}
</script>
<script src="../script-category.js"></script>
</html>