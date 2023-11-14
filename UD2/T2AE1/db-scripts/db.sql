-- init.sql

-- Crear la tabla 'registros'
CREATE TABLE IF NOT EXISTS registros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

-- Insertar registros iniciales
INSERT INTO registros (id, nombre) VALUES
(1, 'Roberto'),
(2, 'Martinez');
