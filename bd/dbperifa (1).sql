-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/09/2024 às 22:01
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

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
-- Estrutura para tabela `tbadministrador`
--

CREATE TABLE `tbadministrador` (
  `idAdministrador` int(11) NOT NULL,
  `emailAdministrador` varchar(50) NOT NULL,
  `senhaAdministrador` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadministrador`
--

INSERT INTO `tbadministrador` (`idAdministrador`, `emailAdministrador`, `senhaAdministrador`) VALUES
(1, 'testeadm@gmail.com', '$2y$10$lBnArx2k6ndm.5mJ.ZzkfevNzI4KwnwPTDXMM0fYIyIJJl0./FpZu');

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
(2, 10, 15);

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
  `numCasaCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `nomeCliente`, `cpfCliente`, `emailCliente`, `senhaCliente`, `logradouroCliente`, `numeroCliente`, `complementoCliente`, `bairroCliente`, `cepCliente`, `cidadeCliente`, `estadoCliente`, `imagemCliente`, `numCasaCliente`) VALUES
(1, 'rer', 'rer', 'rer@gmail.com', 'rer', 'rer', 'rer', 're', 're', 're', 're', 'er', NULL, NULL),
(2, 'Peter', '132.156.166-73', 'petergomes@gmail.com', '$2y$10$teywkxiijBvjis9RB4QRjuMRw94LKpJ7g16Q9Q5cKtppIxRD1fkAC', 'PEe', '11986529942', 'we', 'we', '08451100', 'Arapiraca', 'AL', NULL, NULL),
(3, 'peter', '132.156.166-73', 'marcus@gmail.com', '$2y$10$hKk2tWek78LYlxE.pujnoeXdgOy2vlveFb6EmGbk7BNljxZae/YsC', 'PEe', '11986529942', 'we', 'we', '08451100', 'Bayeux', 'PB', 'images/perfil/1724448764.jpg', NULL),
(4, 'Eduardo da Silva Nascimento', '24056783810', 'mundomelhorltd@gmail.com', '$2y$10$A.XmoxU0Hobmfy.rR.I3n.5MXWx4V1VBPVgj5qxs01pb4ydwwbaRm', 'Rua Doutor Wilson issamo minada', '11951788048', 'sda', 'VIla curuçá', '08031400', 'Porto Alegre', 'RS', 'images/perfil/1724475833.png', NULL),
(5, 'Eduardo da Silva Nascimento', '24056783810', 'eduardo@gmail.com', '$2y$10$xsabscYz7EyVKXwcfVss0.xbQosCtTYqKwGiQ1lA2Jc3/eDm9cAdm', 'Rua Doutor Wilson Issamo Minada', '11951788048', 'a', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/perfil/1724531106.jpg', NULL),
(6, 'Eduardo da Silva Nascimento', '24056783810', 'teste123123@gmail.com', '$2y$10$2w5ljazdXLagZ2IJcTURTeQvOAr2K6abyfJXJDkBj0Fa9Kp3ERh0W', 'Rua Doutor Wilson Issamo Minada', '11951788048', 'a', 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', NULL, NULL),
(7, 'NADIA AUGUSTA DA SILVA', '24056783810', 'nnadiasilva@gmail.com', '$2y$10$3ASRp4C/YSGxJ3d5oYz9cOambtHpgoJvf/Yl6RIugDbYhxd4PZ4Ji', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/perfil/1724613226.png', NULL),
(8, 'Eduardo da Silva Nascimento', '24056783810', 'we@gmail.com', '$2y$10$.Kfpmk1kn5noQsaHEEkhSeqChcEDYNzwyXUnnZIpmEfDjR87QaqIO', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/perfil/1724543305.jpg', NULL),
(9, 'Luiz Fernando', '12312312312', 'fernando123@gmail.com', '$2y$10$Bh1cgkLV7QBRhGMIiCzqAObfHHyLUv9rRUSLa5nBwLh2imhOUyGw.', 'Rua Baía da Guanabara', '11123123123', 'casa 2', 'Jardim Fanganiello', '08450462', 'São Paulo', 'SP', 'images/perfil/1724543501.jpg', NULL),
(10, 'Eduardo da Silva Nascimento', '24056783810', 'eduardo1234@gmail.com', '$2y$10$Sr/UT9L869MPPl7VsF72muS7.wK2wNcqnNEfBrsqOHROeqFKezfn.', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/perfil/1724564073.png', NULL),
(11, 'peter', '132.156.166-73', 'marcus123@gmail.com', '$2y$10$.Uz9uc8FG21OtuK2mAwlZ.0mdQklCkl4SvWzTWQWMwAEeSQ.9dQ26', 'Rua Francisco Orellana', '11986529942', 'we', 'Vila Iolanda(Lajeado)', '08451100', 'São Paulo', 'SP', 'images/logo3.jpeg', 40),
(12, 'peter', '132.156.166-73', 'ppp@gmail.com', '$2y$10$bK.EcqJ1FWyeXpHL37Htl.B5j.IwocljOeMYRy7E9EcQ1qU9CE5Ru', 'Rua Francisco Orellana', '11986529942', 'we', 'Vila Iolanda(Lajeado)', '08451100', 'São Paulo', 'SP', 'images/logo3.jpeg', 40),
(13, 'Eduardo da Silva Nascimento', '24056783810', 'xarpteste@gmail.com', '$2y$10$YsQAMOWZu.GczvITyn.QX.tofF4zXn5D2Ie545K57gCrsYi9zA5Sa', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 12),
(14, 'NADIA AUGUSTA DA SILVA', '24056783810', 'testeaa@gmail.com', '$2y$10$dCww.PyukFNJnRL9T/wOkekeTMLhwbJjN5OAZNgvIVeNs2Ht6hoW.', 'Rua Doutor Wilson Issamo Minada', '11951788048', NULL, 'Vila Nova Curuçá', '08031400', 'São Paulo', 'SP', 'images/logo3.jpeg', 15),
(15, 'uioyyo', 'yioiuuiu', 'dou2@gmail.com', '$2y$10$6pkMkmzN6RIffWJB7jIfmugpMrw.GcRRjyV/tL7KvxAyki4SQA2SO', 'Rua São Lázaro', 'yi', '525', 'Jardim São Lázaro', '08541100', 'Ferraz de Vasconcelos', 'SP', 'images/logo3.jpeg', 5252);

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
(1, 'Itens proibido', '3', '2024-08-30', 9, 9);

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
  `idVenda` int(11) DEFAULT NULL
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
(2, 'Camisa Piet', 5, 16.00, 'Teste', 7, 4, 1, 1, 27, 'images/produtos/1724476307.jpg', '', NULL, NULL, NULL, 1),
(3, 'Camisa Piet', 3, 15.40, 'Teste', 3, 4, 4, 1, 14, 'images/produtos/1724613909.png', '', NULL, NULL, NULL, 1),
(4, 'Camisa Piet', 3, 15.20, 'Camisa preta Piet', 4, 3, 6, 2, 14, 'images/produtos/1724613938.png', '', NULL, NULL, NULL, 1),
(5, 'Teste', 5, 12.00, 'Teste', 4, 4, 4, 2, 14, 'images/produtos/1724613961.png', '', NULL, NULL, NULL, 1),
(6, 'Teste', 2, 12.30, 'Camisa preta Piet', 3, 3, 8, 1, 14, 'images/produtos/1724613983.png', '', NULL, NULL, NULL, 1),
(7, 'Teste', 4, 12.00, 'a', 3, 2, 7, 2, 14, 'images/produtos/1724614002.png', '', NULL, NULL, NULL, 1),
(8, 'Teste', 1, 12.00, 'Camisa preta Piet', 4, 3, 8, 1, 14, 'images/produtos/1724614124.png', '', NULL, NULL, NULL, 1),
(9, 'Camisa Piet', 1, 12.00, 'Camisa preta Piet', 2, 3, 8, 1, 15, 'images/produtos/1724614200.png', '', NULL, NULL, NULL, 1),
(10, 'Tenis pika', 3, 12.00, 'Camisa preta Piet', 1, 3, 7, 1, 15, 'images/produtos/1724614225.png', '', NULL, NULL, NULL, 1),
(11, '123', 3, 123.00, '123', 1, 2, 2, 1, 3, 'images/produtos/1726593455_1.png', 'images/produtos/1726593455_2.png', 'images/produtos/1726593455_3.png', 'images/produtos/1726593455_4.png', 'images/produtos/1726593455_5.png', 4);

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
  `nomeTamanho` char(25) NOT NULL
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
(6, 'PLUS SIZE');

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
(4, 'peter', 'dou@gmail.com', '$2y$10$XhlbNKEEjFpA46vOMWY5KeZi1KateUelU0aRnQDmm8KDLiJZaf8bu', '123123', '1233', '08451100', 'Rua Francisco Orellana', 'Vila Iolanda(Lajeado)', 'São Paulo', 'SP', '123', 'images/logo3.jpeg', 123);

--
-- Índices para tabelas despejadas
--

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
  ADD KEY `fk_tbdenuncia_cliente` (`idCliente`);

--
-- Índices de tabela `tbdevolucoes`
--
ALTER TABLE `tbdevolucoes`
  ADD PRIMARY KEY (`idDevolucao`),
  ADD KEY `idVenda` (`idVenda`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Índices de tabela `tbfavorito`
--
ALTER TABLE `tbfavorito`
  ADD PRIMARY KEY (`idFavorito`),
  ADD KEY `fk_favorito_cliente` (`idCliente`),
  ADD KEY `fk_favorito_produto` (`idProduto`);

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
  ADD KEY `idVenda` (`idVenda`);

--
-- Índices de tabela `tbitensvenda`
--
ALTER TABLE `tbitensvenda`
  ADD PRIMARY KEY (`idItensVenda`),
  ADD KEY `fk_itensvenda_produto` (`idProduto`);

--
-- Índices de tabela `tbnotificacao`
--
ALTER TABLE `tbnotificacao`
  ADD PRIMARY KEY (`idNotificacao`),
  ADD KEY `fk_notificacao_cliente` (`idCliente`);

--
-- Índices de tabela `tbpagamento`
--
ALTER TABLE `tbpagamento`
  ADD PRIMARY KEY (`idPagamento`),
  ADD KEY `fk_pagamento_venda` (`idVenda`);

--
-- Índices de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `idCategoriaProduto` (`idCategoriaProduto`),
  ADD KEY `idCondicao` (`idCondicao`),
  ADD KEY `idCor` (`idCor`),
  ADD KEY `idGenero` (`idGenero`),
  ADD KEY `fk_tbproduto_vendedor` (`idVendedor`),
  ADD KEY `fk_tbproduto_regiao` (`idRegiao`),
  ADD KEY `idTamanho` (`idTamanho`);

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
  ADD PRIMARY KEY (`idTelCliente`),
  ADD KEY `fk_tbtelefonecliente_cliente` (`idCliente`);

--
-- Índices de tabela `tbtelefonevendedor`
--
ALTER TABLE `tbtelefonevendedor`
  ADD PRIMARY KEY (`idTelVendedor`),
  ADD KEY `fk_tbtelefonevendedor_vendedor` (`idVendedor`);

--
-- Índices de tabela `tbvenda`
--
ALTER TABLE `tbvenda`
  ADD PRIMARY KEY (`idVenda`),
  ADD KEY `idCliente` (`idCliente`),
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
-- AUTO_INCREMENT de tabela `tbadministrador`
--
ALTER TABLE `tbadministrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbcarrinho`
--
ALTER TABLE `tbcarrinho`
  MODIFY `idCarrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbcategoriaproduto`
--
ALTER TABLE `tbcategoriaproduto`
  MODIFY `idCategoriaProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `idDenuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbdevolucoes`
--
ALTER TABLE `tbdevolucoes`
  MODIFY `idDevolucao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbfavorito`
--
ALTER TABLE `tbfavorito`
  MODIFY `idFavorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbregiao`
--
ALTER TABLE `tbregiao`
  MODIFY `idRegiao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `tbtamanho`
--
ALTER TABLE `tbtamanho`
  MODIFY `idTamanho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
