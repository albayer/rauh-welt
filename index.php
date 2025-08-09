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
    <section id="models" class="my-4">
        <div class="container">
            <div class="row">
                <?php
                $model = $db->prepare('select * from marka_model order by id desc limit 9');
                $model->execute();
                if ($model->rowCount()) {
                    foreach ($model as $modelList) {
                ?>
                        <div class="col-md-4 my-2">
                            <a href="modeller.php?id=<?php echo $modelList['id']; ?>">
                                <div class="card">
                                    <b class="my-2 text-center fs-5"><?php echo $modelList['marka']; ?> / <?php echo $modelList['model']; ?></b>
                                    <img src="<?php echo substr($modelList['gorsel'], 1); ?>" alt="<?php echo $modelList['model']; ?>" class="rounded">
                                    <b class="ms-2"><?php echo $modelList['tur']; ?></b>
                                    <div class="card-body">
                                        <small>Hacim</small>:<b> <?php echo $modelList['cc']; ?></b><br>
                                        <small>HP</small>:<b> <?php echo $modelList['kw']; ?></b><br>
                                        <small>Motor Tipi</small>:<b> <?php echo $modelList['motor_tipi']; ?></b><br>
                                        <small>Satış Fiyatı</small>:<b> <?php echo $modelList['satis']; ?></b>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>











    <?php
    require_once('./footer.php');
    ?>
</body>

</html>