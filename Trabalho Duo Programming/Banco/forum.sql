-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jul-2017 às 19:19
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome_curso`) VALUES
(1, 'Java'),
(2, 'Php'),
(3, 'C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE `nivel` (
  `id_nivel` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `nome_nivel` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `id_curso`, `nome_nivel`) VALUES
(1, 3, 'ConceitosBasicos'),
(2, 3, 'Variaveis'),
(3, 3, 'Operadores'),
(4, 3, 'ControladoresFluxo'),
(5, 3, 'Funcoes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_curso_usuario`
--

CREATE TABLE `nivel_curso_usuario` (
  `id_nivel` int(11) DEFAULT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questao`
--

CREATE TABLE `questao` (
  `questaoID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `titulo` varchar(128) NOT NULL,
  `descricao` varchar(2048) DEFAULT NULL,
  `codigodescricao` varchar(2048) DEFAULT NULL,
  `dataquestao` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questao`
--

INSERT INTO `questao` (`questaoID`, `userID`, `titulo`, `descricao`, `codigodescricao`, `dataquestao`) VALUES
(6, 7, 'xxmnxmn', 'mcncmn', 'dmndmdnmd', '2017-06-28 19:22:03'),
(3, 4, 'bla', 'nmnenm', 'dmdndm', '2017-06-27 17:09:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `id_questoes` int(11) NOT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `id_nivel` int(11) DEFAULT NULL,
  `questoes` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id_questoes`, `id_curso`, `id_nivel`, `questoes`) VALUES
(1, 3, 2, 'Qual maneira estaria correta para declarar uma variavel do tipo inteira que representa o codigo de um produto?'),
(2, 3, 3, 'O que será o valor de X ao final do seguinte código?'),
(3, 3, 3, 'Oque será o valor de X ao final do seguinte código'),
(4, 3, 3, 'Oque será o valores de X e Y ao final do seguinte código?'),
(5, 3, 4, 'Qual será o valor de CONT'),
(6, 3, 4, 'Qual será o valor de X'),
(7, 3, 4, 'Qual será o valor de X'),
(8, 3, 5, 'Oque será mostrado na tela?'),
(9, 3, 5, 'Qual será o valor de X?'),
(10, 3, 5, 'Qual será o valor de X?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `respostaID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `questaoID` int(11) NOT NULL,
  `dataresposta` datetime NOT NULL,
  `resposta` varchar(2048) NOT NULL,
  `codigoresposta` varchar(2048) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`respostaID`, `userID`, `questaoID`, `dataresposta`, `resposta`, `codigoresposta`) VALUES
(3, 7, 6, '2017-06-28 19:22:18', 'ddndmn', 'mfhjf'),
(4, 7, 6, '2017-06-28 20:25:51', 'ddndmn', 'mfhjf'),
(5, 8, 6, '2017-06-30 21:06:30', 'ccnmn', 'fnfjjf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta_questoes`
--

CREATE TABLE `resposta_questoes` (
  `id_resposta_questoes` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `id_questoes` int(11) DEFAULT NULL,
  `dataResposta` datetime DEFAULT NULL,
  `resposta` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resposta_questoes`
--

INSERT INTO `resposta_questoes` (`id_resposta_questoes`, `userID`, `id_questoes`, `dataResposta`, `resposta`) VALUES
(1, NULL, 1, NULL, 'N'),
(2, NULL, 2, NULL, 'C'),
(3, NULL, 3, NULL, 'D'),
(4, NULL, 4, NULL, 'B'),
(5, NULL, 5, NULL, 'B'),
(6, NULL, 6, NULL, 'A'),
(7, NULL, 7, NULL, 'B'),
(8, NULL, 8, NULL, 'B'),
(9, NULL, 9, NULL, 'A'),
(10, NULL, 10, NULL, 'B'),
(11, NULL, 11, NULL, 'B');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `userID` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`userID`, `username`, `email`, `senha`, `nome`) VALUES
(2, 'nai', 'teste@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'teste'),
(3, 'oooo', 'kkkk@hotmail', 'e10adc3949ba59abbe56e057f20f883e', 'testando'),
(4, 'tata', 'teste2@gmail', '827ccb0eea8a706c4c34a16891f84e7b', 'test2'),
(5, 'teste3', 'teste3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'teste3'),
(7, 'hsshhsj', 'jdjkdjk@hotmail.com', '8d70d8ab2768f232ebe874175065ead3', 'ssjshjh'),
(8, 'ndjhdjh', 'ddjdjh@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'tatyat'),
(9, 'djhdjhd', 'jdjdkj@hotmail.com', '6537e99af2c2223642df9f70a0b5afca', 'djhdhj'),
(10, 'jdhdhdhjf', 'jdhdjhdhj@hotmail.com', 'cabd314607ee07dc83c18d0526dae926', 'dmdhdjh'),
(11, 'jjjfkjfkfj', 'kdjkdkjd@kjvkvjkv', 'd2ebee8357b8b0bb8c384b131cb06297', 'kddjkdjkj'),
(12, 'jddhjdhj', 'kfjfkjfkj@gmail.com', 'b6de336aa590e16ab437f369cd642283', 'cjcjcklj'),
(13, 'klfjfkjfjk', 'dkdjkdkdj@hotmail.com', '7241ae9b63197fa6127e10df9fb1835f', 'kdjdkjfkfj'),
(14, 'jffjf', 'mdndmnmn@hotmail.com', '11cda59aad7c77057ed3cf5dbfc8340e', 'msdndmnnf'),
(15, 'djdhjddj', 'mccmncmn@hotmail.com', '00c66aaf5f2c3f49946f15c1ad2ea0d3', 'dmdmndmndmn'),
(16, 'kddkdjkdj', 'mcncmcnm@hotmail.com', '6ed6af06e348e4c193647125fe87377d', 'cmcncmn'),
(17, 'jddjdhdhdj', 'kdjdkdkj@hotmail.com', 'f1cf95c0426154c43af23ccd21e3dd26', 'fkfjkfkjfjfkj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id_nivel`,`id_curso`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indexes for table `nivel_curso_usuario`
--
ALTER TABLE `nivel_curso_usuario`
  ADD KEY `id_nivel` (`id_nivel`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_usuario` (`userID`);

--
-- Indexes for table `questao`
--
ALTER TABLE `questao`
  ADD PRIMARY KEY (`questaoID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id_questoes`),
  ADD KEY `id_curso` (`id_curso`),
  ADD KEY `id_nivel` (`id_nivel`);

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`respostaID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `questaoID` (`questaoID`);

--
-- Indexes for table `resposta_questoes`
--
ALTER TABLE `resposta_questoes`
  ADD PRIMARY KEY (`id_resposta_questoes`),
  ADD KEY `userID` (`userID`),
  ADD KEY `id_questoes` (`id_questoes`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `questao`
--
ALTER TABLE `questao`
  MODIFY `questaoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id_questoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `resposta`
--
ALTER TABLE `resposta`
  MODIFY `respostaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `resposta_questoes`
--
ALTER TABLE `resposta_questoes`
  MODIFY `id_resposta_questoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
