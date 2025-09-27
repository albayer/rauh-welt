<?php 
require_once('../assets/baglan.php');

session_start();
if (!isset($_SESSION['userName'])) {
    die('Giriş yetkiniz yok.');
};


$mesajSayUrun = $db->prepare('select count(*) from mesajlar where durum="Okunmadı" and konuBaslik="ÜRÜNLER"');
$mesajSayUrun->execute();
$mesajSayUrunFetch=$mesajSayUrun->fetchColumn();

$mesajSayServis = $db->prepare('select count(*) from mesajlar where durum="Okunmadı" and (konuBaslik="Satış Sonrası Destek" or konuBaslik="Servis")');
$mesajSayServis->execute();
$mesajSayServisFetch=$mesajSayServis->fetchColumn();

$mesajSayDiger = $db->prepare('select count(*) from mesajlar where durum="Okunmadı" and konuBaslik="Hiçbiri"');
$mesajSayDiger->execute();
$mesajSayDigerFetch=$mesajSayDiger->fetchColumn();
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- CK Editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <title>Rauh Welt | Admin</title>
</head>

<body>

    <section id="adminPage">
        <div class="container-fluid">
            <div class="row bg-black text-white pt-3">
                <div class="col-md-2"><a href="dashboard.php" style="color:#fff">Rauh Welt | Admin</a></div>
                <div class="col-md-10 text-end my-auto">
                    <a href="logout.php" class="text-white text-decoration-none">Güvenli Çıkış</a>
                </div>
            </div>
            <div class="row" style="height: 97.6vh; font-size:15px;">
                <div class="col-md-2 bg-black ps-4 py-3" id="adminNav" style="display: flex; flex-direction:column;">
                    <a href="dashboard.php" class="text-white">Başlangıç</a><br>
                    <a href="motosiklet_turleri.php" style="text-decoration: none; color:#fff">Motosiklet Türleri</a><br>
                    <a href="marka.php" style="text-decoration: none; color:#fff">Motosiklet Markaları</a><br>
                    <a href="marka-model.php" style="text-decoration: none; color:#fff">Motosiklet Marka-Modelleri</a><br>
                    <a href="servis.php" class="text-white">Servis</a><br>
                    <a href="urun-listesi.php" class="text-white">Ürün Listesi</a><br>
                    <a href="urunMesajlari.php" class="text-white">Ürün Mesajları<span class="badge bg-danger"><?php echo $mesajSayUrunFetch; ?></span></a><br>
                    <a href="servisMesajlari.php" class="text-white">Servis ve Destek Mesajları<span class="badge bg-danger"><?php echo $mesajSayServisFetch; ?></span></a><br>
                    <a href="digerMesajlar.php" class="text-white">Diğer Mesajlar<span class="badge bg-danger"><?php echo $mesajSayDigerFetch; ?></span></a><br>
                    <a href="fiyat.php" class="text-white">Fiyat Listesi</a><br>
                    <a href="logout.php" class="text-warning">Güvenli Çıkış</a>
                </div>
                <div class="col-md-10 bg-light py-3">