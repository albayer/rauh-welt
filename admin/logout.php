<?php

session_start();
session_destroy();
?>

<div style="margin-top: 20vh;">
    <div class="spinner-border text-info" role="status">
        <span class="visually-hidden"><p style="text-align:center"><b>Çıkış Yapıldı. Yönlendiriliyorsunuz, Lütfen Bekleyiniz</b></p></span>
    </div>
    
    <meta http-equiv="refresh" content="3; url=index.php">
</div>