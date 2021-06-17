-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2021 a las 20:17:17
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenciatour`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `pk_id_cargo` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`pk_id_cargo`, `nombre`) VALUES
(1, 'Servicio al cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `pk_id_cliente` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `fk_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`pk_id_cliente`, `nombre`, `apellido`, `fecha_nacimiento`, `cedula`, `celular`, `telefono`, `correo`, `fk_usuario`) VALUES
(1, 'Pancho', 'Villa', '1989-09-23', '40223478278', '8092347653', NULL, 'elcliente@gmail.com', 4),
(2, 'karlos', 'apenas', '2000-07-03', '45094938763', '6538767838', '6783282165', 'hola@gmail.com', NULL),
(4, 'Jorge', 'Perez', '2000-07-03', '34565432343', '2345678888', '8098787732', 'jorge@gmail.com', NULL),
(5, 'prueba1', 'valvio', '2010-07-03', '45984767832', '2389947743', '7829778987', 'valvio@gmail.com', NULL),
(6, 'Catalina', 'Robles', '2019-03-21', '73877484432', '9894878934', '7893776542', 'roca@gmail.com', NULL),
(12, 'Gonzalo', 'Heredia', '1978-09-12', '34434555543', '2738947643', '2345675543', 'gonzalo@gmail.com', NULL),
(13, 'Omar', 'Estrella', '1999-03-10', '3458473652', '7384765566', '7468365522', 'omar@gmail.com', NULL),
(14, 'Nicoll', 'De Olmos', '1989-02-11', '34500773652', '7876546566', '9936875522', 'nicoll@gmail.com', NULL),
(15, 'Rafelys', 'Delgado', '1995-08-10', '39999973652', '6764575566', '2366865522', 'rafelys@gmail.com', NULL),
(18, 'Miguel', 'Faride', '2000-07-06', '2736789832', '7823276255', '8378897265', 'miguelito@gmail.com', NULL),
(20, 'ikhjoij', 'kljil', '2021-05-05', '888', '99', '99', 'lkioio@fvdsfsd.com', NULL),
(21, 'jkhijhh', 'sdwd', '2021-06-26', '87898', '99', '909', 'wsdwe@gmial.com', NULL),
(22, 'Jose', 'Andres', '2007-07-10', '3212341223', '2343321112', '1244323442', 'joelito@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `pk_id_empleado` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `fk_cargo` int(11) NOT NULL,
  `fk_usuario` int(11) DEFAULT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`pk_id_empleado`, `nombre`, `apellido`, `fk_cargo`, `fk_usuario`, `correo`) VALUES
