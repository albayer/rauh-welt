<?php require_once('header.php'); ?>

<div class="row">
    <div class="col-12">
        <h3>Fiyat Listesi Yükle</h3>
    </div>
    <div class="col-md-4">
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="dosya" class="form-control">
            <input type="text" name="adi" placeholder="Başlık ekleyiniz" class="form-control my-2">
            <input type="submit" value="Yükle" name="yukle" class="btn btn-success form-control">
        </form>
    </div>
    <?php
    if (isset($_POST['yukle'])) {
        $pdf = '../assets/pdf/' . $_FILES['dosya']['name'];
        if (move_uploaded_file($_FILES['dosya']['tmp_name'], $pdf)) {
            $pdfEkle = $db->prepare('insert into fiyat_listesi(adi,dosya_yolu) values(?,?)');
            if ($pdfEkle->rowCount()) {
                echo '<script>alert("PDF başarıyla yüklendi.")</script><meta http-equiv="refresh" content="0; url=fiyat.php">';
            } else {
                echo '<script>alert("PDF yüklendirken hata oluştu")</script><meta http-equiv="refresh" content="0; url=fiyat.php">';
            }
        }
    }
    ?>
    <div class="col-md-6">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Dosya Adı</th>
                    <th>Dosya Yolu</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-danger">Sil</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php require_once('footer.php'); ?>