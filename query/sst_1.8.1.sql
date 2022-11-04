CREATE TABLE `rutina_correctivo_img` (
    `id` bigint(20) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(100) DEFAULT NULL,
    `titulo` varchar(255) DEFAULT NULL,
    `idrutinacorrectivo` bigint(20) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

alter table rutina_correctivo_img add foreign key (idrutinacorrectivo) references rutina_correctivo (id);