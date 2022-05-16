-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 16/05/2022 às 04:27
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
(2, 12, '2aaaaaaaaa00', 8, '2022-05-15 05:57:05', '2022-05-15 05:29:18'),
(3, 11, 'EEEEEEEEEEE', 5, '2022-05-15 05:58:13', '2022-05-15 05:58:13'),
(4, 22, 'agora1', 55, '2022-05-15 06:13:47', '2022-05-15 06:13:47'),
(5, 23, '1teste1001', 62, '2022-05-15 13:44:16', '2022-05-15 12:04:13');

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
(1, 4, 'hhff11', 4, 'qwerty', 't44', '2022-05-15 18:22:46', '2022-05-15 18:22:46'),
(2, 4, 'qqqqqqq', 111111, 'sdfsdfsds', 'fsdfsdfsdf', '2022-05-15 21:19:18', '2022-05-15 21:19:18'),
(3, 5, 'EEEEE', 44, 'DFDSSAAS', 'ER6', '2022-05-15 21:48:57', '2022-05-15 21:48:57');

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
(26, '3344'),
(22, 'agora'),
(25, 'assssddd9'),
(24, 'fffffff'),
(11, 'SSD018'),
(12, 'SSD019'),
(23, 'teste1001');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `DQC841`
--
ALTER TABLE `DQC841`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `DQCMODEL`
--
ALTER TABLE `DQCMODEL`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
