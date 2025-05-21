<?php session_start(); ?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Rauh Welt | Login</title>
</head>

<body>
    <section id="login">
        <div class="container">
            <div class="row" style="height:80vh;">
                <div class="col-md-4 m-auto">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="../assets/img/rauh-welt-logo-450x169.png" alt="" class="w-75 mb-3">
                            <form method="post">
                                <input type="text" name="userName" placeholder="Kullanıcı Adınız" class="form-control">
                                <input type="password" name="password" placeholder="Şifreniz" class="form-control my-2">
                                <input type="submit" name="login" value="Giriş Yap" class="btn w-100 text-white" style="background-color: #000;">
                            </form>
                            <!-- Login Module Start -->
                            <?php
                            if (isset($_POST['login'])) {
                                $userName = $_POST['userName'];
                                $password = $_POST['password'];
                                if ($userName == 'admin' && $password == '123') {
                                    echo '<div class="alert alert-success">Kullanıcı Adı ve Şifreniz Doğru</div>
                                    <meta http-equiv="refresh" content="1; url=dashboard.php">';
                                    // kadi den gelen oturumu session'a tanımla demek.
                                    $_SESSION['userName'] = $userName;
                                } else {
                                    echo '<div class="alert alert-danger">Kullanıcı Adı ve/veya Şifreniz Yanlış</div>';
                                }
                            }
                            ?>
                            <!-- Login Module End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<!-- JS Files -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>

</html>