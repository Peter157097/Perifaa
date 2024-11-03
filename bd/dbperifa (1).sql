-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/11/2024 às 00:20
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbperifa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idVendedor` int(11) NOT NULL,
  `mensagem` text NOT NULL,
  `enviado_por_cliente` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `idCliente`, `idVendedor`, `mensagem`, `enviado_por_cliente`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'a', 1, '2024-10-28 02:30:16', '2024-10-28 02:30:16'),
(2, 2, 4, 'asdasd', 1, '2024-10-28 02:30:24', '2024-10-28 02:30:24'),
(3, 2, 4, 'ads', 0, '2024-10-28 02:31:27', '2024-10-28 02:31:27'),
(4, 2, 4, 'asdasdasd', 0, '2024-10-28 02:31:31', '2024-10-28 02:31:31'),
(5, 2, 4, 'asdasd', 0, '2024-10-28 02:31:33', '2024-10-28 02:31:33'),
(6, 2, 4, 'asdasda', 0, '2024-10-28 02:31:34', '2024-10-28 02:31:34'),
(7, 24, 4, 'asd', 1, '2024-10-28 02:33:40', '2024-10-28 02:33:40'),
(9, 24, 4, 'droga', 0, '2024-10-28 02:38:15', '2024-10-28 02:38:15'),
(10, 24, 4, 'a', 0, '2024-10-28 02:43:40', '2024-10-28 02:43:40'),
(11, 24, 4, 'opa', 0, '2024-10-28 02:44:02', '2024-10-28 02:44:02'),
(12, 24, 4, 'eae ', 1, '2024-10-28 02:44:13', '2024-10-28 02:44:13'),
(13, 24, 4, 'as', 1, '2024-10-28 02:47:35', '2024-10-28 02:47:35'),
(14, 24, 4, 'eae', 1, '2024-10-28 02:48:39', '2024-10-28 02:48:39'),
(15, 24, 4, 'slv cachorro magro', 0, '2024-10-28 02:49:08', '2024-10-28 02:49:08'),
(16, 24, 0, 'aas', 1, '2024-11-02 03:49:25', '2024-11-02 03:49:25'),
(17, 24, 0, 'eae', 1, '2024-11-02 03:49:42', '2024-11-02 03:49:42'),
(18, 0, 0, 'asd', 0, '2024-11-02 03:49:50', '2024-11-02 03:49:50'),
(19, 24, 4, 'eae', 1, '2024-11-02 03:55:01', '2024-11-02 03:55:01'),
(20, 24, 4, 'slv d', 0, '2024-11-02 03:57:49', '2024-11-02 03:57:49'),
(21, 24, 4, 'só na paz de cristo?', 1, '2024-11-02 03:57:58', '2024-11-02 03:57:58'),
(22, 24, 4, 'logico', 0, '2024-11-02 03:58:03', '2024-11-02 03:58:03'),
(23, 24, 4, 'oii', 1, '2024-11-02 04:00:25', '2024-11-02 04:00:25'),
(24, 24, 3, 'slv', 1, '2024-11-02 04:00:40', '2024-11-02 04:00:40'),
(25, 24, 4, 'aa', 1, '2024-11-02 04:21:32', '2024-11-02 04:21:32'),
(26, 24, 4, 'caramba que chav', 1, '2024-11-02 04:24:15', '2024-11-02 04:24:15'),
(27, 24, 3, 'eae', 1, '2024-11-02 04:24:38', '2024-11-02 04:24:38'),
(28, 24, 4, 'a', 0, '2024-11-02 17:21:02', '2024-11-02 17:21:02'),
(29, 24, 4, 'opa', 0, '2024-11-02 17:21:07', '2024-11-02 17:21:07'),
(30, 2, 4, 'a', 0, '2024-11-02 17:35:26', '2024-11-02 17:35:26'),
(31, 24, 3, 'ata', 1, '2024-11-02 17:38:13', '2024-11-02 17:38:13'),
(32, 24, 4, 'eae', 0, '2024-11-02 17:39:34', '2024-11-02 17:39:34'),
(33, 24, 4, 'só salve', 1, '2024-11-02 17:39:50', '2024-11-02 17:39:50'),
(34, 24, 4, 'tem que ser dinamica', 1, '2024-11-02 17:40:07', '2024-11-02 17:40:07'),
(35, 24, 4, 'sav', 0, '2024-11-02 17:43:03', '2024-11-02 17:43:03'),
(36, 24, 4, 'a', 0, '2024-11-02 18:01:35', '2024-11-02 18:01:35'),
(37, 24, 4, 'ae', 1, '2024-11-02 18:02:23', '2024-11-02 18:02:23'),
(38, 24, 4, 'aaaa', 0, '2024-11-02 18:02:30', '2024-11-02 18:02:30'),
(39, 24, 4, 'slv', 0, '2024-11-02 18:02:34', '2024-11-02 18:02:34'),
(40, 24, 4, 'a', 1, '2024-11-02 18:02:38', '2024-11-02 18:02:38'),
(41, 24, 4, 'asd', 0, '2024-11-02 18:03:14', '2024-11-02 18:03:14'),
(42, 24, 4, 'eae', 1, '2024-11-02 18:05:18', '2024-11-02 18:05:18'),
(43, 24, 4, 'eae', 0, '2024-11-02 18:05:25', '2024-11-02 18:05:25'),
(44, 24, 4, 'salve', 0, '2024-11-02 18:12:00', '2024-11-02 18:12:00'),
(45, 24, 4, 'a', 0, '2024-11-02 18:12:07', '2024-11-02 18:12:07'),
(46, 24, 4, 'slk cz', 1, '2024-11-02 18:13:15', '2024-11-02 18:13:15'),
(47, 24, 4, 'a', 0, '2024-11-02 18:15:38', '2024-11-02 18:15:38'),
(48, 24, 4, 'agora sim', 1, '2024-11-02 18:17:57', '2024-11-02 18:17:57'),
(49, 24, 4, 'aa', 0, '2024-11-02 18:25:30', '2024-11-02 18:25:30'),
(50, 24, 4, 'teste eniar mensagem teste', 1, '2024-11-02 18:29:13', '2024-11-02 18:29:13'),
(51, 24, 4, 'sale d to vendo bda 8', 1, '2024-11-02 18:36:10', '2024-11-02 18:36:10'),
(52, 24, 4, 'sla ', 1, '2024-11-02 18:37:23', '2024-11-02 18:37:23'),
(53, 24, 4, 'eae', 1, '2024-11-02 18:55:24', '2024-11-02 18:55:24'),
(54, 24, 3, 'asdsasaasda', 1, '2024-11-02 18:56:05', '2024-11-02 18:56:05'),
(55, 24, 3, 'ox', 1, '2024-11-02 18:56:14', '2024-11-02 18:56:14'),
(56, 24, 4, 'azideia', 1, '2024-11-02 18:56:21', '2024-11-02 18:56:21'),
(57, 24, 4, 'a n prc', 0, '2024-11-02 18:56:38', '2024-11-02 18:56:38'),
(58, 24, 3, 'eae', 1, '2024-11-03 01:03:34', '2024-11-03 01:03:34'),
(59, 24, 3, 'iae coiote', 1, '2024-11-03 01:03:44', '2024-11-03 01:03:44'),
(60, 24, 3, 'aeae', 1, '2024-11-03 01:06:26', '2024-11-03 01:06:26'),
(61, 24, 3, 'sae', 1, '2024-11-03 01:07:54', '2024-11-03 01:07:54'),
(62, 24, 3, 'asdwasdwadadadadadadd', 1, '2024-11-03 01:07:57', '2024-11-03 01:07:57'),
(63, 24, 3, 'AE porra', 1, '2024-11-03 01:08:00', '2024-11-03 01:08:00'),
(64, 24, 3, 'iae ', 1, '2024-11-03 01:08:23', '2024-11-03 01:08:23'),
(65, 24, 3, 's', 1, '2024-11-03 01:08:25', '2024-11-03 01:08:25'),
(66, 24, 3, 'sadwasd', 1, '2024-11-03 01:08:27', '2024-11-03 01:08:27'),
(67, 24, 3, 'eae', 1, '2024-11-03 01:11:44', '2024-11-03 01:11:44'),
(68, 24, 3, 'adasdsadad', 1, '2024-11-03 01:11:47', '2024-11-03 01:11:47'),
(69, 24, 3, 'slv dog', 1, '2024-11-03 01:11:56', '2024-11-03 01:11:56'),
(70, 24, 4, 'arlindo na voz', 1, '2024-11-03 01:12:08', '2024-11-03 01:12:08'),
(71, 24, 4, 'chav', 0, '2024-11-03 01:12:52', '2024-11-03 01:12:52'),
(72, 24, 4, 'chav', 1, '2024-11-03 01:13:03', '2024-11-03 01:13:03'),
(73, 2, 4, 'esse aí tem q logar', 0, '2024-11-03 01:13:21', '2024-11-03 01:13:21'),
(74, 2, 4, 'mo trampo', 0, '2024-11-03 01:13:30', '2024-11-03 01:13:30'),
(75, 24, 4, 'qual', 1, '2024-11-03 01:13:42', '2024-11-03 01:13:42'),
(76, 24, 4, 'esse peter aí', 0, '2024-11-03 01:13:56', '2024-11-03 01:13:56'),
(77, 24, 4, 'ata ', 1, '2024-11-03 01:14:06', '2024-11-03 01:14:06'),
(78, 24, 3, 'sda', 1, '2024-11-03 01:17:09', '2024-11-03 01:17:09'),
(79, 24, 4, 'oiiiiii', 0, '2024-11-03 03:09:07', '2024-11-03 03:09:07'),
(80, 2, 4, 'oi', 0, '2024-11-03 03:10:59', '2024-11-03 03:10:59'),
(81, 24, 4, 'oieeeeeee', 1, '2024-11-03 03:11:30', '2024-11-03 03:11:30'),
(82, 24, 4, 'kkkkk e nois cachorro', 0, '2024-11-03 03:11:46', '2024-11-03 03:11:46'),
(83, 2, 4, 'salve dawg', 0, '2024-11-03 03:13:37', '2024-11-03 03:13:37'),
(84, 24, 3, 'oi', 1, '2024-11-03 03:20:14', '2024-11-03 03:20:14'),
(85, 24, 4, 'oi', 1, '2024-11-03 03:20:22', '2024-11-03 03:20:22'),
(86, 24, 4, 'asdasdasd', 1, '2024-11-03 03:20:27', '2024-11-03 03:20:27'),
(87, 24, 3, 'asdasd', 1, '2024-11-03 03:20:31', '2024-11-03 03:20:31'),
(88, 24, 4, 'eae', 0, '2024-11-03 03:20:40', '2024-11-03 03:20:40'),
(89, 2, 4, 'eae', 0, '2024-11-03 03:22:05', '2024-11-03 03:22:05'),
(90, 24, 4, 'oies', 0, '2024-11-03 03:36:08', '2024-11-03 03:36:08'),
(91, 24, 4, 'asd', 0, '2024-11-03 03:36:11', '2024-11-03 03:36:11'),
(92, 24, 4, 'asd', 0, '2024-11-03 03:36:13', '2024-11-03 03:36:13'),
(93, 24, 4, 'ww', 0, '2024-11-03 03:36:16', '2024-11-03 03:36:16'),
(94, 24, 4, 'tlg ne ', 0, '2024-11-03 03:36:21', '2024-11-03 03:36:21'),
(95, 24, 4, 'anan', 0, '2024-11-03 03:36:26', '2024-11-03 03:36:26'),
(96, 24, 4, 'asd', 0, '2024-11-03 04:06:46', '2024-11-03 04:06:46'),
(97, 24, 4, 'awdsa', 0, '2024-11-03 04:06:49', '2024-11-03 04:06:49'),
(98, 24, 4, 'asd', 0, '2024-11-03 04:20:50', '2024-11-03 04:20:50'),
(99, 2, 4, 'asd', 0, '2024-11-03 04:21:35', '2024-11-03 04:21:35'),
(101, 2, 4, 'tses', 0, '2024-11-03 04:23:19', '2024-11-03 04:23:19'),
(102, 2, 4, 'asd', 0, '2024-11-03 04:23:46', '2024-11-03 04:23:46'),
(103, 24, 4, 'asd', 0, '2024-11-03 04:31:26', '2024-11-03 04:31:26'),
(104, 24, 3, 'iae', 1, '2024-11-03 04:39:50', '2024-11-03 04:39:50'),
(105, 24, 4, 'poi', 1, '2024-11-03 04:40:03', '2024-11-03 04:40:03'),
(106, 24, 3, 'lk', 1, '2024-11-03 11:57:38', '2024-11-03 11:57:38'),
(107, 24, 3, 'eae pae suave?', 1, '2024-11-03 23:14:10', '2024-11-03 23:14:10'),
(108, 24, 4, 'eae pae suave?', 1, '2024-11-03 23:15:03', '2024-11-03 23:15:03'),
(109, 24, 4, 'slv', 0, '2024-11-03 23:15:29', '2024-11-03 23:15:29'),
(110, 24, 3, 'eae', 1, '2024-11-03 23:16:27', '2024-11-03 23:16:27'),
(111, 24, 3, 'eae', 1, '2024-11-03 23:17:51', '2024-11-03 23:17:51'),
(112, 24, 4, 'aa', 0, '2024-11-03 23:18:21', '2024-11-03 23:18:21'),
(113, 24, 4, 'vendedor', 1, '2024-11-03 23:19:20', '2024-11-03 23:19:20'),
(114, 24, 4, 'da hora', 1, '2024-11-03 23:19:37', '2024-11-03 23:19:37');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadministrador`
--

