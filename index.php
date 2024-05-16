<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
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
            <p>*aqui van imagenes de promociones*</p>
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

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href="http://localhost/cinema"
        }
    </script>

</html>