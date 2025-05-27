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
                                    <select name="ustBaslik" class="form-control" required>
                                        <option value="">Marka Seçiniz</option>
                                        <?php
                                        $ustBaslik = $db->prepare('select * from marka order by marka asc');
                                        $ustBaslik->execute();
                                        foreach ($ustBaslik as $ustBaslikList) {
                                        ?>
                                            <option value=""><?php echo $ustBaslikList['marka']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="baslik" placeholder="Model Adını Girin" class="form-control" required>
                                    </div>
                                    
                                
                            </div>
                            <input type="text" name="cc" placeholder="Motor Hacmini Girin" class="form-control">
                            <input type="text" name="silindir" placeholder="Silindir Sayısı Girin" class="form-control my-3">
                            <input type="text" name="hp" placeholder="HP Girin(Örn: 75 hp)" class="form-control">
                            <input type="text" name="motor_tip" placeholder="Motor Tipini Girin" class="form-control my-3">
                            <select name="model_yili" class="form-control">
                                <option value="">Model Yılı Seçiniz</option>
                                <?php
                                for ($i = 2000; $i <= date("Y") + 1; $i++) {
                                ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <input type="text" name="yakit_kapasite" placeholder="Yakıt Kapasitesini Girin" class="form-control my-3">
                            <input type="text" name="yakit_tuketim" placeholder="Yakıt Tüketimini Girin" class="form-control">
                            <input type="text" name="lastik_on" placeholder="Ön Lastik Ebatını Girin" class="form-control my-3">
                            <input type="text" name="lastik_arka" placeholder="Arka Lastik Ebatını Girin" class="form-control">
                            <input type="text" name="koltuk_yukseklik" placeholder="Koltuk Yüksekliğini Girin" class="form-control my-3">
                            <input type="text" name="bos_kutle" placeholder="Boş Ağırlığını Girin" class="form-control">
                            <input type="text" name="dolu_kutle" placeholder="Dolu Ağırlığını Girin" class="form-control my-3">
                            <!-- CK Editor Start -->
                            <textarea name="aciklama" id="aciklama" placeholder="Açıklama Girin" required></textarea>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#aciklama'))
                                    .then(editor => {
                                        editor.ui.view.editable.element.style.height = '200px';
                                        editor.ui.view.element.style.width = '100%';
                                    })
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                            <!-- CK Editor End -->
                            <label class="mt-3"><b>Görsel Ekle</b></label>
                            <input type="file" name="gorsel" class="form-control mb-3" required>
                            <input type="submit" value="Kaydet" class="btn btn-success w-100" name="kaydet">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>