<!DOCTYPE html>
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
          <img src="images/logo.jpeg" alt="Logo">
        </div>
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="registro.php">Registrar Servicios</a></li>
          <li><a href="pendiente.php">Servicios Pendientes</a></li>
        </ul>
        <ul class="social-media">
          <li>
            <a href="https://www.facebook.com" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="https://github.com/iam-angelo/ElectroSoluciones" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li>
            <a href="https://www.whatsapp.com" target="_blank">
              <i class="fab fa-whatsapp"></i>
            </a>
          </li>
        </ul>
    </nav>
    <form>
  <div class="form-container">
    <div class="client-info">
      <!-- Client information -->
      <h2>Información del Cliente</h2>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Escriba el Nombre"><br><br>
      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="email" placeholder="correo@dominio.com"><br><br>
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" placeholder="0000-0000"><br><br>
      <label for="direccion_exacta">Direccion exacta:</label>
      <textarea id="direccion_exacta" name="direccion_exacta"placeholder="Calle, Avenida. Direccion Exacta" ></textarea><br><br>
    </div>
    <div class="device-info">
      <!-- Device information -->
      <h2>Información del Dispositivo</h2>
      <label for="clase_dispositivo">Clase de dispositivo:</label>
      <select id="clase_dispositivo" name="clase_dispositivo">
        <option value="TV">TV</option>
        <option value="Laptop">Laptop</option>
        <option value="PC">PC</option>
        <option value="Celular">Celular</option>
        <option value="Audio">Audio</option>
      </select><br><br>
      <label for="numero_serie">Número de serie:</label>
      <input type="text" id="numero_serie" name="numero_serie" placeholder="Escriba una Serie"><br><br>
      <label for="modelo">Modelo:</label>
      <input type="text" id="modelo" name="modelo" placeholder="Escriba un Modelo"><br><br>
      <label for="reporte_problema">Reporte del problema:</label>
      <textarea id="reporte_problema" name="reporte_problema" placeholder="Descripcion del Problema e informacion"></textarea><br><br>
    </div>
  </div>
  <button type="submit">Registrar</button>
</form>
    <script>
        document.getElementById('express').addEventListener('change', function () {
            var addressLabel = document.getElementById('address-label');
            var addressInput = document.getElementById('address');
            if (this.checked) {
                addressLabel.style.display = 'block';
                addressInput.style.display = 'block';
            } else {
                addressLabel.style.display = 'none';
                addressInput.style.display = 'none';
            }
        });
    </script>
 
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
