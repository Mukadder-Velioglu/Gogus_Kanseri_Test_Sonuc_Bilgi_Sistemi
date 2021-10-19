-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Şub 2021, 15:56:53
-- Sunucu sürümü: 10.1.30-MariaDB
-- PHP Sürümü: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kanser`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `ad_soyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `gorev` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `eposta` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `aktif_mi` int(11) NOT NULL,
  `aktivasyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `ad_soyad`, `gorev`, `eposta`, `sifre`, `aktif_mi`, `aktivasyon`, `date`) VALUES
(1, 'M.Hanefi Calp', 'Doktor', 'dr_admin@gmail.com', 'dr123', 1, 'c0c68097959ab0a4ac52143d691bdb6b6f8b6714', '2021-01-16'),
(2, 'M.Hanefi Calp', 'Laboratuvar', 'lab_admin@gmail.com', 'lab123', 1, '855991e98de06d7c8fb9ac708698dd44bc859b99', '2021-01-16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `test_ozellik`
--

CREATE TABLE `test_ozellik` (
  `id` int(11) NOT NULL,
  `Alan` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `Test_kodu` int(11) NOT NULL,
  `Test_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `test_ozellik`
--

INSERT INTO `test_ozellik` (`id`, `Alan`, `Test_kodu`, `Test_adi`) VALUES
(1, 'Ortalama Değerler', 1001, '1-Ortalama Yarıcap'),
(2, 'Ortalama Değerler', 1002, '2-Ortalama Doku'),
(3, 'Ortalama Değerler', 1003, '3-Ortalama Çevre'),
(4, 'Ortalama Değerler', 1004, '4-Ortalama Alan'),
(5, 'Ortalama Değerler', 1005, '5-Ortalama Pürüzsüzlük'),
(6, 'Ortalama Değerler', 1006, '6-Ortalama İçbükeylik'),
(7, 'Ortalama Değerler', 1007, '7-Ortalama Simetri'),
(8, 'Standart Hata Değerleri', 2001, '8-Yarıcap Standart Hata'),
(9, 'Standart Hata Değerleri', 2002, '9-Doku Standart Hata'),
(10, 'Standart Hata Değerleri', 2003, '10-Çevre Standart Hata'),
(11, 'Standart Hata Değerleri', 2004, '11-Alan Standart Hata'),
(12, 'Standart Hata Değerleri', 2005, '12-Pürüzsüzlük Standart Hata'),
(13, 'Standart Hata Değerleri', 2006, '13-İçbükeylik Standart Hata'),
(14, 'Standart Hata Değerleri', 2007, '14-Simetri Standart Hata'),
(15, 'En Büyük Değerler', 3001, '15-Yarıcap En Büyük Değer'),
(16, 'En Büyük Değerler', 3002, '16-Doku En Büyük Değer'),
(17, 'En Büyük Değerler', 3003, '17-Çevre En Büyük Değer'),
(18, 'En Büyük Değerler', 3004, '18-Alan En Büyük Değer'),
(19, 'En Büyük Değerler', 3005, '19-Pürüzsüzlük En Büyük Değer'),
(20, 'En Büyük Değerler', 3006, '20-İçbükeylik En Büyük Değer'),
(21, 'En Büyük Değerler', 3007, '21-Simetri En Büyük Değer');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `test_sonuc`
--

