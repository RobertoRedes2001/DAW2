--
-- Database: `empresa`
--
CREATE DATABASE IF NOT EXISTS `empresa` ;
USE `empresa`;

-- --------------------------------------------------------

--
-- Table structure for table `CLIENTE`
--

DROP TABLE IF EXISTS `CLIENTE`;
CREATE TABLE IF NOT EXISTS `CLIENTE` (
  `CLIENTE_COD` int UNSIGNED NOT NULL,
  `NOMBRE` varchar(45) NOT NULL,
  `DIREC` varchar(40) NOT NULL,
  `CIUDAD` varchar(30) NOT NULL,
  `ESTADO` varchar(2) DEFAULT NULL,
  `COD_POSTAL` varchar(9) NOT NULL,
  `AREA` smallint DEFAULT NULL,
  `TELEFONO` varchar(9) DEFAULT NULL,
  `REPR_COD` smallint UNSIGNED DEFAULT NULL,
  `LIMITE_CREDITO` decimal(9,2) UNSIGNED DEFAULT NULL,
  `OBSERVACIONES` text,
  PRIMARY KEY (`CLIENTE_COD`),
  KEY `IDX_CLIENTE_REPR_COD` (`REPR_COD`),
  KEY `CLIENTE_NOMBRE` (`NOMBRE`),
  KEY `CLIENTE_REPR_CLI` (`REPR_COD`,`CLIENTE_COD`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CLIENTE`
--

INSERT INTO `CLIENTE` (`CLIENTE_COD`, `NOMBRE`, `DIREC`, `CIUDAD`, `ESTADO`, `COD_POSTAL`, `AREA`, `TELEFONO`, `REPR_COD`, `LIMITE_CREDITO`, `OBSERVACIONES`) VALUES
(100, 'JOCKSPORTS', '345 VIEWRIDGE', 'BELMONT', 'CA', '96711', 415, '598-6609', 7844, '5000.00', 'Very friendly people to work with -- sales rep likes to be called Mike.'),
(101, 'TKB SPORT SHOP', '490 BOLI RD.', 'REDWOOD', 'CA', '94061', 415, '368-1223', 7521, '10000.00', 'Rep called 5/8 about change in order - contact shipping.'),
(102, 'VOLLYRITE', '9722 HAMILTON', 'BURLINGAME', 'CA', '95133', 415, '644-3341', 7654, '7000.00', 'Company doing heavy promotion beginning 10/89. Prepare for large orders during winter.'),
(103, 'JUST TENNIS', 'HILLVIEW MALL', 'BURLINGAME', 'CA', '97544', 415, '677-9312', 7521, '3000.00', 'Contact rep about new line of tennis rackets.'),
(104, 'EVERY MOUNTAIN', '574 SURRY RD.', 'CUPERTINO', 'CA', '93301', 408, '996-2323', 7499, '10000.00', 'CLIENTE with high market share (23%) due to aggressive advertising.'),
(105, 'K + T SPORTS', '3476 EL PASEO', 'SANTA CLARA', 'CA', '91003', 408, '376-9966', 7844, '5000.00', 'Tends to order large amounts of merchandise at once. Accounting is considering raising their credit limit. Usually pays on time.'),
(106, 'SHAPE UP', '908 SEQUOIA', 'PALO ALTO', 'CA', '94301', 415, '364-9777', 7521, '6000.00', 'Support intensive. Orders small amounts (< 800) of merchandise at a time.'),
(107, 'WOMEN SPORTS', 'VALCO VILLAGE', 'SUNNYVALE', 'CA', '93301', 408, '967-4398', 7499, '10000.00', 'First sporting goods store geared exclusively towards women. Unusual promotion al style and very willing to take chances towards new PRODUCTOs!'),
(108, 'NORTH WOODS HEALTH AND FITNESS SUPPLY CENTER', '98 LONE PINE WAY', 'HIBBING', 'MN', '55649', 612, '566-9123', 7844, '8000.00', ''),
(109, 'SPRINGFIELD NUCLEAR POWER PLANT', '13 PERCEBE STR.', 'SPRINGFIELD', 'NT', '0000', 636, '999-6666', NULL, '10000.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `DEPT`
--

DROP TABLE IF EXISTS `DEPT`;
CREATE TABLE IF NOT EXISTS `DEPT` (
  `DEPT_NO` tinyint UNSIGNED NOT NULL,
  `DNOMBRE` varchar(14) NOT NULL,
  `LOC` varchar(14) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`DEPT_NO`),
  UNIQUE KEY `DNOMBRE` (`DNOMBRE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DEPT`
--

INSERT INTO `DEPT` (`DEPT_NO`, `DNOMBRE`, `LOC`, `color`) VALUES
(10, 'CONTABILIDAD', 'SEVILLA', 'red'),
(20, 'INVESTIGACI?N', 'MADRID', 'blue'),
(30, 'VENTAS', 'BARCELONA', 'orange'),
(40, 'PRODUCCI?N', 'BILBAO', 'green');

-- --------------------------------------------------------

--
-- Table structure for table `DETALLE`
--

DROP TABLE IF EXISTS `DETALLE`;
CREATE TABLE IF NOT EXISTS `DETALLE` (
  `PEDIDO_NUM` smallint UNSIGNED NOT NULL,
  `DETALLE_NUM` smallint UNSIGNED NOT NULL,
  `PROD_NUM` int UNSIGNED NOT NULL,
  `PRECIO_VENTA` decimal(8,2) UNSIGNED DEFAULT NULL,
  `CANTIDAD` int DEFAULT NULL,
  `IMPORTE` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`PEDIDO_NUM`,`DETALLE_NUM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `DETALLE`
--

INSERT INTO `DETALLE` (`PEDIDO_NUM`, `DETALLE_NUM`, `PROD_NUM`, `PRECIO_VENTA`, `CANTIDAD`, `IMPORTE`) VALUES
(601, 1, 200376, '2.40', 1, '2.40'),
(602, 1, 100870, '2.80', 20, '56.00'),
(603, 2, 100860, '56.00', 4, '224.00'),
(604, 1, 100890, '58.00', 3, '174.00'),
(604, 2, 100861, '42.00', 2, '84.00'),
(604, 3, 100860, '44.00', 10, '440.00'),
(605, 1, 100861, '45.00', 100, '4500.00'),
(605, 2, 100870, '2.80', 500, '1400.00'),
(605, 3, 100890, '58.00', 5, '290.00'),
(605, 4, 101860, '24.00', 50, '1200.00'),
(605, 5, 101863, '9.00', 100, '900.00'),
(605, 6, 102130, '3.40', 10, '34.00'),
(606, 1, 102130, '3.40', 1, '3.40'),
(607, 1, 100871, '5.60', 1, '5.60'),
(608, 1, 101860, '24.00', 1, '24.00'),
(608, 2, 100871, '5.60', 2, '11.20'),
(609, 1, 100861, '35.00', 1, '35.00'),
(609, 2, 100870, '2.50', 5, '12.50'),
(609, 3, 100890, '50.00', 1, '50.00'),
(610, 1, 100860, '35.00', 1, '35.00'),
(610, 2, 100870, '2.80', 3, '8.40'),
(610, 3, 100890, '58.00', 1, '58.00'),
(611, 1, 100861, '45.00', 1, '45.00'),
(612, 1, 100860, '30.00', 100, '3000.00'),
(612, 2, 100861, '40.50', 20, '810.00'),
(612, 3, 101863, '10.00', 150, '1500.00'),
(612, 4, 100871, '5.50', 100, '550.00'),
(613, 1, 100871, '5.60', 100, '560.00'),
(613, 2, 101860, '24.00', 200, '4800.00'),
(613, 3, 200380, '4.00', 150, '600.00'),
(613, 4, 200376, '2.20', 200, '440.00'),
(614, 1, 100860, '35.00', 444, '15540.00'),
(614, 2, 100870, '2.80', 1000, '2800.00'),
(614, 3, 100871, '5.60', 1000, '5600.00'),
(615, 1, 100861, '45.00', 4, '180.00'),
(615, 2, 100870, '2.80', 100, '280.00'),
(615, 3, 100871, '5.00', 50, '250.00'),
(616, 1, 100861, '45.00', 10, '450.00'),
(616, 2, 100870, '2.80', 50, '140.00'),
(616, 3, 100890, '58.00', 2, '116.00'),
(616, 4, 102130, '3.40', 10, '34.00'),
(616, 5, 200376, '2.40', 10, '24.00'),
(617, 1, 100860, '35.00', 50, '1750.00'),
(617, 2, 100861, '45.00', 100, '4500.00'),
(617, 3, 100870, '2.80', 500, '1400.00'),
(617, 4, 100871, '5.60', 500, '2800.00'),
(617, 5, 100890, '58.00', 500, '29000.00'),
(617, 6, 101860, '24.00', 100, '2400.00'),
(617, 7, 101863, '12.50', 200, '2500.00'),
(617, 8, 102130, '3.40', 100, '340.00'),
(617, 9, 200376, '2.40', 200, '480.00'),
(617, 10, 200380, '4.00', 300, '1200.00'),
(618, 1, 100860, '35.00', 23, '805.00'),
(618, 2, 100861, '45.11', 50, '2255.50'),
(618, 3, 100870, '45.00', 10, '450.00'),
(619, 1, 200380, '4.00', 100, '400.00'),
(619, 2, 200376, '2.40', 100, '240.00'),
(619, 3, 102130, '3.40', 100, '340.00'),
(619, 4, 100871, '5.60', 50, '280.00'),
(620, 1, 100860, '35.00', 10, '350.00'),
(620, 2, 200376, '2.40', 1000, '2400.00'),
(620, 3, 102130, '3.40', 500, '1700.00'),
(621, 1, 100861, '45.00', 10, '450.00'),
(621, 2, 100870, '2.80', 100, '280.00');

-- --------------------------------------------------------

--
-- Table structure for table `EMP`
--

DROP TABLE IF EXISTS `EMP`;
CREATE TABLE IF NOT EXISTS `EMP` (
  `EMP_NO` smallint UNSIGNED NOT NULL,
  `APELLIDOS` varchar(10) NOT NULL,
  `OFICIO` varchar(10) DEFAULT NULL,
  `JEFE` smallint UNSIGNED DEFAULT NULL,
  `FECHA_ALTA` date DEFAULT NULL,
  `SALARIO` int UNSIGNED DEFAULT NULL,
  `COMISION` int UNSIGNED DEFAULT NULL,
  `DEPT_NO` tinyint UNSIGNED NOT NULL,
  PRIMARY KEY (`EMP_NO`),
  KEY `IDX_EMP_JEFE` (`JEFE`),
  KEY `IDX_EMP_DEPT_NO` (`DEPT_NO`),
  KEY `EMP_APELLIDOS` (`APELLIDOS`),
  KEY `EMP_DEPT_NO_EMP` (`DEPT_NO`,`EMP_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `EMP`
--

INSERT INTO `EMP` (`EMP_NO`, `APELLIDOS`, `OFICIO`, `JEFE`, `FECHA_ALTA`, `SALARIO`, `COMISION`, `DEPT_NO`) VALUES
(7369, 'S?NCHEZ', 'EMPLEADO', 7902, '1980-12-17', 104000, NULL, 20),
(7499, 'ARROYO', 'VENDEDOR', 7698, '1980-02-20', 208000, 39000, 30),
(7521, 'SALA', 'VENDEDOR', 7698, '1981-02-22', 162500, 65000, 30),
(7566, 'JIM?NEZ', 'DIRECTOR', 7839, '1981-04-02', 386750, NULL, 20),
(7654, 'MART?N', 'VENDEDOR', 7698, '1981-09-29', 162500, 182000, 30),
(7698, 'NEGRO', 'DIRECTOR', 7839, '1981-05-01', 370500, NULL, 30),
(7782, 'CEREZO', 'DIRECTOR', 7839, '1981-06-09', 318500, NULL, 10),
(7788, 'GIL', 'ANALISTA', 7566, '1981-11-09', 390000, NULL, 20),
(7839, 'REY', 'PRESIDENTE', NULL, '1981-11-17', 650000, NULL, 10),
(7844, 'TOVAR', 'VENDEDOR', 7698, '1981-09-08', 195000, 0, 30),
(7876, 'ALONSO', 'EMPLEADO', 7788, '1981-09-23', 143000, NULL, 20),
(7900, 'JIMENO', 'EMPLEADO', 7698, '1981-12-03', 123500, NULL, 30),
(7902, 'FERN?NDEZ', 'ANALISTA', 7566, '1981-12-03', 390000, NULL, 20),
(7934, 'MU?OZ', 'EMPLEADO', 7782, '1982-01-23', 169000, NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `PEDIDO`
--

DROP TABLE IF EXISTS `PEDIDO`;
CREATE TABLE IF NOT EXISTS `PEDIDO` (
  `PEDIDO_NUM` smallint UNSIGNED NOT NULL,
  `PEDIDO_FECHA` date DEFAULT NULL,
  `PEDIDO_TIPO` char(1) DEFAULT NULL,
  `CLIENTE_COD` int UNSIGNED NOT NULL,
  `FECHA_ENVIO` date DEFAULT NULL,
  `TOTAL` decimal(8,2) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`PEDIDO_NUM`)
) ;

--
-- Dumping data for table `PEDIDO`
--

INSERT INTO `PEDIDO` (`PEDIDO_NUM`, `PEDIDO_FECHA`, `PEDIDO_TIPO`, `CLIENTE_COD`, `FECHA_ENVIO`, `TOTAL`) VALUES
(601, '1986-05-01', 'A', 106, '1986-05-30', '2.40'),
(602, '1986-06-05', 'B', 102, '1986-06-20', '56.00'),
(603, '1986-06-05', NULL, 102, '1986-06-05', '224.00'),
(604, '1986-06-15', 'A', 106, '1986-06-30', '698.00'),
(605, '1986-07-14', 'A', 106, '1986-07-30', '8324.00'),
(606, '1986-07-14', 'A', 100, '1986-07-30', '3.40'),
(607, '1986-07-18', 'C', 104, '1986-07-18', '5.60'),
(608, '1986-07-25', 'C', 104, '1986-07-25', '35.20'),
(609, '1986-08-01', 'B', 100, '1986-08-15', '97.50'),
(610, '1987-01-07', 'A', 101, '1987-01-08', '101.40'),
(611, '1987-01-11', 'B', 102, '1987-01-11', '45.00'),
(612, '1987-01-15', 'C', 104, '1987-01-20', '5860.00'),
(613, '1987-02-01', NULL, 108, '1987-02-01', '6400.00'),
(614, '1987-02-01', NULL, 102, '1987-02-05', '23940.00'),
(615, '1987-02-01', NULL, 107, '1987-02-06', '710.00'),
(616, '1987-02-03', NULL, 103, '1987-02-10', '764.00'),
(617, '1987-02-05', NULL, 104, '1987-03-03', '46370.00'),
(618, '1987-02-15', 'A', 102, '1987-03-06', '3510.50'),
(619, '1987-02-22', NULL, 104, '1987-02-04', '1260.00'),
(620, '1987-03-12', NULL, 100, '1987-03-12', '4450.00'),
(621, '1987-03-15', 'A', 100, '1987-01-01', '730.00');

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCTO`
--

DROP TABLE IF EXISTS `PRODUCTO`;
CREATE TABLE IF NOT EXISTS `PRODUCTO` (
  `PROD_NUM` int UNSIGNED NOT NULL,
  `DESCRIPCION` varchar(30) NOT NULL,
  PRIMARY KEY (`PROD_NUM`),
  UNIQUE KEY `DESCRIPCION` (`DESCRIPCION`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PRODUCTO`
--

INSERT INTO `PRODUCTO` (`PROD_NUM`, `DESCRIPCION`) VALUES
(100870, 'ACE TENNIS BALLS-3 PACK'),
(100871, 'ACE TENNIS BALLS-6 PACK'),
(100890, 'ACE TENNIS NET'),
(100860, 'ACE TENNIS RACKET I'),
(100861, 'ACE TENNIS RACKET II'),
(102130, 'RH: \"GUIDE TO TENNIS\"'),
(200376, 'SB ENERGY BAR-6 PACK'),
(200380, 'SB VITA SNACK-6 PACK'),
(101863, 'SP JUNIOR RACKET'),
(101860, 'SP TENNIS RACKET');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CLIENTE`
--
ALTER TABLE `CLIENTE`
  ADD CONSTRAINT `CLIENTE_ibfk_1` FOREIGN KEY (`REPR_COD`) REFERENCES `EMP` (`EMP_NO`);

--
-- Constraints for table `EMP`
--
ALTER TABLE `EMP`
  ADD CONSTRAINT `EMP_ibfk_2` FOREIGN KEY (`JEFE`) REFERENCES `EMP` (`EMP_NO`);

COMMIT;
