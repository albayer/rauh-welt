<?php require_once('header.php');
if (isset($_GET['readID'])) {
    $id = $_GET['readID'];
    $servisM = $db->prepare('select * from mesajlar');
    $servisM->execute();
    $servisMFetch = $servisM->fetch();
    echo '<script>
            document.addEventListener("DOMContentLoaded", function () {
            var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
            myModal.show();
            });
        </script>';
} else if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];
    $mesajSil = $db->prepare('delete from mesajlar where id=?');
    $mesajSil->execute(array($id));
    if ($mesajSil->rowCount()) {
        echo '<script>alert("Mesaj silinmiştir")</script><meta http-equiv="refresh" content="0; url=servisMesajlari.php">';
    } else {
        echo '<script>alert("Mesaj Silinirken Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=servisMesajlari.php">';
    }
}
?>
<div class="row">
    <div class="col-md-6">
        <h3>Servis ve Satış Sonrası Destek Mesajları</h3>
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
                <th>Durum</th>
                <th>Sil</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $mesajlar = $db->prepare('select * from mesajlar where konuBaslik="Satış Sonrası Destek" or konuBaslik="Servis"');
            $mesajlar->execute();
            if ($mesajlar->rowCount()) {
                foreach ($mesajlar as $mesajlarList) {
            ?>
                    <tr>
                        <td><?php echo $mesajlarList['adSoyad']; ?></td>
                        <td><?php echo $mesajlarList['tel']; ?></td>
                        <td><?php echo $mesajlarList['email']; ?></td>
                        <td><?php echo $mesajlarList['konuBaslik']; ?></td>
                        <td><?php echo substr($mesajlarList['mesaj'], 0, 55); ?>..</td>
                        <td><a href="servisMesajlari.php?readID=<?php echo $mesajlarList['id']; ?>"><button class="btn btn-warning"><?php echo $mesajlarList['durum']; ?></button></a></td>
                        <td><a href="servisMesajlari.php?deleteID=<?php echo $mesajlarList['id']; ?>"><button class="btn btn-danger">Sil</button></a></td>
                    </tr>
            <?php
                }
            }
            ?>
            <!-- Mesaj Modal Start -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $mesajlarList['adSoyad']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><b>Konu:</b> <?php echo $mesajlarList['konuBaslik']; ?></p>

                            <p><b>Mesaj:</b><?php echo $mesajlarList['mesaj']; ?></p>
                            <p><b>Telefon:</b> <a href="tel:+9<?php echo $mesajlarList['tel']; ?>"><?php echo $mesajlarList['tel']; ?></a></p>
                            <p><b>E-posta:</b> <a href="mailto:<?php echo $mesajlarList['email']; ?>"><?php echo $mesajlarList['email']; ?></a></p>
                        </div>

                        <?php
                        $mesajlarList['durum'] == 'Okunmadı';
                        ?>
                        <div class="mx-auto">
                            <form method="post">
                                <input type="submit" value="Okundu Olarak İşaretle" name="durumUP" class="btn btn-success my-2">
                            </form>
                        </div>
                        <?php
                        if (isset($_POST['durumUP'])) {
                            $durumG = $db->prepare('update mesajlar set durum="Okundu" where id=?');
                            $durumG->execute(array($id));
                            if ($durumG->rowCount()) {
                                echo '<script>alert("Mesaj durumu Okundu olarak güncellendi")</script><meta http-equiv="refresh" content="0; url=servisMesajlari.php">';
                            } else {
                                echo '<script>alert("Hata oluştu")</script><meta http-equiv="refresh" content="0; url=servisMesajlari.php">';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
</div>
<?php require_once('footer.php'); ?>