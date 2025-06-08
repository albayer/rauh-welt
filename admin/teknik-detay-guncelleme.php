<?php require_once('header.php'); ?>

<?php

$id = $_GET['updateID'];
$guncelle = $db->prepare('select * from marka_model where id=?');
$guncelle->execute(array($id));
$guncelleFetch = $guncelle->fetch();

?>

<div class="row">
    <div class="row my-2">
        <div class="col-md-6">
            <h3><?php echo $guncelleFetch['model']; ?> Teknik Özellikler</h3>
        </div>
    </div>
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
            <select name="markaUP" class="form-control ms-5">
                <option value=""><?php echo $guncelleFetch['marka']; ?></option>
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
        <div class="flex">
            <b class="fs-6">Hacim</b>: <input type="text" name="ccUP" value="<?php echo $guncelleFetch['cc']; ?>" class="form-control ms-5">
        </div>
        <div class="flex">
            <b class="fs-6">Maksimum Güç</b>: <input type="text" name="kwUP" value="<?php echo $guncelleFetch['kw']; ?>" class="form-control ms-2">
        </div>
        <div class="flex">
            <b class="fs-6">Motor Tipi</b>: <input type="text" name="motor_tipiUP" value="<?php echo $guncelleFetch['motor_tipi']; ?>" class="form-control ms-4">
        </div>
        <div class="flex">
            <b class="fs-6">Yakıt Kapasitesi</b>: <input type="text" name="yakit_kapasitesiUP" value="<?php echo $guncelleFetch['yakit_kapasitesi']; ?>" class="form-control">
        </div>
        <div class="flex">
            <b class="fs-6">Lastik Ön</b>: <input type="text" name="lastik_onUP" value="<?php echo $guncelleFetch['lastik_on']; ?>" class="form-control">
        </div>
        <div class="flex">
            <b class="fs-6">Boş Kütle</b>: <input type="text" name="bos_kutleUP" value="<?php echo $guncelleFetch['bos_kutle']; ?>" class="form-control">
        </div>
        <div class="flex">
            <b class="fs-6">Koltuk Yükseklik</b>: <input type="text" name="koltuk_yukseklikUP" value="<?php echo $guncelleFetch['koltuk_yukseklik']; ?>" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div style="margin-bottom: 22px;"><b class="fs-6">Durum</b>: <?php echo $guncelleFetch['durum']; ?>
            <hr>
        </div>
        <div class="flex">
            <select name="modelUP" id="">
                <option value=""><?php echo $guncelleFetch['model']; ?></option>
                <?php 
                
                ?>
            </select>
            <b class="fs-6">Model</b>: <input type="text" name="modelUP" value="<?php echo $guncelleFetch['model']; ?>" class="form-control">
        </div>
        <hr>
        <b class="fs-6">Silindir Sayısı</b>: <?php echo $guncelleFetch['silindir']; ?>
        <hr>
        <b class="fs-6">Maksimum Tork</b>: <?php echo $guncelleFetch['tork']; ?>
        <hr>
        <b class="fs-6">Model Yılı</b>: <?php echo $guncelleFetch['model_yili']; ?>
        <hr>
        <b class="fs-6">Yakıt Tüketimi</b>: <?php echo $guncelleFetch['yakit_tuketimi']; ?>
        <hr>
        <b class="fs-6">Lastik Arka</b>: <?php echo $guncelleFetch['lastik_arka']; ?>
        <hr>
        <b class="fs-6">Dolu Kütle</b>: <?php echo $guncelleFetch['dolu_kutle']; ?>
        <hr>
        <b class="fs-6">Motor Türü</b>: <?php echo $guncelleFetch['tur']; ?>
        <hr>
        <input type="submit" value="Güncelle" class="btn btn btn-success w-100 mt-4">
    </div>

    <div class="col-md-8">

    </div>
</div>

<?php require_once('footer.php'); ?>