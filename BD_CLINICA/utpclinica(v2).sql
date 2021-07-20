-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2021 a las 07:38:54
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
-- Base de datos: `utpclinica(v2)`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion`
--

CREATE TABLE `atencion` (
  `IdAtencion` int(11) NOT NULL,
  `Talla` float NOT NULL,
  `Peso` float NOT NULL,
  `Presion_Arterial` float NOT NULL,
  `Temperatura` float NOT NULL,
  `Sintomas` varchar(45) NOT NULL,
  `Detalles` varchar(45) NOT NULL,
  `IdPaciente` int(11) NOT NULL,
  `idMedico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `atencion`
--

INSERT INTO `atencion` (`IdAtencion`, `Talla`, `Peso`, `Presion_Arterial`, `Temperatura`, `Sintomas`, `Detalles`, `IdPaciente`, `idMedico`) VALUES
(50, 1, 1, 1, 1, '1', '1', 11, 7),
(51, 1, 1, 1, 1, '1', '1', 11, 7),
(59, 1, 1, 1, 1, '1', '1', 11, 7),
(60, 1, 1, 1, 1, '1', '1', 11, 7),
(63, 1, 1, 1, 1, '1', '1', 11, 7),
(64, 1.78, 56489, 456, 30, 'asd', 'asd', 11, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `Estado` varchar(15) NOT NULL,
  `Precio` float NOT NULL,
  `Fecha_Programada` varchar(20) NOT NULL,
  `Hora_Programada` varchar(45) NOT NULL,
  `Prioridad` varchar(20) DEFAULT NULL,
  `CodPaciente` int(11) NOT NULL,
  `CodDoctor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idCita`, `Estado`, `Precio`, `Fecha_Programada`, `Hora_Programada`, `Prioridad`, `CodPaciente`, `CodDoctor`) VALUES
(59, 'Atendido', 10, 'LUNES', '07:00:00 - 19:00:00', 'NORMAL', 11, 7),
(60, 'Atendido', 10, 'DOMINGO', '07:00:00 - 13:00:00', 'NORMAL', 11, 7),
(61, 'Habilitado', 10, 'LUNES', '07:00:00 - 19:00:00', 'NORMAL', 11, 12),
(62, 'Habilitado', 10, 'VIERNES', '07:00:00 - 19:00:00', 'NORMAL', 11, 12),
(63, 'Atendido', 10, 'VIERNES', '19:00:00 - 07:00:00', 'NORMAL', 11, 7),
(64, 'Atendido', 10, 'VIERNES', '19:00:00 - 07:00:00', 'NORMAL', 11, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_atencion`
--

CREATE TABLE `detalle_atencion` (
  `idDetalle_Atencion` int(11) NOT NULL,
  `Descarte` varchar(100) DEFAULT NULL,
  `Diagnostico` varchar(45) DEFAULT NULL,
  `Tipo_Tratamiento` varchar(45) DEFAULT NULL,
  `Detalle` varchar(100) DEFAULT NULL,
  `Fecha_Inicio` date DEFAULT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  `IdAtencion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_atencion`
--

INSERT INTO `detalle_atencion` (`idDetalle_Atencion`, `Descarte`, `Diagnostico`, `Tipo_Tratamiento`, `Detalle`, `Fecha_Inicio`, `Fecha_Fin`, `IdAtencion`) VALUES
(59, NULL, NULL, NULL, NULL, NULL, NULL, 59),
(60, NULL, NULL, NULL, NULL, NULL, NULL, 60),
(63, NULL, NULL, NULL, NULL, NULL, NULL, 63),
(64, NULL, NULL, NULL, NULL, NULL, NULL, 64);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE `dia` (
  `IdHorario` int(11) NOT NULL,
  `Dia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`IdHorario`, `Dia`) VALUES
