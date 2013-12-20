-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 20 Aralık 2013 saat 15:47:52
-- Sunucu sürümü: 5.1.37
-- PHP Sürümü: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `myticketsys`
--

-- --------------------------------------------------------

--
-- Tablo yapısı: `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Tablo döküm verisi `kategori`
--


-- --------------------------------------------------------

--
-- Tablo yapısı: `sorular`
--

CREATE TABLE IF NOT EXISTS `sorular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soru` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`id`, `soru`) VALUES
(1, 'aaaaaaa'),
(2, 'zzzzzzzzzzz'),
(3, 'bbbbbb'),
(4, 'bbbbbb'),
(5, 'bbbbbb'),
(6, 'bbbbbb'),
(7, 'bbbbbb'),
(8, 'bbbbbb'),
(9, 'bbbbbb'),
(10, 'bbbbbb'),
(11, 'bbbbbb'),
(12, 'bbbbbb'),
(13, 'bbbbbb'),
(14, 'bbbbbb'),
(15, 'bbbbbb'),
(16, 'bbbbbb'),
(17, 'bbbbbb'),
(18, 'test@test.com'),
(19, 'test@test.com'),
(20, 'test@test.com'),
(21, 'test@test.com'),
(22, 'test@test.com'),
(23, 'test@test.com'),
(24, 'test@test.com'),
(25, 'test@test.com'),
(26, 'test@test.com'),
(27, 'aa'),
(28, 'aa'),
(29, 'aaaaaaa'),
(30, 'aaaaaaa'),
(31, 'aaaaaaa'),
(32, 'aaaaaaa'),
(33, 'aaaaaaa'),
(34, 'aaaaaaa'),
(35, 'aaaaaaa'),
(36, 'aaaaaaa'),
(37, 'aaaaaaa'),
(38, 'aaaaaaa'),
(39, 'aaaaaaa'),
(40, 'aaaaaaa'),
(41, 'aaaaaaa'),
(42, 'aaaaaaa'),
(43, 'aaaaaaa'),
(44, 'aaaaaaa'),
(45, 'aaaaaaa'),
(46, 'aaaaaaa'),
(47, 'aaaaaaa'),
(48, 'aaaaaaa'),
(49, 'aaaaaaa'),
(50, 'aaaaaaa'),
(51, 'aaaaaaa'),
(52, 'aaaaaaa'),
(53, 'aaaaaaa'),
(54, 'uuu'),
(55, 'uuu'),
(56, 'uuu'),
(57, 'uuu');

-- --------------------------------------------------------

--
-- Tablo yapısı: `soru_data`
--

CREATE TABLE IF NOT EXISTS `soru_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(255) NOT NULL,
  `ad_soyad` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `soru_id` int(11) NOT NULL,
  `dosya` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `ip` int(11) NOT NULL,
  `tarih` datetime NOT NULL,
  `yayinda` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Tablo döküm verisi `soru_data`
--

