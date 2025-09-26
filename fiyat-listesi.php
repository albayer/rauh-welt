<?php require_once('./header.php'); ?>
<?php 
$fiyat=$db->prepare('select * from fiyat_listesi order by id asc limit 1');
$fiyat->execute();
$fiyatFetch=$fiyat->fetch();


?>

<div class="row text-center py-5">
    <div class="col-md-4 m-auto mt-4">
        <div class="card shadow py-5">
            <div class="card-body">
                <a href="<?php echo substr($fiyatFetch['dosya_yolu'],1); ?>" target="_blank" class="fs-4">📥 <?php echo $fiyatFetch['adi']; ?></a>
            </div>
        </div>
    </div>
</div>














<?php require_once('./footer.php'); ?>