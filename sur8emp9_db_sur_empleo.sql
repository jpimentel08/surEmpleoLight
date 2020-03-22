-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-03-2020 a las 18:06:55
-- Versión del servidor: 10.0.38-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sur8emp9_db_sur_empleo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_access`
--

CREATE TABLE `se_access` (
  `se_access_name` varchar(50) NOT NULL,
  `se_access_email` varchar(50) NOT NULL,
  `se_access_pass` varchar(128) NOT NULL,
  `se_access_ques1` varchar(100) NOT NULL,
  `se_access_ans1` varchar(100) NOT NULL,
  `se_access_ques2` varchar(100) NOT NULL,
  `se_access_ans2` varchar(100) NOT NULL,
  `se_access_type` varchar(10) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_access`
--

INSERT INTO `se_access` (`se_access_name`, `se_access_email`, `se_access_pass`, `se_access_ques1`, `se_access_ans1`, `se_access_ques2`, `se_access_ans2`, `se_access_type`, `se_user_id`) VALUES
('Jose Oscar', 'ingjope08@gmail.com', '$2y$10$ut6AB1GxAfVseLlhcnNmh.H7s61sTTSSlCGYQIHwo2H8kLmz/yix.', 'asd', 'asd', 'qweqwe', 'qwe', 'postulante', 'SE16.362.092-9'),
('user', 'user@email.com', '$2y$10$ZloNwCMQH8bMYkzU7.at7eXuvnB8phn7sZ4Iwq3bzpsF6jm/Uvp4S', 'pregunta1 user', 'respuesta1 user', 'pregunta2 user', 'respuesta2 user', 'postulante', 'SE12.345.678-9'),
('Andres', 'martinezan@gmail.com', '$2y$10$M1mSS1VeDxtGSAlkPRKH9eChY0dqtlBb.bW89ZKTmO4YJoPElz1wO', '', '', '', '', 'postulante', 'SE26.901.052-5'),
('catalina', 'catalina@withcolors.cl', '$2y$10$2q1rwHn/vE8vpIy5sXjfj.epV4zONVHrphuGEdcx/N2u4Od5Wnr/q', '', '', '', '', 'postulante', 'SE09.154.980-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_ciudad`
--

CREATE TABLE `se_ciudad` (
  `se_ciudad_id` int(11) NOT NULL,
  `se_ciudad` varchar(150) NOT NULL,
  `se_comuna_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_ciudad`
--

INSERT INTO `se_ciudad` (`se_ciudad_id`, `se_ciudad`, `se_comuna_id`) VALUES
(1, 'Colina', 1),
(2, 'Lampa', 1),
(3, 'Tiltil', 1),
(4, 'Pirque', 2),
(5, 'Puente Alto', 2),
(6, 'San José de Maipo', 2),
(7, 'Buin', 3),
(8, 'Calera de Tango', 3),
(9, 'Paine', 3),
(10, 'San Bernardo', 3),
(11, 'Alhué', 4),
(12, 'Curacaví', 4),
(13, 'María Pinto', 4),
(14, 'Melipilla', 4),
(15, 'San Pedro', 4),
(16, 'Cerrillos', 5),
(17, 'Cerro Navia', 5),
(18, 'Conchalí', 5),
(19, 'El Bosque', 5),
(20, 'Estación Central', 5),
(21, 'Huechuraba', 5),
(22, 'Independencia', 5),
(23, 'La Cisterna', 5),
(24, 'La Granja', 5),
(25, 'La Florida', 5),
(26, 'La Pintana', 5),
(27, 'La Reina', 5),
(28, 'Las Condes', 5),
(29, 'Lo Barnechea', 5),
(30, 'Lo Espejo', 5),
(31, 'Lo Prado', 5),
(32, 'Macul', 5),
(33, 'Maipú', 5),
(34, 'Ñuñoa', 5),
(35, 'Pedro Aguirre', 5),
(36, 'Cerda', 5),
(37, 'Peñalolén', 5),
(38, 'Providencia', 5),
(39, 'Pudahuel', 5),
(40, 'Quilicura', 5),
(41, 'Quinta Normal', 5),
(42, 'Recoleta', 5),
(43, 'Renca', 5),
(44, 'San Miguel', 5),
(45, 'San Joaquín', 5),
(46, 'San Ramón', 5),
(47, 'Santiago', 5),
(48, 'Vitacura', 5),
(49, 'El Monte', 6),
(50, 'Isla de Maipo', 6),
(51, 'Padre Hurtado', 6),
(52, 'Peñaflor', 6),
(53, 'Talagante', 6),
(54, 'Arica', 7),
(55, 'Camarones', 7),
(56, 'General Lagos', 8),
(57, 'Putre', 8),
(58, 'Alto Hospicio', 9),
(59, 'Iquique', 9),
(60, 'Camiña', 10),
(61, 'Colchane', 10),
(62, 'Huara', 10),
(63, 'Pica', 10),
(64, 'Pozo Almonte', 10),
(65, 'Antofagasta', 11),
(66, 'Mejillones', 11),
(67, 'Sierra Gorda', 11),
(68, 'Taltal', 11),
(69, 'Calama', 12),
(70, 'Ollagüe', 12),
(71, 'San Pedro de Atacama\r\n', 12),
(72, 'María Elena', 13),
(73, 'Tocopilla', 13),
(74, 'Chañaral', 14),
(75, 'Diego de Almagro', 14),
(76, 'Caldera', 15),
(77, 'Copiapó', 15),
(78, 'Tierra Amarilla', 15),
(79, 'Alto del Carmen', 16),
(80, 'Freirina', 16),
(81, 'Huasco', 16),
(82, 'Vallenar', 16),
(83, 'Canela', 17),
(84, 'Illapel', 17),
(85, 'Los Vilos', 17),
(86, 'Salamanca', 17),
(87, 'Andacollo', 18),
(88, 'Coquimbo', 18),
(89, 'La Higuera', 18),
(90, 'La Serena', 18),
(91, 'Paihuano', 18),
(92, 'Vicuña', 18),
(93, 'Combarbalá', 19),
(94, 'Monte Patria', 19),
(95, 'Ovalle', 19),
(96, 'Punitaqui', 19),
(97, 'Río Hurtado', 19),
(98, 'Isla de Pascua', 20),
(99, 'Calle Larga', 21),
(100, 'Los Andes', 21),
(101, 'Rinconada de Los Andes', 21),
(102, 'San Esteban', 21),
(103, 'Limache', 22),
(104, 'Olmué', 22),
(105, 'Quilpué', 22),
(106, 'Villa Alemana', 22),
(107, 'Cabildo', 23),
(108, 'La Ligua', 23),
(109, 'Papudo', 23),
(110, 'Petorca', 23),
(111, 'Zapallar', 23),
(112, 'Hijuelas', 24),
(113, 'La Calera', 24),
(114, 'La Cruz', 24),
(115, 'Nogales', 24),
(116, 'Quillota', 24),
(117, 'Algarrobo', 25),
(118, 'Cartagena', 25),
(119, 'El Quisco', 25),
(120, 'El Tabo', 25),
(121, 'San Antonio', 25),
(122, 'Santo Domingo', 25),
(123, 'Catemu', 26),
(124, 'Llaillay', 26),
(125, 'Panquehue', 26),
(126, 'Putaendo', 26),
(127, 'San Felipe', 26),
(128, 'Santa María', 26),
(129, 'Casablanca', 27),
(130, 'Concón', 27),
(131, 'Juan Fernández', 27),
(132, 'Puchuncaví', 27),
(133, 'Quintero', 27),
(134, 'Valparaíso', 27),
(135, 'Viña del Mar', 27),
(136, 'Codegua', 28),
(137, 'Coínco', 28),
(138, 'Coltauco', 28),
(139, 'Doñihue', 28),
(140, 'Graneros', 28),
(141, 'Las Cabras', 28),
(142, 'Machalí', 28),
(143, 'Malloa', 28),
(144, 'Olivar', 28),
(145, 'Peumo', 28),
(146, 'Pichidegua', 28),
(147, 'Quinta de Tilcoco', 28),
(148, 'Rancagua', 28),
(149, 'Requínoa', 28),
(150, 'Rengo', 28),
(151, 'San Francisco de Mostazal', 28),
(152, 'San Vicente de Tagua', 28),
(153, 'Tagua', 28),
(154, 'La Estrella', 29),
(155, 'Litueche', 29),
(156, 'Marchigüe', 29),
(157, 'Navidad', 29),
(158, 'Paredones', 29),
(159, 'Pichilemu', 29),
(160, 'Chépica', 30),
(161, 'Chimbarongo', 30),
(162, 'Lolol', 30),
(163, 'Nancagua', 30),
(164, 'Palmilla', 30),
(165, 'Peralillo', 30),
(166, 'Placilla', 30),
(167, 'Pumanque', 30),
(168, 'San Fernando', 30),
(169, 'Santa Cruz', 30),
(170, 'Cauquenes', 31),
(171, 'Chanco', 31),
(172, 'Pelluhue', 31),
(173, 'Curicó', 32),
(174, 'Hualañé', 32),
(175, 'Licantén', 32),
(176, 'Molina', 32),
(177, 'Rauco', 32),
(178, 'Romeral', 32),
(179, 'Sagrada Familia', 32),
(180, 'Teno', 32),
(181, 'Vichuquén', 32),
(182, 'Colbún', 33),
(183, 'Linares', 33),
(184, 'Longaví', 33),
(185, 'Parral', 33),
(186, 'Retiro', 33),
(187, 'San Javier de Loncomilla', 33),
(188, 'Villa Alegre', 33),
(189, 'Yerbas Buenas', 33),
(190, 'Constitución', 34),
(191, 'Curepto', 34),
(192, 'Empedrado', 34),
(193, 'Maule', 34),
(194, 'Pelarco', 34),
(195, 'Pencahue', 34),
(196, 'Río Claro', 34),
(197, 'San Clemente', 34),
(198, 'San Rafael', 34),
(199, 'Talca', 34),
(200, 'Bulnes', 35),
(201, 'Chillán', 35),
(202, 'Chillán Viejo', 35),
(203, 'El Carmen', 35),
(204, 'Pemuco', 35),
(205, 'Pinto', 35),
(206, 'Quillón', 35),
(207, 'San Ignacio', 35),
(208, 'Yungay', 35),
(209, 'Cobquecura', 36),
(210, 'Coelemu', 36),
(211, 'Ninhue', 36),
(212, 'Portezuelo', 36),
(213, 'Quirihue', 36),
(214, 'Ránquil', 36),
(215, 'Treguaco', 36),
(216, 'Coihueco', 37),
(217, 'Ñiquén', 37),
(218, 'San Carlos', 37),
(219, 'San Fabián', 37),
(220, 'San Nicolás', 37),
(221, 'Arauco', 38),
(222, 'Cañete', 38),
(223, 'Contulmo', 38),
(224, 'Curanilahue', 38),
(225, 'Lebu', 38),
(226, 'Los Álamos', 38),
(227, 'Tirúa', 38),
(228, 'Alto Biobío', 39),
(229, 'Antuco', 39),
(230, 'Cabrero', 39),
(231, 'Laja', 39),
(232, 'Los Ángeles', 39),
(233, 'Mulchén', 39),
(234, 'Nacimiento', 39),
(235, 'Negrete', 39),
(236, 'Quilaco', 39),
(237, 'Quilleco', 39),
(238, 'San Rosendo', 39),
(239, 'Santa Bárbara', 39),
(240, 'Tucapel', 39),
(241, 'Yumbel', 39),
(242, 'Chiguayante', 40),
(243, 'Concepción', 40),
(244, 'Coronel', 40),
(245, 'Florida', 40),
(246, 'Hualpén', 40),
(247, 'Hualqui', 40),
(248, 'Lota', 40),
(249, 'Penco', 40),
(250, 'San Pedro de la Paz', 40),
(251, 'Santa Juana', 40),
(252, 'Talcahuano', 40),
(253, 'Tomé', 40),
(254, 'Carahue', 41),
(255, 'Cholchol', 41),
(256, 'Cunco', 41),
(257, 'Curarrehue', 41),
(258, 'Freire', 41),
(259, 'Galvarino', 41),
(260, 'Gorbea', 41),
(261, 'Lautaro', 41),
(262, 'Loncoche', 41),
(263, 'Melipeuco', 41),
(264, 'Nueva Imperial', 41),
(265, 'Padre Las Casas', 41),
(266, 'Perquenco', 41),
(267, 'Pitrufquén', 41),
(268, 'Pucón', 41),
(269, 'Saavedra', 41),
(270, 'Temuco', 41),
(271, 'Teodoro Schmidt', 41),
(272, 'Toltén', 41),
(273, 'Vilcún', 41),
(274, 'Villarrica', 41),
(275, 'Angol', 42),
(276, 'Collipulli', 42),
(277, 'Curacautín', 42),
(278, 'Ercilla', 42),
(279, 'Lonquimay', 42),
(280, 'Los Sauces', 42),
(281, 'Lumaco', 42),
(282, 'Purén', 42),
(283, 'Renaico', 42),
(284, 'Traiguén', 42),
(285, 'Victoria', 42),
(286, 'Futrono', 43),
(287, 'La Unión', 43),
(288, 'Lago Ranco', 43),
(289, 'Río Bueno', 43),
(290, 'Corral', 44),
(291, 'Lanco', 44),
(292, 'Los Lagos', 44),
(293, 'Máfil', 44),
(294, 'Mariquina', 44),
(295, 'Paillaco', 44),
(296, 'Panguipulli', 44),
(297, 'Valdivia', 44),
(298, 'Ancud', 45),
(299, 'Castro', 45),
(300, 'Chonchi', 45),
(301, 'Curaco de Vélez', 45),
(302, 'Dalcahue', 45),
(303, 'Puqueldón', 45),
(304, 'Queilén', 45),
(305, 'Quellón', 45),
(306, 'Quemchi', 45),
(307, 'Quinchao', 45),
(308, 'Calbuco', 46),
(309, 'Cochamó', 46),
(310, 'Fresia', 46),
(311, 'Frutillar', 46),
(312, 'Llanquihue', 46),
(313, 'Los Muermos', 46),
(314, 'Maullín', 46),
(315, 'Puerto Montt', 46),
(316, 'Puerto Varas', 46),
(317, 'Osorno', 47),
(318, 'Puerto Octay', 47),
(319, 'Purranque', 47),
(320, 'Puyehue', 47),
(321, 'Río Negro', 47),
(322, 'San Pablo', 47),
(323, 'San Juan de la Costa', 47),
(324, 'Chaitén', 48),
(325, 'Futaleufú', 48),
(326, 'Hualaihué', 48),
(327, 'Palena', 48),
(328, 'Aysén', 49),
(330, 'Cisnes', 49),
(331, 'Guaitecas', 49),
(332, 'Cochrane', 50),
(333, 'O´Higgins', 50),
(334, 'Tortel', 50),
(335, 'Coyhaique', 51),
(336, 'Lago Verde', 51),
(337, 'Chile Chico', 52),
(338, 'Río Ibáñez', 52),
(339, 'Antártica', 53),
(340, 'Cabo de Hornos', 53),
(341, 'Laguna Blanca', 54),
(342, 'Punta Arenas', 54),
(343, 'Río Verde', 54),
(344, 'San Gregorio', 54),
(345, 'Porvenir', 55),
(346, 'Primavera', 55),
(347, 'Timaukel', 55),
(348, 'Natales', 56),
(349, 'Torres del Paine', 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_comuna`
--

CREATE TABLE `se_comuna` (
  `se_comuna_id` int(11) NOT NULL,
  `se_comuna` varchar(150) NOT NULL,
  `se_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_comuna`
--

INSERT INTO `se_comuna` (`se_comuna_id`, `se_comuna`, `se_region_id`) VALUES
(1, 'Colina', 1),
(2, 'Puente Alto', 1),
(3, 'San Bernardo', 1),
(4, 'Melipilla', 1),
(5, 'Santiago', 1),
(6, 'Talagante', 1),
(7, 'Arica', 2),
(8, 'Putre', 2),
(9, 'Iquique', 3),
(10, 'Pozo Almonte', 3),
(11, 'Antofagasta', 4),
(12, 'Calama', 4),
(13, 'Tocopilla', 4),
(14, 'Chañaral', 5),
(15, 'Copiapó', 5),
(16, 'Vallenar', 5),
(17, 'Illapel', 6),
(18, 'Coquimbo', 6),
(19, 'Ovalle', 6),
(20, 'Hanga Roa', 7),
(21, 'Los Andes', 7),
(22, 'Quilpué', 7),
(23, 'La Ligua', 7),
(24, 'Quillota', 7),
(25, 'San Antonio', 7),
(26, 'San Felipe', 7),
(27, 'Valparaíso', 7),
(28, 'Rancagua', 8),
(29, 'Pichilemu', 8),
(30, 'San Fernando', 8),
(31, 'Cauquenes', 9),
(32, 'Curicó', 9),
(33, 'Linares', 9),
(34, 'Talca', 9),
(35, 'Bulnes', 10),
(36, 'Quirihue', 10),
(37, 'San Carlos', 10),
(38, 'Lebu', 11),
(39, 'Los Ángeles', 11),
(40, 'Concepción', 11),
(41, 'Temuco', 12),
(42, 'Angol', 12),
(43, 'La Unión', 13),
(44, 'Valdivia', 13),
(45, 'Castro', 14),
(46, 'Puerto Montt', 14),
(47, 'Osorno', 14),
(48, 'Chaitén', 14),
(49, 'Puerto Aysén', 15),
(50, 'Cochrane', 15),
(51, 'Coyhaique', 15),
(52, 'Chile Chico', 15),
(53, 'Puerto Williams', 16),
(54, 'Punta Arenas', 16),
(55, 'Porvenir', 16),
(56, 'Puerto Natales', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_education_data_basic`
--

CREATE TABLE `se_education_data_basic` (
  `se_education_data_institution` varchar(75) NOT NULL,
  `se_education_data_region` varchar(75) NOT NULL,
  `se_education_data_last_year` varchar(10) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_education_data_basic`
--

INSERT INTO `se_education_data_basic` (`se_education_data_institution`, `se_education_data_region`, `se_education_data_last_year`, `se_user_id`) VALUES
('Jose Francisco Torrealba', 'Metropolitana', '2000', 'SE16.362.092-9'),
('No Info', 'No Info', 'No Info', 'SE12.345.678-9'),
('No Info ', 'No Info', 'No Info', 'SE26.901.052-5'),
('No Info', 'No Info', 'No Info', 'SE09.154.980-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_education_data_course`
--

CREATE TABLE `se_education_data_course` (
  `se_education_data_institution` varchar(75) NOT NULL,
  `se_education_type` varchar(75) NOT NULL,
  `se_education_mention` varchar(75) NOT NULL,
  `se_education_description` varchar(350) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_education_data_course`
--

INSERT INTO `se_education_data_course` (`se_education_data_institution`, `se_education_type`, `se_education_mention`, `se_education_description`, `se_user_id`) VALUES
('Universidad de Santiago de Chile', 'Estudio 1', 'cumlaude', 'descripcion seminario', 'SE16.362.092-9'),
('No Info', 'No Info', 'No Info', 'No Info', 'SE12.345.678-9'),
('No Info', 'No Info', 'No Info', 'No Info', 'SE26.901.052-5'),
('No Info', 'No Info', 'No Info', 'No Info', 'SE09.154.980-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_education_data_postgrade`
--

CREATE TABLE `se_education_data_postgrade` (
  `se_education_data_institution` varchar(75) NOT NULL,
  `se_education_data_type_study` varchar(75) NOT NULL,
  `se_education_data_mention` varchar(25) NOT NULL,
  `se_education_data_description` varchar(250) NOT NULL,
  `se_education_data_status` varchar(25) NOT NULL,
  `se_education_data_begin_year` varchar(10) NOT NULL,
  `se_education_data_last_year` varchar(10) NOT NULL,
  `se_education_data_region` varchar(25) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_education_data_postgrade`
--

INSERT INTO `se_education_data_postgrade` (`se_education_data_institution`, `se_education_data_type_study`, `se_education_data_mention`, `se_education_data_description`, `se_education_data_status`, `se_education_data_begin_year`, `se_education_data_last_year`, `se_education_data_region`, `se_user_id`) VALUES
('Universidad de Chile', 'Estudio 1', 'cumlaude', 'descripcion postgrado', 'Status1', '1990', '1994', 'Metropolitana', 'SE16.362.092-9'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE12.345.678-9'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE26.901.052-5'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE09.154.980-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_education_data_superior`
--

CREATE TABLE `se_education_data_superior` (
  `se_education_data_institution` varchar(75) NOT NULL,
  `se_education_data_career` varchar(75) NOT NULL,
  `se_education_data_mention` varchar(75) NOT NULL,
  `se_education_data_status` varchar(75) NOT NULL,
  `se_education_data_begin_year` varchar(10) NOT NULL,
  `se_education_data_last_year` varchar(10) NOT NULL,
  `se_education_data_region` varchar(75) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_education_data_superior`
--

INSERT INTO `se_education_data_superior` (`se_education_data_institution`, `se_education_data_career`, `se_education_data_mention`, `se_education_data_status`, `se_education_data_begin_year`, `se_education_data_last_year`, `se_education_data_region`, `se_user_id`) VALUES
('Universidad de Chile', 'Ingenieria', 'cumlaude', 'Status1', '1990', '1994', 'Metropolitana', 'SE16.362.092-9'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE12.345.678-9'),
('Otra', 'Otra', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE26.901.052-5'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE09.154.980-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_information_habilitys`
--

CREATE TABLE `se_information_habilitys` (
  `se_information_hability` varchar(500) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_information_habilitys`
--

INSERT INTO `se_information_habilitys` (`se_information_hability`, `se_user_id`) VALUES
('logros y habilidades info complementaria  ', 'SE16.362.092-9'),
('No Info', 'SE12.345.678-9'),
('No Info', 'SE26.901.052-5'),
('No Info', 'SE09.154.980-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_information_lenguage`
--

CREATE TABLE `se_information_lenguage` (
  `se_information_lenguage_id` int(11) NOT NULL,
  `se_lenguage` varchar(75) NOT NULL,
  `se_lenguage_level` varchar(75) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_information_lenguage`
--

INSERT INTO `se_information_lenguage` (`se_information_lenguage_id`, `se_lenguage`, `se_lenguage_level`, `se_user_id`) VALUES
(13, 'EspaÃ±ol', 'BÃ¡sico', 'SE16.362.092-9'),
(14, 'InglÃ©s', 'Avanzado', 'SE16.362.092-9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_information_references`
--

CREATE TABLE `se_information_references` (
  `se_references_id` int(11) NOT NULL,
  `se_references_boss` varchar(75) NOT NULL,
  `se_references_company` varchar(75) NOT NULL,
  `se_references_phone` varchar(15) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_information_references`
--

INSERT INTO `se_information_references` (`se_references_id`, `se_references_boss`, `se_references_company`, `se_references_phone`, `se_user_id`) VALUES
(12, 'nombre1', 'empresa1', '111111111111', 'SE16.362.092-9'),
(13, 'nombre2', 'empresa2', '2222222222', 'SE16.362.092-9'),
(14, 'nombre3', 'empresa3', '3333333333', 'SE16.362.092-9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_information_software`
--

CREATE TABLE `se_information_software` (
  `se_software_id` int(11) NOT NULL,
  `se_software` varchar(75) NOT NULL,
  `se_software_level` varchar(75) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_information_software`
--

INSERT INTO `se_information_software` (`se_software_id`, `se_software`, `se_software_level`, `se_user_id`) VALUES
(8, 'Microsoft Access', 'BÃ¡sico', 'SE16.362.092-9'),
(10, 'Microsoft Word', 'Medio', 'SE16.362.092-9'),
(11, 'Microsoft Excel', 'Avanzado', 'SE26.901.052-5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_personal_data`
--

CREATE TABLE `se_personal_data` (
  `se_personal_data_status` varchar(10) NOT NULL,
  `se_personal_data_citizen` varchar(25) NOT NULL,
  `se_personal_data_address1` varchar(250) NOT NULL,
  `se_personal_data_region1` varchar(75) NOT NULL,
  `se_personal_data_city1` varchar(75) NOT NULL,
  `se_personal_data_comuna1` varchar(75) NOT NULL,
  `se_personal_data_address2` varchar(250) NOT NULL,
  `se_personal_data_region2` varchar(75) NOT NULL,
  `se_personal_data_city2` varchar(75) NOT NULL,
  `se_personal_data_comuna2` varchar(75) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_personal_data`
--

INSERT INTO `se_personal_data` (`se_personal_data_status`, `se_personal_data_citizen`, `se_personal_data_address1`, `se_personal_data_region1`, `se_personal_data_city1`, `se_personal_data_comuna1`, `se_personal_data_address2`, `se_personal_data_region2`, `se_personal_data_city2`, `se_personal_data_comuna2`, `se_user_id`) VALUES
('Casado', 'Venezolana', 'Avenida Calle Urb Apto', '1', '1', '1', 'kkkk', '0', '0', '0', 'SE16.362.092-9'),
('Soltero', 'Chilena', 'Avenida1 calle2 casa3', '6', '83', '17', 'asdf', '0', '0', '0', 'SE12.345.678-9'),
('Casado', 'Venezolana', 'Calle Cosme Crema Maisto 02329 Punta Arenas', '16', '342', '54', 'No info', '0', '0', '0', 'SE26.901.052-5'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE09.154.980-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_region`
--

CREATE TABLE `se_region` (
  `se_region_id` int(11) NOT NULL,
  `se_region` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_region`
--

INSERT INTO `se_region` (`se_region_id`, `se_region`) VALUES
(1, 'Metropolitana'),
(2, 'Arica y Parinacota'),
(3, 'Tarapacá'),
(4, 'Antofagasta'),
(5, 'Atacama'),
(6, 'Coquimbo'),
(7, 'Valparaíso'),
(8, 'O´Higgins'),
(9, 'Maule'),
(10, 'Ñuble'),
(11, 'Biobío'),
(12, 'Araucanía'),
(13, 'Los Ríos'),
(14, 'Los Lagos'),
(15, 'Aysén'),
(16, 'Magallanes & Antártica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_user`
--

CREATE TABLE `se_user` (
  `se_user_id` varchar(20) NOT NULL,
  `se_user_name` varchar(25) NOT NULL,
  `se_user_last_name` varchar(35) NOT NULL,
  `se_user_nation` varchar(50) NOT NULL,
  `se_user_rut` varchar(17) NOT NULL,
  `se_user_visa` varchar(35) NOT NULL,
  `se_user_type_visa` varchar(15) NOT NULL,
  `se_user_email` varchar(35) NOT NULL,
  `se_user_date_birth` varchar(10) NOT NULL,
  `se_user_gender` varchar(10) NOT NULL,
  `se_user_country_resid` varchar(50) NOT NULL,
  `se_user_telf` varchar(15) NOT NULL,
  `se_user_cell` varchar(15) NOT NULL,
  `se_user_job_actual` varchar(15) NOT NULL,
  `se_user_job_company` varchar(25) NOT NULL,
  `se_user_job_date` varchar(15) NOT NULL,
  `se_user_job_year` varchar(4) NOT NULL,
  `se_user_job_position` varchar(25) NOT NULL,
  `se_user_photo` varchar(100) NOT NULL,
  `se_user_cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_user`
--

INSERT INTO `se_user` (`se_user_id`, `se_user_name`, `se_user_last_name`, `se_user_nation`, `se_user_rut`, `se_user_visa`, `se_user_type_visa`, `se_user_email`, `se_user_date_birth`, `se_user_gender`, `se_user_country_resid`, `se_user_telf`, `se_user_cell`, `se_user_job_actual`, `se_user_job_company`, `se_user_job_date`, `se_user_job_year`, `se_user_job_position`, `se_user_photo`, `se_user_cv`) VALUES
('SE09.154.980-8', 'catalina', 'coo muller', 'Chile', '09.154.980-8', 'Sujeta a Contrato', 'Si Poseo', 'catalina@withcolors.cl', '1979-01-24', 'Femenino', 'Chile', '+56976497353', '+56976497353', 'Si', 'withcolors eirl', 'Marzo', '2007', 'director', 'IMG_1644.JPG', 'curriculum Withcolors.pdf'),
('SE12.345.678-9', 'user', 'user', 'Afganistan', '12.345.678-9', 'Sujeta a Contrato', 'Si Poseo', 'user@email.com', '2020-03-03', 'Masculino', 'Afganistan', '+56123456789', '+56123456789', 'Si', 'empresa user', 'Enero', '2019', 'cargo user', '1.png', '1.png'),
('SE16.362.092-9', 'Jose Oscar', 'Pimentel Espinoza', 'Venezuela', '16.362.092-9', 'Sujeta a Contrato', 'Si Poseo', 'ingjope08@gmail.com', '2020-03-03', 'Masculino', 'Venezuela', '+58012345678', '+58012345678', 'Si', 'PimTechCa', 'Enero', '2019', 'Desarrollador', '1.png', '1.png'),
('SE26.901.052-5', 'Andres', 'Martinez', 'Venezuela', '26.901.052-5', 'Temporaria', 'Si Poseo', 'martinezan@gmail.com', '1977-02-03', 'Masculino', 'Chile', '+56986889158', '+56986889158', 'Si', 'Surempleo.cl', 'Octubre', '2019', 'Reclutador', 'Andres Foto.png', 'CV AndrÃ©s MartÃ­nez.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_work_experience_actual`
--

CREATE TABLE `se_work_experience_actual` (
  `se_work_actual_position` varchar(75) NOT NULL,
  `se_work_actual_area` varchar(75) NOT NULL,
  `se_work_actual_area_other` varchar(75) NOT NULL,
  `se_work_actual_company` varchar(75) NOT NULL,
  `se_work_actual_company_sector` varchar(75) NOT NULL,
  `se_work_actual_company_sector_other` varchar(75) NOT NULL,
  `se_work_actual_logo` varchar(25) NOT NULL,
  `se_work_actual_since_month` varchar(15) NOT NULL,
  `se_work_actual_since_year` varchar(7) NOT NULL,
  `se_work_actual_last_month` varchar(15) NOT NULL,
  `se_work_actual_last_year` varchar(7) NOT NULL,
  `se_work_actual_region` varchar(75) NOT NULL,
  `se_work_actual_functions` varchar(350) NOT NULL,
  `se_work_actual_goals` varchar(350) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_work_experience_actual`
--

INSERT INTO `se_work_experience_actual` (`se_work_actual_position`, `se_work_actual_area`, `se_work_actual_area_other`, `se_work_actual_company`, `se_work_actual_company_sector`, `se_work_actual_company_sector_other`, `se_work_actual_logo`, `se_work_actual_since_month`, `se_work_actual_since_year`, `se_work_actual_last_month`, `se_work_actual_last_year`, `se_work_actual_region`, `se_work_actual_functions`, `se_work_actual_goals`, `se_user_id`) VALUES
('Desarrollador', 'TecnologÃ­a', '', 'Pimtech', 'InformaciÃ³n y Comunicaciones', '', '1.png', 'Febrero', '2018', 'Enero', '2020', 'Metropolitana', 'descripcion funcion', 'descripcion logros', 'SE16.362.092-9'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE12.345.678-9'),
('Reclutador', 'Otra', '', 'Surempleo.cl', 'Otras Actividades de Servicios', '', 'logo-01.png', 'Octubre', '2019', 'Marzo', '2020', 'Magallanes & AntÃ¡rtica', 'PublicaciÃ³n de avisos y filtros curriculares.\r\nCitaciÃ³n de candidatos.\r\nRealizaciÃ³n de entrevistas masivas.\r\n', 'No Info ', 'SE26.901.052-5'),
('director', 'Otra', 'diseÃ±o', 'withcolors eirl', 'Otros', 'diseÃ±o', 'logo colores wc.jpg', 'Marzo', '2007', 'Febrero', '2020', 'Metropolitana', 'empresa de \r\n- diseÃ±o e marcas en grandes tiendas\r\n- diseÃ±o e implementaciÃ³n de vitrinas\r\n- diseÃ±o e implementaciÃ³n de grÃ¡ficas para decoradores y proyectos varios.\r\n- venta y producciÃ³n de joyas, 3 venta puntos de venta\r\n', 'empresas como\r\n- ParÃ­s\r\n- Falabella\r\n- decoraciones en departamentos pilotos\r\ngrÃ¡ficas en salÃ³n vip cancillerÃ­a\r\n- gigantografÃ­as en tiendas\r\n- empavonados y adhesivos en ventanales\r\n- desarrollo de logos y papelerÃ­a de marcas', 'SE09.154.980-8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_work_experience_last`
--

CREATE TABLE `se_work_experience_last` (
  `se_work_last_position` varchar(75) NOT NULL,
  `se_work_last_area` varchar(75) NOT NULL,
  `se_work_last_area_other` varchar(75) NOT NULL,
  `se_work_last_company` varchar(75) NOT NULL,
  `se_work_last_company_sector` varchar(75) NOT NULL,
  `se_work_last_company_sector_other` varchar(75) NOT NULL,
  `se_work_last_logo` varchar(25) NOT NULL,
  `se_work_last_since_month` varchar(15) NOT NULL,
  `se_work_last_since_year` varchar(7) NOT NULL,
  `se_work_last_last_month` varchar(15) NOT NULL,
  `se_work_last_last_year` varchar(7) NOT NULL,
  `se_work_last_region` varchar(75) NOT NULL,
  `se_work_last_functions` varchar(350) NOT NULL,
  `se_work_last_goals` varchar(350) NOT NULL,
  `se_user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `se_work_experience_last`
--

INSERT INTO `se_work_experience_last` (`se_work_last_position`, `se_work_last_area`, `se_work_last_area_other`, `se_work_last_company`, `se_work_last_company_sector`, `se_work_last_company_sector_other`, `se_work_last_logo`, `se_work_last_since_month`, `se_work_last_since_year`, `se_work_last_last_month`, `se_work_last_last_year`, `se_work_last_region`, `se_work_last_functions`, `se_work_last_goals`, `se_user_id`) VALUES
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE16.362.092-9'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE12.345.678-9'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE26.901.052-5'),
('No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'No Info', 'SE09.154.980-8');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `se_access`
--
ALTER TABLE `se_access`
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_ciudad`
--
ALTER TABLE `se_ciudad`
  ADD PRIMARY KEY (`se_ciudad_id`);

--
-- Indices de la tabla `se_comuna`
--
ALTER TABLE `se_comuna`
  ADD PRIMARY KEY (`se_comuna_id`);

--
-- Indices de la tabla `se_education_data_basic`
--
ALTER TABLE `se_education_data_basic`
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_education_data_course`
--
ALTER TABLE `se_education_data_course`
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_education_data_postgrade`
--
ALTER TABLE `se_education_data_postgrade`
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_education_data_superior`
--
ALTER TABLE `se_education_data_superior`
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_information_habilitys`
--
ALTER TABLE `se_information_habilitys`
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_information_lenguage`
--
ALTER TABLE `se_information_lenguage`
  ADD PRIMARY KEY (`se_information_lenguage_id`),
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_information_references`
--
ALTER TABLE `se_information_references`
  ADD PRIMARY KEY (`se_references_id`) USING BTREE,
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_information_software`
--
ALTER TABLE `se_information_software`
  ADD PRIMARY KEY (`se_software_id`),
  ADD KEY `se_user_id` (`se_user_id`) USING BTREE;

--
-- Indices de la tabla `se_personal_data`
--
ALTER TABLE `se_personal_data`
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_region`
--
ALTER TABLE `se_region`
  ADD PRIMARY KEY (`se_region_id`);

--
-- Indices de la tabla `se_user`
--
ALTER TABLE `se_user`
  ADD PRIMARY KEY (`se_user_id`);

--
-- Indices de la tabla `se_work_experience_actual`
--
ALTER TABLE `se_work_experience_actual`
  ADD KEY `se_user_id` (`se_user_id`);

--
-- Indices de la tabla `se_work_experience_last`
--
ALTER TABLE `se_work_experience_last`
  ADD KEY `se_user_id` (`se_user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `se_ciudad`
--
ALTER TABLE `se_ciudad`
  MODIFY `se_ciudad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=350;

--
-- AUTO_INCREMENT de la tabla `se_comuna`
--
ALTER TABLE `se_comuna`
  MODIFY `se_comuna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `se_information_lenguage`
--
ALTER TABLE `se_information_lenguage`
  MODIFY `se_information_lenguage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `se_information_references`
--
ALTER TABLE `se_information_references`
  MODIFY `se_references_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `se_information_software`
--
ALTER TABLE `se_information_software`
  MODIFY `se_software_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `se_region`
--
ALTER TABLE `se_region`
  MODIFY `se_region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `se_access`
--
ALTER TABLE `se_access`
  ADD CONSTRAINT `se_access_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_education_data_basic`
--
ALTER TABLE `se_education_data_basic`
  ADD CONSTRAINT `se_education_data_basic_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_education_data_course`
--
ALTER TABLE `se_education_data_course`
  ADD CONSTRAINT `se_education_data_course_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_education_data_postgrade`
--
ALTER TABLE `se_education_data_postgrade`
  ADD CONSTRAINT `se_education_data_postgrade_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_education_data_superior`
--
ALTER TABLE `se_education_data_superior`
  ADD CONSTRAINT `se_education_data_superior_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_information_habilitys`
--
ALTER TABLE `se_information_habilitys`
  ADD CONSTRAINT `se_information_habilitys_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_information_lenguage`
--
ALTER TABLE `se_information_lenguage`
  ADD CONSTRAINT `se_information_lenguage_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_information_references`
--
ALTER TABLE `se_information_references`
  ADD CONSTRAINT `se_information_references_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_information_software`
--
ALTER TABLE `se_information_software`
  ADD CONSTRAINT `se_information_software_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_personal_data`
--
ALTER TABLE `se_personal_data`
  ADD CONSTRAINT `se_personal_data_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_work_experience_actual`
--
ALTER TABLE `se_work_experience_actual`
  ADD CONSTRAINT `se_work_experience_actual_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `se_work_experience_last`
--
ALTER TABLE `se_work_experience_last`
  ADD CONSTRAINT `se_work_experience_last_ibfk_1` FOREIGN KEY (`se_user_id`) REFERENCES `se_user` (`se_user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
