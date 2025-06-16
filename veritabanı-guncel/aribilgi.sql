-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 16 Haz 2025, 18:32:36
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
-- Tablo için tablo yapısı `anasayfa`
--

DROP TABLE IF EXISTS `anasayfa`;
CREATE TABLE IF NOT EXISTS `anasayfa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_general_ci NOT NULL,
  `video` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `paketAdi1` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `fiyat1` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `paket1ozellik1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket1ozellik2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket1ozellik3` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket1ozellik4` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket1ozellik5` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paketAdi2` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `fiyat2` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `paket2ozellik1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket2ozellik2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket2ozellik3` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket2ozellik4` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket2ozellik5` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paketAdi3` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `fiyat3` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `paket3ozellik1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket3ozellik2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket3ozellik3` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket3ozellik4` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `paket3ozellik5` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`id`, `baslik`, `aciklama`, `video`, `gorsel`, `paketAdi1`, `fiyat1`, `paket1ozellik1`, `paket1ozellik2`, `paket1ozellik3`, `paket1ozellik4`, `paket1ozellik5`, `paketAdi2`, `fiyat2`, `paket2ozellik1`, `paket2ozellik2`, `paket2ozellik3`, `paket2ozellik4`, `paket2ozellik5`, `paketAdi3`, `fiyat3`, `paket3ozellik1`, `paket3ozellik2`, `paket3ozellik3`, `paket3ozellik4`, `paket3ozellik5`) VALUES
