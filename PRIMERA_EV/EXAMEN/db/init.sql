-- init.sql

-- Crear la tabla 'registros'
CREATE TABLE IF NOT EXISTS registros (
    nombre VARCHAR(255) NOT NULL PRIMARY KEY,
    edad INT NOT NULL,
    estilo VARCHAR(255) NOT NULL
);

-- Insertar registros iniciales
INSERT INTO registros (nombre, edad, estilo) VALUES
('Roberto Martinez', 22, "Rock 'nd Roll"),
('Carlos Batracio', 26, 'Bachata');