CREATE TABLE `test_sonuc` (
  `id` int(11) NOT NULL,
  `Barkod_No` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Lab_uzman` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `Alan` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc_tarih` date NOT NULL,
  `Sonuc1` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc2` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc3` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc4` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc5` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc6` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc7` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc8` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc9` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc10` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc11` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc12` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc13` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc14` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc15` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc16` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc17` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc18` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc19` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc20` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Sonuc21` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `test_sonuc`
--

INSERT INTO `test_sonuc` (`id`, `Barkod_No`, `Lab_uzman`, `Alan`, `Sonuc_tarih`, `Sonuc1`, `Sonuc2`, `Sonuc3`, `Sonuc4`, `Sonuc5`, `Sonuc6`, `Sonuc7`, `Sonuc8`, `Sonuc9`, `Sonuc10`, `Sonuc11`, `Sonuc12`, `Sonuc13`, `Sonuc14`, `Sonuc15`, `Sonuc16`, `Sonuc17`, `Sonuc18`, `Sonuc19`, `Sonuc20`, `Sonuc21`) VALUES
(6, '4', 'ben', 'lab1', '2021-01-17', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(16, '22', 'umarım', 'alan1', '2021-01-23', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11.20', '233', '4', '600', '1.2000', '0.5000', '2'),
(17, '23', 'Fatoş Ergün', 'lab1', '2021-01-29', '123', '3212', '3', '2', '3', '1.200', '4', '3', '23', '4', '2', '55', '4', '3', '2', '5', '2', '900', '4', '2', '1'),
(22, '43', 'Ahmet Can', 'Memografi', '2021-01-20', '7.21', '21.32', '130', '1743', '0.099', '0.03212', '0.76', '0.4002', '4981', '19.75', '16.53', '0.03211', '0.121', '0.0132', '13.49', '52.12', '243', '882', '0.5043', '0.3674', '0.5643'),
(23, '24', 'Buse Molla', 'Memografi', '2021-01-21', '5.01', '12.13', '43.53', '144.2', '0.118', '0.0700', '0.104', '0.3376', '0.3743', '0.800', '9.84', '0.00221', '0', '0.007999', '5.02', '3.63', '52.56', '400', '0.0321', '0.1122', '0.5543'),
(24, '45', 'Aylin Gül', 'Mamografi', '2021-02-02', '5.01', '12.13', '43.53', '144.2', '0.118', '0.0700', '0.104', '0.3376', '0.3743', '0.800', '9.84', '0.00221', '0', '0.007999', '5.02', '3.63', '52.56', '400', '0.0321', '0.1122', '05543');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tetkik`
--

CREATE TABLE `tetkik` (
  `Barkod_No` int(11) NOT NULL,
  `TC_No` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `Doktor` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `Poliklinik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `istenen_tarih` date NOT NULL,
  `Test_Adi1` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi2` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi3` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi4` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi5` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi6` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi7` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi8` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi9` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi10` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi11` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi12` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi13` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi14` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi15` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi16` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi17` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi18` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi19` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi20` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `Test_Adi21` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tetkik`
--

INSERT INTO `tetkik` (`Barkod_No`, `TC_No`, `Doktor`, `Poliklinik`, `istenen_tarih`, `Test_Adi1`, `Test_Adi2`, `Test_Adi3`, `Test_Adi4`, `Test_Adi5`, `Test_Adi6`, `Test_Adi7`, `Test_Adi8`, `Test_Adi9`, `Test_Adi10`, `Test_Adi11`, `Test_Adi12`, `Test_Adi13`, `Test_Adi14`, `Test_Adi15`, `Test_Adi16`, `Test_Adi17`, `Test_Adi18`, `Test_Adi19`, `Test_Adi20`, `Test_Adi21`) VALUES
(4, '876543', 'nagiş', 'Genel Cerrahi Polikliniği', '2021-01-16', '1-Ortalama Yarıçap', '8-Yarıçap Standart Hata', '14-Yarıçap En Büyük Değer', '2-Ortalama Doku', '9-Doku Standart Hata', '15-Doku En Büyük Değer', '3-Ortalama Çevre', '10-Çevre Standart Hata', '16-Çevre En Büyük Değer', '4-Ortalama Alan', '11-Alan Standart Hata', '17-Alan En Büyük Değer', '5-Ortalama Pürüzsüzlük', '12-Pürüzsüzlük Standart Hata', '18-Pürüzsüzlük En Büyük Değer', '6-Ortalama İçbükeylik', '13-Simetri Standart Hata', '19-İçbükeylik En Büyük Değer', '7-Ortalama Simetri', '21-İçbükeylik Standart Hata', '20-Simetri En Büyük Değer'),
(21, '12343334', 'deneme', 'Genel Cerrahi Polikliniği', '2021-01-29', '1-Ortalama Yarıcap', '2-Ortalama Doku', '3-Ortalama Çevre', '4-Ortalama Alan', '5-Ortalama Pürüzsüzlük', '6-Ortalama İçbükeylik', '7-Ortalama Simetri', '8-Yarıcap Standart Hata', '9-Doku Standart Hata', '10-Çevre Standart Hata', '11-Alan Standart Hata', '12-Pürüzsüzlük Standart Hata', '13-İçbükeylik Standart Hata', '14-Simetri Standart Hata', '15-Yarıcap En Büyük Değer', '16-Doku En Büyük Değer', '17-Çevre En Büyük Değer', '18-Alan En Büyük Değer', '19-Pürüzsüzlük En Büyük Değer', '20-İçbükeylik En Büyük Değer', '21-Simetri En Büyük Değer'),
(22, '2147483647', 'Ceren Nur Çelik', 'Genel Cerrahi Polikliniği', '2021-01-22', '1-Ortalama Yarıcap', '2-Ortalama Doku', '3-Ortalama Çevre', '4-Ortalama Alan', '5-Ortalama Pürüzsüzlük', '6-Ortalama İçbükeylik', '7-Ortalama Simetri', '8-Yarıcap Standart Hata', '9-Doku Standart Hata', '10-Çevre Standart Hata', '11-Alan Standart Hata', '12-Pürüzsüzlük Standart Hata', '13-İçbükeylik Standart Hata', '14-Simetri Standart Hata', '15-Yarıcap En Büyük Değer', '16-Doku En Büyük Değer', '17-Çevre En Büyük Değer', '18-Alan En Büyük Değer', '19-Pürüzsüzlük En Büyük Değer', '20-İçbükeylik En Büyük Değer', '21-Simetri En Büyük Değer'),
(23, '2147483647', 'Mukadder Yılmaz', 'Genel Cerrahi Polikliniği', '2021-01-16', '1-Ortalama Yarıcap', '2-Ortalama Doku', '3-Ortalama Çevre', '4-Ortalama Alan', '5-Ortalama Pürüzsüzlük', '6-Ortalama İçbükeylik', '7-Ortalama Simetri', '8-Yarıcap Standart Hata', '9-Doku Standart Hata', '10-Çevre Standart Hata', '11-Alan Standart Hata', '12-Pürüzsüzlük Standart Hata', '13-İçbükeylik Standart Hata', '14-Simetri Standart Hata', '15-Yarıcap En Büyük Değer', '16-Doku En Büyük Değer', '17-Çevre En Büyük Değer', '18-Alan En Büyük Değer', '19-Pürüzsüzlük En Büyük Değer', '20-İçbükeylik En Büyük Değer', '21-Simetri En Büyük Değer'),
(24, '2147483647', 'Ela Gül', 'Genel Cerrahi Polikliniği', '2021-01-30', '1-Ortalama Yarıcap', '2-Ortalama Doku', '3-Ortalama Çevre', '4-Ortalama Alan', '5-Ortalama Pürüzsüzlük', '6-Ortalama İçbükeylik', '7-Ortalama Simetri', '8-Yarıcap Standart Hata', '9-Doku Standart Hata', '10-Çevre Standart Hata', '11-Alan Standart Hata', '12-Pürüzsüzlük Standart Hata', '13-İçbükeylik Standart Hata', '14-Simetri Standart Hata', '15-Yarıcap En Büyük Değer', '16-Doku En Büyük Değer', '17-Çevre En Büyük Değer', '18-Alan En Büyük Değer', '19-Pürüzsüzlük En Büyük Değer', '20-İçbükeylik En Büyük Değer', '21-Simetri En Büyük Değer'),
(25, '353535', 'Özgür', 'Genel Cerrahi Polikliniği', '2021-01-15', '1-Ortalama Yarıcap', '2-Ortalama Doku', '3-Ortalama Çevre', '4-Ortalama Alan', '5-Ortalama Pürüzsüzlük', '6-Ortalama İçbükeylik', '7-Ortalama Simetri', '8-Yarıcap Standart Hata', '9-Doku Standart Hata', '10-Çevre Standart Hata', '11-Alan Standart Hata', '12-Pürüzsüzlük Standart Hata', '13-İçbükeylik Standart Hata', '14-Simetri Standart Hata', '15-Yarıcap En Büyük Değer', '16-Doku En Büyük Değer', '17-Çevre En Büyük Değer', '18-Alan En Büyük Değer', '19-Pürüzsüzlük En Büyük Değer', '20-İçbükeylik En Büyük Değer', '21-Simetri En Büyük Değer'),
(36, '28268456742', 'Mukadder Yılmaz', 'Genel Cerrahi Polikliniği', '2021-01-20', '1-Ortalama Yarıcap', '2-Ortalama Doku', '3-Ortalama Çevre', '4-Ortalama Alan', '5-Ortalama Pürüzsüzlük', '6-Ortalama İçbükeylik', '7-Ortalama Simetri', '8-Yarıcap Standart Hata', '9-Doku Standart Hata', '10-Çevre Standart Hata', '11-Alan Standart Hata', '12-Pürüzsüzlük Standart Hata', '13-İçbükeylik Standart Hata', '14-Simetri Standart Hata', '15-Yarıcap En Büyük Değer', '16-Doku En Büyük Değer', '17-Çevre En Büyük Değer', '18-Alan En Büyük Değer', '19-Pürüzsüzlük En Büyük Değer', '20-İçbükeylik En Büyük Değer', '21-Simetri En Büyük Değer'),
(43, '28281112211', 'Fatma Güner', 'Genel Cerrahi Polikliniği', '2021-01-20', '1-Ortalama Yarıcap', '2-Ortalama Doku', '3-Ortalama Çevre', '4-Ortalama Alan', '5-Ortalama Pürüzsüzlük', '6-Ortalama İçbükeylik', '7-Ortalama Simetri', '8-Yarıcap Standart Hata', '9-Doku Standart Hata', '10-Çevre Standart Hata', '11-Alan Standart Hata', '12-Pürüzsüzlük Standart Hata', '13-İçbükeylik Standart Hata', '14-Simetri Standart Hata', '15-Yarıcap En Büyük Değer', '16-Doku En Büyük Değer', '17-Çevre En Büyük Değer', '18-Alan En Büyük Değer', '19-Pürüzsüzlük En Büyük Değer', '20-İçbükeylik En Büyük Değer', '21-Simetri En Büyük Değer'),
(45, '12122221212', 'Ayşe Gün', 'Genel Cerrahi Polikliniği', '2021-02-01', '1-Ortalama Yarıcap', '2-Ortalama Doku', '3-Ortalama Çevre', '4-Ortalama Alan', '5-Ortalama Pürüzsüzlük', '6-Ortalama İçbükeylik', '7-Ortalama Simetri', '8-Yarıcap Standart Hata', '9-Doku Standart Hata', '10-Çevre Standart Hata', '11-Alan Standart Hata', '12-Pürüzsüzlük Standart Hata', '13-İçbükeylik Standart Hata', '14-Simetri Standart Hata', '15-Yarıcap En Büyük Değer', '16-Doku En Büyük Değer', '17-Çevre En Büyük Değer', '18-Alan En Büyük Değer', '19-Pürüzsüzlük En Büyük Değer', '20-İçbükeylik En Büyük Değer', '21-Simetri En Büyük Değer');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `test_ozellik`
--
ALTER TABLE `test_ozellik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `test_sonuc`
--
ALTER TABLE `test_sonuc`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tetkik`
--
ALTER TABLE `tetkik`
  ADD PRIMARY KEY (`Barkod_No`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `test_ozellik`
--
ALTER TABLE `test_ozellik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `test_sonuc`
--
ALTER TABLE `test_sonuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `tetkik`
--
ALTER TABLE `tetkik`
  MODIFY `Barkod_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
