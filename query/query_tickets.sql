-- Tickets Original
SELECT *,
	CONCAT( 
    	TIMESTAMPDIFF(HOUR, fecha_inicio, fecha_fin), ':', 
    	MOD(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin), 60), '' 
		 )AS tiempo_interrupcion,
	CONCAT( 
    	TIMESTAMPDIFF(HOUR, fecha_notificacion, fecha_fin), ':', 
    	MOD(TIMESTAMPDIFF(MINUTE, fecha_notificacion, fecha_fin), 60), '' 
		 )AS tiempo_empleado    	
 FROM(
	SELECT 
	centro.nombre AS centro_nombre,
	st_ticketn.ticket,
	st_ticketn.idnodo,
	estacionentel.nombreestacion,
	estacionentel.tiponodo,	
	tecnologia.nombretecnologia,
	estacionentel.AREA,
	ticket_atencion.nombreatencion,
	ticket_afectacionservicio.nombreafectacionservicio,
	ticket_sistemafalla.nombresistemafalla,
	ticket_equipofalla.nombreequipofalla,
	ticket_tipofalla.nombretipofalla,
	ticket_solucion.nombresolucion,
	st_ticketn.descripcionfalla,
	timestamp(fecha_inicio_rif,hora_inicio_rif)AS fecha_inicio,
	timestamp(fecha_not_dim,hora_not_dim)AS fecha_notificacion,
	timestamp(fecha_not_sitio,hora_not_sitio)AS fecha_sitio,
	timestamp(fecha_fin_rif,hora_fin_rif)AS fecha_fin,
	st_ticketn.observaciones
	FROM 
	st_ticketn,
	estacionentel,
	tecnologia,
	centro,
	ticket_atencion,
	ticket_afectacionservicio,
	ticket_sistemafalla,
	ticket_equipofalla,
	ticket_tipofalla,
	ticket_solucion
	WHERE st_ticketn.`idestacion` 	= estacionentel.idestacionentel
	AND estacionentel.idcentro	= centro.idcentro
	AND st_ticketn.idatencion	= ticket_atencion.idatencion
	AND st_ticketn.idtecnologia	= tecnologia.idtecnologia
	AND st_ticketn.idafectacionservicio = ticket_afectacionservicio.idafectacionservicio
	AND st_ticketn.idsistemafalla	= ticket_sistemafalla.idsistemafalla
	AND st_ticketn.idequipofalla	= ticket_equipofalla.idequipofalla
	AND st_ticketn.idtipofalla	= ticket_tipofalla.idtipofalla
	AND st_ticketn.idsolucion	= ticket_solucion.idsolucion
	AND centro.iddepartamento = 1
	AND fecha_inicio_rif  BETWEEN '2022-10-01' AND '2022-10-31'
)cn1 ORDER BY fecha_inicio DESC;

-- Tickets LEFT JOIN
SELECT *,
       CONCAT(
               TIMESTAMPDIFF(HOUR, fecha_inicio, fecha_fin), ':',
               MOD(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin), 60), ''
           )AS tiempo_interrupcion,
       CONCAT(
               TIMESTAMPDIFF(HOUR, fecha_notificacion, fecha_fin), ':',
               MOD(TIMESTAMPDIFF(MINUTE, fecha_notificacion, fecha_fin), 60), ''
           )AS tiempo_empleado
FROM(
        SELECT
            c.nombre AS centro_nombre,
            t.ticket,
            t.idnodo,
            es.nombreestacion,
            es.tiponodo,
            tec.nombretecnologia,
            es.area,
            ta.nombreatencion,
            tas.nombreafectacionservicio,
            tsf.nombresistemafalla,
            te.nombreequipofalla,
            tf.nombretipofalla,
            ts.nombresolucion,
            t.descripcionfalla,
            timestamp(fecha_inicio_rif,hora_inicio_rif)AS fecha_inicio,
            timestamp(fecha_not_dim,hora_not_dim)AS fecha_notificacion,
            timestamp(fecha_not_sitio,hora_not_sitio)AS fecha_sitio,
            timestamp(fecha_fin_rif,hora_fin_rif)AS fecha_fin,
            t.observaciones
        FROM st_ticketn t
        left join estacionentel es   on t.`idestacion` 	= es.idestacionentel
        left join ticket_atencion ta on t.idatencion	= ta.idatencion
        left join tecnologia tec     on t.idtecnologia	= tec.idtecnologia
        left join ticket_afectacionservicio tas on t.idafectacionservicio = tas.idafectacionservicio
        left join ticket_sistemafalla tsf       on t.idsistemafalla       = tsf.idsistemafalla
        left join ticket_equipofalla te         on t.idequipofalla        = te.idequipofalla
        left join ticket_tipofalla tf           on t.idtipofalla	      = tf.idtipofalla
        left join ticket_solucion ts            on t.idsolucion	          = ts.idsolucion
        left join centro c           on es.idcentro	= c.idcentro
        WHERE c.iddepartamento = 1
        AND fecha_inicio_rif  BETWEEN '2022-10-01' AND '2022-10-31'
    )cn1 ORDER BY fecha_inicio DESC;

