<?php

use yii\helpers\Url;
use yii\bootstrap4\Html;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= Html::encode($this->title) ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= Url::base(true) ?>/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= Url::base(true) ?>/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>"><?= Yii::$app->name ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php
                    $menuItems = [
                        ['label' => 'Home', 'url' => ['/site/index']],
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Produk', 'url' => ['/item/index']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                    ];
                    foreach ($menuItems as $menuItem) :
                    ?>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= Url::base(true) . $menuItem['url'][0] ?>"><?= $menuItem['label']; ?></a></li>
                    <?php endforeach; ?>

            </div>
        </div>
    </nav>
    </ul><?= $content ?>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= Url::base(true) ?>/js/scripts.js"></script>
</body>

</html>