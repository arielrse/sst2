-- 1. Tickets por CM/SCM
select c.idcentro, c.nombre, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
where t.fecha_inicio_rif between '2022-10-01' and '2022-10-31'
and c.iddepartamento = 2
group by c.idcentro, c.nombre
;

-- 2. Atencion de Tickets por CM/CSM
select ta.idatencion, ta.nombreatencion, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
join ticket_atencion ta on t.idatencion = ta.idatencion
where t.fecha_inicio_rif between '2022-11-01' and '2022-11-31'
and c.iddepartamento = 1
group by ta.idatencion, ta.nombreatencion
;

-- 3. Atencion en sitio por Area: Urbano, Rural
select e.area, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
where t.fecha_inicio_rif between '2022-11-01' and '2022-11-30'
and c.iddepartamento = 1
group by e.area
;


-- 3.1. Atencion en sitio Urbano, Rural
select c.nombre, ta.idatencion, ta.nombreatencion, e.area, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
join ticket_atencion ta on t.idatencion = ta.idatencion
where t.fecha_inicio_rif between '2022-09-01' and '2022-09-31'
and c.iddepartamento = 2
and ta.nombreatencion = 'EN SITIO'
group by c.nombre, ta.idatencion, ta.nombreatencion, e.area
;

-- 4. Atencion por tipo de nodo NP, NS
select e.tiponodo, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
where t.fecha_inicio_rif between '2022-11-01' and '2022-11-31'
and c.iddepartamento = 1
and e.tiponodo is not null
group by e.tiponodo
;
-- 4.1 Atencion en sitio NP, NS
select c.nombre, ta.idatencion, ta.nombreatencion, e.tiponodo, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
join ticket_atencion ta on t.idatencion = ta.idatencion
where t.fecha_inicio_rif between '2022-09-01' and '2022-09-31'
and c.iddepartamento = 2
and ta.nombreatencion = 'EN SITIO'
and e.tiponodo is not null
group by c.nombre, ta.idatencion, ta.nombreatencion, e.tiponodo
;

/*
UPDATE `st_ticketn` t SET
t.fecha_inicio_rif = DATE_ADD(t.fecha_inicio_rif, INTERVAL 1 MONTH),
t.fecha_fin_rif = DATE_ADD(t.fecha_fin_rif, INTERVAL 1 MONTH),
t.fecha_not_dim = DATE_ADD(t.fecha_not_dim, INTERVAL 1 MONTH),
t.fecha_not_sitio = DATE_ADD(t.fecha_not_sitio, INTERVAL 1 MONTH)
*/