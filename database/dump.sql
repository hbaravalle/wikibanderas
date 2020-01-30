create database banderas;
use banderas;

create table continentes (
	id INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(40),
    PRIMARY KEY id
);


create table paises (
    id INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    id_continente INT UNSIGNED,
    PRIMARY KEY id,
    FOREIGN KEY id_continente REFERENCES id(continentes)
);
