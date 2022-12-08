/** 02.12.2022 **/
alter table ticket_solucion add column idsistemafalla char(15);

update ticket_solucion t set t.idsistemafalla = '4' WHERE t.`idsolucion` LIKE '%DTS%';
update ticket_solucion t set t.idsistemafalla = '2' WHERE t.`idsolucion` LIKE '%ES%';
update ticket_solucion t set t.idsistemafalla = '1' WHERE t.`idsolucion` LIKE '%RBS%';
update ticket_solucion t set t.idsistemafalla = '3' WHERE t.`idsolucion` LIKE '%TRS%';

alter table departamento add column sem_inicio date;
alter table departamento add column sem_fin date;
alter table departamento add column sem_cant int(11);

update departamento set sem_inicio = '2022-05-09', sem_fin = '2022-11-09', sem_cant = (
    SELECT count(*) FROM evento e LEFT JOIN centro c ON e.`idcentro` = c.`idcentro` WHERE e.`inicio` BETWEEN '2022-05-09' AND '2022-11-09' AND c.`iddepartamento` = 1)
where iddepartamento = 1;

update departamento set sem_inicio = '2022-05-09', sem_fin = '2022-11-09', sem_cant = (
    SELECT count(*) FROM evento e LEFT JOIN centro c ON e.`idcentro` = c.`idcentro` WHERE e.`inicio` BETWEEN '2022-05-09' AND '2022-11-09' AND c.`iddepartamento` = 2)
where iddepartamento = 2;

update departamento set sem_inicio = '2022-05-09', sem_fin = '2022-11-09', sem_cant = (
    SELECT count(*) FROM evento e LEFT JOIN centro c ON e.`idcentro` = c.`idcentro` WHERE e.`inicio` BETWEEN '2022-05-09' AND '2022-11-09' AND c.`iddepartamento` = 3)
where iddepartamento = 3;

--
SELECT count(*) FROM evento e LEFT JOIN centro c ON e.`idcentro` = c.`idcentro` WHERE e.`inicio` BETWEEN '2022-05-09' AND '2022-11-09' AND c.`iddepartamento` = 3;

SELECT *
FROM ticket_solucion t
WHERE t.`idsolucion` LIKE '%TRS%'
;

select *
from departamento ;

SELECT r.`id`, r.`estado`, r.`razon`, r.`fecha_eje`, r.`solucion`, t.`nombresolucion`
FROM rutina_correctivo r
LEFT JOIN ticket_solucion t ON r.`solucion` COLLATE utf8_general_ci = t.`idsolucion` COLLATE utf8_general_ci
;