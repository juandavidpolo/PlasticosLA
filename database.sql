CREATE DATABASE plasticos
	DEFAULT CHARACTER SET utf8;
USE plasticos;
CREATE TABLE clientes (
	id_cliente INT NOT NULL UNIQUE AUTO_INCREMENT,
	cliente VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
        nit VARCHAR(255) NOT NULL,
        PRIMARY KEY(id_cliente)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE ordenes (
        id_orden INT NOT NULL UNIQUE AUTO_INCREMENT,
        cantidad VARCHAR(255) NULL,
        id_cliente INT NOT NULL,
        fase_1 INT NOT NULL,
        fase_2 INT NOT NULL,
        fase_3 INT NOT NULL,
        FOREIGN KEY(id_cliente)
                REFERENCES clientes(id_cliente)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE produccion (
        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        fase_1 VARCHAR(255) NOT NULL,
        fase_2 VARCHAR(255) NOT NULL,
        fase_3 VARCHAR(255) NOT NULL,
        fecha DATETIME TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/**
 * Author:  Juan David Polo
 * Created: 04/01/2020
 */

