-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2018 a las 20:17:43
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

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
(3, 'Menú Mayo', 'Menu General', '.\\menu_pdf\\menugeneral\\Menu_Maig.pdf', '2018-05-03', 16),
(4, 'Propuesta Cenas Mayo', 'Menu General', '.\\menu_pdf\\menugeneral\\Propuesta_Cenas_Mayo.pdf', '2018-05-01', 16),
(5, 'Informe del valor nutricional', 'Menu General', '.\\menu_pdf\\menugeneral\\Informe del valor nutricional menú nº3 primavera-estiu.pdf', '2018-05-01', 16),
(20, 'Vegetariano.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Vegetariano.pdf', '2018-05-12', 16),
(21, 'NO PORC.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/NO PORC.pdf', '2018-05-12', 16),
(22, 'NO CARN DE VEDELLA.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/NO CARN DE VEDELLA.pdf', '2018-05-12', 16),
(23, 'Menú Diabètic (5 racions HC).pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Menú Diabètic (5 racions HC).pdf', '2018-05-12', 16),
(24, 'Intolerància al GLUTEN (CELIAQUIA).pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Intolerància al GLUTEN (CELIAQUIA).pdf', '2018-05-12', 16),
(25, 'Intolerància a la FRUCTOSA-SORBITOL.pdf', 'Menu General', './menu_pdf/Menu General/Intolerància a la FRUCTOSA-SORBITOL.pdf', '2018-05-12', 16),
(26, 'Al·lèrgia als LLEGUMS.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Al·lèrgia als LLEGUMS.pdf', '2018-05-12', 16),
(27, 'Al·lèrgia als FRUITS SECS.pdf', 'Menu Adaptado', './menu_pdf/Menu Adaptado/Al·lèrgia als FRUITS SECS.pdf', '2018-05-12', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_normativa`
--

CREATE TABLE `tbl_normativa` (
  `id_normativa` int(11) NOT NULL,
  `nombre_normativa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_normativa` enum('Normativa','Guías y comunicados Servicio de comedor','Guías, Consejos, y Comunicados Administración pública') COLLATE utf8_unicode_ci NOT NULL,
  `ruta_normativa` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_normativa` date NOT NULL,
  `id_etapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_padres_alu_profe`
--

CREATE TABLE `tbl_padres_alu_profe` (
  `id_pap` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `tipo_usuario` enum('alumno','padre','padre2','profesor','personal') NOT NULL,
  `admin` enum('si','no') NOT NULL,
  `id_etapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `mail_usuario`, `password_usuario`, `tipo_usuario`, `admin`, `id_etapa`) VALUES
(3, 'Andrés', 'González', '1379.joan23', '1fa3356b1eb65f144a367ff8560cb406', 'alumno', 'no', 12),
(4, 'Ruben', 'Díaz', '93295.joan23@fje.edu', '8af3982673455323883c06fa59d2872a', 'alumno', 'no', 12),
(7, 'David', 'Marín Salvador', 'david.marin@fje.edu', '47496afd0bb349059c000e89235b1d87', 'profesor', 'no', 13),
(8, 'Agnes', 'Plans Berenguer', 'agnes.plans@fje.edu', '058b451ee66762862ed52239cf6cd53d', 'profesor', 'no', 13),
(15, 'José Antonio ', 'López Rodríguez', 'jantonio.lopez@fje.edu', '1fa3356b1eb65f144a367ff8560cb406', 'personal', 'si', 14),
(16, 'Núria ', 'García Sánchez', 'nuria.garcia@fje.edu', '02ae76732a5d1d4476a88e74c1f06728', 'personal', 'no', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario_ticket`
--

CREATE TABLE `tbl_usuario_ticket` (
  `id_usuario_ticket` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `cantidad_ticket` varchar(3) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_usuario_ticket`
--

INSERT INTO `tbl_usuario_ticket` (`id_usuario_ticket`, `id_usuario`, `id_ticket`, `fecha_caducidad`, `cantidad_ticket`) VALUES
(1, 3, 16, '2018-08-30', '12');

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
  ADD KEY `id_usuario` (`id_usuario`);

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
  ADD KEY `id_ticket` (`id_ticket`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_asistencia`
--
ALTER TABLE `tbl_asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_etapa`
--
ALTER TABLE `tbl_etapa`
  MODIFY `id_etapa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `tbl_normativa`
--
ALTER TABLE `tbl_normativa`
  MODIFY `id_normativa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tbl_padres_alu_profe`
--
ALTER TABLE `tbl_padres_alu_profe`
  MODIFY `id_pap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario_ticket`
--
ALTER TABLE `tbl_usuario_ticket`
  MODIFY `id_usuario_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `tbl_padres_alu_profe_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE;

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
  ADD CONSTRAINT `tbl_usuario_ticket_ibfk_2` FOREIGN KEY (`id_ticket`) REFERENCES `tbl_ticket` (`id_ticket`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
