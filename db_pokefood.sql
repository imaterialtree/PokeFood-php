-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2024 at 03:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pokefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_comida`
--

CREATE TABLE `tb_comida` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `ingredientes` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `restaurante_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_comida`
--

INSERT INTO `tb_comida` (`id`, `nome`, `descricao`, `ingredientes`, `preco`, `imagem`, `restaurante_id`) VALUES
(1, 'Almoço Pikachu', 'Um delicioso e criativo almoço com temática Pikachu', 'Arroz, hamburger pikachu, feijão', '35.00', 'images/comida/OIP.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_restaurante`
--

CREATE TABLE `tb_restaurante` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_restaurante`
--

INSERT INTO `tb_restaurante` (`id`, `nome`, `descricao`, `categoria`, `url`) VALUES
(1, 'PokeDango', 'Experiemente saborosos dango de vários sabores.\r\n\r\nDango é um bolinho japonês feito de mochiko, relacionado ao mochi. É geralmente servido com chá verde.', 'Doces', ''),
(12, 'editado', 'asdf', 'cat', '../../images/restaurante/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'naoki', 'naoki@email.com', 'senha'),
(2, 'wesley', 'wesley@email.com', 'senha'),
(3, '3da541559918a808c2402bba5012f6c60b27661c', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_comida`
--
ALTER TABLE `tb_comida`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurante_id` (`restaurante_id`);

--
-- Indexes for table `tb_restaurante`
--
ALTER TABLE `tb_restaurante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_comida`
--
ALTER TABLE `tb_comida`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_restaurante`
--
ALTER TABLE `tb_restaurante`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_comida`
--
ALTER TABLE `tb_comida`
  ADD CONSTRAINT `tb_comida_ibfk_1` FOREIGN KEY (`restaurante_id`) REFERENCES `tb_restaurante` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
