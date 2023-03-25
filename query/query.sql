SELECT g.user1, g.user2,
       concat(u1.nombre, ' ', u1.ap_pat, ' ', u1.ap_mat) AS nombre2, u1.cargo AS cargo2, u1.cel AS cel2,
       concat(u2.nombre, ' ', u2.ap_pat, ' ', u2.ap_mat) AS nombre3, u2.cargo AS cargo3,  u2.cel AS cel3
FROM grupo g
JOIN usuarios u1 ON g.user1 = u1.id
JOIN usuarios u2 ON g.user2 = u2.id
AND g.idgrupo = 18
;

SELECT g.idgrupo, g.user1, g.user2,
       concat(u1.nombre, ' ', u1.ap_pat, ' ', u1.ap_mat) AS nombre2, u1.cargo AS cargo2, u1.cel AS cel2,
       concat(u2.nombre, ' ', u2.ap_pat, ' ', u2.ap_mat) AS nombre3, u2.cargo AS cargo3,  u2.cel AS cel3
FROM grupo g
JOIN usuarios u1 ON g.user1 = u1.id
JOIN usuarios u2 ON g.user2 = u2.id
-- AND g.idgrupo = 18
where g.user1 = 58 or g.user2 = 58
;

SELECT g.idgrupo, g.user1, g.user2
FROM grupo g
where g.user1 = 1 or g.user2 = 1
;