SELECT t.id_st_ticket, t.fecha_inicio_rif, es.nombreestacion, t.idsolucion
FROM st_ticketn t
left join estacionentel es on t.idestacion = es.idestacionentel
left join centro c         on es.idcentro  = c.idcentro
WHERE t.`fecha_inicio_rif` BETWEEN '2022-10-01' AND '2022-10-31'
and c.iddepartamento = 1
;


-- Promedio tiempo
SELECT area,
       -- CONCAT( TIMESTAMPDIFF(HOUR, fecha_inicio, fecha_fin), ':', MOD(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin), 60), '')AS tiempo_interrupcion,
       count(ticket) AS count,
       sum(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin)) AS diff, avg(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin)) AS AVG,
       SEC_TO_TIME(avg(TIMESTAMPDIFF(MINUTE, fecha_inicio, fecha_fin)) * 60) AS TIME

FROM(
        SELECT
            st_ticketn.ticket,
            estacionentel.AREA,
            timestamp(fecha_inicio_rif,hora_inicio_rif)AS fecha_inicio,
            timestamp(fecha_fin_rif,hora_fin_rif)AS fecha_fin
        FROM st_ticketn, estacionentel, tecnologia, centro
        WHERE st_ticketn.idnodo=estacionentel.idestacionentel
          AND estacionentel.idcentro=centro.idcentro
          AND st_ticketn.idtecnologia=tecnologia.idtecnologia
          AND centro.iddepartamento = 1
          AND fecha_inicio_rif  BETWEEN '2022-10-01' AND '2022-10-31'
    ) cn1
GROUP BY area
ORDER BY fecha_inicio DESC

;

SELECT
    st_ticketn.ticket,
    estacionentel.AREA,
    timestamp(fecha_inicio_rif,hora_inicio_rif)AS fecha_inicio,
    timestamp(fecha_fin_rif,hora_fin_rif)AS fecha_fin
FROM st_ticketn, estacionentel, tecnologia, centro
WHERE st_ticketn.idnodo=estacionentel.idestacionentel
  AND estacionentel.idcentro=centro.idcentro
  AND st_ticketn.idtecnologia=tecnologia.idtecnologia
  AND centro.iddepartamento = 1
  AND fecha_inicio_rif  BETWEEN '2022-10-01' AND '2022-10-31'
  -- and st_ticketn.ticket in ('IR202210248231', 'IR202210238116')
;




	SELECT
	centro.nombre AS centro_nombre,
	st_ticketn.ticket,
	st_ticketn.idnodo,
	estacionentel.nombreestacion,
	estacionentel.tiponodo,
	tecnologia.nombretecnologia,
	estacionentel.AREA,
	ticket_atencion.nombreatencion,
	ticket_afectacionservicio.nombreafectacionservicio,
	ticket_sistemafalla.nombresistemafalla,
	ticket_equipofalla.nombreequipofalla,
	ticket_tipofalla.nombretipofalla,
	ticket_solucion.nombresolucion,
	st_ticketn.descripcionfalla,
	timestamp(fecha_inicio_rif,hora_inicio_rif)AS fecha_inicio,
	timestamp(fecha_not_dim,hora_not_dim)AS fecha_notificacion,
	timestamp(fecha_not_sitio,hora_not_sitio)AS fecha_sitio,
	timestamp(fecha_fin_rif,hora_fin_rif)AS fecha_fin,
	st_ticketn.observaciones
	FROM
	st_ticketn,
	estacionentel,
	tecnologia,
	centro,
	ticket_atencion,
	ticket_afectacionservicio,
	ticket_sistemafalla,
	ticket_equipofalla,
	ticket_tipofalla,
	ticket_solucion
	WHERE st_ticketn.idnodo=estacionentel.idestacionentel
	AND estacionentel.idcentro=centro.idcentro
	AND st_ticketn.idatencion=ticket_atencion.idatencion
	AND st_ticketn.idtecnologia=tecnologia.idtecnologia
	AND st_ticketn.idafectacionservicio=ticket_afectacionservicio.idafectacionservicio
	AND st_ticketn.idsistemafalla=ticket_sistemafalla.idsistemafalla
	AND st_ticketn.idequipofalla=ticket_equipofalla.idequipofalla
	AND st_ticketn.idtipofalla=ticket_tipofalla.idtipofalla
	AND st_ticketn.idsolucion=ticket_solucion.idsolucion
	AND centro.iddepartamento = 1
	AND fecha_inicio_rif  BETWEEN '2022-10-01' AND '2022-10-31'
