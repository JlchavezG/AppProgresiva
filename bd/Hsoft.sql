-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2021 a las 17:34:44
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Hsoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Calificacion`
--

CREATE TABLE `Calificacion` (
  `Id_Calificacion` int(11) NOT NULL,
  `PCalificacion` varchar(255) NOT NULL,
  `DescripcionCal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Calificacion`
--

INSERT INTO `Calificacion` (`Id_Calificacion`, `PCalificacion`, `DescripcionCal`) VALUES
(1, 'Excelente', 'El ofertante realizo el trabajo rapidamente, sin problemas lo recomiendo ampliamente'),
(2, 'Bueno', 'El ofertante realizo el trabajo en tiempo y forma, lo recomiendo'),
(3, 'Regular', 'El ofertante realizo el trabajo con contratiempos, no en el tiempo estipulado'),
(4, 'Mala', 'El ofertante no cumplio con el trabajo, no esta capacitado, no lo recomiendo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cancelaciones`
--

CREATE TABLE `Cancelaciones` (
  `Id_cancelacion` int(11) NOT NULL,
  `Id_Motivo` int(11) NOT NULL,
  `Id_UsuarioC` int(11) NOT NULL,
  `Id_Solicitud` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `FolioC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estados`
--

CREATE TABLE `Estados` (
  `Id_Estado` int(11) NOT NULL,
  `NombreE` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Estados`
--

INSERT INTO `Estados` (`Id_Estado`, `NombreE`) VALUES
(1, 'Aguascalientes'),
(2, 'Baja California'),
(3, 'Baja California Sur'),
(4, 'Campeche'),
(5, 'Chiapas'),
(6, 'Chihuahua'),
(7, 'Ciudad de México'),
(8, 'Coahuila'),
(9, 'Colima'),
(10, 'Durango'),
(11, 'Guanajuato'),
(12, 'Guerrero'),
(13, 'Hidalgo'),
(14, 'Jalisco'),
(15, 'México'),
(16, 'Michoacán'),
(17, 'Morelos'),
(18, 'Nayarit'),
(19, 'Nuevo León'),
(20, 'Oaxaca'),
(21, 'Puebla'),
(22, 'Querétaro'),
(23, 'Quintana Roo'),
(24, 'San Luis Potosí'),
(25, 'Sinaloa'),
(26, 'Sonora'),
(27, 'Tabasco'),
(28, 'Tamaulipas'),
(29, 'Tlaxcala'),
(30, 'Veracruz'),
(31, 'Yucatán'),
(32, 'Zacatecas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstatusS`
--

CREATE TABLE `EstatusS` (
  `Id_Estatus` int(11) NOT NULL,
  `NomEst` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `EstatusS`
--

INSERT INTO `EstatusS` (`Id_Estatus`, `NomEst`) VALUES
(1, 'Abierto'),
(2, 'En Proceso'),
(3, 'Cerrado'),
(4, 'Queja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Genero`
--

CREATE TABLE `Genero` (
  `Id_Genero` int(11) NOT NULL,
  `NombreG` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Genero`
--

INSERT INTO `Genero` (`Id_Genero`, `NombreG`) VALUES
(1, 'Femenino'),
(2, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MotivosC`
--

CREATE TABLE `MotivosC` (
  `Id_Motivo` int(11) NOT NULL,
  `NombreM` varchar(255) NOT NULL,
  `DescripciónM` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `MotivosC`
--

INSERT INTO `MotivosC` (`Id_Motivo`, `NombreM`, `DescripciónM`) VALUES
(1, 'No realizo el trabajo', 'No se presento en la fecha y hora establecida en la solicitud'),
(2, 'El Pago no corresponde a lo acordado', 'El ofertante solicito un pago mayor a lo acordado en la solicitud'),
(3, 'El ofertante no confirmo el servicio', 'El ofertante no mantuvo contacto alguno despues de aceptar la solicitid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Municipios`
--

CREATE TABLE `Municipios` (
  `Id_Municipios` int(11) NOT NULL,
  `NombreM` varchar(255) NOT NULL,
  `Id_Estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Municipios`
--

INSERT INTO `Municipios` (`Id_Municipios`, `NombreM`, `Id_Estado`) VALUES
(1, 'Aguascalientes', 1),
(2, 'Asientos', 1),
(3, 'Calvillo', 1),
(4, 'Cosío', 1),
(5, 'Jesús Maria', 1),
(6, 'Pabellón de Arteaga', 1),
(7, 'Rincón de Romos', 1),
(8, 'San José de Gracia', 1),
(9, 'Tepezalá', 1),
(10, 'San Francisco de los Romo', 1),
(11, 'El Llano', 1),
(12, 'Ensenada', 2),
(13, 'Mexicali', 2),
(14, 'Tecate', 2),
(15, 'Tijuana', 2),
(16, 'Playas de Rosarito', 2),
(17, 'San Quintín', 2),
(18, 'Comondú', 3),
(19, 'Mulegé', 3),
(20, 'La Paz', 3),
(21, 'Los Cabos', 3),
(22, 'Loreto', 3),
(23, 'Calkiní', 4),
(24, 'Campeche', 4),
(25, 'Carmen', 4),
(26, 'Champotón', 4),
(27, 'Hecelchakán', 4),
(28, 'Hopelchén', 4),
(29, 'Palizada', 4),
(30, 'Tenabo', 4),
(31, 'Escárcega', 4),
(32, 'Calakmul', 4),
(33, 'Candelaria', 4),
(34, 'Seybaplaya', 4),
(35, 'Acacoyagua', 5),
(36, 'Acala', 5),
(37, 'Acapetahua', 5),
(38, 'Altamirano', 5),
(39, 'Amatán', 5),
(40, 'Amatenango de la Frontera', 5),
(41, 'Amatenango del Valle', 5),
(42, 'Ángel Albino Corzo', 5),
(43, 'Arriaga', 5),
(44, 'Bejucal de Ocampo', 5),
(45, 'Bella Vista', 5),
(46, 'Berriozábal', 5),
(47, 'Bochil', 5),
(48, 'El Bosque', 5),
(49, 'Cacahoatán', 5),
(50, 'Catazajá', 5),
(51, 'Cintalapa', 5),
(52, 'Coapilla', 5),
(53, 'Comitán de Domínguez', 5),
(54, 'La Concordia', 5),
(55, 'Copainalá', 5),
(56, 'Chalchihuitán', 5),
(57, 'Chamula', 5),
(58, 'Chanal', 5),
(59, 'Chapultenango', 5),
(60, 'Chenalhó', 5),
(61, 'Chiapa de Corzo', 5),
(62, 'Chiapilla', 5),
(63, 'Chicoasén', 5),
(64, 'Chicomuselo', 5),
(65, 'Chilón', 5),
(66, 'Escuintla', 5),
(67, 'Francisco León', 5),
(68, 'Frontera Comalapa', 5),
(69, 'Frontera Hidalgo', 5),
(70, 'La Grandeza', 5),
(71, 'Huehuetán', 5),
(72, 'Huixtán', 5),
(73, 'Huitiupán', 5),
(74, 'Huixtla', 5),
(75, 'La Independencia', 5),
(76, 'Ixhuatán', 5),
(77, 'Ixtacomitán', 5),
(78, 'Ixtapa', 5),
(79, 'Ixtapangajoya', 5),
(80, 'Jiquipilas', 5),
(81, 'Jitotol', 5),
(82, 'Juárez', 5),
(83, 'Larráinzar', 5),
(84, 'La Libertad', 5),
(85, 'Mapastepec', 5),
(86, 'Las Margaritas', 5),
(87, 'Mazapa de Madero', 5),
(88, 'Mazatán', 5),
(89, 'Metapa', 5),
(90, 'Mitontic', 5),
(91, 'Motozintla', 5),
(92, 'Nicolás Ruíz', 5),
(93, 'Ocosingo', 5),
(94, 'Ocotepec', 5),
(95, 'Ocozocoautla de Espinosa', 5),
(96, 'Ostuacán', 5),
(97, 'Osumacinta', 5),
(98, 'Oxchuc', 5),
(99, 'Palenque', 5),
(100, 'Pantelhó', 5),
(101, 'Pantepec', 5),
(102, 'Pichucalco', 5),
(103, 'Pijijiapan', 5),
(104, 'El Porvenir', 5),
(105, 'Villa Comaltitlán', 5),
(106, 'Pueblo Nuevo Solistahuacán', 5),
(107, 'Rayón', 5),
(108, 'Reforma', 5),
(109, 'Las Rosas', 5),
(110, 'Sabanilla', 5),
(111, 'Salto de Agua', 5),
(112, 'San Cristóbal de las Casas', 5),
(113, 'San Fernando', 5),
(114, 'Siltepec', 5),
(115, 'Simojovel', 5),
(116, 'Sitalá', 5),
(117, 'Socoltenango', 5),
(118, 'Solosuchiapa', 5),
(119, 'Soyaló', 5),
(120, 'Suchiapa', 5),
(121, 'Suchiate', 5),
(122, 'Sunuapa', 5),
(123, 'Tapachula', 5),
(124, 'Tapalapa', 5),
(125, 'Tapilula', 5),
(126, 'Tecpatán', 5),
(127, 'Tenejapa', 5),
(128, 'Teopisca', 5),
(129, 'Tila', 5),
(130, 'Tonalá', 5),
(131, 'Totolapa', 5),
(132, 'La Trinitaria', 5),
(133, 'Tumbalá', 5),
(134, 'Tuxtla Gutiérrez', 5),
(135, 'Tuxtla Chico', 5),
(136, 'Tuzantán', 5),
(137, 'Tzimol', 5),
(138, 'Unión Juárez', 5),
(139, 'Venustiano Carranza', 5),
(140, 'Villa Corzo', 5),
(141, 'Villaflores', 5),
(142, 'Yajalón', 5),
(143, 'San Lucas', 5),
(144, 'Zinacantán', 5),
(145, 'San Juan Cancuc', 5),
(146, 'Aldama', 5),
(147, 'Benemérito de las Américas', 5),
(148, 'Maravilla Tenejapa', 5),
(149, 'Marqués de Comillas', 5),
(150, 'Montecristo de Guerrero', 5),
(151, 'San Andrés Duraznal', 5),
(152, 'Santiago el Pinar', 5),
(153, 'Capitán Luis Ángel Vidal', 5),
(154, 'Rincón Chamula San Pedro', 5),
(155, 'El Parral', 5),
(156, 'Emiliano Zapata', 5),
(157, 'Mezcalapa', 5),
(158, 'Honduras de la Sierra', 5),
(159, 'Ahumada', 6),
(160, 'Aldama', 6),
(161, 'Allende', 6),
(162, 'Aquiles Serdán', 6),
(163, 'Ascensión', 6),
(164, 'Bachíniva', 6),
(165, 'Balleza', 6),
(166, 'Batopilas de Manuel Gómez Morín', 6),
(167, 'Bocoyna', 6),
(168, 'Buenaventura', 6),
(169, 'Camargo', 6),
(170, 'Carichí', 6),
(171, 'Casas Grandes', 6),
(172, 'Coronado', 6),
(173, 'Coyame del Sotol', 6),
(174, 'La Cruz', 6),
(175, 'Cuauhtémoc', 6),
(176, 'Cusihuiriachi', 6),
(177, 'Chihuahua', 6),
(178, 'Chínipas', 6),
(179, 'Delicias', 6),
(180, 'Dr. Belisario Domínguez', 6),
(181, 'Galeana', 6),
(182, 'Santa Isabel', 6),
(183, 'Gómez Farías', 6),
(184, 'Gran Morelos', 6),
(185, 'Guachochi', 6),
(186, 'Guadalupe', 6),
(187, 'Guadalupe y Calvo', 6),
(188, 'Guazapares', 6),
(189, 'Guerrero', 6),
(190, 'Hidalgo del Parral', 6),
(191, 'Huejotitán', 6),
(192, 'Ignacio Zaragoza', 6),
(193, 'Janos', 6),
(194, 'Jiménez', 6),
(195, 'Juárez', 6),
(196, 'Julimes', 6),
(197, 'López', 6),
(198, 'Madera', 6),
(199, 'Maguarichi', 6),
(200, 'Manuel Benavides', 6),
(201, 'Matachí', 6),
(202, 'Matamoros', 6),
(203, 'Meoqui', 6),
(204, 'Morelos', 6),
(205, 'Moris', 6),
(206, 'Namiquipa', 6),
(207, 'Nonoava', 6),
(208, 'Nuevo Casas Grandes', 6),
(209, 'Ocampo', 6),
(210, 'Ojinaga', 6),
(211, 'Praxedis G. Guerrero', 6),
(212, 'Riva Palacio', 6),
(213, 'Rosales', 6),
(214, 'Rosario', 6),
(215, 'San Francisco de Borja', 6),
(216, 'San Francisco de Conchos', 6),
(217, 'San Francisco del Oro', 6),
(218, 'Santa Bárbara', 6),
(219, 'Satevó', 6),
(220, 'Saucillo', 6),
(221, 'Temósachic', 6),
(222, 'El Tule', 6),
(223, 'Urique', 6),
(224, 'Uruachi', 6),
(225, 'Valle de Zaragoza', 6),
(226, 'Azcapotzalco', 7),
(227, 'Coyoacán', 7),
(228, 'Cuajimalpa de Morelos', 7),
(229, 'Gustavo A. Madero', 7),
(230, 'Iztacalco', 7),
(231, 'Iztapalapa', 7),
(232, 'La Magdalena Contreras', 7),
(233, 'Milpa Alta', 7),
(234, 'Álvaro Obregón', 7),
(235, 'Tláhuac', 7),
(236, 'Tlalpan', 7),
(237, 'Xochimilco', 7),
(238, 'Benito Juárez', 7),
(239, 'Cuauhtémoc', 7),
(240, 'Miguel Hidalgo', 7),
(241, 'Venustiano Carranza', 7),
(242, 'Abasolo', 8),
(243, 'Acuña', 8),
(244, 'Allende', 8),
(245, 'Arteaga', 8),
(246, 'Candela', 8),
(247, 'Castaños', 8),
(248, 'Cuatro Ciénegas', 8),
(249, 'Escobedo', 8),
(250, 'Francisco I. Madero', 8),
(251, 'Frontera', 8),
(252, 'General Cepeda', 8),
(253, 'Guerrero', 8),
(254, 'Hidalgo', 8),
(255, 'Jiménez', 8),
(256, 'Juárez', 8),
(257, 'Lamadrid', 8),
(258, 'Matamoros', 8),
(259, 'Monclova', 8),
(260, 'Morelos', 8),
(261, 'Múzquiz', 8),
(262, 'Nadadores', 8),
(263, 'Nava', 8),
(264, 'Ocampo', 8),
(265, 'Parras', 8),
(266, 'Piedras Negras', 8),
(267, 'Progreso', 8),
(268, 'Ramos Arizpe', 8),
(269, 'Sabinas', 8),
(270, 'Sacramento', 8),
(271, 'Saltillo', 8),
(272, 'San Buenaventura', 8),
(273, 'San Juan de Sabinas', 8),
(274, 'San Pedro', 8),
(275, 'Sierra Mojada', 8),
(276, 'Torreón', 8),
(277, 'Viesca', 8),
(278, 'Villa Unión', 8),
(279, 'Zaragoza', 8),
(280, 'Armería', 9),
(281, 'Colima', 9),
(282, 'Comala', 9),
(283, 'Coquimatlán', 9),
(284, 'Cuauhtémoc', 9),
(285, 'Ixtlahuacán', 9),
(286, 'Manzanillo', 9),
(287, 'Minatitlán', 9),
(288, 'Tecomán', 9),
(289, 'Villa de Álvarez', 9),
(290, 'Canatlán', 10),
(291, 'Canelas', 10),
(292, 'Coneto de Comonfort', 10),
(293, 'Cuencamé', 10),
(294, 'Durango', 10),
(295, 'General Simón Bolívar', 10),
(296, 'Gómez Palacio', 10),
(297, 'Guadalupe Victoria', 10),
(298, 'Guanaceví', 10),
(299, 'Hidalgo', 10),
(300, 'Indé', 10),
(301, 'Lerdo', 10),
(302, 'Mapimí', 10),
(303, 'Mezquital', 10),
(304, 'Nazas', 10),
(305, 'Nombre de Dios', 10),
(306, 'Ocampo', 10),
(307, 'El Oro', 10),
(308, 'Otáez', 10),
(309, 'Pánuco de Coronado', 10),
(310, 'Peñón Blanco', 10),
(311, 'Poanas', 10),
(312, 'Pueblo Nuevo', 10),
(313, 'Rodeo', 10),
(314, 'San Bernardo', 10),
(315, 'San Dimas', 10),
(316, 'San Juan de Guadalupe', 10),
(317, 'San Juan del Río', 10),
(318, 'San Luis del Cordero', 10),
(319, 'San Pedro del Gallo', 10),
(320, 'Santa Clara', 10),
(321, 'Santiago Papasquiaro', 10),
(322, 'Súchil', 10),
(323, 'Tamazula', 10),
(324, 'Tepehuanes', 10),
(325, 'Tlahualilo', 10),
(326, 'Topia', 10),
(327, 'Vicente Guerrero', 10),
(328, 'Nuevo Ideal', 10),
(329, 'Abasolo', 11),
(330, 'Acámbaro', 11),
(331, 'San Miguel de Allende', 11),
(332, 'Apaseo el Alto', 11),
(333, 'Apaseo el Grande', 11),
(334, 'Atarjea', 11),
(335, 'Celaya', 11),
(336, 'Manuel Doblado', 11),
(337, 'Comonfort', 11),
(338, 'Coroneo', 11),
(339, 'Cortazar', 11),
(340, 'Cuerámaro', 11),
(341, 'Doctor Mora', 11),
(342, 'Dolores Hidalgo Cuna de la Independencia Nacional', 11),
(343, 'Guanajuato', 11),
(344, 'Huanímaro', 11),
(345, 'Irapuato', 11),
(346, 'Jaral del Progreso', 11),
(347, 'Jerécuaro', 11),
(348, 'León', 11),
(349, 'Moroleón', 11),
(350, 'Ocampo', 11),
(351, 'Pénjamo', 11),
(352, 'Pueblo Nuevo', 11),
(353, 'Purísima del Rincón', 11),
(354, 'Romita', 11),
(355, 'Salamanca', 11),
(356, 'Salvatierra', 11),
(357, 'San Diego de la Unión', 11),
(358, 'San Felipe', 11),
(359, 'San Francisco del Rincón', 11),
(360, 'San José Iturbide', 11),
(361, 'San Luis de la Paz', 11),
(362, 'Santa Catarina', 11),
(363, 'Santa Cruz de Juventino Rosas', 11),
(364, 'Santiago Maravatío', 11),
(365, 'Silao de la Victoria', 11),
(366, 'Tarandacuao', 11),
(367, 'Tarimoro', 11),
(368, 'Tierra Blanca', 11),
(369, 'Uriangato', 11),
(370, 'Valle de Santiago', 11),
(371, 'Victoria', 11),
(372, 'Villagrán', 11),
(373, 'Xichú', 11),
(374, 'Yuriria', 11),
(375, 'Acapulco de Juárez', 12),
(376, 'Ahuacuotzingo', 12),
(377, 'Ajuchitlán del Progreso', 12),
(378, 'Alcozauca de Guerrero', 12),
(379, 'Alpoyeca', 12),
(380, 'Apaxtla', 12),
(381, 'Arcelia', 12),
(382, 'Atenango del Río', 12),
(383, 'Atlamajalcingo del Monte', 12),
(384, 'Atlixtac', 12),
(385, 'Atoyac de Álvarez', 12),
(386, 'Ayutla de los Libres', 12),
(387, 'Azoyú', 12),
(388, 'Benito Juárez', 12),
(389, 'Buenavista de Cuéllar', 12),
(390, 'Coahuayutla de José María Izazaga', 12),
(391, 'Cocula', 12),
(392, 'Copala', 12),
(393, 'Copalillo', 12),
(394, 'Copanatoyac', 12),
(395, 'Coyuca de Benítez', 12),
(396, 'Coyuca de Catalán', 12),
(397, 'Cuajinicuilapa', 12),
(398, 'Cualác', 12),
(399, 'Cuautepec', 12),
(400, 'Cuetzala del Progreso', 12),
(401, 'Cutzamala de Pinzón', 12),
(402, 'Chilpancingo de los Bravo', 12),
(403, 'Florencio Villarreal', 12),
(404, 'General Canuto A. Neri', 12),
(405, 'General Heliodoro Castillo', 12),
(406, 'Huamuxtitlán', 12),
(407, 'Huitzuco de los Figueroa', 12),
(408, 'Iguala de la Independencia', 12),
(409, 'Igualapa', 12),
(410, 'Ixcateopan de Cuauhtémoc', 12),
(411, 'Zihuatanejo de Azueta', 12),
(412, 'Juan R. Escudero', 12),
(413, 'Leonardo Bravo', 12),
(414, 'Malinaltepec', 12),
(415, 'Mártir de Cuilapan', 12),
(416, 'Metlatónoc', 12),
(417, 'Mochitlán', 12),
(418, 'Olinalá', 12),
(419, 'Ometepec', 12),
(420, 'Pedro Ascencio Alquisiras', 12),
(421, 'Petatlán', 12),
(422, 'Pilcaya', 12),
(423, 'Pungarabato', 12),
(424, 'Quechultenango', 12),
(425, 'San Luis Acatlán', 12),
(426, 'San Marcos', 12),
(427, 'San Miguel Totolapan', 12),
(428, 'Taxco de Alarcón', 12),
(429, 'Tecoanapa', 12),
(430, 'Técpan de Galeana', 12),
(431, 'Teloloapan', 12),
(432, 'Tepecoacuilco de Trujano', 12),
(433, 'Tetipac', 12),
(434, 'Tixtla de Guerrero', 12),
(435, 'Tlacoachistlahuaca', 12),
(436, 'Tlacoapa', 12),
(437, 'Tlalchapa', 12),
(438, 'Tlalixtaquilla de Maldonado', 12),
(439, 'Tlapa de Comonfort', 12),
(440, 'Tlapehuala', 12),
(441, 'La Unión de Isidoro Montes de Oca', 12),
(442, 'Xalpatláhuac', 12),
(443, 'Xochihuehuetlán', 12),
(444, 'Xochistlahuaca', 12),
(445, 'Zapotitlán Tablas', 12),
(446, 'Zirándaro', 12),
(447, 'Zitlala', 12),
(448, 'Eduardo Neri', 12),
(449, 'Acatepec', 12),
(450, 'Marquelia', 12),
(451, 'Cochoapa el Grande', 12),
(452, 'José Joaquín de Herrera', 12),
(453, 'Juchitán', 12),
(454, 'Iliatenco', 12),
(455, 'Acatlán', 13),
(456, 'Acaxochitlán', 13),
(457, 'Actopan', 13),
(458, 'Agua Blanca de Iturbide', 13),
(459, 'Ajacuba', 13),
(460, 'Alfajayucan', 13),
(461, 'Almoloya', 13),
(462, 'Apan', 13),
(463, 'El Arenal', 13),
(464, 'Atitalaquia', 13),
(465, 'Atlapexco', 13),
(466, 'Atotonilco el Grande', 13),
(467, 'Atotonilco de Tula', 13),
(468, 'Calnali', 13),
(469, 'Cardonal', 13),
(470, 'Cuautepec de Hinojosa', 13),
(471, 'Chapantongo', 13),
(472, 'Chapulhuacán', 13),
(473, 'Chilcuautla', 13),
(474, 'Eloxochitlán', 13),
(475, 'Emiliano Zapata', 13),
(476, 'Epazoyucan', 13),
(477, 'Francisco I. Madero', 13),
(478, 'Huasca de Ocampo', 13),
(479, 'Huautla', 13),
(480, 'Huazalingo', 13),
(481, 'Huehuetla', 13),
(482, 'Huejutla de Reyes', 13),
(483, 'Huichapan', 13),
(484, 'Ixmiquilpan', 13),
(485, 'Jacala de Ledezma', 13),
(486, 'Jaltocán', 13),
(487, 'Juárez Hidalgo', 13),
(488, 'Lolotla', 13),
(489, 'Metepec', 13),
(490, 'San Agustín Metzquititlán', 13),
(491, 'Metztitlán', 13),
(492, 'Mineral del Chico', 13),
(493, 'Mineral del Monte', 13),
(494, 'La Misión', 13),
(495, 'Mixquiahuala de Juárez', 13),
(496, 'Molango de Escamilla', 13),
(497, 'Nicolás Flores', 13),
(498, 'Nopala de Villagrán', 13),
(499, 'Omitlán de Juárez', 13),
(500, 'San Felipe Orizatlán', 13),
(501, 'Pacula', 13),
(502, 'Pachuca de Soto', 13),
(503, 'Pisaflores', 13),
(504, 'Progreso de Obregón', 13),
(505, 'Mineral de la Reforma', 13),
(506, 'San Agustín Tlaxiaca', 13),
(507, 'San Bartolo Tutotepec', 13),
(508, 'San Salvador', 13),
(509, 'Santiago de Anaya', 13),
(510, 'Santiago Tulantepec de Lugo Guerrero', 13),
(511, 'Singuilucan', 13),
(512, 'Tasquillo', 13),
(513, 'Tecozautla', 13),
(514, 'Tenango de Doria', 13),
(515, 'Tepeapulco', 13),
(516, 'Tepehuacán de Guerrero', 13),
(517, 'Tepeji del Río de Ocampo', 13),
(518, 'Tepetitlán', 13),
(519, 'Tetepango', 13),
(520, 'Villa de Tezontepec', 13),
(521, 'Tezontepec de Aldama', 13),
(522, 'Tianguistengo', 13),
(523, 'Tizayuca', 13),
(524, 'Tlahuelilpan', 13),
(525, 'Tlahuiltepa', 13),
(526, 'Tlanalapa', 13),
(527, 'Tlanchinol', 13),
(528, 'Tlaxcoapan', 13),
(529, 'Tolcayuca', 13),
(530, 'Tula de Allende', 13),
(531, 'Tulancingo de Bravo', 13),
(532, 'Xochiatipan', 13),
(533, 'Xochicoatlán', 13),
(534, 'Yahualica', 13),
(535, 'Yacualtipán de Ángeles', 13),
(536, 'Zapotlán de Juárez', 13),
(537, 'Zempoala', 13),
(538, 'Zimapán', 13),
(539, 'Acatic', 14),
(540, 'Acatlán de Juárez', 14),
(541, 'Ahualulco de Mercado', 14),
(542, 'Amacueca', 14),
(543, 'Amatitán', 14),
(544, 'Ameca', 14),
(545, 'San Juanito de Escobedo', 14),
(546, 'Arandas', 14),
(547, 'El Arenal', 14),
(548, 'Atemajac de Brizuela', 14),
(549, 'Atengo', 14),
(550, 'Atenguillo', 14),
(551, 'Atotonilco el Alto', 14),
(552, 'Atoyac', 14),
(553, 'Autlán de Navarro', 14),
(554, 'Ayotlán', 14),
(555, 'Ayutla', 14),
(556, 'La Barca', 14),
(557, 'Bolaños', 14),
(558, 'Cabo Corrientes', 14),
(559, 'Casimiro Castillo', 14),
(560, 'Cihuatlán', 14),
(561, 'Zapotlán el Grande', 14),
(562, 'Cocula', 14),
(563, 'Colotlán', 14),
(564, 'Concepción de Buenos Aires', 14),
(565, 'Cuautitlán de García Barragán', 14),
(566, 'Cuautla', 14),
(567, 'Cuquío', 14),
(568, 'Chapala', 14),
(569, 'Chimaltitán', 14),
(570, 'Chiquilistlán', 14),
(571, 'Degollado', 14),
(572, 'Ejutla', 14),
(573, 'Encarnación de Díaz', 14),
(574, 'Etzatlán', 14),
(575, 'El Grullo', 14),
(576, 'Guachinango', 14),
(577, 'Guadalajara', 14),
(578, 'Hostotipaquillo', 14),
(579, 'Huejúcar', 14),
(580, 'Huejuquilla el Alto', 14),
(581, 'La Huerta', 14),
(582, 'Ixtlahuacán de los Membrillos', 14),
(583, 'Ixtlahuacán del Río', 14),
(584, 'Jalostotitlán', 14),
(585, 'Jamay', 14),
(586, 'Jesús María', 14),
(587, 'Jilotlán de los Dolores', 14),
(588, 'Jocotepec', 14),
(589, 'Juanacatlán', 14),
(590, 'Juchitlán', 14),
(591, 'Lagos de Moreno', 14),
(592, 'El Limón', 14),
(593, 'Magdalena', 14),
(594, 'Santa María del Oro', 14),
(595, 'La Manzanilla de la Paz', 14),
(596, 'Mascota', 14),
(597, 'Mazamitla', 14),
(598, 'Mexticacán', 14),
(599, 'Mezquitic', 14),
(600, 'Mixtlán', 14),
(601, 'Ocotlán', 14),
(602, 'Ojuelos de Jalisco', 14),
(603, 'Pihuamo', 14),
(604, 'Poncitlán', 14),
(605, 'Puerto Vallarta', 14),
(606, 'Villa Purificación', 14),
(607, 'Quitupan', 14),
(608, 'El Salto', 14),
(609, 'San Cristóbal de la Barranca', 14),
(610, 'San Diego de Alejandría', 14),
(611, 'San Juan de los Lagos', 14),
(612, 'San Julián', 14),
(613, 'San Marcos', 14),
(614, 'San Martín de Bolaños', 14),
(615, 'San Martín Hidalgo', 14),
(616, 'San Miguel el Alto', 14),
(617, 'Gómez Farías', 14),
(618, 'San Sebastián del Oeste', 14),
(619, 'Santa María de los Ángeles', 14),
(620, 'Sayula', 14),
(621, 'Tala', 14),
(622, 'Talpa de Allende', 14),
(623, 'Tamazula de Gordiano', 14),
(624, 'Tapalpa', 14),
(625, 'Tecalitlán', 14),
(626, 'Techaluta de Montenegro', 14),
(627, 'Tecolotlán', 14),
(628, 'Tenamaxtlán', 14),
(629, 'Teocaltiche', 14),
(630, 'Teocuitatlán de Corona', 14),
(631, 'Tepatitlán de Morelos', 14),
(632, 'Tequila', 14),
(633, 'Teuchitlán', 14),
(634, 'Tizapán el Alto', 14),
(635, 'Tlajomulco de Zúñiga', 14),
(636, 'San Pedro Tlaquepaque', 14),
(637, 'Tolimán', 14),
(638, 'Tomatlán', 14),
(639, 'Tonalá', 14),
(640, 'Tonaya', 14),
(641, 'Tonila', 14),
(642, 'Totatiche', 14),
(643, 'Tototlán', 14),
(644, 'Tuxcacuesco', 14),
(645, 'Tuxcueca', 14),
(646, 'Tuxpan', 14),
(647, 'Unión de San Antonio', 14),
(648, 'Unión de Tula', 14),
(649, 'Valle de Guadalupe', 14),
(650, 'Valle de Juárez', 14),
(651, 'San Gabriel', 14),
(652, 'Villa Corona', 14),
(653, 'Villa Guerrero', 14),
(654, 'Villa Hidalgo', 14),
(655, 'Cañadas de Obregón', 14),
(656, 'Yahualica de González Gallo', 14),
(657, 'Zacoalco de Torres', 14),
(658, 'Zapopan', 14),
(659, 'Zapotiltic', 14),
(660, 'Zapotitlán de Vadillo', 14),
(661, 'Zapotlán del Rey', 14),
(662, 'Zapotlanejo', 14),
(663, 'San Ignacio Cerro Gordo', 14),
(664, 'Acambay de Ruíz Castañeda', 15),
(665, 'Acolman', 15),
(666, 'Aculco', 15),
(667, 'Almoloya de Alquisiras', 15),
(668, 'Almoloya de Juárez', 15),
(669, 'Almoloya del Río', 15),
(670, 'Amanalco', 15),
(671, 'Amatepec', 15),
(672, 'Amecameca', 15),
(673, 'Apaxco', 15),
(674, 'Atenco', 15),
(675, 'Atizapán', 15),
(676, 'Atizapán de Zaragoza', 15),
(677, 'Atlacomulco', 15),
(678, 'Atlautla', 15),
(679, 'Axapusco', 15),
(680, 'Ayapango', 15),
(681, 'Calimaya', 15),
(682, 'Capulhuac', 15),
(683, 'Coacalco de Berriozábal', 15),
(684, 'Coatepec Harinas', 15),
(685, 'Cocotitlán', 15),
(686, 'Coyotepec', 15),
(687, 'Cuautitlán', 15),
(688, 'Chalco', 15),
(689, 'Chapa de Mota', 15),
(690, 'Chapultepec', 15),
(691, 'Chiautla', 15),
(692, 'Chicoloapan', 15),
(693, 'Chiconcuac', 15),
(694, 'Chimalhuacán', 15),
(695, 'Donato Guerra', 15),
(696, 'Ecatepec de Morelos', 15),
(697, 'Ecatzingo', 15),
(698, 'Huehuetoca', 15),
(699, 'Hueypoxtla', 15),
(700, 'Huixquilucan', 15),
(701, 'Isidro Fabela', 15),
(702, 'Ixtapaluca', 15),
(703, 'Ixtapan de la Sal', 15),
(704, 'Ixtapan del Oro', 15),
(705, 'Ixtlahuaca', 15),
(706, 'Xalatlaco', 15),
(707, 'Jaltenco', 15),
(708, 'Jilotepec', 15),
(709, 'Jilotzingo', 15),
(710, 'Jiquipilco', 15),
(711, 'Jocotitlán', 15),
(712, 'Joquicingo', 15),
(713, 'Juchitepec', 15),
(714, 'Lerma', 15),
(715, 'Malinalco', 15),
(716, 'Melchor Ocampo', 15),
(717, 'Metepec', 15),
(718, 'Mexicaltzingo', 15),
(719, 'Morelos', 15),
(720, 'Naucalpan de Juárez', 15),
(721, 'Nezahualcóyotl', 15),
(722, 'Nextlalpan', 15),
(723, 'Nicolás Romero', 15),
(724, 'Nopaltepec', 15),
(725, 'Ocoyoacac', 15),
(726, 'Ocuilan', 15),
(727, 'El Oro', 15),
(728, 'Otumba', 15),
(729, 'Otzoloapan', 15),
(730, 'Otzolotepec', 15),
(731, 'Ozumba', 15),
(732, 'Papalotla', 15),
(733, 'La Paz', 15),
(734, 'Polotitlán', 15),
(735, 'Rayón', 15),
(736, 'San Antonio la Isla', 15),
(737, 'San Felipe del Progreso', 15),
(738, 'San Martín de las Pirámides', 15),
(739, 'San Mateo Atenco', 15),
(740, 'San Simón de Guerrero', 15),
(741, 'Santo Tomás', 15),
(742, 'Soyaniquilpan de Juárez', 15),
(743, 'Sultepec', 15),
(744, 'Tecámac', 15),
(745, 'Tejupilco', 15),
(746, 'Temamatla', 15),
(747, 'Temascalapa', 15),
(748, 'Temascalcingo', 15),
(749, 'Temascaltepec', 15),
(750, 'Temoaya', 15),
(751, 'Tenancingo', 15),
(752, 'Tenango del Aire', 15),
(753, 'Tenango del Valle', 15),
(754, 'Teoloyucan', 15),
(755, 'Teotihuacán', 15),
(756, 'Tepetlaoxtoc', 15),
(757, 'Tepetlixpa', 15),
(758, 'Tepotzotlán', 15),
(759, 'Tequixquiac', 15),
(760, 'Texcaltitlán', 15),
(761, 'Texcalyacac', 15),
(762, 'Texcoco', 15),
(763, 'Tezoyuca', 15),
(764, 'Tianguistenco', 15),
(765, 'Timilpan', 15),
(766, 'Tlalmanalco', 15),
(767, 'Tlalnepantla de Baz', 15),
(768, 'Tlatlaya', 15),
(769, 'Toluca', 15),
(770, 'Tonatico', 15),
(771, 'Tultepec', 15),
(772, 'Tultitlán', 15),
(773, 'Valle de Bravo', 15),
(774, 'Villa de Allende', 15),
(775, 'Villa del Carbón', 15),
(776, 'Villa Guerrero', 15),
(777, 'Villa Victoria', 15),
(778, 'Xonacatlán', 15),
(779, 'Zacazonapan', 15),
(780, 'Zacualpan', 15),
(781, 'Zinacantepec', 15),
(782, 'Zumpahuacán', 15),
(783, 'Zumpango', 15),
(784, 'Cuautitlán Izcalli', 15),
(785, 'Valle de Chalco Solidaridad', 15),
(786, 'Luvianos', 15),
(787, 'San José del Rincón', 15),
(788, 'Tonanitla', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ofertante`
--

CREATE TABLE `Ofertante` (
  `Id_Ofertante` int(11) NOT NULL,
  `NombreO` varchar(55) NOT NULL,
  `ApellidoPO` varchar(55) NOT NULL,
  `ApellidoMO` varchar(55) NOT NULL,
  `TelefonoO` varchar(10) NOT NULL,
  `EmailO` varchar(255) NOT NULL,
  `Id_GeneroO` int(11) NOT NULL,
  `FNacO` date NOT NULL,
  `Id_TOficio` int(11) NOT NULL,
  `CalleO` varchar(55) NOT NULL,
  `NumeroO` varchar(10) NOT NULL,
  `ColoniaO` varchar(255) NOT NULL,
  `Id_EstadoO` int(11) NOT NULL,
  `Id_MunicipioO` int(11) NOT NULL,
  `LatitudO` varchar(255) NOT NULL,
  `LongitudO` varchar(255) NOT NULL,
  `UserNameO` varchar(55) NOT NULL,
  `ImagenO` varchar(255) NOT NULL,
  `PasswordO` varchar(255) NOT NULL,
  `EstatusO` int(11) NOT NULL,
  `TUserO` int(11) NOT NULL,
  `OnlineO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Ofertante`
--

INSERT INTO `Ofertante` (`Id_Ofertante`, `NombreO`, `ApellidoPO`, `ApellidoMO`, `TelefonoO`, `EmailO`, `Id_GeneroO`, `FNacO`, `Id_TOficio`, `CalleO`, `NumeroO`, `ColoniaO`, `Id_EstadoO`, `Id_MunicipioO`, `LatitudO`, `LongitudO`, `UserNameO`, `ImagenO`, `PasswordO`, `EstatusO`, `TUserO`, `OnlineO`) VALUES
(1, 'Jorge', 'Sanchez ', 'Sanchez', '5512780946', 'jorgesanchez@gmail.com', 2, '1960-07-12', 1, 'Adolfo Ruiz Cortinez', 'Lt22 Mz19', 'Alfredo del Mazo Velez', 15, 720, '19.441725822136238', '-99.26859656983643', 'JorgeS', 'user.png', '827ccb0eea8a706c4c34a16891f84e7b', 1, 6, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Oficios`
--

CREATE TABLE `Oficios` (
  `Id_Oficio` int(11) NOT NULL,
  `NombreOf` varchar(55) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Oficios`
--

INSERT INTO `Oficios` (`Id_Oficio`, `NombreOf`, `Descripcion`) VALUES
(1, 'Carpintero', 'Diseño y creacion de muebles de madera, Puertas, Cantinas, Closet, Repizas'),
(2, 'Plomeria', 'Trabajos instalacion de lavabos, baños, boilers, reparacion de tuberias, etc.'),
(3, 'Albañileria', 'Contrucción de viviendas, colocación de pisos, Aplanados, etc.'),
(4, 'Cerrajero', 'Se reproducen llaves, se reparan chapas de puertas para casa,oficina, etc'),
(5, 'Mecánico', 'Mecánico Automotriz, servicio de mecánica en general'),
(6, 'Soldador', 'Soldador herrero servicio de puertas, ventanas, herrería en general'),
(7, 'Pintor ', 'Servicio de pintura de casas, departamentos, pintura externa e interna.'),
(8, 'Chofer o conductor', 'Chofer privado servicios de chofer'),
(9, 'Cocinero', 'Cocinero particular servicio de platillos'),
(10, 'Panadero', 'Servicio de venta de pan dulce, pan salado y sus vertientes. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Solicitud`
--

CREATE TABLE `Solicitud` (
  `Id_Solicitud` int(11) NOT NULL,
  `Id_UsuarioS` int(11) NOT NULL,
  `DescripcionT` text NOT NULL,
  `FechaS` date NOT NULL,
  `HoraS` time NOT NULL,
  `CalleSo` varchar(255) NOT NULL,
  `NumeroD` varchar(255) NOT NULL,
  `ColoniaSo` varchar(255) NOT NULL,
  `Id_Estado` int(11) NOT NULL,
  `Id_Municipio` int(11) NOT NULL,
  `Latitud` varchar(255) NOT NULL,
  `Longitud` varchar(255) NOT NULL,
  `Id_OfertanteS` int(11) NOT NULL,
  `FechaOf` date NOT NULL,
  `HoraOf` time NOT NULL,
  `TContacto` int(11) NOT NULL,
  `Id_Estatus` int(11) NOT NULL,
  `Id_Calificación` int(11) NOT NULL,
  `Id_TPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TPago`
--

CREATE TABLE `TPago` (
  `Id_TPago` int(11) NOT NULL,
  `DescripcionPago` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `TPago`
--

INSERT INTO `TPago` (`Id_TPago`, `DescripcionPago`) VALUES
(1, 'Efectivo'),
(2, 'Trasferencia Bancaria'),
(3, 'Deposito Bancario'),
(4, 'Tarjeta de crédito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TUsuario`
--

CREATE TABLE `TUsuario` (
  `Id_TuserApp` int(11) NOT NULL,
  `AppTuser` varchar(255) NOT NULL,
  `DescripcionT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `TUsuario`
--

INSERT INTO `TUsuario` (`Id_TuserApp`, `AppTuser`, `DescripcionT`) VALUES
(1, 'Desarrollo', 'Usuario especializado con control de cambios en la AppWeb Progresiva desde codigo'),
(2, 'Sistemas', 'Usuario Especializado en procesos de la AppWeb Progresiva'),
(3, 'Soporte Tecnico', 'Usuario Administrativo dentro del la AppWeb Progresiva'),
(4, 'Clientes', 'Usuarios Finales de la AppWeb Progresiva'),
(5, 'Clientes Vip', 'Clientes con veneficios de paga dentro de la AppWeb Progresiva'),
(6, 'Ofertantes', 'Usuarios finales que ofrecen sus servicios atravez de la AppWeb Progresiva'),
(7, 'Ofertantes VIP', 'Usuarios finales que ofrecen sus servicios con beneficios de paga dentro de la AppWeb Progresiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `Id_Usuarios` int(11) NOT NULL,
  `Nombre` varchar(55) NOT NULL,
  `ApellidoP` varchar(55) NOT NULL,
  `ApellidoM` varchar(55) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Id_Genero` int(11) NOT NULL,
  `FNac` date NOT NULL,
  `Calle` varchar(55) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Colonia` varchar(255) NOT NULL,
  `Id_Estado` int(11) NOT NULL,
  `Id_Municipio` int(11) NOT NULL,
  `Latitud` varchar(255) NOT NULL,
  `Longitud` varchar(255) NOT NULL,
  `UserName` varchar(55) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Estatus` int(11) NOT NULL,
  `TUser` int(11) NOT NULL,
  `Online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`Id_Usuarios`, `Nombre`, `ApellidoP`, `ApellidoM`, `Telefono`, `Email`, `Id_Genero`, `FNac`, `Calle`, `Numero`, `Colonia`, `Id_Estado`, `Id_Municipio`, `Latitud`, `Longitud`, `UserName`, `Imagen`, `Password`, `Estatus`, `TUser`, `Online`) VALUES
(1, 'Jose Luis', 'Chávez', 'Gómez', '5611099054', 'webmaster@iscjoseluischavezg.mx', 2, '1987-11-06', 'Adolfo Ruiz Cortinez', 'Lt8 Mz21', 'Alfredo del Mazo Velez', 15, 720, '19.441606304909794', '-99.26927202883607', 'JlchavezG', 'yo.jpeg', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Calificacion`
--
ALTER TABLE `Calificacion`
  ADD PRIMARY KEY (`Id_Calificacion`);

--
-- Indices de la tabla `Cancelaciones`
--
ALTER TABLE `Cancelaciones`
  ADD PRIMARY KEY (`Id_cancelacion`),
  ADD KEY `Id_Motivo` (`Id_Motivo`),
  ADD KEY `Id_UsuarioC` (`Id_UsuarioC`),
  ADD KEY `Id_Solicitud` (`Id_Solicitud`);

--
-- Indices de la tabla `Estados`
--
ALTER TABLE `Estados`
  ADD PRIMARY KEY (`Id_Estado`);

--
-- Indices de la tabla `EstatusS`
--
ALTER TABLE `EstatusS`
  ADD PRIMARY KEY (`Id_Estatus`);

--
-- Indices de la tabla `Genero`
--
ALTER TABLE `Genero`
  ADD PRIMARY KEY (`Id_Genero`);

--
-- Indices de la tabla `MotivosC`
--
ALTER TABLE `MotivosC`
  ADD PRIMARY KEY (`Id_Motivo`);

--
-- Indices de la tabla `Municipios`
--
ALTER TABLE `Municipios`
  ADD PRIMARY KEY (`Id_Municipios`),
  ADD KEY `Id_Estado` (`Id_Estado`);

--
-- Indices de la tabla `Ofertante`
--
ALTER TABLE `Ofertante`
  ADD PRIMARY KEY (`Id_Ofertante`),
  ADD KEY `Id_Genero` (`Id_GeneroO`),
  ADD KEY `Id_Estado` (`Id_EstadoO`),
  ADD KEY `Id_Municipio` (`Id_MunicipioO`),
  ADD KEY `TUser` (`TUserO`),
  ADD KEY `Id_TOficio` (`Id_TOficio`);

--
-- Indices de la tabla `Oficios`
--
ALTER TABLE `Oficios`
  ADD PRIMARY KEY (`Id_Oficio`);

--
-- Indices de la tabla `Solicitud`
--
ALTER TABLE `Solicitud`
  ADD PRIMARY KEY (`Id_Solicitud`),
  ADD KEY `Id_UsuarioS` (`Id_UsuarioS`),
  ADD KEY `Id_OfertanteS` (`Id_OfertanteS`),
  ADD KEY `Id_Calificación` (`Id_Calificación`),
  ADD KEY `Id_Estatus` (`Id_Estatus`),
  ADD KEY `Id_Estado` (`Id_Estado`),
  ADD KEY `Id_Municipio` (`Id_Municipio`),
  ADD KEY `Id_TPago` (`Id_TPago`);

--
-- Indices de la tabla `TPago`
--
ALTER TABLE `TPago`
  ADD PRIMARY KEY (`Id_TPago`);

--
-- Indices de la tabla `TUsuario`
--
ALTER TABLE `TUsuario`
  ADD PRIMARY KEY (`Id_TuserApp`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`Id_Usuarios`),
  ADD KEY `Id_Genero` (`Id_Genero`),
  ADD KEY `Id_Estado` (`Id_Estado`),
  ADD KEY `Id_Municipio` (`Id_Municipio`),
  ADD KEY `TUser` (`TUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Calificacion`
--
ALTER TABLE `Calificacion`
  MODIFY `Id_Calificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Cancelaciones`
--
ALTER TABLE `Cancelaciones`
  MODIFY `Id_cancelacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Estados`
--
ALTER TABLE `Estados`
  MODIFY `Id_Estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `EstatusS`
--
ALTER TABLE `EstatusS`
  MODIFY `Id_Estatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Genero`
--
ALTER TABLE `Genero`
  MODIFY `Id_Genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `MotivosC`
--
ALTER TABLE `MotivosC`
  MODIFY `Id_Motivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Municipios`
--
ALTER TABLE `Municipios`
  MODIFY `Id_Municipios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789;

--
-- AUTO_INCREMENT de la tabla `Ofertante`
--
ALTER TABLE `Ofertante`
  MODIFY `Id_Ofertante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Oficios`
--
ALTER TABLE `Oficios`
  MODIFY `Id_Oficio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `Solicitud`
--
ALTER TABLE `Solicitud`
  MODIFY `Id_Solicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TPago`
--
ALTER TABLE `TPago`
  MODIFY `Id_TPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `TUsuario`
--
ALTER TABLE `TUsuario`
  MODIFY `Id_TuserApp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `Id_Usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Cancelaciones`
--
ALTER TABLE `Cancelaciones`
  ADD CONSTRAINT `cancelaciones_ibfk_1` FOREIGN KEY (`Id_Solicitud`) REFERENCES `Solicitud` (`Id_Solicitud`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cancelaciones_ibfk_2` FOREIGN KEY (`Id_Motivo`) REFERENCES `MotivosC` (`Id_Motivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Municipios`
--
ALTER TABLE `Municipios`
  ADD CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`Id_Estado`) REFERENCES `Estados` (`Id_Estado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Ofertante`
--
ALTER TABLE `Ofertante`
  ADD CONSTRAINT `ofertante_ibfk_1` FOREIGN KEY (`Id_GeneroO`) REFERENCES `Genero` (`Id_Genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertante_ibfk_2` FOREIGN KEY (`Id_EstadoO`) REFERENCES `Estados` (`Id_Estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertante_ibfk_3` FOREIGN KEY (`Id_MunicipioO`) REFERENCES `Municipios` (`Id_Municipios`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertante_ibfk_4` FOREIGN KEY (`TUserO`) REFERENCES `TUsuario` (`Id_TuserApp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertante_ibfk_5` FOREIGN KEY (`Id_TOficio`) REFERENCES `Oficios` (`Id_Oficio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Solicitud`
--
ALTER TABLE `Solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`Id_Calificación`) REFERENCES `Calificacion` (`Id_Calificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_ibfk_3` FOREIGN KEY (`Id_TPago`) REFERENCES `TPago` (`Id_TPago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_ibfk_4` FOREIGN KEY (`Id_Estado`) REFERENCES `Estados` (`Id_Estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_ibfk_5` FOREIGN KEY (`Id_Municipio`) REFERENCES `Municipios` (`Id_Municipios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_Genero`) REFERENCES `Genero` (`Id_Genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`Id_Municipio`) REFERENCES `Municipios` (`Id_Municipios`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`Id_Estado`) REFERENCES `Estados` (`Id_Estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`TUser`) REFERENCES `TUsuario` (`Id_TuserApp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
