<?php
sleep(20);
$host = "database";
$username = "root";
$password = "root";
$dbname = "romaav";

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Realizar la consulta
$sql = "SELECT nombre, edad, estilo FROM registros";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Mi Padreada PHP</title>
</head>
<body>

    <h1>Padreacion de Registros</h1>

    <?php
    
    // Mostrar resultados en una tabla
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Estilo</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["edad"]. "</td><td>" . $row["nombre"]. "</td><td>" . $row["estilo"]. "</td></tr>";
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
