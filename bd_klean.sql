CREATE DATABASE IF NOT EXISTS Eq1_Klean DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE Eq1_Klean;

CREATE TABLE `solicitudes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL, -- Nuevo campo agregado
  `telefono` varchar(20) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `tipo_servicio` varchar(20) NOT NULL,
  `con_insumos` tinyint(1) DEFAULT 0,
  `con_factura` tinyint(1) DEFAULT 0,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;