<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Hola Mundo en PHP</title>

<style>
body{
    margin:0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg,#4facfe,#00f2fe);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.tarjeta{
    background:white;
    padding:40px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
    text-align:center;
    width:400px;
}

h1{
    color:#333;
}

p{
    color:#666;
    font-size:18px;
}

img{
    margin-top:20px;
    width:100%;
    border-radius:10px;
}
</style>

</head>
<body>

<div class="tarjeta">

<?php
$nombre = "Tu Nombre Aquí";
echo "<h1>Hola mundo 👋</h1>";
echo "<p>Soy <strong>$nombre</strong></p>";
?>

<p>Imagen creada con Inteligencia Artificial</p>

<img src="descarga.jpg" alt="Imagen creada con IA">

</div>

</body>
</html>