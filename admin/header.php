<?php require_once('../assets/baglan.php');

session_start();
if (!isset($_SESSION['userName'])) {
    die('Giriş yetkiniz yok.');
}

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
            <div class="row" style="height: 97.6vh; font-size:14px;">
                <div class="col-md-2 bg-black py-3" id="adminNav">
                    <a href="dashboard.php" class="text-white">Başlangıç</a><br>

                    <div class="accordion-item my-2">
                        <h2 class="accordion-menu">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="color: #fff; font-size:14px;">
                                Kategoriler<i class="bi bi-plus-circle ps-1"></i>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ol style="list-style: none; color:#fff; margin-bottom:0px;">
                                    <li class="my-1"><a href="motosiklet_turleri.php" style="text-decoration: none; color:#fff">Motosiklet Türleri</a></li>
                                    <li><a href="marka-model.php" style="text-decoration: none; color:#fff">Marka/Model</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <a href="urun-listesi.php" class="text-white">Ürün Listesi</a><br>
                    <div class="accordion-item">
                        <h2 class="accordion-menu">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="color: #fff; font-size:14px;">
                                <i class="bi bi-plus-circle pe-2"></i>Accordion Item
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ol style="list-style: none; color:#fff">
                                    <li><a href="" style="text-decoration: none; color:#fff">1.başlık</a></li>
                                    <li><a href="" style="text-decoration: none; color:#fff">1.başlık</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-menu">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="color: #fff; font-size:14px;">
                                <i class="bi bi-plus-circle pe-2"></i>Accordion Item
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ol style="list-style: none; color:#fff">
                                    <li><a href="" style="text-decoration: none; color:#fff">1.başlık</a></li>
                                    <li><a href="" style="text-decoration: none; color:#fff">1.başlık</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <a href="logout.php" class="text-warning">Güvenli Çıkış</a>
                </div>
                <div class="col-md-10 bg-light py-3">