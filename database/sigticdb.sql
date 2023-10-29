-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 05:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigticdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `evento` varchar(250) DEFAULT NULL,
  `color_evento` varchar(20) DEFAULT NULL,
  `fecha_inicio` varchar(20) DEFAULT NULL,
  `fecha_fin` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(2, '01 DIRECCION'),
(3, '02 DEPARTAMENTO DE SECRETARIA'),
(4, '03 SECCION DE CUADRO'),
(5, '04 SECCION JURIDICO'),
(6, '05 DEPARTAMENTO DE AUDITORIA'),
(7, '06 DEPARTAMENTO DE DEFENSA, SEGURIDAD Y PROTECCION'),
(8, '07 SECCION ORGANIZACION, PLANIFICACION E INFORMACI'),
(9, '08 DEPARTAMENTO DE CONTROL TIERRA Y TRACTORES'),
(10, '09 GRUPO DE TRABAJO DE CONTROL TIERRA Y TRACTORES'),
(11, '10 DEPARTAMENTO DE SUELOS'),
(12, '11 DEPARTAMENTO DE SANIDAD VEGETAL'),
(13, '12 GRUPO DE TRABAJO 1 DE SANIDAD VEGETAL'),
(14, '13 GRUPO DE TRABAJO 2 DE SANIDAD VEGETAL'),
(15, '14 DEPARTAMENTO DE SANIDAD ANIMAL'),
(16, '15 GRUPO DE TRABAJO DE SANIDAD ANIMAL'),
(17, '16 DEPARTAMENTO DE GENETICA ANIMAL Y CONTROL PECUARIO'),
(18, '17 GRUPO DE TRABAJO DE GENETICA ANIMAL Y CONTROL '),
(19, '18 DEPARTAMENTO DE INGENIERÃA AGROPECUARIA'),
(20, '19 DEPARTAMENTO FORESTAL, FLORA Y FAUNA SILVESTRE'),
(21, '20 DEPARTAMENTO DE DESARROLLO Y FOMENTO COOPERATIV'),
(22, '21 DEPARTAMENTO DE GANADERÃA'),
(23, '22 GRUPO DE TRABAJO DE GANADERÃA'),
(24, '23 DEPARTAMENTO DE AGRICULTURA'),
(25, '24 GRUPO DE TRABAJO DE AGRICULTURA'),
(26, '25 SECCIÃ“N DE RECURSOS FITOGENÃ‰TICOS Y SEMILLA'),
(27, '26 DEPARTAMENTO AGRICULTURA URBANA, SUBURBANA Y FA'),
(28, '27 SECCIÃ“N DE COMERCIALIZACIÃ“N'),
(29, '28 DEPARTAMENTO DE ECONOMÃA'),
(30, '29 DEPARTAMENTO DE PERSONAL'),
(31, '30 GRUPO DE TRABAJO DE PERSONAL'),
(32, '31 DEPARTAMENTO DE CIENCIA, INNOVACIÃ“N, DESARROLL'),
(33, '32 DEPARTAMENTO DE ANÃLISIS Y CONTROL'),
(34, '33 DEPARTAMENTO ATENCIÃ“N A LA POBLACIÃ“N'),
(35, '34 LABORATORIO PROVINCIAL DE SANIDAD VEGETAL'),
(36, '35 DEPARTAMENTO DE INFORMÃTICA'),
(37, '36 UEB ASEGURAMIENTO Y SERVICIOS'),
(41, '37 UEB AGENCIA SEPMA'),
(42, '38 EICMA');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `user` varchar(50) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `macddress` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `equipment` varchar(50) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `fullname`, `user`, `ipaddress`, `macddress`, `department`, `equipment`, `created_at`) VALUES
(1, 'EDISBEL RAMIREZ LOVATOS', 'webmaster', '192.168.64.50', '9C-5C-8E-8E-A0-78', '37 EICMA', 'COMPUTADORA', '2022-12-20'),
(3, 'MARIO  NAPOLES POZO', 'pdireccionssp', '192.168.64.52', '', '32 DEPARTAMENTO DE ANÃLISIS Y CONTROL', 'COMPUTADORA', '2022-12-20'),
(4, 'OSVALDO DAVID PIï¿½ERO EQUINO', 'salactrssp', '192.168.64.53', '', '32 DEPARTAMENTO DE ANÃLISIS Y CONTROL', 'COMPUTADORA', '2022-12-20'),
(5, 'YEIMY  ACOSTA RODRIGUEZ', 'salactrssp1', '192.168.64.53', '', '32 DEPARTAMENTO DE ANÃLISIS Y CONTROL', 'COMPUTADORA', '2022-12-20'),
(7, 'OSCAR RAFAEL SANCHEZ MELGAREJO', 'salactrssp3', '192.168.64.53', '', '32 DEPARTAMENTO DE ANÃLISIS Y CONTROL', 'COMPUTADORA', '2022-12-20'),
(8, 'SALON', 'salon', '192.168.64.55', '', 'DEPARTAMENTO DE ANÃLISIS Y CONTROL', 'COMPUTADORA', '2022-12-20'),
(9, 'PROYECTOR', 'proyector', '192.168.64.56', '', 'DEPARTAMENTO DE ANÃLISIS Y CONTROL', 'PROYECTOR', '2022-12-20'),
(10, 'SERVANDO MARTINEZ HERNANDEZ', 'despacho', '192.168.64.58', '', '02 DEPARTAMENTO DE SECRETARIA', 'COMPUTADORA', '2022-12-20'),
(11, 'SERVANDO MARTINEZ HERNANDEZ', 'despacho', '192.168.64.59', '', '02 DEPARTAMENTO DE SECRETARIA', 'LAPTOP', '2022-12-20'),
(12, 'SERVANDO MARTINEZ HERNANDEZ', 'despacho', '192.168.64.60', '', '02 DEPARTAMENTO DE SECRETARIA', 'IMPRESORA', '2022-12-20'),
(13, 'SERVANDO MARTINEZ HERNANDEZ', 'despacho', '192.168.64.61', '', '02 DEPARTAMENTO DE SECRETARIA', 'IMPRESORA', '2022-12-20'),
(14, 'SERVANDO MARTINEZ HERNANDEZ', 'despacho', '192.168.64.62', '', '02 DEPARTAMENTO DE SECRETARIA', 'IMPRESORA', '2022-12-20'),
(15, 'LISVET  CANCIO RODRIGUEZ', 'jsopi', '192.168.64.63', '', 'DIRECCIÃ“N', 'COMPUTADORA', '2022-12-20'),
(16, 'PIZARRA', 'pizarra', '192.168.64.64', '', 'DIRECCIÃ“N', 'PIZARRA', '2022-12-20'),
(17, 'JUAN JOSE NAZCO GONZALEZ', 'delegado', '192.168.64.65', '', 'DIRECCIÃ“N', 'COMPUTADORA', '2022-12-20'),
(18, 'ANA  VALDIVIA AREAS', 'sec-delegado', '192.168.64.66', '', 'DIRECCIÃ“N', 'COMPUTADORA', '2022-12-20'),
(19, 'SERVANDO MARTINEZ HERNANDEZ', 'despacho', '192.168.64.67', '', '02 DEPARTAMENTO DE SECRETARIA', 'PLOTER', '2022-12-20'),
(20, 'SERVANDO MARTINEZ HERNANDEZ', 'despacho', '192.168.64.69', '', '02 DEPARTAMENTO DE SECRETARIA', 'LAPTOP', '2022-12-20'),
(21, 'ROSSANA  PEREZ HERNANDEZ', 'esp6-deco', '192.168.64.81', '', 'DEPARTAMENTO DE ECONOMÃA', 'COMPUTADORA', '2022-12-20'),
(22, 'IDILEIDY MARTIN RODRIGUEZ', 'esp-scuadros', '192.168.64.86', '', 'DEPARTAMENTO DE CUADRO', 'COMPUTADORA', '2022-12-20'),
(23, 'ELISABE  JIMENEZ ACOSTA', 'jscuadros', '192.168.64.87', '', 'DEPARTAMENTO DE CUADRO', 'COMPUTADORA', '2022-12-20'),
(24, 'ELVIA  RODRIGUEZ HERNANDEZ', 'jsjuridica', '192.168.64.88', '', 'DEPARTAMENTO DE JURÃDICO', 'COMPUTADORA', '2022-12-20'),
(25, 'VERSAT ECONOMÃA', 'versat', '192.168.64.89', '', 'DEPARTAMENTO DE ECONOMÃA', 'COMPUTADORA', '2022-12-20'),
(26, 'ELLEINY  LORENZO SANCHEZ', 'esp3-deco', '192.168.64.90', '', 'DEPARTAMENTO DE ECONOMÃA', 'COMPUTADORA', '2022-12-20'),
(27, 'LUCIANO LUMPUY ROCA', 'prod-as', '192.168.64.91', '', 'UEB ASEGURAMIENTO Y SERVICIO', 'COMPUTADORA', '2022-12-20'),
(28, 'NORGE  YERO GOMEZ', 'sdganaderia', '192.168.64.92', '', 'DEPARTAMENTO DE GANADERÃA', 'COMPUTADORA', '2022-12-20'),
(29, 'Juan Carlos Perez Perez', 'jdeconomia', '192.168.64.93', '', 'DEPARTAMENTO DE ECONOMÃA', 'COMPUTADORA', '2022-12-20'),
(30, 'ZULEIKA  HUDSON RUIZ', 'esp2-deco', '192.168.64.94', '', 'DEPARTAMENTO DE ECONOMÃA', 'COMPUTADORA', '2022-12-20'),
(31, 'NORBELYS M ROQUE HERNANDEZ', 'esp-estadistica', '192.168.64.95', '', '28 DEPARTAMENTO DE ECONOMÃA', 'COMPUTADORA', '2022-12-20'),
(32, 'AIDA IRENE ONDARZA CARBALLO', 'esp1-deco', '192.168.64.96', '', '01 DIRECCION', 'COMPUTADORA', '2022-12-20'),
(33, 'LISNAIDIS JORGE LAGO', 'drtor-sepma', '192.168.64.97', '', '37 UEB AGENCIA SEPMA', 'COMPUTADORA', '2022-12-20'),
(34, 'NELSON  SANTANA QUINTERO', 'jdpersonal', '192.168.64.111', '', 'DEPARTAMENTO DE PERSONAL', 'COMPUTADORA', '2022-12-20'),
(35, 'PEDRO ANTONIO VALDES GARCIA', 'esp3-dpersonal', '192.168.64.112', '', 'DEPARTAMENTO DE PERSONAL', 'COMPUTADORA', '2022-12-20'),
(36, 'LEONOR MARDELIS BERNAL GARCIA', 'esp4-dpersonal', '192.168.64.113', '', 'DEPARTAMENTO DE PERSONAL', 'COMPUTADORA', '2022-12-20'),
(37, 'JOSE LUIS ALONSO JIMENEZ', 'esp1-sjuridico', '192.168.64.114', '', 'DEPARTAMENTO DE JURÃDICO', 'COMPUTADORA', '2022-12-20'),
(38, 'MARIA TEREZA NAZCO PALOMINO', 'esp-dsp1', '192.168.64.115', '', 'DEPARTAMENTO DE SEGURIDAD Y PROTECCIÃ“N', 'COMPUTADORA', '2022-12-20'),
(39, 'MARTIN LEONCIO PEREZ HERNANDEZ', 'jddsp', '192.168.64.116', '', 'DEPARTAMENTO DE SEGURIDAD Y PROTECCIÃ“N', 'COMPUTADORA', '2022-12-20'),
(40, 'YORDENKY CONCEPCION SANCHEZ', 'esp-apoblacion', '192.168.64.128', '', '33 DEPARTAMENTO ATENCIÃ“N A LA POBLACIÃ“N', 'COMPUTADORA', '2022-12-20'),
(41, 'FALTA NOMBRE', 'sec-apoblacion', '192.168.64.129', '', '33 DEPARTAMENTO ATENCIÃ“N A LA POBLACIÃ“N', 'COMPUTADORA', '2022-12-20'),
(42, 'LEONEL  VALDIVIA HERNANDEZ', 'jscomercial', '192.168.64.140', '', 'SECCIÃ“N COMERCIALIZACIÃ“N', 'COMPUTADORA', '2022-12-20'),
(43, 'YEMNY YISEL LOPEZ RUCH', 'sec-scomercial', '192.168.64.141', '', 'SECCIÃ“N COMERCIALIZACIÃ“N', 'COMPUTADORA', '2022-12-20'),
(44, 'DAYANA GONZÃLES PÃ‰REZ', 'sec-dtor-as', '192.168.64.142', '', 'UEB ASEGURAMIENTO Y SERVICIOS', 'COMPUTADORA', '2022-12-20'),
(45, 'TANIA CUELLAR RODRIGUEZ', 'espp-eco-as', '192.168.64.145', '', 'UEB ASEGURAMIENTO Y SERVICIOS', 'COMPUTADORA', '2022-12-21'),
(46, 'VELYS AMARO RUIZ', 'eco-as', '192.168.64.146', '', 'UEB ASEGURAMIENTO Y SERVICIOS', 'COMPUTADORA', '2022-12-21'),
(47, 'DAILY CARDENAS RODRIGUEZ', 'jdpersonal-as', '192.168.64.149', '', 'UEB ASEGURAMIENTO Y SERVICIOS', 'COMPUTADORA', '2022-12-21'),
(48, 'JORGE ADALBERTO MARTIN CASTAÃ‘EDA', 'esp1-dia', '192.168.64.152', '', '', 'COMPUTADORA', '2022-12-21'),
(49, 'CONCEPCION  GONZALEZ CASTAÃ‘EDA', 'esp2-dia', '192.168.64.153', '', '', 'COMPUTADORA', '2022-12-21'),
(50, 'RAFAEL QUINTERO', 'esp3-dia', '192.168.64.154', '', '', 'COMPUTADORA', '2022-12-21'),
(51, 'ONELKIS REGLA GUTIERREZ NODARSE', 'jdausuf', '192.168.64.155', '', '', 'COMPUTADORA', '2022-12-21'),
(52, 'GEISY WILLIANS BARROSO CASTILLO', 'esp-srfsemilla', '192.168.64.156', '', '', 'COMPUTADORA', '2022-12-21'),
(53, 'FALTA NOMBRE', 'jsrfsemilla', '192.168.64.156', '', '25 SECCIÃ“N DE RECURSOS FITOGENÃ‰TICOS Y SEMILLA', 'COMPUTADORA', '2022-12-21'),
(54, 'NOELVIS  CAÃ‘IZAREZ VALDIVIA', 'esp4-dagricola', '192.168.64.157', '', '', 'COMPUTADORA', '2022-12-21'),
(55, 'JOSE ARMANDO GONZALEZ ALVAREZ', 'esp8-dia', '192.168.64.158', '', '', 'COMPUTADORA', '2022-12-21'),
(56, 'MAYRA  VALDEZ GARCIA', 'sec-dia', '192.168.64.159', '', '', 'COMPUTADORA', '2022-12-21'),
(57, 'ROBERTO  GONZALEZ ARMAS', 'esp5-dia', '192.168.64.160', '', '', 'COMPUTADORA', '2022-12-21'),
(58, 'MAXIMO MIGUEL TORRES HERNANDEZ', 'esp4-dia', '192.168.64.163', '', '', 'COMPUTADORA', '2022-12-21'),
(59, 'BEATRIZ BERROA RODRIGUEZ', 'esp-calidad-as', '192.168.64.164', '', '', 'COMPUTADORA', '2022-12-21'),
(60, 'MARIA VICTORIA NODARSE PACHECO', 'esp8-dagricola', '192.168.64.165', '', '', 'COMPUTADORA', '2022-12-21'),
(61, 'ONELIA VIRGINIA RODRIGUEZ POLANCO', 'esp1-dausuf', '192.168.64.170', '', '', 'COMPUTADORA', '2022-12-21'),
(62, 'ALBERTO ROBERTO REINA MONTIEL', 'sdagricola', '192.168.64.171', '', '01 DIRECCION', 'COMPUTADORA', '2022-12-21'),
(63, 'MARIA DE LOS ANGELES GUTIERREZ JORGE', 'esp2-dsanimal', '192.168.64.172', '', '', 'COMPUTADORA', '2022-12-21'),
(64, 'IDISMARYS  PIZARRO RODRIGUEZ', 'sec-sdagricola', '192.168.64.179', '', '', 'COMPUTADORA', '2022-12-21'),
(65, 'LUCRECIA MINERVA SANCHEZ DIAZ', 'jdsefffs', '192.168.64.180', '', '', 'COMPUTADORA', '2022-12-21'),
(66, 'ANTONIO  ALVAREZ GONZALEZ', 'esp2-dsefffs', '192.168.64.181', '', '', 'COMPUTADORA', '2022-12-21'),
(67, 'ARISBEL YAN MARTIN DELGADO', 'esp1-dsefffs', '192.168.64.182', '', '', 'COMPUTADORA', '2022-12-21'),
(68, 'DAVID ARSENIO DIAZ COCA', 'esp3-dsanimal', '192.168.64.183', '', '', 'COMPUTADORA', '2022-12-21'),
(69, 'IVAN ERNESTO BENITEZ BAGUEZ', 'esp1-dsanimal', '192.168.64.184', '', '', 'COMPUTADORA', '2022-12-21'),
(70, 'LOURDES DEL CARMEN CARBONELL CARBONELL', 'jdsanimal', '192.168.64.185', '', '', 'COMPUTADORA', '2022-12-21'),
(71, 'LEIDY  BAUTA VALDIVIA', 'esp7-dsanimal', '192.168.64.186', '', '', 'COMPUTADORA', '2022-12-21'),
(72, 'JUAN CARLOS VALDIVIA CRUZ', 'jdgacp', '192.168.64.187', '', '', 'COMPUTADORA', '2022-12-21'),
(73, 'JUAN MIGUEL MARCH PERDIGON', 'esp2-gcp', '192.168.64.188', '', '', 'COMPUTADORA', '2022-12-21'),
(74, 'DEYVIS ALFREDO CASANOVA PEREZ', 'jdganaderia', '192.168.64.189', '', '', 'COMPUTADORA', '2022-12-21'),
(75, 'ALEXIS RODRIGUEZ PEREZ', 'esp2-dganaderia', '192.168.64.190', '', '22 GRUPO DE TRABAJO DE GANADERÃA', 'COMPUTADORA', '2022-12-21'),
(76, 'YAMILKA LUGONES CEDENO', 'esp1-gcp', '192.168.64.191', '', '17 GRUPO DE TRABAJO DE GENETICA ANIMAL Y CONTROL ', 'COMPUTADORA', '2022-12-21'),
(77, 'ILIANA  RODRIGUEZ ROMERO', 'sec-sdganaderia', '192.168.64.194', '', '', 'COMPUTADORA', '2022-12-21'),
(78, 'HILDA JULIA DIAZ GOMEZ', 'esp4-dsanimal', '192.168.64.195', '', '', 'COMPUTADORA', '2022-12-21'),
(79, 'LEOSVALDO  CRUZ DUARDO', 'esp7-dagricola', '192.168.64.196', '', '', 'COMPUTADORA', '2022-12-21'),
(80, 'MARISEL  DIAZ GONZALEZ', 'esp3-dagricola', '192.168.64.198', '', '', 'COMPUTADORA', '2022-12-21'),
(81, 'PEDRO PASCUAL LÃ“PEZ CABELLO', 'sdgeneral', '192.168.64.201', '', '', 'COMPUTADORA', '2022-12-21'),
(82, 'YOANDRA  GOMEZ RODRIGUEZ', 'esp1-dcima', '192.168.64.203', '', '', 'COMPUTADORA', '2022-12-21'),
(83, 'LIVAN  RAMIREZ BRITO', 'pagrocadenas', '192.168.64.203', '', '', 'COMPUTADORA', '2022-12-21'),
(84, 'ODENIS  GOMEZ BRITO', 'jdcima', '192.168.64.204', '', '', 'COMPUTADORA', '2022-12-21'),
(85, 'EDUARDO PAZ ALFARO', 'esp-sopi', '192.168.64.205', '', '', 'COMPUTADORA', '2022-12-21'),
(86, 'ANA CELIA REMON SOTO', 'esp1-dfc', '192.168.64.206', '', '', 'COMPUTADORA', '2022-12-21'),
(87, 'MARIA ELENA MONTES HERNANDEZ', 'sec-auditoria', '192.168.64.207', '', '', 'COMPUTADORA', '2022-12-21'),
(88, 'ODELKIS  MARIN ESCOBAR', 'esp3-dcima', '192.168.64.209', '', '', 'COMPUTADORA', '2022-12-21'),
(89, 'MARIA  NAVIA ROMEU', 'sec-sdgeneral', '192.168.64.210', '', '', 'COMPUTADORA', '2022-12-21'),
(90, 'ROBERTO  MARTIN BARCELO', 'esp2-dfc', '192.168.64.212', '', '', 'COMPUTADORA', '2022-12-21'),
(91, 'CARLOS ALBERTO CERVANTES ZULUETA', 'jdsv', '192.168.64.213', '', '', 'COMPUTADORA', '2022-12-21'),
(92, 'MARILIN AMPARO NEGRIN MAYEA', 'sec-dsv', '192.168.64.214', '', '', 'COMPUTADORA', '2022-12-21'),
(93, 'YOSVANI AGUILA CONDE', 'dirlab', '192.168.64.215', '', '', 'COMPUTADORA', '2022-12-21'),
(94, 'KEYLER LOPEZ CRUZ', 'esppc1-dsv', '192.168.64.216', '', '', 'COMPUTADORA', '2022-12-21'),
(95, 'DUNIESKY  PEREZ PEREZ', 'jpc-dsv', '192.168.64.216', '', '', 'COMPUTADORA', '2022-12-21'),
(96, 'MAIKEL ANTONIO FARIAS GONZALEZ', 'jc-dsv', '192.168.64.217', '', '', 'COMPUTADORA', '2022-12-21'),
(97, 'JOSE MANUEL RAMOS HERNANDEZ', 'entomologia-dsv', '192.168.64.218', '', '', 'COMPUTADORA', '2022-12-21'),
(98, 'YOSNIER  HERNANDEZ BARSAGA', 'sp-dsv', '192.168.64.219', '', '', 'COMPUTADORA', '2022-12-21'),
(99, 'YOSBEL  HIDALGO SANCHEZ', 'jlb-dsv', '192.168.64.220', '', '', 'COMPUTADORA', '2022-12-21'),
(100, 'LEIDY LAURA SANCHEZ RODRIGUEZ', 'adies04-dsv', '192.168.64.221', '', '', 'COMPUTADORA', '2022-12-21'),
(101, 'MARIBEL  RODRIGUEZ TOLEDO', 'bioelab-dsv', '192.168.64.221', '', '', 'COMPUTADORA', '2022-12-21'),
(102, 'ANA MARIA CANCIO AVILA', 'entomopatogenos-dsv', '192.168.64.221', '', '', 'COMPUTADORA', '2022-12-21'),
(103, 'ROSA MARIA DIAZ ALVAREZ', 'nematologia-dsv', '192.168.64.221', '', '', 'COMPUTADORA', '2022-12-21'),
(104, 'YARENIS  PALMERO BENITEZ', 'virologia-dsv', '192.168.64.221', '', '', 'COMPUTADORA', '2022-12-21'),
(105, 'ANGEL FIDEL ROCHA DAUMÃ‰NICO', 'jddfc', '192.168.64.223', '', '', 'COMPUTADORA', '2022-12-21'),
(106, 'ROLANDO ROQUE COMPANIONI', 'director-as', '192.168.64.224', '', '', 'COMPUTADORA', '2022-12-21'),
(107, 'RANGEL VELOSO ECHEMENDIA', 'inspeccion', '192.168.64.225', '', '', 'COMPUTADORA', '2022-12-21'),
(108, 'ADONIS GUERRA PANECA', 'bio1-dsv', '192.168.64.227', '', '38 EICMA', 'COMPUTADORA', '2022-12-21'),
(109, 'ELDA ISABEL CONSUEGRA MORGADO', 'jst-dsv', '192.168.64.228', '', '', 'COMPUTADORA', '2022-12-21'),
(110, 'FIDEL PEREZ DIAZ', 'espc-dsv', '192.168.64.230', '', '', 'COMPUTADORA', '2022-12-21'),
(111, 'GEINY  RAMOS TRIANA', 'esp2-dcima', '192.168.64.247', '00-71-C2-19-13-68', '31 DEPARTAMENTO DE CIENCIA, INNOVACIÃ“N, DESARROLL', 'COMPUTADORA', '2022-12-21'),
(112, 'MADAY CHONGO PEREZ', 'esp3-dganaderia', '192.168.64.178', '7c-05-07-2c-7e-28', '', 'COMPUTADORA', '2023-01-30'),
(113, 'YUSMEIDY MARIN MONTIEL', 'esp-eco-as', '', '', '36 UEB ASEGURAMIENTO Y SERVICIOS', 'COMPUTADORA', '2023-03-31'),
(114, 'RAUL GARCIA MATIAS', 'esp-energetico-as', '', '', '36 UEB ASEGURAMIENTO Y SERVICIOS', 'COMPUTADORA', '2023-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(11) NOT NULL,
  `preffix` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `kind` int(11) NOT NULL,
  `val` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `preffix`, `label`, `kind`, `val`) VALUES