(1, 'asdads', '<p>asdadsads</p>', 'nyaIWevAjGk', '../assets/img/foto5.jpg', 'Paket 1', '100,00', 'özellikler 111', 'özellikler 21', 'özellikler 31', 'özellikler 41', 'özellikler 41', 'özellikler 41', '500,00', 'özellikler 41', 'özellikler 41', 'özellikler 41', 'özellikler 41', 'özellikler 41', 'Paket 3', '1000,00', 'özellikler 41', 'özellikler 41', 'özellikler 41', 'özellikler 41', 'özellikler 41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text COLLATE utf8mb4_general_ci NOT NULL,
  `metaDesc` text COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alt` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `aciklama`, `metaDesc`, `gorsel`, `alt`) VALUES
(2, 'Hakkımızda Test', '<p>Açıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssss<br>Açıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssss<br>Açıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssss<br>Açıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssss<br>Açıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssss<br>Açıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssssAçıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssssAçıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssssAçıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssssAçıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssssAçıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssssAçıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssssAçıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssssAçıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssssAçıklama Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssss</p>', 'Hakkımızda birçok şeyi buradan öğrenebilirsiniz.asdadsasdsssssssssssssssssssss', '../assets/img/foto1.jpg', 'Görsel Lorem ipsun dolor sit amet.ffff2222222222');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

DROP TABLE IF EXISTS `hizmetler`;
CREATE TABLE IF NOT EXISTS `hizmetler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `baslik`, `aciklama`, `gorsel`) VALUES
(1, 'Web Tasarımı Hizmeti', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor felis vitae metus aliquam molestie vel quis orci. Quisque eget nulla id lorem fringilla placerat nec et elit. Cras vestibulum eleifend elit, gravida tincidunt mi porta nec. In efficitur mauris id rutrum congue. Donec pharetra ante purus, ut tristique libero cursus et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at sapien hendrerit, dapibus lorem non, interdum nibh.</p><p>Donec vulputate lorem sit amet magna blandit convallis. Sed volutpat ligula quis gravida laoreet. Integer ac sem nunc. Curabitur imperdiet lectus at ultricies elementum. Nunc eget elit vel justo condimentum elementum. Integer aliquam ligula et sem congue commodo. Proin eleifend imperdiet elit a condimentum. Curabitur ac condimentum arcu. Donec et leo dolor. Integer molestie et quam quis hendrerit. Donec justo tellus, volutpat nec erat a, aliquet varius nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec porttitor faucibus commodo. Curabitur ut congue massa. Sed finibus arcu a urna congue elementum. Curabitur eget odio ultricies, laoreet est id, elementum erat. Curabitur feugiat elit ut odio pharetra, vel bibendum justo facilisis. Aliquam malesuada in libero mollis tempus. Pellentesque lacus velit, accumsan sit amet lacus et, ultricies bibendum ligula. Nulla justo nunc, malesuada laoreet mauris a, hendrerit hendrerit libero. Integer sit amet scelerisque augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>', '../assets/img/web-tasarimi-hizmeti-1920x540.avif'),
(2, 'Grafik Tasarımı Hizmeti', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor felis vitae metus aliquam molestie vel quis orci. Quisque eget nulla id lorem fringilla placerat nec et elit. Cras vestibulum eleifend elit, gravida tincidunt mi porta nec. In efficitur mauris id rutrum congue. Donec pharetra ante purus, ut tristique libero cursus et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at sapien hendrerit, dapibus lorem non, interdum nibh.</p><p>Donec vulputate lorem sit amet magna blandit convallis. Sed volutpat ligula quis gravida laoreet. Integer ac sem nunc. Curabitur imperdiet lectus at ultricies elementum. Nunc eget elit vel justo condimentum elementum. Integer aliquam ligula et sem congue commodo. Proin eleifend imperdiet elit a condimentum. Curabitur ac condimentum arcu. Donec et leo dolor. Integer molestie et quam quis hendrerit. Donec justo tellus, volutpat nec erat a, aliquet varius nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec porttitor faucibus commodo. Curabitur ut congue massa. Sed finibus arcu a urna congue elementum. Curabitur eget odio ultricies, laoreet est id, elementum erat. Curabitur feugiat elit ut odio pharetra, vel bibendum justo facilisis. Aliquam malesuada in libero mollis tempus. Pellentesque lacus velit, accumsan sit amet lacus et, ultricies bibendum ligula. Nulla justo nunc, malesuada laoreet mauris a, hendrerit hendrerit libero. Integer sit amet scelerisque augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>', '../assets/img/grafik-tasarimi-hizmeti-1920x540.avif'),
(3, 'Dijital Pazarlama Hizmeti', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor felis vitae metus aliquam molestie vel quis orci. Quisque eget nulla id lorem fringilla placerat nec et elit. Cras vestibulum eleifend elit, gravida tincidunt mi porta nec. In efficitur mauris id rutrum congue. Donec pharetra ante purus, ut tristique libero cursus et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque at sapien hendrerit, dapibus lorem non, interdum nibh.</p><p>Donec vulputate lorem sit amet magna blandit convallis. Sed volutpat ligula quis gravida laoreet. Integer ac sem nunc. Curabitur imperdiet lectus at ultricies elementum. Nunc eget elit vel justo condimentum elementum. Integer aliquam ligula et sem congue commodo. Proin eleifend imperdiet elit a condimentum. Curabitur ac condimentum arcu. Donec et leo dolor. Integer molestie et quam quis hendrerit. Donec justo tellus, volutpat nec erat a, aliquet varius nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec porttitor faucibus commodo. Curabitur ut congue massa. Sed finibus arcu a urna congue elementum. Curabitur eget odio ultricies, laoreet est id, elementum erat. Curabitur feugiat elit ut odio pharetra, vel bibendum justo facilisis. Aliquam malesuada in libero mollis tempus. Pellentesque lacus velit, accumsan sit amet lacus et, ultricies bibendum ligula. Nulla justo nunc, malesuada laoreet mauris a, hendrerit hendrerit libero. Integer sit amet scelerisque augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>', '../assets/img/dijital-pazarlama-hizmeti-1920x540.avif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE IF NOT EXISTS `kategoriler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `katAdi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `katTuru` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ustKat` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `katAdi`, `katTuru`, `ustKat`, `aciklama`) VALUES
(1, 'Web Tasarımı', 'Üst Kategori', '', 'Web Tasarımı Hakkında Blog Yazıları'),
(2, 'Grafik Tasarımı', 'Üst Kategori', '', 'Grafik Tasarımı Hakkında Blog Yazıları Güncellendi'),
(3, 'Dijital Pazarlama', 'Üst Kategori', '', 'Dijital Pazarlama Hakkında Blog Yazıları Update'),
(4, 'updateControl', 'Alt Kategori', 'Dijital Pazarlama', 'updateControl 2'),
(6, 'Html', 'Alt Kategori', '-', 'Html Hakkında Blog Yazıları'),
(7, '21.04.2025', 'Alt Kategori', 'Web Tasarımı', 'deneme sürüşü update');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isim` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soyisim` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `eposta` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `konu` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mesaj` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `durum` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `isim`, `soyisim`, `eposta`, `konu`, `mesaj`, `durum`) VALUES
(1, 'Alperen', 'Bayer', 'alperen@hotmail.com', 'Deneme Mesajı', 'Deneme Mesajı İçeriği', 'Okundu'),
(2, 'Hayko', 'Cepkin', 'hayko@cepkin.com', 'Web Sitesi Hakkında', 'Fiyatlandırmanızı paylaşabilir misiniz?', 'Okundu'),
(3, 'Yıldız', 'Tilbe', 'yildiz@tilbe.com', 'Yıldız Deneme', 'Deneme Yıldız YazısıLorem, ipsum dolor sit amet consectetur adipisicing elit. Qui eos porro odio laboriosam! Temporibus modi repellat delectus quo a cum cumque error quisquam? Eaque, esse odit aperiam atque numquam delectus, eum quis non veritatis quia, deserunt tenetur? Accusamus harum voluptate quos magnam voluptatibus? Amet at consequatur molestias porro saepe culpa eum excepturi voluptatibus ab eaque alias reiciendis atque commodi est libero tempora, eligendi, repellat perferendis cum optio voluptatum hic dolorum. Maiores eveniet libero perferendis nisi adipisci recusandae aliquam eos obcaecati? Ex fugiat itaque et iure beatae ducimus deserunt provident vel at optio autem, aspernatur veniam quaerat! Animi quae quam cumque, asperiores, sunt blanditiis sed rem temporibus, vel provident voluptates quis nisi deserunt totam est repellendus accusamus magni voluptatum perferendis! Soluta sapiente dolorem est dolores sunt. Id dolore magni alias quidem obcaecati ab explicabo totam molestias placeat mollitia soluta eligendi distinctio, voluptates quisquam provident delectus blanditiis quos voluptas quae. Architecto, error!', 'Okundu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `portfolyo`
--

DROP TABLE IF EXISTS `portfolyo`;
CREATE TABLE IF NOT EXISTS `portfolyo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `projeAdi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kurum` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `projeturu` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hizmet` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `teknoloji` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adres` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `portfolyo`
--

INSERT INTO `portfolyo` (`id`, `projeAdi`, `aciklama`, `kurum`, `projeturu`, `hizmet`, `teknoloji`, `adres`, `gorsel`) VALUES
(1, 'Proje 1', 'Etiam commodo nisl at augue malesuada hendrerit. Pellentesque pretium lacinia elit, in scelerisque ex venenatis ut. In non lectus dignissim, volutpat leo eget, eleifend ante. Sed eu neque at sem facilisis malesuada. Vestibulum condimentum in magna vitae tincidunt. Nulla in justo ligula. Maecenas suscipit dignissim justo, non lobortis ligula tincidunt a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Opet', 'Kurumsal', 'Web Tasarımı Hizmeti', 'Html', 'https://acibadembeautycenter.com/en', '../assets/img/foto1.jpg'),
(2, 'Proje 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur faucibus nec nunc eu consectetur. Phasellus dignissim semper tincidunt. Sed sit amet placerat magna. Vivamus sagittis placerat ipsum in laoreet. Pellentesque nibh nisi, efficitur non justo mattis, ultricies volutpat purus.', 'Shell', 'Bireysel', 'Dijital Pazarlama Hizmeti', 'Html', 'https://shell.com', '../assets/img/foto2.jpg'),
(3, 'Proje 3', 'Nulla pellentesque augue vitae sollicitudin dictum. Etiam pellentesque augue non ligula mollis, nec commodo leo dignissim. Quisque vestibulum nisl sagittis, blandit diam at, semper quam. Pellentesque finibus sodales turpis vitae vehicula. Mauris quis neque ut ligula posuere consequat. Donec commodo lorem eget ipsum sagittis, at pretium nisi semper.', 'Petrol Ofisi', 'Kurumsal', 'Grafik Tasarımı Hizmeti', 'Html', 'https://petrolofisi.com', '../assets/img/foto3.jpg'),
(4, 'Proje 4', 'Fusce nec facilisis nisl. In sem erat, semper semper tellus vel, tempor mattis nunc. Sed ultrices massa rhoncus, ultricies enim id, tempus nulla. Ut tristique sapien turpis, sit amet euismod arcu ornare sagittis. Fusce gravida dui lacus, ac aliquam erat varius id.', 'BP', 'Bireysel', 'Web Tasarımı Hizmeti', 'Html', 'https://bp.com', '../assets/img/foto4.jpg'),
(5, 'Proje 5', 'Etiam commodo nisl at augue malesuada hendrerit. Pellentesque pretium lacinia elit, in scelerisque ex venenatis ut. In non lectus dignissim, volutpat leo eget, eleifend ante. Sed eu neque at sem facilisis malesuada. Vestibulum condimentum in magna vitae tincidunt. Nulla in justo ligula. Maecenas suscipit dignissim justo, non lobortis ligula tincidunt a. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Maecenas dictum lorem et fermentum vehicula. Maecenas non risus pretium arcu rhoncus rutrum non sed lectus. Phasellus gravida erat ante, ut molestie libero fringilla non. Donec molestie nisi sit amet urna convallis, sed mattis justo ullamcorper.', 'TP', 'Kurumsal', 'Grafik Tasarımı Hizmeti', 'Html', 'https://tp.com', '../assets/img/foto5.jpg'),
(6, 'Proje 6', ' Praesent id consectetur urna. Suspendisse mattis magna eu nulla posuere, sit amet porta dolor lobortis. Donec nisl turpis, euismod in dictum maximus, ultrices sed magna. Ut orci quam, pellentesque id tristique quis, dictum eu risus.', 'Bilfen', 'Bireysel', 'Dijital Pazarlama Hizmeti', 'Html', 'https://bilfen.com', '../assets/img/foto6.jpg'),
(7, 'Proje 7', 'Vestibulum vulputate quis dolor vitae viverra. Nulla a accumsan nisi, sit amet bibendum dolor. Morbi mauris libero, dapibus vitae dolor at, malesuada dapibus turpis. Mauris lobortis ex eget velit semper eleifend vitae vitae tortor. Vivamus blandit ullamcorper pretium.', 'Bilkid', 'Kurumsal', 'Web Tasarımı Hizmeti', 'Html', 'https://bilkid.com', '../assets/img/foto7.jpg'),
(8, 'Proje 8', 'In hac habitasse platea dictumst. Fusce ultrices finibus faucibus. Cras ullamcorper eros vel quam fermentum, vel commodo nisi venenatis. Morbi posuere nunc ut nulla venenatis, nec scelerisque enim lobortis.', 'Bilyapı', 'Bireysel', 'Dijital Pazarlama Hizmeti', 'Html', 'https://bilyapi.com', '../assets/img/foto1.jpg'),
(9, 'Proje 9', 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam mollis, nisl hendrerit sodales malesuada, risus metus congue tortor, non ultricies justo libero a ante. Sed mauris nulla, lobortis ac luctus ut, tincidunt et augue. Praesent auctor ex ac ante bibendum placerat. Nullam sed lacinia eros. ', 'Biltur Catering X', 'Kurumsal', 'Dijital Pazarlama Hizmeti', 'Html', 'https://biltur.com', '../assets/img/foto9.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklam_talep`
--

DROP TABLE IF EXISTS `reklam_talep`;
CREATE TABLE IF NOT EXISTS `reklam_talep` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isim` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefon` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `eposta` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `adres` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `durum` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `reklam_talep`
--

INSERT INTO `reklam_talep` (`id`, `isim`, `telefon`, `eposta`, `adres`, `gorsel`, `durum`) VALUES
(2, 'Alperen Bayer', '05344506123', 'alperenbayer@gmail.com', 'https://www.alperenbayer.com', './assets/img/avatar-500x500.webp', 'Onaylandı'),
(3, 'Bayer Alperen', '05555555555', 'alperen-bayer@hotmail.com', 'https://www.bayeralperen.com', './assets/img/foto2.jpg', 'onay'),
(4, 'deneme1', '05555555555', 'deneme@posta.com', 'https://www.aribilgi.com', './assets/img/foto6.jpg', 'Onaylandı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seo`
--

DROP TABLE IF EXISTS `seo`;
CREATE TABLE IF NOT EXISTS `seo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adres` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(8, 'https://www.seobility.net/en/seocheck/https://www.acibadem.com'),
(9, 'freetools.seobility.net/en/seocheck/https://www.alperenbayer.com'),
(10, 'freetools.seobility.net/en/seocheck/https://www.alperenbayer.com'),
(11, 'freetools.seobility.net/en/seocheck/https://www.alperenbayer.com'),
(12, 'freetools.seobility.net/en/seocheck/https://www.alperenbayer.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazilar`
--

DROP TABLE IF EXISTS `yazilar`;
CREATE TABLE IF NOT EXISTS `yazilar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `baslik` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `meta` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `durum` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tarih` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yazilar`
--

INSERT INTO `yazilar` (`id`, `baslik`, `aciklama`, `meta`, `durum`, `tarih`, `kategori`, `gorsel`) VALUES
(4, 'Blog Başlığı 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı 1\'de Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-17', 'Web Tasarımı', '../assets/img/foto1.jpg'),
(5, 'Blog Başlığı 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı 2\'de Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-06', 'Dijital Pazarlama', '../assets/img/foto2.jpg'),
(6, 'Blog Başlığı 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı 3\'de Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-06', 'updateControl', '../assets/img/foto3.jpg'),
(7, 'Blog Başlığı 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı 4\'de Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-17', 'Web Tasarımı', '../assets/img/foto4.jpg'),
(8, 'Blog Başlığı 5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı 5\'de Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-06', 'Dijital Pazarlama', '../assets/img/foto5.jpg'),
(9, 'Blog Başlığı 6', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı 6\'de Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-06', 'Grafik Tasarımı', '../assets/img/foto6.jpg'),
(10, 'Blog Başlığı 7', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı 7\'de Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-06', 'Dijital Pazarlama', '../assets/img/foto7.jpg'),
(11, 'Blog Başlığı 8', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı 8\'de Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-17', 'Web Tasarımı', '../assets/img/foto8.jpg'),
(12, 'Blog Başlığı 9', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı 9\'de Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-06', 'Dijital Pazarlama', '../assets/img/foto9.jpg'),
(13, 'Blog Başlığı 10', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum venenatis velit vitae mattis. Mauris pulvinar pulvinar magna vel fringilla. Proin suscipit eu neque vitae tempor. Morbi consequat purus ipsum, id pretium est molestie at. Etiam lacinia mattis dui eget fermentum. Vestibulum neque nulla, hendrerit sit amet magna dictum, gravida fermentum nunc. Aenean lectus magna, scelerisque eget viverra sagittis, ultricies nec lacus. Fusce at nisl consectetur purus convallis laoreet quis condimentum nibh. Sed bibendum commodo egestas. Phasellus commodo et quam id vestibulum. Sed interdum ornare ex vel consectetur.</p><p>Morbi et sapien ornare, ultrices enim quis, dapibus sem. Proin vestibulum vel quam ut dignissim. Aenean eget enim lorem. Cras tincidunt odio dignissim mi ultricies pretium. Nam consequat erat lorem, eu vulputate lectus placerat a. Curabitur ac diam dignissim, ornare sem ut, interdum nulla. Praesent rutrum dapibus pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed blandit ornare condimentum. Maecenas eget molestie est, nec dignissim tortor. Praesent efficitur blandit risus, eu scelerisque metus ornare convallis.</p><p>Proin facilisis diam dictum eros malesuada consequat. Aenean volutpat, risus sed suscipit imperdiet, velit odio sollicitudin est, nec dapibus elit neque et odio. Vestibulum sollicitudin sagittis libero ultricies placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel elit ac justo sollicitudin tristique non sed ipsum. Aenean eleifend eros at urna bibendum, in consequat sem faucibus. Aenean accumsan metus eu enim auctor imperdiet. Phasellus feugiat odio tellus, in volutpat dolor placerat eget. Nullam vulputate at diam id vehicula. Nulla facilisi. Cras et mauris nulla. Ut ultrices augue urna, id faucibus ex euismod in. Suspendisse porta, elit ut cursus consectetur, ante nunc malesuada erat, et iaculis risus odio non quam. Cras ac sollicitudin odio. Donec magna tortor, sodales a semper quis, tempus ac risus. Nullam molestie mi eu mollis ultricies.</p><p>Nulla facilisi. Morbi et velit non sem malesuada tempus non ut lectus. Mauris eget lorem venenatis, consequat neque sit amet, tempus odio. Suspendisse a dictum purus, in euismod turpis. Phasellus at lacinia lorem. Donec a volutpat leo, vel rhoncus dui. Mauris semper ligula felis, ac sagittis sapien tempor eget. Proin pulvinar scelerisque dignissim. Morbi ac est imperdiet, luctus leo vitae, porttitor massa. In quis mauris nibh. Duis tristique diam felis, in rhoncus ipsum mollis nec. Vivamus gravida orci scelerisque, fermentum erat sed, aliquam diam.</p><p>Quisque sit amet ex non orci sagittis bibendum. Nunc in ipsum metus. Curabitur cursus dictum tempor. Aenean in mi metus. Duis ut tristique nisl. Cras non efficitur ligula. Curabitur tortor turpis, auctor non risus eget, blandit varius neque.</p>', 'Blog Başlığı(Taslak)da Dikkat Edilmesi Gerekenler Hakkında Bilgilendirici Yazı', 'Yayında', '2025-04-06', 'Html', '../assets/img/foto1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE IF NOT EXISTS `yorumlar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `isim` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `eposta` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `yorum` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `yaziID` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `baslik` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `durum` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `isim`, `eposta`, `yorum`, `yaziID`, `baslik`, `durum`) VALUES
(1, 'Alperen Bayer', 'alperenbayer@gmail.com', 'Bu yorum test için oluşturuldu.', '12', 'Blog Başlığı 9', 'Onaylandı'),
(2, 'Hayko Cepkin', 'hayko@cepkin.com', 'Hayko\'nun test yorumu', '5', 'Blog Başlığı 2', 'Onaylandı');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
