-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 26 Ara 2019, 16:09:10
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

DROP TABLE IF EXISTS `ayar`;
CREATE TABLE IF NOT EXISTS `ayar` (
  `ayar_id` int(11) NOT NULL AUTO_INCREMENT,
  `ayar_baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_msunucu` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mport` int(4) NOT NULL,
  `ayar_mkadi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_msifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ayar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_baslik`, `ayar_description`, `ayar_keywords`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_youtube`, `ayar_msunucu`, `ayar_mport`, `ayar_mkadi`, `ayar_msifre`) VALUES
(1, 'E Ticaret Sitesi PHP Ödevi', 'E ticaret site php ödevi için kodlanmıştır.', 'php, mysql, html', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.instagram.com', 'http://www.youtube.com', '123.gmail.com', 123, 'deneme@abc.com', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_mail` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifreunuttum` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tc` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` int(1) NOT NULL,
  `kullanici_kayit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_songiris` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`kullanici_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_mail`, `kullanici_sifre`, `kullanici_sifreunuttum`, `kullanici_adsoyad`, `kullanici_tc`, `kullanici_adres`, `kullanici_tel`, `kullanici_yetki`, `kullanici_kayit`, `kullanici_songiris`) VALUES
(5, 'can@admin.com', '123', '', 'CAN KAPLAN', '', '', '', 1, '2019-12-26 14:00:00', '2019-12-26 16:00:59');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

DROP TABLE IF EXISTS `urun`;
CREATE TABLE IF NOT EXISTS `urun` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_adi` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_aciklama` text COLLATE utf8_turkish_ci,
  `urun_fiyat` double DEFAULT NULL,
  `urun_indirim` int(11) DEFAULT NULL,
  `urun_stok` int(11) DEFAULT NULL,
  `urun_vitrin` tinyint(1) DEFAULT NULL,
  `urun_eklenmetarihi` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_kategori_id` int(11) DEFAULT NULL,
  `urun_renk` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_beden` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_marka` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_gosterilme` int(11) DEFAULT NULL,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `urun_adi`, `urun_aciklama`, `urun_fiyat`, `urun_indirim`, `urun_stok`, `urun_vitrin`, `urun_eklenmetarihi`, `urun_kategori_id`, `urun_renk`, `urun_beden`, `urun_marka`, `urun_gosterilme`) VALUES
(1, 'Deneme 1asdsad', 'Deneme Açıklama', 1110.1, 15, 100, 0, '2019-10-14 05:30:24', 1, 'mavi,siyah', '50,52', 'abc', 4),
(3, 'Deneme 3', 'Deneme Açıklama', 140, 0, 100, 0, '2019-10-14 05:31:35', 1, 'mavi,siyah', '50,52', 'abc', 0),
(4, 'Deneme 4', 'Deneme Açıklama', 110, 0, 100, 0, '2019-10-14 05:31:35', 1, 'mavi,siyah', '50,52', 'abc', 0),
(5, 'Deneme 5', 'Deneme Açıklama', 150, 0, 100, 1, '2019-10-14 05:31:35', 1, 'mavi,siyah', '50,52', 'abc', 1),
(6, 'Deneme 6', 'Deneme Açıklama', 150, 20, 100, 0, '2019-10-14 05:31:35', 1, 'mavi,siyah', '50,52', 'abc', 0),
(7, 'Deneme 7', 'Deneme Açıklama', 120, 0, 100, 1, '2019-10-14 05:31:35', 1, 'mavi,siyah', '50,52', 'abc', 0),
(8, 'Deneme 8', 'Deneme Açıklama', 310, 0, 100, 1, '2019-10-14 05:31:35', 1, 'mavi,siyah', '50,52', 'abc', 0),
(9, 'Deneme 9', 'Deneme Açıklama', 510, 50, 100, 0, '2019-10-14 05:31:35', 1, 'mavi,siyah', '50,52', 'abc', 0),
(12, 'Deneme 12', 'Deneme Açıklama', 110, 0, 100, 1, '2019-10-14 05:31:35', 1, 'mavi,siyah', '50,52', 'abc', 0),
(13, 'Deneme 13', 'Deneme Açıklama', 22310, 0, 100, 1, '2019-10-14 05:31:35', 1, 'mavi,siyah', '50,52', 'abc', 3),
(15, 'webden eklenen', '1', 1, 1, 1, 1, '2019-10-27 09:43:33', 1, '1', '1', '1', NULL),
(16, 'can kaplan eklenen', 'a', 1, 1, 1, 1, '2019-12-26 13:17:14', 1, '1', '1', '1', NULL),
(17, 'can kaplan ', 'a', 1, 1, 1, 1, '2019-12-26 13:20:56', 1, '1', '1', '1', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
