-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-11-2021 a las 00:07:50
-- Versión del servidor: 5.7.30-log
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bienes_raices`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` longtext,
  `habitaciones` int(1) DEFAULT NULL,
  `wc` int(1) DEFAULT NULL,
  `estacionamiento` int(1) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `vendedorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`id`, `titulo`, `precio`, `imagen`, `descripcion`, `habitaciones`, `wc`, `estacionamiento`, `creado`, `vendedorId`) VALUES
(3, 'Casa en la playa', '12000000.00', '9c367c6031c3edb267ea9524469c9d89.jpg', 'Este inmueble se encuentra situado en el centro de Barcelona, tiene una supercie total de 2000 m2 y una supercie Ãºtil de 500m2. EstÃ¡ dividido en tres plantas. La planta superior tiene dos habitaciones con armarios empotrados, dos cuartos de baÃ±o completos y terraza.', 3, 2, 1, '2021-07-22', 1),
(4, 'Casa en el desierto', '15000000.00', '09348e216734875013e235bec2c22495.jpg', 'Este inmueble se encuentra situado en el centro de Barcelona, tiene una supercie total de 2000 m2 y una supercie Ãºtil de 500m2. EstÃ¡ dividido en tres plantas. La planta superior tiene dos habitaciones con armarios empotrados, dos cuartos de baÃ±o completos y terraza.', 4, 3, 2, '2021-07-22', 2),
(5, 'Casa en la bahÃ­a', '14000000.00', '0bc88af669265685e30d9b4c787d3bd9.jpg', 'Este inmueble se encuentra situado en el centro de Barcelona, tiene una supercie total de 2000 m2 y una supercie Ãºtil de 500m2. EstÃ¡ dividido en tres plantas. La planta superior tiene dos habitaciones con armarios empotrados, dos cuartos de baÃ±o completos y terraza.', 2, 2, 2, '2021-07-22', 1),
(11, 'Casa en el bosque', '15000000.00', 'beb371226698598f79c145d5692407b9.jpg', 'Este inmueble se encuentra situado en el centro de Barcelona, tiene una supercie total de 2000 m2 y una supercie Ãºtil de 500m2. EstÃ¡ dividido en tres plantas. La planta superior tiene dos habitaciones con armarios empotrados, dos cuartos de baÃ±o completos y terraza.', 3, 2, 1, '2021-11-13', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'correo@correo.com', '$2y$10$oKdoZROXZF9Azw925LZO1.Ov9yTtB4TAPGzZOYgS3Rk0WZMA4FmyG'),
(2, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id`, `nombre`, `apellido`, `telefono`) VALUES
(1, 'Carlos', 'Castro', '3015569476'),
(2, 'Maria', 'Rojas', '356986573');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendedorId_idx` (`vendedorId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `vendedorId` FOREIGN KEY (`vendedorId`) REFERENCES `vendedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
