-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 Ağu 2018, 02:31:28
-- Sunucu sürümü: 5.7.23-0ubuntu0.16.04.1
-- PHP Sürümü: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `zwork`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `zw_users`
--

CREATE TABLE `zw_users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `zw_users`
--

INSERT INTO `zw_users` (`id`, `email`, `name`, `password`) VALUES
(1, 'bmcan33@gmail.com', 'Mehmet Can', 'maraton1'),
(5, 'bmcan33@gmail.com', 'candysandyification .', 'mehmet20'),
(6, 'mcanmutaf@outlook.com', 'mcanwoo', 'mehmet33');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `zw_users`
--
ALTER TABLE `zw_users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `zw_users`
--
ALTER TABLE `zw_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
