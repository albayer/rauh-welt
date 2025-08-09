<?php require_once('header.php'); ?>
<?php
if (isset($_GET['teknikID'])) {
    $teknik = $db->prepare('select * from marka_model where id=?');
    $teknik->execute(array($_GET['teknikID']));
    $teknikFetch = $teknik->fetch();
} else if (isset($_GET['updateID'])) {
    $teknikUp = $db->prepare('select * from marka_model where id=?');
    $teknikUp->execute(array($_GET['updateID']));
    $teknikUpFetch = $teknikUp->fetch();
    echo '  <script>
                document.addEventListener("DOMContentLoaded", function () {
                var myModal = new bootstrap.Modal(document.getElementById("exampleModal"));
                myModal.show();
                });
            </script>';
}

?>

<div class="row">
    <div class="row my-2">
        <div class="col-md-6">
            <h3><?php echo $teknikFetch['model']; ?> Teknik Özellikler</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="teknik-detay-guncelleme.php?updateID=<?php echo $teknikFetch['id']; ?>"><button class="btn btn-warning">Düzenle</button></a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <img src="<?php echo $teknikFetch['gorsel']; ?>" alt="" class="img-fluid w-100 rounded">
            <div class="card-body">
                <?php echo $teknikFetch['aciklama']; ?>
            </div>
        </div>
    </div>
    <div class="col-md-4" style="margin-top:63px;">
        <b class="fs-6">Marka</b>: <?php echo $teknikFetch['marka']; ?>
        <hr>
        <b class="fs-6">Hacim</b>: <?php echo $teknikFetch['cc']; ?>
        <hr>
        <b class="fs-6">Maksimum Güç</b>: <?php echo $teknikFetch['kw']; ?>
        <hr>
        <b class="fs-6">Motor Tipi</b>: <?php echo $teknikFetch['motor_tipi']; ?>
        <hr>
        <b class="fs-6">Yakıt Kapasitesi</b>: <?php echo $teknikFetch['yakit_kapasitesi']; ?>
        <hr>
        <b class="fs-6">Lastik Ön</b>: <?php echo $teknikFetch['lastik_on']; ?>
        <hr>
        <b class="fs-6">Boş Kütle</b>: <?php echo $teknikFetch['bos_kutle']; ?>
        <hr>
        <b class="fs-6">Koltuk Yükseklik</b>: <?php echo $teknikFetch['koltuk_yukseklik']; ?>
        <hr>
        <b class="fs-6">Alış Fiyatı</b>: <?php echo $teknikFetch['alis']; ?> TL
        <hr>
        <b class="fs-6">İskonto Ortanı (%)</b>: <?php echo $teknikFetch['iskonto']; ?>
        <hr>
    </div>
    <div class="col-md-4">
        <div style="margin-bottom: 22px;"><b class="fs-6">Durum</b>: <?php echo $teknikFetch['durum']; ?>
            <hr>
        </div>
        <b class="fs-6">Model</b>: <?php echo $teknikFetch['model']; ?>
        <hr>
        <b class="fs-6">Silindir Sayısı</b>: <?php echo $teknikFetch['silindir']; ?>
        <hr>
        <b class="fs-6">Maksimum Tork</b>: <?php echo $teknikFetch['tork']; ?>
        <hr>
        <b class="fs-6">Model Yılı</b>: <?php echo $teknikFetch['model_yili']; ?>
        <hr>
        <b class="fs-6">Yakıt Tüketimi</b>: <?php echo $teknikFetch['yakit_tuketimi']; ?>
        <hr>
        <b class="fs-6">Lastik Arka</b>: <?php echo $teknikFetch['lastik_arka']; ?>
        <hr>
        <b class="fs-6">Dolu Kütle</b>: <?php echo $teknikFetch['dolu_kutle']; ?>
        <hr>
        <b class="fs-6">Motor Türü</b>: <?php echo $teknikFetch['tur']; ?>
        <hr>
        <b class="fs-6">Satış Fiyatı</b>: <?php echo $teknikFetch['satis']; ?> TL
        <hr>
    </div>
    <div class="col-12">

    </div>
</div>

<!-- Update Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $teknikUpFetch['model']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                <!-- Close Button Click Control Start -->
                <script>
                    document.querySelector('#close').addEventListener('click', function(event) {
                        event.preventDefault();
                        if (close) {
                            window.location.href = "marka-model.php";
                        }
                    })
                </script>
                <!-- Close Button Click Control End -->
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="row my-3">
                        <div class="col-md-6">
                            <select name="marka" class="form-control" required>
                                <option value="">Marka Seçiniz</option>
                                <?php
                                $ustBaslik = $db->prepare('select * from marka_model order by marka asc');
                                $ustBaslik->execute();
                                foreach ($ustBaslik as $ustBaslikList) {
                                ?>
                                    <option value="<?php echo $ustBaslikList['marka']; ?>"><?php echo $ustBaslikList['marka']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="model" placeholder="Model Adını Girin" class="form-control" required>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <input type="text" name="cc" placeholder="Motor Hacmini Girin" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="silindir" placeholder="Silindir Sayısı Girin" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="kw" placeholder="kW Girin(Örn: 75 kW)" class="form-control" required>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-4">
                            <input type="text" name="motor_tipi" placeholder="Motor Tipini Girin" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <select name="tur" class="form-control" required>
                                <option value="">Motor Türünü Seçin</option>
                                <?php
                                $motorTuru = $db->prepare('select * from motosiklet_turleri order by tur asc');
                                $motorTuru->execute();
                                foreach ($motorTuru as $motorTuruList) {
                                ?>
                                    <option value="<?php echo $motorTuruList['tur']; ?>"><?php echo $motorTuruList['tur']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="model_yili" class="form-control" required>
                                <option value="">Model Yılı Seçiniz</option>
                                <?php
                                for ($i = date("Y") + 1; $i > 2010 + 1; $i--) {
                                ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <input type="text" name="yakit_kapasitesi" placeholder="Yakıt Kapasitesini Girin" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="yakit_tuketimi" placeholder="Yakıt Tüketimini Girin" class="form-control" required>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <input type="text" name="lastik_on" placeholder="Ön Lastik Ebatını Girin" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="lastik_arka" placeholder="Arka Lastik Ebatını Girin" class="form-control" required>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <input type="text" name="bos_kutle" placeholder="Boş Ağırlığını Girin" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="dolu_kutle" placeholder="Dolu Ağırlığını Girin" class="form-control" required>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <input type="text" name="koltuk_yukseklik" placeholder="Koltuk Yüksekliğini Girin" class="form-control my-3" required>
                        </div>
                        <div class="col-md-6">
                            <select name="durum" class="form-control">
                                <option value="">Seçiniz</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Pasif">Pasif</option>
                            </select>
                        </div>
                    </div>
                    <textarea name="aciklama" id="aciklama" placeholder="Açıklama Girin" class="form-control" required></textarea>
                    <input type="file" name="gorsel" class="form-control my-3" required>
                    <input type="submit" value="Kaydet" class="btn btn-success w-100" name="kaydet">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Update Modal End -->



<?php require_once('footer.php'); ?>