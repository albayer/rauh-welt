<?php require_once('header.php');

$id = $_GET['updateID'];
$guncelle = $db->prepare('select * from marka_model where id=?');
$guncelle->execute(array($id));
$guncelleFetch = $guncelle->fetch();
?>
<style>
    .col-md-4 b {
        width: 275px;
    }
</style>
<div class="row">
    <div class="my-2">
        <div class="col-md-6">
            <h3><?php echo $guncelleFetch['model']; ?> Teknik Özellikler</h3>
        </div>
    </div>
</div>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img src="<?php echo $guncelleFetch['gorsel']; ?>" alt="" class="img-fluid w-100 rounded">
                <label><b>Görsel Seçin</b></label>
                <input type="file" name="gorselUP">
                <div class="card-body">
                    <textarea name="aciklamaUP" placeholder="" rows="10" cols="43" class="form-control"><?php echo $guncelleFetch['aciklama']; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-top:63px;">
            <div class="flex">
                <b class="fs-6">Marka</b>:
                <select name="markaUP" class="form-control">
                    <option value="<?php echo $guncelleFetch['marka']; ?>"><?php echo $guncelleFetch['marka']; ?></option>
                    <?php
                    $markalar = $db->prepare('select * from marka order by marka asc');
                    $markalar->execute();
                    foreach ($markalar as $markalarList) {
                    ?>
                        <option value="<?php echo $markalarList['marka']; ?>"><?php echo $markalarList['marka']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="flex my-2">
                <b class="fs-6">Hacim</b>: <input type="text" name="ccUP" value="<?php echo $guncelleFetch['cc']; ?>" class="form-control">
            </div>
            <div class="flex">
                <b class="fs-6">Maksimum Güç</b>: <input type="text" name="kwUP" value="<?php echo $guncelleFetch['kw']; ?>" class="form-control">
            </div>
            <div class="flex my-2">
                <b class="fs-6">Motor Tipi</b>: <input type="text" name="motor_tipiUP" value="<?php echo $guncelleFetch['motor_tipi']; ?>" class="form-control">
            </div>
            <div class="flex">
                <b class="fs-6">Yakıt Kapasitesi</b>: <input type="text" name="yakit_kapasitesiUP" value="<?php echo $guncelleFetch['yakit_kapasitesi']; ?>" class="form-control">
            </div>
            <div class="flex my-2">
                <b class="fs-6">Lastik Ön</b>: <input type="text" name="lastik_onUP" value="<?php echo $guncelleFetch['lastik_on']; ?>" class="form-control">
            </div>
            <div class="flex">
                <b class="fs-6">Boş Kütle</b>: <input type="text" name="bos_kutleUP" value="<?php echo $guncelleFetch['bos_kutle']; ?>" class="form-control">
            </div>
            <div class="flex my-2">
                <b class="fs-6">Koltuk Yükseklik</b>: <input type="text" name="koltuk_yukseklikUP" value="<?php echo $guncelleFetch['koltuk_yukseklik']; ?>" class="form-control">
            </div>
        </div>
        <div class="col-md-4">
            <div class="flex" style="margin-bottom: 22px;">
                <b class="fs-6">Durum</b>:
                <select name="durumUP" class="form-control">
                    <option value="<?php echo $guncelleFetch['durum']; ?>"><?php echo $guncelleFetch['durum']; ?></option>
                    <option value="Aktif">Aktif</option>
                    <option value="Pasif">Pasif</option>
                </select>

            </div>
            <div class="flex my-2">
                <b class="fs-6">Model</b>: <input type="text" name="modelUP" value="<?php echo $guncelleFetch['model']; ?>" class="form-control">
            </div>
            <div class="flex">
                <b class="fs-6">Silindir Sayısı</b>: <input type="text" name="silindirUP" value="<?php echo $guncelleFetch['silindir']; ?>" class="form-control">
            </div>
            <div class="flex my-2">
                <b class="fs-6">Maksimum Tork</b>:<input type="text" name="torkUP" value="<?php echo $guncelleFetch['tork']; ?>" class="form-control">
            </div>
            <div class="flex">
                <b class="fs-6">Model Yılı</b>: <input type="text" name="model_yiliUP" value="<?php echo $guncelleFetch['model_yili']; ?>" class="form-control">
            </div>
            <div class="flex my-2">
                <b class="fs-6">Yakıt Tüketimi</b>: <input type="text" name="yakit_tuketimiUP" value="<?php echo $guncelleFetch['yakit_tuketimi']; ?>" class="form-control">
            </div>

            <div class="flex">
                <b class="fs-6">Lastik Arka</b>: <input type="text" name="lastik_arkaUP" value="<?php echo $guncelleFetch['lastik_arka']; ?>" class="form-control">
            </div>

            <div class="flex my-2">
                <b class="fs-6">Dolu Kütle</b>: <input type="text" name="dolu_kutleUP" value="<?php echo $guncelleFetch['dolu_kutle']; ?>" class="form-control">
            </div>
            <div class="flex">
                <b class="fs-6">Motor Türü</b>:
                <select name="turUP" class="form-control">
                    <option value="<?php echo $guncelleFetch['tur']; ?>"><?php echo $guncelleFetch['tur']; ?></option>
                    <?php
                    $tur = $db->prepare('select * from motosiklet_turleri order by tur asc');
                    $tur->execute();
                    foreach ($tur as $turList) {
                    ?>
                        <option value="<?php echo $turList['tur']; ?>"><?php echo $turList['tur']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <input type="submit" name="guncelle" value="Güncelle" class="btn btn btn-success w-100 mt-4">
        </div>
    </div>
</form>

<?php
if (isset($_POST['guncelle'])) {
    $gorselUP = '../assets/img/' . $_FILES['gorselUP']['name'];

    if (move_uploaded_file($_FILES['gorselUP']['tmp_name'], $gorselUP)) {

        $guncelle = $db->prepare('update marka_model set marka=?, model=?, cc=?, silindir=?, kw=?, tork=?, motor_tipi=?, tur=?, model_yili=?, yakit_kapasitesi=?, yakit_tuketimi=?, lastik_on=?, lastik_arka=?, bos_kutle=?, dolu_kutle=?, koltuk_yukseklik=?, durum=?, aciklama=?, gorsel=? where id=?');
        $guncelle->execute(array($_POST['markaUP'], $_POST['modelUP'], $_POST['ccUP'], $_POST['silindirUP'], $_POST['kwUP'], $_POST['torkUP'], $_POST['motor_tipiUP'], $_POST['turUP'], $_POST['model_yiliUP'], $_POST['yakit_kapasitesiUP'], $_POST['yakit_tuketimiUP'], $_POST['lastik_onUP'], $_POST['lastik_arkaUP'], $_POST['bos_kutleUP'], $_POST['dolu_kutleUP'], $_POST['koltuk_yukseklikUP'], $_POST['durumUP'], $_POST['aciklamaUP'], $gorselUP, $id));

        if ($guncelle->rowCount()) {
            echo '<script>alert("Özellikler Güncellendi")</script><meta http-equiv="refresh" content="0; url=marka-model.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=marka-model.php">';
        }
    } else {
        $guncelle = $db->prepare('update marka_model set marka=?, model=?, cc=?, silindir=?, kw=?, tork=?, motor_tipi=?, tur=?, model_yili=?, yakit_kapasitesi=?, yakit_tuketimi=?, lastik_on=?, lastik_arka=?, bos_kutle=?, dolu_kutle=?, koltuk_yukseklik=?, durum=?, aciklama=? where id=?');
        $guncelle->execute(array($_POST['markaUP'], $_POST['modelUP'], $_POST['ccUP'], $_POST['silindirUP'], $_POST['kwUP'], $_POST['torkUP'], $_POST['motor_tipiUP'], $_POST['turUP'], $_POST['model_yiliUP'], $_POST['yakit_kapasitesiUP'], $_POST['yakit_tuketimiUP'], $_POST['lastik_onUP'], $_POST['lastik_arkaUP'], $_POST['bos_kutleUP'], $_POST['dolu_kutleUP'], $_POST['koltuk_yukseklikUP'], $_POST['durumUP'], $_POST['aciklamaUP'], $id));

        if ($guncelle->rowCount()) {
            echo '<script>alert("Özellikler Güncellendi")</script><meta http-equiv="refresh" content="0; url=marka-model.php">';
        } else {
            echo '<script>alert("Hata Oluştu")</script><meta http-equiv="refresh" content="0; url=marka-model.php">';
        }
    }
}



?>

<?php require_once('footer.php'); ?>