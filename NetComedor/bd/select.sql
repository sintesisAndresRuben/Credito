Seleccionar servicios en tbl_usuario_ticket

SELECT tbl_usuario_ticket.id_ticket, tbl_usuario_ticket.para_usuario, tbl_ticket.tipo_ticket FROM tbl_usuario_ticket 
INNER JOIN tbl_ticket ON tbl_usuario_ticket.id_ticket=tbl_ticket.id_ticket 
INNER JOIN tbl_etapa ON tbl_ticket.id_etapa=tbl_etapa.id_etapa 
WHERE tbl_ticket.tipo_ticket LIKE 'Servicio%' AND tbl_usuario_ticket.para_usuario=18


Seleccionar servicios en tbl_usuario_ticket

SELECT tbl_usuario_ticket_informes.id_ticket, tbl_usuario_ticket_informes.para_usuario, tbl_ticket.tipo_ticket 
FROM tbl_usuario_ticket_informes 
INNER JOIN tbl_ticket ON tbl_usuario_ticket_informes.id_ticket=tbl_ticket.id_ticket 
INNER JOIN tbl_etapa ON tbl_ticket.id_etapa=tbl_etapa.id_etapa 
WHERE tbl_ticket.tipo_ticket LIKE 'Servicio%' AND tbl_usuario_ticket_informes.para_usuario=18