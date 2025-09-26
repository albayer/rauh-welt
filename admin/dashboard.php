<?php require_once('header.php');

$urunSay = $db->prepare('select count(*) from marka_model where durum="Aktif" order by id desc limit 3');
$urunSay->execute();;
$urunSayFetch = $urunSay->fetchColumn();

$markaSay = $db->prepare('select count(*) from marka where durum="Aktif" order by id desc limit 3');
$markaSay->execute();
$markaSayFetch = $markaSay->fetchColumn();

$servisSay = $db->prepare('select count(*) from servis order by id desc limit 3');
$servisSay->execute();
$servisSatFetch = $servisSay->fetchColumn();

$urunMesajSay = $db->prepare('select count(*) from mesajlar where konuBaslik="ÜRÜNLER" order by id desc limit 3');
$urunMesajSay->execute();
$urunMesajSayFetch = $urunMesajSay->fetchColumn();

$servisMesaj = $db->prepare('select count(*) from mesajlar where konuBaslik="Servis" or konuBaslik="Satış Sonrası Destek" order by id desc limit 3');
$servisMesaj->execute();
$servisMesajFetch = $servisMesaj->fetchColumn();

$digerMesaj = $db->prepare('select count(*) from mesajlar where konuBaslik="Hiçbiri" order by id desc limit 3');
$digerMesaj->execute();
$digerMesajFetch = $digerMesaj->fetchColumn();

?>

<div class="row">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>Markalar</h5>
                <hr>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Marka</th>
                            <th>Durum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $urunler = $db->prepare('select * from marka order by id desc limit 5');
                        $urunler->execute();
                        if ($urunler->rowCount()) {
                            foreach ($urunler as $urunlerList) {
                        ?>
                                <tr>
                                    <td><?php echo $urunlerList['marka']; ?></td>
                                    <td><?php echo $urunlerList['durum']; ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <hr>
                Yayında: <?php echo $markaSayFetch; ?> adet - <a href="marka.php" class="text-dark">Tümünü Gör</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>Ürün Listesi</h5>
                <hr>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Marka</th>
                            <th>Model</th>
                            <th>Tür</th>
                            <th>İndirimli Fiyat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $urunler = $db->prepare('select * from marka_model order by id desc limit 3');
                        $urunler->execute();
                        if ($urunler->rowCount()) {
                            foreach ($urunler as $urunlerList) {
                        ?>
                                <tr>
                                    <td><?php echo $urunlerList['marka']; ?></td>
                                    <td><?php echo $urunlerList['model']; ?></td>
                                    <td><?php echo $urunlerList['tur']; ?></td>
                                    <td><?php echo number_format($urunlerList['indirimliSatis'], 2, ',', '.') . " TL";  ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <hr>
                <div>
                    Yayında: <?php echo $urunSayFetch; ?> adet - <a href="urun-listesi.php" class="text-dark">Tümünü Gör</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>Servisler</h5>
                <hr>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Adı</th>
                            <th>Adres</th>
                            <th>Telefon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $urunler = $db->prepare('select * from servis order by id desc limit 3');
                        $urunler->execute();
                        if ($urunler->rowCount()) {
                            foreach ($urunler as $urunlerList) {
                        ?>
                                <tr>
                                    <td><?php echo $urunlerList['ad']; ?></td>
                                    <td><?php echo $urunlerList['adres']; ?></td>
                                    <td><?php echo $urunlerList['tel']; ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <hr>
                Yayında: <?php echo $servisSatFetch; ?> adet - <a href="servis.php" class="text-dark">Tümünü Gör</a>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>Ürün Mesajları</h5>
                <hr>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $urunMesaj = $db->prepare('select * from mesajlar where konuBaslik="ÜRÜNLER" order by id desc limit 3');
                        $urunMesaj->execute();
                        if ($urunMesaj->rowCount()) {
                            foreach ($urunMesaj as $urunMesajList) {
                        ?>
                                <tr>
                                    <td><?php echo $urunMesajList['adSoyad']; ?></td>
                                    <td><?php echo $urunMesajList['tel']; ?></td>
                                    <td><?php echo $urunMesajList['email']; ?></td>
                                    <td><?php echo $urunMesajList['mesaj']; ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <hr>
                Yayında: <?php echo $urunMesajSayFetch; ?> adet - <a href="urunMesajlari.php" class="text-dark">Tümünü Gör</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>Servis ve Satış Sonrası Destek Mesajları</h5>
                <hr>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $servisMesaj = $db->prepare('select * from mesajlar where konuBaslik="Servis" or konuBaslik="Satış Sonrası Destek" order by id desc limit 3');
                        $servisMesaj->execute();
                        if ($servisMesaj->rowCount()) {
                            foreach ($servisMesaj as $servisMesajList) {
                        ?>
                                <tr>
                                    <td><?php echo $servisMesajList['adSoyad']; ?></td>
                                    <td><?php echo $servisMesajList['tel']; ?></td>
                                    <td><?php echo $servisMesajList['email']; ?></td>
                                    <td><?php echo $servisMesajList['mesaj']; ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <hr>
                Yayında: <?php echo $servisMesajFetch; ?> adet - <a href="servisMesajlari.php" class="text-dark">Tümünü Gör</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">
                <h5>Diğer Mesajlar</h5>
                <hr>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Ad Soyad</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $digerMesaj = $db->prepare('select * from mesajlar where konuBaslik="Hiçbiri" order by id desc limit 3');
                        $digerMesaj->execute();
                        if ($digerMesaj->rowCount()) {
                            foreach ($digerMesaj as $digerMesajList) {
                        ?>
                                <tr>
                                    <td><?php echo $servisMesajList['adSoyad']; ?></td>
                                    <td><?php echo $servisMesajList['tel']; ?></td>
                                    <td><?php echo $servisMesajList['email']; ?></td>
                                    <td><?php echo $servisMesajList['mesaj']; ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <hr>
                Yayında: <?php echo $digerMesajFetch; ?> adet - <a href="digerMesajlar.php" class="text-dark">Tümünü Gör</a>
            </div>
        </div>
    </div>
</div>




<?php require_once('footer.php'); ?>