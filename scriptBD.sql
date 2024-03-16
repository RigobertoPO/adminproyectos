DROP DATABASE IF EXISTS bdunach;
CREATE DATABASE bdunach;
USE bdunach;
CREATE TABLE IF NOT EXISTS proyectos (
  Id int(11) NOT NULL,
  Clave varchar(3) NOT NULL,
  Nombre varchar(100) NOT NULL,
  Caratula varchar(100) NOT NULL,
  FechaCreacion date NOT NULL,
  IdUsuario int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS usuarios (
  Id int(11) NOT NULL AUTO_INCREMENT,
  NombreCompleto varchar(120) NOT NULL,
  Correo varchar(80) NOT NULL,
  Password varchar(50) NOT NULL,
  FechaRegistro date NOT NULL,
  TipoUsuario int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;