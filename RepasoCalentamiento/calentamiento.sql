-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS calentamiento;

-- Seleccionar la base de datos recién creada
USE calentamiento;

-- Crear la tabla "registros"
CREATE TABLE IF NOT EXISTS registros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellidos VARCHAR(255) NOT NULL
);

-- Insertar un registro en la tabla "registros"
INSERT INTO registros (nombre, apellidos) VALUES ('Roberto', 'Martinez Avendaño');