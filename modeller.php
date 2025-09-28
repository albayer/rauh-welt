<?php require_once('./header.php'); ?>

<section id="modelPage" class="py-5">
    <div class="container-fluid">
        <div class="row ms-2">
            <div class="col-md-1 py-5 mt-4">
                <div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Marka Seçiniz
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <?php
                            // Markaları çek
                            $markaSec = $db->prepare('SELECT DISTINCT marka FROM marka_model ORDER BY marka ASC');
                            $markaSec->execute();
                            $markaSecF = $markaSec->fetchAll(PDO::FETCH_ASSOC);

                            if ($markaSecF) {
                                foreach ($markaSecF as $markaSecFList) {
                                    // Link ile filtreleme
                                    echo '<li><a class="dropdown-item" href="modeller.php?marka=' . urlencode($markaSecFList['marka']) . '">' . htmlspecialchars($markaSecFList['marka']) . '</a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-11">
                <!-- Models Section Start -->
                <section id="models" class="py-5">
                    <div class="container">
                        <div class="row">
                            <!-- Marka Listeleme Module Start -->
                            <?php
                            // Eğer filtre varsa sadece seçilen markayı çek
                            if (isset($_GET['marka']) && !empty($_GET['marka'])) {
                                $seciliMarka = $_GET['marka'];
                                $model = $db->prepare('SELECT * FROM marka_model WHERE marka = :marka ORDER BY id DESC');
                                $model->execute(['marka' => $seciliMarka]);
                            } else {
                                // Filtre yoksa tüm markaları çek
                                $model = $db->prepare('SELECT * FROM marka_model ORDER BY id DESC');
                                $model->execute();
                            }

                            if ($model->rowCount()) {
                                foreach ($model as $modelList) {
                            ?>
                                    <div class="col-md-3 mt-4">
                                        <div class="card">
                                            <a href="model-detay.php?detayId=<?php echo $modelList['id']; ?>" class="text-dark text-center">
                                                <b class="my-2 text-center fs-5">
                                                    <small><?php echo htmlspecialchars($modelList['marka']); ?> / <?php echo htmlspecialchars($modelList['model']); ?></small>
                                                </b>
                                                <img src="<?php echo substr($modelList['gorsel'], 1); ?>" alt="<?php echo htmlspecialchars($modelList['model']); ?>" class="rounded img-fluid" style="height: 275px;">
                                            </a>
                                            <b class="ms-2"><?php echo htmlspecialchars($modelList['tur']); ?></b>
                                            <div class="card-body">
                                                <small>Hacim</small>:<b> <?php echo htmlspecialchars($modelList['cc']); ?></b><br>
                                                <small>HP</small>:<b> <?php echo htmlspecialchars($modelList['kw']); ?></b><br>
                                                <small>Motor Tipi</small>:<b> <?php echo htmlspecialchars($modelList['motor_tipi']); ?></b><br>
                                                <small>Satış Fiyatı</small>:<b> <?php echo number_format($modelList['satis'], 2, ',', '.') . " TL"; ?></b><br>
                                                <small>İndirimli Satış Fiyatı</small>:<b> <?php echo number_format($modelList['indirimliSatis'], 2, ',', '.') . " TL"; ?></b>
                                            </div>
                                            <div class="my-2 text-center w-100">
                                                <a href="iletisim.php#form" class="btn btn-warning mb-2">Bilgi Almak için Tıklayın</a>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            } else {
                                echo "<p class='text-center'>Seçilen markaya ait model bulunamadı.</p>";
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
        <li class="page-item disabled"><a class="page-link">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>

<?php require_once('./footer.php'); ?>
