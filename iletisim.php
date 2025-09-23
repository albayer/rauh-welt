<?php require_once('./header.php'); ?>

<section id="mapDetail" class="py-5">
    <div class="contanier-fluid">
        <div class="row my-3">
            <div class="col-12 text-center">
                <div class="my-2" style="display: flex;flex-direction: row; justify-content:center; align-items:center;">
                    <h3>İLETİŞİM |</h3><span style="color: #dd3333;"> RAUH WELT MOTORCYCLE</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48219.395129809716!2d29.114217628573915!3d40.943974451260885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac4336e39827f%3A0x608e0ae971e8ddc2!2sMaltepe%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1756309788018!5m2!1str!2str" width="300" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-4">
                <div class="card" style="height: 200px;">
                    <div class="card-body" style="display: flex; flex-direction:column; justify-content:center; align-items:center;">
                        <h5 style="font-weight: bold;">ADRES</h5>
                        <p class="text-center">Lorem İpsun Mahallesi, Dolor Sit Sokak, No:25/4 <br> Maltepe/İstanbul</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 200px;">
                    <div class="card-body" style="display: flex; flex-direction:column; justify-content:center; align-items:center;">
                        <h5 style="font-weight: bold;">MÜŞTERİ HİZMETLERİ</h5>
                        <a style="color: #000;" href="tel:+902160216021">0216 021 60 21</a>
                        <a style="color: #000;" href="tel:+902160216022">0216 021 60 22</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 200px;">
                    <div class="card-body" style="display: flex; flex-direction:column; justify-content:center; align-items:center;">
                        <h5 style="font-weight: bold;">E-POSTA</h5>
                        <a style="color: #000;" href="mailto:rauh-welt@gmail.com">rauh-welt@gmail.com</a>
                        <a style="color: #000;" href="mailto:rauh-welt@hotmail.com">rauh-welt@hotmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="form">
    <div class="container">
        <div class="row mb-4">
            <h4 class="text-center">İletişim Formu</h4>
            <form method="post">
                <input type="text" name="adSoyad" placeholder="Adınız Soyadınız" class="form-control">
                <input type="tel" name="tel" placeholder="Telefon Numaranız" class="form-control my-2">
                <input type="email" name="email" placeholder="Email Adresiniz" class="form-control">
                <textarea name="mesaj" cols="30" class="form-control my-2" placeholder="Yardım almak istediğiniz konuyu kısaca yazınız."></textarea>
                <input type="submit" name="gonder" value="Gönder" class="btn btn-success form-control w-25" style="margin-left:970px;">
            </form>
            <?php
            if (isset($_POST['gonder'])) {
                $mesaj = $db->prepare('insert into mesajlar(adSoyad, tel, email, mesaj) values(?,?,?,?)');
                $mesaj->execute(array($_POST['adSoyad'], $_POST['tel'], $_POST['email'], $_POST['mesaj'],));

                if ($mesaj->rowCount()) {
                    echo '<script>alert("Mesajınız iletildi. En kısa sürede sizinle iletişim kurulacaktır.")</script><meta http-equiv="refresh" content="0; url=iletisim.php">';
                } else {
                    echo '<script>alert("Mesajınız iletilemedi")</script><meta http-equiv="refresh" content="0; url=iletisim.php">';
                }
            }
            ?>
        </div>
    </div>
</section>













<?php require_once('./footer.php'); ?>