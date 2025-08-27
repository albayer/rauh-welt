<?php require_once('./header.php'); ?>


<section id="modelPage" class="py-5">
    <div class="container-fluid">
        <div class="row ms-2">
            <div class="col-md-1 py-5 mt-4">
                <div>
                    <h5>Marka Seçiniz</h5>
                    <?php
                    $filtre = $db->prepare('select * from marka_model group by marka');
                    $filtre->execute();
                    if ($filtre->rowCount()) {
                        foreach ($filtre as $filtreList) {
                    ?>
                            <a href=""><?php echo $filtreList['marka']; ?></a><br>
                        <?php
                        }
                    }
                    if ($filtreList['marka'] == 'Honda') {
                        ?>
                        <a href=""><?php echo $filtreList['model']; ?></a>
                    <?php
                    } else if ($filtreList['marka'] == 'Kawasaki') {
                    ?>
                        <a href=""><?php echo $filtreList['model']; ?></a>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-11">
                <!-- Models Section Start -->
                <section id="models" class="py-5">
                    <div class="container">
                        <div class="row">
                            <!-- Marka Listeleme Module Start -->
                            <?php
                            $model = $db->prepare('select * from marka_model order by id desc');
                            $model->execute();
                            if ($model->rowCount()) {
                                foreach ($model as $modelList) {
                            ?>
                                    <div class="col-md-3 mt-4">
                                        <div class="card">
                                            <a href="model-detay.php?detayId=<?php echo $modelList['id']; ?>" class="text-dark text-center">
                                                <b class="my-2 text-center fs-5"><?php echo $modelList['marka']; ?> / <?php echo $modelList['model']; ?></b>
                                                <img src="<?php echo substr($modelList['gorsel'], 1); ?>" alt="<?php echo $modelList['model']; ?>" class="rounded img-fluid">
                                            </a>
                                            <b class="ms-2"><?php echo $modelList['tur']; ?></b>
                                            <div class="card-body">
                                                <small>Hacim</small>:<b> <?php echo $modelList['cc']; ?></b><br>
                                                <small>HP</small>:<b> <?php echo $modelList['kw']; ?></b><br>
                                                <small>Motor Tipi</small>:<b> <?php echo $modelList['motor_tipi']; ?></b><br>
                                                <small>Satış Fiyatı</small>:<b> <?php echo $modelList['satis']; ?></b>
                                            </div>
                                            <form method="get" class="my-2 text-center w-100">
                                                <div class="btn btn btn-primary">Sepete Ekle</div>
                                            </form>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                            <!-- Marka Listeleme Module End -->
                        </div>
                    </div>
                </section>
                <!-- Models Section End -->
            </div>
        </div>
    </div>
</section>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>


<?php require_once('./footer.php'); ?>