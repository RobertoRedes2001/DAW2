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
  PRIMARY KEY (`CLIENTE_COD`)
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
  PRIMARY KEY (`EMP_NO`)
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

COMMIT;