INSERT INTO `soru_data` (`id`, `baslik`, `ad_soyad`, `email`, `soru_id`, `dosya`, `kategori_id`, `ip`, `tarih`, `yayinda`) VALUES
(1, 'Test', '', 'test@test.com', 1, 'test.jpg', 1, 0, '2013-12-16 16:18:48', 1),
(2, 'a', 'a', 'aa', 16, '', 1, 1270, '2013-12-18 15:47:42', 1),
(3, 'a', 'a', 'aa', 17, '', 1, 1270, '2013-12-18 15:48:11', 1),
(4, 'test', 'test', 'test', 18, '', 1, 1270, '2013-12-18 16:09:04', 1),
(5, 'test', 'test', 'test', 19, '', 1, 1270, '2013-12-18 16:12:05', 1),
(6, 'test', 'test', 'test', 20, '', 1, 1270, '2013-12-18 16:12:47', 1),
(7, 'test', 'test', 'test', 21, '', 1, 1270, '2013-12-18 16:13:01', 1),
(8, 'test', 'test', 'test', 22, '', 1, 1270, '2013-12-18 16:13:06', 1),
(9, 'test', 'test', 'test', 23, '', 1, 1270, '2013-12-18 16:13:49', 1),
(10, 'test', 'test', 'test', 24, '', 1, 1270, '2013-12-18 16:14:24', 1),
(11, 'test', 'test', 'test', 25, '', 1, 1270, '2013-12-18 16:16:32', 1),
(12, 'test', 'test', 'test', 26, '', 1, 1270, '2013-12-18 16:16:34', 1),
(13, 'aaa', 'aaaa', 'aa', 27, '', 1, 1270, '2013-12-18 16:16:59', 1),
(14, 'aaa', 'aaaa', 'aa', 28, '', 1, 1270, '2013-12-18 16:17:31', 1),
(15, 'a', 'a', 'aa', 29, '', 1, 1270, '2013-12-18 16:17:46', 1),
(16, 'a', 'a', 'aa', 30, '', 1, 1270, '2013-12-18 16:18:02', 1),
(17, 'a', 'a', 'aa', 31, '', 1, 1270, '2013-12-18 16:18:12', 1),
(18, 'a', 'a', 'aa', 32, '', 1, 1270, '2013-12-18 16:19:45', 1),
(19, 'a', 'a', 'aa', 33, '', 1, 1270, '2013-12-18 16:20:11', 1),
(20, 'a', 'a', 'aa', 34, '', 1, 1270, '2013-12-18 16:20:20', 1),
(21, 'a', 'a', 'aa', 35, '', 1, 1270, '2013-12-18 16:20:41', 1),
(22, 'a', 'a', 'aa', 36, '', 1, 1270, '2013-12-18 16:20:51', 1),
(23, 'a', 'a', 'aa', 37, '', 1, 1270, '2013-12-18 16:20:54', 1),
(24, 'a', 'a', 'aa', 38, '', 1, 1270, '2013-12-18 16:21:06', 1),
(25, 'a', 'a', 'aa', 39, '', 1, 1270, '2013-12-18 16:21:35', 1),
(26, 'a', 'a', 'aa', 40, '', 1, 1270, '2013-12-18 16:21:51', 1),
(27, 'a', 'a', 'aa', 41, '', 1, 1270, '2013-12-18 16:22:08', 1),
(28, 'a', 'a', 'aa', 42, '', 1, 1270, '2013-12-18 16:22:56', 1),
(29, 'a', 'a', 'aa', 43, '', 1, 1270, '2013-12-18 16:23:01', 1),
(30, 'a', 'a', 'aa', 44, '', 1, 1270, '2013-12-18 16:23:06', 1),
(31, 'a', 'a', 'aa', 45, '', 1, 1270, '2013-12-18 16:23:09', 1),
(32, 'a', 'a', 'aa', 46, '', 1, 1270, '2013-12-18 16:23:16', 1),
(33, 'a', 'a', 'aa', 47, '', 1, 1270, '2013-12-18 16:23:25', 1),
(34, 'a', 'a', 'aa', 48, '', 1, 1270, '2013-12-18 16:23:42', 1),
(35, 'a', 'a', 'aa', 49, '', 1, 1270, '2013-12-18 16:23:54', 1),
(36, 'a', 'a', 'aa', 50, 'brandium.jpg', 1, 1270, '2013-12-18 16:24:12', 1),
(37, 'a', 'a', 'aa', 51, 'brandium.jpg', 1, 1270, '2013-12-18 16:24:36', 1),
(38, 'a2222', 'a', 'aa', 53, 'brandium.jpg', 1, 1270, '2013-12-18 16:26:05', 1),
(39, 'uuu', 'uuu', 'uuuu', 54, 'brandium.jpg', 1, 1270, '2013-12-18 16:31:06', 1),
(40, 'uuu', 'uuu', 'uuuu', 55, 'brandium.jpg', 1, 1270, '2013-12-18 16:33:31', 1),
(41, 'uuu', 'uuu', 'uuuu', 56, 'brandium.jpg', 1, 1270, '2013-12-18 16:34:04', 1),
(42, 'uuu', 'uuu', 'uuuu', 57, 'brandium.jpg', 1, 1270, '2013-12-18 16:34:49', 1);

-- --------------------------------------------------------

--
-- Tablo yapısı: `yanitlar`
--

CREATE TABLE IF NOT EXISTS `yanitlar` (
  `soru_id` int(11) NOT NULL,
  `yanit_id` int(11) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yanitlar`
--


-- --------------------------------------------------------

--
-- Tablo yapısı: `yonticiler`
--

CREATE TABLE IF NOT EXISTS `yonticiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `tarih` datetime NOT NULL,
  `yetki_durumu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Tablo döküm verisi `yonticiler`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
