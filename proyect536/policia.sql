-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-06-2018 a las 21:42:36
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `policia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbitacora`
--

CREATE TABLE `tbitacora` (
  `idbitacora` int(11) NOT NULL,
  `idusuario` int(10) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `navegador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdepartamento`
--

CREATE TABLE `tdepartamento` (
  `iddepartamento` int(11) NOT NULL,
  `departamento` varchar(70) NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tfuncionario`
--

CREATE TABLE `tfuncionario` (
  `idfuncionario` int(10) NOT NULL,
  `cedula` varchar(9) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `fecha_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tfuncionario`
--

INSERT INTO `tfuncionario` (`idfuncionario`, `cedula`, `apellidos`, `nombres`, `sexo`, `fecha_nac`) VALUES
(1, '24019826', 'MARQUEZ ROJAS', 'FRANCISCO ANTONIO', 'MASCULINO', '2018-06-11'),
(2, '24019827', 'ROJAS PEREZ', 'CARLOS JAVIER', 'MASCULINO', '2018-06-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE `tusuario` (
  `idusuario` int(10) NOT NULL,
  `idfuncionario` int(10) NOT NULL,
  `idusuario_clave` int(10) NOT NULL,
  `idusuario_preguntas` int(10) NOT NULL,
  `idusuario_perfil` int(10) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `usuario` varchar(9) NOT NULL,
  `inicio_sesion` int(1) NOT NULL,
  `primer_inicio` int(1) NOT NULL,
  `bloqueado` int(1) NOT NULL,
  `intentos_fallidos` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_final` date NOT NULL,
  `hora_salida` time NOT NULL,
  `fecha_salida` date NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`idusuario`, `idfuncionario`, `idusuario_clave`, `idusuario_preguntas`, `idusuario_perfil`, `departamento`, `usuario`, `inicio_sesion`, `primer_inicio`, `bloqueado`, `intentos_fallidos`, `fecha_creacion`, `fecha_final`, `hora_salida`, `fecha_salida`, `estatus`) VALUES
(1, 1, 1, 1, 1, 'EVIDENCIAS FISICAS', '24019826', 0, 0, 0, 0, '2018-06-11', '0000-00-00', '00:00:00', '0000-00-00', 1),
(2, 2, 2, 2, 2, 'EVALUACION Y MERITO', '24019827', 0, 0, 0, 0, '2018-06-12', '0000-00-00', '00:00:00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario_clave`
--

CREATE TABLE `tusuario_clave` (
  `idusuario_clave` int(11) NOT NULL,
  `clave` varchar(15) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `clave_anterior` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tusuario_clave`
--

INSERT INTO `tusuario_clave` (`idusuario_clave`, `clave`, `fecha_inicio`, `fecha_fin`, `clave_anterior`) VALUES
(1, '1234', '2018-06-11', '0000-00-00', '0'),
(2, '4321', '2018-06-12', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario_perfil`
--

CREATE TABLE `tusuario_perfil` (
  `idusuario_perfil` int(10) NOT NULL,
  `idperfil_mayor` int(1) NOT NULL,
  `perfiles` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tusuario_perfil`
--

INSERT INTO `tusuario_perfil` (`idusuario_perfil`, `idperfil_mayor`, `perfiles`) VALUES
(1, 0, 'ROOT'),
(2, 1, 'ADMIN'),
(3, 2, 'FUNCIONARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario_preguntas`
--

CREATE TABLE `tusuario_preguntas` (
  `idusuario_preguntas` int(10) NOT NULL,
  `pregunta1` varchar(20) NOT NULL,
  `pregunta2` varchar(20) NOT NULL,
  `respuesta1` varchar(20) NOT NULL,
  `respuesta2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tusuario_preguntas`
--

INSERT INTO `tusuario_preguntas` (`idusuario_preguntas`, `pregunta1`, `pregunta2`, `respuesta1`, `respuesta2`) VALUES
(1, 'QUIEN SOY', 'MI APELLIDO', 'FRANCISCO', 'MARQUEZ'),
(2, 'NOMBRE DE MI MADRE', 'NOMBRE DE MI PADRE', 'MARIA', 'JOSE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbitacora`
--
ALTER TABLE `tbitacora`
  ADD PRIMARY KEY (`idbitacora`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idusuario_2` (`idusuario`);

--
-- Indices de la tabla `tdepartamento`
--
ALTER TABLE `tdepartamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `tfuncionario`
--
ALTER TABLE `tfuncionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indices de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idfuncionario` (`idfuncionario`),
  ADD KEY `idusuario_clave` (`idusuario_clave`),
  ADD KEY `idusuario_preguntas` (`idusuario_preguntas`),
  ADD KEY `idusuario_perfil` (`idusuario_perfil`);

--
-- Indices de la tabla `tusuario_clave`
--
ALTER TABLE `tusuario_clave`
  ADD PRIMARY KEY (`idusuario_clave`);

--
-- Indices de la tabla `tusuario_perfil`
--
ALTER TABLE `tusuario_perfil`
  ADD PRIMARY KEY (`idusuario_perfil`);

--
-- Indices de la tabla `tusuario_preguntas`
--
ALTER TABLE `tusuario_preguntas`
  ADD PRIMARY KEY (`idusuario_preguntas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbitacora`
--
ALTER TABLE `tbitacora`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tdepartamento`
--
ALTER TABLE `tdepartamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tfuncionario`
--
ALTER TABLE `tfuncionario`
  MODIFY `idfuncionario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  MODIFY `idusuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tusuario_clave`
--
ALTER TABLE `tusuario_clave`
  MODIFY `idusuario_clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tusuario_perfil`
--
ALTER TABLE `tusuario_perfil`
  MODIFY `idusuario_perfil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tusuario_preguntas`
--
ALTER TABLE `tusuario_preguntas`
  MODIFY `idusuario_preguntas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbitacora`
--
ALTER TABLE `tbitacora`
  ADD CONSTRAINT `tbitacora_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `tusuario` (`idusuario`);

--
-- Filtros para la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD CONSTRAINT `tusuario_ibfk_1` FOREIGN KEY (`idfuncionario`) REFERENCES `tfuncionario` (`idfuncionario`),
  ADD CONSTRAINT `tusuario_ibfk_2` FOREIGN KEY (`idusuario_clave`) REFERENCES `tusuario_clave` (`idusuario_clave`),
  ADD CONSTRAINT `tusuario_ibfk_3` FOREIGN KEY (`idusuario_preguntas`) REFERENCES `tusuario_preguntas` (`idusuario_preguntas`),
  ADD CONSTRAINT `tusuario_ibfk_4` FOREIGN KEY (`idusuario_perfil`) REFERENCES `tusuario_perfil` (`idusuario_perfil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
