-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2020 a las 09:20:19
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaropa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(255) NOT NULL,
  `idProducto` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(255) NOT NULL,
  `talle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `precioActual` int(255) NOT NULL,
  `genero` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto1` text CHARACTER SET utf8 COLLATE utf8_bin,
  `foto2` text CHARACTER SET utf8 COLLATE utf8_bin,
  `foto3` text CHARACTER SET utf8 COLLATE utf8_bin,
  `tipo` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `oferta` tinyint(1) NOT NULL,
  `precioAnterior` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precioActual`, `genero`, `descripcion`, `foto1`, `foto2`, `foto3`, `tipo`, `oferta`, `precioAnterior`) VALUES
(1, 'Pantalon formal gabardina slim fit', 6400, 'hombre', 'Pantalón formal en moldería slim fit en twill mezcla de poliéster con lycra.', 'https://content.ib2c.com.ar/224/products/331032_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/331033_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/331034_1100x1500.jpg', 'pantalones', 0, NULL),
(2, 'Bermuda gabardina garment dye', 4500, 'hombre', 'Bermuda chino en gabardina mezcla de algodón y lycra teñida en prenda.', 'https://content.ib2c.com.ar/224/products/330333_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/330334_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/330336_1100x1500.jpg', 'pantalones', 0, NULL),
(3, 'Camisa formal basica', 6980, 'hombre', 'Camisa formal en poplin ultrafino de 100% algodón. Moldería Slim Fit regular.', 'https://content.ib2c.com.ar/224/products/279538_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/279540_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/279541_1100x1500.jpg', 'camisas', 1, 12500),
(4, 'Bikini musculosa lisa', 4850, 'mujer', 'Traje de baño de dos piezas; corpiño musculosa con tiras regulables y bombacha. 87% Poliamida 13% Elastano.', 'https://content.ib2c.com.ar/224/products/322579_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/322580_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/322582_1100x1500.jpg', 'bikinis', 0, NULL),
(5, 'Bikini Melange', 7200, 'mujer', 'Traje de baño en dos piezas. Tejido Melange. 42% poliamida 42% poliester 16% elastano.', 'https://content.ib2c.com.ar/224/products/318129_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318127_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318128_1100x1500.jpg', 'bikinis', 1, 9000),
(6, 'Vestido amplio lino rayado', 6800, 'mujer', 'Vestido corto amplio manga corta. Tejido Jersey Rayado. 100% lino.', 'https://content.ib2c.com.ar/224/products/318347_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318348_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318349_1100x1500.jpg', 'vestidos', 0, NULL),
(25, 'Camisa lino lavado button down', 6700, 'hombre', 'Camisa informal manga larga en 100% lino.', 'https://content.ib2c.com.ar/224/products/327776_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/327779_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/327778_1100x1500.jpg', 'camisas', 0, NULL),
(26, 'Camisa lino lavado button down', 6700, 'hombre', 'Camisa informal manga larga en 100% lino.', 'https://content.ib2c.com.ar/224/products/329293_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/329295_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/329298_1100x1500.jpg', 'camisas', 0, NULL),
(27, 'Camisa lino lavado button down', 6700, 'hombre', 'Camisa informal manga larga en 100% lino.', 'https://content.ib2c.com.ar/224/products/329300_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/329303_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/329307_1100x1500.jpg', 'camisas', 0, NULL),
(28, 'Camisa poplin con lycra estampada', 4900, 'hombre', 'Camisa informal manga larga en poplin ultra fino estampado mezcla de algodón y lycra. Molderia regular.', 'https://content.ib2c.com.ar/224/products/329357_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/329359_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/329358_1100x1500.jpg', 'camisas', 0, NULL),
(29, 'Camisa poplin con lycra estampada', 4900, 'hombre', 'Camisa informal manga larga en poplin ultra fino estampado mezcla de algodón y lycra. Molderia regular.', 'https://content.ib2c.com.ar/224/products/327809_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/327813_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/327811_1100x1500.jpg', 'camisas', 0, NULL),
(30, 'Saco envivado algodón lino', 18800, 'hombre', 'Saco liviano informal en gabardina tramada mezcla de algodón y lino sin forreria', 'https://content.ib2c.com.ar/224/products/329674_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/329673_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/329675_1100x1500.jpg', 'sacos', 1, 35900),
(31, 'Saco envivado algodón lycra', 13800, 'hombre', 'Saco liviano informal en gabardina tramada mezcla de algodón y lycra sin forreria.', 'https://content.ib2c.com.ar/224/products/283275_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/283273_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/283269_1100x1500.jpg', 'sacos', 0, NULL),
(32, 'Bota combinada picada', 17500, 'hombre', 'Bota acordonada caña baja en combinación cuero aceitado y gamuza. Detalle de picado en capellada. Forro y plantilla cuero. Fondo goma', 'https://content.ib2c.com.ar/224/products/276854_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/276857_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/276859_1100x1500.jpg', 'zapatos', 0, NULL),
(33, 'Acordonado picado', 12800, 'hombre', 'Zapato formal acordonado en cuero vacuno anilina con detalle de picado en capellada. Forro y plantilla cuero. Fondo cuero', 'https://content.ib2c.com.ar/224/products/350441_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/193971_960x1280.jpg', 'https://content.ib2c.com.ar/224/products/193972_960x1280.jpg', 'zapatos', 0, NULL),
(34, 'Acordonado prusiano redondo', 13800, 'hombre', 'Zapato formal acordonado en cuero vacuno. Forro y plantilla de cuero. Fondo de cuero.', 'https://content.ib2c.com.ar/224/products/330854_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/330855_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/330857_1100x1500.jpg', 'zapatos', 1, 45000),
(35, 'Campera cuero moto matelasse', 29000, 'hombre', 'Campera en cuero anilina ovino extra suave.', 'https://content.ib2c.com.ar/224/products/280917_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/280919_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/280921_1100x1500.jpg', 'camperas', 0, NULL),
(36, 'Campera con capucha liviana', 14500, 'hombre', 'Campera con capucha, sin forro, en tejido twill de 100% poliéster resistente al agua.', 'https://content.ib2c.com.ar/224/products/327846_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/327848_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/327847_1100x1500.jpg', 'camperas', 0, NULL),
(37, 'Campera rompeviento con capucha', 6650, 'hombre', 'Campera con capucha en tejido técnico mezcla de poliamida y poliéster, resistente al agua', 'https://content.ib2c.com.ar/224/products/279699_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/279700_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/279702_1100x1500.jpg', 'camperas', 0, NULL),
(38, 'Billetera cuero lancaster lisa', 3900, 'hombre', 'Billetera en cuero vacuno con espacio interior porta tarjetas. 10,5 cms ancho 8,5 cms altura', 'https://content.ib2c.com.ar/224/products/282701_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/282699_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/282700_1100x1500.jpg', 'accesorios', 0, NULL),
(39, 'Corbata finita circulos irregulares', 3300, 'hombre', 'Corbata en 100% seda natural con pala angosta de 6 cms', 'https://content.ib2c.com.ar/224/products/280739_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/280740_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/280743_1100x1500.jpg', 'accesorios', 0, NULL),
(40, 'Camisa amplia seda lavada', 22000, 'mujer', 'Camisa amplia con cuello, manga larga. Tajos en ruedo y recorte en espalda. Calidad de seda crepe de chine lavada. 100% Seda.', 'https://content.ib2c.com.ar/224/products/319121_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/319122_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/319123_1100x1500.jpg', 'camisas', 0, NULL),
(41, 'Camisa amplia seda lavada', 22000, 'mujer', 'Camisa amplia con cuello, manga larga. Tajos en ruedo y recorte en espalda. Calidad de seda crepe de chine lavada. 100% Seda.', 'https://content.ib2c.com.ar/224/products/319891_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/319893_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/319892_1100x1500.jpg', 'camisas', 1, 27000),
(42, 'Camisa amplia seda lavada', 22000, 'mujer', 'Camisa amplia con cuello, manga larga. Tajos en ruedo y recorte en espalda. Calidad de seda crepe de chine lavada. 100% Seda.', 'https://content.ib2c.com.ar/224/products/316572_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316571_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316574_1100x1500.jpg', 'camisas', 0, NULL),
(43, 'Bikini pique', 7200, 'mujer', 'Traje de baño en dos piezas. Modelo triángulo. Tejido pique. 93% poliamida 7% elastano.', 'https://content.ib2c.com.ar/224/products/318134_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318135_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318136_1100x1500.jpg', 'bikinis', 1, 9999),
(44, 'Bikini pique', 7200, 'mujer', 'Traje de baño en dos piezas. Modelo triángulo. Tejido pique. 93% poliamida 7% elastano.', 'https://content.ib2c.com.ar/224/products/318138_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318140_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318137_1100x1500.jpg', 'bikinis', 0, NULL),
(45, 'Americana nudo flame', 2900, 'mujer', 'Remera cuello redondo sin mangas con espalda abierta. Tejido flamé. 100% algodón pima.', 'https://content.ib2c.com.ar/224/products/322416_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/322417_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/322419_1100x1500.jpg', 'remeras', 0, NULL),
(46, 'Musculosa lino spray', 3920, 'mujer', 'Musculosa espalda nadadora con proceso sobre teñido. Tejido jersey. 100% lino.', 'https://content.ib2c.com.ar/224/products/316726_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316727_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316729_1100x1500.jpg', 'remeras', 0, NULL),
(47, 'Bolso lino', 5880, 'mujer', NULL, 'https://content.ib2c.com.ar/224/products/344637_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/344638_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/344639_1100x1500.jpg', 'carteras', 0, NULL),
(48, 'Bolso lino', 5880, 'mujer', NULL, 'https://content.ib2c.com.ar/224/products/344644_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/344645_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/344650_1100x1500.jpg', 'carteras', 0, NULL),
(49, 'Mini bag cuero', 11300, 'mujer', 'Mini bag rectangular con manijas cortas y manija larga regulable. Bolsillo interno con cierre. 100% Cuero vacuno.\r\n', 'https://content.ib2c.com.ar/224/products/333602_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/338927_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/338928_1100x1500.jpg', 'carteras', 0, NULL),
(50, 'Buzo lino rayado', 6300, 'mujer', 'Buzo cuello redondo, manga larga. Puños 100% algodón a tono. Tejido jersey rayado. 100% lino.\r\n', 'https://content.ib2c.com.ar/224/products/316552_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316553_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316555_1100x1500.jpg', 'buzos', 0, NULL),
(51, 'Buzo raglan flame doble', 4900, 'mujer', 'Buzo cuello redondo con manga raglan larga y tajos en ruedo. Tejido jersey flamé doble. 100% algodón.\r\n', 'https://content.ib2c.com.ar/224/products/316564_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316565_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316566_1100x1500.jpg', 'buzos', 1, 6000),
(52, 'Entero flame doble', 6700, 'mujer', 'Entero de pierna larga con cordón en cintura, bolsillos en lateral. Tejido jersey flamé doble. 100% algodón.\r\n', 'https://content.ib2c.com.ar/224/products/344368_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/344369_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/344371_1100x1500.jpg', 'enteros', 0, NULL),
(53, 'Entero high twist', 6200, 'mujer', 'Entero de pierna larga con breteles musculosa, bolsillos en lateral Tejido jersey. 100% algodón.\r\n', 'https://content.ib2c.com.ar/224/products/318189_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318188_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318191_1100x1500.jpg', 'enteros', 0, NULL),
(54, 'Entero camisero lino', 9700, 'mujer', 'Entero corto manga larga tipo camisero. Botamanga en piernas, frente con bolsillos, botones y cintura ajustable. Tejido de lino plano. 100% Lino.\r\n', 'https://content.ib2c.com.ar/224/products/316620_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316619_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316622_1100x1500.jpg', 'enteros', 0, NULL),
(55, 'Tapado lino estampado', 18500, 'mujer', 'Tapado largo camisero de manga larga de silueta evasé. Tajos y bolsillos en laterales. 100% lino.\r\n', 'https://content.ib2c.com.ar/224/products/318342_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318343_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318345_1100x1500.jpg', 'tapados', 0, NULL),
(56, 'Pantalon ancho elastico lino estampado', 12900, 'mujer', 'Pantalón de tiro medio y corte amplio en piernas. Cintura con elástico en espalda y bolsillos laterales escondidos. 100% lino.\r\n', 'https://content.ib2c.com.ar/224/products/319182_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/319183_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/319185_1100x1500.jpg', 'pantalones', 1, 20000),
(57, 'Babucha high twist', 5100, 'mujer', 'Pantalón tipo babucha con elástico escondido en cintura y cordón tejido. Tejido jersey. 100% algodón.\r\n', 'https://content.ib2c.com.ar/224/products/316518_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316519_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/316521_1100x1500.jpg', 'pantalones', 0, NULL),
(58, 'Pantalon flame doble', 5800, 'mujer', 'Pantalón ancho con elástico escondido en cintura y bolsillos en delantero. Tejido jersey flamé doble. 100% algodón.\r\n', 'https://content.ib2c.com.ar/224/products/318258_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318255_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/318257_1100x1500.jpg', 'pantalones', 0, NULL),
(59, 'Pantalon pijama corto seda lavada', 20500, 'mujer', 'Pantalón suelto con cintura de elastico y trias para ajustar. Largo por ensima del tobillo. Calidad seda crepe de chine lavado. 100% Seda.\r\n', 'https://content.ib2c.com.ar/224/products/319189_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/319194_1100x1500.jpg', 'https://content.ib2c.com.ar/224/products/319199_1100x1500.jpg', 'pantalones', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dni` int(255) NOT NULL,
  `cumple` date NOT NULL,
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` int(255) DEFAULT NULL,
  `calle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nro` int(255) DEFAULT NULL,
  `codigoPostal` int(255) DEFAULT NULL,
  `ciudad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(255) NOT NULL,
  `idProducto` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
