-- 09.11.2022
alter table estacionentel add column idsitio bigint(20) after codsitio;
alter table estacionentel add foreign key (idsitio) references sitio (idsitio);

select e.idestacionentel, e.nombreestacion, e.codsitio, e.idsitio, s.codsitio, s.idsitio, s.nombre
from estacionentel e, sitio s
where e.codsitio = s.codsitio
;

update estacionentel e
join sitio s on e.codsitio = s.codsitio
set e.idsitio = s.idsitio
where e.codsitio = s.codsitio
;