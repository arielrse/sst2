create table rutina_extrawork  (
    id bigint(20) not null auto_increment,
    fecha date,
    titulo varchar(255),
    idcentro bigint(20),
    idsitio bigint(20),
    informe varchar(200),
    primary key (id)
);

alter table rutina_extrawork add foreign key (idsitio) references sitio (idsitio);
alter table rutina_extrawork add foreign key (idcentro) references centro (idcentro);
