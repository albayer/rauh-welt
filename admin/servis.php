<?php require_once('header.php');
if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];
    $servisSil = $db->prepare('delete from servis where id=?');
    $servisSil->execute(array($id));
    if ($servisSil->rowCount()) {
        echo '<script>alert("Servis Silindi")</script><meta http-equiv="refresh" content="0; url=servis.php">';
    } else {
        echo '<script>alert("Servis Silinirken Hata oluştu")</script><meta http-equiv="refresh" content="0; url=servis.php">';
    }
} else if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];
    $updateServis = $db->prepare('select * from servis where id=?');
    $updateServis->execute(array($id));
    $updateServisFetch = $updateServis->fetch();
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
        <h3>Servisler</h3>
    </div>
    <div class="col-md-6 text-end my-2">
        <!-- Button trigger modal -->
        <div class="text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Servis Ekle
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
                        <form method="get">
                            <input type="text" name="adi" class="form-control" placeholder="Servis Adını Yazın">
                            <input type="text" name="adres" class="form-control my-2" placeholder="Servisin Açık Adresini Yazın">
                            <input type="tel" name="tel" class="form-control" placeholder="Servisin Telefon Numarasını Yazın">
                            <input type="submit" name="kaydet" value="Kaydet" class="form-control btn btn-success mt-2">
                        </form>
                        <?php
                        if (isset($_GET['kaydet'])) {
                            $servis = $db->prepare('insert into servis(ad,adres,tel) values(?,?,?)');
                            $servis->execute(array($_GET['adi'], $_GET['adres'], $_GET['tel']));
                            if ($servis->rowCount()) {
                                echo '<script>alert("Yeni Servis Eklendi.")</script><meta http-equiv="refresh" content="0; url=servis.php">';
                            } else {
                                echo '<script>alert("Servis Eklenirken Hata Oluştu.")</script><meta http-equiv="refresh" content="0; url=servis.php">';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Servis Adı</th>
                    <th>Servis Adresi</th>
                    <th>Servis Telefonu</th>
                    <th class="text-center">Düzenle</th>
                    <th class="text-center">Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servisAgi = $db->prepare('select * from servis');
                $servisAgi->execute();
                if ($servisAgi->rowCount()) {
                    foreach ($servisAgi as $servisAgiList) {
                ?>
                        <tr>
                            <td><?php echo $servisAgiList['ad']; ?></td>
                            <td><?php echo $servisAgiList['adres']; ?></td>
                            <td><?php echo $servisAgiList['tel']; ?></td>
                            <td><a href="servis.php?updateID=<?php echo $servisAgiList['id']; ?>"><button class="bg-warning form-control">Düzenle</button></a></td>
                            <td><a href="servis.php?deleteID=<?php echo $servisAgiList['id']; ?>"><button class="bg-danger form-control">Sil</button></a></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Update Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $servisAgiList['ad']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                <!-- Close Button Click Control Start -->
                <script>
                    document.querySelector('#close').addEventListener('click', function(event) {
                        event.preventDefault();
                        if (close) {
                            window.location.href = "servis.php";
                        }
                    })
                </script>
                <!-- Close Button Click Control End -->
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="text" name="adUp" value="<?php echo $servisAgiList['ad']; ?>" class="form-control">
                    <input type="text" name="adresUP" value="<?php echo $servisAgiList['adres']; ?>" class="form-control my-2">
                    <input type="tel" name="telUP" value="<?php echo $servisAgiList['tel']; ?>" class="form-control">
                    <input type="submit" value="Kaydet" name="kaydetUP" class="form-control btn btn-success mt-2">
                </form>
            </div>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>