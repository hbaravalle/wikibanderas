create database banderas;
use banderas;

create table continentes (
	id INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(40),
    PRIMARY KEY (id)
);

create table paises (
    id INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    poblacion INT UNSIGNED NOT NULL,
    continente_id INT UNSIGNED,
    bandera VARCHAR(50) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (continente_id) REFERENCES continentes(id)
);