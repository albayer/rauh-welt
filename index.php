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
                            <a href="model-detay.php?detayId=<?php echo $modelList['id']; ?>">
                                <div class="card">
                                    <b class="my-2 text-center fs-5"><?php echo $modelList['marka']; ?> / <?php echo $modelList['model']; ?></b>
                                    <img src="<?php echo substr($modelList['gorsel'], 1); ?>" alt="<?php echo $modelList['model']; ?>" class="rounded img-fluid" style="height: 400px;">
                                    <b class="ms-2"><?php echo $modelList['tur']; ?></b>
                                    <div class="card-body">
                                        <small>Hacim</small>:<b> <?php echo $modelList['cc']; ?></b><br>
                                        <small>HP</small>:<b> <?php echo $modelList['kw']; ?></b><br>
                                        <small>Motor Tipi</small>:<b> <?php echo $modelList['motor_tipi']; ?></b><br>
                                        <small>Satış Fiyatı</small>:<b> <?php echo number_format($modelList['satis'], 2, ',', '.') . " TL";  ?></b><br>
                                        <small>İndirimli Satış Fiyatı</small>:<b> <?php echo number_format($modelList['indirimliSatis'], 2, ',', '.') . " TL";  ?></b>
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
                <div class="col-12 text-center py-5">
                    <a href="iletisim.php#form" class="text-white fs-4">Yol Yardım ve Servis Ağımızla İlgili Hizmet Almak İçin Bizimle İletişime Geçebilirsiniz.</a>
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
                    <b>Motosikletinizi servislerimizde vizyonunuzu hayata geçiren parçalar ve akesuarlarla özelleştirin.</b>
                    <a href="servis.php" class="pt-4"><button class="btn btn-primary">Randevu Alın</button></a>
                </div>
                <div class="col-md-6">
                    <img src="./assets/img/choise.webp" alt="Aksesuar Reklamı İçin Kullanılan Görsel" class="img-fluid" style="margin-left: 12px;">
                </div>
            </div>
        </div>
    </section>
    <!-- Choise Section End -->
    <!-- Email Section Start -->
    <section id="email" style="background-color: #000;" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white text-center">
                    <h4>E-BÜLTENE ÜYE OLUN</h4>
                    <small>Duyurular ve Özel Teklifler İçin</small>
                    <form method="get">
                        <div class="dflex mx-auto mt-4">
                            <input type="email" name="email" placeholder="E-posta adresinizi yazınız" class="form-control w-50">
                            <input type="submit" name="uyeol" value="Üye Ol" class="form-control btn btn-success w-25">
                        </div>
                    </form>
                    <div class="col-md-5 mx-auto pt-4">
                        <small>Kaydolarak Şartlar ve Koşullarımızı ve Gizlilik Politikamızı kabul etmiş olursunuz. Çıkmak için e-postalarımızdaki Aboneliği İptal Et’i tıklayın.</small>
                    </div>
                </div>
                <!-- Email Section module Start -->
                <?php
                if (isset($_GET['uyeol'])) {
                    $mailSys = $db->prepare('insert into ebulten(email) values(?)');
                    $mailSys->execute(array($_GET['email']));
                    if ($mailSys->rowCount()) {
                        echo '<script>alert("Ebültene Başarılı Bir Şekilde Üye Oldunuz.")</script><meta http-equiv="refresh" content="0; url=index.php#email">';
                    } else {
                        echo '<script>alert("Hata oluştu")</script><meta http-equiv="refresh" content="0; url=index.php#email">';
                    }
                }
                ?>
                <!-- Email Section module End -->
            </div>
        </div>
    </section>
    <!-- Email Section End -->
    <!-- Marka Logoları Section Start -->
    <section id="logolarSec" class="py-5 bg-white">
        <div class="container">
            <div class="row text-center" style="display: flex; align-items: center;">
                <div class="col-md-3">
                    <img src="./assets/img/kawasaki.jpg" alt="" class="rounded img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="./assets/img/honda.jpg" alt="" class="rounded img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="./assets/img/yamaha.jpg" alt="" class="rounded img-fluid">
                </div>
                <div class="col-md-3">
                    <img src="./assets/img/suzuki.jpg" alt="" class="rounded img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Marka Logoları Section End -->


    <?php
    require_once('./footer.php');
    ?>
</body>

</html>