/* 14.10.2022 */
INSERT INTO formulario (`codigo`, `nombre`, `AREA`, `tipo`) VALUES('017','017 RPM DESMALEZADO Y APLICACIÓN DE HERBICIDA','INFRA','PREVENTIVO');

CREATE TABLE `rutina017` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `idevento` BIGINT(20) DEFAULT NULL,
  `idrutina` BIGINT(20) DEFAULT NULL,
  `cabecera` LONGTEXT,
  PRIMARY KEY (`id`),
  KEY `idrutina` (`idrutina`),
  KEY `idevento` (`idevento`),
  CONSTRAINT `rutina017_ibfk_1` FOREIGN KEY (`idrutina`) REFERENCES `rutina` (`idrutina`),
  CONSTRAINT `rutina017_ibfk_2` FOREIGN KEY (`idevento`) REFERENCES `evento` (`idevento`)
); 
