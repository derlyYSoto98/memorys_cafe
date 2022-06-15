-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2022 a las 21:57:41
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafe_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `usuario_ad` varchar(10) NOT NULL,
  `contra_ad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `usuario_ad`, `contra_ad`) VALUES
(1, 'admin12', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finca`
--

CREATE TABLE `finca` (
  `id_finca` int(11) NOT NULL,
  `nombre_finca` varchar(50) NOT NULL,
  `ubicacion_finca` varchar(50) NOT NULL,
  `altitud_finca` varchar(25) NOT NULL,
  `foto_finca` varchar(250) NOT NULL,
  `ruta_finca` varchar(250) NOT NULL,
  `id_usua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `finca`
--

INSERT INTO `finca` (`id_finca`, `nombre_finca`, `ubicacion_finca`, `altitud_finca`, `foto_finca`, `ruta_finca`, `id_usua`) VALUES
(3, 'La loma alta', 'San Isidro', '350 m.s.n.m', 'Copia de Church - Hecho con PosterMyWall.jpg', '../fotografiaFinca/Copia de Church - Hecho con PosterMyWall.jpg', 83238658),
(12, 'polo', 'acevedo', '234m.s.n.m', '23518d84-5716-4996-8768-bd68dad260f5.jpg', '../fotografiaFinca/23518d84-5716-4996-8768-bd68dad260f5.jpg', 1800117711),
(13, 'Maximos', 'Bogota ', '234m.s.n.m', 'group-of-people-raise-their-hands-on-stadium-976866.jpg', '../fotografiaFinca/group-of-people-raise-their-hands-on-stadium-976866.jpg', 83238658),
(14, 'Muchois ', 'Gigante - Huila', '234m.s.n.m', 'WhatsApp Image 2022-06-01 at 2.33.22 PM.jpeg', '../fotografiaFinca/WhatsApp Image 2022-06-01 at 2.33.22 PM.jpeg', 999999999),
(16, 'El Cielo', 'Altamira Huila', '250 m.s.n.m', 'Colombia_fincas.jpg', 'fotografiaFinca/Colombia_fincas.jpg', 1075272185);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `id_proceso` int(11) NOT NULL,
  `nombre_proceso` varchar(50) NOT NULL,
  `tipo_fer` varchar(50) NOT NULL,
  `fragancia_proceso` varchar(25) NOT NULL,
  `sabor_proceso` varchar(25) NOT NULL,
  `acidez_proceso` varchar(30) NOT NULL,
  `cuerpo_proceso` varchar(30) NOT NULL,
  `id_variedad` int(11) NOT NULL,
  `foto_proceso` varchar(250) NOT NULL,
  `ruta_proceso` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proceso`
--

INSERT INTO `proceso` (`id_proceso`, `nombre_proceso`, `tipo_fer`, `fragancia_proceso`, `sabor_proceso`, `acidez_proceso`, `cuerpo_proceso`, `id_variedad`, `foto_proceso`, `ruta_proceso`) VALUES
(3, 'Fermentación', 'Principal', 'Vainilla4', 'Bicho', 'Baja3', 'Excelente', 3, 'descarga.png', '../fotografiaProceso/descarga.png'),
(12, 'Sembrado', 'Secundario', 'Vanilla', 'Dulce', 'Media', 'Completo4', 14, 'jovenes-cristianos.jpg', 'fotografiaProceso/jovenes-cristianos.jpg'),
(13, 'Empacado', 'Medio mas', 'Mojo', 'Amargo', 'Baja', 'termina', 12, 'WhatsApp Image 2022-04-13 at 9.21.52 PM.jpeg', '../fotografiaProceso/WhatsApp Image 2022-04-13 at 9.21.52 PM.jpeg'),
(14, 'Fermentacion', 'Principal', 'Vainilla', 'Miel', 'Baja', 'Completo', 18, 'AdobeStock_107692926_Preview.jpeg', 'fotografiaProceso/AdobeStock_107692926_Preview.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `direccion_usuario` varchar(50) NOT NULL,
  `telefono_usuario` varchar(25) NOT NULL,
  `foto_usuario` varchar(250) NOT NULL,
  `ruta_usuario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula_usuario`, `nombre_usuario`, `direccion_usuario`, `telefono_usuario`, `foto_usuario`, `ruta_usuario`) VALUES
(252536, 'Carlos David', 'Garzon ', '321587444', 'coffee-g303f023ab_1920.jpg', 'fotografiaUsuario/coffee-g303f023ab_1920.jpg'),
(767676, 'Carba Campos', 'Altamira- Huila', '8787654', 'caficultor - copia.jpeg', '../fotografiaUsuario/caficultor - copia.jpeg'),
(83238658, 'Daniel Diaz', 'Suaza - Huila', '980709', 'proceso.jpg', '../fotografiaUsuario/proceso.jpg'),
(999999999, 'Carla Gomzales', 'Altamira- Huila', '00876543', 'cual-es-el-simbolo-mas-utilizado-en-las-banderas-nacionales.jpg', '../fotografiaUsuario/cual-es-el-simbolo-mas-utilizado-en-las-banderas-nacionales.jpg'),
(1004159103, 'David Diaz', 'Suaza - Huila', '3212952396', '1.jpeg', 'fotografiaUsuario/1.jpeg'),
(1075272185, 'Diana Marcela Tello', 'Calle 19 Sur', '3188382142', 'ella.jpg', 'fotografiaUsuario/ella.jpg'),
(1084257533, 'Yesid', 'Pitalito ', '3258464', 'caf.jpg', 'fotografiaUsuario/caf.jpg'),
(1800117711, 'Carlos Gomez', 'Salado Blanco', '33333336666', 'group-of-people-raise-their-hands-on-stadium-976866.jpg', '../fotografiaUsuario/group-of-people-raise-their-hands-on-stadium-976866.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `variedad`
--

CREATE TABLE `variedad` (
  `id_variedad` int(11) NOT NULL,
  `nombre_variedad` varchar(50) NOT NULL,
  `descripcion_var` varchar(250) NOT NULL,
  `foto_variedad` varchar(250) NOT NULL,
  `ruta_variedad` varchar(250) NOT NULL,
  `id_fin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `variedad`
--

INSERT INTO `variedad` (`id_variedad`, `nombre_variedad`, `descripcion_var`, `foto_variedad`, `ruta_variedad`, `id_fin`) VALUES
(3, 'Castilla', 'Calidad superior', 'modelo.png', 'fotografiaVariedad/modelo.png', 3),
(12, 'comun', 'mas o menos', 'cual-es-el-simbolo-mas-utilizado-en-las-banderas-nacionales.jpg', 'fotografiaVariedad/cual-es-el-simbolo-mas-utilizado-en-las-banderas-nacionales.jpg', 12),
(13, 'Caturra', 'buen cafe', 'jovenes-cristianos.jpg', '../fotografiaVariedad/jovenes-cristianos.jpg', 12),
(14, 'Rarisimo', 'Cafe de alta calidad grrrr', 'Copia de Church - Hecho con PosterMyWall.jpg', 'fotografiaVariedad/Copia de Church - Hecho con PosterMyWall.jpg', 3),
(16, 'comun34', 'buen cafe yes', 'descarga.png', '../fotografiaVariedad/descarga.png', 13),
(17, 'comun', 'cafe chusco', 'WhatsApp Image 2022-04-25 at 3.47.30 PM.jpeg', 'fotografiaVariedad/WhatsApp Image 2022-04-25 at 3.47.30 PM.jpeg', 13),
(18, 'Caturra', 'Cafe de calidad', 'cafe.jpg', 'fotografiaVariedad/cafe.jpg', 16);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `finca`
--
ALTER TABLE `finca`
  ADD PRIMARY KEY (`id_finca`),
  ADD KEY `id_usua` (`id_usua`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`id_proceso`),
  ADD KEY `id_variedad` (`id_variedad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula_usuario`);

--
-- Indices de la tabla `variedad`
--
ALTER TABLE `variedad`
  ADD PRIMARY KEY (`id_variedad`),
  ADD KEY `id_fin` (`id_fin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `finca`
--
ALTER TABLE `finca`
  MODIFY `id_finca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `id_proceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cedula_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1800117713;

--
-- AUTO_INCREMENT de la tabla `variedad`
--
ALTER TABLE `variedad`
  MODIFY `id_variedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `finca`
--
ALTER TABLE `finca`
  ADD CONSTRAINT `finca_ibfk_1` FOREIGN KEY (`id_usua`) REFERENCES `usuario` (`cedula_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD CONSTRAINT `proceso_ibfk_1` FOREIGN KEY (`id_variedad`) REFERENCES `variedad` (`id_variedad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `variedad`
--
ALTER TABLE `variedad`
  ADD CONSTRAINT `variedad_ibfk_1` FOREIGN KEY (`id_fin`) REFERENCES `finca` (`id_finca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
