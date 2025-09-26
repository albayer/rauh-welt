<?php require_once('header.php'); ?>

<div class="col-md-6">
    <h3>Ürün Listesi</h3>
</div>
<div class="col-md-6"></div>
<div class="col-12">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th style="width: 150px;">Görsel</th>
                <th>Marka</th>
                <th>Model</th>
                <th>Tür</th>
                <th>Hacim</th>
                <th>Yıl</th>
                <th>Alış Fiyatı</th>
                <th>Satış Fiyatı</th>
                <th>İndirim Oranı%</th>
                <th>İndirimli Satış Fiyatı</th>
                <th>Düzenle</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $urunler = $db->prepare('select * from marka_model order by marka desc');
            $urunler->execute();
            foreach ($urunler as $urunList) {
            ?>
                <tr>
                    <td><img src="<?php echo $urunList['gorsel'] ?>" alt="" class="img-fluid rounded"></td>
                    <td><?php echo $urunList['marka']; ?></td>
                    <td><?php echo $urunList['model']; ?></td>
                    <td><?php echo $urunList['tur']; ?></td>
                    <td><?php echo $urunList['cc']; ?></td>
                    <td><?php echo $urunList['model_yili']; ?></td>
                    <td><?php echo number_format($urunList['alis'], 2, ',', '.') . " TL";  ?></td>
                    <td><?php echo number_format($urunList['satis'], 2, ',', '.') . " TL";  ?></td>
                    <td><?php echo " %" . number_format($urunList['iskonto'], 0); ?></td>
                    <td><?php echo substr(number_format((($urunList['satis']/100)*$urunList['iskonto'])-$urunList['satis'],2,',','.'). " TL",1); ?></td>
                    <td><a href="teknik-detay-guncelleme.php?updateID=<?php echo $urunList['id']; ?>"><button class="btn btn-warning">Düzenle</button></a></td>
                </tr>
            <?php

            }

            ?>

        </tbody>
    </table>
</div>




<?php require_once('footer.php'); ?>