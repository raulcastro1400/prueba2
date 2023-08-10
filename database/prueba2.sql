-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2023 a las 07:49:07
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
-- Base de datos: `prueba2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_imagenes`
--

CREATE TABLE `galeria_imagenes` (
  `id` int(11) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `galeria_imagenes`
--

INSERT INTO `galeria_imagenes` (`id`, `imagen`, `descripcion`) VALUES
(1, 'img/cetpro/1.webp', 'Nuestra Institución Exterior'),
(2, 'img/cetpro/2.jpg', 'Nuestra comunidad Educativa'),
(3, 'img/cetpro/3.JPG', 'Institución Interior'),
(4, 'img/cetpro/4.JPG', 'Nuestros Titulados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `id` int(11) NOT NULL,
  `id_programa_estudio` int(11) DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `creditos` int(11) DEFAULT NULL,
  `personal_docente_id` int(11) DEFAULT NULL,
  `Total_horas_Teo_prac` int(11) DEFAULT NULL,
  `imagen_modulo` varchar(255) DEFAULT NULL,
  `nro_modulo` varchar(255) DEFAULT 'NULL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`id`, `id_programa_estudio`, `nombre`, `descripcion`, `creditos`, `personal_docente_id`, `Total_horas_Teo_prac`, `imagen_modulo`, `nro_modulo`) VALUES
(1, 1, 'Gestión del Soporte Técnico', 'Este módulo cubre los fundamentos...', 22, 1, 512, 'img/plataformas.jpg', '1'),
(2, 1, 'Redes Informáticas', 'Este móduilo es de redes', 22, 1, 512, 'img/plataformas.jpg', '2'),
(3, 2, 'Sistemas Electricos en Casa', 'Casa Casa Casa', 23, 1, 512, 'img/plataformas.jpg', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo_personal_docente`
--

CREATE TABLE `modulo_personal_docente` (
  `id` int(11) NOT NULL,
  `modulo_id` int(11) DEFAULT NULL,
  `personal_docente_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modulo_personal_docente`
--

INSERT INTO `modulo_personal_docente` (`id`, `modulo_id`, `personal_docente_id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_administrativo`
--

CREATE TABLE `personal_administrativo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personal_administrativo`
--

INSERT INTO `personal_administrativo` (`id`, `nombre`, `cargo`, `imagen`, `facebook`, `linkedin`, `youtube`) VALUES
(1, 'Dra. Carmen del Pilar Carbajar Maihua', 'Directora', 'team-1.jpg', 'enlace-facebook-1', 'enlace-linkedin-1', 'enlace-youtube-1'),
(2, 'Lic. Fernando Mandujano Trinidad', 'Jefe Académico', 'team-2.jpg', 'enlace-facebook-2', 'enlace-linkedin-2', 'enlace-youtube-2'),
(3, 'Lic. Maria Huaricancha Rivera', 'Jefa de Producción', 'team-3.jpg', 'enlace-facebook-3', 'enlace-linkedin-3', 'enlace-youtube-3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_directivo`
--

CREATE TABLE `personal_directivo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_docente`
--

CREATE TABLE `personal_docente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `id_programa_estudios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personal_docente`
--

INSERT INTO `personal_docente` (`id`, `nombre`, `especialidad`, `imagen`, `facebook`, `linkedin`, `youtube`, `id_programa_estudios`) VALUES
(1, 'Mg. Raul Castro Choque', 'Computación e Informática', 'ruta_de_la_imagen.jpg', 'enlace_facebook', 'enlace_linkedin', 'enlace_youtube', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_estudio`
--

CREATE TABLE `programa_estudio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ciclo` text DEFAULT NULL,
  `duracion` text DEFAULT NULL,
  `imagen_programa` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `estudiantes` int(11) DEFAULT NULL,
  `egresados` int(11) DEFAULT NULL,
  `titulados` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `programa_estudio`
--

INSERT INTO `programa_estudio` (`id`, `nombre`, `ciclo`, `duracion`, `imagen_programa`, `descripcion`, `estudiantes`, `egresados`, `titulados`) VALUES
(1, 'Plataformas y Servicios de Tecnologías de la Información', 'Técnico', '2 Años', 'img/vestir.jpg', 'El Técnico del Programa de Estudios de Plataformas y Servicios de Tecnologías de la Información, es competente para el diseño, implementación y manejo de plataformas de Tecnologías de la Información(TI), tiene dominio en el manejo de herramientas empresariales, configuración y mantenimiento de equipos de cómputo, conectividad de datos, gestión de software a medida en plataformas de escritorio y web. Está capacitado para desempeñarse en cualquier organización o su propia empresa, brinda soluciones innovadoras en los procesos productivos y de servicios, interactuando con una comunicación asertiva, emprendimiento como soporte de sus actividades profesionales y aplica las tecnologías de información y comunicación para el control y corrección en las organizaciones públicas y privadas.', 512, 480, 260),
(2, 'Mantenimiento de Sistemas Electricos ', 'Técnico', '2 Años', 'img/vestir.jpg', 'Este programa de estudio se enfoca en...', 200, 150, 100),
(3, 'Fabricación de Prendas de Vestir ', 'Técnico ', '2 Años', 'img/vestir.jpg', 'Este programa de estudio se enfoca en...', 233, 182, 121),
(4, 'Cocina', 'Técnico ', '2 Años', 'img/vestir.jpg', 'Agregar', 150, 125, 40),
(5, 'Soldadura', 'Técnico ', '2 Años', 'img/vestir.jpg', 'Agregar', 130, 123, 100),
(6, 'Estilismo', 'Técnico ', '2 Años', 'img/vestir.jpg', 'Agregar', 1450, 124, 129);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_estudio_docente`
--

CREATE TABLE `programa_estudio_docente` (
  `id` int(11) NOT NULL,
  `id_programa_estudio` int(11) DEFAULT NULL,
  `id_personal_docente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `programa_estudio_docente`
--

INSERT INTO `programa_estudio_docente` (`id`, `id_programa_estudio`, `id_personal_docente`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_didactica`
--

CREATE TABLE `unidad_didactica` (
  `id` int(11) NOT NULL,
  `id_modulo` int(11) DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `silabus` text DEFAULT NULL,
  `id_programa_estudio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `unidad_didactica`
--

INSERT INTO `unidad_didactica` (`id`, `id_modulo`, `nombre`, `descripcion`, `silabus`, `id_programa_estudio`) VALUES
(1, 1, 'Introducción a Redes', 'Este curso proporciona una introducción a los conceptos básicos de redes de computadoras.', 'introducción.pdf', 1),
(2, 1, 'Introducción a la Programación', 'Este módulo introduce los conceptos básicos de la programación.', 'introducción2.pdf', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vision_mision`
--

CREATE TABLE `vision_mision` (
  `id` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `contenido` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vision_mision`
--

INSERT INTO `vision_mision` (`id`, `tipo`, `titulo`, `contenido`) VALUES
(1, 'vision', 'VISIÓN', 'El CETPRO “Julio C Tello” al 2023, será una institución educativa acreditada, paradigma en educación Técnico Productiva de la Región; con profesionales eficientes comprometidos e identificados con la cultura, tecnología y la práctica de valores que brindan una formación integral, técnico profesional de calidad competitivos y dispuestos a asumir nuevos retos que permitan a los estudiantes la inserción laboral dependiente e independiente”.'),
(2, 'mision', 'MISIÓN', 'Promovemos la cultura del emprendimiento desarrollando actividades productivas y con responsabilidad ambiental; capacitamos con tecnología de vanguardia (NTICs), ofreciendo infraestructura y equipamiento adecuado; brindamos asesoramiento para la titulación técnica de nuestros egresados, con Personal altamente capacitado y en actualización permanente.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `galeria_imagenes`
--
ALTER TABLE `galeria_imagenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_programa_estudio` (`id_programa_estudio`),
  ADD KEY `personal_docente_id` (`personal_docente_id`);

--
-- Indices de la tabla `modulo_personal_docente`
--
ALTER TABLE `modulo_personal_docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modulo_id` (`modulo_id`),
  ADD KEY `personal_docente_id` (`personal_docente_id`);

--
-- Indices de la tabla `personal_administrativo`
--
ALTER TABLE `personal_administrativo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_docente`
--
ALTER TABLE `personal_docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_programa_estudios` (`id_programa_estudios`);

--
-- Indices de la tabla `programa_estudio`
--
ALTER TABLE `programa_estudio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programa_estudio_docente`
--
ALTER TABLE `programa_estudio_docente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_programa_estudio` (`id_programa_estudio`),
  ADD KEY `id_personal_docente` (`id_personal_docente`);

--
-- Indices de la tabla `unidad_didactica`
--
ALTER TABLE `unidad_didactica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_modulo` (`id_modulo`),
  ADD KEY `id_programa_estudio` (`id_programa_estudio`) USING BTREE;

--
-- Indices de la tabla `vision_mision`
--
ALTER TABLE `vision_mision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `galeria_imagenes`
--
ALTER TABLE `galeria_imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modulo_personal_docente`
--
ALTER TABLE `modulo_personal_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal_administrativo`
--
ALTER TABLE `personal_administrativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_docente`
--
ALTER TABLE `personal_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `programa_estudio`
--
ALTER TABLE `programa_estudio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `programa_estudio_docente`
--
ALTER TABLE `programa_estudio_docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `unidad_didactica`
--
ALTER TABLE `unidad_didactica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vision_mision`
--
ALTER TABLE `vision_mision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD CONSTRAINT `modulo_ibfk_1` FOREIGN KEY (`id_programa_estudio`) REFERENCES `programa_estudio` (`id`),
  ADD CONSTRAINT `modulo_ibfk_2` FOREIGN KEY (`personal_docente_id`) REFERENCES `personal_docente` (`id`);

--
-- Filtros para la tabla `modulo_personal_docente`
--
ALTER TABLE `modulo_personal_docente`
  ADD CONSTRAINT `modulo_personal_docente_ibfk_1` FOREIGN KEY (`modulo_id`) REFERENCES `modulo` (`id`),
  ADD CONSTRAINT `modulo_personal_docente_ibfk_2` FOREIGN KEY (`personal_docente_id`) REFERENCES `personal_docente` (`id`);

--
-- Filtros para la tabla `personal_docente`
--
ALTER TABLE `personal_docente`
  ADD CONSTRAINT `personal_docente_ibfk_1` FOREIGN KEY (`id_programa_estudios`) REFERENCES `programa_estudio` (`id`);

--
-- Filtros para la tabla `programa_estudio_docente`
--
ALTER TABLE `programa_estudio_docente`
  ADD CONSTRAINT `programa_estudio_docente_ibfk_1` FOREIGN KEY (`id_programa_estudio`) REFERENCES `programa_estudio` (`id`),
  ADD CONSTRAINT `programa_estudio_docente_ibfk_2` FOREIGN KEY (`id_personal_docente`) REFERENCES `personal_docente` (`id`);

--
-- Filtros para la tabla `unidad_didactica`
--
ALTER TABLE `unidad_didactica`
  ADD CONSTRAINT `fk_programa_estudio` FOREIGN KEY (`id_programa_estudio`) REFERENCES `programa_estudio` (`id`),
  ADD CONSTRAINT `unidad_didactica_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `modulo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
