-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 28 May 2025, 15:40:13
-- Sunucu sürümü: 8.2.0
-- PHP Sürümü: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rauh-welt`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `marka`
--

DROP TABLE IF EXISTS `marka`;
CREATE TABLE IF NOT EXISTS `marka` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marka` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `durum` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `marka`
--

INSERT INTO `marka` (`id`, `marka`, `durum`) VALUES
(2, 'Yamaha', 'Aktif'),
(3, 'Kawasaki', 'Aktif'),
(4, 'Royal Enfield', 'Aktif'),
(6, 'Honda', 'Aktif'),
(7, 'Harley Davidson', 'Pasif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `marka_model`
--

DROP TABLE IF EXISTS `marka_model`;
CREATE TABLE IF NOT EXISTS `marka_model` (
  `id` int NOT NULL AUTO_INCREMENT,
  `marka` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `model` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cc` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `silindir` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kw` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `motor_tipi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tur` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `model_yili` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `yakit_kapasitesi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `yakit_tuketimi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastik_on` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastik_arka` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bos_kutle` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dolu_kutle` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `koltuk_yukseklik` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `durum` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `marka_model`
--

INSERT INTO `marka_model` (`id`, `marka`, `model`, `cc`, `silindir`, `kw`, `motor_tipi`, `tur`, `model_yili`, `yakit_kapasitesi`, `yakit_tuketimi`, `lastik_on`, `lastik_arka`, `bos_kutle`, `dolu_kutle`, `koltuk_yukseklik`, `durum`, `aciklama`, `gorsel`) VALUES
(1, 'Kawasaki', 'ZX10RR', '998 cm³', '4', '154,5 kW', 'Sıvı soğutmalı, 4 zamanlı, sıralı dört', 'Sport Motosikletler', '2025', '17,0 lt', '6,1 l/100 km', '120/70 ZR17 M/C (58W)', '190/55 ZR17 M/C (75W)', '207 kg', '227 kg', '835mm', 'Aktif', 'Tüm rakiplerinizi yenebilirsiniz, ancak her zaman yüzleşmeniz gereken bir zorluk vardır: kendi içinizde. Sizin gibi her zorluğun üstesinden gelenler için gerçek bir şampiyonun hak ettiği motosikleti geliştirdik. Yeni Ninja ZX-10R ve Ninja ZX-10RR kazanmak için gereken her şeye sahip: entegre kanatçıklara sahip tamamen yeni aerodinamik gövde, küçük ve hafif LED farlar, TFT renkli göstergeler ve Akıllı Telefon bağlantısının yanı sıra Kawasaki Racing Team World Superbike uzmanlığından elde edilen güncellemeler. Artık yarış odaklı kusursuz bir Ninja\'ya sahip olduğunuza göre, Kendinizle Yüzleşin.', '../assets/img/supersports-motosiklet.webp'),
(2, 'Kawasaki', 'NINJA ZX-4RR', '399 cm³', '4', '58,7 kW', 'Sıvı soğutmalı, 4 zamanlı, sıralı dört', 'Sport Motosikletler', '2025', '15,0 litre', '5,1 l/100km', '120/70 ZR17 M/C (58W)', '160/60 ZR17 M/C (69W)', '189 kilo', '207 kilo', '800 mm', 'Aktif', '400cc spor modellerle dolu bir kategoriye Kawasaki, devrim niteliğindeki Supersport modelini tanıtıyor. Ninja ZX-4RR, kompakt bir şaside sınıfında lider performansa sahip 400cc Sıralı Dört motora sahiptir. Pistte veya sokakta, Ninja ZX-4RR\'nin benzeri görülmemiş gücünün, heyecan verici yüksek devirli çığlığının ve keskin, çevik kullanımının coşkusunu deneyimlemek, içinizdeki uyuyan Supersport\'u kesinlikle uyandıracaktır.', '../assets/img/supersports-motosiklet.webp'),
(3, 'Kawasaki', 'Z900 SE', '948 cm³', '4', '91,0 kW', 'Sıvı soğutmalı, 4 zamanlı, sıralı dörtlü', 'Naked (Çıplak) Motosikletler', '2025', '17,0 litre', '4,8 l/100km', '120/70 ZR17 M/C (58W)', '180/55 ZR17 M/C (73W)', '214 kg', '235 kg', '830 mm', 'Aktif', 'Bu Z900 SE supernaked, radikal streetfighter tavrını premium özelliklerle eşleştirerek Sugomi\'nin en gelişmiş yinelemesini müjdeliyor. Hiç şüpheniz olmasın, meydan okuyan ruh her zamankinden daha güçlü; Z900 SE rafine tasarımıyla güçlü bir aura yaratıyor ve 948 cc motorun her kükreyişinde duyulara saldırıyor.\r\n\r\n', '../assets/img/naked-motosiklet.webp'),
(4, 'Kawasaki', 'ELIMINATOR 500', '451 cm³', '2', '42,6 N•m', 'Sıvı soğutmalı, 4 zamanlı, paralel ikiz', 'Cruiser Motosikletler', '2025', '13,0 litre', '3,8 l/100 km', '90/90-21M/C 54R', '150/80-16M/C 71H', '176 kg', '194 kg', '735mm', 'Aktif', 'Sokaklar sizi çağırdığında yepyeni Eliminator 500 ile cevap verin. Bu bisiklet, şık ve alçak tasarımı, alçak ve rahat selesi ve Kawasaki\'nin şimdiye kadarki en ulaşılabilir kruvazörü için hafif ve kolay kullanımıyla alışılagelmişi sarsıyor. Fazla düşünmeyin; zamana meydan okuyan tasarım modern teknolojiyle birleştirildi, böylece Just Ride yapabilirsiniz.', '../assets/img/cruiser-motosiklet.webp');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `motosiklet_turleri`
--

DROP TABLE IF EXISTS `motosiklet_turleri`;
CREATE TABLE IF NOT EXISTS `motosiklet_turleri` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tur` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `durum` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kullanim_alani` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aciklama` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gorsel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `motosiklet_turleri`
--

INSERT INTO `motosiklet_turleri` (`id`, `tur`, `durum`, `kullanim_alani`, `aciklama`, `gorsel`) VALUES
(5, 'Cruiser Motosikletler', 'Yayında', 'Uzun yolculuklar, rahat sürüş', 'Genellikle rahat sürüş pozisyonu ve düşük oturma yüksekliği ile bilinir. Harley-Davidson gibi markalar bu kategoride popülerdir.', '../assets/img/cruiser-motosiklet.webp'),
(6, 'Sport Motosikletler', 'Yayında', 'Yüksek hız ve performans, yarış', 'Yüksek performans ve hız için tasarlanmıştır. Keskin dönüş kabiliyeti ve hafif yapıları ile dikkat çeker. Örnekler arasında Kawasaki Ninja ve Yamaha YZF serisi bulunur.', '../assets/img/supersports-motosiklet.webp'),
(7, 'Touring Motosikletler', 'Yayında', 'Uzun mesafe yolculuk, konfor', 'Uzun mesafe sürüşleri için uygun, rahat koltuklar ve geniş bagaj kapasitesi ile donatılmıştır. Honda Gold Wing bu kategorinin öne çıkan modellerindendir.', '../assets/img/touring-motosiklet.webp'),
(9, 'Dual-Sport Motosikletler', 'Yayında', 'Hem asfalt hem de arazi kullanımı', 'Hem asfalt hem de toprak yollar için uygun, çok yönlü motosikletlerdir. Suzuki DR ve Kawasaki KLR gibi modeller bu kategoriye örnektir.', '../assets/img/dual-sports-motosiklet.webp'),
(10, 'Enduro (Toprak Motosikletler)', 'Yayında', 'Toprak ve çamur yollar, off-road', 'Genellikle hafif ve yüksek süspansiyonlu, çamur ve toprak yollarda kullanım için tasarlanmıştır. KTM ve Yamaha\'nın bu alanda popüler modelleri bulunur.', '../assets/img/enduro-motosiklet.webp'),
(11, 'Naked (Çıplak) Motosikletler', 'Yayında', 'Şehir içi kullanım, genel amaç', 'Kaplamasız, sade ve minimalist tasarımları ile öne çıkarlar. Honda CB ve Yamaha Mt serileri bu kategoride popülerdir.', '../assets/img/naked-motosiklet.webp'),
(12, 'Scooter Motosikletler', 'Yayında', 'Şehir içi ulaşım, pratik kullanım', 'Şehir içi kullanım için ideal, genellikle düşük güç ve otomatik vites ile karakterize edilir. Vespa ve Honda Activa bu kategoride öne çıkan markalardır.', '../assets/img/scooter-modeli.webp'),
(13, 'Adventure (Macera) Motosiketler', 'Yayında', 'Hem yol hem de hafif arazi kullanımı', 'Uzun mesafeli yolculuklar ve hafif arazi koşulları için uygun, konfor ve performansı birleştiren motosikletlerdir. BMW GS serisi bu kategorinin örneklerindendir', '../assets/img/adventure-motosiklet.webp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