(1, 'Omar', 'Estrella', 1, 1, 'omar@gmail.com'),
(2, 'Rafelys', 'Delgado', 1, 2, 'rafelys@gmail.com'),
(3, 'Nicoll', 'De Olmo', 1, 3, 'nicoll@gmail.com'),
(4, 'Juan', 'Perez', 1, 5, 'elempleado@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_pago`
--

CREATE TABLE `estado_pago` (
  `pk_id_estado` int(11) NOT NULL,
  `estado` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_pago`
--

INSERT INTO `estado_pago` (`pk_id_estado`, `estado`) VALUES
(1, 'Realizado'),
(2, 'Pendiente'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_tour`
--

CREATE TABLE `estado_tour` (
  `pk_estado_tour` int(11) NOT NULL,
  `estado_tour` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_tour`
--

INSERT INTO `estado_tour` (`pk_estado_tour`, `estado_tour`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `pk_id_provincia` int(11) NOT NULL,
  `nombre_provincia` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`pk_id_provincia`, `nombre_provincia`) VALUES
(1, 'La Vega'),
(2, 'Puerto Plata'),
(3, 'Samaná'),
(4, 'Monte Cristi'),
(5, 'Santo Domingo'),
(6, 'La Altagracia'),
(7, 'La Romana'),
(8, 'Santiago'),
(9, 'San Pedro de Macorís'),
(10, 'Barahona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion_cliente`
--

CREATE TABLE `reservacion_cliente` (
  `pk_id_reservacion` int(11) NOT NULL,
  `fk_tour_provincia` int(11) NOT NULL,
  `fk_cliente` int(11) NOT NULL,
  `fk_estado_pago` int(11) NOT NULL,
  `fecha_reservacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservacion_cliente`
--

INSERT INTO `reservacion_cliente` (`pk_id_reservacion`, `fk_tour_provincia`, `fk_cliente`, `fk_estado_pago`, `fecha_reservacion`) VALUES
(1, 1, 1, 3, '2021-05-25 00:00:00'),
(6, 1, 1, 3, '2021-06-15 07:48:28'),
(7, 3, 1, 2, '2021-06-15 15:29:13'),
(8, 2, 2, 2, '2021-06-15 19:26:39'),
(9, 1, 2, 2, '2021-06-15 19:30:44'),
(10, 4, 1, 3, '2021-06-15 23:00:53'),
(11, 17, 1, 3, '2021-06-16 17:36:04'),
(12, 17, 1, 3, '2021-06-16 17:39:17'),
(13, 14, 13, 2, '2021-06-16 19:58:10'),
(14, 2, 13, 2, '2021-06-16 20:50:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `pk_id_tipo` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`pk_id_tipo`, `tipo`) VALUES
(1, 'Cliente'),
(2, 'Empleado'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_provincia`
--

CREATE TABLE `tour_provincia` (
  `pk_tour_provincia` int(11) NOT NULL,
  `fk_provincia` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `precio` decimal(7,2) NOT NULL,
  `ruta_imagen` varchar(150) DEFAULT NULL,
  `detalle_tour` varchar(500) DEFAULT NULL,
  `fk_estado_tour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tour_provincia`
--

INSERT INTO `tour_provincia` (`pk_tour_provincia`, `fk_provincia`, `descripcion`, `fecha_inicio`, `fecha_fin`, `precio`, `ruta_imagen`, `detalle_tour`, `fk_estado_tour`) VALUES
(1, 6, 'Tour hacia la playa de Punta Cana', '2021-05-24 12:00:00', '2021-06-02 13:00:00', '10000.00', 'images/puntacana255x170.jpg', 'Un tour inolvidable, el cual incluye:<br>\r\n-Hospedaje en el Hotel \"Brisa marina\"<br>\r\n-Desayuno, almuerzo y cena<br>\r\n-Paseo por las zonas turísticas de la provincia<br>\r\n-Acceso VIP a todas las zonas del hotel<br>', 1),
(2, 7, 'Una experiencia inolvidable en la Isla Saona', '2021-05-23 07:00:00', '2021-05-25 16:00:00', '5000.00', 'images/islasaona255x170.jpg', NULL, 1),
(3, 2, 'Ven a disfrutar en Playa Sosua', '2021-07-10 00:00:00', '2021-07-11 00:00:00', '6000.00', 'images/p1.jpg', 'Incluye estadía en el hotel \"Los siete mares\"<br>\r\ncon desayuno incluido', 1),
(4, 1, 'Vamos de gira para la Confluencia', '2021-07-12 00:00:00', '2021-07-13 00:00:00', '7000.00', 'images/p2.jpg', 'Un torr hacia la Confluencia\r\nincluye paseo a caballo y hospedaje en el hotel Diana victoria ', 2),
(11, 9, 'Te invitamos a conocer San Pedro de Macoris', '2021-07-17 02:00:00', '2021-07-18 06:00:00', '5000.00', 'images/sanpedro.jpg', 'Tour Incluye:<br>\r\n- Transporte<br>\r\n- Visita Parque Central, la Catedral de San Pedro Apóstol y la Cueva de las Maravillas.<br>\r\n\r\n\r\n', 1),
(12, 1, 'Tour JARABACOA, Parapente + Salto Jimenoa\r\n', '2021-07-12 00:00:00', '2021-07-13 00:00:00', '5000.00', 'images/jarabacoa.jpg', 'Un tour hacia la Confluencia <br>\r\nEl tour incluye:<br>\r\n-Transporte<br>\r\n-Hospedaje<br>\r\n-Vuelo en Parapente<br>\r\n-Visita a el Salto Jimenoa.<br>\r\n-Visita a café Colao.<br>\r\n\r\n', 1),
(13, 6, 'Tour hacia La Altagracia', '2021-07-07 01:00:00', '2021-07-18 06:00:00', '4000.00', 'images/laaltagracia.jpg', 'Tour Incluye:<br>\r\n- Transporte<br>\r\n- Visita Basílica de Nuestra Señora de la Altagracia<br>\r\n- Visita al Parque Nacional del Este<br>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 1),
(14, 1, 'Vive la experiencia de conocer Constanza \r\n', '2021-07-21 02:00:00', '2021-07-22 06:00:00', '45000.00', 'images/constanza.jpg', 'Tour Incluye:<br>\r\n-Transporte<br>\r\n-Hospedaje <br>\r\n-Visita Parque Nacional Valle Nuevo<br>\r\n-Visita Las Piramides<br>\r\n-Visita Salto Aguas Blancas Waterfall<br>\r\n', 1),
(15, 2, 'Tour de Verano a Puerto Plata.', '2021-07-19 02:00:00', '2021-07-20 06:00:00', '7000.00', 'images/puertoplata.jpg', 'Tour Incluye:<br>\r\n-Transporte confortable <br>\r\n-Te y café de bienvenida <br>\r\n-Desayuno, comida y cena <br>\r\n-Hotel<br>\r\n-Recorrido por los 27 Charcos de Damajagua <br>\r\n-Visita al teleférico <br>\r\n-Visita a Playa Dorada <br>', 1),
(16, 3, 'Disfruta nuestro tour a Samaná.\r\n', '2021-07-21 02:00:00', '2021-07-22 06:00:00', '8000.00', 'images/samana.jpg', 'Tour Incluye:<br>\r\n-Transporte<br>\r\n-Desayuno, comida y cena.<br>\r\n-Hotel<br>\r\n-Visita al malecón de Samaná<br>\r\n-Visita a los 3 puentes de Samaná<br>\r\n-Visita a la Isla de Cayó Levantado<br>\r\n-Visita a la Fuente<br>', 2),
(17, 2, 'Disfruta de nuestro tour a los Charcos de Damajuana y Playa Cofresi.\r\n', '2021-03-15 00:00:00', '2021-07-22 00:00:00', '7500.00', 'images/singapore.jpg', 'Tour Incluye:<br>\r\n*Transporte<br>\r\n*Desayuno<br>\r\n*Comida<br>\r\n*Recorrido por los charcos<br>\r\n*Chalecos Salvavidas<br>\r\n*Visita a Playa Cofresi.<br>\r\n', 2),
(118, 10, 'Tour hacia Barahona', '2021-06-11 00:00:00', '2021-06-18 00:00:00', '4000.00', 'images/images/barahona.jpg', 'Tour Incluye:<br>\r\n- Transporte<br>\r\n- Visita al Lago enriquillo<br>\r\n- Visita a la mina de Larimar<br>\r\n- Visita Catedral de Barahona<br>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `pk_id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `contrasena` varchar(40) NOT NULL,
  `fk_tipo` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`pk_id_usuario`, `nombre_usuario`, `contrasena`, `fk_tipo`, `correo`) VALUES
(1, 'omar', '000', 3, 'omar@gmail.com'),
(2, 'rafelys', '111', 3, 'rafelys@gmail.com'),
(3, 'nicoll', '222', 3, 'nicoll@gmail.com'),
(4, 'cliente', '123', 1, 'elcliente@gmail.com'),
(5, 'empleado', '321', 2, 'elempleado@gmail.com'),
(6, 'abc', '123', 1, 'hola@gmail.com'),
(7, 'pepe', '111', 1, 'jorge@gmail.com'),
(15, 'gon', '123', 0, 'gonzalo@gmail.com'),
(18, 'migue', '111', 1, 'miguelito@gmail.com'),
(19, 'uiy8yu', 'ioii', 1, 'kjuhiuy@gmail.com'),
(20, 'jklnklj', 'jkhh', 1, 'lkioio@fvdsfsd.com'),
(21, 'juhdsisuhd', 'jkhkj', 1, 'wsdwe@gmial.com'),
(22, 'joe', '111', 1, 'joelito@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`pk_id_cargo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`pk_id_cliente`),
  ADD KEY `correo` (`fk_usuario`) USING BTREE;

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`pk_id_empleado`),
  ADD KEY `fk_cargo` (`fk_cargo`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indices de la tabla `estado_pago`
--
ALTER TABLE `estado_pago`
  ADD PRIMARY KEY (`pk_id_estado`);

--
-- Indices de la tabla `estado_tour`
--
ALTER TABLE `estado_tour`
  ADD PRIMARY KEY (`pk_estado_tour`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`pk_id_provincia`);

--
-- Indices de la tabla `reservacion_cliente`
--
ALTER TABLE `reservacion_cliente`
  ADD PRIMARY KEY (`pk_id_reservacion`),
  ADD KEY `fk_tour_provincia` (`fk_tour_provincia`),
  ADD KEY `fk_cliente` (`fk_cliente`),
  ADD KEY `fk_estado_pago` (`fk_estado_pago`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`pk_id_tipo`);

--
-- Indices de la tabla `tour_provincia`
--
ALTER TABLE `tour_provincia`
  ADD PRIMARY KEY (`pk_tour_provincia`),
  ADD KEY `fk_provincia` (`fk_provincia`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`pk_id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `pk_id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `pk_id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `pk_id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado_pago`
--
ALTER TABLE `estado_pago`
  MODIFY `pk_id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado_tour`
--
ALTER TABLE `estado_tour`
  MODIFY `pk_estado_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `pk_id_provincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `reservacion_cliente`
--
ALTER TABLE `reservacion_cliente`
  MODIFY `pk_id_reservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `pk_id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tour_provincia`
--
ALTER TABLE `tour_provincia`
  MODIFY `pk_tour_provincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `pk_id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`pk_id_usuario`);

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`fk_cargo`) REFERENCES `cargo` (`pk_id_cargo`),
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`pk_id_usuario`);

--
-- Filtros para la tabla `reservacion_cliente`
--
ALTER TABLE `reservacion_cliente`
  ADD CONSTRAINT `reservacion_cliente_ibfk_1` FOREIGN KEY (`fk_tour_provincia`) REFERENCES `tour_provincia` (`pk_tour_provincia`),
  ADD CONSTRAINT `reservacion_cliente_ibfk_2` FOREIGN KEY (`fk_cliente`) REFERENCES `cliente` (`pk_id_cliente`),
  ADD CONSTRAINT `reservacion_cliente_ibfk_3` FOREIGN KEY (`fk_estado_pago`) REFERENCES `estado_pago` (`pk_id_estado`);

--
-- Filtros para la tabla `tour_provincia`
--
ALTER TABLE `tour_provincia`
  ADD CONSTRAINT `tour_provincia_ibfk_1` FOREIGN KEY (`fk_provincia`) REFERENCES `provincia` (`pk_id_provincia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
