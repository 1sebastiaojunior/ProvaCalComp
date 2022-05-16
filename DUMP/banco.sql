-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 16/05/2022 às 16:27
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `DQC84`
--

CREATE TABLE `DQC84` (
  `ID` int(11) NOT NULL,
  `MODEL_ID` int(11) NOT NULL,
  `FAT_PART_NO` varchar(15) NOT NULL,
  `TOTAL_LOCATION` int(11) NOT NULL,
  `UPDATE_DT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CREATE_DT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `DQC84`
--

INSERT INTO `DQC84` (`ID`, `MODEL_ID`, `FAT_PART_NO`, `TOTAL_LOCATION`, `UPDATE_DT`, `CREATE_DT`) VALUES
(8, 11, 'SD018CMAB1R', 124, '2022-05-16 13:55:49', '2022-05-16 13:55:49'),
(9, 11, 'SD018CMAB0T', 129, '2022-05-16 13:56:38', '2022-05-16 13:56:38'),
(10, 11, 'SD018CMAB0P', 2, '2022-05-16 13:58:06', '2022-05-16 13:58:06'),
(11, 11, 'SD018HANB0D', 3, '2022-05-16 13:59:02', '2022-05-16 13:59:02');

-- --------------------------------------------------------

--
-- Estrutura para tabela `DQC841`
--

CREATE TABLE `DQC841` (
  `ID` int(11) NOT NULL,
  `FAT_PART_NO_ID` int(11) NOT NULL,
  `PARTS_NO` varchar(15) NOT NULL,
  `UNT_USG` int(11) NOT NULL,
  `DESCRIPTION` longtext DEFAULT NULL,
  `REF_DESIGNATOR` longtext NOT NULL,
  `UPDATE_DT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CREATE_DT` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `DQC841`
--

INSERT INTO `DQC841` (`ID`, `FAT_PART_NO_ID`, `PARTS_NO`, `UNT_USG`, `DESCRIPTION`, `REF_DESIGNATOR`, `UPDATE_DT`, `CREATE_DT`) VALUES
(4, 9, 'HGSE5014R05', 1, 'LABEL PCB BARCODE LABEL 10X6MM 25# PLASTIC BLANK', '(null)', '2022-05-16 14:06:35', '2022-05-16 14:06:35'),
(5, 8, 'DAH10003Z04', 1, 'PCB_MULTI LAYER_10S_1OZ FR4 ENIG', 'PCB', '2022-05-16 14:10:32', '2022-05-16 14:10:32'),
(6, 11, 'SD018PMAB0P', 1, 'TEST TEST', '(null)', '2022-05-16 14:17:00', '2022-05-16 14:17:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `DQCMODEL`
--

CREATE TABLE `DQCMODEL` (
  `ID` int(11) NOT NULL,
  `MODEL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `DQCMODEL`
--

INSERT INTO `DQCMODEL` (`ID`, `MODEL`) VALUES
(11, 'SSD018'),
(12, 'SSD019'),
(27, 'SSD020');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `DQC84`
--
ALTER TABLE `DQC84`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `FAT_PART_NO` (`FAT_PART_NO`),
  ADD KEY `fk_DQCMODEL_DQC84` (`MODEL_ID`);

--
-- Índices de tabela `DQC841`
--
ALTER TABLE `DQC841`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_DQC84_DQC81` (`FAT_PART_NO_ID`);

--
-- Índices de tabela `DQCMODEL`
--
ALTER TABLE `DQCMODEL`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MODEL` (`MODEL`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `DQC84`
--
ALTER TABLE `DQC84`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `DQC841`
--
ALTER TABLE `DQC841`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `DQCMODEL`
--
ALTER TABLE `DQCMODEL`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `DQC84`
--
ALTER TABLE `DQC84`
  ADD CONSTRAINT `fk_DQCMODEL_DQC84` FOREIGN KEY (`MODEL_ID`) REFERENCES `DQCMODEL` (`ID`);

--
-- Restrições para tabelas `DQC841`
--
ALTER TABLE `DQC841`
  ADD CONSTRAINT `fk_DQC84_DQC81` FOREIGN KEY (`FAT_PART_NO_ID`) REFERENCES `DQC84` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
