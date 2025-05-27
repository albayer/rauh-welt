<?php
require_once('header.php');
if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];
    $markaSil = $db->prepare('delete from marka where id=?');
    $markaSil->execute(array($id));
    if ($markaSil->rowCount()) {
        echo '<script>alert("Marka Silindi")</script><meta http-equiv="refresh" content="0; url=marka.php">';
    } else {
        echo '<script>alert("Hata oluştu")</script><meta http-equiv="refresh" content="0; url=marka.php">';
    }
} else if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];
    $markaGuncelle = $db->prepare('select * from marka where id=?');
    $markaGuncelle->execute(array($id));
    $markaGuncelleSatir = $markaGuncelle->fetch();
    echo '  <script>
                document.addEventListener("DOMContentLoaded", function () {
                var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
                myModal.show();
                });
            </script>';
}
?>
<div class="row">
    <div class="col-md-6">
        <h3>Motosiklet Markaları</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4>Yeni Marka Ekle</h4>
                <form method="get">
                    <input type="text" name="markaAdi" placeholder="Marka Adı Yazın" class="form-control">
                    <select name="durum" class="form-control my-3">
                        <option value="">Seçiniz</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Pasif">Pasif</option>
                    </select>
                    <input type="submit" value="Kaydet" name="kaydet" class="btn btn-success w-100">
                </form>
            </div>
        </div>

        <!-- Marka Kayıt Module Start -->
        <?php
        if (isset($_GET['kaydet'])) {
            $marka = $db->prepare('insert into marka (marka,durum) values (?,?)');
            $marka->execute(array($_GET['markaAdi'], $_GET['durum']));

            if ($marka->rowCount()) {
                echo '<script>alert("Yeni Marka Eklendi.")</script><meta http-equiv="refresh" content="0; url=marka.php">';
            } else {
                echo '<script>alert("Hata oluştu")</script><meta http-equiv="refresh" content="0; url=marka.php">';
            }
        }
        ?>
        <!-- Marka Kayıt Module End -->
    </div>
    <div class="col-md-9">
        <table class="table table-stripped">
            <thead>
                <th>Marka Adı</th>
                <th>Durum</th>
                <th>Düzenle</th>
                <th>Sil</th>
            </thead>
            <tbody>
                <?php
                $markaList = $db->prepare('select * from marka order by marka asc');
                $markaList->execute();
                foreach ($markaList as $markaListSatir) {
                ?>
                    <tr>
                        <td><?php echo $markaListSatir['marka']; ?></td>
                        <td><?php echo $markaListSatir['durum']; ?></td>
                        <td><a href="marka.php?updateID=<?php echo $markaListSatir['id']; ?>"><button class="btn btn-warning">Düzenle</button></a></td>
                        <td><a href="marka.php?deleteID=<?php echo $markaListSatir['id']; ?>"><button class="btn btn-danger">Sil</button></a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Update Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $markaGuncelleSatir['marka']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                <!-- Close Button Click Control Start -->
                <script>
                    document.querySelector('#close').addEventListener('click', function(event) {
                        event.preventDefault();
                        if (close) {
                            window.location.href = "marka.php";
                        }
                    })
                </script>
                <!-- Close Button Click Control End -->
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="text" name="markaAdiUP" value="<?php echo $markaGuncelleSatir['marka']; ?>" class="form-control">
                    <select name="durumUP" class="form-control my-3">
                        <option value="<?php echo $markaGuncelleSatir['durum']; ?>"><?php echo $markaGuncelleSatir['durum']; ?></option>
                        <option value="Aktif">Aktif</option>
                        <option value="Pasif">Pasif</option>
                    </select>
                    <input type="submit" value="Kaydet" name="kaydetUP" class="btn btn-success w-100">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Update Modal End -->
<!-- Update Module Start -->
<?php
if (isset($_POST['kaydetUP'])) {

    $guncelle = $db->prepare('update marka set marka=?, durum=? where id=?');
    $guncelle->execute(array($_POST['markaAdiUP'], $_POST['durumUP'], $id));

    if ($guncelle->rowCount()) {
        echo '<script>alert("Marka Güncellendi")</script><meta http-equiv="refresh" content="0; url=marka.php">';
    } else {
        echo '<script>alert("Hata oluştu")</script><meta http-equiv="refresh" content="0; url=marka.php">';
    }
}
?>
<!-- Update Module End -->
<?php require_once('footer.php'); ?>