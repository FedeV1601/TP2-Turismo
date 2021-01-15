-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 16:23:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas_comunes`
--

CREATE TABLE `areas_comunes` (
  `id_areac` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `id_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `areas_comunes`
--

INSERT INTO `areas_comunes` (`id_areac`, `nombre`, `imagen`, `id_hotel`) VALUES
(1, 'Piscina', 'ec-piscina.jpg', 1),
(2, 'Gimnasio', 'ec-gym1.jpg', 3),
(3, 'Sala de Estar', 'ec-estar.jpg', 8),
(4, 'Restoran', 'ec-salonbar.jpg', 5),
(5, 'Piscina', 'ec-pileta.jpg', 4),
(6, 'Gimnasio', 'ec-gym2.jpeg', 7),
(7, 'Pileta', 'ec-piletaquincho.jpg', 6),
(8, 'Terraza', 'terraza.jpg', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_ciudad` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `imagen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_ciudad`, `nombre`, `imagen`) VALUES
(1, 'Buenos Aires', 'bsas.jpg'),
(2, 'Pto. Iguazu', 'ptoigz.jpg'),
(3, 'Bariloche', 'bari.jpg'),
(4, 'Salta', 'Salta.jpg'),
(6, 'Chaco', '5fc802fe1c34f.jpg'),
(7, 'La Rioja', '5fc84f414feca.jpg'),
(13, 'Jujuy', '5fda218ee6935.jpg'),
(14, 'San Juan', '5fda21bc8db13.jpg'),
(15, 'Neuquen', '5fda21a39f0c4.jpg'),
(17, 'Santa Cruz', '5fd57d2e416df.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `numero` varchar(10) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `id_hab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`numero`, `tipo`, `precio`, `imagen`, `id_hab`) VALUES
('101', 'Doble Matrimonial Superior', 3000, 'hb-suite.jpg', 1),
('102', 'Doble Matrimonial Economica', 2200, 'hb-grande.jpg', 2),
('103', 'Triple Economica', 3300, 'hb-dormih.jpg', 3),
('104', 'Doble Twin', 2600, 'hb-twinlinda.jpg', 4),
('105', 'Doble Matrimonial Economica', 2600, 'hb-doble2.jpg', 5),
('106', 'Doble Matrimonial Superior', 3300, 'hb-doble.jpg', 6),
('107', 'Simple ', 2000, 'hb-simple.jpg', 7),
('110', 'Twin Ecoonomica', 2500, 'hb-twin.jpg', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `id_hotel` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`id_hotel`, `nombre`, `direccion`, `categoria`, `imagen`, `id_ciudad`, `descripcion`) VALUES
(1, 'Hotel Barilo', 'San Martin 200', '4 Estrellas', 'hotelbarilo.jpg', 3, 'El Hotel Barilo es un establecimiento de 4 estrellas que ofrece habitaciones amplias y luminosas con vistas al lago Nahuel Huapi y a las montañas nevadas. El establecimiento se encuentra en Bariloche y facilita servicio guardaesquíes. La estación de esquí Catedral está a 25 minutos en coche del alojamiento.\r\n'),
(2, 'Gran Hotel Porteño ', 'Diagonal Norte 1100', '3 Estrellas', 'hotelbsas.jpg', 1, 'El Gran Hotel Porteño, situado a pocos metros de la Avenida 9 de Julio y a 300 metros del Obelisco, ofrece habitaciones confortables y fácil acceso al transporte público de Buenos Aires. Se proporciona WiFi gratuita. La Plaza de Mayo y la Casa Rosada se encuentran a 500 metros.'),
(3, 'Hotel Cataratas', 'Maipu 800', '2 estrellas', 'hoteligr.jpg', 2, 'El Hotel Cataras está situado enfrente de la estación de autobuses de Puerto Iguazu y a 2 km del centro de esta localidad. Ofrece aparcamiento privado, un centro de negocios y alojamientos funcionales con conexión Wi-Fi gratuita.'),
(4, 'Hotel 7 Colores', 'Guemes 3400', '5 Estrellas', 'hotelsalta.jpg', 4, 'El Hotel 7 Colores, que goza de vistas panorámicas al valle de Lerma, está situado en el distrito de Monumento, a 10 calles del centro. Ofrece habitaciones amplias, piscina climatizada y restaurante.'),
(5, 'Hotel Obelisco', 'Corrientes 900', '5 Estrellas', 'hotelobelisco.jpg', 1, 'El Hotel Obelisco se encuentra en Buenos Aires, en la avenida Corrientes, a 400 metros del teatro Colón. Ofrece WiFi gratuita y un bar.\r\nTodas las habitaciones del Ibis Buenos Aires Obelisco disponen de aire acondicionado, caja fuerte, TV de pantalla plana y baño con ducha y secador de pelo.\r\nCuenta con recepción 24 horas e instalaciones de negocios.'),
(6, 'Hotel Nahuelito', 'Belgrano 345', '5 Estrellas', 'hotelnahuel.jpg', 3, 'El Hotel Nahuelito se encuentra en las laderas del cerro Otto, a 5 km del centro de Bariloche y a 15 km de la estación de esquí Catedral. Ofrece piscina, vistas panorámicas a las montañas y a los bosques y WiFi gratuita.\r\nEl Monasterio Hotel Boutique presenta una decoración elegante de estilo montañés y dispone de zona de estar amplia con suelo de parquet, chimenea rústica de piedra y vistas preciosas'),
(7, 'Hotel Misiones', 'Carlos Calvo 567', '4 Estrellas', 'hotelcc.jpg', 2, 'El Hotel Misiones, de 4 estrellas, está situado a las afueras de Puerto Iguazú y dispone de 2 piscinas al aire libre y un ambiente acogedor en pleno contacto con la naturaleza. Ofrece desayuno y WiFi gratuita.\r\nLas habitaciones son amplias y tienen vistas a las piscinas y al bosque que rodea el hotel.'),
(8, 'Hotel Luxor Salta', 'Sarmiento 1111', '3 Estrellas', 'hotelsar.jpg', 4, 'El Hotel Luxor Salta ofrece habitaciones cómodas y elegantes en el centro de Salta, a solo 150 metros de la plaza principal. Se proporciona WiFi gratis. Los huéspedes pueden disfrutar del solárium de la azotea.'),
(9, 'Intercontinental Bs. As.', 'Moreno 600', '5 Estrellas', '5fda1d2848833.jpg', 1, 'El Intercontinental Buenos Aires de 5 estrellas presenta una arquitectura clásica y ofrece jardines hermosos y vistas panorámicas en un ambiente tranquilo, en la la animada capital de Argentina.\r\nEl club de bienestar y spa tiene piscina cubierta, gimnasio, sauna y solárium. Hay masajes, shiatsu, entrenador personal y otros servicios disponibles bajo petición.'),
(10, 'Hotel Conte', 'M. T. de Alvear 1290', '4 Estrellas', 'hotelcontebsas.jpg', 1, 'El Hotel Conte, situado en un edificio impresionante a solo 450 metros del Obelisco, ofrece habitaciones elegantes con WiFi gratuita. Se sirven desayunos. La Plaza de Mayo está a 1 km.\r\nLas habitaciones del Conte Hotel tienen suelo de moqueta, TV por cable, minibar y escritorio grande. Todas presentan una decoración sobria, con edredones y cortinas de colores claros.'),
(11, 'Hotel Alejandro 1°', 'Mancora 400', '4 Estrellas', '5fda23ca85fd0.jpg', 4, 'Las habitaciones del Hotel Alejandro 1º disponen de aire acondicionado y minibar. Todas tienen vistas a las torres históricas de la ciudad, al cerro San Bernardo y al valle circundante.'),
(12, 'Hotel Water Falls', 'Posadas 1233 ', '5 Estrellas', 'hotelfalls.jpg', 2, 'El O2 Hotel Water Falls está ubicado en Puerto Iguazú, a 2,5 km del Casino Iguazú, y ofrece alojamiento, restaurante, aparcamiento privado gratuito, centro de fitness y piscina de temporada al aire libre. Además, este hotel de 4 estrellas ofrece habitaciones con aire acondicionado, WiFi gratuita y baño privado. También hay recepción las 24 horas, servicio de habitaciones y servicio de organización de excursiones.'),
(13, 'Hotel Lake', 'Cordoba 211', '4 Estrellas', 'hotellakebarilo.jpg', 3, 'El Hotel Lake Bariloche está ubicado en San Carlos de Bariloche, a 2,7 km del Centro Cívico, y tiene restaurante, aparcamiento privado gratuito, bar y salón común. El establecimiento cuenta con jardín y está cerca de diversos lugares de interés conocidos, a 1,6 km del centro cívico, a menos de 1 km del club Andino Bariloche y a 20 minutos a pie del casino Tresor. '),
(14, 'Faena Hotel', 'Alicia m. de Justo 1000', '5 Estrellas', '5fda238390c1f.jpg', 1, 'El Faena Hotel  está situado en Puerto Madero y a poca distancia a pie de varios lugares de interés turístico.\r\nEste hotel boutique cuenta con zonas comunes acogedoras y habitaciones confortables y tranquilas con una superficie de 26 m² como mínimo. Todas están equipadas con TV por cable, caja fuerte y teléfono, entre otras comodidades.'),
(15, 'Hotel Central', 'Rivadavia 2300', '5 Estrellas', '5fd54b1e5689d.jpg', 1, 'El Hotel Central está situado en Buenos Aires, a 1,1 km del palacio Barolo, y ofrece conexión Wi-Fi gratuita, registros de entrada y salida exprés y mostrador de información turística. El establecimiento está a 3 km del centro cultural Kirchner, a 3,2 km de la plaza de Mayo y a 3,5 km del cementerio de la Recoleta. El alojamiento dispone de recepción 24 horas, cocina compartida y servicio de cambio de divisa.'),
(16, 'Hotelindo', 'Viamonte 800', '3 Estrellas', '5fda25ab03956.jpg', 17, 'Los alojamientos cuentan con suelo de parquet, cocina totalmente equipada con microondas, zona de comedor, TV de pantalla plana vía satélite y baño privado con ducha y artículos de aseo gratuitos. Hay nevera, tostadora, hervidor de agua y cafetera.'),
(23, 'Hotel Nuevo', 'Papapapa', '1 Estrella', '5fd9973c2ffd9.jpeg', 6, 'hola hola'),
(26, 'Hotel Plaza', 'Av de Mayo 1300', '*****', '5fda26526039f.jpg', 1, 'Este lujoso hotel está a solo 50 metros de la avenida Corrientes y a 5 calles del Obelisco. El famoso teatro Colón también está a 5 calles. En el establecimiento hay WiFi gratuita y cada mañana se sirve un desayuno buffet en el bar que incluye cruasanes y mermeladas regionales. También se ofrece servicio de habitaciones.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_serv` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `id_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_serv`, `nombre`, `imagen`, `id_hotel`) VALUES
(1, 'Room Service', 'ser-bar.jpg', 0),
(2, 'Informacion Turistica', 'serinfotur.jpg', 0),
(4, 'Recepcion 24hs', 'ec-checkin.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_users` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`nombre`, `email`, `id_users`, `password`) VALUES
('fede', 'admin@admin.com', 1, 'admin'),
('fede', 'admin@admin.com', 2, 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas_comunes`
--
ALTER TABLE `areas_comunes`
  ADD PRIMARY KEY (`id_areac`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id_hab`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `id_ciudad` (`id_ciudad`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_serv`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas_comunes`
--
ALTER TABLE `areas_comunes`
  MODIFY `id_areac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id_hab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_serv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD CONSTRAINT `hoteles_ibfk_1` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id_ciudad`),
  ADD CONSTRAINT `hoteles_ibfk_2` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudades` (`id_ciudad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
