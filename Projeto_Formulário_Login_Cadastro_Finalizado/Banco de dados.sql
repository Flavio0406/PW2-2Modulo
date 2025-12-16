CREATE DATABASE bdpw3;
USE bdpw3;

CREATE TABLE demo(
id INT AUTO_INCREMENT PRIMARY KEY , 
name VARCHAR(80),
idade INT(3),
cpf VARCHAR(11),
RG VARCHAR(14),
email VARCHAR(225),
celular VARCHAR(15)

);

CREATE TABLE usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100),
dt_nasc DATE NOT NULL,
usuario VARCHAR (100) NOT NULL,
senha VARCHAR(225) NOT NULL

);

drop table demo;
drop database bdpw3;

SELECT * FROM usuarios;