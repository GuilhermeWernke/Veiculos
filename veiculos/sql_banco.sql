CREATE DATABASE IF NOT EXISTS Veiculos;
USE Veiculos;

CREATE TABLE veiculos
(
    
    id int AUTO_INCREMENT NOT NULL,
    
    marca varchar(30) NOT NULL,
    modelo varchar(30) NOT NULL,
    ano int NOT NULL,
    motor varchar(30) NOT NULL,
    cilindrada int NOT NULL,
    hp int NOT NULL,
    tracao varchar(30),
    cor varchar(30),
    tipo char(1) NOT NULL,
    
    PRIMARY KEY (id)
    
); 