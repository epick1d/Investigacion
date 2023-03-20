<?php

// Conectarse a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Test_2";

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
// Verificar si se recibió un envío del formulario

  // Obtener las respuestas del formulario
  $respuesta1 = $_POST['respuesta1'];
  $respuesta2 = $_POST['respuesta2'];
  $respuesta3 = $_POST['respuesta3'];
  $respuesta4 = $_POST['respuesta4'];
  $respuesta5 = $_POST['respuesta5'];
  $respuesta6 = $_POST['respuesta6'];
  $respuesta7 = $_POST['respuesta7'];
  $respuesta8 = $_POST['respuesta8'];
  $respuesta9 = $_POST['respuesta9'];
  $respuesta10 = $_POST['respuesta10'];

 
  // Insertar las respuestas en la tabla
  $sql = "INSERT INTO respuestas (respuesta1, respuesta2, respuesta3, respuesta4, respuesta5, respuesta6, respuesta7, respuesta8, respuesta9, respuesta10) 
          VALUES ('$respuesta1','$respuesta2', '$respuesta3', '$respuesta4', '$respuesta5','$respuesta6', '$respuesta7' ,'$respuesta8','$respuesta9', '$respuesta10')";
 if (mysqli_query($conn, $sql)) {
  header('Location: confirmacion.php');
exit;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
