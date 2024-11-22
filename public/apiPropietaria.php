<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

// Configuración de la base de datos a través de variables de entorno

$host = "localhost";
$usuario = "root";
$contrasena = "root";
$base_datos = "techxpress";

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// Obtener el nombre del producto desde la URL (GET)
$modelo = $_GET['modelo'];

// Validar el nombre del producto para evitar inyección de SQL (esto es básico, considera medidas más robustas en un entorno de producción)
$modelo = $conexion->real_escape_string($modelo);

// Consulta a la base de datos con el nombre del producto
$sql = "SELECT * FROM productos WHERE modelo like '%$modelo%'";
$resultado = $conexion->query($sql);

// Verificar si la consulta fue exitosa
if (!$resultado) {
    die("Error en la consulta: " . $conexion->error);
}

// Crear un array para almacenar los resultados
$resultados = array();

// Iterar sobre los resultados y agregarlos al array
while ($fila = $resultado->fetch_assoc()) {
    $resultados[] = $fila;
}

// Cerrar la conexión a la base de datos
$conexion->close();

// Convertir el array a formato JSON

$json_resultados = '{"items":'. json_encode($resultados) .'}';

// Imprimir el JSON
echo $json_resultados;

?>
