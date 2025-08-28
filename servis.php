<?php require_once('./header.php'); ?>
<section id="servis" class="py-5">
    <div class="container">
        <div class="row">
            Banner Gelebilir maybe
            <h1>Admin paneli yazılacak.!!</h1>
            <h2 class="text-center pt-4">Satış Sonrası Servis Hizmetlerimiz</h2>
            <?php
            $destek = $db->prepare('select * from destek');
            $destek->execute();
            if ($destek->rowCount()) {
                foreach ($destek as $destekList) {
            ?>
                    <div class="col-md-4 py-2">
                        <div class="card shadow">
                            <div class="card-body text-center">
                                <h3>echo Firma Adı</h3>
                                <hr>
                                <span>echo Adres</span><hr>
                                <span class="my-5">echo Telefon</span><hr>
                                <a href="iletisim.php"><button class="btn btn-primary">randevu için tıklayınız</button></a>
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