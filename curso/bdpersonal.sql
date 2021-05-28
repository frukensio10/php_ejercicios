
CREATE DATABASE prueba;
 
USE prueba;
 
CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `numero_de_libreta` integer(45),
  `facultad` varchar(45) NOT NULL,
  `estado_civil` varchar(10) NOT NULL,
  `hijos` varchar(5) NOT NULL,
  `intereses` varchar(50) NOT NULL
  ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
)
 
--
-- Indices de la tabla `personas`
--
ALTER TABLE `alumno` ADD PRIMARY KEY (`id`);
 
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `alumno` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;