CREATE TABLE `tbadministrador` (
  `idAdministrador` int(11) NOT NULL,
  `nomeAdministrador` varchar(250) NOT NULL,
  `emailAdministrador` varchar(50) NOT NULL,
  `senhaAdministrador` varchar(250) NOT NULL,
  `imagemAdministrador` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadministrador`
--

INSERT INTO `tbadministrador` (`idAdministrador`, `nomeAdministrador`, `emailAdministrador`, `senhaAdministrador`, `imagemAdministrador`) VALUES
(1, '', 'testeadm@gmail.com', '$2y$10$lBnArx2k6ndm.5mJ.ZzkfevNzI4KwnwPTDXMM0fYIyIJJl0./FpZu', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcarrinho`
--

CREATE TABLE `tbcarrinho` (
  `idCarrinho` int(11) NOT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcarrinho`
--

INSERT INTO `tbcarrinho` (`idCarrinho`, `idProduto`, `idCliente`) VALUES
(1, 2, 13),
(2, 10, 15),
(3, 4, 24);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcategoriaproduto`
--

CREATE TABLE `tbcategoriaproduto` (
  `idCategoriaProduto` int(11) NOT NULL,
  `nomeCategoriaProduto` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcategoriaproduto`
--

INSERT INTO `tbcategoriaproduto` (`idCategoriaProduto`, `nomeCategoriaProduto`) VALUES
(1, 'Camiseta'),
(2, 'Calça'),
(3, 'Vestido'),
(4, 'Jaqueta'),
(5, 'Shorts'),
(6, 'Saia'),
(7, 'Blusa'),
(8, 'Tenis'),
(9, 'Bermuda'),
(10, 'Casaco');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(100) NOT NULL,
  `cpfCliente` varchar(15) NOT NULL,
  `emailCliente` varchar(70) NOT NULL,
  `senhaCliente` varchar(140) NOT NULL,
  `logradouroCliente` varchar(50) NOT NULL,
  `numeroCliente` varchar(15) NOT NULL,
  `complementoCliente` varchar(50) DEFAULT NULL,
  `bairroCliente` varchar(140) NOT NULL,
  `cepCliente` varchar(10) NOT NULL,
  `cidadeCliente` varchar(30) NOT NULL,
  `estadoCliente` varchar(30) NOT NULL,
  `imagemCliente` varchar(255) DEFAULT NULL,
  `numCasaCliente` int(11) DEFAULT NULL,
  `preferencia` enum('masculina','feminina') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `nomeCliente`, `cpfCliente`, `emailCliente`, `senhaCliente`, `logradouroCliente`, `numeroCliente`, `complementoCliente`, `bairroCliente`, `cepCliente`, `cidadeCliente`, `estadoCliente`, `imagemCliente`, `numCasaCliente`, `preferencia`) VALUES
(1, 'rer', 'rer', 'rer@gmail.com', 'rer', 'rer', 'rer', 're', 're', 're', 're', 'er', NULL, NULL, NULL),
(2, 'Peter', '132.156.166-73', 'petergomes@gmail.com', '$2y$10$teywkxiijBvjis9RB4QRjuMRw94LKpJ7g16Q9Q5cKtppIxRD1fkAC', 'PEe', '11986529942', 'we', 'we', '08451100', 'Arapiraca', 'AL', NULL, NULL, NULL),
(3, 'peter', '132.156.166-73', 'marcus@gmail.com', '$2y$10$hKk2tWek78LYlxE.pujnoeXdgOy2vlveFb6EmGbk7BNljxZae/YsC', 'PEe', '11986529942', 'we', 'we', '08451100', 'Bayeux', 'PB', 'images/perfil/1724448764.jpg', NULL, NULL),
(4, 'Eduardo da Silva Nascimento', '24056783810', 'mundomelhorltd@gmail.com', '$2y$10$A.XmoxU0Hobmfy.rR.I3n.5MXWx4V1VBPVgj5qxs01pb4ydwwbaRm', 'Rua Doutor Wilson issamo minada', '11951788048', 'sda', 'VIla curuçá', '08031400', 'Porto Alegre', 'RS', 'images/perfil/1724475833.png', NULL, NULL),
(5, 'Eduardo da Silva Nascimento', '24056783810', 'eduardo@gmail.com', '$2y$10$xsabscYz7EyVKXwcfVss0.xbQosCtTYqKwGiQ1lA2Jc3/eDm9cAdm', 'Rua Doutor Wilson Issamo Minada', '11951788048', 'a', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/perfil/1724531106.jpg', NULL, NULL),
(6, 'Eduardo da Silva Nascimento', '24056783810', 'teste123123@gmail.com', '$2y$10$2w5ljazdXLagZ2IJcTURTeQvOAr2K6abyfJXJDkBj0Fa9Kp3ERh0W', 'Rua Doutor Wilson Issamo Minada', '11951788048', 'a', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', NULL, NULL, NULL),
(7, 'NADIA AUGUSTA DA SILVA', '24056783810', 'nnadiasilva@gmail.com', '$2y$10$3ASRp4C/YSGxJ3d5oYz9cOambtHpgoJvf/Yl6RIugDbYhxd4PZ4Ji', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/perfil/1724613226.png', NULL, NULL),
(8, 'Eduardo da Silva Nascimento', '24056783810', 'we@gmail.com', '$2y$10$.Kfpmk1kn5noQsaHEEkhSeqChcEDYNzwyXUnnZIpmEfDjR87QaqIO', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/perfil/1724543305.jpg', NULL, NULL),
(9, 'Luiz Fernando', '12312312312', 'fernando123@gmail.com', '$2y$10$Bh1cgkLV7QBRhGMIiCzqAObfHHyLUv9rRUSLa5nBwLh2imhOUyGw.', 'Rua Baía da Guanabara', '11123123123', 'casa 2', 'Jardim Fanganiello', '08450462', 'São Paulo', 'SP', 'images/perfil/1724543501.jpg', NULL, NULL),
(10, 'Eduardo da Silva Nascimento', '24056783810', 'eduardo1234@gmail.com', '$2y$10$Sr/UT9L869MPPl7VsF72muS7.wK2wNcqnNEfBrsqOHROeqFKezfn.', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/perfil/1724564073.png', NULL, NULL),
(11, 'peter', '132.156.166-73', 'marcus123@gmail.com', '$2y$10$.Uz9uc8FG21OtuK2mAwlZ.0mdQklCkl4SvWzTWQWMwAEeSQ.9dQ26', 'Rua Francisco Orellana', '11986529942', 'we', 'Vila Iolanda(Lajeado)', '08451100', 'São Paulo', 'SP', 'images/logo3.jpeg', 40, NULL),
(12, 'peter', '132.156.166-73', 'ppp@gmail.com', '$2y$10$bK.EcqJ1FWyeXpHL37Htl.B5j.IwocljOeMYRy7E9EcQ1qU9CE5Ru', 'Rua Francisco Orellana', '11986529942', 'we', 'Vila Iolanda(Lajeado)', '08451100', 'São Paulo', 'SP', 'images/logo3.jpeg', 40, NULL),
(13, 'Eduardo da Silva Nascimento', '24056783810', 'xarpteste@gmail.com', '$2y$10$YsQAMOWZu.GczvITyn.QX.tofF4zXn5D2Ie545K57gCrsYi9zA5Sa', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 12, NULL),
(14, 'NADIA AUGUSTA DA SILVA', '24056783810', 'testeaa@gmail.com', '$2y$10$dCww.PyukFNJnRL9T/wOkekeTMLhwbJjN5OAZNgvIVeNs2Ht6hoW.', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 15, NULL),
(15, 'uioyyo', 'yioiuuiu', 'dou2@gmail.com', '$2y$10$6pkMkmzN6RIffWJB7jIfmugpMrw.GcRRjyV/tL7KvxAyki4SQA2SO', 'Rua São Lázaro', 'yi', '525', 'Jardim São Lázaro', '08541100', 'Ferraz de Vasconcelos', 'SP', 'images/logo3.jpeg', 5252, NULL),
(16, 'NADIA AUGUSTA DA SILVA', '24056783810', 'eduardopreferenciateste@gmail.com', '$2y$10$iagco8so/HOkBuTUwnp0o.m./DY0HDdhEJNfQernbnEZKXEAHiyTy', 'Rua Doutor Wilson Issamo Minada', '11951788048', '12', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 12, NULL),
(17, 'NADIA AUGUSTA DA SILVA', '24056783810', 'eduardopreferenciateste1@gmail.com', '$2y$10$ZwxfLgnHkZDcVB75bzEDzOHnAzlA2R5XxBknlBotViFRN2MmndGBG', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 12, 'feminina'),
(18, 'NADIA AUGUSTA DA SILVA', '24056783810', 'marcusvini@gmail.com', '$2y$10$wudNoxR6ix9/uQiqCDkgoeI8Bo6SvO9F2ZZVKOJHgKWk2yWXV5IIi', 'Rua Doutor Wilson Issamo Minada', '11951788048', 'Casa', 'Jardim Jaraguá (Itaim Paulista)', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 12, 'feminina'),
(19, 'Eduardo da Silva Nascimento', '12', 'mundomelhorltd@gmail.com', '$2y$10$.hEQiU9aYp5ycqM55jMeAu/Zp59sgEtlxPC/tCj1bLCxrhxcTd9Rm', 'Rua Francisco Orellana', '11951788048', '12', 'Vila Iolanda(Lajeado)', '08451-100', 'São Paulo', 'SP', 'images/logo3.jpeg', 12, 'feminina'),
(20, 'NADIA AUGUSTA DA SILVA', '24056783810', 'mundomelhorltd@gmail.com', '$2y$10$mIhLTewL3hlTTgdZcwC4LuWfYXukEXQX4/.gJKZXQvhIo3kJiqhs.', 'Rua Doutor Wilson Issamo Minada', '11951788048', '12', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 12, 'feminina'),
(21, 'NADIA AUGUSTA DA SILVA', '24056783810', 'mundomelhorltd@gmail.com', '$2y$10$08mA1oic/9pOvw9M0ynGHO6yE67KFu50iaLjVMUEGokLD/ElJHMyW', 'Rua Doutor Wilson Issamo Minada', '11951788048', '12', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 12, 'masculina'),
(22, 'NADIA AUGUSTA DA SILVA', '24056783810', 'mundomelhorltd1221233@gmail.com', '$2y$10$EbEpernJWhULvGWa.HiYOuEY6RDAw2hU8aWsMCk6gLqlvQ7NuXYWW', 'Rua Doutor Wilson Issamo Minada', '11951788048', '12', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 12, 'feminina'),
(23, 'Marcus', '24056783810', 'marcusvini123@gmail.com', '$2y$10$LV.rnUsgkl3vjSkRU8dQlepnW5x23gF8EtT6epobRDk0/0P9jeUXy', 'Rua Piraitá', '11958030871', 'Casa', 'Jardim Jaraguá (Itaim Paulista)', '08160280', 'São Paulo', 'SP', 'images/logo3.jpeg', 12, 'masculina'),
(24, 'arlindo', '24056783810', 'testePerfil@gmail.com', '$2y$10$V1cVE26AWsGcZw8DI4VaEOZiJVW0YmvOQhCeCK8WGEi1srJBTIWNa', 'Rua Doutor Wilson Issamo Minada', '11951788048', '12', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/1.png', 12, 'masculina'),
(27, 'Sandro', '24056783810', 'testePerfil2@gmail.com', '$2y$10$QEq2kIe8p5jBqg8C7qTOouvobu.GWg47MoezqNnPGMRJn0nYQoc4a', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', NULL, 12, 'feminina'),
(28, 'bernardo', '3248326438', 'bernardo@gmail.com', '$2y$10$wWQ8BGPIim3wtwvSfjFQcezHaQVWmreMTk3YkDA1D2/m/TMTOA/wy', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/2.png', 12, 'feminina'),
(29, 'bernardo', '24056783810', 'bernardo@gmail.com', '$2y$10$g/ZanHwmMmsl1NBdM1R1V.p4peupBQkUAln4USBy8UHyifM9EBcFa', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/2.png', 12, 'feminina'),
(30, 'Solange', '24056783810', 'solange@gmail.com', '$2y$10$n0wUxNA0tu3AijqE/2NGaOecEZ8tSnhHfAbQzK8f9bp4CM2ZZSiCO', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', NULL, 12, 'feminina'),
(31, 'Vivian', '24056783810', 'vivian@gmail.com', '$2y$10$pcn0IK9DwaTA01BWBpLpfeJ3VGkpmy1BfiuYMKg2sQ4wbQLF1wuOm', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', NULL, 12, 'feminina'),
(32, 'Sandrox', '24056783810', 'sandrox@gmail.com', '$2y$10$bu.fOnawSgSO1cVqT1UWwOFdoP9UKanGNLbBsAzLuoVnKvWb8Fyfa', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/19.png', 12, 'feminina'),
(33, 'Matheus', '24056783810', 'matheus15@gmail.com', '$2y$10$s3pbiEWB4AHJEdUfNwgbD.2RgsgghGULjdXDv3mLLkfw42UMbcb.u', 'Rua Doutor Wilson Issamo Minada', '11951788048', '12', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/13.png', 123, 'feminina'),
(34, 'nando', '1231231231', 'nando@gmail.com', '$2y$10$dWOKBkR49WftafaSY.yAAeSU3QYkiWZMUqyD/SLPAZfOCxNKRUTte', 'Rua Baía da Guanabara', '12312312', 'casa 2', 'Jardim Fanganiello', '08450462', 'São Paulo', 'SP', 'images/14.png', 32, 'masculina');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcondicao`
--

CREATE TABLE `tbcondicao` (
  `idCondicao` int(11) NOT NULL,
  `nomeCondicao` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcondicao`
--

INSERT INTO `tbcondicao` (`idCondicao`, `nomeCondicao`) VALUES
(1, 'Novo'),
(2, 'Bom Estado'),
(3, 'Usado'),
(4, 'Desgastado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcontato`
--

CREATE TABLE `tbcontato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(50) NOT NULL,
  `mensagemContato` varchar(200) NOT NULL,
  `emailContato` varchar(50) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcor`
--

CREATE TABLE `tbcor` (
  `idCor` int(11) NOT NULL,
  `nomeCor` varchar(10) NOT NULL,
  `rgbCor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcor`
--

INSERT INTO `tbcor` (`idCor`, `nomeCor`, `rgbCor`) VALUES
(1, 'Vermelho', '#B22222'),
(2, 'Amarelo', '	#DAA520'),
(3, 'Azul', '#4682B4'),
(4, 'Verde', '	#2E8B57'),
(5, 'Laranja', '#FFA500'),
(6, 'Roxo', '	#6A5ACD'),
(7, 'Preto', '#1C1C1C'),
(8, 'Branco', '#F0FFFF'),
(9, 'Marrom', '#A0522D');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcupom`
--

CREATE TABLE `tbcupom` (
  `idCupom` int(11) NOT NULL,
  `imagemCupom` varchar(30) NOT NULL,
  `codigoCupom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdenuncia`
--

CREATE TABLE `tbdenuncia` (
  `idDenuncia` int(11) NOT NULL,
  `tipoDenuncia` varchar(40) DEFAULT NULL,
  `descDenuncia` varchar(250) NOT NULL,
  `dataDenuncia` date NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbdenuncia`
--

INSERT INTO `tbdenuncia` (`idDenuncia`, `tipoDenuncia`, `descDenuncia`, `dataDenuncia`, `idProduto`, `idCliente`) VALUES
(2, 'Itens proibido', 'teste', '2024-10-01', 4, 34);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdevolucoes`
--

CREATE TABLE `tbdevolucoes` (
  `idDevolucao` int(11) NOT NULL,
  `quantidadeDevolucao` int(11) NOT NULL,
  `motivoDevolucao` varchar(150) NOT NULL,
  `statusDevolucao` varchar(40) NOT NULL,
  `dataCriacaoDevolucao` date NOT NULL,
  `atualizacaoDevolucao` varchar(15) NOT NULL,
  `idVenda` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbfavorito`
--

CREATE TABLE `tbfavorito` (
  `idFavorito` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbfavorito`
--

INSERT INTO `tbfavorito` (`idFavorito`, `idCliente`, `idProduto`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 11, 1),
(4, 13, 2),
(5, 13, 3),
(6, 9, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbgenero`
--

CREATE TABLE `tbgenero` (
  `idGenero` int(11) NOT NULL,
  `nomeGenero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbgenero`
--

INSERT INTO `tbgenero` (`idGenero`, `nomeGenero`) VALUES
(1, 'Masculino'),
(2, 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbhistoricopedido`
--

CREATE TABLE `tbhistoricopedido` (
  `idHistoricoPedido` int(11) NOT NULL,
  `statusPedido` varchar(140) NOT NULL,
  `alteradoemPedido` datetime NOT NULL,
  `idVenda` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbitensvenda`
--

CREATE TABLE `tbitensvenda` (
  `idItensVenda` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `qtdItensVenda` int(11) NOT NULL,
  `subTotalItensVenda` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbnotificacao`
--

CREATE TABLE `tbnotificacao` (
  `idNotificacao` int(11) NOT NULL,
  `assuntoNotificacao` varchar(50) NOT NULL,
  `corpoNotificacao` varchar(50) NOT NULL,
  `enviadoNotificao` char(3) NOT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpagamento`
--

CREATE TABLE `tbpagamento` (
  `idPagamento` int(11) NOT NULL,
  `metodoPagamento` varchar(10) NOT NULL,
  `valorPagamento` decimal(10,2) NOT NULL,
  `dataPagamento` datetime NOT NULL,
  `idVenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(100) NOT NULL,
  `idTamanho` int(11) NOT NULL,
  `valorProduto` decimal(10,2) NOT NULL,
  `descricaoProduto` varchar(50) NOT NULL,
  `idCor` int(11) NOT NULL,
  `idCondicao` int(11) NOT NULL,
  `idCategoriaProduto` int(11) DEFAULT NULL,
  `idGenero` int(11) NOT NULL,
  `idRegiao` int(11) NOT NULL,
  `imagemProduto` varchar(255) NOT NULL,
  `imagemProduto2` varchar(255) DEFAULT NULL,
  `imagemProduto3` varchar(255) DEFAULT NULL,
  `imagemProduto4` varchar(255) DEFAULT NULL,
  `imagemProduto5` varchar(255) DEFAULT NULL,
  `idVendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `nomeProduto`, `idTamanho`, `valorProduto`, `descricaoProduto`, `idCor`, `idCondicao`, `idCategoriaProduto`, `idGenero`, `idRegiao`, `imagemProduto`, `imagemProduto2`, `imagemProduto3`, `imagemProduto4`, `imagemProduto5`, `idVendedor`) VALUES
(1, 'Masculina', 6, 12.00, 'Teste', 4, 3, 7, 1, 4, 'images/produtos/1727646822_1.jpeg', NULL, NULL, NULL, NULL, 3),
(2, 'Feminina', 6, 12.00, 'Camisa preta Piet', 4, 3, 8, 2, 5, 'images/produtos/1727646868_1.jpeg', NULL, NULL, NULL, NULL, 3),
(3, 'masculina 2', 4, 12.00, 'Teste', 3, 2, 8, 1, 3, 'images/produtos/1727646894_1.jpeg', NULL, NULL, NULL, NULL, 3),
(4, 'Teste', 6, 11.00, 'ff', 3, 3, 3, 1, 4, 'images/produtos/1727696219_1.jpg', NULL, NULL, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbregiao`
--

CREATE TABLE `tbregiao` (
  `idRegiao` int(11) NOT NULL,
  `nomeRegiao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbregiao`
--

INSERT INTO `tbregiao` (`idRegiao`, `nomeRegiao`) VALUES
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
-- Estrutura para tabela `tbtamanho`
--

CREATE TABLE `tbtamanho` (
  `idTamanho` int(11) NOT NULL,
  `nomeTamanho` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbtamanho`
--

INSERT INTO `tbtamanho` (`idTamanho`, `nomeTamanho`) VALUES
(1, 'PP'),
(2, 'P'),
(3, 'M'),
(4, 'G'),
(5, 'GG'),
(6, 'PLUS SIZE'),
(7, '15'),
(8, '16'),
(9, '17'),
(10, '18'),
(11, '19'),
(12, '20'),
(13, '21'),
(14, '22'),
(15, '23'),
(16, '24'),
(17, '25'),
(18, '26'),
(19, '27'),
(20, '28'),
(21, '29'),
(22, '30'),
(23, '31'),
(24, '32'),
(25, '33'),
(26, '34'),
(27, '35'),
(28, '36'),
(29, '37'),
(30, '38'),
(31, '39'),
(32, '40'),
(33, '41'),
(34, '42'),
(35, '43'),
(36, '44'),
(37, '45'),
(38, '8'),
(39, '10'),
(40, '12'),
(41, '14'),
(42, '16'),
(43, '18'),
(44, '1'),
(45, '2'),
(46, '4'),
(47, '6');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtelefonecliente`
--

CREATE TABLE `tbtelefonecliente` (
  `idTelCliente` int(11) NOT NULL,
  `numTelCliente` varchar(15) NOT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtelefonevendedor`
--

CREATE TABLE `tbtelefonevendedor` (
  `idTelVendedor` int(11) NOT NULL,
  `numTelVendedor` varchar(15) NOT NULL,
  `idVendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbvenda`
--

CREATE TABLE `tbvenda` (
  `idVenda` int(11) NOT NULL,
  `dataVenda` date NOT NULL,
  `valorTotalVenda` decimal(10,2) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idVendedor` int(11) NOT NULL,
  `idItensVenda` int(11) NOT NULL,
  `numCasaCliente` int(11) DEFAULT NULL,
  `numCasaVendedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbvendedor`
--

CREATE TABLE `tbvendedor` (
  `idVendedor` int(11) NOT NULL,
  `nomeVendedor` varchar(100) NOT NULL,
  `emailVendedor` varchar(70) NOT NULL,
  `senhaVendedor` varchar(500) DEFAULT NULL,
  `cpfVendedor` varchar(15) NOT NULL,
  `numeroVendedor` varchar(15) NOT NULL,
  `cepVendedor` varchar(255) NOT NULL,
  `logradouroVendedor` varchar(255) NOT NULL,
  `bairroVendedor` varchar(255) NOT NULL,
  `cidadeVendedor` varchar(255) NOT NULL,
  `estadoVendedor` varchar(255) NOT NULL,
  `complementoVendedor` varchar(255) DEFAULT NULL,
  `imagemVendedor` varchar(255) DEFAULT NULL,
  `numCasaVendedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbvendedor`
--

INSERT INTO `tbvendedor` (`idVendedor`, `nomeVendedor`, `emailVendedor`, `senhaVendedor`, `cpfVendedor`, `numeroVendedor`, `cepVendedor`, `logradouroVendedor`, `bairroVendedor`, `cidadeVendedor`, `estadoVendedor`, `complementoVendedor`, `imagemVendedor`, `numCasaVendedor`) VALUES
(1, 'peter', 'marcus@gmail.com', '$2y$10$MGWc2SKOTywDjMPzUpQxp.14Yx0.OJAN14biG11LreOzV5Nnu2eS.', '', '11986529942', '08451100', 'oo', 'we', 'Ouro Preto', 'MG', 'we', 'images/perfil/1724451217.png', NULL),
(2, 'Eduardo da Silva Nascimento', 'a@gmail.com', '$2y$10$RR/.oMt6of7Lg4m1CVjdt.jeerzMB.TruUgJVQ00qojXxktjnJQky', '', '11951788048', '08031400', 'Rua Doutor Wilson Issamo Minada', 'Vila Nova Curuçá', 'São Paulo', 'SP', NULL, NULL, NULL),
(3, 'luiz vendedor', 'fernandovendedor@gmail.com', '$2y$10$fAsIMBY9cVLBKv9kU77KLO0pY1cdYGrgOuDuTxRwBOwImNT/iHoQS', '', '119998131', '08450462', 'Rua Baía da Guanabara', 'Jardim Fanganiello', 'São Paulo', 'SP', 'casa 2', 'images/perfil/1724544506.png', NULL),
(4, 'peter2', 'dou@gmail.com', '$2y$10$XhlbNKEEjFpA46vOMWY5KeZi1KateUelU0aRnQDmm8KDLiJZaf8bu', '123123', '1233', '08451100', 'Rua Francisco Orellana', 'Vila Iolanda(Lajeado)', 'São Paulo', 'SP', '123', 'images/perfil/1727739673.png', 123);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tbadministrador`
--
ALTER TABLE `tbadministrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Índices de tabela `tbcarrinho`
--
ALTER TABLE `tbcarrinho`
  ADD PRIMARY KEY (`idCarrinho`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tbcategoriaproduto`
--
ALTER TABLE `tbcategoriaproduto`
  ADD PRIMARY KEY (`idCategoriaProduto`);

--
-- Índices de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tbcondicao`
--
ALTER TABLE `tbcondicao`
  ADD PRIMARY KEY (`idCondicao`);

--
-- Índices de tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  ADD PRIMARY KEY (`idContato`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tbcor`
--
ALTER TABLE `tbcor`
  ADD PRIMARY KEY (`idCor`);

--
-- Índices de tabela `tbcupom`
--
ALTER TABLE `tbcupom`
  ADD PRIMARY KEY (`idCupom`);

--
-- Índices de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD PRIMARY KEY (`idDenuncia`),
  ADD KEY `idProduto` (`idProduto`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tbdevolucoes`
--
ALTER TABLE `tbdevolucoes`
  ADD PRIMARY KEY (`idDevolucao`),
  ADD KEY `idVenda` (`idVenda`),
  ADD KEY `fk_idProduto` (`idProduto`);

--
-- Índices de tabela `tbfavorito`
--
ALTER TABLE `tbfavorito`
  ADD PRIMARY KEY (`idFavorito`),
  ADD KEY `fk_idCliente` (`idCliente`),
  ADD KEY `fk_idProduto_UNIQUE` (`idProduto`);

--
-- Índices de tabela `tbgenero`
--
ALTER TABLE `tbgenero`
  ADD PRIMARY KEY (`idGenero`);

--
-- Índices de tabela `tbhistoricopedido`
--
ALTER TABLE `tbhistoricopedido`
  ADD PRIMARY KEY (`idHistoricoPedido`),
  ADD KEY `fk_idVenda` (`idVenda`);

--
-- Índices de tabela `tbitensvenda`
--
ALTER TABLE `tbitensvenda`
  ADD PRIMARY KEY (`idItensVenda`);

--
-- Índices de tabela `tbnotificacao`
--
ALTER TABLE `tbnotificacao`
  ADD PRIMARY KEY (`idNotificacao`);

--
-- Índices de tabela `tbpagamento`
--
ALTER TABLE `tbpagamento`
  ADD PRIMARY KEY (`idPagamento`);

--
-- Índices de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idCor` (`idCor`),
  ADD KEY `idCondicao` (`idCondicao`),
  ADD KEY `idCategoriaProduto` (`idCategoriaProduto`),
  ADD KEY `idGenero` (`idGenero`),
  ADD KEY `idRegiao` (`idRegiao`);

--
-- Índices de tabela `tbregiao`
--
ALTER TABLE `tbregiao`
  ADD PRIMARY KEY (`idRegiao`);

--
-- Índices de tabela `tbtamanho`
--
ALTER TABLE `tbtamanho`
  ADD PRIMARY KEY (`idTamanho`);

--
-- Índices de tabela `tbtelefonecliente`
--
ALTER TABLE `tbtelefonecliente`
  ADD PRIMARY KEY (`idTelCliente`);

--
-- Índices de tabela `tbtelefonevendedor`
--
ALTER TABLE `tbtelefonevendedor`
  ADD PRIMARY KEY (`idTelVendedor`);

--
-- Índices de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`idVenda`),
  ADD KEY `idItensVenda` (`idItensVenda`),
  ADD KEY `idVendedor` (`idVendedor`);

--
-- Índices de tabela `tbvendedor`
--
ALTER TABLE `tbvendedor`
  ADD PRIMARY KEY (`idVendedor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT de tabela `tbadministrador`
--
ALTER TABLE `tbadministrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbcarrinho`
--
ALTER TABLE `tbcarrinho`
  MODIFY `idCarrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbcategoriaproduto`
--
ALTER TABLE `tbcategoriaproduto`
  MODIFY `idCategoriaProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `tbcondicao`
--
ALTER TABLE `tbcondicao`
  MODIFY `idCondicao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbcontato`
--
ALTER TABLE `tbcontato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcor`
--
ALTER TABLE `tbcor`
  MODIFY `idCor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbcupom`
--
ALTER TABLE `tbcupom`
  MODIFY `idCupom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  MODIFY `idDenuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbdevolucoes`
--
ALTER TABLE `tbdevolucoes`
  MODIFY `idDevolucao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfavorito`
--
ALTER TABLE `tbfavorito`
  MODIFY `idFavorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tbgenero`
--
ALTER TABLE `tbgenero`
  MODIFY `idGenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbhistoricopedido`
--
ALTER TABLE `tbhistoricopedido`
  MODIFY `idHistoricoPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbitensvenda`
--
ALTER TABLE `tbitensvenda`
  MODIFY `idItensVenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbnotificacao`
--
ALTER TABLE `tbnotificacao`
  MODIFY `idNotificacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpagamento`
--
ALTER TABLE `tbpagamento`
  MODIFY `idPagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbregiao`
--
ALTER TABLE `tbregiao`
  MODIFY `idRegiao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `tbtamanho`
--
ALTER TABLE `tbtamanho`
  MODIFY `idTamanho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de tabela `tbtelefonecliente`
--
ALTER TABLE `tbtelefonecliente`
  MODIFY `idTelCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtelefonevendedor`
--
ALTER TABLE `tbtelefonevendedor`
  MODIFY `idTelVendedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  MODIFY `idVenda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbvendedor`
--
ALTER TABLE `tbvendedor`
  MODIFY `idVendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD CONSTRAINT `idCliente` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`),
  ADD CONSTRAINT `idProduto` FOREIGN KEY (`idProduto`) REFERENCES `tbproduto` (`idProduto`);

--
-- Restrições para tabelas `tbdevolucoes`
--
ALTER TABLE `tbdevolucoes`
  ADD CONSTRAINT `fk_idProduto` FOREIGN KEY (`idProduto`) REFERENCES `tbproduto` (`idProduto`),
  ADD CONSTRAINT `idVenda` FOREIGN KEY (`idVenda`) REFERENCES `tbvenda` (`idVenda`);

--
-- Restrições para tabelas `tbfavorito`
--
ALTER TABLE `tbfavorito`
  ADD CONSTRAINT `fk_idCliente` FOREIGN KEY (`idCliente`) REFERENCES `tbcliente` (`idCliente`),
  ADD CONSTRAINT `fk_idProduto_UNIQUE` FOREIGN KEY (`idProduto`) REFERENCES `tbproduto` (`idProduto`);

--
-- Restrições para tabelas `tbhistoricopedido`
--
ALTER TABLE `tbhistoricopedido`
  ADD CONSTRAINT `fk_idVenda` FOREIGN KEY (`idVenda`) REFERENCES `tbvenda` (`idVenda`);

--
-- Restrições para tabelas `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD CONSTRAINT `idCategoriaProduto` FOREIGN KEY (`idCategoriaProduto`) REFERENCES `tbcategoriaproduto` (`idCategoriaProduto`),
  ADD CONSTRAINT `idCondicao` FOREIGN KEY (`idCondicao`) REFERENCES `tbcondicao` (`idCondicao`),
  ADD CONSTRAINT `idCor` FOREIGN KEY (`idCor`) REFERENCES `tbcor` (`idCor`),
  ADD CONSTRAINT `idGenero` FOREIGN KEY (`idGenero`) REFERENCES `tbgenero` (`idGenero`),
  ADD CONSTRAINT `idRegiao` FOREIGN KEY (`idRegiao`) REFERENCES `tbregiao` (`idRegiao`);

--
-- Restrições para tabelas `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD CONSTRAINT `idItensVenda` FOREIGN KEY (`idItensVenda`) REFERENCES `tbitensvenda` (`idItensVenda`),
  ADD CONSTRAINT `idVendedor` FOREIGN KEY (`idVendedor`) REFERENCES `tbvendedor` (`idVendedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
