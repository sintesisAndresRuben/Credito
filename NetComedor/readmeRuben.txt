 - Seleccionar que padre ha iniciado sesion.
SELECT * FROM `tbl_padres_alu_profe` WHERE id_usu_dep='17'

 - Seleccionar que hijos tiene el padre que ha inicido sesion
SELECT tbl_usuarios.* FROM tbl_usuarios INNER JOIN (SELECT id_usuario FROM tbl_padres_alu_profe WHERE id_usu_dep=17) q ON tbl_usuarios.id_usuario=q.id_usuario