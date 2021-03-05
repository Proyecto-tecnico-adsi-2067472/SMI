-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-03-2021 a las 02:05:18
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
  `idProd` int(11) NOT NULL COMMENT 'Llave foranea del Id del producto proveniente de la tabla Productos',
  `entradas` int(11) DEFAULT NULL COMMENT 'Cantidad de entradas del producto',
  `salidas` int(11) DEFAULT NULL COMMENT 'Cantidad de salidas del producto',
  `existencias` int(11) DEFAULT NULL COMMENT 'Cantidad del producto existente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idMarca` int(11) NOT NULL COMMENT 'Id de la marca',
  `nombreMarca` varchar(25) NOT NULL COMMENT 'Nombre de la marca',
  `paisMarca` varchar(25) DEFAULT NULL COMMENT 'Pais de la marca'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idMarca`, `nombreMarca`, `paisMarca`) VALUES
(1, 'Coca Cola', 'Estados Unidos'),
(2, 'Gillette', 'Estados Unidos'),
(3, 'Pepsi', 'Estados Unidos'),
(4, 'Kelloggs', 'Estados Unidos'),
(5, 'Nescafe', 'Suiza'),
(6, 'Loreal', 'Francia'),
(7, 'Nestle', 'Suiza'),
(8, 'Colgate', 'Estados Unidos'),
(9, 'Kleenex', 'Estados Unidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `idMov` int(11) NOT NULL COMMENT 'Id del movimiento',
  `idProd` int(11) NOT NULL COMMENT 'Llave foranea del Id del producto proveniente de la tabla Productos',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad del producto',
  `fecha` date NOT NULL COMMENT 'Fecha del movimiento',
  `idPersona` int(11) NOT NULL COMMENT 'Llave foranea del Id de la persona proveniente de la tabla Personas',
  `tipoMov` varchar(10) NOT NULL COMMENT 'Tipo de movimiento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idPer` int(11) NOT NULL COMMENT 'Id de la persona',
  `nombre` varchar(25) NOT NULL COMMENT 'Nombre de la persona',
  `apellido` varchar(25) DEFAULT NULL COMMENT 'Apellido de la persona',
  `telefono` int(11) DEFAULT NULL COMMENT 'Telefono de la persona',
  `idRol` int(11) NOT NULL COMMENT 'Llave foranea del Id del rol de la persona proveniente de la tabla Rol',
  `email` varchar(45) DEFAULT NULL COMMENT 'Email del usuario',
  `password` varchar(45) DEFAULT NULL COMMENT 'Contraseña del usuario',
  `doc_id` varchar(20) DEFAULT NULL COMMENT 'Numero de documento de identidad de la persona'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idPer`, `nombre`, `apellido`, `telefono`, `idRol`, `email`, `password`, `doc_id`) VALUES
(1, 'Jorge', 'Rincon', 214715, 1, 'a@a.com', '123', '1023940465'),
(2, 'Pedro1', 'Perez', 67890123, 2, 'prueba1@mail.com', '1234', '123456788888'),
(3, 'Arturo', 'Campo', 2061234, 2, 'acampo@mail.com', NULL, ''),
(4, 'John', 'Ruiz', 0, 2, 'email@prueba.com', '123456', '111223344'),
(5, 'Brayan', 'Cabrera', 0, 1, 'emaildeprueba@hotmail.com', '1234567890', '10223495102'),
(6, 'Santiago', 'Daza', 1231454356, 1, 'sdaza@mail.com', '123', '102389571');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProd` int(11) NOT NULL COMMENT 'Id del producto',
  `nombre` varchar(25) NOT NULL COMMENT 'Nombre del producto',
  `descripcion` varchar(45) DEFAULT NULL COMMENT 'Descripcion del producto',
  `idMarca` int(11) NOT NULL COMMENT 'Id de la marca del producto',
  `precio` int(11) NOT NULL COMMENT 'Precio del producto',
  `fecha_ven` date DEFAULT NULL COMMENT 'Fecha de vencimiento del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProd`, `nombre`, `descripcion`, `idMarca`, `precio`, `fecha_ven`) VALUES
(1, 'Cereal Milo', 'Cereal Milo 500g', 7, 6000, '2023-03-02'),
(2, 'Cereal Zucaritas', 'Cereal Zucaritas 200g', 4, 2500, '2022-06-17'),
(3, 'Afeitador Desechable', 'Gillette prestobarba 3 afeitadora desechable', 2, 3000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(3) NOT NULL COMMENT 'Id de el proveedor',
  `nombre` varchar(25) NOT NULL COMMENT 'Nombres del proveedor',
  `apellido` varchar(25) NOT NULL COMMENT 'Apellidos del proveedor',
  `telefono` int(11) DEFAULT NULL COMMENT 'Telefono del proveedor',
  `email` varchar(45) DEFAULT NULL COMMENT 'Email del proveedor',
  `documento` varchar(20) DEFAULT NULL COMMENT 'documento de identificacion del proveedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `nombre`, `apellido`, `telefono`, `email`, `documento`) VALUES
(1, 'Camilo', 'Rodriguez', 1234567, 'emailprueba321@hotmail.com', '1000234581'),
(2, 'Arturo', 'Ramos', 8972134, 'mail@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL COMMENT 'Id del rol',
  `descRol` varchar(25) NOT NULL COMMENT 'Descripcion del rol'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `descRol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`idMov`),
  ADD KEY `id_usuario` (`idPersona`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPer`),
  ADD KEY `id_rol` (`idRol`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProd`),
  ADD KEY `id_marca` (`idMarca`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idPer` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la persona', AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `id_prod` FOREIGN KEY (`idProd`) REFERENCES `productos` (`idProd`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `id_rol` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `id_marca` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
