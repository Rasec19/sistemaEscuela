/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : escuela

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 16/05/2022 22:41:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alumnos
-- ----------------------------
DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos`  (
  `No_control_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Apellido_P` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Apellido_M` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `Correo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Telefono` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`No_control_alumno`) USING BTREE,
  UNIQUE INDEX `No_control_alumno`(`No_control_alumno`) USING BTREE,
  CONSTRAINT `fk_noAlumnos_idAlumnos` FOREIGN KEY (`No_control_alumno`) REFERENCES `clase` (`id_alumno`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for clase
-- ----------------------------
DROP TABLE IF EXISTS `clase`;
CREATE TABLE `clase`  (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `Calificacion_p1` int(11) NOT NULL,
  `Calificacion_p2` int(11) NOT NULL,
  `Calificacion_p3` int(11) NOT NULL,
  `Calificacion_p4` int(11) NOT NULL,
  PRIMARY KEY (`id_alumno`) USING BTREE,
  UNIQUE INDEX `id_alumno`(`id_alumno`) USING BTREE,
  CONSTRAINT `fk_idAlumnoClase_idMateria` FOREIGN KEY (`id_alumno`) REFERENCES `materias` (`id_materia`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for materias
-- ----------------------------
DROP TABLE IF EXISTS `materias`;
CREATE TABLE `materias`  (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `Materia` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_materia`) USING BTREE,
  UNIQUE INDEX `id_materia`(`id_materia`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of materias
-- ----------------------------
INSERT INTO `materias` VALUES (1, 'Tópicos avanzados de programación');
INSERT INTO `materias` VALUES (2, 'Arquitectura de software');
INSERT INTO `materias` VALUES (3, 'Fundamentos de bases de datos');

SET FOREIGN_KEY_CHECKS = 1;
