CREATE TABLE catastroimg (
    `idcatastroimg` bigint(20) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(100) DEFAULT NULL,
    `titulo` varchar(255) DEFAULT NULL,
    `idcatastro` bigint(20) DEFAULT NULL,
    PRIMARY KEY (`idcatastroimg`)
);

alter table catastroimg add foreign key (idcatastro) references catastro (idcatastro);