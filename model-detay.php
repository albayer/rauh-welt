<?php
require_once('./header.php');
?>
<?php
if (isset($_GET['detayId'])) {
    $modelsDetay = $db->prepare('select * from marka_model where id=?');
    $modelsDetay->execute(array($_GET['detayId']));
    $modelsDetayFetch = $modelsDetay->fetch();
}
?>
<!-- modelDetay section Start -->
<section id="modelDetay" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="margin-left: 8%;">
                <p class="fs-5"><?php echo $modelsDetayFetch['model_yili'] ?> | <?php echo $modelsDetayFetch['satis']; ?></p>
                <h2><?php echo $modelsDetayFetch['model']; ?></h2>
            </div>  
        </div>
        <div class="row" style="display: flex; justify-content:center;">
            <div class="col-md-3"><img src="<?php echo substr($modelsDetayFetch['gorsel'], 1); ?>" alt="" class="img-fluid rounded"></div>
            <div class="col-md-7 my-auto">
                <p><?php echo $modelsDetayFetch['aciklama']; ?></p>
            </div>
        </div>

        <div class="row pt-4" style="margin-left: 7%;">
            <div class="col-md-4">
                <ul class="nav nav-underline" id="titles">
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="link1" name="ad1" aria-current="page" href="#notifications">Teknik Özellikler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="link2" name="ad2" href="#gallery">Fotoğraf Galerisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="link3" name="ad3" href="#detay">Detay Bilgiler</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- modelDetay section End -->

<!-- <script>
            let titles = document.querySelector('#titles')
            titles.addEventListener('click', function(event) {
                event.preventDefault()
                secilenBaslik = event.target.dataset.titles
                console.log(secilenBaslik)


            })
        </script> -->

<!-- notifications Section Start -->
<section id="notifications" class="py-3">
    <div class="container">
        <div class="row" style="margin-left: 7%;">
            <div class="col-12">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <td><b>Marka:</b></td>
                            <td><?php echo $modelsDetayFetch['marka']; ?></td>
                            <td><b>Model:</b></td>
                            <td><?php echo $modelsDetayFetch['model']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Hacim:</b></td>
                            <td><?php echo $modelsDetayFetch['cc']; ?></td>
                            <td><b>Silindir:</b></td>
                            <td><?php echo $modelsDetayFetch['silindir']; ?> silindir</td>
                        </tr>
                        <tr>
                            <td><b>HP:</b></td>
                            <td><?php echo $modelsDetayFetch['kw']; ?></td>
                            <td><b>Tork:</b></td>
                            <td><?php echo $modelsDetayFetch['tork']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Motor Tipi:</b></td>
                            <td><?php echo $modelsDetayFetch['motor_tipi']; ?></td>
                            <td><b>Türü:</b></td>
                            <td><?php echo $modelsDetayFetch['tur']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Model Yılı:</b></td>
                            <td><?php echo $modelsDetayFetch['model_yili']; ?></td>
                            <td><b>Yakıt Kapasitesi:</b></td>
                            <td><?php echo $modelsDetayFetch['yakit_kapasitesi']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Yakıt Tüketimi:</b></td>
                            <td><?php echo $modelsDetayFetch['yakit_tuketimi']; ?></td>
                            <td><b>Ön Lastik Ebatı:</b></td>
                            <td><?php echo $modelsDetayFetch['lastik_on']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Arka Lastik Ebatı:</b></td>
                            <td><?php echo $modelsDetayFetch['lastik_arka']; ?></td>
                            <td><b>Boş Kütle:</b></td>
                            <td><?php echo $modelsDetayFetch['bos_kutle']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Dolu Kütle:</b></td>
                            <td><?php echo $modelsDetayFetch['dolu_kutle']; ?></td>
                            <td><b>Koltuk Yüksekliği:</b></td>
                            <td><?php echo $modelsDetayFetch['koltuk_yukseklik']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Satış Fiyatı:</b></td>
                            <td><?php echo $modelsDetayFetch['satis']; ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- notifications Section End -->

<!-- Gallery section Start -->
<section id="gallery" class="py-3">
    <div class="container">
        <div class="row" style="margin-left: 7%;">
            <h3 class="text-center mb-4">Fotoğraf Galerisi</h3>
            <div class="col-12" style="display: flex; column-gap:10px; justify-content:center;">
                <div class="col-md-2">
                    <img src="./assets/img/adventure-motosiklet.webp" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-2">
                    <img src="./assets/img/adventure-motosiklet.webp" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-2">
                    <img src="./assets/img/adventure-motosiklet.webp" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-2">
                    <img src="./assets/img/adventure-motosiklet.webp" alt="" class="img-fluid rounded">
                </div>
                <div class="col-md-2">
                    <img src="./assets/img/adventure-motosiklet.webp" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery section End -->

<!-- detay Section Start -->
<section id="detay" class="py-5">
    <div class="container">
        <h3 class="text-center" style="margin-left: 7%;">Detay Bilgiler</h3>
        <div class="row" style="margin-left: 7%;">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo substr($modelsDetayFetch['gorsel'], 1); ?>" alt="" class="w-100 rounded">
                        </div>
                        <div class="col-md-8">
                            <h3>
                                <?php echo $modelsDetayFetch['marka']; ?>
                                <?php echo $modelsDetayFetch['model']; ?>
                            </h3>
                            <?php echo $modelsDetayFetch['aciklama']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left: 7%; margin-top:3%">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h3>
                                <?php echo $modelsDetayFetch['marka']; ?>
                                <?php echo $modelsDetayFetch['model']; ?>
                            </h3>
                            <?php echo $modelsDetayFetch['aciklama']; ?>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo substr($modelsDetayFetch['gorsel'], 1); ?>" alt="" class="w-100 rounded">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- detay Section End -->


<!-- Script ile teknik özellikler başlığında hangisi seçildiyse onun css'inde display'ini active yapacağız!! -->




<?php require_once('./footer.php'); ?>