-- 04.08.2024
CREATE TABLE `rutina018` (
    `id` bigint NOT NULL AUTO_INCREMENT,
    `idevento` bigint DEFAULT NULL,
    `idrutina` bigint DEFAULT NULL,
    `cabecera` longtext,
    PRIMARY KEY (`id`),
    KEY `idrutina` (`idrutina`),
    KEY `idevento` (`idevento`),
    CONSTRAINT `rutina018_ibfk_1` FOREIGN KEY (`idrutina`) REFERENCES `rutina` (`idrutina`),
    CONSTRAINT `rutina018_ibfk_2` FOREIGN KEY (`idevento`) REFERENCES `evento` (`idevento`)
);


insert into `formulario` (`idformulario`, `codigo`, `nombre`, `AREA`, `tipo`, `titulo0`, `titulo1`, `titulo2`, `titulo3`)
values('29','018','018 RPM TDP','INFRA','PREVENTIVO','RUTINA DE MANTENIMIENTO PREVENTIVO - TDP','RMP-TDP-001/2021','Subgerencia de Operación y Mantenimiento','Sistemas de Energía y Climatización');
