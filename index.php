<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
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
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img class="photo" src="images/promo1.jpeg" alt="Imagen 1"></div>
                      <div class="swiper-slide"><img class="photo" src="images/promo2.jpeg" alt="Imagen 2"></div>
                      <div class="swiper-slide"><img class="photo" src="images/promo3.jpeg" alt="Imagen 1"></div>
                      <div class="swiper-slide"><img class="photo" src="images/promo4.jpeg" alt="Imagen 2"></div>
                      <div class="swiper-slide"><img class="photo" src="images/promo5.jpeg" alt="Imagen 1"></div>
                      <div class="swiper-slide"><img class="photo" src="images/promo7.jpeg" alt="Imagen 2"></div>
                      <div class="swiper-slide"><img class="photo" src="images/promo8.jpeg" alt="Imagen 1"></div>
                    </div>
                </div>
        </div>
        <div class="peliculas1">
            <ul id="elementId"></ul>
        </div>
    </div>
</body>
<footer class="footer">
</footer>

<script>
    function myFunction() {
        window.location.href="http://localhost/cinema"
    }
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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

  function redireccionar() {
  var seleccion = document.getElementById("miSelect").value;
  if (seleccion !== "") {
    window.location.href = "categorias/" + seleccion;
  }
}
</script>
<script src="script.js"></script>
</html>
