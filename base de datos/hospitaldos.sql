-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2016 a las 00:08:57
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospitaldos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alta`
--

CREATE TABLE `alta` (
  `IdAB` int(11) NOT NULL,
  `Caracteristica` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `IdCita` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`IdCita`, `IdUsuario`, `Fecha`, `Hora`) VALUES
(6, 2, '2016-12-03', '02:13:00'),
(8, 1, '2016-12-06', '19:09:00'),
(10, 2, '2016-12-06', '20:46:00'),
(11, 1, '2016-12-07', '14:00:00'),
(12, 3, '2016-12-07', '13:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedad`
--

CREATE TABLE `enfermedad` (
  `IdEnfermedad` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Caracteristica` varchar(300) NOT NULL,
  `CountMes` int(11) NOT NULL,
  `CountTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enfermedad`
--

INSERT INTO `enfermedad` (`IdEnfermedad`, `Nombre`, `Caracteristica`, `CountMes`, `CountTotal`) VALUES
(13, 'Ulcera por Presion', '', 0, 0),
(14, 'Ulcera Venosa', '', 0, 0),
(15, 'Ulcera Arterial', '', 0, 0),
(16, 'Rechazo de Material', '', 0, 0),
(17, 'Quemaduras', '', 0, 0),
(18, 'Dehicencia de Herida', '', 0, 0),
(19, 'Pie Diabetico', '', 0, 0),
(20, 'Laceraciones', '', 0, 0),
(21, 'Sindrome de Fornier', '', 0, 0),
(22, 'Abscesos', '', 0, 0),
(23, 'Herida Por Arma de Fuego', '', 0, 0),
(24, 'Ostomias', '', 0, 0),
(25, 'Mano Diabetica', '', 0, 0),
(26, 'Rechazo de Ingerto', '', 0, 0),
(27, 'Mordedura', '', 0, 0),
(28, 'Ulceras por Trauma', '', 0, 0),
(29, 'Herida por Tumores', '', 0, 0),
(30, 'Enviados a Domicilio', '', 0, 0),
(31, 'Hospitalizados', '', 0, 0),
(32, 'Cirugias Menores', '', 0, 0),
(33, 'Terapia Con Larvas', '', 0, 0),
(34, 'Glucometria', '', 0, 0),
(35, 'Colocacion de Terapia Vac', '', 0, 0),
(36, 'Colocacion de Sonda Foley', '', 0, 0),
(37, 'Toma de Laboratorio', '', 0, 0),
(38, 'Toma de cultivos de la Herida', '', 0, 0),
(39, 'Capacitaciones', '', 0, 0),
(40, 'Curacion Tradicional', '', 0, 0),
(41, 'Terapia Humeda', '', 0, 0),
(42, 'Manejo Nutricional ', '', 0, 0),
(43, 'Paciente Ambulatorio', '', 0, 0),
(44, 'Paciente Internado', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `IdEstado` int(11) NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`IdEstado`, `Nombre`) VALUES
(1, 'Queretaro'),
(3, 'Colima'),
(4, 'Aguascalientes'),
(5, 'BajaCalifornia'),
(6, 'BajaCaliforniaSur'),
(7, 'Campeche'),
(8, 'Chihuahua'),
(9, 'Chiapas'),
(10, 'Campeche'),
(11, 'Chihuahua'),
(13, 'Coahuila'),
(14, 'Colima'),
(15, 'Durango'),
(16, 'Guanajuato'),
(17, 'Guerrero'),
(18, 'Hidalgo'),
(19, 'Jalisco'),
(20, 'Estado de Mexico'),
(21, 'Michoacan'),
(22, 'Morelos'),
(23, 'Nayarit'),
(24, 'Nuevo Leon'),
(25, 'Oaxaca'),
(26, 'Puebla'),
(27, 'Quintana Roo'),
(28, 'San Luis Potosi'),
(29, 'Sinaloa'),
(30, 'Sonora'),
(31, 'Tabasco'),
(32, 'Tamaulipas'),
(33, 'Tlaxcala'),
(34, 'Ciudad de Mexico'),
(35, 'Veracruz'),
(36, 'Yucatan'),
(37, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herida`
--

CREATE TABLE `herida` (
  `IdHerida` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdEnfermedad` int(11) NOT NULL,
  `Largo` double NOT NULL,
  `Ancho` double NOT NULL,
  `Profundidad` double NOT NULL,
  `Observacion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `herida`
--

INSERT INTO `herida` (`IdHerida`, `IdUsuario`, `IdEnfermedad`, `Largo`, `Ancho`, `Profundidad`, `Observacion`) VALUES
(1, 1, 13, 34, 32, 32, 'ninguna es prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `IdInventario` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Proovedor` varchar(50) NOT NULL,
  `Caracteristica` varchar(300) NOT NULL,
  `Costo` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`IdInventario`, `Tipo`, `Nombre`, `Proovedor`, `Caracteristica`, `Costo`, `Fecha`, `Cantidad`) VALUES
(3, '', 'name', 'proveedor', 'caracteristica', 1212, '2016-12-17', 32),
(4, '', 'ivan', 'carapia', 'jol', 33, '2016-12-07', 23),
(5, 'Maquina', 'uno', 'dos', 'tres', 23, '2016-12-03', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizacion`
--

CREATE TABLE `localizacion` (
  `IdLocalizacion` int(11) NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localizacion`
--

INSERT INTO `localizacion` (`IdLocalizacion`, `Nombre`) VALUES
(1, 'Extermidad Superior'),
(2, 'Extremidad Inferior'),
(3, 'Tronco'),
(4, 'Cabeza'),
(5, 'Cuello');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `IdMedicamento` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Proveedor` varchar(60) NOT NULL,
  `Caracteristicas` varchar(300) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Costo` double NOT NULL,
  `Caducidad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`IdMedicamento`, `Nombre`, `Proveedor`, `Caracteristicas`, `Cantidad`, `Costo`, `Caducidad`) VALUES
(1, 'CIPLOFOXACINO', 'BIALAB', 'ES MEDICAMENTO PARA EL PIE DIABETICO', 20, 200, '2016-12-24'),
(2, 'nuevo', 'es ejemplo', 'cas', 12, 1222, '2016-12-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `IdPersonal` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguro`
--

CREATE TABLE `seguro` (
  `IdSeguro` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguro`
--

INSERT INTO `seguro` (`IdSeguro`, `Nombre`) VALUES
(1, 'Ninguno'),
(2, 'Seguro Social'),
(3, 'IMSS'),
(4, 'SeguroPopular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `IdSesion` int(11) NOT NULL,
  `IdCita` int(11) NOT NULL,
  `IdHerida` int(11) NOT NULL,
  `IdMedicamento` int(11) NOT NULL,
  `TipoPaciente` int(11) NOT NULL,
  `IdLocalizacion` int(11) NOT NULL,
  `Observaciones` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `ApellidoP` varchar(40) NOT NULL,
  `ApellidoM` varchar(40) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Edad` int(11) NOT NULL,
  `IdEstado` int(11) NOT NULL,
  `IdSeguro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Nombre`, `ApellidoP`, `ApellidoM`, `Telefono`, `Correo`, `Edad`, `IdEstado`, `IdSeguro`) VALUES
(1, 'Ivan', 'Carapia', 'Barajas', '2211717', 'webol94@hotmail.com', 22, 1, 1),
(2, 'Enrique', 'Carapia', 'Barajas', '4423695920', 'eragon660@hotmail.com', 21, 1, 1),
(3, 'Enrique', 'Carapia', 'Barajas', '4423695920', 'eragon660@hotmail.com', 21, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alta`
--
ALTER TABLE `alta`
  ADD PRIMARY KEY (`IdAB`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`IdCita`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `enfermedad`
--
ALTER TABLE `enfermedad`
  ADD PRIMARY KEY (`IdEnfermedad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `herida`
--
ALTER TABLE `herida`
  ADD PRIMARY KEY (`IdHerida`),
  ADD KEY `IdUsuario` (`IdUsuario`),
  ADD KEY `herida_ibfk_2` (`IdEnfermedad`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`IdInventario`);

--
-- Indices de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  ADD PRIMARY KEY (`IdLocalizacion`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`IdMedicamento`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`IdPersonal`);

--
-- Indices de la tabla `seguro`
--
ALTER TABLE `seguro`
  ADD PRIMARY KEY (`IdSeguro`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`IdSesion`),
  ADD KEY `IdCita` (`IdCita`),
  ADD KEY `IdHerida` (`IdHerida`),
  ADD KEY `IdMedicamento` (`IdMedicamento`),
  ADD KEY `IdLocalizacion` (`IdLocalizacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `IdEstado` (`IdEstado`),
  ADD KEY `IdSeguro` (`IdSeguro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alta`
--
ALTER TABLE `alta`
  MODIFY `IdAB` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `IdCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `enfermedad`
--
ALTER TABLE `enfermedad`
  MODIFY `IdEnfermedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `herida`
--
ALTER TABLE `herida`
  MODIFY `IdHerida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `IdInventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `localizacion`
--
ALTER TABLE `localizacion`
  MODIFY `IdLocalizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `IdMedicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `IdPersonal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `seguro`
--
ALTER TABLE `seguro`
  MODIFY `IdSeguro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `IdSesion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`);

--
-- Filtros para la tabla `herida`
--
ALTER TABLE `herida`
  ADD CONSTRAINT `herida_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`),
  ADD CONSTRAINT `herida_ibfk_2` FOREIGN KEY (`IdEnfermedad`) REFERENCES `enfermedad` (`IdEnfermedad`);

--
-- Filtros para la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD CONSTRAINT `sesion_ibfk_1` FOREIGN KEY (`IdCita`) REFERENCES `cita` (`IdCita`),
  ADD CONSTRAINT `sesion_ibfk_2` FOREIGN KEY (`IdHerida`) REFERENCES `herida` (`IdHerida`),
  ADD CONSTRAINT `sesion_ibfk_3` FOREIGN KEY (`IdMedicamento`) REFERENCES `medicamento` (`IdMedicamento`),
  ADD CONSTRAINT `sesion_ibfk_4` FOREIGN KEY (`IdLocalizacion`) REFERENCES `localizacion` (`IdLocalizacion`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdEstado`) REFERENCES `estado` (`IdEstado`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`IdSeguro`) REFERENCES `seguro` (`IdSeguro`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
