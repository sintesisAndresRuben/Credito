-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2018 a las 20:44:43
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_comedor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_asistencia`
--

CREATE TABLE `tbl_asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `id_usuario_ticket` int(11) NOT NULL,
  `contador_asistencia` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `id_etapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dias_reserva`
--

CREATE TABLE `tbl_dias_reserva` (
  `id_dias_reserva` int(3) NOT NULL,
  `id_usuario_ticket` int(11) NOT NULL,
  `lunes` tinyint(1) NOT NULL,
  `martes` tinyint(1) NOT NULL,
  `miercoles` tinyint(1) NOT NULL,
  `jueves` tinyint(1) NOT NULL,
  `viernes` tinyint(1) NOT NULL,
  `servicio` enum('No','Si') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_dias_reserva`
--

INSERT INTO `tbl_dias_reserva` (`id_dias_reserva`, `id_usuario_ticket`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `servicio`) VALUES
(41, 35, 0, 0, 0, 0, 0, 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_etapa`
--

CREATE TABLE `tbl_etapa` (
  `id_etapa` int(11) NOT NULL,
  `nombre_etapa` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_etapa`
--

INSERT INTO `tbl_etapa` (`id_etapa`, `nombre_etapa`) VALUES
(7, 'Infantil'),
(8, 'Primaria'),
(9, 'ESO'),
(10, 'Bachillerato'),
(11, 'Grado Medio'),
(12, 'Grado Superior'),
(13, 'Profesorado'),
(14, 'Personal'),
(15, 'Padres'),
(16, 'Todas las etapas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `nombre_menu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_menu` enum('Menu General','Menu Adaptado') COLLATE utf8_unicode_ci NOT NULL,
  `ruta_menu` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_menu` date NOT NULL,
  `id_etapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nombre_menu`, `tipo_menu`, `ruta_menu`, `fecha_menu`, `id_etapa`) VALUES
(14, 'Menú MAIG.pdf', 'Menu General', './menu_pdf/Menu General/Menú MAIG.pdf', '2018-05-14', 16),
(15, 'Informe del valor nutricional menú nº3 primavera-estiu.pdf', 'Menu General', './menu_pdf/Menu General/Informe del valor nutricional menú nº3 primavera-estiu.pdf', '2018-05-14', 16),
(16, 'Proposta Sopars MAIG.pdf', 'Menu General', './menu_pdf/Menu General/Proposta Sopars MAIG.pdf', '2018-05-14', 16),
(17, 'Vegetaria.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Vegetaria.pdf', '2018-05-14', 16),
(18, 'NO PORC.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/NO PORC.pdf', '2018-05-14', 16),
(19, 'NO CARN DE VEDELLA.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/NO CARN DE VEDELLA.pdf', '2018-05-14', 16),
(20, 'Menú Diabètic (5 racions HC).pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Menú Diabètic (5 racions HC).pdf', '2018-05-14', 16),
(21, 'Intolerància al GLUTEN (CELIAQUIA).pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Intolerància al GLUTEN (CELIAQUIA).pdf', '2018-05-14', 16),
(22, 'Intolerància a la FRUCTOSA-SORBITOL.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Intolerància a la FRUCTOSA-SORBITOL.pdf', '2018-05-14', 16),
(23, 'Alèrgia als LLEGUMS.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Alèrgia als LLEGUMS.pdf', '2018-05-14', 16),
(24, 'Alèrgia als FRUITS SECS.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Alèrgia als FRUITS SECS.pdf', '2018-05-14', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_normativa`
--

CREATE TABLE `tbl_normativa` (
  `id_normativa` int(11) NOT NULL,
  `nombre_normativa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_normativa` enum('Normativa','Guías y comunicados Servicio de comedor','Guías, Consejos, y Comunicados Administración pública') COLLATE utf8_unicode_ci NOT NULL,
  `ruta_normativa` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_normativa` date NOT NULL,
  `id_etapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_normativa`
--

INSERT INTO `tbl_normativa` (`id_normativa`, `nombre_normativa`, `tipo_normativa`, `ruta_normativa`, `fecha_normativa`, `id_etapa`) VALUES
(22, 'Full de renúncia al picnic de sortida o excursió.pdf', 'Normativa', './normativa_pdf/Normativa/Full de renúncia al picnic de sortida o excursió.pdf', '2018-05-14', 16),
(23, 'Butlleta dieta ocasional gastrointestinal (retallar).pdf', 'Normativa', './normativa_pdf/Normativa/Butlleta dieta ocasional gastrointestinal (retallar).pdf', '2018-05-14', 16),
(24, 'Menu alumne.pdf', 'Normativa', './normativa_pdf/Normativa/Menu alumne.pdf', '2018-05-14', 16),
(25, 'IT-Elaboració PIC-NIC de F.ROCA rev. Gen.2017.pdf', 'Guías y comunicados Servicio de comedor', './normativa_pdf/Guías y comunicados Servicio de comedor/IT-Elaboració PIC-NIC de F.ROCA rev. Gen.2017.pdf', '2018-05-14', 16),
(26, 'Informe F.ROCA sobre les  tècniques en la elaboració del PIC-NIC Abr.2016.pdf', 'Guías y comunicados Servicio de comedor', './normativa_pdf/Guías y comunicados Servicio de comedor/Informe F.ROCA sobre les  tècniques en la elaboració del PIC-NIC Abr.2016.pdf', '2018-05-14', 16),
(27, 'Comunicació F.ROCA sobre el peix PANGA Feb.2017.pdf', 'Guías y comunicados Servicio de comedor', './normativa_pdf/Guías y comunicados Servicio de comedor/Comunicació F.ROCA sobre el peix PANGA Feb.2017.pdf', '2018-05-14', 16),
(28, 'Comunicat del Canvi de la freqüència recomanada de carn.pdf', 'Guías, Consejos, y Comunicados Administración pública', './normativa_pdf/Guías, Consejos, y Comunicados Administración pública/Comunicat del Canvi de la freqüència recomanada de carn.pdf', '2018-05-14', 16),
(29, 'Consell per a menjadors escolars i famílies_ Acompanyar els apats dels infants.pdf', 'Guías, Consejos, y Comunicados Administración pública', './normativa_pdf/Guías, Consejos, y Comunicados Administración pública/Consell per a menjadors escolars i famílies_ Acompanyar els apats dels infants.pdf', '2018-05-14', 16),
(30, 'Taula de Gramatges en funció de edat.pdf', 'Guías, Consejos, y Comunicados Administración pública', './normativa_pdf/Guías, Consejos, y Comunicados Administración pública/Taula de Gramatges en funció de edat.pdf', '2018-05-14', 16),
(31, 'Guia de alimentació saludable en etapa escolar.pdf', 'Guías, Consejos, y Comunicados Administración pública', './normativa_pdf/Guías, Consejos, y Comunicados Administración pública/Guia de alimentació saludable en etapa escolar.pdf', '2018-05-14', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_padres_alu_profe`
--

CREATE TABLE `tbl_padres_alu_profe` (
  `id_pap` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_usu_dep` int(11) NOT NULL,
  `tipo` enum('padre','madre','profesor') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_padres_alu_profe`
--

INSERT INTO `tbl_padres_alu_profe` (`id_pap`, `id_usuario`, `id_usu_dep`, `tipo`) VALUES
(1, 18, 17, 'padre'),
(2, 19, 17, 'padre'),
(4, 20, 22, 'padre'),
(5, 20, 21, 'madre'),
(6, 3, 8, 'profesor'),
(7, 3, 7, 'profesor'),
(8, 4, 7, 'profesor'),
(9, 4, 8, 'profesor'),
(10, 24, 23, 'padre'),
(11, 25, 23, 'padre'),
(12, 26, 23, 'padre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_qr`
--

CREATE TABLE `tbl_qr` (
  `id_qr` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_qr`
--

INSERT INTO `tbl_qr` (`id_qr`, `codigo`, `fecha`) VALUES
(11, '581', '2018-05-25 17:17:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ticket`
--

CREATE TABLE `tbl_ticket` (
  `id_ticket` int(11) NOT NULL,
  `importe_ticket` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_ticket` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_etapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_ticket`
--

INSERT INTO `tbl_ticket` (`id_ticket`, `importe_ticket`, `tipo_ticket`, `id_etapa`) VALUES
(1, '180.73', 'Servicio comedor 5 días', 7),
(2, '146.12', 'Servicio comedor 4 días', 7),
(3, '110.83', 'Servicio comedor 3 días', 7),
(4, '9.70', 'Ticket comedor', 7),
(6, '168.84', 'Servicio comedor 5 días', 8),
(7, '146.12', 'Servicio comedor 4 días', 8),
(8, '110.83', 'Servicio comedor 3 días', 8),
(9, '9.70', 'Ticket comedor', 8),
(10, '162.36', 'Servicio comedor 5 días', 9),
(11, '131.43', 'Servicio comedor 4 días', 9),
(12, '99.75', 'Servicio comedor 3 días', 9),
(13, '8.70', 'Ticket comedor', 9),
(14, '3.90', 'Ticket comedor', 10),
(15, '3.90', 'Ticket comedor', 11),
(16, '3.90', 'Ticket comedor', 12),
(17, '3.90', 'Ticket comedor', 13),
(18, '3.90', 'Ticket comedor', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `apellido_usuario` varchar(20) NOT NULL,
  `mail_usuario` varchar(25) NOT NULL,
  `password_usuario` varchar(35) NOT NULL,
  `tipo_usuario` enum('alumno','padre','madre','profesor','personal') NOT NULL,
  `admin` enum('si','no') NOT NULL,
  `id_etapa` int(11) NOT NULL,
  `sexo_usuario` enum('hombre','mujer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `mail_usuario`, `password_usuario`, `tipo_usuario`, `admin`, `id_etapa`, `sexo_usuario`) VALUES
(3, 'Andrés', 'González', '1379.joan23', 'c6865cf98b133f1f3de596a4a2894630', 'alumno', 'no', 12, 'hombre'),
(4, 'Ruben', 'Díaz', '93295.joan23', 'c6865cf98b133f1f3de596a4a2894630', 'alumno', 'no', 12, 'hombre'),
(7, 'David', 'Marín Salvador', 'david.marin', '793741d54b00253006453742ad4ed534', 'profesor', 'no', 13, 'hombre'),
(8, 'Agnes', 'Plans Berenguer', 'agnes.plans', '793741d54b00253006453742ad4ed534', 'profesor', 'no', 13, 'mujer'),
(15, 'José Antonio ', 'López Rodríguez', 'jantonio.lopez', '0be5a6c82893ecaa8bb29bd36831e457', 'personal', 'si', 14, 'hombre'),
(16, 'Núria ', 'García Sánchez', 'nuria.garcia', '0be5a6c82893ecaa8bb29bd36831e457', 'personal', 'no', 14, 'mujer'),
(17, 'Ramon', 'García García', 'ramon.garcia', '41409f34ee49036ad153fa10b374747e', 'padre', 'no', 15, 'hombre'),
(18, 'Judith', 'García Perez', '1234.joan23', 'c6865cf98b133f1f3de596a4a2894630', 'alumno', 'no', 8, 'mujer'),
(19, 'Javi', 'García Perez', '4321.joan23', 'c6865cf98b133f1f3de596a4a2894630', 'alumno', 'no', 7, 'hombre'),
(20, 'Federico', 'Diaz Fernandez', '93296.joan23', 'c6865cf98b133f1f3de596a4a2894630', 'alumno', 'no', 10, 'hombre'),
(21, 'Maria', 'Fernandez Lara', 'maria.fernandez', '41409f34ee49036ad153fa10b374747e', 'madre', 'no', 15, 'mujer'),
(22, 'Manolo', 'Garcia Yus', 'monolo.garcia', '41409f34ee49036ad153fa10b374747e', 'padre', 'no', 15, 'hombre'),
(23, 'Pepe ', 'Viyuela Mas', 'pepe.viyuela', '41409f34ee49036ad153fa10b374747e', 'padre', 'no', 16, 'hombre'),
(24, 'Eduardo', 'Viyuela Marin', '6789.joan23', 'c6865cf98b133f1f3de596a4a2894630', 'alumno', 'no', 11, 'hombre'),
(25, 'Silvia', 'Vyuela Marin', '01923.joan23', 'c6865cf98b133f1f3de596a4a2894630', 'alumno', 'no', 12, 'mujer'),
(26, 'Marina', 'Viyuela Marin', '5687.joan23', 'c6865cf98b133f1f3de596a4a2894630', 'alumno', 'no', 9, 'mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_ticket`
--

CREATE TABLE `tbl_usuario_ticket` (
  `id_usuario_ticket` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `para_usuario` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `cantidad_ticket` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `precio_ticket` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_usuario_ticket`
--

INSERT INTO `tbl_usuario_ticket` (`id_usuario_ticket`, `id_usuario`, `para_usuario`, `id_ticket`, `fecha_caducidad`, `cantidad_ticket`, `precio_ticket`) VALUES
(35, 3, 3, 16, '2018-08-30', '6', '23.40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_ticket_informes`
--

CREATE TABLE `tbl_usuario_ticket_informes` (
  `id_informes` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `para_usuario` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `cantidad_ticket` varchar(3) NOT NULL,
  `precio_ticket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuario_ticket_informes`
--

INSERT INTO `tbl_usuario_ticket_informes` (`id_informes`, `id_usuario`, `para_usuario`, `id_ticket`, `fecha_caducidad`, `cantidad_ticket`, `precio_ticket`) VALUES
(28, 3, 3, 16, '2018-08-30', '6', '23.40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_asistencia`
--
ALTER TABLE `tbl_asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_usuario_ticket` (`id_usuario_ticket`),
  ADD KEY `id_etapa` (`id_etapa`);

--
-- Indices de la tabla `tbl_dias_reserva`
--
ALTER TABLE `tbl_dias_reserva`
  ADD PRIMARY KEY (`id_dias_reserva`),
  ADD KEY `id_usuario_ticket` (`id_usuario_ticket`);

--
-- Indices de la tabla `tbl_etapa`
--
ALTER TABLE `tbl_etapa`
  ADD PRIMARY KEY (`id_etapa`);

--
-- Indices de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_etapa` (`id_etapa`);

--
-- Indices de la tabla `tbl_normativa`
--
ALTER TABLE `tbl_normativa`
  ADD PRIMARY KEY (`id_normativa`),
  ADD KEY `id_etapa` (`id_etapa`);

--
-- Indices de la tabla `tbl_padres_alu_profe`
--
ALTER TABLE `tbl_padres_alu_profe`
  ADD PRIMARY KEY (`id_pap`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_padre` (`id_usu_dep`);

--
-- Indices de la tabla `tbl_qr`
--
ALTER TABLE `tbl_qr`
  ADD PRIMARY KEY (`id_qr`);

--
-- Indices de la tabla `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_etapa` (`id_etapa`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_etapa` (`id_etapa`);

--
-- Indices de la tabla `tbl_usuario_ticket`
--
ALTER TABLE `tbl_usuario_ticket`
  ADD PRIMARY KEY (`id_usuario_ticket`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_ticket` (`id_ticket`),
  ADD KEY `para_usuario` (`para_usuario`);

--
-- Indices de la tabla `tbl_usuario_ticket_informes`
--
ALTER TABLE `tbl_usuario_ticket_informes`
  ADD PRIMARY KEY (`id_informes`),
  ADD KEY `id_ticket` (`id_ticket`) USING BTREE,
  ADD KEY `id_usuario` (`id_usuario`) USING BTREE,
  ADD KEY `para_usuario` (`para_usuario`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_asistencia`
--
ALTER TABLE `tbl_asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_dias_reserva`
--
ALTER TABLE `tbl_dias_reserva`
  MODIFY `id_dias_reserva` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `tbl_etapa`
--
ALTER TABLE `tbl_etapa`
  MODIFY `id_etapa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tbl_normativa`
--
ALTER TABLE `tbl_normativa`
  MODIFY `id_normativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `tbl_padres_alu_profe`
--
ALTER TABLE `tbl_padres_alu_profe`
  MODIFY `id_pap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tbl_qr`
--
ALTER TABLE `tbl_qr`
  MODIFY `id_qr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario_ticket`
--
ALTER TABLE `tbl_usuario_ticket`
  MODIFY `id_usuario_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario_ticket_informes`
--
ALTER TABLE `tbl_usuario_ticket_informes`
  MODIFY `id_informes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_asistencia`
--
ALTER TABLE `tbl_asistencia`
  ADD CONSTRAINT `tbl_asistencia_ibfk_1` FOREIGN KEY (`id_usuario_ticket`) REFERENCES `tbl_usuario_ticket` (`id_usuario_ticket`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_asistencia_ibfk_2` FOREIGN KEY (`id_etapa`) REFERENCES `tbl_etapa` (`id_etapa`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_dias_reserva`
--
ALTER TABLE `tbl_dias_reserva`
  ADD CONSTRAINT `tbl_dias_reserva_ibfk_1` FOREIGN KEY (`id_usuario_ticket`) REFERENCES `tbl_usuario_ticket` (`id_usuario_ticket`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD CONSTRAINT `tbl_menu_ibfk_1` FOREIGN KEY (`id_etapa`) REFERENCES `tbl_etapa` (`id_etapa`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_normativa`
--
ALTER TABLE `tbl_normativa`
  ADD CONSTRAINT `tbl_normativa_ibfk_1` FOREIGN KEY (`id_etapa`) REFERENCES `tbl_etapa` (`id_etapa`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_padres_alu_profe`
--
ALTER TABLE `tbl_padres_alu_profe`
  ADD CONSTRAINT `tbl_padres_alu_profe_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_padres_alu_profe_ibfk_2` FOREIGN KEY (`id_usu_dep`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD CONSTRAINT `tbl_ticket_ibfk_1` FOREIGN KEY (`id_etapa`) REFERENCES `tbl_etapa` (`id_etapa`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`id_etapa`) REFERENCES `tbl_etapa` (`id_etapa`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuario_ticket`
--
ALTER TABLE `tbl_usuario_ticket`
  ADD CONSTRAINT `tbl_usuario_ticket_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuario_ticket_ibfk_2` FOREIGN KEY (`id_ticket`) REFERENCES `tbl_ticket` (`id_ticket`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuario_ticket_ibfk_3` FOREIGN KEY (`para_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuario_ticket_informes`
--
ALTER TABLE `tbl_usuario_ticket_informes`
  ADD CONSTRAINT `tbl_usuario_ticket_informes_ibfk_3` FOREIGN KEY (`id_ticket`) REFERENCES `tbl_ticket` (`id_ticket`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuario_ticket_informes_ibfk_4` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuario_ticket_informes_ibfk_5` FOREIGN KEY (`para_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
