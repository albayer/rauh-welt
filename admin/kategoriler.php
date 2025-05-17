<?php require_once('header.php'); ?>
<div class="row">
    <div class="col-md-6">
        <h3>Kategoriler</h3>
    </div>
    <div class="col-md-6 text-end">
        <button class="btn btn-primary">Tür Ekle</button>
    </div>
    <div class="col-12">

        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>Motosiklet Türü</th>
                    <th>Açıklama</th>
                    <th>Durum</th>
                    <th>Tarih</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <form method="get">
            <input type="text" name="katTur" placeholder="Kategori Türü Girin" class="form-control">
            <input type="text" name="katAciklama" placeholder="Açıklama Girin" class="form-control my-2">
            <input type="submit" value="Kaydet" class="btn btn-success w-100">
        </form>
    </div>
</div>
<?php require_once('footer.php'); ?>