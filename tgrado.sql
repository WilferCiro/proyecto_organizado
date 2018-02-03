-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2018 a las 23:35:06
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tgrado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anteproyectos`
--

CREATE TABLE `anteproyectos` (
  `anteproyecto_id` int(11) NOT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `fecha_recepcion` int(11) DEFAULT NULL,
  `fecha_asignacion` int(11) DEFAULT NULL,
  `observaciones` text,
  `fecha_aprobacion` int(11) DEFAULT '0',
  `bloqueado` smallint(6) DEFAULT '0',
  `acta_comite` varchar(128) DEFAULT NULL,
  `radicado` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anteproyectos_conceptos`
--

CREATE TABLE `anteproyectos_conceptos` (
  `concepto_id` int(11) NOT NULL,
  `anteproyecto_id` int(11) DEFAULT '0',
  `evaluador_id` int(11) DEFAULT '0',
  `evaluador` varchar(64) DEFAULT NULL,
  `fecha_asignacion` int(11) DEFAULT NULL,
  `canteproyecto_id` smallint(6) DEFAULT NULL,
  `observaciones` text,
  `bloqueado` smallint(6) DEFAULT '0',
  `fecha_modificacion` int(11) DEFAULT NULL,
  `fecha_recepcion` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anteproyectos_conceptos__archivos`
--

CREATE TABLE `anteproyectos_conceptos__archivos` (
  `concepto_id` int(11) NOT NULL,
  `archivo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anteproyectos__archivos`
--

CREATE TABLE `anteproyectos__archivos` (
  `anteproyecto_id` int(11) NOT NULL,
  `archivo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `archivo_id` int(11) NOT NULL,
  `directorio` text,
  `nombre` text,
  `tipo` varchar(16) DEFAULT NULL,
  `tamano` int(11) DEFAULT NULL,
  `descargas` int(11) DEFAULT NULL,
  `descripcion` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_impacto`
--

CREATE TABLE `area_impacto` (
  `area_impacto_id` int(11) NOT NULL,
  `detalle` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `codigo` varchar(5) NOT NULL,
  `cod_departamento` varchar(2) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos_anteproyectos`
--

CREATE TABLE `conceptos_anteproyectos` (
  `canteproyecto_id` int(11) NOT NULL,
  `detalle` varchar(32) DEFAULT NULL,
  `descripcion` text,
  `investigacion` tinyint(1) DEFAULT '0',
  `proyecto` tinyint(1) DEFAULT '0',
  `pasantia` tinyint(1) DEFAULT '0',
  `nuevo` tinyint(1) DEFAULT '0',
  `monografia` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos_informes`
--

CREATE TABLE `conceptos_informes` (
  `cinforme_id` int(11) NOT NULL,
  `detalle` varchar(32) DEFAULT NULL,
  `descripcion` text,
  `investigacion` tinyint(1) DEFAULT '0',
  `proyecto` tinyint(1) DEFAULT '0',
  `pasantia` tinyint(1) DEFAULT '0',
  `nuevo` tinyint(1) DEFAULT '1',
  `monografia` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `codigo` varchar(2) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `documento_id` int(11) NOT NULL,
  `nombre` varchar(128) DEFAULT NULL,
  `tipo_id` smallint(6) DEFAULT NULL,
  `fecha` int(11) DEFAULT '0',
  `eliminado` smallint(6) DEFAULT '0',
  `usuario_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_archivos`
--

CREATE TABLE `documentos_archivos` (
  `documento_id` int(11) NOT NULL,
  `archivo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_tgrado`
--

CREATE TABLE `estado_tgrado` (
  `estado_id` int(11) NOT NULL,
  `detalle` varchar(32) DEFAULT NULL,
  `descripcion` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `genero_id` int(11) NOT NULL,
  `detalle` varchar(32) DEFAULT NULL,
  `descripcion_min` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `informe_id` int(11) NOT NULL,
  `estado_id` smallint(6) DEFAULT NULL,
  `fecha_recepcion` int(11) DEFAULT NULL,
  `fecha_asignacion` int(11) DEFAULT NULL,
  `observaciones` text,
  `fecha_aprobacion` int(11) DEFAULT '0',
  `bloqueado` smallint(6) DEFAULT '0',
  `acta_comite` varchar(128) DEFAULT NULL,
  `radicado` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes_archivos`
--

CREATE TABLE `informes_archivos` (
  `informe_id` int(11) NOT NULL,
  `archivo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes_conceptos`
--

CREATE TABLE `informes_conceptos` (
  `concepto_id` int(11) NOT NULL,
  `informe_id` int(11) DEFAULT NULL,
  `evaluador_id` int(11) DEFAULT NULL,
  `evaluador` varchar(64) DEFAULT NULL,
  `fecha_asignacion` int(11) DEFAULT NULL,
  `cinforme_id` smallint(6) DEFAULT NULL,
  `observaciones` text,
  `bloqueado` smallint(6) DEFAULT '0',
  `fecha_modificacion` int(11) DEFAULT NULL,
  `fecha_recepcion` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes_conceptos__archivos`
--

CREATE TABLE `informes_conceptos__archivos` (
  `concepto_id` int(11) NOT NULL,
  `archivo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidades`
--

CREATE TABLE `modalidades` (
  `modalidad_id` int(11) NOT NULL,
  `detalle` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8,
  `nombre` varchar(32) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_usuario`
--

CREATE TABLE `perfil_usuario` (
  `perfil_id` int(11) NOT NULL,
  `detalle` varchar(32) DEFAULT NULL,
  `descripcion` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesiones`
--

CREATE TABLE `profesiones` (
  `profesion_id` int(11) NOT NULL,
  `singular` varchar(32) DEFAULT NULL,
  `singular_fem` varchar(32) DEFAULT NULL,
  `abbreviatura` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_transacciones`
--

CREATE TABLE `registro_transacciones` (
  `transaccion_id` int(11) NOT NULL,
  `fecha` int(11) DEFAULT '0',
  `usuario_id` int(11) DEFAULT '0',
  `operacion` varchar(16) DEFAULT NULL,
  `objeto` varchar(128) DEFAULT NULL,
  `detalles` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado`
--

CREATE TABLE `tgrado` (
  `tgrado_id` int(11) NOT NULL,
  `titulo` text,
  `modalidad_id` smallint(6) DEFAULT NULL,
  `director_id` int(11) DEFAULT NULL,
  `asesor_id` int(11) DEFAULT NULL,
  `fecha_creado` int(11) DEFAULT NULL,
  `fecha_modificado` int(11) DEFAULT NULL,
  `eliminado` tinyint(1) DEFAULT '0',
  `usuario_id` int(11) DEFAULT NULL,
  `bloqueado` tinyint(1) DEFAULT '0',
  `aprobado` tinyint(1) DEFAULT '0',
  `fecha_aprobado` int(11) DEFAULT NULL,
  `duracion` smallint(6) DEFAULT '0',
  `fecha_sustentacion` int(11) DEFAULT '0',
  `director` varchar(64) DEFAULT NULL,
  `asesor` varchar(64) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `numero_tgrado` int(11) DEFAULT '0',
  `area_impacto_id` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__anteproyectos`
--

CREATE TABLE `tgrado__anteproyectos` (
  `tgrado_id` int(11) NOT NULL,
  `anteproyecto_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__conceptos`
--

CREATE TABLE `tgrado__conceptos` (
  `observacion_id` int(11) NOT NULL,
  `tgrado_id` int(11) DEFAULT NULL,
  `fecha` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `fecha_modificado` int(11) DEFAULT NULL,
  `observacion` text,
  `concepto` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__informes`
--

CREATE TABLE `tgrado__informes` (
  `tgrado_id` int(11) NOT NULL,
  `informe_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__involucrados`
--

CREATE TABLE `tgrado__involucrados` (
  `tgrado_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__modalidad__conceptos`
--

CREATE TABLE `tgrado__modalidad__conceptos` (
  `modalidad_id` int(11) NOT NULL,
  `concepto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__notas`
--

CREATE TABLE `tgrado__notas` (
  `nota_id` int(11) NOT NULL,
  `concepto_id` int(11) NOT NULL,
  `valor_nota` float NOT NULL,
  `tgrado_id` int(11) NOT NULL,
  `evaluador_id` int(11) NOT NULL,
  `fecha_ingreso` int(11) NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__notas__sustentacion`
--

CREATE TABLE `tgrado__notas__sustentacion` (
  `nota_id` int(11) NOT NULL,
  `sustentacion_id` int(11) NOT NULL,
  `valor_nota` float NOT NULL,
  `tgrado_id` int(11) NOT NULL,
  `estudiante_id` int(11) NOT NULL,
  `evaluador_id` int(11) NOT NULL,
  `fecha_ingreso` int(11) NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__observaciones`
--

CREATE TABLE `tgrado__observaciones` (
  `observacion_id` int(11) NOT NULL,
  `tgrado_id` int(11) DEFAULT NULL,
  `fecha` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `fecha_modificado` int(11) DEFAULT NULL,
  `observacion` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__puntos__calificar`
--

CREATE TABLE `tgrado__puntos__calificar` (
  `concepto_id` int(11) NOT NULL,
  `aspecto` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `peso` float NOT NULL DEFAULT '0',
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tgrado__sustentacion__concepto`
--

CREATE TABLE `tgrado__sustentacion__concepto` (
  `sustentacion_id` int(11) NOT NULL,
  `concepto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `tipo_id` int(11) NOT NULL,
  `detalle` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tipo_usuario_id` int(11) NOT NULL,
  `detalle` varchar(32) DEFAULT NULL,
  `descripcion` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vinculacion`
--

CREATE TABLE `tipo_vinculacion` (
  `tipo_vinculacion_id` int(11) NOT NULL,
  `detalle` varchar(64) DEFAULT NULL,
  `descripcion` varchar(128) DEFAULT NULL,
  `resumen` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `identificacion` varchar(32) CHARACTER SET utf8 NOT NULL,
  `contrasena` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `fecha_registro` int(11) DEFAULT '0',
  `ultimo_acceso` int(11) DEFAULT '0',
  `num_errores` smallint(6) DEFAULT '0',
  `perfil_id` smallint(6) DEFAULT '0',
  `nombres` varchar(64) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(64) CHARACTER SET utf8 NOT NULL,
  `email` varchar(64) CHARACTER SET utf8 NOT NULL,
  `genero_id` smallint(6) DEFAULT '0',
  `fecha_nacimiento` int(11) DEFAULT '0',
  `lugar_nacimiento` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `telefono1` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `telefono2` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `direccion_residencia` varchar(64) CHARACTER SET utf8 DEFAULT NULL,
  `ciudad_residencia` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `fingreso_programa` int(11) DEFAULT '0',
  `profesion_id` smallint(6) DEFAULT '0',
  `tipo_vinculacion_id` smallint(6) DEFAULT '0',
  `redes_sociales1` text CHARACTER SET utf8,
  `redes_sociales2` text CHARACTER SET utf8,
  `bloqueado` smallint(6) DEFAULT '0',
  `eliminado` smallint(6) DEFAULT '0',
  `es_estudiante` smallint(6) DEFAULT '0',
  `es_evaluador` smallint(6) DEFAULT '0',
  `es_administrativo` smallint(6) DEFAULT '0',
  `ciudad_residencia_str` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `lugar_nacimiento_str` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `observaciones` varchar(128) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_en_linea`
--

CREATE TABLE `usuarios_en_linea` (
  `usuario_id` int(11) NOT NULL,
  `sesion_id` varchar(100) NOT NULL,
  `ultimo_ingreso` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_ingresos`
--

CREATE TABLE `usuarios_ingresos` (
  `ingreso_id` int(11) NOT NULL,
  `fecha` int(11) DEFAULT '0',
  `usuario_id` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_unidades`
--

CREATE TABLE `usuarios_unidades` (
  `usuario_id` bigint(20) NOT NULL DEFAULT '0',
  `uni_usuarios` varchar(3) DEFAULT 'D',
  `uni_profesores` varchar(3) DEFAULT 'D',
  `uni_tgrado` varchar(3) DEFAULT 'L',
  `uni_estudiantes` varchar(3) DEFAULT 'L',
  `uni_documentos` varchar(3) DEFAULT 'D',
  `uni_informes` varchar(3) DEFAULT 'D'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anteproyectos`
--
ALTER TABLE `anteproyectos`
  ADD PRIMARY KEY (`anteproyecto_id`),
  ADD KEY `estado_id` (`estado_id`),
  ADD KEY `fecha_recepcion` (`fecha_recepcion`);

--
-- Indices de la tabla `anteproyectos_conceptos`
--
ALTER TABLE `anteproyectos_conceptos`
  ADD PRIMARY KEY (`concepto_id`);

--
-- Indices de la tabla `anteproyectos_conceptos__archivos`
--
ALTER TABLE `anteproyectos_conceptos__archivos`
  ADD PRIMARY KEY (`concepto_id`,`archivo_id`);

--
-- Indices de la tabla `anteproyectos__archivos`
--
ALTER TABLE `anteproyectos__archivos`
  ADD PRIMARY KEY (`anteproyecto_id`,`archivo_id`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`archivo_id`);

--
-- Indices de la tabla `area_impacto`
--
ALTER TABLE `area_impacto`
  ADD PRIMARY KEY (`area_impacto_id`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cod_departamento` (`cod_departamento`);

--
-- Indices de la tabla `conceptos_anteproyectos`
--
ALTER TABLE `conceptos_anteproyectos`
  ADD PRIMARY KEY (`canteproyecto_id`);

--
-- Indices de la tabla `conceptos_informes`
--
ALTER TABLE `conceptos_informes`
  ADD PRIMARY KEY (`cinforme_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`documento_id`);

--
-- Indices de la tabla `documentos_archivos`
--
ALTER TABLE `documentos_archivos`
  ADD PRIMARY KEY (`documento_id`,`archivo_id`);

--
-- Indices de la tabla `estado_tgrado`
--
ALTER TABLE `estado_tgrado`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`genero_id`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`informe_id`),
  ADD KEY `estado_id` (`estado_id`),
  ADD KEY `fecha_recepcion` (`fecha_recepcion`);

--
-- Indices de la tabla `informes_archivos`
--
ALTER TABLE `informes_archivos`
  ADD PRIMARY KEY (`informe_id`,`archivo_id`);

--
-- Indices de la tabla `informes_conceptos`
--
ALTER TABLE `informes_conceptos`
  ADD PRIMARY KEY (`concepto_id`);

--
-- Indices de la tabla `informes_conceptos__archivos`
--
ALTER TABLE `informes_conceptos__archivos`
  ADD PRIMARY KEY (`concepto_id`,`archivo_id`);

--
-- Indices de la tabla `modalidades`
--
ALTER TABLE `modalidades`
  ADD PRIMARY KEY (`modalidad_id`);

--
-- Indices de la tabla `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  ADD PRIMARY KEY (`perfil_id`);

--
-- Indices de la tabla `profesiones`
--
ALTER TABLE `profesiones`
  ADD PRIMARY KEY (`profesion_id`);

--
-- Indices de la tabla `registro_transacciones`
--
ALTER TABLE `registro_transacciones`
  ADD PRIMARY KEY (`transaccion_id`),
  ADD KEY `fecha` (`fecha`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `tgrado`
--
ALTER TABLE `tgrado`
  ADD PRIMARY KEY (`tgrado_id`),
  ADD KEY `aprobado` (`aprobado`),
  ADD KEY `asesor_id` (`asesor_id`),
  ADD KEY `director_id` (`director_id`),
  ADD KEY `modalidad_id` (`modalidad_id`);

--
-- Indices de la tabla `tgrado__anteproyectos`
--
ALTER TABLE `tgrado__anteproyectos`
  ADD PRIMARY KEY (`tgrado_id`,`anteproyecto_id`);

--
-- Indices de la tabla `tgrado__conceptos`
--
ALTER TABLE `tgrado__conceptos`
  ADD PRIMARY KEY (`observacion_id`);

--
-- Indices de la tabla `tgrado__informes`
--
ALTER TABLE `tgrado__informes`
  ADD PRIMARY KEY (`tgrado_id`,`informe_id`);

--
-- Indices de la tabla `tgrado__involucrados`
--
ALTER TABLE `tgrado__involucrados`
  ADD PRIMARY KEY (`tgrado_id`,`estudiante_id`);

--
-- Indices de la tabla `tgrado__modalidad__conceptos`
--
ALTER TABLE `tgrado__modalidad__conceptos`
  ADD PRIMARY KEY (`modalidad_id`,`concepto_id`);

--
-- Indices de la tabla `tgrado__notas`
--
ALTER TABLE `tgrado__notas`
  ADD PRIMARY KEY (`nota_id`),
  ADD KEY `concepto_id` (`concepto_id`),
  ADD KEY `estudiante_id` (`tgrado_id`),
  ADD KEY `evaluador_id` (`evaluador_id`);

--
-- Indices de la tabla `tgrado__notas__sustentacion`
--
ALTER TABLE `tgrado__notas__sustentacion`
  ADD PRIMARY KEY (`nota_id`),
  ADD KEY `sustentacion_id` (`sustentacion_id`),
  ADD KEY `tgrado_id` (`tgrado_id`),
  ADD KEY `evaluador_id` (`evaluador_id`),
  ADD KEY `estudiante_id` (`estudiante_id`);

--
-- Indices de la tabla `tgrado__observaciones`
--
ALTER TABLE `tgrado__observaciones`
  ADD PRIMARY KEY (`observacion_id`);

--
-- Indices de la tabla `tgrado__puntos__calificar`
--
ALTER TABLE `tgrado__puntos__calificar`
  ADD PRIMARY KEY (`concepto_id`);

--
-- Indices de la tabla `tgrado__sustentacion__concepto`
--
ALTER TABLE `tgrado__sustentacion__concepto`
  ADD PRIMARY KEY (`sustentacion_id`),
  ADD KEY `concepto_id` (`concepto_id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tipo_usuario_id`);

--
-- Indices de la tabla `tipo_vinculacion`
--
ALTER TABLE `tipo_vinculacion`
  ADD PRIMARY KEY (`tipo_vinculacion_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD KEY `es_administrativo` (`es_administrativo`),
  ADD KEY `es_estudiante` (`es_estudiante`),
  ADD KEY `es_evaluador` (`es_evaluador`),
  ADD KEY `fingreso_programa` (`fingreso_programa`),
  ADD KEY `identificacion` (`identificacion`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- Indices de la tabla `usuarios_en_linea`
--
ALTER TABLE `usuarios_en_linea`
  ADD PRIMARY KEY (`usuario_id`,`sesion_id`);

--
-- Indices de la tabla `usuarios_ingresos`
--
ALTER TABLE `usuarios_ingresos`
  ADD PRIMARY KEY (`ingreso_id`),
  ADD KEY `fecha` (`fecha`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuarios_unidades`
--
ALTER TABLE `usuarios_unidades`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anteproyectos`
--
ALTER TABLE `anteproyectos`
  MODIFY `anteproyecto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `anteproyectos_conceptos`
--
ALTER TABLE `anteproyectos_conceptos`
  MODIFY `concepto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `anteproyectos_conceptos__archivos`
--
ALTER TABLE `anteproyectos_conceptos__archivos`
  MODIFY `concepto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `anteproyectos__archivos`
--
ALTER TABLE `anteproyectos__archivos`
  MODIFY `anteproyecto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `archivo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `area_impacto`
--
ALTER TABLE `area_impacto`
  MODIFY `area_impacto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `conceptos_anteproyectos`
--
ALTER TABLE `conceptos_anteproyectos`
  MODIFY `canteproyecto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `conceptos_informes`
--
ALTER TABLE `conceptos_informes`
  MODIFY `cinforme_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `documento_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `informe_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  MODIFY `perfil_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registro_transacciones`
--
ALTER TABLE `registro_transacciones`
  MODIFY `transaccion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tgrado`
--
ALTER TABLE `tgrado`
  MODIFY `tgrado_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tgrado__conceptos`
--
ALTER TABLE `tgrado__conceptos`
  MODIFY `observacion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tgrado__notas`
--
ALTER TABLE `tgrado__notas`
  MODIFY `nota_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tgrado__notas__sustentacion`
--
ALTER TABLE `tgrado__notas__sustentacion`
  MODIFY `nota_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tgrado__puntos__calificar`
--
ALTER TABLE `tgrado__puntos__calificar`
  MODIFY `concepto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tgrado__sustentacion__concepto`
--
ALTER TABLE `tgrado__sustentacion__concepto`
  MODIFY `sustentacion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios_ingresos`
--
ALTER TABLE `usuarios_ingresos`
  MODIFY `ingreso_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