(1, 'LUNES'),
(2, 'MARTES'),
(3, 'MIERCOLES'),
(4, 'JUEVES'),
(5, 'VIERNES'),
(6, 'SABADO'),
(7, 'DOMINGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `idEspecialidad` int(11) NOT NULL,
  `Nombre_Especialidad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`idEspecialidad`, `Nombre_Especialidad`) VALUES
(1, 'GASTROENTEROLOGIA'),
(2, 'NEFROLOGIA'),
(3, 'DERMATOLOGIA'),
(4, 'OFTALMOLOGIA'),
(5, 'CARDIOLOGIA'),
(6, 'ODONTOLOGIA'),
(7, 'NEUROLOGIA'),
(8, 'NEUMOLOGIA'),
(9, 'REHABILITACION'),
(10, 'TRAUMATOLOGIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes`
--

CREATE TABLE `examenes` (
  `IdExamen` int(11) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `examenes`
--

INSERT INTO `examenes` (`IdExamen`, `Tipo`, `Precio`) VALUES
(1, 'EXAMEN PATOLÓGICO', 25),
(2, 'RAYOS X', 30),
(3, 'HEMOGRAMA COMPLETO', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_atencion`
--

CREATE TABLE `examen_atencion` (
  `idDetalle_Atencion` int(11) NOT NULL,
  `idExamen` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  `Prioridad` varchar(20) DEFAULT NULL,
  `Detalle` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `examen_atencion`
--

INSERT INTO `examen_atencion` (`idDetalle_Atencion`, `idExamen`, `Fecha`, `Hora`, `Estado`, `Prioridad`, `Detalle`) VALUES
(59, 2, '2021-07-17', '19:53:00', 'ATENDIDO', 'NORMAL', 'EMOGLOBINA: 15.4     PLAQUETAS: 40000'),
(59, 3, '2021-07-19', '17:30:00', 'ATENDIDO', 'NORMAL', 'HEMOGLOBINA : 15 PLAQUETAS 40000'),
(60, 2, '2021-07-16', '18:15:00', 'ATENDIDO', 'NORMAL', 'ATENDIDO CON 1\r\n'),
(63, 2, '2021-07-19', '18:07:00', 'ATENDIDO', 'NORMAL', 'EMOGLOBINA 15'),
(63, 3, '2021-07-19', '19:11:00', 'PENDIENTE', 'NORMAL', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `IdMedicamento` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Detalle` varchar(45) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`IdMedicamento`, `Nombre`, `Tipo`, `Detalle`, `Stock`, `Precio`) VALUES
(1, 'ACIDO TRANEXAMICO', 'INYECTABLE', '25ml', 100, 5.5),
(2, 'BACLOFENO', 'TABLETA', '8mg', 50, 4.2),
(3, 'ACIDO FOLICO', 'TABLETA', '10mg', 500, 8),
(4, 'DEXAMETASONA', 'INYECCION', '5ml', 40, 12),
(5, 'NAPROXENO', 'TABLETA', '8mg', 400, 2),
(6, 'WARFAMINA SODICA', 'TABLETA', '5mg', 60, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento_tratamiento`
--

CREATE TABLE `medicamento_tratamiento` (
  `IdMedicamento` int(11) NOT NULL,
  `IdDetalle_Atencion` int(11) NOT NULL,
  `tipoTratamiento` varchar(254) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Detalle` varchar(254) NOT NULL,
  `Estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicamento_tratamiento`
--

INSERT INTO `medicamento_tratamiento` (`IdMedicamento`, `IdDetalle_Atencion`, `tipoTratamiento`, `FechaInicio`, `FechaFin`, `Cantidad`, `Detalle`, `Estado`) VALUES
(3, 59, 'MEDICACION', '2021-07-22', '2021-07-18', 2, 'MAÑANA TARDE Y NOCHE DESPUES DE CADA COMIDA', 'PENDIENTE'),
(3, 60, 'MEDICACION', '2021-07-16', '2021-07-21', 6, 'CADA 12 HORAS', 'PENDIENTE'),
(3, 63, 'MEDICACION', '2021-07-19', '2021-07-21', 2, 'MALANAS', 'PENDIENTE'),
(5, 59, 'MEDICACION', '2021-07-16', '2021-07-20', 1, 'CADA 12 HORAS', 'PENDIENTE'),
(5, 60, 'MEDICACION', '2021-07-16', '2021-07-18', 2, 'MAÑANAS TARDE Y NOCHE DESPUES DE CADA COMIDA', 'PENDIENTE'),
(5, 63, 'MEDICACION', '2021-07-19', '2021-07-23', 4, '3 VECES ALK DIA', 'PENDIENTE'),
(6, 59, 'MEDICACION', '2021-07-20', '2021-07-28', 5, 'MAÑANAS', 'PENDIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido_Paterno` varchar(45) NOT NULL,
  `Apellido_Materno` varchar(45) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Celular` int(11) NOT NULL,
  `Documento_Identidad` varchar(45) NOT NULL,
  `Numero_Documento` int(11) NOT NULL,
  `Correo_Electronico` varchar(45) NOT NULL,
  `Grupo_Sanguineo` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Distrito` varchar(45) NOT NULL,
  `Provincia` varchar(45) NOT NULL,
  `Departamento` varchar(45) NOT NULL,
  `Pais` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Fecha_Nacimiento`, `Celular`, `Documento_Identidad`, `Numero_Documento`, `Correo_Electronico`, `Grupo_Sanguineo`, `Direccion`, `Distrito`, `Provincia`, `Departamento`, `Pais`) VALUES
(7, 'EDSON DIEGO', 'QUISPE', 'RODRIGUEZ', '2001-12-04', 981684895, 'DNI', 73011185, 'edson@gmail.com', 'A+', '123', '123', '123', '123', '123'),
(10, 'Luis', 'Quijahuaman', 'Rodriguez', '1999-05-19', 981684895, 'DNI', 73014561, 'luis@utp.edu.pe', 'A+', 'Castilla-Cochate-Mz C-92', '-', '-', 'Arequipa', 'Perú'),
(11, 'Gabriela Alejandra', 'Quispe', 'Rodriguez', '2001-12-04', 984587956, 'DNI', 72016589, 'gaby@gmail.com', 'A+', 'Castilla-Cochate-Mz C-92', '-', '-', 'Arequipa', 'Perú'),
(12, 'JULIAN JOSE', 'GARATE', 'VERA', '1990-04-06', 981684896, 'DNI', 73011186, 'julio@utp.edu.pe', 'A+', '-', '-', '-', 'AREQUIPA', 'PERU');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `Tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `Tipo`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'MEDICO'),
(3, 'PACIENTE'),
(4, 'ENFERMERA'),
(5, 'FARMACEUTICO'),
(6, 'LABORATORISTA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `idTurno` int(11) NOT NULL,
  `TipoTurno` varchar(40) NOT NULL,
  `HoraInicio` time NOT NULL,
  `HoraFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`idTurno`, `TipoTurno`, `HoraInicio`, `HoraFin`) VALUES
(1, 'DIA', '07:00:00', '13:00:00'),
(2, 'TARDE', '13:00:00', '19:00:00'),
(3, 'VELADO', '19:00:00', '07:00:00'),
(4, 'MAÑANA_TARDE', '07:00:00', '19:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Contraseña` varchar(45) NOT NULL,
  `Estado` varchar(13) NOT NULL,
  `idPersona` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `idEspecialidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Correo`, `Contraseña`, `Estado`, `idPersona`, `idRol`, `idEspecialidad`) VALUES
(1, 'edson@utpclinica', '123', 'HABILITADO', 7, 2, 1),
(4, 'luis@utpclinica', '123', 'Habilitado', 10, 1, NULL),
(5, 'gaby@utpclinica', '123', 'Habilitado', 11, 3, NULL),
(6, 'julian@utpclinica', '123', 'HABILITADO', 12, 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_horario`
--

CREATE TABLE `usuario_horario` (
  `idUsuario` int(11) NOT NULL,
  `idHorario` int(11) NOT NULL,
  `idTurno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_horario`
--

INSERT INTO `usuario_horario` (`idUsuario`, `idHorario`, `idTurno`) VALUES
(1, 7, 1),
(1, 6, 2),
(1, 5, 3),
(1, 1, 4),
(1, 2, 4),
(6, 1, 4),
(6, 3, 4),
(6, 5, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`IdAtencion`),
  ADD KEY `IdPersona` (`IdPaciente`),
  ADD KEY `idMedico` (`idMedico`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `CodPersona` (`CodPaciente`),
  ADD KEY `CodDoctor` (`CodDoctor`);

--
-- Indices de la tabla `detalle_atencion`
--
ALTER TABLE `detalle_atencion`
  ADD PRIMARY KEY (`idDetalle_Atencion`),
  ADD KEY `IdAtencion` (`IdAtencion`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`IdHorario`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indices de la tabla `examenes`
--
ALTER TABLE `examenes`
  ADD PRIMARY KEY (`IdExamen`);

--
-- Indices de la tabla `examen_atencion`
--
ALTER TABLE `examen_atencion`
  ADD PRIMARY KEY (`idDetalle_Atencion`,`idExamen`),
  ADD KEY `idDetalle_Atencion` (`idDetalle_Atencion`),
  ADD KEY `idExamen` (`idExamen`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`IdMedicamento`);

--
-- Indices de la tabla `medicamento_tratamiento`
--
ALTER TABLE `medicamento_tratamiento`
  ADD PRIMARY KEY (`IdMedicamento`,`IdDetalle_Atencion`),
  ADD KEY `IdMedicamento` (`IdMedicamento`),
  ADD KEY `IdTratamiento` (`IdDetalle_Atencion`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`idTurno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idPersona` (`idPersona`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idEspecialidad` (`idEspecialidad`);

--
-- Indices de la tabla `usuario_horario`
--
ALTER TABLE `usuario_horario`
  ADD PRIMARY KEY (`idUsuario`,`idHorario`),
  ADD KEY `idTurno` (`idTurno`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idHorario` (`idHorario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atencion`
--
ALTER TABLE `atencion`
  MODIFY `IdAtencion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `detalle_atencion`
--
ALTER TABLE `detalle_atencion`
  MODIFY `idDetalle_Atencion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `dia`
--
ALTER TABLE `dia`
  MODIFY `IdHorario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `examenes`
--
ALTER TABLE `examenes`
  MODIFY `IdExamen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `IdMedicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `idTurno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD CONSTRAINT `atencion_ibfk_1` FOREIGN KEY (`IdPaciente`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE,
  ADD CONSTRAINT `atencion_ibfk_2` FOREIGN KEY (`idMedico`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`CodPaciente`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE,
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`CodDoctor`) REFERENCES `persona` (`idPersona`) ON DELETE CASCADE;

--
-- Filtros para la tabla `detalle_atencion`
--
ALTER TABLE `detalle_atencion`
  ADD CONSTRAINT `detalle_atencion_ibfk_1` FOREIGN KEY (`IdAtencion`) REFERENCES `atencion` (`IdAtencion`) ON DELETE CASCADE;

--
-- Filtros para la tabla `examen_atencion`
--
ALTER TABLE `examen_atencion`
  ADD CONSTRAINT `examen_atencion_ibfk_1` FOREIGN KEY (`idExamen`) REFERENCES `examenes` (`IdExamen`),
  ADD CONSTRAINT `examen_atencion_ibfk_2` FOREIGN KEY (`idDetalle_Atencion`) REFERENCES `detalle_atencion` (`idDetalle_Atencion`);

--
-- Filtros para la tabla `medicamento_tratamiento`
--
ALTER TABLE `medicamento_tratamiento`
  ADD CONSTRAINT `medicamento_tratamiento_ibfk_1` FOREIGN KEY (`IdMedicamento`) REFERENCES `medicamento` (`IdMedicamento`) ON DELETE CASCADE,
  ADD CONSTRAINT `medicamento_tratamiento_ibfk_2` FOREIGN KEY (`IdDetalle_Atencion`) REFERENCES `detalle_atencion` (`idDetalle_Atencion`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idEspecialidad`) REFERENCES `especialidad` (`idEspecialidad`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`idPersona`) REFERENCES `persona` (`idPersona`);

--
-- Filtros para la tabla `usuario_horario`
--
ALTER TABLE `usuario_horario`
  ADD CONSTRAINT `usuario_horario_ibfk_1` FOREIGN KEY (`idHorario`) REFERENCES `dia` (`IdHorario`),
  ADD CONSTRAINT `usuario_horario_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`),
  ADD CONSTRAINT `usuario_horario_ibfk_3` FOREIGN KEY (`idTurno`) REFERENCES `turno` (`idTurno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
