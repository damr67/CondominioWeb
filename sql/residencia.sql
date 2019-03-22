-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 18:14:06
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `residencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id` int(3) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `operadora` int(4) NOT NULL,
  `numero` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dispositivos`
--

INSERT INTO `dispositivos` (`id`, `id_usuario`, `usuario`, `operadora`, `numero`) VALUES
(8, 0, '1', 0, 412555555),
(7, 0, '1', 0, 1234),
(15, 0, 'maria', 0, 492395284),
(23, 7, 'damr67', 412, 1290313),
(16, 0, 'damr67', 0, 412842934),
(18, 0, 'damr67', 0, 6952120),
(19, 0, 'damr67', 0, 6952129),
(22, 7, 'damr67', 412, 4123123);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `dispositivos_vista`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `dispositivos_vista` (
`id_usuario` int(3)
,`operadora` int(4)
,`numero` int(7)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id`, `usuario`, `descripcion`) VALUES
(2, 'damr67', 'Esto es una prueba de reporte'),
(4, 'andreina', 'Mi nombre es adreina se quemo la luza de la entrada. Por favor arreglar lo antes posible'),
(5, 'andreina', 'Gracias, la luz fue reparada en la maÃ±ana'),
(6, 'carlos', 'Notificar a la administracion que ya fue cancelado el condominio, y me etan cobrando 2 veces\r\nGracias.'),
(8, 'damr67', 'TEngo bloqueado la opcion de administrar mis usuario. POr favor revisarlo\r\n');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `reportes_vista`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `reportes_vista` (
`id` int(11)
,`usuario` varchar(20)
,`descripcion` text
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellido`, `cedula`, `correo`, `direccion`, `telefono`, `contrasena`, `privilegio`) VALUES
(7, 'damr67', 'daniel', 'moya', '26326002', 'damr67@gmail.com', 'El valle', '0312420123', '123456', 1),
(10, 'nuevo', 'usuario', 'apellidousu', '123', '13@', 'asdadd', '23423434', '2423424', 0),
(9, 'andreina', 'andreina', 'zabala', '123193870', 'andreina@gmail.com', 'Casa de Andreina', '9201391', 'andreina123', 0),
(6, 'julia ', 'julia', 'silvina', '23456', 'julia@gmail.com', 'Sydney', 'asdamsd', 'julia', 0);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_vista`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `usuarios_vista` (
`id` int(11)
,`usuario` varchar(50)
,`nombre` varchar(50)
,`apellido` varchar(50)
,`cedula` varchar(20)
,`correo` varchar(30)
,`direccion` varchar(30)
,`telefono` varchar(30)
,`privilegio` int(2)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ano` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `usuario`, `placa`, `marca`, `modelo`, `color`, `ano`) VALUES
(9, 'julia', 'ASLC', 'Chevrolet', 'Aveo', 'Azul claro', '2012'),
(8, 'damr67', 'JADN', 'FORD', 'NEW FORD', 'Negro Metalico', '2004'),
(12, 'andreina', 'OMMAO', 'VERA', 'GTA', 'N/A', '2010'),
(13, 'julia', 'PdpDP', 'Damita', 'New Age', 'Gris', '2000');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vehiculos_vista`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vehiculos_vista` (
`id` int(11)
,`usuario` varchar(30)
,`placa` varchar(20)
,`marca` varchar(20)
,`modelo` varchar(20)
,`color` varchar(20)
,`ano` varchar(10)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `dispositivos_vista`
--
DROP TABLE IF EXISTS `dispositivos_vista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dispositivos_vista`  AS  select `dispositivos`.`id_usuario` AS `id_usuario`,`dispositivos`.`operadora` AS `operadora`,`dispositivos`.`numero` AS `numero` from `dispositivos` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `reportes_vista`
--
DROP TABLE IF EXISTS `reportes_vista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reportes_vista`  AS  select `reportes`.`id` AS `id`,`reportes`.`usuario` AS `usuario`,`reportes`.`descripcion` AS `descripcion` from `reportes` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_vista`
--
DROP TABLE IF EXISTS `usuarios_vista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_vista`  AS  select `usuarios`.`id` AS `id`,`usuarios`.`usuario` AS `usuario`,`usuarios`.`nombre` AS `nombre`,`usuarios`.`apellido` AS `apellido`,`usuarios`.`cedula` AS `cedula`,`usuarios`.`correo` AS `correo`,`usuarios`.`direccion` AS `direccion`,`usuarios`.`telefono` AS `telefono`,`usuarios`.`privilegio` AS `privilegio` from `usuarios` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vehiculos_vista`
--
DROP TABLE IF EXISTS `vehiculos_vista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vehiculos_vista`  AS  select `vehiculos`.`id` AS `id`,`vehiculos`.`usuario` AS `usuario`,`vehiculos`.`placa` AS `placa`,`vehiculos`.`marca` AS `marca`,`vehiculos`.`modelo` AS `modelo`,`vehiculos`.`color` AS `color`,`vehiculos`.`ano` AS `ano` from `vehiculos` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dispositivos`
--
ALTER TABLE `dispositivos`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
