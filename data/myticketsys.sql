-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Oca 2014, 15:46:19
-- Sunucu sürümü: 5.6.14
-- PHP Sürümü: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `myticketsys`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`) VALUES
(1, 'Bilgi'),
(2, 'Randevu'),
(3, 'Şikayet'),
(4, 'Sipariş'),
(5, 'Ödeme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sorular`
--

CREATE TABLE IF NOT EXISTS `sorular` (
  `soru_id` int(11) NOT NULL AUTO_INCREMENT,
  `soru` varchar(255) NOT NULL,
  `cevap` int(2) NOT NULL,
  `ana_soru_id` int(11) NOT NULL,
  `soru_tarihi` datetime NOT NULL,
  PRIMARY KEY (`soru_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=93 ;

--
-- Tablo döküm verisi `sorular`
--

INSERT INTO `sorular` (`soru_id`, `soru`, `cevap`, `ana_soru_id`, `soru_tarihi`) VALUES
(82, 'Hala gelmedi.', 1, 0, '2014-01-02 16:57:13'),
(83, 'En kısa zamanda yolluyoruz.', 0, 82, '2014-01-02 16:57:39'),
(84, 't1', 0, 0, '2014-01-03 12:47:01'),
(85, 't2', 0, 0, '2014-01-03 12:47:15'),
(86, 't3', 0, 0, '2014-01-03 12:47:26'),
(87, 't4', 0, 0, '2014-01-03 12:47:35'),
(88, 't5', 0, 0, '2014-01-03 12:47:43'),
(89, 't6', 0, 0, '2014-01-03 12:47:52'),
(90, 't8', 0, 0, '2014-01-03 12:48:04'),
(91, 't9', 0, 0, '2014-01-03 12:48:15'),
(92, 't10', 0, 0, '2014-01-03 12:48:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `soru_data`
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
  PRIMARY KEY (`id`),
  KEY `soru_id` (`soru_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Tablo döküm verisi `soru_data`
--

INSERT INTO `soru_data` (`id`, `baslik`, `ad_soyad`, `email`, `soru_id`, `dosya`, `kategori_id`, `ip`, `tarih`, `yayinda`) VALUES
(53, 'Siparişim hakkında', 'Arzu Acar', 'eminearzuacar@gmail.com', 82, 'buyut.png', 1, 1270, '2014-01-02 16:57:13', 1),
(55, '', 'admin', '', 83, '', 1, 7210, '2014-01-02 16:57:13', 1),
(56, 'Test Bilgi', 'test', 'test2@gmail.com', 84, '', 1, 1270, '2014-01-03 12:47:01', 1),
(57, 'Test Randevu', 'test', 'test2@gmail.com', 85, '', 2, 1270, '2014-01-03 12:47:15', 1),
(58, 'Test Şikayet', 'test', 'test2@gmail.com', 86, '', 3, 1270, '2014-01-03 12:47:26', 1),
(59, 'Test Sipariş', 'test', 'test2@gmail.com', 87, '', 4, 1270, '2014-01-03 12:47:35', 1),
(60, 'Test Ödeme', 'test', 'test2@gmail.com', 88, '', 5, 1270, '2014-01-03 12:47:43', 1),
(61, 'Test Ödeme', 'test', 'test2@gmail.com', 89, '', 5, 1270, '2014-01-03 12:47:52', 1),
(62, 'Test Şikayet 2', 'test', 'test2@gmail.com', 90, '', 3, 1270, '2014-01-03 12:48:04', 1),
(63, 'Test Sipariş 2', 'test', 'test2@gmail.com', 91, '', 4, 1270, '2014-01-03 12:48:15', 1),
(64, 'Test Bilgi 2', 'test', 'test2@gmail.com', 92, '', 1, 1270, '2014-01-03 12:48:30', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yanitlar`
--

CREATE TABLE IF NOT EXISTS `yanitlar` (
  `soru_id` int(11) NOT NULL,
  `yanit_id` int(11) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

CREATE TABLE IF NOT EXISTS `yoneticiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `tarih` datetime NOT NULL,
  `yetki_durumu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `ad`, `soyad`, `kullanici_adi`, `email`, `sifre`, `ip`, `tarih`, `yetki_durumu`) VALUES
(2, 'Arzu', 'Acar', 'admin', 'eminearzuacar@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1270', '2013-12-26 11:56:00', 1);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `soru_data`
--
ALTER TABLE `soru_data`
  ADD CONSTRAINT `soru_data_ibfk_1` FOREIGN KEY (`soru_id`) REFERENCES `sorular` (`soru_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
