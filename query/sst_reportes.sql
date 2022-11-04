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

-- 5. Por Afectación de Servicio: Con corte, Sin corte
select ta.nombreafectacionservicio as nombre, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
left join ticket_afectacionservicio ta on t.idafectacionservicio = ta.idafectacionservicio
where t.fecha_inicio_rif between '2022-11-01' and '2022-11-31'
and c.iddepartamento = 1
and t.idafectacionservicio > 0
group by ta.nombreafectacionservicio
;

-- 6 Atencion en sitio por afectacion:  Con corte, Sin corte
select a.nombreafectacionservicio as nombre, count(t.id_st_ticket) as cantidad
from st_ticketn t
left join estacionentel e on t.idestacion = e.idestacionentel
left join centro c on e.idcentro = c.idcentro
left join ticket_afectacionservicio a on t.idafectacionservicio = a.idafectacionservicio
left join ticket_atencion ta on t.idatencion = ta.idatencion
where t.fecha_inicio_rif between '2022-09-01' and '2022-11-31'
and c.iddepartamento = 2
and ta.nombreatencion = 'EN SITIO'
and a.idafectacionservicio is not null
group by a.nombreafectacionservicio
;

-- 7. CANTIDAD DE INTERVENCIONES POR TIPO DE FALLA
SELECT
    ticket_tipofalla.nombretipofalla as nombre, count(st_ticketn.ticket) as cantidad
FROM
    st_ticketn, estacionentel, centro, ticket_tipofalla
WHERE st_ticketn.idnodo      = estacionentel.idestacionentel
  AND estacionentel.idcentro = centro.idcentro
  AND st_ticketn.idtipofalla = ticket_tipofalla.idtipofalla
  AND centro.iddepartamento  =  1
  AND fecha_inicio_rif  BETWEEN '2022-08-01' AND '2022-11-31'
group by ticket_tipofalla.nombretipofalla
order by cantidad desc
;

-- 8. Por Tecnologia
SELECT
    tecnologia.nombretecnologia as nombre,
    count(st_ticketn.ticket) as cantidad
FROM
    st_ticketn,
    estacionentel,
    tecnologia,
    centro
WHERE st_ticketn.idestacion   = estacionentel.idestacionentel
  AND estacionentel.idcentro  = centro.idcentro
  AND st_ticketn.idtecnologia = tecnologia.idtecnologia
  AND centro.iddepartamento   = 1
  AND fecha_inicio_rif  BETWEEN '2022-08-01' AND '2022-11-31'
group by tecnologia.nombretecnologia
;

-- 9. Por Sistema
SELECT
    ticket_sistemafalla.nombresistemafalla as nombre,
    count(st_ticketn.ticket) as cantidad
FROM
    st_ticketn, estacionentel, centro, ticket_sistemafalla
WHERE st_ticketn.idestacion = estacionentel.idestacionentel
  AND estacionentel.idcentro=centro.idcentro
  AND st_ticketn.idsistemafalla=ticket_sistemafalla.idsistemafalla
  AND centro.iddepartamento = 1
  AND fecha_inicio_rif  BETWEEN '2022-08-01' AND '2022-11-31'
group by ticket_sistemafalla.nombresistemafalla
;