

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Esmeralda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <li><a href="#" class="nav-link">HOTEL ESMERALDA</a></li>

            <ul class="menu">              
                <li><a href="index.html" class="nav-link">Inicio</a></li>
                <li><a href="room/rooms.html" class="nav-link">Habitaciones</a></li>
                <li><a href="#" class="nav-link">Contactanos</a></li>
                <li><a href="inicio.php" class="nav-link">Registro</a></li>
                <li><i class="fa-regular fa-user"></i></li>
            </ul>
           
        </div>
    </nav>

    <section class="home" >
        <div class="head_container">
          <div class="box">
            <div class="text">
              <h1>Hotel Esmeralda</h1>
              <p>Vive una experiencia <span class="typing"></span></p>           
            </div>
          </div>
          <div class="image">
            <img src="imagenes/comedor.jpg" class="slide">
          </div>
          <div class="image_item">
            <img src="imagenes/comedor.jpg" alt="" class="slide active" onclick="img('imagenes/comedor.jpg')">
            <img src="imagenes/imagen1.gif" alt="" class="slide" onclick="img('imagenes/imagen1.gif')">
            <img src="imagenes/imagen3.jpg" alt="" class="slide" onclick="img('imagenes/imagen3.jpg')">
            <img src="imagenes/imagen4.gif" alt="" class="slide" onclick="img('imagenes/imagen4.gif')">
          </div>
        </div>      
      </section>

    <!-- about section start -->
      <section class="about top" id="about">
        <div class="container flex">
          <div class="left">
            <div class="img">
              <img src="image/a1.jpg" alt="" class="image1">
            </div>
          </div>
          <div class="right">
            <div class="heading">
              <h5>Una experiencia de altura</h5>
              <h2>Bienvenido al hotel Esmeralda</h2>
              <p class="par">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <p class="par">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <button class="btn1">SOBRE NOSOTROS</button>
            </div>
          </div>
        </div>
      </section>



    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Servicios</h2>

            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="imagenes/serHabitacion.jpeg" alt="">
                        <div class="text">Servicio a la habitacion</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="imagenes/wifi.jpg" alt="">
                        <div class="text">Wifi <br> ilimitado</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="imagenes/desayuno.jpg">
                        <div class="text">Desayuno continental</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="imagenes/frigobar.jpg" alt="">
                        <div class="text">Frigobar con productos</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="imagenes/tv.jpg" alt="">
                        <div class="text">Aplicacion TV</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="gallary mtop " id="gallary">
        <div class="container">
          <div class="heading_top flex1">
            <div class="heading">
              <h2>Galeria</h2>
            </div>
            
          </div>
    
          <div class="owl-carousel owl-theme">
            <div class="item">
              <img src="image/g1.jpg" alt="">
            </div>
            <div class="item">
              <img src="image/g2.jpg" alt="">
            </div>
            <div class="item">
              <img src="image/g3.jpg" alt="">
            </div>
            <div class="item">
              <img src="image/g4.jpg" alt="">
            </div>
            <div class="item">
              <img src="image/g5.jpg" alt="">
            </div>
            <div class="item">
              <img src="image/g6.jpg" alt="">
            </div>
            <div class="item">
              <img src="image/g7.jpg" alt="">
            </div>
            <div class="item">
              <img src="image/g8.jpg" alt="">
            </div>
          </div>
          <center>
            <div class="button">
                <button class="btn1">IR A GALERIA</button>
              </div>
          </center>
        </div>
      </section>

    <!-- footer section start -->
    <footer>
        <div class="container grid top">
            <div class="box">        
              <p>Metodos de pagos aceptados</p>            
                <img src="https://img.icons8.com/color/48/000000/visa.png" />
                <img src="https://img.icons8.com/color/48/000000/mastercard.png" />              
            </div>
      
            <div class="box">
              <h3>Direccion</h3>  
              <ul>
                <li>Avenida Franco Valle Nro. 76
                    Entre Calle 3 y Calle 4, El Alto.</li>
              </ul>
            </div>
      
            <div class="box">
              <ul>
                <li>Ubicado en un barrio comercial cercano al aeropuerto y la terminal de buses de la ciudad de El Alto, un hotel tres estrellas a su alcance.</li>
              </ul>
            </div>
      
            <div class="box">
              <h3>Comuniquese con nosotros</h3>   
              <ul>
                <li><i class="far fa-envelope"></i> info@esmeralda-hotel.com</li>
                <li><i class="far fa-phone-alt"></i> +591.63080099</li>
              </ul>
            </div>
          </div>
        </footer>

    <script src="script.js"></script>
</body>
</html>