(1, 'company_name', 'Nombre de la empresa', 2, 'UEB EICMA Sancti Spiritus'),
(2, 'title', 'Titulo del Sistema', 2, 'Empresa de Informática y Comunicaciones del MINAG'),
(3, 'admin_email', 'Email Administracion', 2, 'webmaster@dlg.ssp.minag.gob.cu'),
(4, 'logo', 'Logo', 4, ''),
(5, 'otra_imagen', 'Otra Imagen', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `connectivity`
--

CREATE TABLE `connectivity` (
  `id` int(11) NOT NULL,
  `company` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ed` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `wan` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `lan` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `firewall` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `domain` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `bandwidth` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `connectivity`
--

INSERT INTO `connectivity` (`id`, `company`, `ed`, `wan`, `lan`, `firewall`, `domain`, `bandwidth`, `created_at`) VALUES
(1, 'UEB EICMA Sancti Spiritus', 'SSFD010807', '172.16.0.40/30', '172.16.75.0/24', '172.16.75.5', 'ssp.eicma.cu', '20 MB', '2023-05-05'),
(2, 'Feria Agropecuaria ', 'SSED110933', '172.16.0.120/30', '172.16.145.0/24', '172.16.145.5', 'ras.ssp.minag.cu', '4 MB', '2023-05-05'),
(3, 'Delegación Provincial de la Agricultura ', 'SSFD0026', '172.16.0.132/30', '172.16.148.0/24', '172.16.148.5', 'dlg.ssp.minag.gob.cu', '20 MB', '2023-05-05'),
(4, 'Empresa Suministro y Transporte Agropecuario', 'SSED002608', '172.16.2.96/30', '172.17.12.0/24', '172.17.12.2', 'estassp.minag.cu', '10 MB', '2023-05-05'),
(5, 'Empresa de Talleres Agropecuarios', 'SSED1002', '', '172.17.13.2/24', '172.17.13.4', 'etassp.minag.cu', '2 MB', '2023-05-05'),
(6, 'Empresa Desmonte y Construcción ', 'SSED1073', '', '', '172.18.178.34', 'desmon.ssp.minag.cu', '2 MB', '2023-05-05'),
(7, 'Delegación Municipal Cabaiguán ', 'CNED1012', '172.16.3.68/30', '172.17.69.0/24', '172.17.69.2', 'dlgca.ssp.minag.gob.cu', '2 MB', '2023-05-05'),
(8, 'Delegación Municipal Fomento', 'FMED100507', '172.16.3.72/30', '172.17.70.0/24', '172.17.70.2', 'dlgfo.ssp.minag.gob.cu', '512 KB', '2023-05-05'),
(9, 'Delegación Municipal Jatibonico', 'JBED1010', '172.16.3.76/30', '172.17.71.0/24', '172.17.71.2', 'dlgja.ssp.minag.gob.cu', '2 MB', '2023-05-05'),
(10, 'Delegación Municipal La Sierpe', 'ERED1002', '172.16.3.80/30', '172.17.72.0/24', '172.17.72.2', 'dlgls.ssp.minag.gob.cu', '2 MB', '2023-05-05'),
(11, 'Delegación Municipal Sancti Spíritus', 'SSED1116', '172.16.3.84/30', '172.17.73.0/24', '172.17.73.2', 'dlgss.ssp.minag.gob.cu', '2 MB', '2023-05-05'),
(12, 'Delegación Municipal Taguasco', 'TSED1012', '172.16.3.88/30', '172.17.74.0/24', '172.17.74.2', 'dlgta.ssp.minag.gob.cu', '2', '2023-05-05'),
(13, 'Delegación Municipal Trinidad', 'TRED1068', '172.16.3.92/30', '172.17.75.0/24', '172.17.75.2', 'dlgtr.ssp.minag.gob.cu', '2 MB', '2023-05-05'),
(14, 'Delegación Municipal Yaguajay', 'YYED1008', '172.16.3.96/30', '172.17.76.0/24', '172.17.76.3', 'dlgya.ssp.minag.gob.cu', '2 MB', '2023-05-05'),
(15, 'ENPA', 'SSFD012007', '172.16.3.100/30', '172.17.77.0/24', '172.17.77.2', 'enpa.ssp.minag.cu', '10 MB', '2023-05-05'),
(16, 'Cultivos Varios Banao', 'OBED3005', '172.16.5.228/30', '172.17.237.0/24', '172.17.237.2', 'agrobanao.ssp.minag.cu', '2 MB', '2023-05-05'),
(17, 'ETPP Sanidad Vegetal Banao', 'OBED3002', '172.16.5.204/30', '172.17.231.0/24', '172.17.231.2', 'svba.ssp.minag.gob.cu', '1 MB', '2023-05-05'),
(18, 'ETPP Sanidad Vegetal Cabaiguán', 'CNED1018', '172.16.7.84/30', '172.18.74.0/24', '172.18.74.2    3 y 4', 'svca.ssp.minag.gob.cu', '1 MB', '2023-05-05'),
(19, 'ETPP Sanidad Vegetal Iguará Yaguajay', 'IGED1004', '172.16.7.72/30', '172.18.71.0/24', '172.18.71.2', 'svya.ssp.minag.gob.cu', '1 MB', '2023-05-05'),
(20, 'ETPP Sanidad Vegetal Condado ', 'KDED1005', '172.16.7.76/30', '172.18.72.0/24', '172.18.72.2', 'svtr.ssp.minag.gob.cu', '1 MB', '2023-05-05'),
(21, 'ETPP Sanidad Vegetal Zaza Taguasco', 'ZZED1004', '172.16.7.80/30', '172.18.73.0/24', '172.18.73.2', 'svta.ssp.minag.gob.cu', '1 MB', '2023-05-05'),
(22, 'ETPP Sanidad Vegetal Puesto Frontera  Casilda', 'TRED1001', '', '172.18.72.0/24', '172.18.178.98', 'cvpf.ssp.minag.gob.cu', '2 MB', '2023-05-05'),
(23, 'Escuela Capacitación MINAG', 'SSED1155', '172.16.7.188/30', '172.18.100.0/24', '172.18.100.2', 'epcss.ssp.ming.gob.cu', '2 MB', '2023-05-05'),
(24, 'Valle Caonao', 'IGED1006', '172.16.7.184/30', '172.18.99.0/24', '172.18.99.2', 'vcaonao.ssp.minag.cu', '4 MB', '2023-05-05'),
(25, 'ACPA ', 'SSED005607', '172.16.17.52/30', '172.18.187.240/29', '172.18.187.242', 'acpass.minag.cu', '512 KB', '2023-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_technical`
--

CREATE TABLE `contacts_technical` (
  `id` int(11) NOT NULL,
  `company` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `contacts_technical`
--

INSERT INTO `contacts_technical` (`id`, `company`, `name`, `lastname`, `email`, `address`, `phone`, `image`, `created_at`) VALUES
(1, 'UEB EICMA Sancti Spiritus', 'Edisbel', 'Ramirez Lovatos', 'eptelematica@ssp.eicma.cu', 'Carretera de Jibaro Km 1/2', '52697545', '', '2023-05-06 11:53:44'),
(2, 'Feria Agropecuaria ', 'Edisbel', 'Ramirez Lovatos', 'eptelematica@ssp.eicma.cu', 'Carretera de Jibaro Km 1/2', '52697545', '', '2023-05-06 11:54:58'),
(3, 'Delegación Provincial de la Agricultura ', 'Edisbel', 'Ramirez Lovatos', 'eptelematica@ssp.eicma.cu', 'Carretera de Jibaro Km 1/2', '52697545', '', '2023-05-06 11:55:40'),
(4, 'Empresa Suministro y Transporte Agropecuario', 'Idaily', ' Hernández Rodríguez', 'informatica@estassp.minag.cu', 'Serafín Sánchez # 14 % Circunvalación y Carretera Central Sancti Spíritus', '41323802-52096560', '', '2023-05-06 11:57:02'),
(5, 'Empresa de Talleres Agropecuarios', 'Beatriz', '', 'informatico@etassp.minag.cu', 'Carretera Central Chambelón KM 381', '41361090', '', '2023-05-06 11:58:55'),
(6, 'Empresa Desmonte y Construcción ', 'Harbey ', 'Martínez Torres ', 'informatico@desmon.ssp.minag.cu', 'Carretera Central Chambelón KM 381', '41361313-52139569', '', '2023-05-06 12:00:17'),
(7, 'Delegación Municipal Cabaiguán ', 'Yuniesky ', 'González López', 'ep-cmcab@ssp.eicma.cu', 'Manolo González #78, Cabaiguán', '52693443', '', '2023-05-06 12:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `pvideoconference`
--

CREATE TABLE `pvideoconference` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `videoroom` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `requested` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `directs` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `start_time` time NOT NULL,
  `finish_time` time NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pvideoconference`
--

INSERT INTO `pvideoconference` (`id`, `date`, `videoroom`, `requested`, `directs`, `start_time`, `finish_time`, `created_at`) VALUES
(4, '2023-03-13', 'MINAG', 'ECONOMIA', 'JUAN CARLOS', '09:00:00', '11:00:00', '2023-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `kind` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `username`, `email`, `password`, `image`, `status`, `kind`, `created_at`) VALUES
(1, 'Mario', 'Nápoles Pozo', 'webmaster', 'webmaster@dlg.ssp.minag.gob.cu', 'b8657f030e3eee9bda4a49fd7965533e40582a3c', NULL, 1, 1, '2022-12-20 09:13:14'),
(2, 'Geiny Raul', 'Ramos Triana', 'esp2-dcima', 'esp2-dcima@dlg.ssp.minag.gob.cu', '1afbfa38f03e618d2ba214030a114ae89d107008', NULL, 1, 1, '2022-12-20 10:20:26'),
(3, 'Edisbel', 'Ramirez Lovatos', 'eptelematica', 'eptelematica@ssp.eicma.cu', 'b8657f030e3eee9bda4a49fd7965533e40582a3c', NULL, 1, 1, '2022-12-21 10:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ci` varchar(50) NOT NULL,
  `groupusers` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `services` char(250) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`id`, `fullname`, `username`, `ci`, `groupusers`, `occupation`, `services`, `created_at`) VALUES
(1, 'JUAN JOSE NAZCO GONZALEZ', 'webmaster', '95080237202', 'INFORMATICA', 'ADMINISTRADOR DE RED SUPERIOR', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2022-12-22'),
(2, 'JUAN JOSE NAZCO GONZALEZ', 'delegado', '70022223662', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-26'),
(3, 'PEDRO PASCUAL LÃ“PEZ CABELLO', 'sdgeneral', '67102304389', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-26'),
(4, 'NORGE  YERO GOMEZ', 'sdganaderia', '67050602023', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-26'),
(5, 'ALBERTO ROBERTO REINA MONTIEL', 'sdagricola', '63111502281', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(6, 'ANA  VALDIVIA AREAS', 'sec-delegado', '43122302452', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(7, 'MARIA  NAVIA ROMEU', 'sec-sdgeneral', '75040408215', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(8, 'IDISMARYS  PIZARRO RODRIGUEZ', 'sec-sdagricola', '94072337099', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(9, 'ILIANA  RODRIGUEZ ROMERO', 'sec-sdganaderia', '69081102892', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(11, 'ELISABE  JIMENEZ ACOSTA', 'jscuadros', '72022002276', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(12, 'DAIMY  CARDENAS RODRIGUEZ', 'esp-scuadros', '85111415137', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(13, 'JOSE LUIS ALONSO JIMENEZ', '', '66101002707', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(14, 'ELVIA  RODRIGUEZ HERNANDEZ', 'jsjuridica', '67102521818', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(15, 'MARIA ELENA MONTES HERNANDEZ', 'sec-auditoria', '57072201536', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(16, 'OELVIA ROSA CALZADA JIMENEZ', '', '67112801812', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(17, 'MELBA  MENA REYES', '', '73061004094', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(18, 'EIDA INES LARREA PACHECO', 'auditor1', '62012103014', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(19, 'PAULA ZULEMA SANCHEZ FERNANDEZ', 'auditor5', '62062902890', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(20, 'PEDRO  CONCEPCION VALDEZ', 'jdauditoria', '54081601500', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(21, 'MARIA TEREZA NAZCO PALOMINO', 'esp-dsp1', '63081203474', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(22, 'BARTOLO  RODRIGUEZ RIVES', '', '62082425907', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(23, 'MARTIN LEONCIO PEREZ HERNANDEZ', 'jddsp', '62091203906', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(24, 'FAUSTINO  YANTAS HERNANDEZ', 'inspeccion', '58010701480', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(25, 'LISVET  CANCIO RODRIGUEZ', 'jsopi', '92102537274', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(26, 'DAYAMA  RODRIGUEZ RODRIGUEZ', '', '73101500798', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(27, 'IRINA  PAZ VALDIVIA', '', '82120117414', '', '', 'Usuario del dominio', '2023-01-29'),
(28, 'SAIDANY ISAIRE MARQUES ROMERO', '', '81010813432', '', '', 'Usuario del dominio', '2023-01-29'),
(29, 'BLAS  DELGADO DELGADO', '', '60051702564', '', '', 'Usuario del dominio', '2023-01-29'),
(30, 'LIUSBEL  SANCHEZ ALVAREZ', '', '73090300613', '', '', 'Usuario del dominio', '2023-01-29'),
(31, 'DAISY FELICIA ESTRADA CAÑIZAREZ', '', '62062302977', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(32, 'EDGARDO RODOLFO GUERRA GONZALEZ', '', '69092702508', '', '', 'Usuario del dominio', '2023-01-29'),
(33, 'TOMAS ALBERTO RIOS ORELLANA', '', '60040703002', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(34, 'EDDY  VALLE LARA', '', '73030400940', '', '', 'Usuario del dominio', '2023-01-29'),
(35, 'PEDRO DE LA CRUZ FARDALES BONET', '', '60050302701', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(36, 'MARIA DE LA CARIDAD SEGREDO DIAZ', '', '69051602113', '', '', 'Usuario del dominio', '2023-01-29'),
(37, 'CARLOS ALBERTO CERVANTES ZULUETA', 'jdsv', '64041421887', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(38, 'ADONIS DE LOS ANGELES GUERRA PANECA', 'bio1-dsv', '88081418698', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(39, 'YOSBEL  HIDALGO SANCHEZ', 'jlb-dsv', '93012122760', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(40, 'JORGE  CERVANTES FERNANDEZ', 'espppcv-dsv', '52102622322', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(41, 'RAINEL  GARCIA DIAZ', '', '94101211548', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(42, 'YOSNIER  HERNANDEZ BARSAGA', 'sp-dsv', '96112515042', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(43, 'MAIKEL ANTONIO FARIAS GONZALEZ', 'jc-dsv', '80091513342', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(44, 'DUNIESKY  PEREZ PEREZ', 'jpc-dsv', '83050113367', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(45, 'MARILIN AMPARO NEGRIN MAYEA', 'sec-dsv', '66103003270', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(46, 'ELDA ISABEL CONSUEGRA MORGADO', 'jlb-dsv', '61110502934', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(47, 'LOURDES DEL CARMEN CARBONELL CARBONELL', 'jdsanimal', '72052101131', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(48, 'LUIS  QUINTERO ALVAREZ', '', '65101403467', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(49, 'LEIDY  BAUTA VALDIVIA', 'esp7-dsanimal', '70112001718', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(50, 'DAVID ARSENIO DIAZ COCA', 'esp3-dsanimal', '67072901948', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(51, 'IVAN ERNESTO BENITEZ BAGUEZ', 'esp1-dsanimal', '73082001700', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(52, 'MARIA DE LOS ANGELES GUTIERREZ JORGE', 'esp2-dsanimal', '65070506079', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(53, 'HILDA JULIA DIAZ GOMEZ', 'esp4-dsanimal', '55010901156', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(54, 'ALEXIS  VEGA PEREZ', 'jdgacp', '70032705323', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(55, 'RAMON LEONARDO BALMACEDA FLORES', '', '59110603200', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(56, 'VIVIAN  RIVERO CRESPO', 'esp4-gcp', '55021401533', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(57, 'CARMEN  VALLE NIEVE', 'esp5-gcp', '59122802377', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(58, 'ROSAMARI  PALACIO PRIETO', 'esp1-gcp', '88091818670', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(59, 'JUAN MIGUEL MARCH PERDIGON', 'esp2-gcp', '68062201688', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(60, 'ARMANDO CESAR SANTIN HARRISON', 'jdia', '68041202946', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(61, 'ROBERTO  GONZALEZ ARMAS', 'esp5-dia', '56030729785', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(62, 'JOSE ARMANDO GONZALEZ ALVAREZ', 'esp8-dia', '90122137004', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(63, 'EDUARDO RAFAEL SAUCEDO LEVI', 'esp9-dia', '92011637022', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(64, 'JORGE ADALBERTO MARTIN CASTAÑEDA', 'esp1-dia', '61042302665', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(65, 'RAFAEL EUGENIO QUINTEROS GUERRA', 'esp3-dia', '60090607280', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(66, 'MAXIMO MIGUEL TORRES HERNANDEZ', 'esp4-dia', '48111801642', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(67, 'CONCEPCION  GONZALEZ CASTAÑEDA', 'esp2-dia', '52100701710', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(68, 'MAYRA  VALDEZ GARCIA', 'sec-dia', '57111602835', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(69, 'LUCRECIA MINERVA SANCHEZ DIAZ', 'jdsefffs', '67112323254', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(70, 'ANTONIO  ALVAREZ GONZALEZ', 'esp2-desfffs', '60042001749', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(71, 'ARISBEL YAN MARTIN DELGADO', 'esp1-desfffs', '96060615544', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(72, 'DAMARIS  CORRALES ORTEGA', 'sec-dfc', '61102902793', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(73, 'ANGEL FIDEL ROCHA DAUMÉNICO', 'jddfc', '60032315366', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(74, 'ANA CELIA REMON SOTO', 'esp1-dfc', '66112142455', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(75, 'ROBERTO  MARTIN BARCELO', 'esp2-dfc', '52091502263', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(76, 'DEYVIS ALFREDO CASANOVA PEREZ', 'jdganaderia', '72092501428', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(77, 'JORGE  CONCEPCION PEREZ', '', '58111702749', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(78, 'MARCELO ALFONSO GARCIA CASTILLO', '', '61012303047', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(79, 'FRANCISCO ERNESTO CARBONEL DE LA TORRE', 'esp2-dganaderia', '71051901466', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(80, 'MADAY  CHONGO PEREZ', 'esp3-dganaderia', '72073102370', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(81, 'ADOLFO OSCAR BECERRIL GUTIERREZ', '', '73022700823', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(82, 'EDUARDO  JIMENEZ CALZADA', 'jdagricola', '63120962244', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(83, 'MARIA VICTORIA NODARSE PACHECO', '', '54041602477', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(84, 'CARLOS YOEL CORREA MARTIN', '', '96101414801', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(85, 'YELENA  CARDENAS MATIENZO', 'sec-dagricola', '96091614814', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(86, 'LEOSVALDO  CRUZ DUARDO', 'esp7-dagricola', '74120707324', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(87, 'MARISEL  DIAZ GONZALEZ', 'esp3-dagricola', '68052023818', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(88, 'NOELVIS  CAÑIZAREZ VALDIVIA', 'esp4-dagricola', '78110418602', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(89, 'SERVANDO  MARTINEZ HERNANDEZ', 'despacho', '64030701567', '02 DEPARTAMENTO DE SECRETARIA', 'JEFE DE SECRETARIA', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(90, 'GEISY WILLIANS BARROSO CASTILLO', 'esp-srfsemilla', '95081637447', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(91, 'ONELKIS REGLA GUTIERREZ NODARSE', 'jdausuf', '69082601912', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(92, 'ONELIA VIRGINIA RODRIGUEZ POLANCO', 'esp1-dausuf', '93072514016', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(93, 'ALEXIS  GONZALEZ GUZMAN', 'jsrfsemilla', '73032501483', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(94, 'PEDRO  LUIZ MARTINEZ', 'esp-comercial', '47042905186', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(95, 'YEMNY YISEL LOPEZ RUCH', 'sec-scomercial', '91020636694', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(96, 'LEONEL  VALDIVIA HERNANDEZ', 'jscomercial', '66032601680', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(97, 'LUIS  CASTAÑEDA CARBONEL', '', '44010801406', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(98, 'PAULO LUIS ROCHA HERNANDEZ', '', '52062202462', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(99, 'AIDA IRENE ONDARZA CARBALLO', 'esp1-deco', '64102023512', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(100, 'ELLEINY  LORENZO SANCHEZ', 'esp3-deco', '83010213290', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(101, 'ALBA DE LA CARIDAD HERNANDEZ PAZ', 'jdeconomia', '57021902430', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(102, 'ZULEIKA  HUDSON RUIZ', 'esp2-deco', '70122720932', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(103, 'ROSSANA  PEREZ HERNANDEZ', 'esp6-deco', '87022517850', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(104, 'ANDREY ALBERTO ALVAREZ CLAVELO', 'esp4-deco', '79051013320', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(105, 'MIRIAM DEL CARMEN GONZALEZ HUDSON', 'sec-deco', '00121372895', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(106, 'PEDRO ANTONIO VALDES GARCIA', 'esp3-dpersonal', '62011501625', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(107, 'NELSON  SANTANA QUINTERO', 'jdpersonal', '68112323229', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(108, 'MIGUEL  OYARZABAL RODRIGUEZ', 'esp1-dpersonal', '52121902826', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(109, 'LUIS ALBERTO GONZALEZ RODRIGUEZ', 'esp2-dpersonal', '69092402302', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(110, 'LEONOR MARDELIS BERNAL GARCIA', 'esp4-dpersonal', '60101802991', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(111, 'ODELKIS  MARIN ESCOBAR', 'esp3-dcima', '72080923389', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(112, 'YOANDRA  GOMEZ RODRIGUEZ', 'esp1-dcima', '80011513337', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(113, 'GEINY  RAMOS TRIANA', 'esp2-dcima', '87072519323', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(114, 'ISABELA  CRUZ LUMPUY', 'sec-dcima', '97102213273', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(115, 'ABDIELA DOLORES BASTO SAROZA', 'esp-archivo', '99032700118', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(116, 'LIVAN  RAMIREZ BRITO', 'pagrocadenas', '93042314062', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(117, 'ODENIS  GOMEZ BRITO', 'jdcima', '63081404305', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(118, 'OSVALDO DAVID PIï¿½ERO EQUINO', 'salactrssp', '95051137784', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(119, 'YEIMY  ACOSTA RODRIGUEZ', 'salactrssp1', '88073018654', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(120, 'WILBER  CORUJO QUINTANA', 'salactrssp2', '81082913460', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(121, 'MARIO  NAPOLES POZO', 'pdireccion', '84052315809', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(122, 'ANTONIO RICARDO JAVIB PERAZA', 'salaanassp', '50040304949', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(123, 'OSCAR RAFAEL SANCHEZ MELGAREJO', 'salactrssp3', '96020814784', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(124, 'VICTOR MANUEL PINO RODRIGUEZ', 'jpdireccion', '45032901742', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(125, 'VICENTE  GARCIA PEREZ', 'esp-apoblacion', '53070702344', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(126, 'AGUSTIN WESENLAO UNG CASTELLANO', 'sec-apoblacion', '51092802243', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(127, 'LEIDYS  PEREZ ESPINO', 'dirlab-dsv', '82092612617', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(128, 'YAMILCA  LUGONES CEDEÑO', 'entomofagos-dsv', '81122913435', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(129, 'ANA MARIA CANCIO AVILA', 'entomopatogenos-dsv', '87073118099', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(130, 'JOEL  GARCIA BARRERA', 'adies03-dsv', '93041214748', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(131, 'NOEMI  GONZALEZ RAMIREZ', 'quimica-dsv', '54041510599', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(132, 'ROSIO  CONCEPCION MIRABAL', '', '82091017490', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(133, 'LEIDY LAURA SANCHEZ RODRIGUEZ', 'adies04-dsv', '99102012895', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(134, 'MARIA DEL CARMEN DIAZ CAMEJO', 'espsics1-dsv', '61071614358', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(135, 'NEILIN  AMADOR DUARDO', '', '94011137452', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(136, 'MARIBEL  RODRIGUEZ TOLEDO', 'bioelab-dsv', '81022313430', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(137, 'YARENIS  PALMERO BENITEZ', 'virologia-dsv', '81091513413', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(138, 'JOSE MANUEL RAMOS HERNANDEZ', '', '70080902068', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(139, 'ROSA MARIA DIAZ ALVAREZ', 'nematologia-dsv', '78072818338', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(140, 'CLAUDIA  BANDOMO VALDIVIA', '', '99090412957', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(141, 'FIDEL  PEREZ DIAZ', 'espc-dsv', '63123002166', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(142, 'NELSON YOELDIS BENITEZ MEDINA', 'tec-lb-dsv', '94110937088', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(143, 'ARLENIS  RODRIGUEZ GUERRA', 'tppcv-dsv', '57111213953', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(144, 'JAVIER ALEJANDRO RODRIGUEZ HERNANDEZ', 'entomologia1-dsv', '97102013042', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(145, 'ROLANDO ROQUE COMPANIONI', '', '', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(146, 'DAYANA GONZÁLES PÉREZ', '', '91021526677', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(147, 'CARIDAD CARVAJAL NÁPOLES', '', '68072703098', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(148, 'VELYS AMARO RUÍZ', '', '70080901737', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(149, 'DAYANNI SARMIENTO PÉREZ', '', '95062337216', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(150, 'TANIA CUELLAR RODRÍGUEZ', '', '69112801797', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(151, 'OSMANY NARANJO CABRERA', '', '72020615528', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(152, 'YADAMI CASTELLANO YANES ', '', '76031508073', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(153, 'BELKI SÁNCHEZ NARANJO', '', '62021501758', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(154, 'RAÚL GARCÍA MATÍAS', '', '66042704707', '', 'ENERGÉTICO', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(155, 'YUSMEIDY MARÍN MONTIEL', '', '88081018715', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(156, 'DAYAMIR RUCH CABRERA', '', '69090503233', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(157, 'MILENA MOLINET PADRÓN', '', '88021018771', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(158, 'BEATRIZ BERROA RODRÍGUEZ', '', '93112614077', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(159, 'YANIVI PENTÓN MAILERO', '', '86041915329', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(160, 'LISVEY MOREJÓN RODRÍGUEZ', '', '82111117431', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(161, 'OSMANY DÍAZ PEÑA', '', '67092102247', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(162, 'DAILY CÁRDENAS RODRÍGUEZ', '', '85111415056', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(163, 'MELISSA LUGONES GÓMEZ', '', '1011572938', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(164, 'YENSI CARLA DE LA LUZ CABALLERO', '', '97080313535', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(165, 'PEDRO MÉNDEZ VALDÉS', '', '59111903043', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(166, 'IRIAISY MARTÍNEZ CHÁVEZ', '', '68031701736', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(167, 'MEIDY ARIAS MARTÍNEZ', '', '91011636792', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(168, 'MAYVILEIDIS CHACÓN BORREGO', '', '87052902734', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(169, 'LUCIANO LUMPUY ROCA', '', '69030815921', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-01-29'),
(172, 'NORBELYS M ROQUE HERNANDEZ', 'esp-estadistica', '74042330998', '', 'ESPECIALISTA ESTADISTICA', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-02-06'),
(173, 'LISNAIDIS JORGE LAGO', 'drtor-sepma', '87091129543', '', 'Director UEB SEPMA', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-02-06'),
(174, 'DIANELIS REYES MENDEZ', 'esp-gdocumental-sepma', '92060937110', '', '', 'Usuario del dominio,Correo Nacional,Correo Internacional,Navegacion nacional,Navegacion internacional,Mensajeria instantanea,Servicio FTP', '2023-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `videoconference`
--

CREATE TABLE `videoconference` (
  `id` int(11) NOT NULL,
  `videoroom` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `customer` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `groups` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `finish_time` time DEFAULT NULL,
  `price` double DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `videoconference`
--

INSERT INTO `videoconference` (`id`, `videoroom`, `customer`, `groups`, `date`, `start_time`, `finish_time`, `price`, `created_at`) VALUES
(10, 'MINAG', 'ECONOMIA', '300', '2023-03-13', '14:54:51', '15:20:00', 218.25, '2023-03-13'),
(11, 'MINAG', 'Atencion a la poblacion', '300', '2023-03-16', '09:05:05', '11:00:00', 218.25, '2023-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `videoroom`
--

CREATE TABLE `videoroom` (
  `id` int(11) NOT NULL,
  `videoroom` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `code` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `linkaddress` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `videoroom`
--

INSERT INTO `videoroom` (`id`, `videoroom`, `code`, `linkaddress`, `created_at`) VALUES
(1, 'MINISTRO', '819949', 'https://videoconferencia.eicma.cu/b/min-t6x-7lz-9f', '2023-02-06 00:00:00'),
(2, 'MINAG', '749173', 'https://videoconferencia.eicma.cu/b/pue-fnq-sco-tt', '2023-02-12 13:33:20'),
(3, 'GELMA', '313280', 'https://videoconferencia.eicma.cu/b/gel-kgr-cj0-0b', '2023-02-12 13:44:26'),
(4, 'EICMA', '797373', 'https://videoconferencia.eicma.cu/b/adr-w8f-qul-zj', '2023-02-12 13:58:45'),
(6, 'AUDIO GELMA', '-', '-', '2023-02-12 16:22:52'),
(7, 'CAN', '05879', 'https://videoconferencia.eicma.cu/b/adr-w8f-qul-z8', '2023-02-12 17:13:44');

-- --------------------------------------------------------

--
-- Table structure for table `wifi_request`
--

CREATE TABLE `wifi_request` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ipaddress` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `macaddress` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imei` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `number` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `equipment` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `model` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `wifi_request`
--

INSERT INTO `wifi_request` (`id`, `fullname`, `ipaddress`, `macaddress`, `imei`, `number`, `equipment`, `model`, `created_at`) VALUES
(1, 'JUAN JOSE NAZCO GONZALEZ', '', '88-10-8F-28-50-37', '867171032549140', '52859350', 'CELULAR', 'HUAWEI FIG-LX2', '2023-02-01'),
(2, 'PEDRO PASCUAL LÃ“PEZ CABELLO', '', '', '867171032552557', '52865805', 'CELULAR', 'HUAWEI FIG-LX2', '2023-02-02'),
(3, 'ALBERTO ROBERTO REINA MONTIEL', '', '', '867171032554090', '52855667', 'CELULAR', 'HUAWEI FIG-LX2', '2023-02-02'),
(4, 'NORGE  YERO GOMEZ', '', '88-10-8F-28-50-35', '867171032550692', '52172246', 'CELULAR', 'HUAWEI FIG-LX2', '2023-02-02'),
(5, 'BRUNO LUIS GARCIA RAMIREZ', '', '98-9C-57-A1-92-2F', '861956032842776', '52698888', 'CELULAR', 'HUAWEI MHA-L09A', '2023-02-02'),
(6, 'BRUNO LUIS GARCIA RAMIREZ', '', 'D0-7E-35-9E-18-EE', '', '', 'LAPTOP', '', '2023-02-02'),
(7, 'BRUNO LUIS GARCIA RAMIREZ', '', '00-5A-13-0B-36-B2', '', '', 'TABLET', '', '2023-02-02'),
(8, 'BRUNO LUIS GARCIA RAMIREZ (smattv)', '', 'FC-F1-36-2A-B4-39', '', '', 'CELULAR', '', '2023-02-02'),
(9, 'BRUNO LUIS GARCIA RAMIREZ', '', '84-FD-D1-9B-56-4A', '', '', 'LAPTOP', '', '2023-02-02'),
(10, 'ODENIS  GOMEZ BRITO', '', '8C-88-4A-CC-80-FE', '', '52176205', 'CELULAR', '', '2023-02-02'),
(11, 'EDISBEL RAMIREZ LOVATOS', '', '88-9E-33-07-FD-2C', '15097001394815', '52697545', 'CELULAR', 'ALCATEL 3X', '2023-02-02'),
(12, 'GEINY  RAMOS TRIANA', '', '88-9E-33-12-36-27', '', '52702337', 'CELULAR', 'ALCATEL 3X', '2023-02-02'),
(13, 'DIEGO NIEVES', '', 'EC-8C-9A-32-6A-02', '869193041782882', '52172259', 'CELULAR', 'HUAWEI LONDON L22', '2023-02-02'),
(14, 'EDUARDO  JIMENEZ CALZADA', '', '', '869193041814503', '52172258', 'CELULAR', 'HUAWEI LONDON L22', '2023-02-02'),
(15, 'NOELVIS  CAÃ‘IZAREZ VALDIVIA', '', '', '866838020075673', '52159062', 'CELULAR', 'HUAWEI Y360-U31', '2023-02-02'),
(16, 'MARISEL  DIAZ GONZALEZ', '', '', '355216103393396', '52136769', 'CELULAR', 'SAMSUNG J2 CORE', '2023-02-02'),
(17, 'SERVANDO  MARTINEZ HERNANDEZ', '', '', '14528008317947', '52128877', 'CELULAR', 'ALCATEL 4034G (PIX', '2023-02-02'),
(18, 'DEYVIS ALFREDO CASANOVA PEREZ', '', '48-60-5F-61-44-21', '357091099453357', '52801877', 'CELULAR', 'LG X230SD (k4 Novo)', '2023-02-02'),
(19, 'MARCELO ALFONSO GARCIA CASTILLO', '', '', '355216103400266', '52118311', 'CELULAR', 'SAMSUNG J2 CORE', '2023-02-02'),
(20, 'JORGE  CONCEPCION PEREZ', '', '', '8621 49028958066', '52136766', 'CELULAR', 'OT-4033X (POP C3)', '2023-02-02'),
(21, 'ANGEL FIDEL ROCHA DAUMÃ‰NICO', '', '', '356860092029328', '52107107', 'CELULAR', ' LG Q STYLUS ALPHA', '2023-02-02'),
(22, 'NELSON  SANTANA QUINTERO', '', '48-60-5F-61-44-70', '357091099454934', '52147341', 'CELULAR', ' LG X230SD (k4 Novo)', '2023-02-02'),
(23, 'ALBA DE LA CARIDAD HERNANDEZ PAZ', '', '88-10-8F-28-51-D4', '867171032554843', '52172252', 'CELULAR', ' HUAWEI FIG-LX2', '2023-02-02'),
(24, 'MARTIN LEONCIO PEREZ HERNANDEZ', '', '', '866838020061103', '52172270', 'CELULAR', ' HUAWEI Y360-U31', '2023-02-02'),
(25, 'PEDRO  CONCEPCION VALDEZ', '', '', '866838029428568', '52172282', 'CELULAR', 'HUAWEI Y360-U31', '2023-02-02'),
(26, 'ARMANDO CESAR SANTIN HARRISON', '', '', '356860092029310', '52171603', 'CELULAR', ' LG Q STYLUS ALPHA', '2023-02-02'),
(27, 'MAXIMO MIGUEL TORRES HERNANDEZ', '', '24-OD-C2-94-5F-95', '357487072581752', '52098602', 'CELULAR', ' ALCATEL OT-4013X', '2023-02-02'),
(28, 'JOSE ARMANDO GONZALEZ ALVAREZ', '', '', '', '', 'CELULAR', 'ALCATEL OT-4013X', '2023-02-02'),
(29, 'LUCRECIA MINERVA SANCHEZ DIAZ', '', '', '354152082341604', '52698881', 'CELULAR', 'SAMSUNG SM-J111', '2023-02-02'),
(30, 'LOURDES DEL CARMEN CARBONELL CARBONELL', '', '48-60-5F-61-42-C5', '357091099446393', '52171063', 'CELULAR', 'LG X230SD (k4 Novo)', '2023-02-02'),
(31, 'ALEXIS  VEGA PEREZ', '', '20:32:6C:FE:OC:5C', '355216103399385', '52864361', 'CELULAR', 'SAMSUNG J2 CORE', '2023-02-02'),
(32, 'ELISABE  JIMENEZ ACOSTA', '', 'A8-C8-3A-42-16-14', '866838020071821', '52172288', 'CELULAR', 'HUAWEI Y360-U31', '2023-02-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `preffix` (`preffix`);

--
-- Indexes for table `connectivity`
--
ALTER TABLE `connectivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_technical`
--
ALTER TABLE `contacts_technical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pvideoconference`
--
ALTER TABLE `pvideoconference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videoconference`
--
ALTER TABLE `videoconference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videoroom`
--
ALTER TABLE `videoroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wifi_request`
--
ALTER TABLE `wifi_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `connectivity`
--
ALTER TABLE `connectivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contacts_technical`
--
ALTER TABLE `contacts_technical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pvideoconference`
--
ALTER TABLE `pvideoconference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `videoconference`
--
ALTER TABLE `videoconference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `videoroom`
--
ALTER TABLE `videoroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wifi_request`
--
ALTER TABLE `wifi_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
