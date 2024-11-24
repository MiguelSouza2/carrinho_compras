-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para site_compras
CREATE DATABASE IF NOT EXISTS `site_compras` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `site_compras`;

-- Copiando estrutura para tabela site_compras.carrinhocompras
CREATE TABLE IF NOT EXISTS `carrinhocompras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `vendedor` varchar(100) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela site_compras.carrinhocompras: ~2 rows (aproximadamente)
INSERT INTO `carrinhocompras` (`id`, `descricao`, `vendedor`, `imagem`) VALUES
	(1, 'NVIDIA - GeForce RTX 4090 24GB GDDR6X Graphics Card - Titanium/Black', 'vendedor', 'NVIDIAGeForceRTX409024GBGDDR6XGraphicsCardTitaniumBlack.webp'),
	(2, 'Redragon M686 VAMPIRE ELITE Wireless Gaming Mouse, 16000 DPI Wired/Wireless Gamer Mouse with Professional Sensor', 'vendedor', 'RedragonM686VAMPIREELITEWirelessGamingMouse16000DPIWiredWirelessGamerMousewithProfessionalSensor.jpeg');

-- Copiando estrutura para tabela site_compras.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela site_compras.usuario: ~1 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `username`, `password`, `created_at`, `email`) VALUES
	(1, '570a90bfbf8c7eab5dc5d4e26832d5b1', '202cb962ac59075b964b07152d234b70', '2024-11-23 18:59:36', '04e7d3a9de82571c046074c8d51f1ce9');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
