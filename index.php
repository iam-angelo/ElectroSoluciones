<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>Electrosoluciones - Taller de Reparación de Electrónicos</title>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
          <img src="img/logo.jpeg" alt="Logo">
        </div>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="registro.php">Registrar Servicios</a></li>
          <li><a href="pendiente.php">Servicios Pendientes</a></li>
        </ul>
        <ul class="social-media">
          <li>
            <a href="https://www.facebook.com" target="https://www.facebook.com">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com" target="https://www.instagram.com">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://github.com/iam-angelo/ElectroSoluciones" target="https://github.com/iam-angelo/ElectroSoluciones">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li>
            <a href="https://www.whatsapp.com" target="https://www.whatsapp.com">
              <i class="fab fa-whatsapp"></i>
            </a>
          </li>
        </ul>
    </nav>
    <!-- Sección de bienvenida -->
    <section class="welcome">
        <div class="container">
            <h1>Bienvenido a ElectroSoluciones</h1>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <h2>Quiénes Somos?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
        </div>
        <div class="container">
            <h2>Nuestra Misión</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
        </div>
    </section>
    <section class="services">
    <h2>Servicio de reparacion de equipos</h2>
    <div class="services-container">
        <div class="service-item">
            <img src="img/TVs.jpg" alt="TVs">
            <div class="service-info">  
                <h3>TVs</h3>
                <p>$$$</p>
            </div>
        </div>
        <div class="service-item">
            <img src="img/laptops.jpg" alt="Laptops">
            <div class="service-info">
                <h3>Laptops</h3>
                <p>$$$</p>
            </div>
        </div>
        <div class="service-item">
            <img src="img/PCs.jpg" alt="PCs">
            <div class="service-info">
                <h3>PCs</h3>
                <p>$$$</p>
            </div>
        </div>
        <div class="service-item">
            <img src="img/Phones.jpg" alt="Celulares">
            <div class="service-info">
                <h3>Celulares</h3>
                <p>$$$</p>
            </div>
        </div>
        <div class="service-item">
            <img src="img/sound-system.jpg" alt="Audio">
            <div class="service-info">
                <h3>Audio</h3>
                <p>$$$</p>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <p> Proyecto Final Programacion IV - Copyright © 2024 All rights reserved. Fauricio Rojas | Angelo Chavarria | Leandro Gonzalez | Wilberth Hernandez</p>
</footer>
<script>
let lastScrollTop = 0;
let navbar = document.querySelector('.navbar');

function handleScroll() {
  const scrollTop = window.pageYOffset;
  if (scrollTop > 50) {
    navbar.classList.add('shrink');
  } else {
    navbar.classList.remove('shrink');
  }
  lastScrollTop = scrollTop;
  requestAnimationFrame(handleScroll);
}

requestAnimationFrame(handleScroll);
</script>
</body>
</html>