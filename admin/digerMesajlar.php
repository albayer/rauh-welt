<?php require_once('header.php'); ?>
<div class="row">
    <div class="col-md-6">
        <h3>Diğer Mesajlar</h3>
    </div>
</div>
<div class="row">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Ad Soyad</th>
                <th>Telefon No</th>
                <th>Mail Adresi</th>
                <th>Konu Başlığı</th>
                <th>Mesaj İçeriği</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mesajlar = $db->prepare('select * from mesajlar where konuBaslik="Hiçbiri"');
            $mesajlar->execute();
            if ($mesajlar->rowCount()) {
                foreach ($mesajlar as $mesajlarList) {
            ?>
                    <tr>
                        <td><?php echo $mesajlarList['adSoyad']; ?></td>
                        <td><?php echo $mesajlarList['tel']; ?></td>
                        <td><?php echo $mesajlarList['email']; ?></td>
                        <td><?php echo $mesajlarList['konuBaslik']; ?></td>
                        <td><?php echo $mesajlarList['mesaj']; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
<?php require_once('footer.php'); ?>