-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.33-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para site_compras
CREATE DATABASE IF NOT EXISTS `site_compras` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `site_compras`;

-- Copiando estrutura para tabela site_compras.carrinhocompras
CREATE TABLE IF NOT EXISTS `carrinhocompras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `vendedor` varchar(100) NOT NULL,
  `imagem` longtext NOT NULL,
  `preco` double(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela site_compras.carrinhocompras: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `carrinhocompras` DISABLE KEYS */;
INSERT INTO `carrinhocompras` (`id`, `descricao`, `vendedor`, `imagem`, `preco`) VALUES
	(1, 'NVIDIA - GeForce RTX 4090 24GB GDDR6X Graphics Card - Titanium/Black', 'vendedor', 'NVIDIAGeForceRTX409024GBGDDR6XGraphicsCardTitaniumBlack.webp', 1599.99),
	(2, 'Redragon M686 VAMPIRE ELITE Wireless Gaming Mouse, 16000 DPI Wired/Wireless Gamer Mouse with Professional Sensor', 'vendedor', 'RedragonM686VAMPIREELITEWirelessGamingMouse16000DPIWiredWirelessGamerMousewithProfessionalSensor.jpeg', 31.99),
	(3, 'Monitor Concórdia Gamer Curvo 27\'\' CZ270F 240hz Led Full HD 1ms 2HDMI, 2DP Freesync Premium sRGB 99%', 'vendedor1', 'MonitorConcordiaGamerCurvo27CZ270F240hzLedFullHD1ms2HDMI2DPFreesyncPremiumsRGB99.webp', 1199.00),
	(4, 'Redragon K552-RGB Mechanical Gaming Keyboard 87 Keys Small Compact RGB Backlit Keyboard USB Wired Kumara with Blue Switches Metal Construction for Windows PC Game - Black (RGB)', 'vendedor2', 'RedragonK552RGBMechanicalGamingKeyboard87KeysSmallCompactRGBBacklitKeyboardUSBWiredKumarawithBlueSwitchesMetalConstructionforWindowsPCGameBlack[RGB].jpg', 440.54),
	(5, 'Controle Sem Fio Sony DualSense para PS5 Branco', 'vendedor4', 'ControleSonyDualsenseEdgePS5SemFioPretoeBrancoCFIZCP1WY.webp', 479.90);
/*!40000 ALTER TABLE `carrinhocompras` ENABLE KEYS */;

-- Copiando estrutura para tabela site_compras.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela site_compras.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `username`, `password`, `created_at`, `email`) VALUES
	(1, '570a90bfbf8c7eab5dc5d4e26832d5b1', '202cb962ac59075b964b07152d234b70', '2024-11-23 18:59:36', '04e7d3a9de82571c046074c8d51f1ce9');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
