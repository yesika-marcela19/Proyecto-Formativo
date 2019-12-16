-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2019 a las 02:57:40
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `piscicola`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `cantidad` decimal(10,2) DEFAULT NULL,
  `descripcion` varchar(80) DEFAULT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `fk_estanque` int(25) DEFAULT NULL,
  `fk_persona` int(25) DEFAULT NULL,
  `fk_tipo_actividad` int(25) DEFAULT NULL,
  `lote` int(11) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `notificacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `foto`, `cantidad`, `descripcion`, `fecha`, `fk_estanque`, `fk_persona`, `fk_tipo_actividad`, `lote`, `estado`, `notificacion`) VALUES
(1245, NULL, '23.76', 'Alimentacion', '2019-10-11', 6, 1083930020, 5, 8, NULL, 'si'),
(1246, NULL, '23.76', 'Alimentacion', '2019-07-05', 6, 1083930020, 5, 8, NULL, 'si'),
(1247, NULL, '23.76', 'Alimentacion', '2019-07-06', 6, 1083930020, 5, 8, NULL, 'si'),
(1248, NULL, '23.76', 'Alimentacion', '2019-07-07', 6, 1083930020, 5, 8, NULL, 'si'),
(1249, NULL, '23.76', 'Alimentacion', '2019-07-08', 6, 1083930020, 5, 8, NULL, 'si'),
(1250, NULL, '25.92', 'Alimentacion', '2019-07-08', 6, 1083930020, 5, 8, NULL, 'si'),
(1251, NULL, '25.92', 'Alimentacion', '2019-07-09', 6, 1083930020, 5, 8, NULL, 'si'),
(1252, NULL, '25.92', 'Alimentacion', '2019-07-10', 6, 1083930020, 5, 8, NULL, 'si'),
(1253, NULL, '25.92', 'Alimentacion', '2019-07-11', 6, 1083930020, 5, 8, NULL, 'si'),
(1254, NULL, '25.92', 'Alimentacion', '2019-07-12', 6, 1083930020, 5, 8, NULL, 'si'),
(1255, NULL, '25.92', 'Alimentacion', '2019-07-13', 6, 1083930020, 5, 8, NULL, 'si'),
(1256, NULL, '25.92', 'Alimentacion', '2019-07-14', 6, 1083930020, 5, 8, NULL, 'si'),
(1257, NULL, '27.36', 'Alimentacion', '2019-07-15', 6, 1083930020, 5, 8, NULL, 'si'),
(1258, NULL, '27.36', 'Alimentacion', '2019-07-16', 6, 1083930020, 5, 8, NULL, 'si'),
(1259, NULL, '27.36', 'Alimentacion', '2019-07-17', 6, 1083930020, 5, 8, NULL, 'si'),
(1260, NULL, '27.36', 'Alimentacion', '2019-07-18', 6, 1083930020, 5, 8, NULL, 'si'),
(1261, NULL, '27.36', 'Alimentacion', '2019-07-19', 6, 1083930020, 5, 8, NULL, 'si'),
(1262, NULL, '27.36', 'Alimentacion', '2019-07-20', 6, 1083930020, 5, 8, NULL, 'si'),
(1263, NULL, '27.36', 'Alimentacion', '2019-07-21', 6, 1083930020, 5, 8, NULL, 'si'),
(1264, NULL, '28.80', 'Alimentacion', '2019-07-22', 6, 1083930020, 5, 8, NULL, 'si'),
(1265, NULL, '28.80', 'Alimentacion', '2019-07-23', 6, 1083930020, 5, 8, NULL, 'si'),
(1266, NULL, '28.80', 'Alimentacion', '2019-07-24', 6, 1083930020, 5, 8, NULL, 'si'),
(1267, NULL, '28.80', 'Alimentacion', '2019-07-25', 6, 1083930020, 5, 8, NULL, 'si'),
(1268, NULL, '28.80', 'Alimentacion', '2019-07-26', 6, 1083930020, 5, 8, NULL, 'si'),
(1269, NULL, '28.80', 'Alimentacion', '2019-07-27', 6, 1083930020, 5, 8, NULL, 'si'),
(1270, NULL, '28.80', 'Alimentacion', '2019-07-28', 6, 1083930020, 5, 8, NULL, 'si'),
(1271, NULL, '30.24', 'Alimentacion', '2019-07-29', 6, 1083930020, 5, 8, NULL, 'si'),
(1272, NULL, '30.24', 'Alimentacion', '2019-07-30', 6, 1083930020, 5, 8, NULL, 'si'),
(1273, NULL, '30.24', 'Alimentacion', '2019-07-31', 6, 1083930020, 5, 8, NULL, 'si'),
(1274, NULL, '30.24', 'Alimentacion', '2019-08-01', 6, 1083930020, 5, 8, NULL, 'si'),
(1275, NULL, '30.24', 'Alimentacion', '2019-08-02', 6, 1083930020, 5, 8, NULL, 'si'),
(1276, NULL, '30.24', 'Alimentacion', '2019-08-03', 6, 1083930020, 5, 8, NULL, 'si'),
(1277, NULL, '30.24', 'Alimentacion', '2019-08-04', 6, 1083930020, 5, 8, NULL, 'si'),
(1278, NULL, '31.68', 'Alimentacion', '2019-08-05', 6, 1083930020, 5, 8, NULL, 'si'),
(1279, NULL, '31.68', 'Alimentacion', '2019-08-06', 6, 1083930020, 5, 8, NULL, 'si'),
(1280, NULL, '31.68', 'Alimentacion', '2019-08-07', 6, 1083930020, 5, 8, NULL, 'si'),
(1281, NULL, '31.68', 'Alimentacion', '2019-08-08', 6, 1083930020, 5, 8, NULL, 'si'),
(1282, NULL, '31.68', 'Alimentacion', '2019-08-09', 6, 1083930020, 5, 8, NULL, 'si'),
(1283, NULL, '31.68', 'Alimentacion', '2019-08-10', 6, 1083930020, 5, 8, NULL, 'si'),
(1284, NULL, '31.68', 'Alimentacion', '2019-08-11', 6, 1083930020, 5, 8, NULL, 'si'),
(1285, NULL, '33.12', 'Alimentacion', '2019-08-12', 6, 1083930020, 5, 8, NULL, 'si'),
(1286, NULL, '33.12', 'Alimentacion', '2019-08-13', 6, 1083930020, 5, 8, NULL, 'si'),
(1287, NULL, '33.12', 'Alimentacion', '2019-08-14', 6, 1083930020, 5, 8, NULL, 'si'),
(1288, NULL, '33.12', 'Alimentacion', '2019-08-15', 6, 1083930020, 5, 8, NULL, 'si'),
(1289, NULL, '33.12', 'Alimentacion', '2019-08-16', 6, 1083930020, 5, 8, NULL, 'si'),
(1290, NULL, '33.12', 'Alimentacion', '2019-08-17', 6, 1083930020, 5, 8, NULL, 'si'),
(1291, NULL, '33.12', 'Alimentacion', '2019-08-18', 6, 1083930020, 5, 8, NULL, 'si'),
(1292, NULL, '34.56', 'Alimentacion', '2019-08-19', 6, 1083930020, 5, 8, NULL, 'si'),
(1293, NULL, '34.56', 'Alimentacion', '2019-08-20', 6, 1083930020, 5, 8, NULL, 'si'),
(1294, NULL, '34.56', 'Alimentacion', '2019-08-21', 6, 1083930020, 5, 8, NULL, 'si'),
(1295, NULL, '34.56', 'Alimentacion', '2019-08-22', 6, 1083930020, 5, 8, NULL, 'si'),
(1296, NULL, '34.56', 'Alimentacion', '2019-08-23', 6, 1083930020, 5, 8, NULL, 'si'),
(1297, NULL, '34.56', 'Alimentacion', '2019-08-24', 6, 1083930020, 5, 8, NULL, 'si'),
(1298, NULL, '34.56', 'Alimentacion', '2019-08-25', 6, 1083930020, 5, 8, NULL, 'si'),
(1299, NULL, '35.64', 'Alimentacion', '2019-08-26', 6, 1083930020, 5, 8, NULL, 'si'),
(1300, NULL, '35.64', 'Alimentacion', '2019-08-27', 6, 1083930020, 5, 8, NULL, 'si'),
(1301, NULL, '35.64', 'Alimentacion', '2019-08-28', 6, 1083930020, 5, 8, NULL, 'si'),
(1302, NULL, '35.64', 'Alimentacion', '2019-08-29', 6, 1083930020, 5, 8, NULL, 'si'),
(1303, NULL, '35.64', 'Alimentacion', '2019-08-30', 6, 1083930020, 5, 8, NULL, 'si'),
(1304, NULL, '35.64', 'Alimentacion', '2019-08-31', 6, 1083930020, 5, 8, NULL, 'si'),
(1305, NULL, '35.64', 'Alimentacion', '2019-09-01', 6, 1083930020, 5, 8, NULL, 'si'),
(1306, NULL, '36.00', 'Alimentacion', '2019-09-02', 6, 1083930020, 5, 8, NULL, 'si'),
(1307, NULL, '36.00', 'Alimentacion', '2019-09-03', 6, 1083930020, 5, 8, NULL, 'si'),
(1308, NULL, '36.00', 'Alimentacion', '2019-09-04', 6, 1083930020, 5, 8, NULL, 'si'),
(1309, NULL, '36.00', 'Alimentacion', '2019-09-05', 6, 1083930020, 5, 8, NULL, 'si'),
(1310, NULL, '36.00', 'Alimentacion', '2019-09-06', 6, 1083930020, 5, 8, NULL, 'si'),
(1311, NULL, '36.00', 'Alimentacion', '2019-09-07', 6, 1083930020, 5, 8, NULL, 'si'),
(1312, NULL, '36.00', 'Alimentacion', '2019-09-08', 6, 1083930020, 5, 8, NULL, 'si'),
(1313, NULL, '37.08', 'Alimentacion', '2019-09-09', 6, 1083930020, 5, 8, NULL, 'si'),
(1314, NULL, '37.08', 'Alimentacion', '2019-09-10', 6, 1083930020, 5, 8, NULL, 'si'),
(1315, NULL, '37.08', 'Alimentacion', '2019-09-11', 6, 1083930020, 5, 8, NULL, 'si'),
(1316, NULL, '37.08', 'Alimentacion', '2019-09-12', 6, 1083930020, 5, 8, NULL, 'si'),
(1317, NULL, '37.08', 'Alimentacion', '2019-09-13', 6, 1083930020, 5, 8, NULL, 'si'),
(1318, NULL, '37.08', 'Alimentacion', '2019-09-14', 6, 1083930020, 5, 8, NULL, 'si'),
(1319, NULL, '37.08', 'Alimentacion', '2019-09-15', 6, 1083930020, 5, 8, NULL, 'si'),
(1320, NULL, '29.90', 'Alimentacion', '2019-07-17', 5, 1007428719, 5, 7, NULL, 'si'),
(1321, NULL, '29.90', 'Alimentacion', '2019-07-18', 5, 1007428719, 5, 7, NULL, 'si'),
(1322, NULL, '29.90', 'Alimentacion', '2019-07-19', 5, 1007428719, 5, 7, NULL, 'si'),
(1323, NULL, '29.90', 'Alimentacion', '2019-07-20', 5, 1007428719, 5, 7, NULL, 'si'),
(1324, NULL, '29.90', 'Alimentacion', '2019-07-21', 5, 1007428719, 5, 7, NULL, 'si'),
(1325, NULL, '29.90', 'Alimentacion', '2019-07-22', 5, 1007428719, 5, 7, NULL, 'si'),
(1326, NULL, '29.90', 'Alimentacion', '2019-07-23', 5, 1007428719, 5, 7, NULL, 'si'),
(1327, NULL, '31.20', 'Alimentacion', '2019-07-24', 5, 1007319239, 5, 7, NULL, 'si'),
(1328, NULL, '31.20', 'Alimentacion', '2019-07-25', 5, 1007319239, 5, 7, NULL, 'si'),
(1329, NULL, '31.20', 'Alimentacion', '2019-07-26', 5, 1007319239, 5, 7, NULL, 'si'),
(1330, NULL, '31.20', 'Alimentacion', '2019-07-27', 5, 1007319239, 5, 7, NULL, 'si'),
(1331, NULL, '31.20', 'Alimentacion', '2019-07-28', 5, 1007319239, 5, 7, NULL, 'si'),
(1332, NULL, '31.20', 'Alimentacion', '2019-07-29', 5, 1007319239, 5, 7, NULL, 'si'),
(1333, NULL, '31.20', 'Alimentacion', '2019-07-30', 5, 1007319239, 5, 7, NULL, 'si'),
(1334, NULL, '32.18', 'Alimentacion', '2019-07-31', 5, 1007428719, 5, 7, NULL, 'si'),
(1335, NULL, '32.18', 'Alimentacion', '2019-08-01', 5, 1007428719, 5, 7, NULL, 'si'),
(1336, NULL, '32.18', 'Alimentacion', '2019-08-02', 5, 1007428719, 5, 7, NULL, 'si'),
(1337, NULL, '32.18', 'Alimentacion', '2019-08-03', 5, 1007428719, 5, 7, NULL, 'si'),
(1338, NULL, '32.18', 'Alimentacion', '2019-08-04', 5, 1007428719, 5, 7, NULL, 'si'),
(1339, NULL, '32.18', 'Alimentacion', '2019-08-05', 5, 1007428719, 5, 7, NULL, 'si'),
(1340, NULL, '32.18', 'Alimentacion', '2019-08-06', 5, 1007428719, 5, 7, NULL, 'si'),
(1341, NULL, '32.50', 'Alimentacion', '2019-08-07', 5, 1007319239, 5, 7, NULL, 'si'),
(1342, NULL, '32.50', 'Alimentacion', '2019-08-08', 5, 1007319239, 5, 7, NULL, 'si'),
(1343, NULL, '32.50', 'Alimentacion', '2019-08-09', 5, 1007319239, 5, 7, NULL, 'si'),
(1344, NULL, '32.50', 'Alimentacion', '2019-08-10', 5, 1007319239, 5, 7, NULL, 'si'),
(1345, NULL, '32.50', 'Alimentacion', '2019-08-11', 5, 1007319239, 5, 7, NULL, 'si'),
(1346, NULL, '32.50', 'Alimentacion', '2019-08-12', 5, 1007319239, 5, 7, NULL, 'si'),
(1347, NULL, '32.50', 'Alimentacion', '2019-08-13', 5, 1007319239, 5, 7, NULL, 'si'),
(1348, NULL, '33.48', 'Alimentacion', '2019-08-14', 5, 1007428719, 5, 7, NULL, 'si'),
(1349, NULL, '33.48', 'Alimentacion', '2019-08-15', 5, 1007428719, 5, 7, NULL, 'si'),
(1350, NULL, '33.48', 'Alimentacion', '2019-08-16', 5, 1007428719, 5, 7, NULL, 'si'),
(1351, NULL, '33.48', 'Alimentacion', '2019-08-17', 5, 1007428719, 5, 7, NULL, 'si'),
(1352, NULL, '33.48', 'Alimentacion', '2019-08-18', 5, 1007428719, 5, 7, NULL, 'si'),
(1353, NULL, '33.48', 'Alimentacion', '2019-08-19', 5, 1007428719, 5, 7, NULL, 'si'),
(1354, NULL, '33.48', 'Alimentacion', '2019-08-20', 5, 1007428719, 5, 7, NULL, 'si'),
(1355, NULL, '34.45', 'Alimentacion', '2019-08-22', 5, 1007319239, 5, 7, NULL, 'si'),
(1356, NULL, '34.45', 'Alimentacion', '2019-08-23', 5, 1007319239, 5, 7, NULL, 'si'),
(1357, NULL, '34.45', 'Alimentacion', '2019-08-24', 5, 1007319239, 5, 7, NULL, 'si'),
(1358, NULL, '34.45', 'Alimentacion', '2019-08-25', 5, 1007319239, 5, 7, NULL, 'si'),
(1359, NULL, '34.45', 'Alimentacion', '2019-08-26', 5, 1007319239, 5, 7, NULL, 'si'),
(1360, NULL, '34.45', 'Alimentacion', '2019-08-27', 5, 1007319239, 5, 7, NULL, 'si'),
(1361, NULL, '34.45', 'Alimentacion', '2019-08-28', 5, 1007319239, 5, 7, NULL, 'si'),
(1362, NULL, '35.43', 'Alimentacion', '2019-08-29', 5, 1007428719, 5, 7, NULL, 'si'),
(1363, NULL, '35.43', 'Alimentacion', '2019-08-30', 5, 1007428719, 5, 7, NULL, 'si'),
(1364, NULL, '35.43', 'Alimentacion', '2019-08-31', 5, 1007428719, 5, 7, NULL, 'si'),
(1365, NULL, '35.43', 'Alimentacion', '2019-09-01', 5, 1007428719, 5, 7, NULL, 'si'),
(1366, NULL, '35.43', 'Alimentacion', '2019-09-01', 5, 1007428719, 5, 7, NULL, 'si'),
(1367, NULL, '35.43', 'Alimentacion', '2019-09-01', 5, 1007428719, 5, 7, NULL, 'si'),
(1368, NULL, '35.43', 'Alimentacion', '2019-09-01', 5, 1007428719, 5, 7, NULL, 'si'),
(1369, NULL, '36.40', 'Alimentacion', '2019-09-02', 5, 1007319239, 5, 7, NULL, 'si'),
(1370, NULL, '36.40', 'Alimentacion', '2019-09-03', 5, 1007319239, 5, 7, NULL, 'si'),
(1371, NULL, '36.40', 'Alimentacion', '2019-09-04', 5, 1007319239, 5, 7, NULL, 'si'),
(1372, NULL, '36.40', 'Alimentacion', '2019-09-05', 5, 1007319239, 5, 7, NULL, 'si'),
(1373, NULL, '36.40', 'Alimentacion', '2019-09-06', 5, 1007319239, 5, 7, NULL, 'si'),
(1374, NULL, '36.40', 'Alimentacion', '2019-09-07', 5, 1007319239, 5, 7, NULL, 'si'),
(1375, NULL, '36.40', 'Alimentacion', '2019-09-08', 5, 1007319239, 5, 7, NULL, 'si'),
(1376, NULL, '37.38', 'Alimentacion', '2019-09-09', 5, 1007428719, 5, 7, NULL, 'si'),
(1377, NULL, '37.38', 'Alimentacion', '2019-09-10', 5, 1007428719, 5, 7, NULL, 'si'),
(1378, NULL, '37.38', 'Alimentacion', '2019-09-11', 5, 1007428719, 5, 7, NULL, 'si'),
(1379, NULL, '37.38', 'Alimentacion', '2019-09-12', 5, 1007428719, 5, 7, NULL, 'si'),
(1380, NULL, '37.38', 'Alimentacion', '2019-09-13', 5, 1007428719, 5, 7, NULL, 'si'),
(1381, NULL, '37.38', 'Alimentacion', '2019-09-14', 5, 1007428719, 5, 7, NULL, 'si'),
(1382, NULL, '37.38', 'Alimentacion', '2019-09-15', 5, 1007428719, 5, 7, NULL, 'si'),
(1383, NULL, '38.35', 'Alimentacion', '2019-09-16', 5, 1007319239, 5, 7, NULL, 'si'),
(1384, NULL, '38.35', 'Alimentacion', '2019-09-17', 5, 1007319239, 5, 7, NULL, 'si'),
(1385, NULL, '38.35', 'Alimentacion', '2019-09-18', 5, 1007319239, 5, 7, NULL, 'si'),
(1386, NULL, '38.35', 'Alimentacion', '2019-09-19', 5, 1007319239, 5, 7, NULL, 'si'),
(1387, NULL, '38.35', 'Alimentacion', '2019-09-20', 5, 1007319239, 5, 7, NULL, 'si'),
(1388, NULL, '38.35', 'Alimentacion', '2019-09-21', 5, 1007319239, 5, 7, NULL, 'si'),
(1389, NULL, '38.35', 'Alimentacion', '2019-09-22', 5, 1007319239, 5, 7, NULL, 'si'),
(1390, NULL, '39.33', 'Alimentacion', '2019-09-23', 5, 1007428719, 5, 7, NULL, 'si'),
(1391, NULL, '39.33', 'Alimentacion', '2019-09-24', 5, 1007428719, 5, 7, NULL, 'si'),
(1392, NULL, '39.33', 'Alimentacion', '2019-09-25', 5, 1007428719, 5, 7, NULL, 'si'),
(1393, NULL, '39.33', 'Alimentacion', '2019-09-26', 5, 1007428719, 5, 7, NULL, 'si'),
(1394, NULL, '39.33', 'Alimentacion', '2019-09-27', 5, 1007428719, 5, 7, NULL, 'si'),
(1395, NULL, '39.33', 'Alimentacion', '2019-09-28', 5, 1007428719, 5, 7, NULL, 'si'),
(1397, NULL, '39.33', 'Alimentacion', '2019-09-29', 5, 1007428719, 5, 7, NULL, 'si'),
(1398, NULL, '4.00', 'MOrtalidad', '2019-09-24', 4, 1007462483, 3, 7, NULL, 'si'),
(1399, NULL, '20.00', 'Se encontraron 20 peces muridos', '24/09/2019', 2, NULL, 3, 9, NULL, 'si'),
(1400, '0', '50.00', 'mortalidad realizada', '2019/09/24', 6, 1083930020, 3, 8, NULL, 'si'),
(1401, '0', '2.00', 'muerte', '2019/09/24', 6, 1083930020, 3, 8, NULL, 'si'),
(1402, NULL, '20.00', 'ñlkjhg, disminuyo cantidad de peces', '12-02-2019', 2, 1, 3, 9, NULL, 'si'),
(1403, NULL, '20.00', 'dfg, disminuyo cantidad de peces', '', 5, 1, 3, 7, NULL, 'si'),
(1404, NULL, '20.00', 'dfg, disminuyo cantidad de peces', '23-07-2019', 5, 1, 3, 7, NULL, 'si'),
(1405, NULL, '20.00', 'dfg, disminuyo cantidad de peces', '23-07-2019', 5, 1, 3, 7, NULL, 'si'),
(1406, NULL, '20.00', 'dfg, disminuyo cantidad de peces', '2019-09-24', 5, 1, 3, 7, NULL, 'si'),
(1407, NULL, '2.00', 'sd, disminuyo cantidad de peces', '2019-09-26', 2, 1, 3, 9, NULL, 'si'),
(1408, NULL, '2.00', 'breve, disminuyo cantidad de peces', '2019-09-30', 4, 1, 3, 22, NULL, 'si'),
(1409, NULL, '100.00', 'fdmkmsd', '2019-10-07', 1, 30, 5, 6, NULL, 'si'),
(1410, NULL, '100.00', 'gvfgh', '2019-10-06', 1, 30, 1, 6, 'no', 'si'),
(1411, NULL, '10.00', 'fgdhg', '2019-10-07', 1, 30, 4, 6, 'no', 'si'),
(1412, NULL, '100.00', 'hjkj', '', 1, 30, 4, 6, 'no', 'si'),
(1413, NULL, '100.00', 'hjghjcvgbhvn. se resto cantidad ', '2019-10-01', 1, 30, 2, 6, 'no', 'si'),
(1414, NULL, '100.00', 'hjghjcvgbhvn. se sumo cantidad ', '2019-10-01', 1, 30, 2, 7, 'no', 'si'),
(1415, NULL, '500.00', 'fghdfghgh', '2019-10-07', 1, 30, 6, 6, 'no', 'si'),
(1416, NULL, '15.00', 'fgfdgfgdfg', '2019-10-06', 1, 30, 1, 6, 'no', 'si'),
(1417, NULL, '5.00', 'rotacion', '2019-10-16', 2, 1, 2, 9, NULL, 'si'),
(1418, NULL, '5.00', 'rotacion', '2019-10-16', 6, 1, 2, 8, NULL, 'si'),
(1419, NULL, '5.00', 'rotacion2', '2019-10-16', 2, 1, 2, 9, NULL, 'si'),
(1420, NULL, '5.00', 'rotacion2', '2019-10-16', 6, 1, 2, 8, NULL, 'si'),
(1421, NULL, '1.00', 'pesca1', '2019-10-17', 5, 1, 4, 7, NULL, 'si'),
(1422, NULL, '1.00', 'pesca2', '2019-10-17', 5, 1, 4, 7, NULL, 'si'),
(1423, NULL, '1.00', 'pesca3', '2019-10-17', 5, 1, 4, 7, NULL, 'si'),
(1424, '0', '100.00', 'alimentar 9 lote', '2019/03/02', 2, 1083930020, 5, 9, NULL, 'si'),
(1425, NULL, '100.00', 'Alimento con exito', '2019/09/24', 4, 1083930020, 5, 22, NULL, 'si'),
(1426, NULL, '30.00', 'Rotacion lote 2 y 4', '2019-10-11', 2, 1083930020, 2, 6, NULL, 'si'),
(1427, NULL, '30.00', 'Rotacion lote 2 y 4', '2019-10-11', 5, 1083930020, 2, 6, NULL, 'si'),
(1428, NULL, '40.00', 'Mortalidad del lote 6', '2019-10-11', 4, 656, 3, 6, NULL, 'si'),
(1432, NULL, '39.00', 'Alimentacion lote 7', '2019-10-11', 1, 1083930020, 5, 6, NULL, 'si'),
(1433, NULL, '32.00', 'Alimentacion 23', '2019-10-11', 10, 1083930020, 5, 6, NULL, 'si'),
(1434, NULL, '45.00', 'Alimentacion lote 6', '2019-10-11', 1, 656, 5, 6, NULL, 'si'),
(1435, NULL, '34.00', 'Alimentcion 33', '2019-10-11', 1, 656, 5, 8, NULL, 'si'),
(1436, NULL, '34.00', 'roto lote 10 y 6', '2019-10-11', 1, 656, 2, 10, NULL, 'si'),
(1437, NULL, '34.00', 'roto lote 10 y 6', '2019-10-11', 1, 656, 2, 6, NULL, 'si'),
(1438, NULL, '40.00', 'Talla 30 peso 30', '2019-10-11', 1, 656, 1, 10, NULL, 'si'),
(1439, NULL, '40.00', 'Mortalidad lote 12', '2019-10-10', 2, 656, 3, 12, NULL, 'si'),
(1440, NULL, '23.00', 'Produccion lote 11', '2019-10-11', 1, 656, 6, 11, NULL, 'si'),
(1441, NULL, '40.00', 'talla 40 peso 60', '2019-10-11', 3, 1083930020, 1, 12, NULL, 'si'),
(1442, NULL, '20.00', 'Hoy fue con exito!', '2019-10-12', 5, 656, 4, 14, NULL, 'si'),
(1443, NULL, '20.00', 'Peces', '2019-10-13', 5, 656, 1, 5, NULL, 'si'),
(1444, NULL, '483408.00', 'yesika alimenta', '2019-10-12', 2, 29, 5, 2, NULL, 'si'),
(1445, NULL, '23.00', 'registro exito', '2019-10-12', 2, 29, 2, 1, NULL, 'si'),
(1446, NULL, '23.00', 'registro exito', '2019-10-12', 4, 29, 2, 3, NULL, 'si'),
(1447, NULL, '23.00', 'talla 10 y peso 60', '2019-10-13', 5, 29, 1, 5, NULL, 'si'),
(1448, NULL, '23.00', 'ProducciÃ³n de lote 4', '2019-10-12', 4, 29, 6, 4, NULL, 'si'),
(1449, NULL, '45.00', 'produccion de 3', '2019-10-12', 3, 29, 6, 3, NULL, 'si'),
(1450, NULL, '45.00', 'pesca con exito', '2019-10-12', 7, 29, 4, 7, NULL, 'si'),
(1451, NULL, '34.00', 'Pesca del lote 3', '2019-10-12', 3, 29, 4, 3, NULL, 'si'),
(1452, NULL, '50.00', 'lote 5', '2019-10-12', 5, 29, 3, 5, NULL, 'si'),
(1453, NULL, '50.00', 'muetre de 50 gm', '2019-10-12', 9, 29, 3, 9, NULL, 'si'),
(1454, NULL, '1971280.00', 'Producción lote 8', '2019-10-14', 8, 1083930020, 6, 8, NULL, 'si'),
(1455, NULL, '295.00', 'produccion lote 7', '2019-10-14', 7, 29, 6, 7, NULL, 'si'),
(1456, NULL, '197128.00', 'lote 8', '2019-10-14', 8, 29, 5, 8, NULL, 'si'),
(1457, NULL, '50.00', 'talla 40 peso 90', '2019-10-14', 7, 1083930020, 1, 7, NULL, 'si'),
(1458, NULL, '79200.00', 'alimento Maria', '2019-10-29', 3, 29, 5, 3, NULL, 'si');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `actividades_lotes_activos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `actividades_lotes_activos` (
`id_actividad` int(11)
,`id_lote` int(11)
,`nombre_actividad` varchar(50)
,`descripcion` varchar(80)
,`cantidad_alimentacion` varchar(15)
,`fecha` varchar(20)
,`id_persona` int(11)
,`nombre` varchar(50)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bateria`
--

CREATE TABLE `bateria` (
  `id_bateria` int(11) NOT NULL,
  `nombre_bateria` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bateria`
--

INSERT INTO `bateria` (`id_bateria`, `nombre_bateria`) VALUES
(1, 'Bateria 1'),
(2, 'Bateria 2'),
(3, 'Bateria 3'),
(7, 'Reservorio 1'),
(8, 'Reservorio 2');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `calcular_alimentacion_semana_actual`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `calcular_alimentacion_semana_actual` (
`id_lote` int(11)
,`estanque` int(10)
,`fecha_ingreso` date
,`fecha_salida` date
,`cantidad` int(10)
,`nombre_especie` varchar(20)
,`id_ciclo_vida` int(11)
,`consumo_diario` decimal(10,3)
,`consumo_semanal` decimal(10,3)
,`semana` int(10)
,`fecha_actual` date
,`dias_transcurridas` int(7)
,`semanas_transcurridas` decimal(7,0)
,`total_diario` decimal(20,3)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo_vida`
--

CREATE TABLE `ciclo_vida` (
  `id_ciclo_vida` int(11) NOT NULL,
  `semana` int(10) DEFAULT NULL,
  `consumo_diario` decimal(10,3) DEFAULT NULL,
  `consumo_semanal` decimal(10,3) DEFAULT NULL,
  `biomasa` decimal(10,3) DEFAULT NULL,
  `peso_min` decimal(10,3) DEFAULT NULL,
  `peso_max` decimal(10,3) DEFAULT NULL,
  `fk_tipo_especie` int(10) DEFAULT NULL,
  `fk_tipo_alimentacion` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclo_vida`
--

INSERT INTO `ciclo_vida` (`id_ciclo_vida`, `semana`, `consumo_diario`, `consumo_semanal`, `biomasa`, `peso_min`, `peso_max`, `fk_tipo_especie`, `fk_tipo_alimentacion`) VALUES
(1, 1, '0.975', '6.800', NULL, '1.000', '10.000', 7, 1),
(2, 2, '1.950', '20.500', NULL, '1.000', '10.000', 7, 1),
(3, 3, '2.925', '41.000', NULL, '1.000', '10.000', 7, 1),
(4, 4, '3.250', '63.700', NULL, '10.000', '20.000', 7, 2),
(5, 5, '3.250', '86.500', NULL, '10.000', '20.000', 7, 2),
(6, 6, '3.575', '111.500', NULL, '10.000', '20.000', 7, 2),
(7, 7, '3.900', '138.800', NULL, '10.000', '20.000', 7, 2),
(8, 8, '5.525', '177.500', NULL, '20.000', '80.000', 7, 2),
(9, 9, '8.775', '238.900', NULL, '20.000', '80.000', 7, 2),
(10, 10, '10.725', '314.000', NULL, '20.000', '80.000', 7, 2),
(11, 11, '12.675', '402.700', NULL, '20.000', '80.000', 7, 2),
(12, 12, '16.250', '516.400', NULL, '20.000', '80.000', 7, 2),
(13, 13, '21.450', '666.600', NULL, '20.000', '80.000', 7, 2),
(14, 14, '21.450', '816.700', NULL, '80.000', '200.000', 7, 3),
(15, 15, '23.400', '980.500', NULL, '80.000', '200.000', 7, 3),
(16, 16, '24.700', '1153.400', NULL, '80.000', '200.000', 7, 3),
(17, 17, '26.000', '1335.400', NULL, '80.000', '200.000', 7, 3),
(18, 18, '27.300', '1526.500', NULL, '80.000', '200.000', 7, 3),
(19, 19, '28.600', '1726.700', NULL, '80.000', '200.000', 7, 3),
(20, 20, '29.900', '1936.000', NULL, '80.000', '200.000', 7, 3),
(21, 21, '31.200', '2154.400', NULL, '200.000', '380.000', 7, 4),
(22, 22, '32.175', '2379.700', NULL, '200.000', '380.000', 7, 4),
(23, 23, '32.500', '2607.200', NULL, '200.000', '380.000', 7, 4),
(24, 24, '33.475', '2841.500', NULL, '200.000', '380.000', 7, 4),
(25, 25, '34.450', '3082.600', NULL, '200.000', '380.000', 7, 4),
(26, 26, '35.425', '3330.600', NULL, '200.000', '380.000', 7, 4),
(27, 27, '36.400', '3585.400', NULL, '200.000', '380.000', 7, 4),
(28, 28, '37.375', '3847.000', NULL, '200.000', '380.000', 7, 4),
(29, 29, '38.350', '4115.500', NULL, '380.000', '500.000', 7, 5),
(30, 30, '39.325', '4390.700', NULL, '380.000', '500.000', 7, 5),
(31, 31, '48.100', '4727.500', NULL, '380.000', '500.000', 7, 5),
(32, 32, '61.750', '5159.700', NULL, '380.000', '500.000', 7, 5),
(33, 33, '74.750', '5683.000', NULL, '380.000', '500.000', 7, 5),
(34, 34, '84.500', '6274.500', NULL, '380.000', '500.000', 7, 5),
(35, 35, '91.000', '6911.500', NULL, '380.000', '500.000', 7, 5),
(36, 1, '0.972', '6.800', NULL, '1.000', '10.000', 8, 1),
(37, 2, '2.160', '21.900', NULL, '1.000', '10.000', 8, 1),
(38, 3, '3.240', '44.600', NULL, '1.000', '10.000', 8, 1),
(39, 4, '3.600', '69.800', NULL, '10.000', '20.000', 8, 2),
(40, 5, '3.600', '95.000', NULL, '10.000', '20.000', 8, 2),
(41, 6, '3.960', '122.700', NULL, '10.000', '20.000', 8, 2),
(42, 7, '4.320', '153.000', NULL, '10.000', '20.000', 8, 2),
(43, 8, '6.120', '195.800', NULL, '20.000', '80.000', 8, 2),
(44, 9, '9.720', '263.800', NULL, '20.000', '80.000', 8, 2),
(45, 10, '11.880', '347.000', NULL, '20.000', '80.000', 8, 2),
(46, 11, '14.040', '445.300', NULL, '20.000', '80.000', 8, 2),
(47, 12, '18.000', '571.300', NULL, '20.000', '80.000', 8, 2),
(48, 13, '23.760', '737.600', NULL, '20.000', '80.000', 8, 2),
(49, 14, '23.760', '903.900', NULL, '80.000', '200.000', 8, 3),
(50, 15, '25.920', '1085.400', NULL, '80.000', '200.000', 8, 3),
(51, 16, '27.360', '1276.900', NULL, '80.000', '200.000', 8, 3),
(52, 17, '28.800', '1478.500', NULL, '80.000', '200.000', 8, 3),
(53, 18, '30.240', '1690.200', NULL, '80.000', '200.000', 8, 3),
(54, 19, '31.680', '1911.900', NULL, '80.000', '200.000', 8, 3),
(55, 20, '33.120', '2143.800', NULL, '80.000', '200.000', 8, 3),
(56, 21, '34.560', '2385.700', NULL, '200.000', '380.000', 8, 4),
(57, 22, '35.640', '2635.200', NULL, '200.000', '380.000', 8, 4),
(58, 23, '36.000', '2887.200', NULL, '200.000', '380.000', 8, 4),
(59, 24, '37.080', '3146.700', NULL, '200.000', '380.000', 8, 4),
(60, 25, '38.160', '3413.800', NULL, '200.000', '380.000', 8, 4),
(61, 26, '39.240', '3413.800', NULL, '200.000', '380.000', 8, 4),
(62, 27, '40.320', '3970.800', NULL, '200.000', '380.000', 8, 4),
(63, 28, '41.400', '4260.600', NULL, '200.000', '380.000', 8, 4),
(64, 29, '42.480', '4557.900', NULL, '380.000', '500.000', 8, 5),
(65, 30, '43.560', '4862.800', NULL, '380.000', '500.000', 8, 5),
(66, 31, '53.280', '5235.800', NULL, '380.000', '500.000', 8, 5),
(67, 32, '68.400', '5714.600', NULL, '380.000', '500.000', 8, 5),
(68, 33, '82.800', '6294.200', NULL, '380.000', '500.000', 8, 5),
(69, 34, '93.600', '6949.400', NULL, '380.000', '500.000', 8, 5),
(70, 35, '100.800', '7655.000', NULL, '380.000', '500.000', 8, 5),
(71, 1, '0.600', '4.000', '0.000', '1.000', '10.000', 1, 1),
(73, 2, '1.000', '12.000', '0.000', '1.000', '10.000', 1, 1),
(74, 3, '1.800', '25.200', '0.000', '1.000', '10.000', 1, 1),
(76, 4, '2.000', '39.000', NULL, '10.000', '20.000', 1, 2),
(77, 5, '2.000', '53.000', NULL, '10.000', '20.000', 1, 2),
(78, 6, '2.200', '68.600', NULL, '10.000', '20.000', 1, 2),
(79, 7, '2.400', '85.400', NULL, '10.000', '20.000', 1, 2),
(80, 8, '3.400', '109.200', NULL, '20.000', '80.000', 1, 2),
(81, 9, '5.400', '147.000', NULL, '20.000', '80.000', 1, 2),
(82, 10, '6.600', '193.200', NULL, '20.000', '80.000', 1, 2),
(83, 11, '7.800', '247.800', NULL, '20.000', '80.000', 1, 2),
(84, 12, '10.000', '317.800', NULL, '20.000', '80.000', 1, 2),
(85, 13, '13.200', '410.200', NULL, '20.000', '80.000', 1, 2),
(86, 14, '13.200', '502.600', NULL, '80.000', '200.000', 1, 2),
(87, 15, '14.400', '603.400', NULL, '80.000', '200.000', 1, 3),
(88, 16, '15.200', '709.800', NULL, '80.000', '200.000', 1, 3),
(89, 17, '16.000', '821.000', NULL, '80.000', '200.000', 1, 3),
(90, 18, '16.800', '939.400', NULL, '80.000', '200.000', 1, 3),
(91, 19, '17.600', '1062.600', NULL, '80.000', '200.000', 1, 3),
(92, 20, '18.400', '1191.400', NULL, '80.000', '200.000', 1, 3),
(93, 21, '19.200', '1325.800', NULL, '200.000', '380.000', 1, 3),
(94, 22, '19.800', '1464.400', NULL, '200.000', '380.000', 1, 4),
(95, 23, '20.000', '1604.400', NULL, '200.000', '380.000', 1, 4),
(96, 24, '20.600', '1748.600', NULL, '200.000', '380.000', 1, 4),
(97, 25, '21.200', '1897.000', NULL, '200.000', '380.000', 1, 4),
(98, 26, '21.800', '2049.600', NULL, '200.000', '380.000', 1, 4),
(99, 27, '22.400', '2206.400', NULL, '200.000', '380.000', 1, 4),
(100, 28, '23.000', '2367.400', NULL, '200.000', '380.000', 1, 4),
(101, 29, '23.600', '2532.600', NULL, '380.000', '500.000', 1, 5),
(102, 30, '24.200', '2702.000', NULL, '380.000', '500.000', 1, 5),
(103, 31, '29.600', '2909.200', NULL, '380.000', '500.000', 1, 5),
(104, 32, '38.000', '3175.200', NULL, '380.000', '500.000', 1, 5),
(105, 33, '46.000', '3497.200', NULL, '380.000', '500.000', 1, 5),
(106, 34, '52.000', '3861.200', NULL, '380.000', '500.000', 1, 5),
(107, 35, '56.000', '4253.200', NULL, '380.000', '500.000', 1, 5),
(108, 1, '1.095', '7.700', NULL, '1.000', '10.000', 3, 1),
(109, 2, '2.190', '23.000', NULL, '1.000', '10.000', 3, 1),
(110, 3, '3.280', '46.000', NULL, '1.000', '10.000', 3, 1),
(111, 4, '3.650', '71.500', NULL, '10.000', '20.000', 3, 2),
(112, 5, '3.650', '97.100', NULL, '10.000', '20.000', 3, 2),
(113, 6, '4.010', '125.200', NULL, '10.000', '20.000', 3, 2),
(114, 7, '4.380', '155.900', NULL, '10.000', '20.000', 3, 2),
(115, 8, '6.200', '199.300', NULL, '20.000', '80.000', 3, 2),
(116, 9, '9.850', '268.300', NULL, '20.000', '80.000', 3, 2),
(117, 10, '12.040', '352.600', NULL, '20.000', '80.000', 3, 2),
(118, 11, '14.230', '452.200', NULL, '20.000', '80.000', 3, 2),
(119, 12, '18.250', '580.000', NULL, '20.000', '80.000', 3, 2),
(120, 13, '24.090', '748.600', NULL, '20.000', '80.000', 3, 2),
(121, 14, '24.090', '917.200', NULL, '80.000', '200.000', 3, 3),
(122, 15, '26.090', '1101.200', NULL, '80.000', '200.000', 3, 3),
(123, 16, '27.740', '1295.400', NULL, '80.000', '200.000', 3, 3),
(124, 17, '29.200', '1499.800', NULL, '80.000', '200.000', 3, 3),
(125, 18, '30.660', '1714.400', NULL, '80.000', '200.000', 3, 3),
(126, 19, '32.120', '1939.200', NULL, '80.000', '200.000', 3, 3),
(127, 20, '33.580', '2174.300', NULL, '80.000', '200.000', 3, 3),
(128, 21, '35.040', '2419.600', NULL, '200.000', '380.000', 3, 4),
(129, 22, '36.130', '2672.500', NULL, '200.000', '380.000', 3, 4),
(130, 23, '36.500', '2928.000', NULL, '200.000', '380.000', 3, 4),
(131, 24, '37.590', '3191.200', NULL, '200.000', '380.000', 3, 4),
(132, 25, '38.690', '3462.000', NULL, '200.000', '380.000', 3, 4),
(133, 26, '39.780', '3740.500', NULL, '200.000', '380.000', 3, 4),
(134, 27, '40.880', '4026.700', NULL, '200.000', '380.000', 3, 4),
(135, 28, '41.970', '4320.000', NULL, '200.000', '380.000', 3, 4),
(136, 29, '43.070', '4622.000', NULL, '380.000', '500.000', 3, 5),
(137, 30, '44.160', '4931.200', NULL, '380.000', '500.000', 3, 5),
(138, 31, '54.000', '5309.300', NULL, '380.000', '500.000', 3, 5),
(139, 32, '69.350', '5794.700', NULL, '380.000', '500.000', 3, 5),
(140, 33, '83.950', '6382.400', NULL, '380.000', '500.000', 3, 5),
(141, 34, '94.900', '7046.700', NULL, '380.000', '500.000', 3, 5),
(142, 35, '102.200', '7762.100', NULL, '380.000', '500.000', 3, 5),
(143, 1, '0.750', '5.300', NULL, '1.000', '10.000', 5, 1),
(144, 2, '1.500', '15.800', NULL, '1.000', '10.000', 5, 1),
(145, 3, '2.250', '31.500', NULL, '1.000', '10.000', 5, 1),
(146, 4, '2.500', '49.000', NULL, '10.000', '20.000', 5, 2),
(147, 5, '2.500', '66.500', NULL, '10.000', '20.000', 5, 2),
(148, 6, '2.750', '85.800', NULL, '10.000', '20.000', 5, 2),
(149, 7, '3.000', '106.800', NULL, '10.000', '20.000', 5, 2),
(150, 8, '4.250', '136.500', NULL, '20.000', '80.000', 5, 2),
(151, 9, '6.750', '183.800', NULL, '20.000', '80.000', 5, 2),
(152, 10, '8.250', '241.500', NULL, '20.000', '80.000', 5, 2),
(153, 11, '9.750', '309.800', NULL, '20.000', '80.000', 5, 2),
(154, 12, '12.500', '397.300', NULL, '20.000', '80.000', 5, 2),
(155, 13, '16.500', '512.800', NULL, '20.000', '80.000', 5, 2),
(156, 14, '16.500', '628.300', NULL, '80.000', '200.000', 5, 3),
(157, 15, '18.000', '754.300', NULL, '80.000', '200.000', 5, 3),
(158, 16, '19.000', '887.300', NULL, '80.000', '200.000', 5, 3),
(159, 17, '20.000', '1027.300', NULL, '80.000', '200.000', 5, 3),
(160, 18, '21.000', '1174.300', NULL, '80.000', '200.000', 5, 3),
(161, 19, '22.000', '1328.300', NULL, '80.000', '200.000', 5, 3),
(162, 20, '23.000', '1489.300', NULL, '80.000', '200.000', 5, 3),
(163, 21, '24.000', '1657.300', NULL, '200.000', '380.000', 5, 4),
(164, 22, '24.750', '1830.500', NULL, '200.000', '380.000', 5, 4),
(165, 23, '25.000', '2005.500', NULL, '200.000', '380.000', 5, 4),
(166, 24, '25.750', '2185.800', NULL, '200.000', '380.000', 5, 4),
(167, 25, '26.500', '2371.300', NULL, '200.000', '380.000', 5, 4),
(168, 26, '27.250', '2562.000', NULL, '200.000', '380.000', 5, 4),
(169, 27, '28.000', '2758.000', NULL, '200.000', '380.000', 5, 4),
(170, 28, '28.750', '2371.300', NULL, '200.000', '380.000', 5, 4),
(171, 29, '29.500', '2959.300', NULL, '380.000', '500.000', 5, 5),
(172, 30, '30.250', '3165.800', NULL, '380.000', '500.000', 5, 5),
(173, 31, '37.000', '3377.500', NULL, '380.000', '500.000', 5, 5),
(174, 32, '47.500', '3636.500', NULL, '380.000', '500.000', 5, 5),
(175, 33, '57.000', '3969.000', NULL, '380.000', '500.000', 5, 5),
(176, 34, '65.000', '4826.500', NULL, '380.000', '500.000', 5, 5),
(177, 35, '70.000', '5316.500', NULL, '380.000', '500.000', 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `temperatura` decimal(10,0) DEFAULT NULL,
  `turbiedad` decimal(10,0) DEFAULT NULL,
  `lluvia` decimal(10,0) DEFAULT NULL,
  `fk_estanque` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `fecha`, `temperatura`, `turbiedad`, `lluvia`, `fk_estanque`) VALUES
(55, '2019-12-11', '12', '12', '32', 1),
(56, '2019-12-11', '23', '12', '32', 2),
(61, '2019-02-11', '75', '32', '32', 4),
(62, '2019-12-11', '1', '1', '1', 5),
(63, '2019-06-02', '12', '2412', '23', 6),
(64, '2019-02-12', '12', '2412', '23', 7),
(65, '2019-12-10', '20', '15', '10', 8),
(90, '2019-12-11', '23', '12', '32', 9),
(91, '2019-01-11', '32', '32', '32', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estanque`
--

CREATE TABLE `estanque` (
  `id_estanque` int(11) NOT NULL,
  `latitud` int(10) DEFAULT NULL,
  `longitud` int(10) DEFAULT NULL,
  `area` int(10) DEFAULT NULL,
  `capacidad` int(10) DEFAULT NULL,
  `fk_bateria` int(10) DEFAULT NULL,
  `tipo_estanque` varchar(20) DEFAULT NULL,
  `estado_estanque` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estanque`
--

INSERT INTO `estanque` (`id_estanque`, `latitud`, `longitud`, `area`, `capacidad`, `fk_bateria`, `tipo_estanque`, `estado_estanque`) VALUES
(1, 6459, 3394, 5000, 8000, 1, 'Estanque ', 0),
(2, 6760, 3594, 5000, 8000, 1, 'Estanque ', 1),
(3, 7850, 3784, 5000, 8000, 1, 'Estanque ', 0),
(4, 8594, 3864, 5000, 8000, 2, 'Estanque ', 0),
(5, 8995, 4254, 5000, 8000, 2, 'Estanque ', 0),
(6, 9015, 4347, 5000, 8000, 2, 'Estanque', 1),
(7, 9298, 4590, 5000, 8000, 2, 'Estanque ', 1),
(8, 9458, 4706, 5000, 8000, 3, 'Estanque ', 1),
(9, 9890, 4809, 5000, 8000, 3, 'Estanque', 1),
(10, 9900, 5120, 5000, 8000, 3, 'Estanque ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `id_lote` int(11) NOT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `fk_estanque` int(10) DEFAULT NULL,
  `fk_tipo_especie` int(10) DEFAULT NULL,
  `estado_lote` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`id_lote`, `cantidad`, `fecha_ingreso`, `fecha_salida`, `fk_estanque`, `fk_tipo_especie`, `estado_lote`) VALUES
(1, 4000, '2019-06-01', '2020-02-01', 1, 1, 1),
(3, 7300, '2019-08-02', '2020-03-02', 3, 3, 1),
(5, 5000, '2019-09-22', '2019-04-22', 5, 5, 1),
(7, 295, '2019-03-22', '2019-12-22', 7, 7, 1),
(8, 7205, '2019-07-02', '2020-03-02', 8, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_permiso` int(11) NOT NULL,
  `persona` int(50) DEFAULT NULL,
  `fk_actividad` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fk_rol` int(20) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `estado_pers` tinyint(1) DEFAULT NULL,
  `pasword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `telefono`, `fk_rol`, `login`, `estado_pers`, `pasword`) VALUES
(1, 'Wilson Martinez', '321456', 1, 'wilson', 0, 'wilson'),
(29, 'Maria Suarez', '333', 2, 'Maria', 1, 'maria'),
(30, 'Federico Guzman', '321256', 1, '60', 0, '60'),
(656, 'Marcos Rojas', '258963', 2, 'Marcos', 0, '1234'),
(100444, 'Yeison Meneses', '34234234', 2, 'efdfsdf', 1, 'dfdfs'),
(1000971063, 'Jhan Pool Agudelo', '134609907', 2, 'JPool11', 1, 'yoyque'),
(1004266452, 'fabian  artunduaga ', '209426060', 2, '.G', 1, 'cepillojr'),
(1004441772, 'Yeison Gomez', '311587392', 2, 'yeison@misena.edu.co', 1, 'yeison'),
(1004517013, 'Vanessa Berdugo', '208432886', 2, 'vkberdugo', 1, 'vendopostres'),
(1007319239, 'Camila Gomez', '320966151', 1, 'camila@misena.edu.co', 1, '1210'),
(1007361170, 'Juan David Lopez ', '322730245', 2, 'jdlopez071@gmail.com', 1, 'BUENO'),
(1007428719, 'Jhojan Cuellar', '3215511', 2, 'ftp@', 1, 'jac'),
(1007462483, 'Jose  Trujillo', '123456789', 2, 'cheque', 1, 'pornarnia'),
(1083928905, 'Herney  Samboni', '3157121', 1, 'herney@misena.edu.co', 1, '123456'),
(1083930020, 'Yesika Marcela', '3208452884', 1, 'yess', 1, 'panda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Operario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_actividad`
--

CREATE TABLE `tipo_actividad` (
  `id_tipo_actividad` int(11) NOT NULL,
  `nombre_actividad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_actividad`
--

INSERT INTO `tipo_actividad` (`id_tipo_actividad`, `nombre_actividad`) VALUES
(1, 'Muestreo'),
(2, 'Rotacion'),
(3, 'Mortalidad'),
(4, 'Pesca'),
(5, 'Alimentacion'),
(6, 'Produccion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_alimentacion`
--

CREATE TABLE `tipo_alimentacion` (
  `id_tipo_alimentacion` int(11) NOT NULL,
  `nombre_alimentacion` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_alimentacion`
--

INSERT INTO `tipo_alimentacion` (`id_tipo_alimentacion`, `nombre_alimentacion`) VALUES
(1, 'MOJARRINAS  45  MASH y45 EXTRUDIZADA'),
(2, 'MOJARRINA 38 EXTRUDIZADA'),
(3, 'MOJARRINA 30 EXTRUDIZADA'),
(4, 'MOJARRINA 24 EXTRUDIZADA'),
(5, 'MOJARRINA 24 y 20 EXTRUDIZADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_especie`
--

CREATE TABLE `tipo_especie` (
  `id_tipo_especie` int(11) NOT NULL,
  `nombre_especie` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_especie`
--

INSERT INTO `tipo_especie` (`id_tipo_especie`, `nombre_especie`) VALUES
(1, 'Tilapia Roja'),
(2, 'Bocachico'),
(3, 'Cachama'),
(5, 'Sabalo'),
(6, 'Tilapia Negra'),
(7, 'Bagre Rosado'),
(8, 'Bagre');

-- --------------------------------------------------------

--
-- Estructura para la vista `actividades_lotes_activos`
--
DROP TABLE IF EXISTS `actividades_lotes_activos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `actividades_lotes_activos`  AS  select `act`.`id_actividad` AS `id_actividad`,`lt`.`id_lote` AS `id_lote`,`tp`.`nombre_actividad` AS `nombre_actividad`,`act`.`descripcion` AS `descripcion`,concat(`act`.`cantidad`,' ','Gm') AS `cantidad_alimentacion`,`act`.`fecha` AS `fecha`,`per`.`id_persona` AS `id_persona`,`per`.`nombre` AS `nombre` from ((((`actividad` `act` join `tipo_actividad` `tp` on(`tp`.`id_tipo_actividad` = `act`.`fk_tipo_actividad`)) join `persona` `per` on(`per`.`id_persona` = `act`.`fk_persona`)) join `estanque` `est` on(`est`.`id_estanque` = `act`.`fk_estanque`)) join `lote` `lt` on(`lt`.`fk_estanque` = `est`.`id_estanque`)) where `lt`.`estado_lote` = 1 order by `lt`.`id_lote`,`act`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `calcular_alimentacion_semana_actual`
--
DROP TABLE IF EXISTS `calcular_alimentacion_semana_actual`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `calcular_alimentacion_semana_actual`  AS  select `lt`.`id_lote` AS `id_lote`,`lt`.`fk_estanque` AS `estanque`,`lt`.`fecha_ingreso` AS `fecha_ingreso`,`lt`.`fecha_salida` AS `fecha_salida`,`lt`.`cantidad` AS `cantidad`,`te`.`nombre_especie` AS `nombre_especie`,`cv`.`id_ciclo_vida` AS `id_ciclo_vida`,`cv`.`consumo_diario` AS `consumo_diario`,`cv`.`consumo_semanal` AS `consumo_semanal`,`cv`.`semana` AS `semana`,curdate() AS `fecha_actual`,truncate(to_days(curdate()) - to_days(`lt`.`fecha_ingreso`),0) AS `dias_transcurridas`,truncate((to_days(curdate()) - to_days(`lt`.`fecha_ingreso`)) / 7,0) + 1 AS `semanas_transcurridas`,`lt`.`cantidad` * `cv`.`consumo_diario` AS `total_diario` from ((`lote` `lt` join `tipo_especie` `te` on(`te`.`id_tipo_especie` = `lt`.`fk_tipo_especie`)) join `ciclo_vida` `cv` on(`cv`.`fk_tipo_especie` = `te`.`id_tipo_especie`)) where `lt`.`estado_lote` = 1 and `cv`.`semana` = round((to_days(curdate()) - to_days(`lt`.`fecha_ingreso`)) / 7,0) + 1 ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `fk_estanque` (`fk_estanque`),
  ADD KEY `fk_persona` (`fk_persona`),
  ADD KEY `fk_tipo_actividad` (`fk_tipo_actividad`);

--
-- Indices de la tabla `bateria`
--
ALTER TABLE `bateria`
  ADD PRIMARY KEY (`id_bateria`);

--
-- Indices de la tabla `ciclo_vida`
--
ALTER TABLE `ciclo_vida`
  ADD PRIMARY KEY (`id_ciclo_vida`),
  ADD UNIQUE KEY `unique` (`semana`,`fk_tipo_especie`),
  ADD KEY `fk_tipo_especie` (`fk_tipo_especie`),
  ADD KEY `fk_tipo_alimentacion` (`fk_tipo_alimentacion`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `fk_estanque` (`fk_estanque`);

--
-- Indices de la tabla `estanque`
--
ALTER TABLE `estanque`
  ADD PRIMARY KEY (`id_estanque`),
  ADD KEY `fk_bateria` (`fk_bateria`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`id_lote`),
  ADD KEY `fk_estanque` (`fk_estanque`),
  ADD KEY `fk_tipo_especie` (`fk_tipo_especie`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_permiso`),
  ADD KEY `persona` (`persona`),
  ADD KEY `actividad` (`fk_actividad`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `fk_rol` (`fk_rol`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  ADD PRIMARY KEY (`id_tipo_actividad`);

--
-- Indices de la tabla `tipo_alimentacion`
--
ALTER TABLE `tipo_alimentacion`
  ADD PRIMARY KEY (`id_tipo_alimentacion`);

--
-- Indices de la tabla `tipo_especie`
--
ALTER TABLE `tipo_especie`
  ADD PRIMARY KEY (`id_tipo_especie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1459;

--
-- AUTO_INCREMENT de la tabla `bateria`
--
ALTER TABLE `bateria`
  MODIFY `id_bateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ciclo_vida`
--
ALTER TABLE `ciclo_vida`
  MODIFY `id_ciclo_vida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de la tabla `estanque`
--
ALTER TABLE `estanque`
  MODIFY `id_estanque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `id_lote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_actividad`
--
ALTER TABLE `tipo_actividad`
  MODIFY `id_tipo_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_alimentacion`
--
ALTER TABLE `tipo_alimentacion`
  MODIFY `id_tipo_alimentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_especie`
--
ALTER TABLE `tipo_especie`
  MODIFY `id_tipo_especie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_2` FOREIGN KEY (`fk_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_act_Tip_Act` FOREIGN KEY (`fk_tipo_actividad`) REFERENCES `tipo_actividad` (`id_tipo_actividad`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_est_act` FOREIGN KEY (`fk_estanque`) REFERENCES `estanque` (`id_estanque`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `ciclo_vida`
--
ALTER TABLE `ciclo_vida`
  ADD CONSTRAINT `fk_tipo_ciclo_vid_tip_alimentac` FOREIGN KEY (`fk_tipo_alimentacion`) REFERENCES `tipo_alimentacion` (`id_tipo_alimentacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tipo_esp_ciclo_vida` FOREIGN KEY (`fk_tipo_especie`) REFERENCES `tipo_especie` (`id_tipo_especie`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `fk_estanq_estanq` FOREIGN KEY (`fk_estanque`) REFERENCES `estanque` (`id_estanque`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `estanque`
--
ALTER TABLE `estanque`
  ADD CONSTRAINT `fk_bateria_estanq` FOREIGN KEY (`fk_bateria`) REFERENCES `bateria` (`id_bateria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `fk_lote_estanq` FOREIGN KEY (`fk_estanque`) REFERENCES `estanque` (`id_estanque`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tipo_especie_lote` FOREIGN KEY (`fk_tipo_especie`) REFERENCES `tipo_especie` (`id_tipo_especie`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD CONSTRAINT `fk_permiso_tipo_act` FOREIGN KEY (`fk_actividad`) REFERENCES `tipo_actividad` (`id_tipo_actividad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `permiso_ibfk_1` FOREIGN KEY (`persona`) REFERENCES `persona` (`id_persona`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`fk_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
