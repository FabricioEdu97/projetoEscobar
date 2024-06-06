-- phpMyAdmin SQL Dump





-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/06/2024 às 00:41
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `pessoa_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `email`, `senha`, `pessoa_id`) VALUES
(2, 'hahaahh', '97', NULL),
(16, 'ff', '9', NULL),
(19, '', '', NULL),
(33, 'f', 'a', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carro`
--

CREATE TABLE `carro` (
  `id` int(11) NOT NULL,
  `modelo_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ano_fabricacao` year(4) NOT NULL,
  `marca_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carro`
--

INSERT INTO `carro` (`id`, `modelo_id`, `nome`, `ano_fabricacao`, `marca_id`) VALUES
(17, 1, 'POLO', '2002', 1),
(18, 2, 'TIGUAN', '2009', 1),
(19, 3, 'JETTA', '2006', 1),
(20, 4, 'AMAROK', '2009', 1),
(35, 3, 'cronus', '2018', 2),
(36, 4, 'toro', '2016', 2),
(37, 1, 'ONIX', '2012', 3),
(38, 2, 'TRACKER', '2005', 3),
(39, 3, 'CRUZE', '2011', 3),
(40, 4, 'HILLUX', '1968', 3),
(41, 1, 'FOCUS', '1998', 4),
(42, 2, 'EDGE', '2006', 4),
(43, 3, 'FUSION', '2006', 4),
(44, 4, 'RANGER', '2005', 4),
(45, 1, '', '1970', 1),
(46, 1, '', '1980', 2),
(47, 1, '', '1966', 3),
(48, 1, '', '1966', 3),
(49, 1, '', '1966', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `estado_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cidade`
--

INSERT INTO `cidade` (`id`, `nome`, `estado_id`) VALUES
(1, 'Rio Branco', 1),
(2, 'Maceió', 2),
(3, 'Macapá', 3),
(4, 'Manaus', 4),
(5, 'Salvador', 5),
(6, 'Fortaleza', 6),
(7, 'Brasília', 7),
(8, 'Vitória', 8),
(9, 'Goiânia', 9),
(10, 'São Luís', 10),
(11, 'Cuiabá', 11),
(12, 'Campo Grande', 12),
(13, 'Belo Horizonte', 13),
(14, 'Belém', 14),
(15, 'João Pessoa', 15),
(16, 'Curitiba', 16),
(17, 'Recife', 17),
(18, 'Teresina', 18),
(19, 'Rio de Janeiro', 19),
(20, 'Natal', 20),
(21, 'Porto Alegre', 21),
(22, 'Porto Velho', 22),
(23, 'Boa Vista', 23),
(26, 'Macapá', 3),
(27, 'Manaus', 4),
(28, 'Salvador', 5),
(29, 'Fortaleza', 6),
(30, 'Brasília', 7),
(31, 'Vitória', 8),
(32, 'Goiânia', 9),
(33, 'São Luís', 10),
(34, 'Cuiabá', 11),
(35, 'Campo Grande', 12),
(36, 'Belo Horizonte', 13),
(37, 'Belém', 14),
(38, 'João Pessoa', 15),
(39, 'Curitiba', 16),
(40, 'Recife', 17),
(41, 'Teresina', 18),
(42, 'Rio de Janeiro', 19),
(43, 'Natal', 20),
(44, 'Porto Alegre', 21),
(45, 'Porto Velho', 22),
(46, 'Boa Vista', 23),
(47, 'Florianópolis', 24),
(48, 'São Paulo', 25),
(49, 'Aracaju', 26),
(50, 'Palmas', 27),
(51, 'Rio Branco', 1),
(52, 'Maceió', 2),
(53, 'Macapá', 3),
(54, 'Manaus', 4),
(55, 'Salvador', 5),
(56, 'Fortaleza', 6),
(57, 'Brasília', 7),
(58, 'Vitória', 8),
(59, 'Goiânia', 9),
(60, 'São Luís', 10),
(61, 'Cuiabá', 11),
(62, 'Campo Grande', 12),
(63, 'Belo Horizonte', 13),
(64, 'Belém', 14),
(65, 'João Pessoa', 15),
(66, 'Curitiba', 16),
(67, 'Recife', 17),
(68, 'Teresina', 18),
(69, 'Rio de Janeiro', 19),
(70, 'Natal', 20),
(71, 'Porto Alegre', 21),
(72, 'Porto Velho', 22),
(73, 'Boa Vista', 23),
(74, 'Florianópolis', 24),
(75, 'São Paulo', 25),
(76, 'Aracaju', 26),
(77, 'Palmas', 27);

-- --------------------------------------------------------

--
-- Estrutura para tabela `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estado`
--

INSERT INTO `estado` (`id`, `nome`) VALUES
(1, 'Acre'),
(2, 'Alagoas'),
(3, 'Amapá'),
(4, 'Amazonas'),
(5, 'Bahia'),
(6, 'Ceará'),
(7, 'Distrito Federal'),
(8, 'Espírito Santo'),
(9, 'Goiás'),
(10, 'Maranhão'),
(11, 'Mato Grosso'),
(12, 'Mato Grosso do Sul'),
(13, 'Minas Gerais'),
(14, 'Pará'),
(15, 'Paraíba'),
(16, 'Paraná'),
(17, 'Pernambuco'),
(18, 'Piauí'),
(19, 'Rio de Janeiro'),
(20, 'Rio Grande do Norte'),
(21, 'Rio Grande do Sul'),
(22, 'Rondônia'),
(23, 'Roraima'),
(24, 'Santa Catarina'),
(25, 'São Paulo'),
(26, 'Sergipe'),
(27, 'Tocantins'),
(28, 'Acre'),
(29, 'Alagoas'),
(30, 'Amapá'),
(31, 'Amazonas'),
(32, 'Bahia'),
(33, 'Ceará'),
(34, 'Distrito Federal'),
(35, 'Espírito Santo'),
(36, 'Goiás'),
(37, 'Maranhão'),
(38, 'Mato Grosso'),
(39, 'Mato Grosso do Sul'),
(40, 'Minas Gerais'),
(41, 'Pará'),
(42, 'Paraíba'),
(43, 'Paraná'),
(44, 'Pernambuco'),
(45, 'Piauí'),
(46, 'Rio de Janeiro'),
(47, 'Rio Grande do Norte'),
(48, 'Rio Grande do Sul'),
(49, 'Rondônia'),
(50, 'Roraima'),
(51, 'Santa Catarina'),
(52, 'São Paulo'),
(53, 'Sergipe'),
(54, 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura para tabela `marca`
--

CREATE TABLE `marca` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `marca`
--

INSERT INTO `marca` (`id`, `nome`) VALUES
(1, 'volkswagen'),
(2, 'fiat'),
(3, 'chevrolet'),
(4, 'ford');

-- --------------------------------------------------------

--
-- Estrutura para tabela `modelo`
--

CREATE TABLE `modelo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `modelo`
--

INSERT INTO `modelo` (`id`, `nome`) VALUES
(1, 'Hatch'),
(2, 'SUV'),
(3, 'Sedan'),
(4, 'Picape');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cidade_id` int(11) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `cpf` int(11) NOT NULL,
  `cadastro_id` int(11) DEFAULT NULL,
  `estado` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `cidade_id`, `estado_id`, `cpf`, `cadastro_id`, `estado`, `cidade`, `sexo`) VALUES
(1, 'eu memo', NULL, NULL, 506, NULL, '0', '0', ''),
(2, 'sou eu dnv', NULL, NULL, 0, NULL, '0', '0', ''),
(4, 'ffs', NULL, NULL, 50666666, NULL, 'spppp', 'basssss', 'n'),
(5, 'tyrtyh', NULL, NULL, 4556, NULL, 'as', 'ba', 'as'),
(7, 'gfg', NULL, NULL, 0, NULL, 'fg', 'gfg', 'fg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `pessoa_id` (`pessoa_id`);

--
-- Índices de tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carro_ibfk_1` (`modelo_id`),
  ADD KEY `fk_carro_marca` (`marca_id`);

--
-- Índices de tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado_id` (`estado_id`);

--
-- Índices de tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cidade_id` (`cidade_id`),
  ADD KEY `estado_id` (`estado_id`),
  ADD KEY `cadastro_id` (`cadastro_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`pessoa_id`) REFERENCES `pessoa` (`id`);

--
-- Restrições para tabelas `carro`
--
ALTER TABLE `carro`
  ADD CONSTRAINT `carro_ibfk_1` FOREIGN KEY (`modelo_id`) REFERENCES `modelo` (`id`),
  ADD CONSTRAINT `fk_carro_marca` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id`);

--
-- Restrições para tabelas `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`);

--
-- Restrições para tabelas `pessoa`
--
ALTER TABLE `pessoa`
  ADD CONSTRAINT `pessoa_ibfk_1` FOREIGN KEY (`cidade_id`) REFERENCES `cidade` (`id`),
  ADD CONSTRAINT `pessoa_ibfk_2` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`),
  ADD CONSTRAINT `pessoa_ibfk_4` FOREIGN KEY (`cadastro_id`) REFERENCES `cadastro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
