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
	AND fecha_inicio_rif  BETWEEN '2022-08-01' AND '2022-11-31'
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
      AND fecha_inicio_rif  BETWEEN '2022-08-01' AND '2022-11-31'
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
      AND fecha_inicio_rif  BETWEEN '2022-08-01' AND '2022-11-31'
    ;

-- CANTIDAD DE INTERVENCIONES POR TIPO DE FALLA
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

-- Por Tecnologia
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

-- Por Sistema
    SELECT
        ticket_sistemafalla.nombresistemafalla as nombre,
        count(st_ticketn.ticket) as cantidad
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
    group by ticket_sistemafalla.nombresistemafalla
    ;