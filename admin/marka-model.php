<?php require_once('header.php'); ?>
<div class="row">
    <div class="col-md-6">
        <h3>Modeller</h3>
    </div>
    <div class="col-md-6 text-end">
        <!-- Button trigger modal -->
        <div class="text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Yeni Model Ekle
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Yeni Model Ekle</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                        <script>
                            let close = document.querySelector('#close')
                            document.querySelector('#close').addEventListener('click', function(event) {
                                event.preventDefault()
                                if (close) {
                                    window.location.href = "marka-model.php";
                                }
                            })
                        </script>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <select name="marka" class="form-control" required>
                                        <option value="">Marka Seçiniz</option>
                                        <?php
                                        $ustBaslik = $db->prepare('select * from marka order by marka asc');
                                        $ustBaslik->execute();
                                        foreach ($ustBaslik as $ustBaslikList) {
                                        ?>
                                            <option value="<?php echo $ustBaslikList['marka']; ?>"><?php echo $ustBaslikList['marka']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="model" placeholder="Model Adını Girin" class="form-control" required>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <input type="text" name="cc" placeholder="Motor Hacmini Girin" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="silindir" placeholder="Silindir Sayısı Girin" class="form-control" required>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <input type="text" name="kw" placeholder="Maks. kW Girin(Örn: 75 kW)" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="tork" placeholder="Maks. Tork Girin(Örn: 75 nM)" class="form-control" required>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <input type="text" name="motor_tipi" placeholder="Motor Tipini Girin" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <select name="tur" class="form-control" required>
                                        <option value="">Motor Türünü Seçin</option>
                                        <?php
                                        $motorTuru = $db->prepare('select * from motosiklet_turleri order by tur asc');
                                        $motorTuru->execute();
                                        foreach ($motorTuru as $motorTuruList) {
                                        ?>
                                            <option value="<?php echo $motorTuruList['tur']; ?>"><?php echo $motorTuruList['tur']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="model_yili" class="form-control" required>
                                        <option value="">Model Yılı Seçiniz</option>
                                        <?php
                                        for ($i = date("Y") + 1; $i > 2010 + 1; $i--) {
                                        ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <input type="text" name="yakit_kapasitesi" placeholder="Yakıt Kapasitesini Girin" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="yakit_tuketimi" placeholder="Yakıt Tüketimini Girin" class="form-control" required>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <input type="text" name="lastik_on" placeholder="Ön Lastik Ebatını Girin" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="lastik_arka" placeholder="Arka Lastik Ebatını Girin" class="form-control" required>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <input type="text" name="bos_kutle" placeholder="Boş Ağırlığını Girin" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="dolu_kutle" placeholder="Dolu Ağırlığını Girin" class="form-control" required>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <input type="text" name="koltuk_yukseklik" placeholder="Koltuk Yüksekliğini Girin" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <select name="durum" class="form-control">
                                        <option value="">Seçiniz</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Pasif">Pasif</option>
                                    </select>
                                </div>
                            </div>
                            <textarea name="aciklama" id="aciklama" placeholder="Açıklama Girin" class="form-control" required></textarea>
                            <input type="file" name="gorsel" class="form-control my-3" required>
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <input type="text" name="alis" placeholder="Alış Fiyatını Girin" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="satis" placeholder="Satış Fiyatını Girin" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="iskonto" placeholder="İskonto Oranını Girin (%)" class="form-control" required>
                                </div>
                            </div>
                            <input type="submit" value="Kaydet" class="btn btn-success w-100" name="kaydet">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['kaydet'])) {
            $gorsel = '../assets/img/' . $_FILES['gorsel']['name'];
            if (move_uploaded_file($_FILES['gorsel']['tmp_name'], $gorsel)) {
                $modelEkle = $db->prepare('insert into marka_model(marka,model,cc,silindir,kw,tork,motor_tipi,tur,model_yili,yakit_kapasitesi,yakit_tuketimi,lastik_on,lastik_arka,bos_kutle,dolu_kutle,koltuk_yukseklik,durum,aciklama,alis,satis,iskonto,gorsel) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                $modelEkle->execute(array($_POST['marka'], $_POST['model'], $_POST['cc'], $_POST['silindir'], $_POST['kw'], $_POST['tork'], $_POST['motor_tipi'], $_POST['tur'], $_POST['model_yili'], $_POST['yakit_kapasitesi'], $_POST['yakit_tuketimi'], $_POST['lastik_on'], $_POST['lastik_arka'], $_POST['bos_kutle'], $_POST['dolu_kutle'], $_POST['koltuk_yukseklik'], $_POST['durum'], $_POST['aciklama'], $_POST['alis'], $_POST['satis'], $_POST['iskonto'], $gorsel));
                if ($modelEkle->rowCount()) {
                    echo '<script>alert("Kayıt işlemi başarılı")</script><meta http-equiv="refresh" content="0; url=marka-model.php">';
                } else {
                    echo '<script>alert("Hata oluştu")</script><meta http-equiv="refresh" content="0; url=marka-model.php">';
                }
            }
        }
        ?>
    </div>
    <div class="col-12">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th style="width: 150px;">Görsel</th>
                    <th>Marka</th>
                    <th>Model</th>
                    <th>Hacim</th>
                    <th>Silindir Sayısı</th>
                    <th>Türü</th>
                    <th>Yıl</th>
                    <th>Durum</th>
                    <th>Teknik Özellikler</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $modelList = $db->prepare('select * from marka_model order by marka asc');
                $modelList->execute();
                foreach ($modelList as  $modelListAll) {
                ?>
                    <tr>
                        <td><img src="<?php echo $modelListAll['gorsel']; ?>" alt="" class="w-100"></td>
                        <td><?php echo $modelListAll['marka']; ?></td>
                        <td><?php echo $modelListAll['model']; ?></td>
                        <td><?php echo $modelListAll['cc']; ?></td>
                        <td><?php echo $modelListAll['silindir']; ?></td>
                        <td><?php echo $modelListAll['tur']; ?></td>
                        <td><?php echo $modelListAll['model_yili']; ?></td>
                        <td><?php echo $modelListAll['durum']; ?></td>
                        <td><a href="teknik-detay.php?teknikID=<?php echo $modelListAll['id']; ?>"><button class="btn btn-warning">Teknik Özellikler</button></a></td>
                        <td><a href="marka-model.php?deleteID=<?php echo $modelListAll['id']; ?>"><button class="btn btn-danger">Sil</button></a></td>
                    </tr>

                <?php
                }



                ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once('footer.php'); ?>