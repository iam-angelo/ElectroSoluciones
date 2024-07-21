<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Servicio - Electrosoluciones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<head>
    <meta charset="UTF-8">
    <title>Electrosoluciones - Taller de Reparación de Electrónicos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Te damos la bienvenida a Electrosoluciones</h1>
        <p>Tu taller de confianza para la reparación de electrónicos</p>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="services.php">Servicios</a></li>
            <li><a href="register.php">Registrar Servicio</a></li>
            <li><a href="pending.php">Servicios Pendientes</a></li>
        </ul>
    </nav>
    <h2>Registrar Servicio</h2>
    <form action="submit_service.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="device">Dispositivo:</label>
        <input type="text" id="device" name="device" required>
        
        <label for="service">Servicio:</label>
        <select id="service" name="service" required>
            <option value="tv">Reparación de TV</option>
            <option value="computer">Reparación de Computadoras</option>
            <option value="audio">Reparación de Equipos de Audio</option>
            <option value="video">Reparación de Equipos de Video</option>
        </select>
        
        <label for="express">Servicio Express:</label>
        <input type="checkbox" id="express" name="express">
        
        <label for="address" id="address-label" style="display:none;">Dirección:</label>
        <input type="text" id="address" name="address" style="display:none;">
        
        <button type="submit">Registrar</button>
    </form>
    <footer>
        <p> Programacion IV - Proyecto Final <br> Fauricio Rojas - Angelo Chavarria - Leandro Gonzalez - Wilberth Hernandez</p>
    </footer>
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
</body>
</html>
