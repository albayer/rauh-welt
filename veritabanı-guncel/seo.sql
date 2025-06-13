-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 13 Haz 2025, 20:06:05
-- Sunucu sürümü: 9.1.0
-- PHP Sürümü: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aribilgi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seo`
--

DROP TABLE IF EXISTS `seo`;
CREATE TABLE IF NOT EXISTS `seo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adres` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `seo`
--

INSERT INTO `seo` (`id`, `adres`) VALUES
(1, 'https://www.seobility.net/en/seocheck/https://www.bilkid.com'),
(2, 'https://www.youtube.com/'),
(3, 'https://www.youtube.com/'),
(4, 'https://www.seobility.net/en/seocheck/https://www.youtube.com/'),
(5, 'https://www.seobility.net/en/seocheck/https://www.youtube.com/'),
(6, 'https://www.seobility.net/en/seocheck/https://www.acibadem.com'),
(7, 'https://www.seobility.net/en/seocheck/https://www.youtube.com/'),
(8, 'https://www.seobility.net/en/seocheck/https://www.acibadem.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
