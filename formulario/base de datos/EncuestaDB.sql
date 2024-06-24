-- Crear la base de datos
CREATE DATABASE EncuestaDB;

-- Usar la base de datos creada
USE EncuestaDB;

-- Crear la tabla para almacenar la información del formulario
CREATE TABLE Encuesta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    email VARCHAR(100) NOT NULL
);