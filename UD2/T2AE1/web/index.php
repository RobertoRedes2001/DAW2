<?php
$host = "172.27.0.3";  // Puede ser "localhost" si se ejecuta desde el mismo contenedor
$username = "root";
$password = "root";
$dbname = "evaluable";

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Realizar la consulta
$sql = "SELECT id, nombre FROM registros";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mi Pagina PHP</title>
</head>
<body>

    <h1>Informacion de Registros</h1>

    <?php
    // Mostrar resultados en una tabla
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"]. "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No hay registros en la base de datos.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>

</body>
</html>
