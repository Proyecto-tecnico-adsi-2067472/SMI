-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2021 a las 01:57:42
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_producto` int(11) NOT NULL COMMENT 'Llave foranea del Id del producto proveniente de la tabla Productos',
  `entradas` int(11) DEFAULT NULL COMMENT 'Cantidad de entradas del producto',
  `salidas` int(11) DEFAULT NULL COMMENT 'Cantidad de salidas del producto',
  `existencias` int(11) DEFAULT NULL COMMENT 'Cantidad del producto existente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(25) NOT NULL COMMENT 'Nombre de la marca',
  `pais_marca` varchar(25) DEFAULT NULL COMMENT 'Pais de la marca'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre_marca`, `pais_marca`) VALUES
(1, 'Colgate', 'Estados Unidos'),
(2, 'Postobon', 'Estados Unidos'),
(3, 'Nacional de Chocolates', 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id_movimiento` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL COMMENT 'Llave foranea del Id del producto proveniente de la tabla Productos',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad del producto',
  `total` int(11) NOT NULL,
  `fecha` date NOT NULL COMMENT 'Fecha del movimiento',
  `id_persona` int(11) DEFAULT NULL COMMENT 'Llave foranea del Id de la persona proveniente de la tabla Personas',
  `movimiento` varchar(10) NOT NULL COMMENT 'Tipo de movimiento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`id_movimiento`, `id_producto`, `cantidad`, `total`, `fecha`, `id_persona`, `movimiento`) VALUES
(1, 1, 5, 25000, '2021-03-02', NULL, 'entrada'),
(2, 1, 15, 90000, '0000-00-00', NULL, 'salida'),
(3, 1, 15, 75000, '0000-00-00', NULL, 'entrada'),
(4, 1, 0, 0, '0000-00-00', NULL, 'entrada'),
(5, 1, 0, 0, '0000-00-00', NULL, 'entrada'),
(6, 1, 8, 40000, '2021-03-10', NULL, 'entrada'),
(7, 1, 1, 6000, '2021-03-07', NULL, 'salida'),
(8, 1, 22, 132000, '2021-03-01', NULL, 'salida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL COMMENT 'Nombre de la persona',
  `apellido` varchar(25) DEFAULT NULL COMMENT 'Apellido de la persona',
  `telefono` int(11) DEFAULT NULL COMMENT 'Telefono de la persona',
  `id_rol` int(11) NOT NULL,
  `email` varchar(45) NOT NULL COMMENT 'Email del usuario',
  `password` varchar(45) NOT NULL COMMENT 'Contraseña del usuario',
  `documentoId` varchar(20) NOT NULL COMMENT 'Numero de documento de identidad de la persona',
  `id_estado` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `nombre`, `apellido`, `telefono`, `id_rol`, `email`, `password`, `documentoId`, `id_estado`) VALUES
(6, 'Jorge', 'Rodriguez', 2147483647, 1, 'jarincon56@misena.edu.co', '123', '1023940465', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL COMMENT 'Nombre del producto',
  `descripcion` varchar(45) DEFAULT NULL COMMENT 'Descripcion del producto',
  `cantidad` int(11) NOT NULL,
  `precio_entrada` float NOT NULL COMMENT 'Precio del producto',
  `precio_salida` float NOT NULL,
  `id_categoria` int(5) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_estado` int(5) DEFAULT 1,
  `fecha_registro` date DEFAULT NULL COMMENT 'Fecha de vencimiento del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `cantidad`, `precio_entrada`, `precio_salida`, `id_categoria`, `id_marca`, `id_estado`, `fecha_registro`) VALUES
(1, 'Chocolisto', '', 0, 5000, 6000, 2, 3, 1, '2021-03-08'),
(2, 'Pepsi', '', 0, 3500, 4000, 2, 2, 1, '2021-03-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(3) NOT NULL COMMENT 'Id de el proveedor',
  `nombre` varchar(25) NOT NULL COMMENT 'Nombres del proveedor',
  `apellido` varchar(25) NOT NULL COMMENT 'Apellidos del proveedor',
  `telefono` int(11) DEFAULT NULL COMMENT 'Telefono del proveedor',
  `email` varchar(45) DEFAULT NULL COMMENT 'Email del proveedor',
  `documentoId` varchar(20) NOT NULL COMMENT 'documento de identificacion del proveedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `apellido`, `telefono`, `email`, `documentoId`) VALUES
(2, 'Oscar', 'Sanchez', 3662191, 'osanchez@mail.com', '1234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(25) NOT NULL COMMENT 'Descripcion del rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id_movimiento`),
  ADD KEY `id_usuario` (`id_persona`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `fk_id_estado` (`id_estado`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Id de el proveedor', AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `id_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `id_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_id_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_marca` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
