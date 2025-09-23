<?php require_once('./header.php'); ?>

<section id="servis" class="py-5">
    <div class="container">
        <div class="row">
            Banner Gelebilir maybe
            <h2 class="text-center pt-4">Satış Sonrası Servis Ağımız</h2>
            <?php
            $servis = $db->prepare('select * from servis');
            $servis->execute();
            if ($servis->rowCount()) {
                foreach ($servis as $servisList) {
            ?>
                    <div class="col-md-4 py-2">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <h3><?php echo $servisList['ad']; ?></h3>
                                <hr>
                                <span><?php echo $servisList['tel']; ?></span><hr>
                                <span class="my-5"><?php echo $servisList['adres']; ?></span><hr>
                                <a href="iletisim.php#form"><button class="btn btn-primary">Hemen Randevu Oluştur</button></a>
                                pop-up ile açıp bu şekilde randevu talebi kaydedilebilir.!
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</section>














<?php require_once('./footer.php'); ?>