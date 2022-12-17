SELECT *
FROM rutina_correctivo r
WHERE r.`fecha_eje` BETWEEN '2022-08-01' AND '2022-11-31'
;

-- 1. Cantidad Tickets por CM/SCM
select c.idcentro, c.nombre, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
left join ticket_atencion ta on t.idatencion = ta.idatencion
WHERE t.fecha_inicio_rif BETWEEN '2022-08-01' AND '2022-12-31' AND c.iddepartamento = 3
and ta.nombreatencion = 'EN SITIO'
group by c.idcentro, c.nombre
;

--
-- SELECT r.id, r.razon, c.`nombre`, e.`nombreestacion`, r.fecha_eje, r.atencion, r.ticket_principal, LENGTH(r.ticket_principal) AS chars
SELECT c.idcentro, c.nombre, count(r.id) as cantidad
FROM rutina_correctivo r
LEFT JOIN estacionentel e    ON r.idestacione = e.idestacionentel
LEFT JOIN centro c           ON e.idcentro = c.idcentro
WHERE r.`fecha_eje` BETWEEN '2022-08-01' AND '2022-12-31'
AND c.`iddepartamento` = 3
AND r.atencion = 'En Sitio'
group by c.idcentro, c.nombre
;

-- 3. Atención en Sitio por Área
select e.area as nombre, count(t.id_st_ticket) as cantidad
from st_ticketn t
         left join estacionentel e    on t.idestacion = e.idestacionentel
         left join centro c           on e.idcentro = c.idcentro
         left join ticket_atencion ta on t.idatencion = ta.idatencion
where t.fecha_inicio_rif BETWEEN '2022-08-01' AND '2022-12-31' AND c.iddepartamento = 3
  and ta.nombreatencion = 'EN SITIO'
group by e.area
;

--
SELECT e.area as nombre, count(r.id) as cantidad
FROM rutina_correctivo r
LEFT JOIN estacionentel e    ON r.idestacione = e.idestacionentel
LEFT JOIN centro c           ON e.idcentro = c.idcentro
WHERE r.`fecha_eje` BETWEEN '2022-08-01' AND '2022-12-31'
AND c.`iddepartamento` = 3
AND r.atencion = 'En Sitio'
group by e.area
;

-- 4. Atención por Tipo de Nodo
select e.tiponodo as nombre, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
left join ticket_atencion ta on t.idatencion = ta.idatencion
where t.fecha_inicio_rif BETWEEN '2022-08-01' AND '2022-12-31' AND c.iddepartamento = 3
and ta.nombreatencion = 'EN SITIO'
and e.tiponodo is not null
group by e.tiponodo
;
--
SELECT e.tiponodo as nombre, count(r.id) as cantidad
FROM rutina_correctivo r
LEFT JOIN estacionentel e    ON r.idestacione = e.idestacionentel
LEFT JOIN centro c           ON e.idcentro = c.idcentro
WHERE r.`fecha_eje` BETWEEN '2022-08-01' AND '2022-12-31'
AND c.`iddepartamento` = 3
AND r.atencion = 'En Sitio'
group by e.tiponodo
;

-- 14. Cumplimiento en Tiempos de Atención
select t.cumplimiento as nombre, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e    on t.idestacion = e.idestacionentel
left join centro c           on e.idcentro = c.idcentro
left join ticket_atencion ta on t.idatencion = ta.idatencion
where t.fecha_inicio_rif BETWEEN '2022-08-01' AND '2022-12-31' AND c.iddepartamento = 3
and ta.nombreatencion = 'EN SITIO'
group by t.cumplimiento order by cantidad desc

--
-- SELECT r.en_plazo as nombre, count(r.id) as cantidad
SELECT if(r.en_plazo='SI', 'EN_PLAZO', if(r.en_plazo='NO', 'NO_PLAZO', '')) as nombre, count(r.id) as cantidad
FROM rutina_correctivo r
LEFT JOIN estacionentel e    ON r.idestacione = e.idestacionentel
LEFT JOIN centro c           ON e.idcentro = c.idcentro
WHERE r.`fecha_eje` BETWEEN '2022-08-01' AND '2022-12-31'
AND c.`iddepartamento` = 3
AND r.atencion = 'En Sitio'
group by r.en_plazo
;