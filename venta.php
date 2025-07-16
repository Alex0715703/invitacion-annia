<?php
/*conexion en casa $nombredelservidor = "127.0.0.1:3306" ;*/
$nombredelservidor = "127.0.0.1:3306" ;
$database = "botoncobra" ;
$usuario = "root" ;
$clave = "";

//crear conexion
$conn = mysqli_connect ( $nombredelservidor, $usuario, $clave, $database ) ;
//verificar conexion
if ( !$conn ) {
    died ( "Error de conexion: " . mysqli_connect_error()) ; 
}
function procesarCompra($producto, $precio) {
    // Simula una acción: mostrar datos
    echo "<h2>Gracias no tomaremos en cuenta tu asistencia</h2>";
    echo "<p>Pr$precio</p>";

    // También podrías guardar en archivo, base de datos, o enviar correo
    /*
    $registro = "Compra: $producto - Precio: $precio\n";
    file_put_contents("compras.txt", $registro, FILE_APPEND);
    */
}

// Verifica si llegaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $producto = $_POST['producto'] ?? '';
    $precio = $_POST['precio'] ?? '';

    procesarCompra(htmlspecialchars($producto), htmlspecialchars($precio));
} else {
    echo "No se recibió la compra correctamente.";
}
?>