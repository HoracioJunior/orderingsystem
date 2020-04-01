-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2020 at 12:58 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordering`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `ListUsers`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ListUsers` ()  BEGIN
 select * from tb_usuarios;
END$$

DROP PROCEDURE IF EXISTS `SaveUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SaveUser` (IN `pnome_usuario` VARCHAR(45), IN `ptb_nivel_acesso_id_nivel_acesso` INT(11))  BEGIN
 insert into tb_usuarios (nome_usuario,tb_nivel_acesso_id_nivel_acesso)
value(pnome_usuario,ptb_nivel_acesso_id_nivel_acesso);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_carrinho`
--

DROP TABLE IF EXISTS `tb_carrinho`;
CREATE TABLE IF NOT EXISTS `tb_carrinho` (
  `id_carrinho` int(11) NOT NULL AUTO_INCREMENT,
  `id_session` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_carrinho`),
  KEY `fk_tb_carrinho_tb_usuarios1_idx` (`fk_id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_carrinho`
--

INSERT INTO `tb_carrinho` (`id_carrinho`, `id_session`, `fk_id_usuario`, `data`) VALUES
(1, 'jjkjr24er1d37bp9tnn0mo3v0s', 2, '2020-03-11 14:54:30'),
(2, 'pp72qsat4cletv47tmaag0io43', NULL, '2020-03-12 17:48:55'),
(3, 'kdg61orec7hd5nb7tlq3e68sd4', 2, '2020-03-15 05:42:36'),
(4, 't61h1361pp946kblr59eqgvf9f', 2, '2020-03-16 03:43:50'),
(5, 'me6rjn1okrgfoav75mdl02nbls', NULL, '2020-03-20 02:49:59'),
(6, '73soaup4thkr9ed8l5djd0iel0', NULL, '2020-03-20 21:58:23'),
(7, 'm8ct5fte4fi17vk35vhoehqjnr', 2, '2020-03-30 23:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_carrinhoprodutos`
--

DROP TABLE IF EXISTS `tb_carrinhoprodutos`;
CREATE TABLE IF NOT EXISTS `tb_carrinhoprodutos` (
  `id_CarrinhoProdutos` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_produto` int(11) NOT NULL,
  `fk_id_carrinho` int(11) NOT NULL,
  PRIMARY KEY (`id_CarrinhoProdutos`),
  KEY `fk_tb_CarrinhoProdutos_tb_produto1_idx` (`fk_id_produto`),
  KEY `fk_tb_CarrinhoProdutos_tb_carrinho1_idx` (`fk_id_carrinho`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_carrinhoprodutos`
--

INSERT INTO `tb_carrinhoprodutos` (`id_CarrinhoProdutos`, `fk_id_produto`, `fk_id_carrinho`) VALUES
(1, 2, 1),
(2, 2, 1),
(4, 2, 2),
(9, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_deliver`
--

DROP TABLE IF EXISTS `tb_deliver`;
CREATE TABLE IF NOT EXISTS `tb_deliver` (
  `id_deliver` int(11) NOT NULL AUTO_INCREMENT,
  `nome_empresa` varchar(205) COLLATE utf8_unicode_ci NOT NULL,
  `endereco_empresa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email_empresa` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `contacto_empresa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `contacto_alt` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `alvara_empresa` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_deliver`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_deliveracess`
--

DROP TABLE IF EXISTS `tb_deliveracess`;
CREATE TABLE IF NOT EXISTS `tb_deliveracess` (
  `id_acesso` int(11) NOT NULL AUTO_INCREMENT,
  `email_acesso` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha_acesso` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `fk_deliver_empresa` int(11) NOT NULL,
  `nivelAcesso` int(11) NOT NULL DEFAULT '4',
  PRIMARY KEY (`id_acesso`),
  KEY `fk_deliver_acess_tb_deliver1_idx` (`fk_deliver_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_delivery`
--

DROP TABLE IF EXISTS `tb_delivery`;
CREATE TABLE IF NOT EXISTS `tb_delivery` (
  `id_delivery` int(11) NOT NULL AUTO_INCREMENT,
  `delivery_data` timestamp NOT NULL,
  `fk_id_pedidos` int(11) NOT NULL,
  `data_delivery` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_delivery`),
  KEY `fk_tb_delivery_tb_ordens1_idx` (`fk_id_pedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detalhespedido`
--

DROP TABLE IF EXISTS `tb_detalhespedido`;
CREATE TABLE IF NOT EXISTS `tb_detalhespedido` (
  `id_detalhes` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular_alternativo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacao` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_pagamento` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fk_id_pedido` int(11) NOT NULL,
  PRIMARY KEY (`id_detalhes`),
  KEY `fk_tb_detalhesPedido_tb_pedido1_idx` (`fk_id_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_detalhespedido`
--

INSERT INTO `tb_detalhespedido` (`id_detalhes`, `nome_usuario`, `celular`, `celular_alternativo`, `endereco`, `observacao`, `tipo_pagamento`, `fk_id_pedido`) VALUES
(1, 'Vilanculo', '878396063', '878396063', 'manga', 'Lets go', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_enderecos`
--

DROP TABLE IF EXISTS `tb_enderecos`;
CREATE TABLE IF NOT EXISTS `tb_enderecos` (
  `id_enderecos` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_enderecos`),
  KEY `fk_tb_enderecos_tb_usuarios1_idx` (`fk_id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_logs`
--

DROP TABLE IF EXISTS `tb_logs`;
CREATE TABLE IF NOT EXISTS `tb_logs` (
  `id_logs` int(11) NOT NULL AUTO_INCREMENT,
  `ipaddress` varchar(45) NOT NULL,
  `inicio_sessao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fim_sessao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_logs`),
  KEY `fk_tb_logs_tb_usuarios1_idx` (`fk_id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nivel_acesso`
--

DROP TABLE IF EXISTS `tb_nivel_acesso`;
CREATE TABLE IF NOT EXISTS `tb_nivel_acesso` (
  `id_nivel_acesso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_nivel` varchar(45) NOT NULL,
  PRIMARY KEY (`id_nivel_acesso`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_nivel_acesso`
--

INSERT INTO `tb_nivel_acesso` (`id_nivel_acesso`, `nome_nivel`) VALUES
(1, 'Administrador'),
(2, 'Gestor'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payments`
--

DROP TABLE IF EXISTS `tb_payments`;
CREATE TABLE IF NOT EXISTS `tb_payments` (
  `id_payments` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_pedidos` int(11) NOT NULL,
  `id_transicao` varchar(45) DEFAULT NULL,
  `data_payment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_payments`),
  KEY `fk_tb_payments_tb_pedidos1_idx` (`fk_id_pedidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pedido`
--

DROP TABLE IF EXISTS `tb_pedido`;
CREATE TABLE IF NOT EXISTS `tb_pedido` (
  `id_pedidos` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_carrinho` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `total_pedido` float NOT NULL,
  `status_pedido` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `data_pedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pedidos`),
  KEY `fk_tb_pedidos_tb_usuarios1_idx` (`fk_id_usuario`),
  KEY `fk_tb_pedido_tb_carrinho1_idx` (`fk_id_carrinho`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_pedido`
--

INSERT INTO `tb_pedido` (`id_pedidos`, `fk_id_carrinho`, `fk_id_usuario`, `total_pedido`, `status_pedido`, `data_pedido`) VALUES
(1, 1, 2, 400, 'pago', '2020-03-11 14:55:06'),
(2, 1, 2, 350, 'aberto', '2020-03-11 22:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produto`
--

DROP TABLE IF EXISTS `tb_produto`;
CREATE TABLE IF NOT EXISTS `tb_produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(45) NOT NULL,
  `descricao_produto` text NOT NULL,
  `preco_produto` float NOT NULL,
  `img_item` varchar(45) DEFAULT NULL,
  `fk_id_produto_ctg` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `produto_status` varchar(45) NOT NULL DEFAULT 'disponivel',
  PRIMARY KEY (`id_produto`),
  KEY `fk_tb_produto_tb_produto_ctg1_idx` (`fk_id_produto_ctg`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_produto`
--

INSERT INTO `tb_produto` (`id_produto`, `nome_produto`, `descricao_produto`, `preco_produto`, `img_item`, `fk_id_produto_ctg`, `data_cadastro`, `produto_status`) VALUES
(1, 'Hamburguer Completo', 'Batata, Ovo e queijo', 180, '5e65e3c1a261b.jpg', 1, '2020-03-09 06:35:45', 'disponivel'),
(2, 'Something Simples', 'Try it', 100, '5e65e5f69f248.jpg', 1, '2020-03-09 06:35:45', 'disponivel'),
(3, 'Hamburguer Simples', 'Ovo e Queijo', 150, '5e65e52bbbf24.jpg', 1, '2020-03-09 06:41:47', 'disponivel');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produto_ctg`
--

DROP TABLE IF EXISTS `tb_produto_ctg`;
CREATE TABLE IF NOT EXISTS `tb_produto_ctg` (
  `id_produto_ctg` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(45) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_produto_ctg`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_produto_ctg`
--

INSERT INTO `tb_produto_ctg` (`id_produto_ctg`, `nome_categoria`, `data_cadastro`) VALUES
(1, 'Main', '2020-03-09 06:34:05'),
(2, 'Entradas', '2020-03-09 06:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rating`
--

DROP TABLE IF EXISTS `tb_rating`;
CREATE TABLE IF NOT EXISTS `tb_rating` (
  `id_rating` int(11) NOT NULL AUTO_INCREMENT,
  `qtd_estrelas` int(11) NOT NULL,
  `comentario` longtext NOT NULL,
  `fk_id_produto` int(11) NOT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rating`),
  KEY `fk_tb_rating_tb_produto1_idx` (`fk_id_produto`),
  KEY `fk_tb_rating_tb_usuarios1_idx` (`fk_id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rating`
--

INSERT INTO `tb_rating` (`id_rating`, `qtd_estrelas`, `comentario`, `fk_id_produto`, `fk_id_usuario`, `data`) VALUES
(1, 4, 'go', 1, 2, '2020-03-16 02:18:05'),
(2, 4, 'go', 3, 2, '2020-03-16 02:18:28'),
(3, 3, 'go', 3, 2, '2020-03-16 02:19:07'),
(4, 4, 'big', 2, 2, '2020-03-31 02:51:39'),
(5, 2, 'teste', 2, 2, '2020-03-31 02:51:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_recovery`
--

DROP TABLE IF EXISTS `tb_recovery`;
CREATE TABLE IF NOT EXISTS `tb_recovery` (
  `id_recovery` int(11) NOT NULL AUTO_INCREMENT,
  `email_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id_recovery`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_testemunho`
--

DROP TABLE IF EXISTS `tb_testemunho`;
CREATE TABLE IF NOT EXISTS `tb_testemunho` (
  `id_testemunho` int(11) NOT NULL,
  `mensagem_testemunho` text NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_testemunho`),
  KEY `fk_tb_testemunho_tb_usuarios1_idx` (`fk_id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_testemunho`
--

INSERT INTO `tb_testemunho` (`id_testemunho`, `mensagem_testemunho`, `fk_id_usuario`, `data`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat.', 2, '2020-03-09 18:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(45) CHARACTER SET utf8 NOT NULL,
  `apelido_usuario` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `email_usuario` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `senha_usuario` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `celular_usuario` int(15) DEFAULT NULL,
  `perfil_img_usuario` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fk_id_nivel_acesso` int(11) DEFAULT NULL,
  `usuario_status` varchar(45) CHARACTER SET utf8 NOT NULL DEFAULT 'activo',
  PRIMARY KEY (`id_usuario`),
  KEY `fk_tb_usuarios_tb_nivel_acesso1_idx` (`fk_id_nivel_acesso`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nome_usuario`, `apelido_usuario`, `email_usuario`, `senha_usuario`, `celular_usuario`, `perfil_img_usuario`, `data_cadastro`, `fk_id_nivel_acesso`, `usuario_status`) VALUES
(1, 'Horacio', 'Junior', 'admin@gmail.com', '$2y$10$RkrsW8LBrmoD5ZN68Xh8NeD67W1Qp5.lIBljssayEaVO7Om3w6BVq', 848396068, NULL, '2020-03-09 06:32:06', 1, 'activo'),
(2, 'Vilanculo', 'Junior', 'horaciovilanculo.95@gmail.com', '$2y$10$RkrsW8LBrmoD5ZN68Xh8NeD67W1Qp5.lIBljssayEaVO7Om3w6BVq', 878396063, NULL, '2020-03-09 06:32:06', 3, 'activo'),
(3, 'Gestor', 'Villa', 'gestor@gmail.com', '$2y$10$5sXxLNuWLp92s2BcC0tjK.XuZV5EJe0FWM8jvO..XsaX7Zu3OIMZ2', 868396068, NULL, '2020-03-12 18:08:22', 2, 'activo');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  ADD CONSTRAINT `fk_tb_carrinho_tb_usuarios1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_carrinhoprodutos`
--
ALTER TABLE `tb_carrinhoprodutos`
  ADD CONSTRAINT `fk_tb_CarrinhoProdutos_tb_carrinho1` FOREIGN KEY (`fk_id_carrinho`) REFERENCES `tb_carrinho` (`id_carrinho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_CarrinhoProdutos_tb_produto1` FOREIGN KEY (`fk_id_produto`) REFERENCES `tb_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_deliveracess`
--
ALTER TABLE `tb_deliveracess`
  ADD CONSTRAINT `fk_deliver_acess_tb_deliver1` FOREIGN KEY (`fk_deliver_empresa`) REFERENCES `tb_deliver` (`id_deliver`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_delivery`
--
ALTER TABLE `tb_delivery`
  ADD CONSTRAINT `fk_tb_delivery_tb_ordens1` FOREIGN KEY (`fk_id_pedidos`) REFERENCES `tb_pedido` (`id_pedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_detalhespedido`
--
ALTER TABLE `tb_detalhespedido`
  ADD CONSTRAINT `fk_tb_detalhesPedido_tb_pedido1` FOREIGN KEY (`fk_id_pedido`) REFERENCES `tb_pedido` (`id_pedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_enderecos`
--
ALTER TABLE `tb_enderecos`
  ADD CONSTRAINT `fk_tb_enderecos_tb_usuarios1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_logs`
--
ALTER TABLE `tb_logs`
  ADD CONSTRAINT `fk_tb_logs_tb_usuarios1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_payments`
--
ALTER TABLE `tb_payments`
  ADD CONSTRAINT `fk_tb_payments_tb_pedidos1` FOREIGN KEY (`fk_id_pedidos`) REFERENCES `tb_pedido` (`id_pedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_pedido`
--
ALTER TABLE `tb_pedido`
  ADD CONSTRAINT `fk_tb_pedido_tb_carrinho1` FOREIGN KEY (`fk_id_carrinho`) REFERENCES `tb_carrinho` (`id_carrinho`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_pedidos_tb_usuarios1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD CONSTRAINT `fk_tb_produto_tb_produto_ctg1` FOREIGN KEY (`fk_id_produto_ctg`) REFERENCES `tb_produto_ctg` (`id_produto_ctg`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_rating`
--
ALTER TABLE `tb_rating`
  ADD CONSTRAINT `fk_tb_rating_tb_produto1` FOREIGN KEY (`fk_id_produto`) REFERENCES `tb_produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_rating_tb_usuarios1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_testemunho`
--
ALTER TABLE `tb_testemunho`
  ADD CONSTRAINT `fk_tb_testemunho_tb_usuarios1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `fk_tb_usuarios_tb_nivel_acesso1` FOREIGN KEY (`fk_id_nivel_acesso`) REFERENCES `tb_nivel_acesso` (`id_nivel_acesso`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
