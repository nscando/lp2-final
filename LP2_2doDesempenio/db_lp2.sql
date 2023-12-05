-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2023 a las 00:13:09
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_lp2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obrassociales`
--

CREATE TABLE `obrassociales` (
  `id_obrasocial` int(11) NOT NULL,
  `nombre_obrasocial` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `obrassociales`
--

INSERT INTO `obrassociales` (`id_obrasocial`, `nombre_obrasocial`) VALUES
(1, 'OSDE'),
(2, 'Swiss Medical'),
(3, 'Medicus'),
(4, 'Galeno'),
(5, 'Union Personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestaciones`
--

CREATE TABLE `prestaciones` (
  `id_prestacion` int(11) NOT NULL,
  `denominacion` varchar(100) DEFAULT NULL,
  `complejidad` tinyint(1) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `porcentaje_abono` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestaciones`
--

INSERT INTO `prestaciones` (`id_prestacion`, `denominacion`, `complejidad`, `precio`, `porcentaje_abono`) VALUES
(1, 'Sesiones de Fisioterapia', 0, '0.00', 0),
(2, 'Sesiones de Psicología', 0, '0.00', 0),
(3, 'Tomografía (TAC)', 1, '15000.00', 10),
(4, 'Resonancia Magnética', 1, '12500.00', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Doctor/a Especialista'),
(3, 'Paciente'),
(4, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id_turno` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `fecha_consulta` datetime NOT NULL,
  `id_prestacion` int(11) NOT NULL,
  `fecha_turno` date NOT NULL,
  `diagnostico` varchar(255) DEFAULT NULL,
  `asistido` tinyint(1) DEFAULT NULL,
  `abono_paciente` decimal(10,2) DEFAULT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id_turno`, `id_paciente`, `id_medico`, `fecha_consulta`, `id_prestacion`, `fecha_turno`, `diagnostico`, `asistido`, `abono_paciente`, `hora`) VALUES
(1, 4, 3, '2023-06-10 15:13:45', 2, '2023-06-05', NULL, 0, '0.00', '08:30:00'),
(3, 5, 2, '2023-06-12 21:26:09', 1, '2023-06-30', NULL, 2, NULL, '17:00:00'),
(4, 11, 2, '2023-06-12 21:26:09', 3, '2023-07-27', NULL, 2, NULL, '09:00:00'),
(5, 5, 3, '2023-06-12 21:50:35', 1, '2023-05-15', NULL, 1, NULL, '16:00:00'),
(7, 7, 2, '2023-06-14 14:58:29', 3, '2023-07-27', NULL, 2, NULL, '10:00:00'),
(9, 11, 2, '2023-06-14 15:02:04', 1, '2023-05-27', NULL, 0, NULL, '10:00:00'),
(10, 11, 3, '2023-06-14 15:02:04', 4, '2023-06-05', NULL, 1, NULL, '08:00:00'),
(12, 4, 2, '2023-06-16 21:36:41', 1, '2023-04-08', 'Diagnostico de prueba insercion a bd', 1, '0.00', '17:00:00'),
(14, 9, 2, '2023-06-17 11:37:14', 3, '2023-07-08', '', 2, '0.00', '20:00:00'),
(16, 9, 2, '2023-06-17 11:39:36', 4, '2023-09-28', 'prueba insercion bd', 2, '0.00', '15:00:00'),
(20, 11, 2, '2023-06-17 12:20:27', 4, '2023-06-29', '', 2, '0.00', '07:00:00'),
(26, 7, 2, '2023-06-17 12:25:35', 3, '2023-06-01', '', 1, '0.00', '14:00:00'),
(31, 11, 2, '2023-06-17 13:17:39', 3, '2023-06-02', '', 1, '0.00', '11:00:00'),
(36, 7, 3, '2023-06-17 14:49:43', 2, '2023-06-27', '', 2, '0.00', '18:50:00'),
(37, 5, 2, '2023-06-18 00:04:49', 3, '2023-06-16', 'Prueba registro turno BD.-', 1, '0.00', '12:25:00'),
(38, 7, 3, '2023-06-18 00:11:00', 3, '2023-06-14', '', 2, '0.00', '08:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `id_obrasocial` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL,
  `img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `dni`, `email`, `clave`, `id_obrasocial`, `id_rol`, `img`) VALUES
(1, 'Sue', 'Palacios', '123456789', 'sue@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1, 'sue.jpg'),
(2, 'Trinidad', 'Moreno', '987654321', 'tmoreno@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 2, 'tmoreno.jpg'),
(3, 'Mauricio', 'Saude', '456789123', 'msaude@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 2, 'msaude.jpg'),
(4, 'Juliana', 'Echeverri', '30777888', 'jecheverry@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 3, 'jecheverri.jpg'),
(5, 'Gloria', 'Navarro', '789321654', 'gnavarro@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 4, 3, 'gnavarro.jpg'),
(6, 'Jorgelina', 'Pérez', '654987321', 'jperez@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 4, 'jperez.jpg'),
(7, 'Esteban', 'Dominguez', '30666777', 'edominguez@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 3, 'edominguez.jpg'),
(9, 'Gerardo', 'Martinez', '30888999', 'gmartinez@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 3, 3, NULL),
(10, 'Gloria', 'Navarro', '31222333', 'gnavarro@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 4, 3, NULL),
(11, 'Cristina', 'Zapata', '31333222', 'czapata@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 5, 3, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `obrassociales`
--
ALTER TABLE `obrassociales`
  ADD PRIMARY KEY (`id_obrasocial`);

--
-- Indices de la tabla `prestaciones`
--
ALTER TABLE `prestaciones`
  ADD PRIMARY KEY (`id_prestacion`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id_turno`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_medico` (`id_medico`),
  ADD KEY `id_prestacion` (`id_prestacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_obrasocial` (`id_obrasocial`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `obrassociales`
--
ALTER TABLE `obrassociales`
  MODIFY `id_obrasocial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prestaciones`
--
ALTER TABLE `prestaciones`
  MODIFY `id_prestacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD CONSTRAINT `turnos_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `turnos_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `turnos_ibfk_3` FOREIGN KEY (`id_prestacion`) REFERENCES `prestaciones` (`id_prestacion`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_obrasocial`) REFERENCES `obrassociales` (`id_obrasocial`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
