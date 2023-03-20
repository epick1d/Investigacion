<?php
// Conecta a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Test_2";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtiene los datos del formulario
  $username = $_POST["username"];
  $password  = $_POST["password"];
  $name = $_POST["name"];
  $last_name  = $_POST["last_name"];
  $age = $_POST["age"];

  // Inserta los datos en la base de datos
  $sql = "INSERT INTO login (nombre_usuario, contraseña, nombre, apellidos, edad)
  VALUES ('$username', '$password', '$name', '$last_name', '$age')";
  mysqli_query($conn, $sql);
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
$url = 'principal.html';
echo '<script>window.location.href = "' . $url . '";</script>';

?>