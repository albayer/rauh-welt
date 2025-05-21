<?php require_once('header.php');
if (isset($_GET['turDeleteID'])) {
    $id = $_GET['turDeleteID'];
    $turSil = $db->prepare('delete from motosiklet_turleri where id=?');
    $turSil->execute(array($id));
    if ($turSil->rowCount()) {
        echo '<script>alert("Kayıt Silindi")</script><meta http-equiv="refresh" content="1; url=motosiklet_turleri.php">';
    } else {
        echo '<script>alert("Hata oluştu")</script><meta http-equiv="refresh" content="1; url=motosiklet_turleri.php">';
    }
} else if (isset($_GET['turUpdateID'])) {
    $id = $_GET['turUpdateID'];
    $turUpdate = $db->prepare('select * from motosiklet_turleri where id=?');
    $turUpdate->execute(array($id));
    $turUpdateFetch = $turUpdate->fetch();
    echo '  <script>
                document.addEventListener("DOMContentLoaded", function () {
                var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
                myModal.show();
                });
            </script>';
}
?>
<div class="row">
    <div class="col-md-6 my-2">
        <h3>Motosiklet Türleri</h3>
    </div>
    <div class="col-md-6 text-end my-2">
        <!-- Button trigger modal -->
        <div class="text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Motosiklet Türü Ekle
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Yeni Tür Ekle</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data">
                            <input type="text" name="tur" placeholder="Tür Adını Girin" class="form-control" required>
                            <select name="durum" class="form-control my-3" required>
                                <option value="">Seçiniz</option>
                                <option value="Yayında">Yayında</option>
                                <option value="Taslak">Taslak</option>
                            </select>
                            <input type="text" name="kullanimAlani" placeholder="Kullanım Alanı" class="form-control">
                            <!-- CK Editor Start -->
                            <textarea name="aciklama" id="aciklama" placeholder="Tür Açıklaması" class="form-control" required></textarea>
                            <!-- CK Editor End -->
                            <input type="file" name="gorsel" class="form-control my-3" required>
                            <input type="submit" value="Kaydet" class="btn btn-success w-100" name="kaydet">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Görsel</th>
                    <th>Motosiklet Türü</th>
                    <th>Durum</th>
                    <th>Kullanım Alanı</th>
                    <th>Açıklama</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $turEkleList = $db->prepare('select * from motosiklet_turleri where durum="Yayında" order by id desc');
                $turEkleList->execute();
                if ($turEkleList->rowCount()) {
                    foreach ($turEkleList as $turEkleListSatir) {
                ?>
                        <tr>
                            <td style="width: 100px;"><img src="<?php echo $turEkleListSatir['gorsel']; ?>" class="w-100"></td>
                            <td><?php echo $turEkleListSatir['tur']; ?></td>
                            <td><?php echo $turEkleListSatir['durum']; ?></td>
                            <td><?php echo $turEkleListSatir['kullanim_alani']; ?></td>
                            <td><?php echo $turEkleListSatir['aciklama']; ?></td>
                            <td><a href="motosiklet_turleri.php?turUpdateID=<?php echo $turEkleListSatir['id'] ?>"><button class="btn btn-warning">Düzenle</button></a></td>
                            <td><a href="motosiklet_turleri.php?turDeleteID=<?php echo $turEkleListSatir['id'] ?>"><button class="btn btn-danger">Sil</button></a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Tür ekle kayıt modülü Start -->
<?php
if (isset($_POST['kaydet'])) {

    $gorsel = '../assets/img/' . $_FILES['gorsel']['name'];

    if (move_uploaded_file($_FILES['gorsel']['tmp_name'], $gorsel)) {
        $turEkle = $db->prepare('insert into motosiklet_turleri (tur,durum,kullanim_alani,aciklama,gorsel) values (?,?,?,?,?)');
        $turEkle->execute(array($_POST['tur'], $_POST['durum'], $_POST['kullanimAlani'], $_POST['aciklama'], $gorsel));
        if ($turEkle->rowCount()) {
            echo '<script>alert("Yeni Tür Eklendi.")</script><meta http-equiv="refresh" content="0; url=motosiklet_turleri.php">';
        } else {
            echo '<script>alert("Hata oluştu")</script><meta http-equiv="refresh" content="0; url=motosiklet_turleri.php">';
        }
    }
}
?>
<!-- Tür ekle kayıt modülü End -->

<!-- Update Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $turUpdateFetch['tur']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                <!-- Close Button Click Control Start -->
                <script>
                    document.querySelector('#close').addEventListener('click', function(event) {
                        event.preventDefault();
                        if (close) {
                            window.location.href = "motosiklet_turleri.php";
                        }
                    })
                </script>
                <!-- Close Button Click Control End -->
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="turUp" value="<?php echo $turUpdateFetch['tur']; ?>" class="form-control">

                    <select name="durumUp" class="form-control my-2">
                        <option value="<?php echo $turUpdateFetch['durum']; ?>"><?php echo $turUpdateFetch['durum']; ?></option>
                        <option value="Yayında">Yayında</option>
                        <option value="Taslak">Taslak</option>
                    </select>
                    <input type="text" name="kullanimAlaniUp" placeholder="Kullanım Alanı" class="form-control" value="<?php echo $turUpdateFetch['kullanim_alani']; ?>">
                    <textarea name="aciklamaUp" rows="4" class="form-control my-2"><?php echo $turUpdateFetch['aciklama']; ?></textarea>
                    <div style="display: flex; column-gap:5px;">
                        <label for=""><b>Kullanılan Görsel:</b></label>
                        <img src="<?php echo $turUpdateFetch['gorsel'] ?>" alt="" style="max-width: 100px;">
                    </div>
                    <input type="file" name="gorselUp" class="form-control my-2">
                    <input type="submit" value="Güncelle" class="btn btn-success w-100" name="kaydetUp">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Update Modal End -->

<!-- Update Modal Module Start -->
<?php
if (isset($_POST['kaydetUp'])) {
    $gorselUp = '../assets/img/' . $_FILES['gorselUp']['name'];

    if (move_uploaded_file($_FILES['gorselUp']['tmp_name'], $gorselUp)) {

        $guncelle = $db->prepare('update motosiklet_turleri set tur=?, durum=?, kullanim_alani=?, aciklama=?, gorsel=? where id=?');
        $guncelle->execute(array($_POST['turUp'], $_POST['durumUp'], $_POST['kullanimAlaniUp'], $_POST['aciklamaUp'], $gorselUp, $id));

        if ($guncelle->rowCount()) {
            echo '<script>alert("Hizmet Güncellendi")</script><meta http-equiv="refresh" content="0; url=motosiklet_turleri.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=motosiklet_turleri.php">';
        }
    } else {
        $guncelle = $db->prepare('update motosiklet_turleri set tur=?,durum=?,kullanim_alani=?,aciklama=? where id=?');
        $guncelle->execute(array($_POST['turUp'], $_POST['durumUp'], $_POST['kullanimAlaniUp'], $_POST['aciklamaUp'], $id));
        if ($guncelle->rowCount()) {
            echo '<script>alert("Hizmet Güncellendi")</script><meta http-equiv="refresh" content="0; url=motosiklet_turleri.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=motosiklet_turleri.php">';
        }
    }
}
?>
<!-- Update Modal Module End -->





<?php require_once('footer.php'); ?>