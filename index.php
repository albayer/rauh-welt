<?php
require_once('./header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('./banner.php');
    ?>
    <!-- Models Section Start -->
    <section id="models" class="my-4">
        <div class="container">
            <h3 class="fs-3">Dünyaca Ünlü Motosiklet Markalarından Birkaçını Sizler İçin Seçtik</h3>
            <div class="row">
                <!-- Marka Listeleme Module Start -->
                <?php
                $model = $db->prepare('select * from marka_model order by id desc limit 9');
                $model->execute();
                if ($model->rowCount()) {
                    foreach ($model as $modelList) {
                ?>
                        <div class="col-md-4 my-2">
                            <a href="modeller.php?id=<?php echo $modelList['id']; ?>">
                                <div class="card">
                                    <b class="my-2 text-center fs-5"><?php echo $modelList['marka']; ?> / <?php echo $modelList['model']; ?></b>
                                    <img src="<?php echo substr($modelList['gorsel'], 1); ?>" alt="<?php echo $modelList['model']; ?>" class="rounded">
                                    <b class="ms-2"><?php echo $modelList['tur']; ?></b>
                                    <div class="card-body">
                                        <small>Hacim</small>:<b> <?php echo $modelList['cc']; ?></b><br>
                                        <small>HP</small>:<b> <?php echo $modelList['kw']; ?></b><br>
                                        <small>Motor Tipi</small>:<b> <?php echo $modelList['motor_tipi']; ?></b><br>
                                        <small>Satış Fiyatı</small>:<b> <?php echo $modelList['satis']; ?></b>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
                <!-- Marka Listeleme Module End -->
            </div>
            <div style="display:flex; justify-content:center;">
                <button class="btn btn-success" style="display: flex; flex-direction: row; justify-content: center; margin-top: 15px;">
                    <a href="modeller.php" class="text-white">Tüm Modeller İçin Tıklayınız</a>
                </button>
            </div>
        </div>
    </section>
    <!-- Models Section End -->
    <!-- CTA Section Start -->
    <section id="cta" style="background-color: #000;" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="iletisim.php" class="text-white fs-4">Yol Yardım ve Servis Ağımızla İlgili Hizmet Almak İçin Bizimle İletişime Geçebilirsiniz.</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section End -->
    <!-- Choise Section Start -->
    <section id="choise" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" style="display: flex; align-items:center; flex-direction:column; justify-content:center;">
                    <b class="fs-3">SİZİN MOTOSİKLETİNİZ.SİZİN KURALLARINIZ.</b><br>
                    <b>Motosikletinizi, vizyonunuzu hayata geçiren parçalar ve aksesuarlarla özelleştirin.</b>
                    <a href="aksesuarlar.php" class="pt-4"><button class="btn btn-primary">Aksesuarlara Göz At</button></a>
                </div>
                <div class="col-md-6">
                    <img src="./assets/img/choise.webp" alt="Aksesuar Reklamı İçin Kullanılan Görsel" class="img-fluid" style="margin-left: 12px;">
                </div>
            </div>
        </div>
    </section>
    <!-- Choise Section End -->
    <!-- Email Section Start -->
    <section id="email" style="background-color: #000;" class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-auto">
                    <span class="fs-5 text-white">Fırsatlardan Haberdar Olmak İçin E-Bülten'e Üye Olun</span>
                </div>
                <div class="col-md-6">
                    <form method="get" style="display:flex; flex-direction:row; gap:10px;">
                        <input type="text" name="email" placeholder="Email Adresiniz" class="form-control">
                        <input type="submit" value="Üye Ol" name="uyeol" class="btn btn-success w-25">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Email Section End -->
    <?php
    require_once('./footer.php');
    ?>
</body>

</html>