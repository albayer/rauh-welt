<?php require_once('header.php');
if (isset($_GET['deleteID'])) {
    $id = $_GET['deleteID'];
    $uyelikSil = $db->prepare('delete from ebulten where id=?');
    $uyelikSil->execute(array($id));
    if ($uyelikSil->rowCount()) {
        echo '<script>alert("Üyelik Silindi")</script><meta http-equiv="refresh" content="0; url=ebulten.php">';
    } else {
        echo '<script>alert("Üyelik silinirken hata oluştu")</script><meta http-equiv="refresh" content="0; url=ebulten.php">';
    }
} else if (isset($_GET['updateID'])) {
    $id = $_GET['updateID'];
    $uyelikUp = $db->prepare('select * from ebulten where id=?');
    $uyelikUp->execute(array($id));
    $uyelikUpFetch = $uyelikUp->fetch();
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
        <h3>E-bülten Üye Listesi</h3>
    </div>
    <div class="col-12">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>E-posta Adresi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ebulten = $db->prepare('select * from ebulten');
                $ebulten->execute();
                foreach ($ebulten as $ebultenList) {
                ?>
                    <tr>
                        <td>
                            <?php echo $ebultenList['email']; ?>
                        </td>
                        <td class="text-end">
                            <a href="ebulten.php?updateID=<?php echo $ebultenList['id']; ?>"><button class="btn btn-warning form-control w-25">Düzenle</button></a>
                            <a href="ebulten.php?deleteID=<?php echo $ebultenList['id']; ?>"><button class="btn btn-danger form-control w-25">Sil</button></a>
                        </td>
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
                <h5 class="modal-title" id="exampleModalLabel">Üye Mail Adresi Güncelleme</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                <!-- Close Button Click Control Start -->
                <script>
                    document.querySelector('#close').addEventListener('click', function(event) {
                        event.preventDefault();
                        if (close) {
                            window.location.href = "ebulten.php";
                        }
                    })
                </script>
                <!-- Close Button Click Control End -->
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="text" name="emailUP" value="<?php echo $uyelikUpFetch['email']; ?>" class="form-control">
                    <input type="submit" value="Güncelle" name="guncelleUP" class="btn btn-success w-100 mt-3">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Update Modal End -->
<?php
if (isset($_POST['guncelleUP'])) {
    if ($_POST['emailUP'] == '') {
        echo '<script>alert("Email alanı boş bırakılamaz.")</script><meta http-equiv="refresh" content="0; url=ebulten.php">';
    } else {
        $guncelle = $db->prepare('update ebulten set email=? where id=?');
        $guncelle->execute(array($_POST['emailUP'], $id));
        if ($guncelle->rowCount()) {
            echo '<script>alert("Üye Bilgisi Güncellendi")</script><meta http-equiv="refresh" content="0; url=ebulten.php">';
        } else {
            echo '<script>alert("Üye Bilgisi Güncellenirken Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=ebulten.php">';
        }
    }
}
?>


<?php require_once('footer.php'); ?>