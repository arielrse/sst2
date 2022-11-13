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


SELECT
r.id, c.nombre AS nomCentro , d.nombre AS  nomDepartamento, concat(u.nombre, ' ', u.ap_pat) AS nomResponsable, r.fecha_eje, r.tipo_solucion,
r.fecha_corte, r.fecha_aviso, r.fecha_salida, r.fecha_llegada, r.fecha_superada, r.fecha_fin, concat(u2.nombre, ' ', u2.ap_pat) AS nomCoord,
r.ticket_principal, r.ticket_relacion, r.atencion, r.servicio_afecta, r.estado_ticket, r.en_plazo,
s.nombresistemafalla, e.nombreequipofalla, t.nombretipofalla, so.nombresolucion, r.descripcion_falla, r.medidas_restituir, r.estado_final,
r.causas, r.partes_afectadas, r.estaciones_afectadas, r.desc_solucion, r.descripcion_solucion, r.aclarativos, r.acciones_preventivas, r.observaciones_fueraplazo, r.observaciones,
r.pendiente_1, r.pendiente_2, r.pendiente_3, r.pendiente_4, r.pendiente_5, r.idgrupo, r.notas
FROM rutina_correctivo r
LEFT JOIN centro c ON r.idcentro = c.idcentro
LEFT JOIN departamento d ON r.iddepartamento = d.iddepartamento
LEFT JOIN usuarios u  ON r.usr_resp  = u.id
LEFT JOIN usuarios u2 ON r.usr_coord = u2.id
LEFT JOIN ticket_sistemafalla s ON r.sistemafalla COLLATE utf8_general_ci = s.idsistemafalla COLLATE utf8_general_ci
LEFT JOIN ticket_equipofalla e  ON r.equipofalla COLLATE utf8_general_ci = e.idequipofalla COLLATE utf8_general_ci
left join ticket_tipofalla t    on r.tipofalla COLLATE utf8_general_ci = t.idtipofalla COLLATE utf8_general_ci
left join ticket_solucion so    on r.solucion COLLATE utf8_general_ci = so.idsolucion COLLATE utf8_general_ci
WHERE r.id = 26
;