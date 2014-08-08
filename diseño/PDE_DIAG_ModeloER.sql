-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2014 a las 12:33:47
-- Versión del servidor: 5.5.37-cll
-- Versión de PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `itdevelc_pdeb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoyos`
--

CREATE TABLE IF NOT EXISTS `apoyos` (
`idApoyo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `proveedor` varchar(100) DEFAULT NULL,
  `objetivo` varchar(200) DEFAULT NULL,
  `convocatoria` varchar(200) DEFAULT NULL,
  `logotipo` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `Departamentos_idDepartamento` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `apoyos`
--

INSERT INTO `apoyos` (`idApoyo`, `nombre`, `proveedor`, `objetivo`, `convocatoria`, `logotipo`, `status`, `Departamentos_idDepartamento`, `Usuarios_idUsuario`) VALUES
(1, 'Apoyo 1', 'Proveedor 1', 'Objetivo 1', 'Convocatoria 1', 'images/logo.png', 1, 1, 1),
(2, 'Apoyo 2', 'Proveedor 2', 'Objetivo 2', 'Convocatoria 2', 'images/logo2.png', 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
`idCarrera` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `objetivo` varchar(200) DEFAULT NULL,
  `perfilIngreso` varchar(200) DEFAULT NULL,
  `perfilEgreso` varchar(200) DEFAULT NULL,
  `campo` varchar(200) DEFAULT NULL,
  `alumnosDisponibles` int(11) DEFAULT NULL,
  `Universidades_idUniversidad` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`idCarrera`, `nombre`, `objetivo`, `perfilIngreso`, `perfilEgreso`, `campo`, `alumnosDisponibles`, `Universidades_idUniversidad`) VALUES
(4, 'Ingenieria en Mecatronica', 'objetivo1', 'i', 'oopendiente', 'opendietne', 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE IF NOT EXISTS `configuracion` (
  `correoAvisos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
`idDepartamento` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`idDepartamento`, `nombre`, `descripcion`) VALUES
(1, 'Departamento 1', 'jlajladkladjkdfhkjdk jkadja'),
(2, 'Departamento 2', 'woqwueowuieoqwuieoqwueoq qo weuoq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
`idEmpresa` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `mision` varchar(200) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `productos` varchar(200) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `comoLlegar` varchar(200) DEFAULT NULL,
  `contacto` varchar(100) DEFAULT NULL,
  `telefono1` varchar(15) DEFAULT NULL,
  `telefono2` varchar(15) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `sitioWeb` varchar(100) DEFAULT NULL,
  `antiguedad` int(11) DEFAULT NULL,
  `numeroEmpleados` int(11) DEFAULT NULL,
  `logotipo` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionesvinculacion`
--

CREATE TABLE IF NOT EXISTS `opcionesvinculacion` (
`idOpcion` int(11) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `Universidades_idUniversidad` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `opcionesvinculacion`
--

INSERT INTO `opcionesvinculacion` (`idOpcion`, `descripcion`, `Universidades_idUniversidad`) VALUES
(1, 'Asesorias', 1),
(3, 'Ayuda', 1),
(4, 'Reuniones', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE IF NOT EXISTS `publicidad` (
`idPublicidad` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `liga` varchar(100) DEFAULT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosapoyos`
--

CREATE TABLE IF NOT EXISTS `registrosapoyos` (
  `Apoyos_idApoyo` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidades`
--

CREATE TABLE IF NOT EXISTS `universidades` (
`idUniversidad` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `mision` varchar(200) DEFAULT NULL,
  `vision` varchar(200) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `comoLlegar` varchar(200) DEFAULT NULL,
  `contacto` varchar(100) DEFAULT NULL,
  `telefono1` varchar(15) DEFAULT NULL,
  `telefono2` varchar(15) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `sitioWeb` varchar(100) DEFAULT NULL,
  `logotipo` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `servicioMyV` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `universidades`
--

INSERT INTO `universidades` (`idUniversidad`, `nombre`, `mision`, `vision`, `direccion`, `comoLlegar`, `contacto`, `telefono1`, `telefono2`, `correo`, `sitioWeb`, `logotipo`, `status`, `servicioMyV`, `Usuarios_idUsuario`) VALUES
(1, 'Upiiz', 'Por redactar', 'Por redactar', 'Cerro del Gato', 'Justo a un lado del palacion de convenciones', 'Liliana', '9254627', '928064', 'upiiz.zacatecas@gmail.com', 'ipn.zacatecas.com.mx', 'C:fakepathlogo2.png', 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idUsuario` int(11) NOT NULL,
  `contrasena` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `tipoUsuario` int(11) DEFAULT NULL,
  `Departamentos_idDepartamento` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `contrasena`, `nombre`, `correo`, `tipoUsuario`, `Departamentos_idDepartamento`) VALUES
(0, 'admin', 'usuario0', 'usuario@hotmail.com', 1, 1),
(1, '81dc9bdb52d04dc20036dbd8313ed055', 'Usuario 1', 'usuario@user.com', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE IF NOT EXISTS `vacantes` (
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `Empresas_idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinculacion`
--

CREATE TABLE IF NOT EXISTS `vinculacion` (
  `Universidades_idUniversidades` int(11) NOT NULL,
  `Empresas_idEmpresas` int(11) NOT NULL,
  `Apoyos_idApoyos` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL,
  `necesidad` varchar(200) DEFAULT NULL,
  `propuesta` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apoyos`
--
ALTER TABLE `apoyos`
 ADD PRIMARY KEY (`idApoyo`,`Departamentos_idDepartamento`,`Usuarios_idUsuario`), ADD KEY `fk_Apoyos_Departamentos1_idx` (`Departamentos_idDepartamento`), ADD KEY `fk_Apoyos_Usuarios1_idx` (`Usuarios_idUsuario`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
 ADD PRIMARY KEY (`idCarrera`,`Universidades_idUniversidad`), ADD KEY `fk_Carreras_Universidades1_idx` (`Universidades_idUniversidad`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
 ADD PRIMARY KEY (`correoAvisos`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
 ADD PRIMARY KEY (`idDepartamento`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
 ADD PRIMARY KEY (`idEmpresa`), ADD KEY `fk_Empresas_Usuarios1_idx` (`Usuarios_idUsuario`);

--
-- Indices de la tabla `opcionesvinculacion`
--
ALTER TABLE `opcionesvinculacion`
 ADD PRIMARY KEY (`idOpcion`,`Universidades_idUniversidad`), ADD KEY `fk_OpcionesVinculacion_Universidades1_idx` (`Universidades_idUniversidad`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
 ADD PRIMARY KEY (`idPublicidad`,`Usuarios_idUsuario`), ADD KEY `fk_Publicidad_Usuarios1_idx` (`Usuarios_idUsuario`);

--
-- Indices de la tabla `registrosapoyos`
--
ALTER TABLE `registrosapoyos`
 ADD PRIMARY KEY (`Apoyos_idApoyo`,`Usuarios_idUsuario`), ADD KEY `fk_Apoyos_has_Usuarios_Usuarios1_idx` (`Usuarios_idUsuario`), ADD KEY `fk_Apoyos_has_Usuarios_Apoyos1_idx` (`Apoyos_idApoyo`);

--
-- Indices de la tabla `universidades`
--
ALTER TABLE `universidades`
 ADD PRIMARY KEY (`idUniversidad`), ADD KEY `fk_Universidades_Usuarios1_idx` (`Usuarios_idUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idUsuario`), ADD KEY `fk_Usuarios_Departamentos1_idx` (`Departamentos_idDepartamento`);

--
-- Indices de la tabla `vacantes`
--
ALTER TABLE `vacantes`
 ADD PRIMARY KEY (`cantidad`,`Empresas_idEmpresa`), ADD KEY `fk_Vacantes_Empresas1_idx` (`Empresas_idEmpresa`);

--
-- Indices de la tabla `vinculacion`
--
ALTER TABLE `vinculacion`
 ADD PRIMARY KEY (`Universidades_idUniversidades`,`Empresas_idEmpresas`,`Apoyos_idApoyos`,`Usuarios_idUsuario`), ADD KEY `fk_Universidades_has_Empresas_Empresas1_idx` (`Empresas_idEmpresas`), ADD KEY `fk_Universidades_has_Empresas_Universidades1_idx` (`Universidades_idUniversidades`), ADD KEY `fk_Vincular_Apoyos1_idx` (`Apoyos_idApoyos`), ADD KEY `fk_Vinculacion_Usuarios1_idx` (`Usuarios_idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apoyos`
--
ALTER TABLE `apoyos`
MODIFY `idApoyo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
MODIFY `idCarrera` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `opcionesvinculacion`
--
ALTER TABLE `opcionesvinculacion`
MODIFY `idOpcion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
MODIFY `idPublicidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `universidades`
--
ALTER TABLE `universidades`
MODIFY `idUniversidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apoyos`
--
ALTER TABLE `apoyos`
ADD CONSTRAINT `fk_Apoyos_Departamentos1` FOREIGN KEY (`Departamentos_idDepartamento`) REFERENCES `departamentos` (`idDepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Apoyos_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
ADD CONSTRAINT `fk_Carreras_Universidades1` FOREIGN KEY (`Universidades_idUniversidad`) REFERENCES `universidades` (`idUniversidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
ADD CONSTRAINT `fk_Empresas_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `opcionesvinculacion`
--
ALTER TABLE `opcionesvinculacion`
ADD CONSTRAINT `fk_OpcionesVinculacion_Universidades1` FOREIGN KEY (`Universidades_idUniversidad`) REFERENCES `universidades` (`idUniversidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `publicidad`
--
ALTER TABLE `publicidad`
ADD CONSTRAINT `fk_Publicidad_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registrosapoyos`
--
ALTER TABLE `registrosapoyos`
ADD CONSTRAINT `fk_Apoyos_has_Usuarios_Apoyos1` FOREIGN KEY (`Apoyos_idApoyo`) REFERENCES `apoyos` (`idApoyo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Apoyos_has_Usuarios_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `universidades`
--
ALTER TABLE `universidades`
ADD CONSTRAINT `fk_Universidades_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `fk_Usuarios_Departamentos1` FOREIGN KEY (`Departamentos_idDepartamento`) REFERENCES `departamentos` (`idDepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vacantes`
--
ALTER TABLE `vacantes`
ADD CONSTRAINT `fk_Vacantes_Empresas1` FOREIGN KEY (`Empresas_idEmpresa`) REFERENCES `empresas` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vinculacion`
--
ALTER TABLE `vinculacion`
ADD CONSTRAINT `fk_Universidades_has_Empresas_Empresas1` FOREIGN KEY (`Empresas_idEmpresas`) REFERENCES `empresas` (`idEmpresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Universidades_has_Empresas_Universidades1` FOREIGN KEY (`Universidades_idUniversidades`) REFERENCES `universidades` (`idUniversidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Vinculacion_Usuarios1` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Vincular_Apoyos1` FOREIGN KEY (`Apoyos_idApoyos`) REFERENCES `apoyos` (`idApoyo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
