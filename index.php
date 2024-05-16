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
                <a href="">Proximamente</a>
                <a href="">Preventas</a>
            </nav>
        </div>
        <div class="logo">
            <p>CINEMA</p>
        </div>
        <div class="headermenuder">
            <nav class="navbar">
                <select name="" id="">
                    <option value="">Cinema Merida</option>
                    <option value="">Cinema Ticul</option>
                    <option value="">Cinema Acanceh</option>
                    <option value="">Cinema Dzudzuncan</option>
                </select>
                <a href="">Buscar</a>
                <a href="">Iniciar Sesion</a>
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
            <a href="">
                <section class="pelis sombra">   
                    <img src="images/peli1.png" alt=""> 
                    <h3>*Nombre*</h3>   
                </section> 
            </a>  
            <a href="">
                <section class="pelis sombra">   
                    <img src="images/peli2.jpg" alt=""> 
                    <h3>*Nombre*</h3>   
                </section> 
            </a>
            <a href="">
                <section class="pelis sombra">
                    <img src="images/peli3.jpg" alt="">    
                    <h3>*Nombre*</h3>   
                </section> 
            </a>
            <a href="">
                <section class="pelis sombra">   
                    <img src="images/peli4.jpg" alt=""> 
                    <h3>*Nombre*</h3>   
                </section>  
            </a>
        </div>
        <div class="peliculas2">
            <a href="">
                <section class="pelis sombra">   
                    <img src="images/peli5.jpg" alt=""> 
                    <h3>*Nombre*</h3>   
                </section>
            </a>   
            <a href="">
                <section class="pelis sombra">   
                    <img src="images/peli6.jpg" alt=""> 
                    <h3>*Nombre*</h3>   
                </section> 
            </a>
            <a href="">
                <section class="pelis sombra">   
                    <img src="images/peli7.jpg" alt=""> 
                    <h3>*Nombre*</h3>   
                </section> 
            </a>
          <a href="">
            <section class="pelis sombra">   
                <img src="images/peli8.jpg" alt=""> 
                <h3>*Nombre*</h3>   
            </section>  
          </a>
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js">
    </script>
    <script class="carru">
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto', // Muestra tantas imágenes como quepan en el contenedor
        spaceBetween: 20, // Espacio entre las imágenes
        loop: true, // Activa el modo bucle
        autoplay: {
        delay: 5000, // Intervalo de cambio entre imágenes en milisegundos
        disableOnInteraction: false, // Permite la interacción del usuario (por ejemplo, hacer clic en una imagen para detener el carrusel)
    },
  });
    </script>
</html>