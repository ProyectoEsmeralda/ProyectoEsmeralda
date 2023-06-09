

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
            <li><a href="#"><img src="image/logo.svg" class="brand"></a></li>
            <li><a href="#" class="nav-link">HOTEL ESMERALDA</a></li>

            <ul class="menu">              
                <li><a href="index.html" class="nav-link">Inicio</a></li>
                <li><a href="room/rooms.html" class="nav-link">Habitaciones</a></li>
                <li><a href="#" class="nav-link">Contactanos</a></li>
                <li><a href="#" id="login-btn2">Registro</a></li>
                <li><a href="#" id="login-btn">Iniciar sesión</a></li>
                
            </ul>
           
        </div>
    </nav>
    
    <div id="login-form">
      <h2>Iniciar sesión</h2>
      <form action="servidor/login/logear.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" placeholder="Usuario" required autofocus>
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
        <input type="submit" value="Iniciar sesión">
      </form>
    </div>
    
<!----------------------->
    <div id="login-form2">
          <h2>Registrate</h2>
          <form action = "servidor/registro/registrar.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required autofocus>
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password"placeholder="Contraseña" required>
            <input type="submit" value="Registrarse">
          </form>
    </div>
<!----------------------->


<style>
  #login-form {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 40px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
  z-index: 999;
  width: 400px;
  height: 400px;
  border-radius: 10px;
  background: linear-gradient(to bottom right, #fff, #f1f1f1);
  border: 1px solid #ccc;
}

#login-form h2 {
  margin-top: 0;
  font-size: 24px;
  text-align: center;
}

#login-form label {
  display: block;
  margin-bottom: 10px;
  font-size: 16px;
}

#login-form input[type="text"],
#login-form input[type="password"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

#login-form input[type="submit"] {
  background-color: #0a6761; 
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  display: block;
  margin: 0 auto;
}
  </style>
  <style>
 #login-form2 {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 40px;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
  z-index: 999;
  width: 400px;
  height: 400px;
  border-radius: 10px;
  background: linear-gradient(to bottom right, #fff, #f1f1f1);
  border: 1px solid #ccc;
}

#login-form2 h2 {
  margin-top: 0;
  font-size: 24px;
  text-align: center;
}

#login-form2 label {
  display: block;
  margin-bottom: 10px;
  font-size: 16px;
}

#login-form2 input[type="text"],
#login-form2 input[type="password"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

#login-form2 input[type="submit"] {
  background-color: #0a6761; 
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  display: block;
  margin: 0 auto;
}
    </style>
     <!--script form registro-->
  <script>
      const loginBtn = document.getElementById('login-btn');
      const loginForm = document.getElementById('login-form');

      // Mostrar el formulario de inicio de sesión cuando se hace clic en el botón de inicio de sesión
      loginBtn.addEventListener('click', function() {
        loginForm.style.display = 'block';
      });

      document.addEventListener('click', function(event) {
        // Comprobar si el evento de clic se ha originado dentro del formulario de inicio de sesión
        const isClickInsideForm = loginForm.contains(event.target);
        // Si el clic se ha realizado fuera del formulario, ocultarlo
        if (!isClickInsideForm && event.target !== loginBtn) {
          loginForm.style.display = 'none';
        }
      });
    </script>

    <!--script form registro-->
    <script>
            const loginBtn2 = document.getElementById('login-btn2');
      const loginForm2 = document.getElementById('login-form2');

      // Mostrar el formulario de inicio de sesión cuando se hace clic en el botón de inicio de sesión
      loginBtn2.addEventListener('click', function() {
        loginForm2.style.display = 'block';
      });

      document.addEventListener('click', function(event) {
        // Comprobar si el evento de clic se ha originado dentro del formulario de inicio de sesión
        const isClickInsideForm = loginForm2.contains(event.target);
        // Si el clic se ha realizado fuera del formulario, ocultarlo
        if (!isClickInsideForm && event.target !== loginBtn2) {
          loginForm2.style.display = 'none';
        }
      });
    </script>

    

    
    
    <section class="home" >
        <div class="head_container">
          <div class="box">
            <div class="text">
              <h1 class="text-1">Hotel Esmeralda</h1>
              <p>Vive una experiencia <span class="typing"></span></p>           
            </div>
          </div>
          <div class="image">
            <img src="imagenes/room.jpg" class="slide">
          </div>
          <div class="image_item">
            <!-- <img src="imagenes/comedor.jpg" alt="" class="slide active" onclick="img('imagenes/comedor.jpg')">
            <img src="imagenes/imagen1.gif" alt="" class="slide" onclick="img('imagenes/imagen1.gif')">
            <img src="imagenes/imagen3.jpg" alt="" class="slide" onclick="img('imagenes/imagen3.jpg')">
            <img src="imagenes/imagen4.gif" alt="" class="slide" onclick="img('imagenes/imagen4.gif')"> -->
          </div>
        </div>      
      </section>

    <!-- about section start -->
      <section class="about top" id="about">
        <div class="container flex">
          <div class="left">
            <div class="img">
              <img src="imagenes/comedor.jpg" alt="" class="image1">
            </div>
          </div>
          <div class="right">
            <div class="heading">
              <h5>Una experiencia de altura</h5>
              <h2>¡Bienvenid@ al hotel Esmeralda!</h2>
              <p class="par">Nuestro hotel cuenta con habitaciones cómodas con altos estándares en el cuidado de la atención a nuestros huéspedes. Además de estar estratégicamente ubicados para su traslado tanto al aeropuerto internacional de El Alto así como hacia la terminal de buses de El Alto evitando posibles complicaciones de retraso en su viaje.</p>
              <p class="par">Nuestras habitaciones cuentan con diferentes comodidades desde modernos yacuzzis, frigobares, baños privados e incluso nuestro propio servicio de contenido streaming con contenido seleccionado para su disfrute.</p>
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
              <img src="imagenes/imagen1.gif" alt="">
            </div>
            <div class="item">
              <img src="imagenes/room.jpg" alt="">
            </div>
            <div class="item">
              <img src="imagenes/imagen3.jpg" alt="">
            </div>
            <div class="item">
              <img src="imagenes/prev.png" alt="">
            </div>
            <div class="item">
              <img src="imagenes/comedor.jpg" alt="">
            </div>
            <div class="item">
              <img src="imagenes/room.jpg" alt="">
            </div>
            <div class="item">
              <img src="imagenes/descarga (2).jpg" alt="">
            </div>
            <div class="item">
              <img src="imagenes/imagen.jpg" alt="">
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
                <li><i class="far fa-phone-alt"></i> +591 63080099</li>
              </ul>
            </div>
          </div>
        </footer>

    <script src="script.js"></script>
</body>
</html>