;

    SELECT
        centro.nombre AS centro_nombre,
        st_ticketn.ticket,
        st_ticketn.idnodo,
        estacionentel.nombreestacion,
        estacionentel.tiponodo,
        tecnologia.nombretecnologia,
        estacionentel.AREA,
        ticket_atencion.nombreatencion,
        ticket_afectacionservicio.nombreafectacionservicio,
        ticket_sistemafalla.nombresistemafalla,
        ticket_equipofalla.nombreequipofalla,
        ticket_tipofalla.nombretipofalla
    FROM
        st_ticketn,
        estacionentel,
        tecnologia,
        centro,
        ticket_atencion,
        ticket_afectacionservicio,
        ticket_sistemafalla,
        ticket_equipofalla,
        ticket_tipofalla,
        ticket_solucion
    WHERE st_ticketn.idnodo=estacionentel.idestacionentel
      AND estacionentel.idcentro=centro.idcentro
      AND st_ticketn.idatencion=ticket_atencion.idatencion
      AND st_ticketn.idtecnologia=tecnologia.idtecnologia
      AND st_ticketn.idafectacionservicio=ticket_afectacionservicio.idafectacionservicio
      AND st_ticketn.idsistemafalla=ticket_sistemafalla.idsistemafalla
      AND st_ticketn.idequipofalla=ticket_equipofalla.idequipofalla
      AND st_ticketn.idtipofalla=ticket_tipofalla.idtipofalla
      AND st_ticketn.idsolucion=ticket_solucion.idsolucion
      AND centro.iddepartamento = 1
      AND fecha_inicio_rif  BETWEEN '2022-10-01' AND '2022-10-31'
    ;

-- Area, Sistema, Equipo, Tipo Falla
    SELECT
        st_ticketn.id_st_ticket,
        st_ticketn.ticket,
        estacionentel.AREA,
        ticket_sistemafalla.nombresistemafalla,
        ticket_equipofalla.nombreequipofalla,
        ticket_tipofalla.nombretipofalla
    FROM
        st_ticketn,
        estacionentel,
        tecnologia,
        centro,
        ticket_sistemafalla,
        ticket_equipofalla,
        ticket_tipofalla
    WHERE st_ticketn.idnodo=estacionentel.idestacionentel
      AND estacionentel.idcentro=centro.idcentro
      AND st_ticketn.idtecnologia=tecnologia.idtecnologia
      AND st_ticketn.idsistemafalla=ticket_sistemafalla.idsistemafalla
      AND st_ticketn.idequipofalla=ticket_equipofalla.idequipofalla
      AND st_ticketn.idtipofalla=ticket_tipofalla.idtipofalla
      AND centro.iddepartamento = 1
      AND fecha_inicio_rif  BETWEEN '2022-10-01' AND '2022-10-31'
    ;

-- CANTIDAD DE INTERVENCIONES POR TIPO DE FALLA
    SELECT
        ticket_tipofalla.nombretipofalla AS nombre, count(st_ticketn.ticket) AS cantidad
    FROM
        st_ticketn, estacionentel, centro, ticket_tipofalla
    WHERE st_ticketn.idnodo      = estacionentel.idestacionentel
      AND estacionentel.idcentro = centro.idcentro
      AND st_ticketn.idtipofalla = ticket_tipofalla.idtipofalla
      AND centro.iddepartamento  =  1
      AND fecha_inicio_rif  BETWEEN '2022-08-01' AND '2022-11-31'
    GROUP BY ticket_tipofalla.nombretipofalla
    ORDER BY cantidad DESC
    ;

-- Por Tecnologia
    SELECT
        tecnologia.nombretecnologia AS nombre,
        count(st_ticketn.ticket) AS cantidad
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
    GROUP BY tecnologia.nombretecnologia
    ;

-- Por Sistema
    SELECT
        ticket_sistemafalla.nombresistemafalla AS nombre,
        count(st_ticketn.ticket) AS cantidad
    FROM
        st_ticketn,
        estacionentel,
        centro,
        ticket_sistemafalla
    WHERE st_ticketn.idestacion = estacionentel.idestacionentel
      AND estacionentel.idcentro=centro.idcentro
      AND st_ticketn.idsistemafalla=ticket_sistemafalla.idsistemafalla
      AND centro.iddepartamento = 1
      AND fecha_inicio_rif  BETWEEN '2022-08-01' AND '2022-11-31'
    GROUP BY ticket_sistemafalla.nombresistemafalla
    ;

--
-- Por Area, Sistema, Equipo
    SELECT
        ticket_sistemafalla.nombresistemafalla AS sistema,
        ticket_equipofalla.nombreequipofalla AS equipo,
           count(st_ticketn.ticket) AS cantidad
    FROM
        st_ticketn,
        estacionentel,
        tecnologia,
        centro,
        ticket_sistemafalla,
        ticket_equipofalla
    WHERE st_ticketn.idestacion     = estacionentel.idestacionentel
      AND estacionentel.idcentro    = centro.idcentro
      AND st_ticketn.idtecnologia   = tecnologia.idtecnologia
      AND st_ticketn.idsistemafalla = ticket_sistemafalla.idsistemafalla
      AND st_ticketn.idequipofalla  = ticket_equipofalla.idequipofalla
      AND centro.iddepartamento = 1
      AND fecha_inicio_rif  BETWEEN '2022-08-01' AND '2022-11-31'
    GROUP BY ticket_sistemafalla.nombresistemafalla, ticket_equipofalla.nombreequipofalla
    ORDER BY ticket_sistemafalla.nombresistemafalla, cantidad DESC
    ;