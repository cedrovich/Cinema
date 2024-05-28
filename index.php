<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Link de librerias para el Carrusel -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title>Cinema</title>
</head>
<header>
    <div class="nav_principal">
        <div class="headermenuizq">
            <nav class="navbar">
                <a href="addmovies.php">Peliculas</a>
            </nav>
        </div>
        <div class="logo">
            <p>CINEMA</p>
        </div>
        <div class="headermenuder">
            <nav class="navbar">

                <!-- Funcionalidad del Script de Redireccionamiento -->
                <select id="miSelect" onchange="redireccionar()">
                    <option value="">Categorias</option>
                    <option value="animadas.php">Animadas</option>
                    <option value="comedia.php">Comedia</option>
                    <option value="romanticas.php">Romanticas</option>
                    <option value="terror.php">Terror</option>
                </select>
            </nav>
        </div>
    </div>
</header>
<body>
    <div class="princ">
        <div class="prom_princ">

                <!-- Contenedor de imagenes del Carrusel -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><a href="categorias/romanticas.php" ><img class="photo" src="uploads/2024-05-28-unnamed.jpg" alt="Imagen 1"></a></div>
                      <div class="swiper-slide"><a href="categorias/animada.php" ><img class="photo" src="uploads/2024-05-27-45455-838532-20240313090657.jpg" alt="Imagen 2"></a></div>
                      <div class="swiper-slide"><a href="categorias/comedia.php" ><img class="photo" src="uploads/2024-05-27-image.jpg" alt="Imagen 1"></a></div>
                      <div class="swiper-slide"><a href="categorias/romanticas" ><img class="photo" src="uploads/2024-05-27-images (1).jpg" alt="Imagen 2"></a></div>
                      <div class="swiper-slide"><a href="categorias/terror.php" ><img class="photo" src="uploads/2024-05-27-Sinister-578046633-large.jpg" alt="Imagen 1"></a></div>
                      <div class="swiper-slide"><a href="categorias/comedia.php" ><img class="photo" src="uploads/2024-05-27-son.jpg" alt=""></a></div>
                      <div class="swiper-slide"><a href="categorias/terror.php" ><img class="photo" src="uploads/2024-05-28-resena-el-conjuro-the-conjuring.jpg" alt="Imagen 1"></a></div>
                    </div>
                </div>
        </div>
        <div class="peliculas1">
            <!-- Crea mi Ul para desprelegar las peliculas de mi Base de Datos al Front -->
            <ul id="elementId"></ul>
        </div>
    </div>
</body>
<footer class="footer">
    <p>Desarrollo de Back End - Edrick León
</footer>

<!-- Script para redireccionarme a las paginas de las categorias -->
<script>
    function myFunction() {
        window.location.href="http://localhost/cinema"
    }
</script>

<!-- Link para poder usar el script de Carrusel de Fotos -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Script para el funcionamiento del Carrusel de Fotos -->
<script class="carru">
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        loop: true,
        autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
  });

//Funcion para hacer el redireccionamiento de vistas
  function redireccionar() {
  var seleccion = document.getElementById("miSelect").value;
  if (seleccion !== "") {
    window.location.href = "categorias/" + seleccion;
  }
}
</script>

<!-- Link al archivo de lectura de la API -->
<script src="script.js"></script>
</html>
