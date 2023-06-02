-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2023 a las 17:24:49
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuario`
--
CREATE DATABASE IF NOT EXISTS `usuario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `usuario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convposgrado`
--
-- Creación: 01-06-2023 a las 05:33:18
--

CREATE TABLE `convposgrado` (
  `tituloConvocatoria` varchar(200) NOT NULL,
  `ListaChequeo` varchar(200) NOT NULL,
  `estimuloEconomico` varchar(200) NOT NULL,
  `publicacionConvocatoria` varchar(200) NOT NULL,
  `resultadosFinales` varchar(200) NOT NULL,
  `actaEvaluacion` varchar(200) NOT NULL,
  `certificadoEstudio` varchar(200) NOT NULL,
  `certificadoRegistroUno` varchar(200) NOT NULL,
  `certificadoRegistroDos` varchar(200) NOT NULL,
  `presentacionPostulante` varchar(200) NOT NULL,
  `cartaPresentacion` varchar(200) NOT NULL,
  `cartaAutodeclaracion` varchar(200) NOT NULL,
  `planTrabajo` varchar(200) NOT NULL,
  `cedula` varchar(200) NOT NULL,
  `carnetEstudiantil` varchar(200) NOT NULL,
  `justificacion` varchar(200) NOT NULL,
  `requisicionUnivex` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `convposgrado`
--

INSERT INTO `convposgrado` (`tituloConvocatoria`, `ListaChequeo`, `estimuloEconomico`, `publicacionConvocatoria`, `resultadosFinales`, `actaEvaluacion`, `certificadoEstudio`, `certificadoRegistroUno`, `certificadoRegistroDos`, `presentacionPostulante`, `cartaPresentacion`, `cartaAutodeclaracion`, `planTrabajo`, `cedula`, `carnetEstudiantil`, `justificacion`, `requisicionUnivex`) VALUES
('prueba dos', 'archivo/WhatsApp Image 2023-05-29 at 4.26.54 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.32.17 PM (1).jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.40.45 PM (1).jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.55.06 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.32.17 PM (1).jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.40.45 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.26.54 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.55.06 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.55.06 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.32.17 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.32.17 PM (1).jpeg;'),
('prueba uno', 'archivo/WhatsApp Image 2023-05-29 at 1.33.39 PM (3).jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 1.33.39 PM (2).jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.32.17 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.26.54 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.40.45 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.55.06 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.55.06 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.26.54 PM.jpeg;', '', 'archivo/WhatsApp Image 2023-05-29 at 4.40.45 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.26.54 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.32.17 PM (1).jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.32.17 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.26.54 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivo/WhatsApp Image 2023-05-29 at 4.40.45 PM (1).jpeg;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convpregrado`
--
-- Creación: 29-05-2023 a las 01:25:43
--

CREATE TABLE `convpregrado` (
  `tituloConvocatoria` varchar(100) NOT NULL,
  `ListaChequeo` varchar(100) NOT NULL,
  `estimuloEconomico` varchar(100) NOT NULL,
  `publicacionConvocatoria` varchar(100) NOT NULL,
  `resultadosFinales` varchar(100) NOT NULL,
  `actaResultados` varchar(100) NOT NULL,
  `certificadoEstudio` varchar(100) NOT NULL,
  `cartaPresentacion` varchar(100) NOT NULL,
  `declaracionPostura` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `carnetEstudiantil` varchar(100) NOT NULL,
  `justificacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `convpregrado`
--

INSERT INTO `convpregrado` (`tituloConvocatoria`, `ListaChequeo`, `estimuloEconomico`, `publicacionConvocatoria`, `resultadosFinales`, `actaResultados`, `certificadoEstudio`, `cartaPresentacion`, `declaracionPostura`, `cedula`, `carnetEstudiantil`, `justificacion`) VALUES
('convocatoria', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;'),
('prueba a', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;'),
('prueba b', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;'),
('prueba c', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (1).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (3).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (3).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;'),
('prueba d', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (3).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (3).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (3).pdf;'),
('prueba e', 'archivo/solicitud a viva air laura pdf (3).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;', 'archivo/solicitud a viva air laura pdf (2).pdf;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--
-- Creación: 01-06-2023 a las 12:18:17
--

CREATE TABLE `docente` (
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `tipoUsuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`nombre`, `correo`, `password`, `tipoUsuario`) VALUES
('Centro de investigacion', 'centro@unimilitar.edu.co', '123456', 'centro'),
('leidy', 'leidy@unimilitar.edu.co', '1234567', 'docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulacionpreg`
--
-- Creación: 01-06-2023 a las 13:52:42
--

CREATE TABLE `postulacionpreg` (
  `ListaChequeo` varchar(200) NOT NULL,
  `estimuloEconomico` varchar(200) NOT NULL,
  `publicacionConvocatoria` varchar(200) NOT NULL,
  `resultadosFinales` varchar(200) NOT NULL,
  `actaResultados` varchar(200) NOT NULL,
  `certificadoEstudio` varchar(200) NOT NULL,
  `cartaPresentacion` varchar(200) NOT NULL,
  `declaracionPostura` varchar(200) NOT NULL,
  `cedula` varchar(200) NOT NULL,
  `carnetEstudiantil` varchar(200) NOT NULL,
  `justificacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `postulacionpreg`
--

INSERT INTO `postulacionpreg` (`ListaChequeo`, `estimuloEconomico`, `publicacionConvocatoria`, `resultadosFinales`, `actaResultados`, `certificadoEstudio`, `cartaPresentacion`, `declaracionPostura`, `cedula`, `carnetEstudiantil`, `justificacion`) VALUES
('archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;'),
('archivodocente/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivodocente/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivodocente/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivodocente/WhatsApp Image 2023-05-29 at 4.55.06 PM.jpeg;', 'archivodocente/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivodocente/WhatsApp Image 2023-05-29 at 5.07.26 PM.jpeg;', 'archivodocente/WhatsApp Image 2023-05-29 at 4.55.06 PM.jpeg;', 'archivodocente/WhatsApp Image 2023-05-29 at 4.55.06 PM.jpeg;', 'archivodocente/WhatsApp Image 2023-05-29 at 4.32.17 PM.jpeg;', 'archivodocente/WhatsApp Image 2023-05-29 at 4.40.45 PM (1).jpeg;', 'archivodocente/solicitud a viva air laura pdf (1).pdf;'),
('archivodocente/solicitud a viva air laura pdf (3).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (3).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (3).pdf;', 'archivodocente/solicitud a viva air laura pdf (3).pdf;'),
('archivodocente/solicitud a viva air laura pdf (3).pdf;', 'archivodocente/solicitud a viva air laura pdf (3).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (3).pdf;', 'archivodocente/solicitud a viva air laura pdf (3).pdf;', 'archivodocente/solicitud a viva air laura pdf (3).pdf;', 'archivodocente/solicitud a viva air laura pdf (3).pdf;', 'archivodocente/solicitud a viva air laura pdf (2).pdf;', 'archivodocente/solicitud a viva air laura pdf (3).pdf;');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `convposgrado`
--
ALTER TABLE `convposgrado`
  ADD PRIMARY KEY (`tituloConvocatoria`);

--
-- Indices de la tabla `convpregrado`
--
ALTER TABLE `convpregrado`
  ADD PRIMARY KEY (`tituloConvocatoria`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
