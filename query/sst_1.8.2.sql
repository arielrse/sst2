CREATE TABLE `catastro011` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `idcatastro` bigint(20) DEFAULT NULL,
    `idevento` bigint(20) DEFAULT NULL,
    `data` longtext,
    `tabla_1` longtext,
    `tabla_2` longtext,
    `tabla_3` longtext,
    PRIMARY KEY (`id`),
    KEY `idcatastro` (`idcatastro`),
    KEY `idevento` (`idevento`),
    CONSTRAINT `catastro011_ibfk_1` FOREIGN KEY (`idcatastro`) REFERENCES `catastro` (`idcatastro`),
    CONSTRAINT `catastro011_ibfk_2` FOREIGN KEY (`idevento`) REFERENCES `evento` (`idevento`)
);

insert into formulario (codigo, nombre, tipo) values ('011', 'CATASTRO EQUIPOS DATOS/IP', 'CATASTRO');